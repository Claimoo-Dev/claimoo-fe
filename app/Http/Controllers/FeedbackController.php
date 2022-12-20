<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;

class FeedbackController extends Controller
{
    public function index()
    {
        $userCode = Cookie::get('user_code');
        $token = Cookie::get('auth_token');

        if (!$token) {
            return redirect('sign-in');
        }

        return view('feedback');
    }

    public function create(Request $request)
    {
        $userCode = Cookie::get('user_code');
        $token = Cookie::get('auth_token');

        if (!$token) {
            return redirect('sign-in');
        }

        if ($request->file) {
            $fileName = time() . '.' . $request->file->extension();  
            $request->file->move(public_path('uploads'), $fileName);
        }

        $result = Http::withHeaders([
            'X-Channel' => 'cust_mobile_app',
            'Authorization' => $token,
            'Content-Type' => 'application/json'
        ])->post('http://staging.claimoo.com:9100/v1/feedback', [
            'member_code' => $userCode,
            'description' => $request->description,
            'file' => $fileName ?? null,
        ]);

        $response = json_decode($result->body());

        if ($response->stat_msg == 'Success') {
            return back()->with('success', 'Feedback sent successfully');
        } else {
            return back()->with('error', 'Something Wrong');
        }
    }
}
