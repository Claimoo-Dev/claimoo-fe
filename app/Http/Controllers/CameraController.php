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

        if (!is_dir(public_path('images'))) {
            mkdir(public_path('images'));    
        }

        if (!is_dir(public_path('images/' . date('Y')))) {
            mkdir(public_path('images/' . date('Y')));    
        }

        if (!is_dir(public_path('images/' . date('Y/m')))) {
            mkdir(public_path('images/' . date('Y/m')));
        }

        if (!is_dir(public_path('images/' . date('Y/m/d')))) {
            mkdir(public_path('images/' . date('Y/m/d')));
        }
        
        file_put_contents($file, $decode);

        // Load the original file into GD
        $path = public_path('images/' . date('Y/m/d/')) . $fileName;
        $original = imagecreatefrompng($path);

        // Rotate the image by 90 degrees
        $rotated = imagerotate($original, 90, 0);

        // Save the rotated image
        imagepng($rotated, public_path('images/' . date('Y/m/d/')) . $fileName);

        $machineLearning = Http::post('http://210.247.245.51:55888/image_quality', [
            'path' => "../../../../../var/www/claimoo-fe/public/images/" . date('Y/m/d/') . $fileName,
        ]);

        $response = json_decode($machineLearning->body());

        if ($machineLearning->ok()) {
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
                'status' => $response->status == 1 ? "1" : "0",
                'identification' => $response->identifikasi,
                'image_description' => $response->gambar,
                'result_description' => $response->hasil
            ]);
        }

        return response()->json($response);
    }

    public function listImage()
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

        return view('list-image')->with(compact('user', 'token'));
    }

    public function listImageUser(Request $request)
    {
        $userCode = Cookie::get('user_code');
        $token = Cookie::get('auth_token');
        
        if (!$token) {
            return redirect('sign-in');
        }

        $startDate = $request->start_date;
        $endDate = $request->end_date;
        $page = $request->page;

        $backend = Http::withHeaders([
            'X-Channel' => 'cust_mobile_app',
            'Authorization' => $token,
            'Content-Type' => 'application/json'
        ])->get("http://staging.claimoo.com:55777/v1/upload?member_code=" . $userCode . "&status=0&limit=10&start_date=" . $startDate . "&end_date=" . $endDate . "&page=" . $page);

        $result = json_decode($backend->body());

        return response()->json($result);
    }
}
