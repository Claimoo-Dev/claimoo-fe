<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class CameraController extends Controller
{
    public function index(Request $request)
    {
        $userId = $request->user_id;

        if (!$userId) {
            return redirect('/');
        }

        return view('show-camera')->with(compact('userId'));
    }

    public function indexTesting(Request $request)
    {
        $userId = $request->user_id;
        $latitude = $request->latitude;
        $longitude = $request->longitude;

        if (!$userId or !$latitude or !$longitude) {
            return redirect('/');
        }

        return view('show-camera-testing')->with(compact('userId', 'latitude', 'longitude'));
    }

    public function store(Request $request)
    {
        $userId = $request->user_id;
        $latitude = $request->latitude;
        $longitude = $request->longitude;

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

        $user = new Image();
        $user->image = $fileName;
        $user->user_id = $userId;
        $user->latitude = $latitude;
        $user->longitude = $longitude;
        $user->save();
    
        return view('show-camera')->with(compact('userId'));
    }
}
