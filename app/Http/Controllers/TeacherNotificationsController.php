<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class TeacherNotificationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:teacher');
    }

    public function view_notification($notification_id)
    {
        update_last_seen();
        
    	$notification = Auth::user()->notifications->where('id' , $notification_id)->first();

        $notification->markAsRead();

    	$notification_type = explode("\\", $notification->type)[2];

    	if ($notification_type == "PostCreated") {
            $data = $notification->data;
            $class = $data['class'];
            $post = $data['post'];
            $class_code = $class['code'];
            $post_id = $post['id'];
            return redirect("/teacher/classes/$class_code/$post_id");
        }

        if ($notification_type == "CommentCreated") {
            $data = $notification->data;
            $class = $data['class'];
            $post = $data['post'];
            $class_code = $class['code'];
            $post_id = $post['id'];
            return redirect("/teacher/classes/$class_code/$post_id");
        }

        if ($notification_type == "ClassJoined") {
            $data = $notification->data;
            $class = $data['class'];
            $class_code = $class['code'];
            return redirect("/teacher/classes/$class_code");
        }
    }

    public function view_all_notification($value='')
    {
        update_last_seen();

        $all_notifications = Auth::user()->notifications;
        $unread_notification = Auth::user()->unreadnotifications;
        $teacher_information = Auth::user()->personal_information;

        return view("TeacherViews.all_notifications" , compact('all_notifications' , 'unread_notification' , 'teacher_information'));

    }
}
