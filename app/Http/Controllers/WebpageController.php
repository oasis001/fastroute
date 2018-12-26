<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebpageController extends Controller
{
    //

    public function index()
    {
    	# code...
    	$title = "Welcome to Larvel Project";

    	return view('main')->withtit($title);
    }

    public function about()
    {
    	# code...

    	$title = "About Us";

    	return view('pages/about')->with('title',$title);
    }

    public function home()
    {
    	# code...
    	$title = "This is home page";

    	return view('pages/home',compact($title));
    }

    public function service()
    {
    	# code...

    	$data = array(

    		'title' => 'Services',

    		'Services' =>['Programming','Singing','Practical']
    	);

    

    	return view('pages/services')->with($data);
    }

    public function contact()
    {
    	# code...

    	return view('pages/contact');
    }
}

