<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\All;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AllRequest;

class LoginController extends Controller
{
    public function index(){

        return view('login.index');
    }

    public function verify(AllRequest $req){

       
        $user = DB::table('alls')
                        ->where('password', $req->password)
                        ->where('email', $req->email)
                        ->get();

        //print_r($user[0]);


       
        if(count($user)>0){
            //$req->session()->put('password', $req->password);
            //$req->session()->get('name');
            //$req->session()->forget('name');
            //$req->session()->flush();
            //$req->session()->has('name');

            /* $req->session()->flash('msg', 'Invalid user info...');
            $req->session()->flash('error', 'Bad request error...');
            $req->session()->get('msg');
            $req->session()->keep('msg');
            $req->session()->get('msg'); */
            //$req->session()->reflash();
            //$req->session()->pull('name');

            $req->session()->put('email', $req->email);
            return redirect('/home');
        }else{

            //$req->session()->flash('msg', 'Invalid username or password...');
            return redirect('/login');
        }
   
    }
}
