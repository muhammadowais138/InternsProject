<?php

namespace App\Http\Controllers;
use App\Models\Attendance;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required|date',
        ]);

        Attendance::create($request->all());

        return redirect()->route('user.home')
             ->with('success', 'Attendance mark  successfully!');
    }
    public function index()
    {
        return view('user.home');
        
    }
    public function indexs()
    {
        $attendances = Attendance::all();
        return view('attendanceindex', compact('attendances'));
    }
    public function ind()
    {
        $attendances = Attendance::all();
        return view('attendanceView', compact('attendances'));
    }
    public function edit(Attendance $attendance)
    {
        return view('attendanceEdit', compact('attendance'));
    }

    public function update(Request $request, Attendance $attendance)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required|date',
        ]);

        $attendance->update($request->all());

        return redirect()->route('attendanceView')
            ->with('success', 'Attendance record updated successfully!');
    }

    public function destroy(Attendance $attendance)
    {
        $attendance->delete();

        return redirect()->route('attendanceView')
            ->with('success', 'Attendance record deleted successfully!');
    }
}
