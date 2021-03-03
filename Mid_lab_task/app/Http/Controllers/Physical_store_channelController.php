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
        return view('system.physicalStore')->with('item',$item);
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
