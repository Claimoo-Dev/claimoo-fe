<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;

class CustomerPageController extends Controller
{
    public function index()
    {
        return view('customer.index');
    }

    public function dashboard()
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

        if ($user->stat_msg != "Success") {
            return redirect('sign-in');
        }

        $apiDashboard = Http::withHeaders([
            'X-Channel' => 'cust_mobile_app',
            'Authorization' => $token,
            'Content-Type' => 'application/json'
        ])->get('http://staging.claimoo.com:55777/v1/dashboard?member_code=' . $userCode);

        $dashboard = json_decode($apiDashboard->body());

        return view('customer.dashboard')->with(compact('user', 'dashboard', 'token'));
    }

    public function company()
    {
        return view('customer.company');
    }

    public function commissionerDirector()
    {
        return view('customer.commissioner_director');
    }

    public function expert()
    {
        return view('customer.expert');
    }

    public function partner()
    {
        return view('customer.partner');
    }

    public function shop()
    {
        return view('customer.shop');
    }

    public function claim()
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

        if ($user->stat_msg != "Success") {
            return redirect('sign-in');
        }

        $type = 'free';

        return view('customer.claim')->with(compact('type'));
    }

    public function support()
    {
        return view('customer.support');
    }
}
