<?php

namespace App\Http\Controllers;

use App\Attachment;
use App\Comment;
use App\LearningClass;
use App\Notifications\CommentCreated;
use App\Notifications\PostCreated;
use App\Post;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TeacherClassesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:teacher');
    }

    public function classes()
    {
        update_last_seen();
    	$teacher_information = Auth::user()->personal_information;
    	$classes = Auth::user()->learning_classes;
        return view('TeacherViews.classes' , compact('teacher_information' , 'classes'));
    }

    public function create_class(Request $request)
    {
        update_last_seen();
    	$this->validator($request->all())->validate();

    	if ($request->has('class_avatar')) {
    		$a = mt_rand(10,50);
	        $dp_extension = $request->class_avatar->extension();
	        $dpName = str_random($a).'.'.$dp_extension;
	        $dp = $request->class_avatar->storeAs('public/avatars' , $dpName);
	        $avatar_path = Storage::url($dp);
    	}
    	else{
    		$avatar_path = "/images/default_class_avatar.png";
    	}

    	if ($request->has('class_cover_photo')) {
    		$a = mt_rand(10,50);
	        $dp_extension = $request->class_cover_photo->extension();
	        $dpName = str_random($a).'.'.$dp_extension;
	        $dp = $request->class_cover_photo->storeAs('public/avatars' , $dpName);
	        $cover_path = Storage::url($dp);
    	}
    	else{
    		$cover_path = "/images/default_class_cover.png";
    	}

    	LearningClass::create([
    		'user_id'		=>		Auth::user()->id,
    		'name'			=>		$request->class_name,
    		'description'	=>		$request->class_description,
    		'avatar'		=>		$avatar_path,
    		'cover'			=>		$cover_path,
    		'code'			=>		create_slug($request->class_name),
    	]);

    	Session::flash('success' , 'Class created successfully!');
    	return back();
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'class_name'        		=>      'required|string|max:50',
            'class_description'         =>      'max:500',
            'class_avatar'        		=>      'mimes:jpeg,jpg,png,ico|max:1024',
            'class_cover_photo'        	=>      'mimes:jpeg,jpg,png,ico|max:2048',
        ]);
    }

    public function open_class($slug)
    {
        update_last_seen();
        $pictures = [];
    	$comments_array = array();
    	$class = LearningClass::where('code' , $slug)->first();
        if ($class == "") {
            return redirect("/verifying");
        }
        
        $students = $class->students;
    	$teacher_information = Auth::user()->personal_information;
    	$posts = $class->posts()->orderBy('posts.created_at' , 'desc')->get();

    	foreach ($posts as $post) {
    		if (count($post->comments) > 0) {
    			$commetators = $post->comments->groupBy('user_id');
    			$avatars_array = array();
    			foreach ($commetators as $key => $commetator) {
    				$user = User::find($key);
    				if (isset($user->personal_information->avatar)) {
    					$avatar = $user->personal_information->avatar;
    				}
    				else{
    					$avatar = "/images/".Auth::user()->gender.".png";
    				}

    				$commetators_info = [$avatar , $user->first_name];
    				array_push($avatars_array, $commetators_info);
    			}
    		}
    		else{
    			$avatars_array = array();
    			array_push($avatars_array, null);
    		}

    		array_push($comments_array, $avatars_array);
    	}

        foreach ($posts as $key => $post) {
            if (count($pictures) < 10) {
                if (count($post->attachments) > 0) {
                    $pics = $post->attachments()
                                 ->where("type" , "jpeg")
                                 ->orWhere("type" , "jpg")
                                 ->orWhere("type" , "png")
                                 ->get();
                    foreach ($pics as $key => $pic) {
                        if (count($pictures) < 10) {
                            array_push($pictures, $pic);
                        }
                    }
                }
            }
        }

    	return view("TeacherViews.class" , compact('teacher_information' , 'class' , 'posts' , 'comments_array' , 'students' , 'pictures'));
    }

    public function create_post(Request $request)
    {
        update_last_seen();
        $class = LearningClass::find($request->class_id);
    	$validator = Validator::make($request->all(), [
            'description'        		=>      'required|string|max:1000',
            'post_type'         		=>      'required|string',
        ]);
        $validator->validate();

    	if ($request->has("attachments")) {
    		$validator_files = Validator::make($request->all(), [
	            'attachments.*' => 'mimes:txt,pdf,xls,xlsx,doc,docx,ppt,pptx,pps,jpeg,jpg,bmp,png|max:25000',
	        ]);
	        $validator_files->validate();
	        $post = Post::create([
			    		'learning_class_id' => $request->class_id,
			    		'description' => $request->description,
			    		'type' => $request->post_type,
			    	]);
	    	foreach ($request->attachments as $key => $attachment) {
	    		$original_name 	= 	$attachment->getClientOriginalName();
	    		$file_size  	= 	$attachment->getClientSize();
	    		$a 				= 	mt_rand(10,50);
		        $file_extension = 	$attachment->extension();
		        $file_name 		= 	str_random($a).'.'.$file_extension;
		        $file = $attachment->storeAs('public/posts/attachments' , $file_name);
		        $file_path  	= 	Storage::url($file);

		        Attachment::create([
		        	'post_id' => $post->id,
		        	'original_name' => $original_name,
		        	'path' => $file_path,
		        	'size' => $file_size / 1000,
		        	'type' => $file_extension,
		        ]);
	    	}

            foreach ($class->students as $key => $student) {
                $student->notify(new PostCreated(Auth::user() , $class , $student , $post , count($request->attachments)));
            }
    	}
    	else{

    		$post = Post::create([
        	    		'learning_class_id' => $request->class_id,
        	    		'description' => $request->description,
        	    		'type' => $request->post_type,
        	    	]);

            foreach ($class->students as $key => $student) {
                $student->notify(new PostCreated(Auth::user() , $class , $student , $post , 0));
            }
    	}

    	Session::flash("success" , "Post created, Successfully!");
    	return back();
    }

    public function view_attachments(Request $request)
    {
        update_last_seen();
    	$post = Post::find($request->id);
    	return $post->attachments;
    }

    public function create_comment(Request $request)
    {
        update_last_seen();

    	$validator = Validator::make($request->all(), [
            'comment'        =>      'required|string|max:500',
        ]);

        if ($validator->passes()) {
        	$comment = Comment::create([
        		'user_id' => Auth::user()->id,
        		'post_id' => $request->post_id,
        		'comment' => $request->comment,
        	]);

            $students = getstudents_teacher();
            $post = Post::find($request->post_id);
            $class = $post->learning_class;
            foreach ($students as $key => $student) {
                $student->notify(new CommentCreated(Auth::user() , $class , $post , $comment));
            }

        	$response_array = array();

        	$avatar = null;
        	if (isset(Auth::user()->personal_information->avatar)) {
        		$avatar = Auth::user()->personal_information->avatar;
        	}
        	else{
        		$avatar = "/images/".Auth::user()->gender.".png";
        	}

        	$created_at = $comment->created_at->toDayDateTimeString();
        	$name = Auth::user()->first_name." ".Auth::user()->last_name;

        	array_push($response_array, $avatar, $name, $created_at, $request->comment);

        	return $response_array;

        }

    	return response()->json(['errors'=>$validator->errors()]);
    }

    public function view_post($class_slug , $post_slug)
    {
        update_last_seen();
        $post = Post::find($post_slug);
        $class = LearningClass::where('code' , $class_slug)->first();
        $teacher_information = Auth::user()->personal_information;
        $comments_array = array();
        
        if (count($post->comments) > 0) {
            $commetators = $post->comments->groupBy('user_id');
            $avatars_array = array();
            foreach ($commetators as $key => $commetator) {
                $user = User::find($key);
                if (isset($user->personal_information->avatar)) {
                    $avatar = $user->personal_information->avatar;
                }
                else{
                    $avatar = "/images/".Auth::user()->gender.".png";
                }

                $commetators_info = [$avatar , $user->first_name];
                array_push($comments_array, $commetators_info);
            }
        }
        else{
            array_push($comments_array, null);
        }

        return view("TeacherViews.post" , compact('teacher_information' , 'post' , 'class' , 'comments_array'));
    }
}
