@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          @if(Session::has('warning_message'))
            <div class="alert alert-warning alert-dismissible">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>{{Session::get('warning_message')}}</strong>
            </div>
         @endif
            <div class="card">
                <div class="card-body">
                   <div class="registration-login-form" style="min-height: auto; padding-left: 0;">
                      <div class="tab-content">
                         <div class="tab-pane active" id="profile" role="tabpanel" data-mh="log-tab" style="" aria-expanded="true">
                            <div class="title h6">Login to your Account</div>
                            <form class="content" method="POST" action="{{ route('login') }}">
                               @csrf
                               <div class="row">
                                  <div class="col-xl-12 col-lg-12 col-md-12">
                                     <div class="form-group">
                                        <label class="control-label">Your Email</label>
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                          @if ($errors->has('email'))
                                              <span class="invalid-feedback">
                                                  <strong>{{ $errors->first('email') }}</strong>
                                              </span>
                                          @endif
                                        <span class="material-input"></span>
                                     </div>
                                     <div class="form-group">
                                        <label class="control-label">Your Password</label>
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                          @if ($errors->has('password'))
                                              <span class="invalid-feedback">
                                                  <strong>{{ $errors->first('password') }}</strong>
                                              </span>
                                          @endif
                                        <span class="material-input"></span>
                                     </div>
                                     <div class="remember">
                                        <div class="checkbox">
                                           <label>
                                           <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                           </span></span>
                                           Remember Me
                                           </label>
                                        </div>
                                        <a class="forgot" href="{{ route('password.request') }}">
                                           {{ __('Forgot Your Password?') }}
                                       </a>
                                     </div>
                                     <button style="padding: 2%;" class="btn btn-lg btn-primary full-width">Login</button>
                                     <p>Don’t you have an account? <a href="/register">Register Now!</a> it’s really simple and you can start enjoing all the benefits!</p>
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



@endsection
