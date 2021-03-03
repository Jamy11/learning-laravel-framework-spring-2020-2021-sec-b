@extends('layout.main')

@section('title')
    Physical-Store
@endsection

@section('page-info')
    <center><h1>Physical-Store</h1></center>
    <table border="1">
        <tr>
            <td>Id</td>
            <td>Coustomer Name</td>
            <td>Adress</td>
            <td>Phone</td>
            <td>product Id</td>
            <td>Product name</td>
            <td>Unit Price</td>
            <td>Quantity</td>
            <td>total Price</td>
            <td>Date Sold</td>
            <td>Payment Type</td>
            <td>Status</td>
            <td>Created At</td>
            <td>Updated At</td>
        </tr>
        
            @foreach ($item as $it)
            <tr>
                <td>{{$it['id']}}</td>
                <td>{{$it['customer_name']}}</td>
                <td>{{$it['address']}}</td>
                <td>{{$it['phone']}}</td>
                <td>{{$it['product_id']}}</td>
                <td>{{$it['product_name']}}</td>
                <td>{{$it['unit_price']}}</td>
                <td>{{$it['quantity']}}</td>
                <td>{{$it['total_price']}}</td>
                <td>{{$it['date_sold']}}</td>
                <td>{{$it['payment_type']}}</td>
                <td>{{$it['status']}}</td>
                <td>{{$it['created_at']}}</td>
                <td>{{$it['updated_at']}}</td>
            </tr>
            @endforeach
    </table>
@endsection