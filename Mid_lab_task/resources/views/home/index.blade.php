@extends('layout.main')

@section('title')
    Home
@endsection

@section('page-info')
    <h1>Welcome home! <br>
        User Name : <span style="color: blue"> {{ $all['full_name'] }} </span> </h1>
    <h2>User Role: <span style="color: red"> {{ $all['role'] }}</span>  </h2>
    <a href="system/sales/physical_store">Physical Store</a> |
    <a href="system/sales/social_media">Social Media</a> |
    <a href="system/sales/ecommerce">Ecommerce Web App</a> |
    <a href="/logout">logout</a>
    <br>
    <h1 style="color: red ">
        {{session('msg')}}
    </h1>
@endsection