@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="registration-login-form" style="min-height: auto; padding-left: 0;">
                      <div class="tab-content">
                         <div class="tab-pane active" id="profile" role="tabpanel" data-mh="log-tab" style="" aria-expanded="true">
                            <div class="title h6">Register a new account</div>
                            <form class="content" method="POST" action="/register">
                              @csrf
                              <div class="row">
                                  <div class="col-lg-6 col-md-6">
                                      <div class="form-group">
                                          <label class="control-label">First Name</label>
                                          <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autocomplete="off">

                                          @if ($errors->has('first_name'))
                                              <span class="invalid-feedback">
                                                  <strong>{{ $errors->first('first_name') }}</strong>
                                              </span>
                                          @endif
                                      </div>
                                  </div>
                                  <div class="col-lg-6 col-md-6">
                                      <div class="form-group">
                                          <label class="control-label">Last Name</label>
                                          <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autocomplete="off">

                                          @if ($errors->has('last_name'))
                                              <span class="invalid-feedback">
                                                  <strong>{{ $errors->first('last_name') }}</strong>
                                              </span>
                                          @endif
                                      </div>
                                  </div>
                                  <div class="col-xl-12 col-lg-12 col-md-12">
                                      <div class="form-group">
                                          <label class="control-label">Registration number</label>
                                          <input id="registration_number" type="text" class="form-control{{ $errors->has('registration_number') ? ' is-invalid' : '' }}" name="registration_number" value="{{ old('registration_number') }}" required autocomplete="off">

                                          @if ($errors->has('registration_number'))
                                              <span class="invalid-feedback">
                                                  <strong>{{ $errors->first('registration_number') }}</strong>
                                              </span>
                                          @endif
                                      </div>
                                      <div class="form-group">
                                          <label class="control-label">Your Email</label>
                                          <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                          @if ($errors->has('email'))
                                              <span class="invalid-feedback">
                                                  <strong>{{ $errors->first('email') }}</strong>
                                              </span>
                                          @endif
                                      </div>
                                      <div class="form-group">
                                          <label class="control-label">Phone</label>
                                          <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autocomplete="off">

                                          @if ($errors->has('phone'))
                                              <span class="invalid-feedback">
                                                  <strong>{{ $errors->first('phone') }}</strong>
                                              </span>
                                          @endif
                                      </div>

                                      @foreach($questions as $key => $question)
                                        <div class="form-group">
                                          <label class="control-label">{{$question->question}}</label>
                                          <input id="answer_{{($key+1)}}" type="text" class="form-control{{ $errors->has('answer_'.($key+1)) ? ' is-invalid' : '' }}" name="answer_{{($key+1)}}" value="{{ old('answer_'.($key+1)) }}" required autocomplete="off">

                                          @if ($errors->has('answer_'.($key+1)))
                                              <span class="invalid-feedback">
                                                  <strong>{{ $errors->first('answer_'.($key+1)) }}</strong>
                                              </span>
                                          @endif
                                        </div>
                                      @endforeach
                                      
                                      <div class="form-group">
                                          <label class="control-label">Your Password</label>
                                          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                          @if ($errors->has('password'))
                                              <span class="invalid-feedback">
                                                  <strong>{{ $errors->first('password') }}</strong>
                                              </span>
                                          @endif
                                      </div>

                                      <div class="form-group">
                                          <label class="control-label">Repeat Password</label>
                                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                      </div>

                                      <div class="form-group">
                                        <label class="control-label">Your Occupation</label>
                                        <select name="occupation" id="occupation" class=" form-control" size="auto">
                                          @if(old('occupation') == "Student")
                                            <option value="Student" selected>Student</option>
                                            <option value="Teacher">Teacher</option>
                                          @else
                                            <option value="Student">Student</option>
                                            <option value="Teacher" selected>Teacher</option>
                                          @endif
                                        </select>
                                        @if ($errors->has('occupation'))
                                              <span class="invalid-feedback">
                                                  <strong>{{ $errors->first('occupation') }}</strong>
                                              </span>
                                          @endif
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Your Gender</label>
                                        <select name="gender" class=" form-control" size="auto">
                                          @if(old('gender') == "Male")
                                            <option value="Male" selected>Male</option>
                                            <option value="Female">Female</option>
                                          @else
                                            <option value="Male">Male</option>
                                            <option value="Female" selected>Female</option>
                                          @endif
                                        </select>
                                        @if ($errors->has('gender'))
                                              <span class="invalid-feedback">
                                                  <strong>{{ $errors->first('gender') }}</strong>
                                              </span>
                                          @endif
                                    </div>

                                      <div class="remember">
                                          <div class="checkbox">
                                              <label>
                                                  <input name="i_agreed_checkbox" type="checkbox" required>
                                                  I accept the <a href="#">Terms and Conditions</a> of the website
                                              </label>
                                              @if ($errors->has('i_agreed_checkbox'))
                                                  <span class="invalid-feedback">
                                                      <strong>{{ $errors->first('i_agreed_checkbox') }}</strong>
                                                  </span>
                                              @endif
                                          </div>
                                      </div>

                                      <button  type="submit" style="padding: 2%" class="btn btn-purple btn-lg full-width">Complete Registration!</button>
                                  </div>
                              </div>
                          </form>
                         </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@foreach ($errors as $error)
    <li>{{$error}}</li>
@endforeach

@endsection
