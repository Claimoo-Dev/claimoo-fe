<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function index()
    {
        $userCode = Cookie::get('user_code');
        $token = Cookie::get('auth_token');
        
        if (!$token) {
            return redirect('sign-in');
        }

        // hit api cek user by token
        $result = Http::withHeaders([
            'X-Channel' => 'cust_mobile_app',
            'Authorization' => $token,
            'Content-Type' => 'application/json'
        ])->get('http://staging.claimoo.com:55777/v1/members/' . $userCode);

        $user = json_decode($result->body());

        return view('dashboard')->with(compact('user'));
    }
}
