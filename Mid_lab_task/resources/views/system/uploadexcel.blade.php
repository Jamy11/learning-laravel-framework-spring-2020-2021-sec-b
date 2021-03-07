@extends('layout.main')

@section('title')
    Upload Excel
@endsection

@section('page-info')
    <center>
        <h1>Upload Excel</h1>
        <br>
        <br>
        <br>
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name='import'>
            <input type="submit" value="Submit">
        </form>
    </center>
@endsection