@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Panel') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif


                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


                    <div class="container mt-5">
                        <h1>Wellcome</h1>

                        <a href="{{url('attview')}}"><button type="button" class="btn btn-primary"
                                onclick="markAttendance()">view Student Attendance</button></a>

                        <a href="{{url('login/users')}}"><button type="button" align-items='left'
                                class="btn btn-success" onclick="markLeave()">Login Student</button></a>

                        <!-- <a href="{{url('attendances')}}"><button type="button" class="btn btn-info"
                                onclick="view()">View</button></a> -->
                    </div>

                    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection