<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginSaveRequest;
use App\Http\Requests\UserSaveRequest;
use GuzzleHttp\Exception\ConnectException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function signInForm()
    {
        return view('auth.sign-in');
    }

    public function signIn(LoginSaveRequest $request)
    {
        try {
            $result = Http::withHeaders([
                'X-Channel' => 'cust_mobile_app'
            ])->post('http://staging.claimoo.com:9100/v1/auth/login', [
                'username' => $request->username,
                'password' => $request->password,
            ]);
            $response = json_decode($result->body());
        } catch (ConnectException $e) {
            $response['message'] = $e->getMessage();
        }

        return $response;

        // $result = Http::withHeaders([
        //     'X-Channel' => 'cust_mobile_app'
        // ])->post('http://staging.claimoo.com:9100/v1/auth/login', [
        //     'username' => $request->username,
        //     'password' => $request->password,
        // ]);

        // $response = json_decode($result->body());

        // if ($response->stat_msg == 'Success') {
        //     return redirect('dashboard')->with('success', 'Sign In Successfully')->cookie('auth_token', $response->data->token)->cookie('user_code', $response->data->user_code);
        // } else {
        //     return redirect('sign-in')->with('error', 'Account need activated, please check your email');
        // }
    }

    public function signUp(UserSaveRequest $request)
    {
        $result = Http::withHeaders([
            'X-Channel' => 'cust_mobile_app'
        ])->post('http://staging.claimoo.com:9100/v1/auth/register', [
            'phone' => 62 . $request->phone,
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'retype_password' => $request->retype_password,
        ]);

        $response = json_decode($result->body());

        if ($response->stat_msg == 'Success') {
            return redirect('sign-in')->with('success', 'Sign Up Successfully');
        } else {
            return redirect('sign-up')->with('error', 'Something Wrong');
        }
    }

    public function signOut()
    {
        Cookie::queue(
            Cookie::forget('auth_token')
        );

        Cookie::queue(
            Cookie::forget('user_code')
        );

        return true;
    }

    public function verifiedEmail(Request $request)
    {
        $result = Http::withHeaders([
            'X-Channel' => 'cust_mobile_app'
        ])->post('http://staging.claimoo.com:9100/v1/auth/checktoken-email', [
            'email' => $request->email,
            'token' => $request->token
        ]);

        $response = json_decode($result->body());

        if ($response->stat_msg == 'Success') {
            return redirect('sign-in')->with('success', 'Email Verification Successfully');
        } else {
            return abort(404);
        }
    }

    public function sendLinkForgotPassword(Request $request)
    {
        $result = Http::withHeaders([
            'X-Channel' => 'cust_mobile_app'
        ])->post('http://staging.claimoo.com:9100/v1/auth/forgotpass', [
            'username' => $request->username
        ]);

        $response = json_decode($result->body());

        if ($response->stat_msg == 'Success') {
            return back()->with('success', 'Forgot password URL has been sent to your email');
        } else {
            return back()->with('error', 'Account need activated, please check your email');
        }
    }

    public function requestResetPassword(Request $request)
    {
        $email = $request->email;
        $token = $request->token;

        return view('auth.reset-password')->with(compact('email', 'token'));
    }

    public function resetPassword(Request $request)
    {
        $result = Http::withHeaders([
            'X-Channel' => 'cust_mobile_app'
        ])->post('http://staging.claimoo.com:9100/v1/auth/change-pass', [
            'username' => $request->username,
            'password' => $request->password,
            'retype_password' => $request->retype_password
        ]);

        $response = json_decode($result->body());

        if ($response->stat_msg == 'Success') {
            return redirect('sign-in')->with('success', 'Password Updated Successfully');
        } else {
            return back()->with('error', 'Something Wrong');
        }
    }
}
