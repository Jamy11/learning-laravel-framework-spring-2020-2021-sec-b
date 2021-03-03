<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Physical_store_channel;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Physical_store_channelController extends Controller
{
    //
    public function physicalStoreView()
    {
        
        $item = Physical_store_channel::where( 'created_at', '>', Carbon::now()->subDays(7))
        ->get();

        $items = Physical_store_channel::where('date_sold', '>=', date('y-m-d'))->get();
        $seven = Physical_store_channel::where('date_sold', '>=', 'DATE(NOW()) - INTERVAL 7 DAY')->get();
        $avg = Physical_store_channel::select('unit_price')->where('created_at', '>=', 'DATE(NOW()) - INTERVAL 7 DAY')->average('unit_price');
        $max_item = Physical_store_channel::all()->max('product_name');

        return view('system.physicalStore')->with('item',$item)->with('avg',$avg)->with('items',count($items))->with('seven',count($seven));
        //print_r($item[1]['id']);
    }
    public function socialMediaView()
    {
        return view('system.socialMedia');
    }
    public function ecommerceView()
    {
        return view('system.ecommerce');
    }
}
