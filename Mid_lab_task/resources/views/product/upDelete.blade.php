@extends('layout.main')

@section('title')
    Delte Upcoming Product
@endsection

@section('page-info')
    <center><h1>Delete Upcoming Product</h1></center>
    <h1></h1>

    <h2>Product Id: {{ $data['id'] }}</h2>

    <table style="width:20%">
        <tr>
            <td>Product Name</td>
            <td>{{ $data['product_name'] }}</td>
        </tr>
        <tr>
            <td>Category</td>
            <td>{{ $data['category'] }}</td>
        </tr>
        <tr>
            <td>Unit Price</td>
            <td>{{ $data['unit_price'] }}</td>
        </tr>
        <tr>
            <td>Status</td>
            <td>{{ $data['status'] }}</td>
        </tr>
    </table>


    <form action="" method="POST">
        @csrf
        <input type="submit" value="Delete">
    </form>

    
    <br>
    <br>
    <a href="/system/product_management/upcoming_products"><button>Back</button></a>
@endsection