<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    public function index(Request $req)
    {
    	if($req->session()->has('uname')){

    		return view('home.index');
    	}
    	else
    	{
    		return redirect('/login');
    	}
    }
    public function profile(Request $req)
    {
    	$data = User::where('username',$req->session()->get('uname'))->first();
    	return view('home.profile',$data);
    }

    public function addUserView()
    {
    	return view('home.adduser');
    }

    public function adduser(Request $req)
    {

    		$user = new User();
    		$user->username = $req->username;
    		$user->password = $req->password;
    		$user->email = $req->email;
    		$user->type = $req->type;

    		if ($user->save()) {
    			return redirect('/home/userlist');
    		}
    }

    public function userList(Request $req)
    {
    	$data = User::get();
    	return view('home.userlist',['data'=>$data]);
    }
}
