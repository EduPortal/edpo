@extends('layouts.student.parent')

@section('in_page_stylesheets')
  <link rel="stylesheet" type="text/css" href="/edpo/css/daterangepicker.css">
@endsection

@section('in_page_scripts')
  <script src="/edpo/js/daterangepicker.min.js"></script>
@endsection

@section('content')

<div class="col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-xs-12">
  <div class="ui-block">
    <div class="ui-block-title">
      <h6 class="title">Personal Information</h6>
    </div>
    <div class="ui-block-content">
      <form>
        <div class="row">

          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="form-group">
              <label class="control-label">First Name</label>
              <input class="form-control" id="first_name" type="text" value="{{Auth::user()->first_name}}">
            </div>

            <div class="form-group">
              <label class="control-label">Your Email</label>
              <input class="form-control" value="{{Auth::user()->email}}" type="email" disabled>
            </div>

            <div class="form-group date-time-picker">
              <label class="control-label">Your Birthday</label>
              <input name="datetimepicker" id="birthday" value="{{$student_information['birthday']}}" />
              <span class="input-group-addon" style="padding: 25px 15px 0 0;">
                <svg class="olymp-month-calendar-icon icon"><use xlink:href="/edpo/icons/icons.svg#olymp-month-calendar-icon"></use></svg>
              </span>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="form-group">
              <label class="control-label">Last Name</label>
              <input class="form-control" id="last_name" type="text" value="{{Auth::user()->last_name}}">
            </div>

            <div class="form-group">
              <label class="control-label">Your Website</label>
              <input class="form-control" type="text" value="{{$student_information['website']}}" id="website">
            </div>


            <div class="form-group is-empty">
              <label class="control-label">Your Phone Number</label>
              <input class="form-control" type="text" id="phone" value="{{Auth::user()->phone}}">
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="form-group">
              <label class="control-label">Your Country</label>
              <select class="form-control" size="auto" id="country" disabled>
                <option value="PK">Pakistan</option>
              </select>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="form-group">
              <label class="control-label">Your State / Province</label>
              <select class="form-control" size="auto" id="province">
                @foreach(getProvices() as $province)
                  @if($province['code'] == $student_information['province'])
                    <option value="{{$province['code']}}" selected>{{$province['name']}}</option>
                  @else
                    <option value="{{$province['code']}}">{{$province['name']}}</option>
                  @endif
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="form-group">
              <label class="control-label">Your City</label>
              <select class="form-control" size="auto" id="city">
                @foreach(getCities() as $city)
                  @if($city['city'] == $student_information['city'])
                    <option value="{{$city['city']}}" selected>{{$city['city']}}</option>
                  @else
                    <option value="{{$city['city']}}">{{$city['city']}}</option>
                  @endif
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="form-group">
              <label class="control-label">Write a little description about you</label>
              <textarea class="form-control" id="description">{{$student_information['description']}}</textarea>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="form-group is-empty">
              <label class="control-label">Your Birthplace</label>
              <input class="form-control" type="text" id="birthplace" value="{{$student_information['birthplace']}}">
            </div>

            <div class="form-group">
              <label class="control-label">Your Occupation</label>
              <input class="form-control" value="{{Auth::user()->occupation}}" type="text" disabled>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="form-group">
              <label class="control-label">Your Gender</label>
              <select class="form-control" size="auto" disabled>
                <option value="MA">Male</option>
                <option value="FE">Female</option>
              </select>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="form-group">
              <label class="control-label">Marital Status</label>
              <select class="form-control" size="auto" id="marital_status">
                 @foreach(getMartialStatus() as $status)
                  @if($status['code'] == $student_information['marital_status'])
                    <option value="{{$status['code']}}" selected>{{$status['name']}}</option>
                  @else
                    <option value="{{$status['code']}}">{{$status['name']}}</option>
                  @endif
                @endforeach
                
              </select>
            </div>
          </div>

          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group with-icon">
              <label class="control-label">Your Facebook Account</label>
              <input id="facebook" class="form-control" type="text" placeholder="https://www.facebook.com/edpo" value="{{$student_information['facebook']}}">
              <i style="top: 28px; height: 57px;" class="fa fa-facebook c-facebook" aria-hidden="true"></i>
            </div>
            <div class="form-group with-icon">
              <label class="control-label">Your Twitter Account</label>
              <input id="twitter" class="form-control" type="text" placeholder="https://www.twitter.com/edpo" value="{{$student_information['twitter']}}">
              <i style="top: 28px; height: 57px;" class="fa fa-twitter c-twitter" aria-hidden="true"></i>
            </div>
            <div class="form-group with-icon">
              <label class="control-label">Your Linkedin Account</label>
              <input id="linkedin" class="form-control" type="text" placeholder="https://www.linkedin.com/edpo" value="{{$student_information['linkedin']}}">
              <i style="top: 28px; height: 57px;" class="fa fa-linkedin c-linkedin" aria-hidden="true"></i>
            </div>
            <div class="form-group with-icon">
              <label class="control-label">Your Google+ Account</label>
              <input id="google_plus" class="form-control" type="text" placeholder ="https://plus.google.com/edpo" value="{{$student_information['google_plus']}}">
              <i style="top: 28px; height: 57px;" class="fa fa-google-plus c-google-plus" aria-hidden="true"></i>
            </div>
          </div>
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <button id="save_profile_information" type="button" class="btn btn-primary btn-lg full-width">Save all Changes</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="col col-xl-3 order-xl-1 col-lg-3 order-lg-1 col-md-12 order-md-2 col-sm-12  responsive-display-none">
  @include('StudentViews.components.responsive_sidebar_desktop')
</div>

@include('StudentViews.components.responsive_sidebar')
@endsection