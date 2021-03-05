<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\product;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\ProductRequest;

class productController extends Controller
{
    //Existing
    public function existingProductsView()
    {
        $existing  = product::where('status', 'existing')->get();
        return view('product.existing')->with('existing',count($existing))->with('exist',$existing);
        //print_r(count($existing));
    }


    public function exEdit($id)
    {
        $data = product::find($id);
        return view('product.exEdit')->with('data',$data);
    }

    public function exUpdate($id,ProductRequest $req)
    {
        $data = Product::find($id);
        
        $data->product_name = $req->product_name;
        $data->category     = $req->category;
        $data->unit_price   = $req->unit_price;
        $data->status       = $req->status;


        $data->save();

        return redirect('/system/product_management/existing_products');
    }


    public function exDelete($id)
    {
        $data = product::find($id);
        return view('product.exDelete')->with('data',$data);
    }
    public function exDestroy($id , Request $req)
    {
        if(product::destroy($id)){           
            return redirect('/system/product_management/existing_products');
        }
        else{
            echo 'error';
        }
    }

    public function exShow($id)
    {
        $data = product::find($id);
        return view('product.exShow')->with('data',$data);
    }


    //Upcoming
    public function upcomingProductsView()
    {
        $upcoming = product::where('status', 'upcoming')->get();
        return view('product.upcoming')->with('count',count($upcoming))->with('upcoming',($upcoming));
    }
    public function upEdit($id)
    {
        $data = product::find($id);
        return view('product.upEdit')->with('data',$data);
    }

    public function upUpdate($id,ProductRequest $req)
    {
        $data = Product::find($id);
        
        $data->product_name = $req->product_name;
        $data->category     = $req->category;
        $data->unit_price   = $req->unit_price;
        $data->status       = $req->status;


        $data->save();

        return redirect('/system/product_management/upcoming_products');
    }


    public function upDelete($id)
    {
        $data = product::find($id);
        return view('product.upDelete')->with('data',$data);
    }
    public function upDestroy($id , Request $req)
    {
        if(product::destroy($id)){           
            return redirect('/system/product_management/upcoming_products');
        }
        else{
            echo 'error';
        }
    }

    public function upShow($id)
    {
        $data = product::find($id);
        return view('product.upShow')->with('data',$data);
    }



    //add
    public function addProductView()
    {
        return view('product.add');
    }

    public function store(ProductRequest $req){

        $store = new product();
        
        $store->product_name = $req->product_name;
        $store->category     = $req->category;
        $store->unit_price   = $req->unit_price;
        $store->status       = $req->status;

        $store->save();

        return redirect('/home');
    }
}