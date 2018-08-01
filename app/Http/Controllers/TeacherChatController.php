<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class TeacherChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:teacher');
    }

    public function chat_view()
    {
    	update_last_seen();
    	$teacher_information = Auth::user()->personal_information;
    	return view("TeacherViews.chat" , compact("teacher_information"));
    }
}
