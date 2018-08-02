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
                            <div class="title h6">Recover you account</div>
                            <form method="POST" action="{{ route('password.email') }}">
                              @csrf

                              <div class="form-group row">
                                  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                  <div class="col-md-6">
                                      <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                      @if ($errors->has('email'))
                                          <span class="invalid-feedback">
                                              <strong>{{ $errors->first('email') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>

                              <div class="form-group row mb-0">
                                  <div class="col-md-6 offset-md-4">
                                      <button type="submit" class="btn btn-primary">
                                          {{ __('Send Password Reset Link') }}
                                      </button>
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
