<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControllers extends Controller
{
    public function index()
    {
        return view('user.home');
    }
    public function indexs()
    {
        return view('attendance');
    }
}
