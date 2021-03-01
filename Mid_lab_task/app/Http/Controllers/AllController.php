<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

use App\Http\Requests\RegisterRequest;

use App\All;

class AllController extends Controller
{
    //
    public function registration()
    {
        return view('registration.registration');
    }

    public function registrationVerify(RegisterRequest $req)
    {
        $user =new All;

        $user->role = 'coustomers';
        $user->full_name = $req->full_name;
        $user->username = $req->username;
        $user->email = $req->email;
        $user->password = $req->password;
        $user->city = $req->city;
        $user->country = $req->country;
        $user->phone = $req->phone;
        $user->company_name = $req->company_name;
        $user->user_type = 'active';

        $user->save();

        return redirect('/login');
        //echo 'hello';
    }
}
