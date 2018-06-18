@extends('layouts.student.parent')

@section('content')
<div class="col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-xs-12">

   @if(Session::has('success'))
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>{{Session::get('success')}}</strong>
      </div>
   @endif

   <div class="ui-block">
      <div class="ui-block-title">
         <h6 class="title">Change Password</h6>
      </div>
      <div class="ui-block-content">
         <form action="/student/settings/change-password" method="POST" id="change_password_form">
            @csrf
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                     <label class="control-label">Your Email</label>
                     <input class="form-control" id="email" name="email" placeholder="john@example.com" type="text">
                     <span class="material-input"></span>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                     <label class="control-label">Your New Password</label>
                     <input class="form-control" id="new_password" name="new_password" placeholder="" type="password">
                     <span class="material-input"></span>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                     <label class="control-label">Confirm New Password</label>
                     <input class="form-control" id="new_password_repeat" name="new_password_repeat" placeholder="" type="password">
                     <span class="material-input"></span>
                  </div>
               </div>
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <button id="change_password_btn" type="button" class="btn btn-primary btn-lg full-width">Change Password Now!</button>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
<div class="col col-xl-3 order-xl-1 col-lg-3 order-lg-1 col-md-12 order-md-2 col-sm-12  responsive-display-none">
  @include('StudentViews.components.responsive_sidebar_desktop')
</div>


<!-- The Modal -->
<div class="modal fade" id="questions_modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Answer the security questions</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        @foreach($questions as $key => $question)
          <div class="form-group">
            <label class="control-label">{{$question->question}}</label>
            <input id="answer_{{($key+1)}}" type="text" class="form-control" required autocomplete="off">
          </div>
        @endforeach
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" id="verify_security_questions_button" class="btn btn-primary">Verify</button>
      </div>

    </div>
  </div>
</div>

@include('StudentViews.components.responsive_sidebar')
@endsection