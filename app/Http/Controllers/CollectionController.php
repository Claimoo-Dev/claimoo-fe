<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\CollectionDescription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;

class CollectionController extends Controller
{
    public function index(Request $request)
    {
        $userCode = Cookie::get('user_code');
        $token = Cookie::get('auth_token');
        
        if (!$token) {
            return redirect('sign-in');
        }

        $typeCar = Cookie::get('type_car');

        if (!$typeCar) {
            return redirect()->route('dashboard')->with('error', 'Mohon pilih jenis mobil');
        }

        return view('collection.camera');
    }

    public function uploadImageDashboard(Request $request)
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
        
        $imageName = $username . '-' . date('His') . '.' . $request->image->extension();       
        $request->image->move(public_path('images/' . date('Y/m/d/')), $imageName);

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

        Cookie::queue('image_file_source', date('Y/m/d/') . $imageName, 60);

        return to_route('collection-image');
    }

    public function uploadImage(Request $request)
    {
        $userCode = Cookie::get('user_code');
        $token = Cookie::get('auth_token');
        $typeCar = Cookie::get('type_car');
        
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
        $typeFrame = $request->type_frame;
        $image = $request->image;
        $explode = explode(";base64,", $image);
        $decode = base64_decode($explode[1]);

        $folderPath = public_path('images/' . date('Y/m/d/'));
        $fileName = $username . '-' . date('His') . '.png';
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

        $path = public_path('images/' . date('Y/m/d/')) . $fileName;
        $original = imagecreatefrompng($path);
        $rotated = imagerotate($original, 90, 0);
        imagepng($rotated, public_path('images/' . date('Y/m/d/')) . $fileName);

        Cookie::queue('image_file_source', date('Y/m/d/') . $fileName, 60);

        return response()->json(true);
    }

    public function image()
    {
        $userCode = Cookie::get('user_code');
        $token = Cookie::get('auth_token');
        
        if (!$token) {
            return redirect('sign-in');
        }

        $imageFileSource = Cookie::get('image_file_source');

        if (!$imageFileSource) {
            return redirect()->route('dashboard')->with('error', 'Mohon pilih jenis mobil');
        }

        return view('collection.image', compact('imageFileSource'));
    }

    public function storeDescription(Request $request)
    {
        $userCode = Cookie::get('user_code');
        $token = Cookie::get('auth_token');
        
        if (!$token) {
            return redirect('sign-in');
        }

        $typeCar = Cookie::get('type_car');
        $typeFrame = Cookie::get('type_frame');
        $imageFileSource = Cookie::get('image_file_source');

        if (!$imageFileSource) {
            return redirect()->route('dashboard')->with('error', 'Mohon pilih jenis mobil');
        }

        $result = Http::withHeaders([
            'X-Channel' => 'cust_mobile_app',
            'Authorization' => $token,
            'Content-Type' => 'application/json'
        ])->get('http://staging.claimoo.com:55777/v1/members/' . $userCode);

        $user = json_decode($result->body());

        $collection                     = new Collection();
        $collection->member_code        = $user->data->member_code;
        $collection->type_car           = $typeCar;
        $collection->type_frame         = $typeFrame;
        $collection->image              = $imageFileSource;
        $collection->damage_severity    = $request->damage_severity;
        $collection->estimated_cost     = $request->estimated_cost;
        $collection->save();

        foreach ($request->descriptions ?? [] as $descriptionItem) {
            $description                = new CollectionDescription();
            $description->collection_id = $collection->id;
            $description->description   = $descriptionItem;
            $description->save();
        }

        return redirect()->route('dashboard')->with('success', 'Data berhasil disimpan');
    }
}
