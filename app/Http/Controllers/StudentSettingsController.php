<?php

namespace App\Http\Controllers;

use App\Hobby;
use App\PersonalInformation;
use App\SecurityQuestion;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Storage;

class StudentSettingsController extends Controller
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

    public function profile_settings()
    {
        $student_information = Auth::user()->personal_information;
        return view('StudentViews.profile_settings' , compact('student_information'));
    }

    public function save_profile_information(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name'        =>      'required|string|max:16',
            'last_name'         =>      'required|string|max:16',
            'phone'             =>      'required|string|max:16',
            'birthday'          =>      'max:16',
            'website'           =>      'min:0',
            'country'           =>      'required|string|max:50',
            'province'          =>      'required|string|max:50',
            'city'              =>      'required|string|max:50',
            'description'       =>      'min:0|max:250',
            'birthplace'        =>      'min:0|max:50',
            'marital_status'    =>      'required|string',
            'facebook'          =>      'min:0',
            'twitter'           =>      'min:0',
            'linkedin'          =>      'min:0',
            'google_plus'       =>      'min:0',
        ]);


        if ($validator->passes()) {
            $PersonalInformation                    =       Auth::user()->personal_information;
            $PersonalInformation->first_name        =       $request->first_name;
            $PersonalInformation->last_name         =       $request->last_name;
            $PersonalInformation->birthday          =       $request->birthday;
            $PersonalInformation->website           =       $request->website;
            $PersonalInformation->country           =       $request->country;
            $PersonalInformation->province          =       $request->province;
            $PersonalInformation->city              =       $request->city;
            $PersonalInformation->description       =       $request->description;
            $PersonalInformation->birthplace        =       $request->birthplace;
            $PersonalInformation->marital_status    =       $request->marital_status;
            $PersonalInformation->facebook          =       $request->facebook;
            $PersonalInformation->twitter           =       $request->twitter;
            $PersonalInformation->linkedin          =       $request->linkedin;
            $PersonalInformation->google_plus       =       $request->google_plus;
            $PersonalInformation->save();

            $user                                   =       Auth::user();
            $user->first_name                       =       $request->first_name;
            $user->last_name                        =       $request->last_name;
            $user->phone                            =       $request->phone;
            $user->save();
        }

        return response()->json(['errors'=>$validator->errors()]);
    }

    public function save_hobbies(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'hobbies'               =>       'min:0',
            'favourite_tv_shows'    =>       'min:0',
            'favourite_movies'      =>       'min:0',
            'favourite_artists'     =>       'min:0',
            'favourite_games'       =>       'min:0',
            'favourite_books'       =>       'min:0',
            'favourite_writers'     =>       'min:0',
            'favourite_interests'   =>       'min:0',
        ]);

        if ($validator->passes()) {
            $flag = Auth::user()->hobby;
            if ($flag != "") {
                $Hobby                          =    Auth::user()->hobby;
                $Hobby->hobbies                 =    $request->hobbies;
                $Hobby->favourite_tv_shows      =    $request->favourite_tv_shows;
                $Hobby->favourite_movies        =    $request->favourite_movies;            
                $Hobby->favourite_artists       =    $request->favourite_artists;            
                $Hobby->favourite_games         =    $request->favourite_games;
                $Hobby->favourite_books         =    $request->favourite_books;
                $Hobby->favourite_writers       =    $request->favourite_writers;
                $Hobby->favourite_interests     =    $request->favourite_interests;
                $Hobby->save();
            }
            else{
                Hobby::create([
                    'user_id'               =>   Auth::user()->id,
                    'hobbies'               =>   $request->hobbies,
                    'favourite_tv_shows'    =>   $request->favourite_tv_shows,
                    'favourite_movies'      =>   $request->favourite_movies,
                    'favourite_artists'     =>  $request->favourite_artists,
                    'favourite_games'       =>   $request->favourite_games,
                    'favourite_books'       =>   $request->favourite_books,
                    'favourite_writers'     =>   $request->favourite_writers,
                    'favourite_interests'   =>   $request->favourite_interests,
                    
                ]);
            }
        }

        return response()->json(['errors'=>$validator->errors()]);
    }

    public function change_avatar(Request $request)
    {
        $this->validator($request->all())->validate();

        $a = mt_rand(10,50);
        $dp_extension = $request->avatar->extension();
        $dpName = str_random($a).'.'.$dp_extension;
        $dp = $request->avatar->storeAs('public/avatars' , $dpName);
        $dpPath = Storage::url($dp);

        $student_information            =    Auth::user()->personal_information;
        $student_information->avatar    =    $dpPath;
        $student_information->save();

        return back();
    }

    protected function validator(array $data)
    {
       return Validator::make($data, [
           'avatar' => 'mimes:jpeg,jpg,png,ico|max:1024',
       ]);
    }

    public function hobbies_and_interests()
    {
        $student_information    =    Auth::user()->personal_information;
        $hobby                  =    Auth::user()->hobby;
        return view('StudentViews.hobbies' , compact('student_information' , 'hobby'));
    }

    public function change_password_view()
    {
        $questions = SecurityQuestion::all();
        $student_information    =    Auth::user()->personal_information;
        return view('StudentViews.change_password' , compact('student_information' , 'questions'));
    }

    public function verify_email(Request $request)
    {
        if (Auth::user()->email == $request->email) {
            return 1;
        }
        else{
            return 0;
        }
    }

    public function verify_answers(Request $request)
    {
        $answer_1 = unserializeThisThing(Auth::user()->answer_1);
        $answer_2 = unserializeThisThing(Auth::user()->answer_2);
        $answer_3 = unserializeThisThing(Auth::user()->answer_3);

        if (strcasecmp($answer_1, $request->answer_1) == 0 && strcasecmp($answer_2, $request->answer_2) == 0 && strcasecmp($answer_3, $request->answer_3) == 0) {
            return 1;
        }
        else{
            return 0;
        }
    }

    public function change_password(Request $request)
    {
        $user               =    Auth::user();
        $user->password     =    Hash::make($request->new_password);
        $user->save();

        Session::flash('success' , 'Your password has been updated, Successfully!');
        return back();
    }
}
