<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginSaveRequest;
use App\Http\Requests\UserSaveRequest;
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
        $result = Http::withHeaders([
            'X-Channel' => 'cust_mobile_app'
        ])->post('http://staging.claimoo.com:55777/v1/auth/login', [
            'username' => $request->username,
            'password' => $request->password,
        ]);

        $response = json_decode($result->body());

        if ($response->stat_msg == 'Success') {
            return redirect()->route('dashboard')->with('success', 'Berhasil Masuk')->cookie('auth_token', $response->data->token)->cookie('user_code', $response->data->user_code);
        } elseif ($response->stat_msg == 'invalid user or credential') {
            return redirect('sign-in')->with('error', 'Email atau password tidak ditemukan');
        } elseif ($response->stat_msg == 'Account need activated, please check your email') {
            return redirect('sign-in')->with('error', 'Akun butuh aktivasi, silakan periksa email Anda');
        } else {
            return redirect('sign-in')->with('error', 'Terjadi kesalahan');
        }
    }

    public function signUp(UserSaveRequest $request)
    {
        $result = Http::withHeaders([
            'X-Channel' => 'cust_mobile_app'
        ])->post('http://staging.claimoo.com:55777/v1/auth/register', [
            'phone' => 62 . $request->phone,
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'retype_password' => $request->retype_password,
        ]);

        $response = json_decode($result->body());

        if ($response->stat_msg == 'Success') {
            return redirect('sign-in')->with('success', 'Pendaftaran akun berhasil, silakan periksa email Anda untuk aktivasi akun');
        } elseif ($response->stat_msg == 'user already exists') {
            return redirect('sign-up')->with('error', 'Email sudah terdaftar');
        } else {
            return redirect('sign-up')->with('error', 'Terjadi Kesalahan');
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

        return redirect('sign-in')->with('success', 'Berhasil keluar');
    }

    public function verifiedEmail(Request $request)
    {
        $result = Http::withHeaders([
            'X-Channel' => 'cust_mobile_app'
        ])->post('http://staging.claimoo.com:55777/v1/auth/checktoken-email', [
            'email' => $request->email,
            'token' => $request->token
        ]);

        $response = json_decode($result->body());

        if ($response->stat_msg == 'Success') {
            return redirect('sign-in')->with('success', 'Verifikasi Email Berhasil');
        } else {
            return abort(404);
        }
    }

    public function sendLinkForgotPassword(Request $request)
    {
        $result = Http::withHeaders([
            'X-Channel' => 'cust_mobile_app'
        ])->post('http://staging.claimoo.com:55777/v1/auth/forgotpass', [
            'username' => $request->username
        ]);

        $response = json_decode($result->body());

        if ($response->stat_msg == 'Success') {
            return back()->with('success', 'URL lupa kata sandi telah terkirim ke email Anda');
        } elseif ($response->stat_msg == 'Account need activated, please check your email') {
            return back()->with('error', 'Akun butuh aktivasi, silakan periksa email Anda');
        } else {
            return back()->with('error', 'Terjadi kesahalan');
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
        ])->post('http://staging.claimoo.com:55777/v1/auth/change-pass', [
            'username' => $request->username,
            'password' => $request->password,
            'retype_password' => $request->retype_password
        ]);

        $response = json_decode($result->body());

        if ($response->stat_msg == 'Success') {
            return redirect('sign-in')->with('success', 'Password berhasil diubah');
        } else {
            return back()->with('error', 'Something Wrong');
        }
    }
}
