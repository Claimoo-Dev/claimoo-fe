<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;

class ClaimController extends Controller
{
    public function listYear()
    {
        $userCode = Cookie::get('user_code');
        $token = Cookie::get('auth_token');
        
        if (!$token) {
            return redirect('sign-in');
        }

        $backend = Http::withHeaders([
            'X-Channel' => 'cust_mobile_app',
            'Authorization' => $token,
            'Content-Type' => 'application/json'
        ])->get("http://staging.claimoo.com:55777/v1/databank-car/tahun");

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

        $backend = Http::withHeaders([
            'X-Channel' => 'cust_mobile_app',
            'Authorization' => $token,
            'Content-Type' => 'application/json'
        ])->get("http://staging.claimoo.com:55777/v1/databank-car/merek?limit=50&tahun=". $year);

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

        $backend = Http::withHeaders([
            'X-Channel' => 'cust_mobile_app',
            'Authorization' => $token,
            'Content-Type' => 'application/json'
        ])->get("http://staging.claimoo.com:55777/v1/databank-car/tipe?limit=100&tahun=". $year . "&merek=" . $brand);

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

        $backend = Http::withHeaders([
            'X-Channel' => 'cust_mobile_app',
            'Authorization' => $token,
            'Content-Type' => 'application/json'
        ])->get("http://staging.claimoo.com:55777/v1/databank-car/seri?limit=100&tahun=". $year . "&merek=" . $brand . "&tipe=" . $type);

        $result = json_decode($backend->body());

        return response()->json($result);
    }
}
