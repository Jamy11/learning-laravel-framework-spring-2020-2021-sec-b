@extends('layout.main')

@section('title')
    Home
@endsection

@section('page-info')
    <h1>Welcome home! <br>
        User Email : {{ session('email') }} </h1>
    <h2>User Type: <span style="color: red"> {{ session('type') }}</span>  </h2>
    <a href="{{route('home.create')}}">Create user</a> |
    <a href="{{route('home.userlist')}}">View user list</a> |
    <a href="/logout">logout</a>
    <br>
    <h1 style="color: red ">
        {{session('msg')}}
    </h1>
@endsection