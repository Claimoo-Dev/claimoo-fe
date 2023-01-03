<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;

class CameraController extends Controller
{
    public function index(Request $request)
    {
        $userCode = Cookie::get('user_code');
        $token = Cookie::get('auth_token');
        
        if (!$token) {
            return redirect('sign-in');
        }

        $latitude = $request->latitude;
        $longitude = $request->longitude;
        $typeCar = $request->type_car;

        if (!$latitude or !$longitude) {
            return redirect()->route('dashboard')->with('error', 'Mohon izinkan kamera & lokasi');
        }

        if (!$typeCar) {
            return redirect()->route('dashboard')->with('error', 'Mohon pilih jenis mobil');
        }

        return view('show-camera')->with(compact('latitude', 'longitude', 'typeCar'));
    }

    public function store(Request $request)
    {
        $userCode = Cookie::get('user_code');
        $token = Cookie::get('auth_token');
        
        if (!$token) {
            return redirect('sign-in');
        }

        $result = Http::withHeaders([
            'X-Channel' => 'cust_mobile_app',
            'Authorization' => $token,
            'Content-Type' => 'application/json'
        ])->get('http://staging.claimoo.com:55777/v1/members/' . $userCode);

        $user = json_decode($result->body());

        $username = $user->data->name;
        $implodeDescription = implode(",", ($request->descriptions ?? []));

        $latitude = $request->latitude;
        $longitude = $request->longitude;
        $descriptions = $request->descriptions;
        $typeCar = $request->type_car;
        $typeFrame = $request->type_frame;
        $image = $request->image;
        $explode = explode(";base64,", $image);
        $decode = base64_decode($explode[1]);

        $folderPath = public_path('images/' . date('Y/m/d/'));
        $fileName = $username . ($implodeDescription ? '-' . $implodeDescription : null) . '-' . date('His') . '.png';
        $file = $folderPath . $fileName;

        if (!is_dir(public_path('images/' . date('Y')))) {
            mkdir(public_path('images/' . date('Y')));
            
            if (!is_dir(public_path('images/' . date('Y/m')))) {
                mkdir(public_path('images/' . date('Y/m')));

                if (!is_dir(public_path('images/' . date('Y/m/d')))) {
                    mkdir(public_path('images/' . date('Y/m/d')));
                }
            }
        }
        
        // file_put_contents($file, $decode);

        $machineLearning = Http::post('http://210.247.245.51:55888/image_quality', [
            'path' => "../../../../../var/www/html/claimoo-fe/public/images/" . date('Y/m/d/') . $fileName,
        ]);

        $response = json_decode($machineLearning->body());

        if ($response->status) {
            $backend = Http::withHeaders([
                'X-Channel' => 'cust_mobile_app',
                'Authorization' => $token,
                'Content-Type' => 'application/json'
            ])->post('http://staging.claimoo.com:55777/v1/upload', [
                'member_code' => $userCode,
                'type_car' => $typeCar,
                'type_frame' => $typeFrame,
                'longitude' => $longitude,
                'latitude' => $latitude,
                'image' => $fileName,
                'description' => $descriptions,
                'status' => $response->status == 1 ? "Foto Layak Proses" : "Foto Tidak Layak Proses",
                'status_description' => $response->gambar ? $response->gambar : null
            ]);
        }

        return response()->json($response);
    }
}
