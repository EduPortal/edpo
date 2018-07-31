<?php

namespace App\Http\Controllers;

use App\Notification;
use Auth;
use Illuminate\Http\Request;

class StudentNotificationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:student');
    }

    public function view_notification($notification_id)
    {
    	$notification = Auth::user()->notifications->where('id' , $notification_id)->first();

    	$notification_type = explode("\\", $notification->type)[2];

    	if ($notification_type == "PostCreated") {
    		$data = $notification->data;
    		$class = $data['class'];
    		$post = $data['post'];
    		$class_code = $class['code'];
    		$post_id = $post['id'];
    		return redirect("/student/classes/$class_code/$post_id");
    	}
    }
}
