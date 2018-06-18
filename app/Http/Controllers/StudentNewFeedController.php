<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentNewFeedController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:student');
    }

    public function index()
    {
    	return view('StudentViews.newsfeed');
    }

}
