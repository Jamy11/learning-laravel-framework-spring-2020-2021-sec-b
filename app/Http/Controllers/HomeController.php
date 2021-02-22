<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psy\Command\DumpCommand;
use App\User;

class HomeController extends Controller
{
    public function index( Request $req){

        $name = "alamin";
        $id = "123";

        //return view('home.index', ['name'=> 'xyz', 'id'=>12]);

        // return view('home.index')
        //         ->with('name', 'alamin')
        //         ->with('id', '12');

        // return view('home.index')
        //         ->withName($name)
        //         ->withId($id);

        if($req->session()->has('username')){
            return view('home.index', compact('id', 'name'));
        }else{
            $req->session()->flash('msg', 'invalid request...login first!');
            return redirect('/login');
        }

    }

    public function create(){
        return view('home.create');
    }

    public function store(Request $req){

        $user = new User();

        $user->username = $req->username;
        $user->password = $req->password;
        $user->email = $req->email;
        $user->type = $req->type;
        
        $user->save();

        return redirect('home/userlist');
    }

    public function edit($id){
       
        $user = User::find($id);

        return view('home.edit')->with('user', $user);
    }


    public function update($id, Request $req){

        $user = User::find($id);

        $user->username = $req->username;
        $user->password = $req->password;
        $user->email = $req->email;

        $user->save();
        
        return redirect('/home/userlist');
    }

    public function userlist(){
        // db model userlist
        //$userlist = $this->getUserlist();

        $userlist = User::all();

        return view('home.list')->with('list', $userlist);
    }

    public function delete($id){
        
        $user = User::find($id);
        
        return view('home.delete')->with('user',$user);
    }

    public function destroy($id){
        
        if(User::destroy($id))
        {
            return redirect('/home/userlist');
        }
        else{
            echo 'error';
        }
    }

    public function show($id)
    {
        $user = User::find($id);
        //print_r($user[0][0]);
        return view('home.details')->with('user',$user);
    }

}
