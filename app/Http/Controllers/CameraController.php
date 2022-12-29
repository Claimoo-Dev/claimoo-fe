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

        $latitude = $request->latitude;
        $longitude = $request->longitude;
        $descriptions = $request->descriptions;
        $typeCar = $request->type_car;
        $typeFrame = $request->type_frame;

        $img = $request->image;
        $folderPath = public_path('images/');
        $explode = explode(";base64,", $img);
        $decode = base64_decode($explode[1]);
        $fileName = uniqid() . '.png';

        $file = $folderPath . $fileName;

        if (!is_dir(public_path('images'))) {
            mkdir(public_path('images'));

            file_put_contents($file, $decode);
        } else {
            file_put_contents($file, $decode);
        }

        // $machineLearning = Http::post('http://210.247.245.51:55888/image_quality', [
        //     'path' => "../../../../../var/www/html/claimoo-fe/public/images/" . $fileName,
        // ]);

        // $backend = Http::withHeaders([
        //     'X-Channel' => 'cust_mobile_app',
        //     'Authorization' => $token,
        //     'Content-Type' => 'application/json'
        // ])->post('http://staging.claimoo.com:55777/v1/upload', [
        //     'member_code' => $userCode,
        //     'type_car' => $typeCar,
        //     'type_frame' => $typeFrame,
        //     'longitude' => $longitude,
        //     'latitude' => $latitude,
        //     'image' => $fileName,
        //     'description' => $descriptions
        // ]);

        // $response = json_decode($machineLearning->body());

        // return response()->json($response);
    }
}
