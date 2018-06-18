<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherNewsFeedController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:teacher');
    }

    public function index()
    {
    	return "Teacher";
    }
}