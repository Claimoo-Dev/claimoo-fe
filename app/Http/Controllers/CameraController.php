<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CameraController extends Controller
{
    public function index(Request $request)
    {
        $userId = $request->user_id;
        $typeId = $request->type_id;

        return redirect('show-camera')->with(compact('userId', 'typeId'));

        // return view('camera')->with(compact('userId', 'typeId'));
    }

    public function store(Request $request)
    {
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
    
        return true;
    }
}
