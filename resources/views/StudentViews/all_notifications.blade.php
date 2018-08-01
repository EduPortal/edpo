@extends('layouts.student.parent')

@section('content')

<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">

  <div class="ui-block responsive-flex">
    <div class="ui-block-title">
      <div class="h6 title">Notifications</div>
    </div>
  </div>

  @foreach($all_notifications as $notification)
  <a href="/student/notifications/{{$notification->id}}">
    @if(explode("\\", $notification->type)[2] == "PostCreated")
      @if($notification->read_at == null)
        <div class="ui-block unread_notification">
      @else
        <div class="ui-block">
      @endif
        <div class="birthday-item inline-items badges">
          <div class="author-thumb">
            <img src="{{$notification->data['class']['avatar']}}" alt="author">
          </div>
          <div class="birthday-author-name">
            <span href="#" class="h6 author-name">
              <div><b>{{$notification->data['teacher']['first_name']}} {{$notification->data['teacher']['last_name']}}</b> created a new <b>{{$notification->data['post']['type']}}</b> in <b>{{$notification->data['class']['name']}}</b>.</div>
            </span>
          </div>
          <div class="skills-item" align="right">
            <span><time>{{$notification->created_at->diffForHumans()}}</time></span>
          </div>
        </div>
      </div>
    @elseif(explode("\\", $notification->type)[2] == "CommentCreated")
      @if($notification->read_at == null)
        <div class="ui-block unread_notification">
      @else
        <div class="ui-block">
      @endif
        <div class="birthday-item inline-items badges">
          <div class="author-thumb">
            <img src="{{$notification->data['class']['avatar']}}" alt="author">
          </div>
          <div class="birthday-author-name">
            <span href="#" class="h6 author-name">
              <div><b>{{$notification->data['commentator']['first_name']}} {{$notification->data['commentator']['last_name']}}</b> commented on a post in <b>{{$notification->data['class']['name']}}</b>.</div>
            </span>
          </div>
          <div class="skills-item" align="right">
            <span><time>{{$notification->created_at->diffForHumans()}}</time></span>
          </div>
        </div>
      </div>
    @elseif(explode("\\", $notification->type)[2] == "ClassJoined")
      @if($notification->read_at == null)
        <div class="ui-block unread_notification">
      @else
        <div class="ui-block">
      @endif
        <div class="birthday-item inline-items badges">
          <div class="author-thumb">
            <img src="{{$notification->data['class']['avatar']}}" alt="author">
          </div>
          <div class="birthday-author-name">
            <span href="#" class="h6 author-name">
              <div><b>{{$notification->data['student']['first_name']}} {{$notification->data['student']['last_name']}}</b> joined <b>{{$notification->data['class']['name']}}</b>.</div>
            </span>
          </div>
          <div class="skills-item" align="right">
            <span><time>{{$notification->created_at->diffForHumans()}}</time></span>
          </div>
        </div>
      </div>
    @endif
  </a>
  @endforeach
</div>

@endsection