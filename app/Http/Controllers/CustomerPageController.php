<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerPageController extends Controller
{
    public function index()
    {
        return view('customer.index');
    }

    public function dashboard()
    {
        return view('customer.dashboard');
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
}
