<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\PersonalInformation;
use App\SecurityQuestion;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    protected $guard_type = "";

    /*
    |-------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        $questions = SecurityQuestion::all();
        return view('auth.register' , compact('questions'));
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->setGuard($request->occupation);
        
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }

    public function setGuard($occupation)
    {
        if ($occupation == "Teacher") {
            $this->guard_type = "teacher";
        }
        else{
            $this->guard_type = "student";
        }  
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard($this->guard_type);
    }

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/verifying';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware("guest");
        $this->middleware("guest:teacher");
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name'                =>       'required|string|max:16',
            'last_name'                 =>       'required|string|max:16',
            'answer_1'                  =>       'required|string|max:16',
            'answer_2'                  =>       'required|string|max:16',
            'answer_3'                  =>       'required|string|max:16',
            'registration_number'       =>       'required|string|max:16|unique:users',
            'phone'                     =>       'required|string|max:16',
            'email'                     =>       'required|string|email|max:255|unique:users',
            'password'                  =>       'required|string|min:6|confirmed',
            'gender'                    =>       'required',
            'occupation'                =>       'required',
            'i_agreed_checkbox'         =>       'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'first_name'                =>       $data['first_name'],
            'last_name'                 =>       $data['last_name'],
            'registration_number'       =>       $data['registration_number'],
            'phone'                     =>       $data['phone'],
            'gender'                    =>       $data['gender'],
            'email'                     =>       $data['email'],
            'answer_1'                  =>       serializeThisThing($data['answer_1']),
            'answer_2'                  =>       serializeThisThing($data['answer_2']),
            'answer_3'                  =>       serializeThisThing($data['answer_3']),
            'password'                  =>       Hash::make($data['password']),
            'occupation'                =>       $data['occupation'],
        ]);

        PersonalInformation::create([
            'user_id'                   =>       $user->id,
            'first_name'                =>       $user->first_name,
            'last_name'                 =>       $user->last_name,
            'email'                     =>       $user->email,
            'gender'                    =>       $user->gender,
            'phone'                     =>       $user->phone,
            'occupation'                =>       $user->occupation,
        ]);

        return $user;
    }
}
