@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


    <div class="container mt-12">
        <h1>Wellcome</h1>

        <a href="{{url('attend')}}"><button type="button" class="btn btn-primary" onclick="markAttendance()">Mark Attendance</button></a>

        <a href="{{url('/leaves/index')}}"><button type="button" class="btn btn-success" onclick="markLeave()">Mark Leave</button></a>

        <a href="{{url('attendances')}}"><button type="button" class="btn btn-info" onclick="view()">View</button></a>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script>
        // function markAttendance() {
            
        //     alert('Attendance marked!');
        // }

        // function markLeave() {
            
        //     alert('Leave marked!');
        // }

        function view() {
           
            // alert('Viewing...');
        }
    </script>


@endsection
