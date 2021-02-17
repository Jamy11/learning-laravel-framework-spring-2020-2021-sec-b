<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
class LoginController extends Controller
{
    public function index(){

        return view('login.index');
    }

    public function verify(Request $req){

        // if($req->username == "" || $req->password == ""){
        //    $req->session()->flash('msg', 'null username or password...');
        //    return redirect('/login');

        // }
        // elseif($req->username == 'admin' && $req->password == "admin")
        // {
        //     $req->session()->put('username', $req->username);
        //     $req->session()->put('type', 'admin');
        //     return redirect('/home');
        // }
        // elseif($req->username == $req->password){
        //     //$req->session()->put('password', $req->password);
        //     //$req->session()->get('name');
        //     //$req->session()->forget('name');
        //     //$req->session()->flush();
        //     //$req->session()->has('name');

        //     /* $req->session()->flash('msg', 'Invalid user info...');
        //     $req->session()->flash('error', 'Bad request error...');
        //     $req->session()->get('msg');
        //     $req->session()->keep('msg');
        //     $req->session()->get('msg'); */
        //     //$req->session()->reflash();
        //     //$req->session()->pull('name');

        //     $req->session()->put('username', $req->username);
        //     $req->session()->put('type', 'user');
        //     return redirect('/home');
        // }else{

        //     //$req->session()->flash('msg', 'Invalid username or password...');
        //     return redirect('/login');
        // }
        $user = User::all();
        print_r($user[0]);
    }
}
