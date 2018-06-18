<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class TeacherClassesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:teacher');
    }

    public function classes()
    {
    	$teacher_information = Auth::user()->personal_information;
    	$classes = Auth::user()->learning_classes;
        return view('TeacherViews.classes' , compact('teacher_information' , 'classes'));
    }

    public function create_class(Request $request)
    {
    	$this->validator($request->all())->validate();
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'class_name'        		=>      'required|string|max:50',
            'class_description'         =>      'max:100',
            'class_avatar'        		=>      'mimes:jpeg,jpg,png,ico|max:1024',
            'class_cover_photo'        	=>      'mimes:jpeg,jpg,png,ico|max:2048',
        ]);
    }
}
