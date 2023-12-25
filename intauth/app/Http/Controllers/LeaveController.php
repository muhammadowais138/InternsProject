<?php

namespace App\Http\Controllers;
use App\Models\Leave;


use Illuminate\Http\Request;

class LeaveController extends Controller
{
    public function index()
    {
        return view('leaves.index');
        
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required|date',
            'leave' => 'required',

        ]);

        Leave::create($request->all());

        return redirect()->route('user.home')
             ->with('success', 'Attendance mark  successfully!');
    }
}
