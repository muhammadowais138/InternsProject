<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class HomeControllers extends Controller
{
    //
    public function index()
    {
        return view('user.home');
    }
    public function show()
    {
        $user = User::all();
        return view('user.index', compact('user'));
    }
}
