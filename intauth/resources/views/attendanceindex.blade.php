<!-- resources/views/attendance/index.blade.php -->

@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<div class="container">

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="container mt-5">
        <table class="table" border="5px">
            <thead>
                <tr>
                    <h2>Attendance Records</h2>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Date</th>
                    
                    
                </tr>
            </thead>
            <tbody>
                @foreach($attendances as $attendance)
                    <tr>
                        <td>{{ $attendance->id }}</td>
                        <td>{{ $attendance->name }}</td>
                        <td>{{ $attendance->date }}</td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>


    </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


    
</div>
@endsection
