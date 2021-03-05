@extends('layout.main')

@section('title')
    Social Media
@endsection

@section('page-info')
    <center><h1>Social Media</h1></center>
    <h1>Avg price {{$avg}}</h1>
    
    <h2>Last seven days sell {{$seven}}</h2>
    <h2>Best selling item {{$max_item}}</h2>
    <a href="/home"><button>Back</button></a>
@endsection