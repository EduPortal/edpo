<?php

namespace App\Http\Controllers;
use App\Comment;
use App\LearningClass;
use App\Post;
use App\User;
use Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentClassesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:student');
    }

    public function classes()
    {
    	$student_information = Auth::user()->personal_information;
    	$classes = Auth::user()->student_learning_classes;
        return view('StudentViews.classes' , compact('student_information' , 'classes'));
    }

    public function join_class(Request $request)
    {
    	$learning_class = LearningClass::where("code", $request->code)->first();
    	if ($learning_class == "") {
    		return "not found";
    	}
    	else{
    		$flag = Auth::user()->student_learning_classes->where("id" , $learning_class->id)->first();
    		if ($flag != "") {
    			return "already exist";
    		}
    		else{
    			DB::table('learning_class_user')->insert([
    				'user_id' => Auth::user()->id,
				    'learning_class_id' => $learning_class->id,
				]);
    		}
    	}
    }

    public function open_class($slug)
    {
        $pictures = [];
        $comments_array = array();
        $class = LearningClass::where('code' , $slug)->first();
        if ($class == "") {
            return redirect("/verifying");
        }
        
        $students = $class->students;
        $student_information = Auth::user()->personal_information;
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

        return view("StudentViews.class" , compact('student_information' , 'class' , 'posts' , 'comments_array' , 'students', 'pictures'));
    }

    public function view_attachments(Request $request)
    {
        $post = Post::find($request->id);
        return $post->attachments;
    }

    public function create_comment(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'comment'        =>      'required|string|max:500',
        ]);

        if ($validator->passes()) {
            $comment = Comment::create([
                'user_id' => Auth::user()->id,
                'post_id' => $request->post_id,
                'comment' => $request->comment,
            ]);

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
        $post = Post::find($post_slug);
        $class = LearningClass::where('code' , $class_slug)->first();
        $student_information = Auth::user()->personal_information;
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

        // return $comments_array;

        return view("StudentViews.post" , compact('student_information' , 'post' , 'class' , 'comments_array'));
    }
}