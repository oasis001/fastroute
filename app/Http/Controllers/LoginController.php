<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    public function index()
    {
    	# code...

    	return view('login/index');
    }

    public function signup()
    {
    	# code...

    	return view('login/SignUp');
    }
}
