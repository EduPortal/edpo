@extends('layouts.teacher.parent')

@section('content')

<div class="col-xl-12 order-xl-2 col-lg-12 order-lg-2 col-md-12 order-md-1 col-sm-12 col-xs-12">
  <div class="ui-block">
    <div class="row">
      <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 padding-r-0">
        <ul class="notification-list chat-message">
          @foreach(getstudents_teacher() as $user)
          <a href="/">
            <li>
              <div class="author-thumb">
                @if($user->personal_information['avatar'] == "")
                  <img src="/images/{{$user->gender}}.png" alt="author">
                @else
                  <img src="{{$user->personal_information['avatar']}}" alt="author">
                @endif
              </div>
              <div class="notification-event">
                <span class="h6 notification-friend">{{$user->first_name}} {{$user->last_name}}</spab>
                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">{{\Carbon\Carbon::parse($user->last_seen)->diffForHumans()}}</time></span>
              </div>
            </li>
          </a>
          @endforeach
        </ul>
      </div>

      <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 padding-l-0">
        <div class="chat-field">
          <div class="ui-block-title">
            <h6 class="title">Elaine Dreyfuss</h6>
          </div>
          <div class="mCustomScrollbar" data-mcs-theme="dark">
            <ul class="notification-list chat-message chat-message-field message_box">
              <li>
                <div class="author-thumb">
                  <img src="img/avatar10-sm.jpg" alt="author">
                </div>
                <div class="notification-event">
                  <a href="#" class="h6 notification-friend">Elaine Dreyfuss</a>
                  <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
                  <span class="chat-message-item">Hi James, How are your doing? Please remember that next week we are going to Gotham Bar to celebrate Marina’s Birthday.</span>
                </div>
              </li>
            </ul>
          </div>

          <form>
            <div class="form-group">
              <textarea class="form-control" placeholder="Type a message..."></textarea>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>

@include('TeacherViews.components.responsive_sidebar')
@endsection