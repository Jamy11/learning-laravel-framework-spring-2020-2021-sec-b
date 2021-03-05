@extends('layout.main')

@section('title')
    Physical-Store
@endsection

@section('page-info')
    <center><h1>Upcoming Product</h1></center>
    <h1>Upcoming Product {{$count}}</h1>

    <table border="1" style="text-align:center">

        <tr>
            <td>Id</td>
            <td>Product Name</td>
            <td>Category</td>
            <td>Unit Price</td>
            <td>Status</td>
            <td>Action</td>

        </tr>

            @foreach ($upcoming as $i)
            <tr>
                <td>{{$i['id']}}</td>
                <td>{{$i['product_name']}}</td>
                <td>{{$i['category']}}</td>
                <td>{{$i['unit_price']}}</td>
                <td>{{$i['status']}}</td>
                <td>
                    <a href="{{route('product.upEdit', [$i['id']])}}">Edit</a>
                    <a href="{{route('product.upDelete', [$i['id']])}}">Delete</a>
                    <a href="{{route('product.upShow', [$i['id']])}}">Details</a>
                </td>
            </tr>
            @endforeach     
    </table>
    <br>
    <br>
    <a href="/home"><button>Back</button></a>
@endsection