<?php

namespace App\Http\Controllers;

use App\Http\Controllers\verifying;
use App\User;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:teacher,student')->except("main" , "verifying" , "icons");
    }

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

    public function profile($id)
    {
        if (Auth::guard("student")->check()) {
            $user = User::find($id);
            $hobbies_and_interests = $user->hobby;
            $student_information = $user->personal_information;
            return view("StudentViews.about" , compact('user' , 'student_information' , 'hobbies_and_interests'));
        }
        if (Auth::guard("teacher")->check()) {
            $user = User::find($id);
            $hobbies_and_interests = $user->hobby;
            $teacher_information = $user->personal_information;
            return view("TeacherViews.about" , compact('user' , 'teacher_information' , 'hobbies_and_interests'));
        }
        
        return redirect("/verifying");
    }
}
