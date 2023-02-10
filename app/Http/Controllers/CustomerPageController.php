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

    public function shopProduct()
    {
        $userCode = Cookie::get('user_code');
        $token = Cookie::get('auth_token');
        $plate = Cookie::get('plate');
        $brand = Cookie::get('brand');
        $type = Cookie::get('type');
        $seri = Cookie::get('seri');
        $totalPrice = Cookie::get('total_price');
        $orderId = Cookie::get('order_id');
        
        if (!$token) {
            return redirect('sign-in');
        }

        $result = Http::withHeaders([
            'X-Channel' => 'cust_mobile_app',
            'Authorization' => $token,
            'Content-Type' => 'application/json'
        ])->get('http://staging.claimoo.com:55777/v1/insurance/product?price=' . $totalPrice);

        $products = json_decode($result->body());
        $count = count($products->data);

        return view('customer.shop-product')->with(compact('products', 'count', 'plate', 'brand', 'type', 'seri', 'totalPrice', 'orderId'));
    }
    
    public function shopDetail($id)
    {
        $userCode = Cookie::get('user_code');
        $token = Cookie::get('auth_token');
        $totalPrice = Cookie::get('total_price');
        $orderId = Cookie::get('order_id');
        
        if (!$token) {
            return redirect('sign-in');
        }

        $result = Http::withHeaders([
            'X-Channel' => 'cust_mobile_app',
            'Authorization' => $token,
            'Content-Type' => 'application/json'
        ])->get('http://staging.claimoo.com:55777/v1/insurance/product/detail/' . $id . '?price=' . $totalPrice);

        $product = json_decode($result->body());

        return view('customer.shop-detail')->with(compact('product', 'orderId'));
    }

    public function shopFeature()
    {
        $userCode = Cookie::get('user_code');
        $token = Cookie::get('auth_token');
        $orderId = Cookie::get('order_id');
        $premiPerYear = 0;
        
        if (!$token) {
            return redirect('sign-in');
        }

        $result = Http::withHeaders([
            'X-Channel' => 'cust_mobile_app',
            'Authorization' => $token,
            'Content-Type' => 'application/json'
        ])->get('http://staging.claimoo.com:55777/v1/insurance/risk-expansion?member_code=' . $userCode . '&order_polis_id=' . $orderId);

        $risks = json_decode($result->body());
        $count = count($risks->data);

        return view('customer.shop-feature')->with(compact('risks', 'premiPerYear', 'count', 'orderId'));
    }

    public function shopPersonalData()
    {
        $totalPremi = Cookie::get('total_premi');

        return view('customer.shop-personal-data')->with(compact('totalPremi'));
    }

    public function shopCarData()
    {
        $totalPremi = Cookie::get('total_premi');
        $plate = Cookie::get('plate');

        return view('customer.shop-car-data')->with(compact('totalPremi', 'plate'));
    }

    public function shopCheckout()
    {
        $userCode = Cookie::get('user_code');
        $token = Cookie::get('auth_token');
        $orderId = Cookie::get('order_id');
        
        if (!$token) {
            return redirect('sign-in');
        }

        $result = Http::withHeaders([
            'X-Channel' => 'cust_mobile_app',
            'Authorization' => $token,
            'Content-Type' => 'application/json'
        ])->get('http://staging.claimoo.com:55777/v1/order/polis/summary?member_code=' . $userCode . '&order_polis_id=' . $orderId);

        $data = json_decode($result->body());

        return view('customer.shop-checkout')->with(compact('data'));
    }
}
