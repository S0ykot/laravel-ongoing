<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function index()
    {
    	return view('login');
    }

    public function verify(Request $req)
    {
    	$valid = User::where('username',$req->username)->where('password',$req->password)->get();

        if (count($valid)>0) {

            $req->session()->put('uname',$req->username);

            return redirect('/home');
        }
        else
        {
            return redirect('/login');
        }

    }

}
