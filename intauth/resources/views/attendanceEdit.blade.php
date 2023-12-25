<!-- resources/views/attendance.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Attendance Page</div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="post" action="{{ route('attendance.update', $attendance->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">Student Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $attendance->name }}" required>
                        </div>

                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" class="form-control" id="date" name="date" value="{{ $attendance->date }}" required>
                        </div>

                        <!-- Add other form fields as needed -->

                        <button type="submit" class="btn btn-primary">Update Attendance</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
