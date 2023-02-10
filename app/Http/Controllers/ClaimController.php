<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;

class ClaimController extends Controller
{
    public function listYear(Request $request)
    {
        $userCode = Cookie::get('user_code');
        $token = Cookie::get('auth_token');
        
        if (!$token) {
            return redirect('sign-in');
        }

        $search = $request->search;

        $backend = Http::withHeaders([
            'X-Channel' => 'cust_mobile_app',
            'Authorization' => $token,
            'Content-Type' => 'application/json'
        ])->get("http://staging.claimoo.com:55777/v1/databank-car/tahun?tahun=" . $search);

        $result = json_decode($backend->body());

        return response()->json($result);
    }

    public function listCarBrandByYear(Request $request)
    {
        $userCode = Cookie::get('user_code');
        $token = Cookie::get('auth_token');
        
        if (!$token) {
            return redirect('sign-in');
        }

        $year = $request->year;
        $search = $request->search;

        $backend = Http::withHeaders([
            'X-Channel' => 'cust_mobile_app',
            'Authorization' => $token,
            'Content-Type' => 'application/json'
        ])->get("http://staging.claimoo.com:55777/v1/databank-car/merek?sort=asc&limit=50&tahun=". $year . '&merek=' . $search);

        $result = json_decode($backend->body());

        return response()->json($result);
    }

    public function listCarTypeByCarBrand(Request $request)
    {
        $userCode = Cookie::get('user_code');
        $token = Cookie::get('auth_token');
        
        if (!$token) {
            return redirect('sign-in');
        }

        $year = $request->year;
        $brand = $request->brand;
        $search = $request->search;

        $backend = Http::withHeaders([
            'X-Channel' => 'cust_mobile_app',
            'Authorization' => $token,
            'Content-Type' => 'application/json'
        ])->get("http://staging.claimoo.com:55777/v1/databank-car/tipe?sort=asc&limit=100&tahun=". $year . "&merek=" . $brand . '&tipe=' . $search);

        $result = json_decode($backend->body());

        return response()->json($result);
    }

    public function listCarSeriByCarType(Request $request)
    {
        $userCode = Cookie::get('user_code');
        $token = Cookie::get('auth_token');
        
        if (!$token) {
            return redirect('sign-in');
        }

        $year = $request->year;
        $brand = $request->brand;
        $type = $request->type;
        $search = $request->search;

        $backend = Http::withHeaders([
            'X-Channel' => 'cust_mobile_app',
            'Authorization' => $token,
            'Content-Type' => 'application/json'
        ])->get("http://staging.claimoo.com:55777/v1/databank-car/seri?sort=asc&limit=100&tahun=". $year . "&merek=" . $brand . "&tipe=" . $type . '&seri=' . $search);

        $result = json_decode($backend->body());

        return response()->json($result);
    }

    public function listPlate(Request $request)
    {
        $userCode = Cookie::get('user_code');
        $token = Cookie::get('auth_token');
        
        if (!$token) {
            return redirect('sign-in');
        }

        $keyword = $request->keyword;

        $backend = Http::withHeaders([
            'X-Channel' => 'cust_mobile_app',
            'Authorization' => $token,
            'Content-Type' => 'application/json'
        ])->get("http://staging.claimoo.com:55777/v1/vehicle-plate?limit=100&sort=asc&keyword=" . $keyword);

        $result = json_decode($backend->body());

        return response()->json($result);
    }

    public function getPriceCar(Request $request)
    {
        $userCode = Cookie::get('user_code');
        $token = Cookie::get('auth_token');
        
        if (!$token) {
            return redirect('sign-in');
        }

        $year = $request->year;
        $brand = $request->brand;
        $type = $request->type;
        $seri = $request->seri;

        $backend = Http::withHeaders([
            'X-Channel' => 'cust_mobile_app',
            'Authorization' => $token,
            'Content-Type' => 'application/json'
        ])->get("http://staging.claimoo.com:55777/v1/databank-car?tahun=" . $year . "&merek="  . $brand . "&tipe=" . $type . "&seri=" . $seri);

        $result = json_decode($backend->body());

        return response()->json($result);
    }
}
