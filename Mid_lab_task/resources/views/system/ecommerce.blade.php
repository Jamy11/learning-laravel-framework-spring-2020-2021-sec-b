@extends('layout.main')

@section('title')
    E-Commerce
@endsection

@section('page-info')
    <center><h1>E-Commerce</h1></center>
    <h1>Avg price {{$avg}}</h1>
    
    <h2>Last seven days sell {{$seven}}</h2>
    <h2>Best selling item {{$max_item}}</h2>
    <a href="/home"><button>Back</button></a>
@endsection