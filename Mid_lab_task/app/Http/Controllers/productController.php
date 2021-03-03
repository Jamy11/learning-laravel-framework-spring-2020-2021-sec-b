<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\product;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class productController extends Controller
{
    //
    public function existingProductsView()
    {
        $existing  = product::where('status', 'existing')->get();
        return view('product.existing')->with('existing',count($existing))->with('exist',$existing);
        //print_r(count($existing));
    }

    public function upcomingProductsView()
    {
        $upcoming = product::where('status', 'upcoming')->get();
        return view('product.upcoming')->with('upcoming',count($upcoming));
    }

    public function addProductView()
    {
        return view('product.add');
    }
}
