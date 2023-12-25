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
        <table class="table" border="2px">
            <thead>
                <tr>
                    <h2>Login Students </h2>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>UserName</th>
                    <th>Email</th>

                    
                    
                </tr>
            </thead>
            <tbody>
                @foreach($user as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        
                        
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
