<?php

namespace App\Http\Controllers;

use App\Http\Controllers\verifying;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function main()
    {
        return view('landing.main');
    }

    public function icons()
    {
        return view('icons');
    }

    public function verifying()
    {
        if (Auth::guard('student')->check()) {
            return redirect("/student/news-feed");
        }

        if (Auth::guard('teacher')->check()) {
            return redirect("/teacher/news-feed");
        }
        
        return redirect("/login");
    }
}
