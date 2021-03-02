<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psy\Command\DumpCommand;
use App\User;
use App\All;
use Dotenv\Validator as DotenvValidator;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Validation\Validator as IlluminateValidationValidator;
use Validator;
use App\Http\Requests\UserRequest;

class HomeController extends Controller
{
    public function index(Request $req){

        $all = All::where('email',$req->session()->get('email'))->first();

      
        return view('home.index')->with('all',$all);
        

    }
    
    // public function view()
    // {
    //     return view('index');
    // }

    // public function create(){
    //     return view('home.create');
    // }

    // public function store(UserRequest $req){

    //     // 1st way
    //     // $validation=Validator::make($req->all(),
    //     // ['username' => 'required|max:5',
    //     // 'password' =>'required']    
    //     // );
        
    //     // if($validation->fails())
    //     // {
    //     //     return back()->with('errors',$validation->errors())->withInput();
    //     // }

    //     // 2nd way
    //     // $validation = $req->validate([
    //     //     'username' => 'required|max:5',
    //     //     'password' =>'required']);


    //     //$validation->validate();

    //     // 3rd way
    //     // $this->validate($req, [
    //     //     'username' => 'required|max:5',
    //     //     'password' => 'required|min:6'
    //     // ])->validate();

    //     $user = new User();

    //     $user->username = $req->username;
    //     $user->password = $req->password;
    //     $user->email = $req->email;
    //     $user->type = $req->type;
        
    //     $user->save();

    //     return redirect()->route('home.userlist');
    // }

    // public function edit($id){
       
    //     $user = User::find($id);

    //     return view('home.edit')->with('user', $user);
    // }


    // public function update($id, Request $req){

    //     $user = User::find($id);

    //     $user->username = $req->username;
    //     $user->password = $req->password;
    //     $user->email = $req->email;

    //     $user->save();
        
    //     return redirect()->route('home.userlist');
    // }

    // public function userlist(){
    //     // db model userlist
    //     //$userlist = $this->getUserlist();

    //     $userlist = User::all();

    //     return view('home.list')->with('list', $userlist);
    // }

    // public function delete($id){
        
    //     $user = User::find($id);
        
    //     return view('home.delete')->with('user',$user);
    // }

    // public function destroy($id){
        
    //     if(User::destroy($id))
    //     {
    //         return redirect('/home/userlist');
    //     }
    //     else{
    //         echo 'error';
    //     }
    // }

    // public function show($id)
    // {
    //     $user = User::find($id);
    //     //print_r($user[0][0]);
    //     return view('home.details')->with('user',$user);
    // }

}
