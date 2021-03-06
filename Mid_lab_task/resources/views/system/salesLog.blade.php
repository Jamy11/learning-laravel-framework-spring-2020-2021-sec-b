@extends('layout.main')

@section('title')
    Sales Log
@endsection

@section('page-info')
    <center><h1>Sales Log</h1></center>

    <center>
        <h2>Last 7 days sells</h2>
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
            
                @foreach ($data as $it)
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
    </center>
    <center>
        <br> <br>
        <h2>How you want to download</h2>
    
        <a href="/downloadpdf"><button>Download as pdf</button></a>  | 
        <a href="/downloadexcel"><button>Download as Excel</button></a>
        <a href="/uploadexcelview"><button>Upload Excel File</button></a>
    </center>

    <h3 style="color: red">{{session('msg')}}</h3>
    
@endsection