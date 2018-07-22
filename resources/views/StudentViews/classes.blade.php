@extends('layouts.student.parent')

@section('in_page_stylesheets')
  <link rel="stylesheet" type="text/css" href="/edpo/css/swiper.min.css">

  <style type="text/css">
    .is-focused{
      border: none !important;
    }
  </style>
@endsection

@section('in_page_scripts')
  <script src="/edpo/js/swiper.jquery.min.js"></script>
@endsection

@section('content')

<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0; padding-right: 0;">

  @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>{{Session::get('success')}}</strong>
    </div>
  @endif

  <div class="ui-block responsive-flex">
    <div class="ui-block-title">
      <div class="h6 title">My Classes ({{count($classes)}})</div>
      <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#join_class_modal">JOIN CLASS</button>
    </div>
  </div>
</div>

@if(count($classes) > 0)
  @foreach($classes as $class)
    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6">
          <div class="ui-block">
            <div class="friend-item">
              <div class="friend-header-thumb clearfix" style="background: url({{$class->cover}}) no-repeat; height: 125px; background-size: cover; background-position-x: center;background-position-y: center;">
              </div>

              <div class="friend-item-content">
                <div class="friend-avatar">
                  <div class="author-thumb">
                    <img class="img-fluid" src="{{$class->avatar}}" alt="avatar" style="min-height: 100px; min-width: 100px;">
                  </div>
                  <div class="author-content">
                    <a href="/student/classes/{{$class->code}}" class="h5 author-name">{{$class->name}}</a>
                    <div class="country">{{$class->code}}</div>
                  </div>
                </div>

                <div class="swiper-container swiper-swiper-unique-id-0 initialized swiper-container-horizontal" data-slide="fade" id="swiper-unique-id-0">
                  <div class="swiper-wrapper" style="width: 784px; transform: translate3d(-196px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 196px;">
                      <p class="friend-about" data-swiper-parallax="-500" style="transform: translate3d(-500px, 0px, 0px); transition-duration: 0ms;">
                        {{substr($class->description, 0, 100)}}...
                      </p>

                      <div class="friend-since" data-swiper-parallax="-100" style="transform: translate3d(-100px, 0px, 0px); transition-duration: 0ms;">
                        <span>Created at:</span>
                        <div class="h6">{{$class->created_at->toDayDateTimeString()}}</div>
                      </div>
                    </div>
                    <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 196px;">
                      <div class="friend-count" data-swiper-parallax="-500" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                        <a href="/student/class/{{$class->code}}" class="friend-count-item">
                          <div class="h6">{{count($class->students)}}</div>
                          <div class="title">Students</div>
                        </a>
                        <a href="/student/class/{{$class->code}}" class="friend-count-item">
                          <div class="h6">{{count($class->posts)}}</div>
                          <div class="title">Posts</div>
                        </a>
                      </div>
                      <div class="control-block-button" data-swiper-parallax="-100" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                        <a href="/student/classes/{{$class->code}}"><button class="btn btn-primary">View Class</button></a>
                      </div>
                    </div>

                    <div class="swiper-slide swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" style="width: 196px;">
                      <p class="friend-about" data-swiper-parallax="-500" style="transform: translate3d(500px, 0px, 0px); transition-duration: 0ms;">
                        {{substr($class->description, 0, 100)}}...
                      </p>

                      <div class="friend-since" data-swiper-parallax="-100" style="transform: translate3d(100px, 0px, 0px); transition-duration: 0ms;">
                        <span>Created at:</span>
                        <div class="h6">{{$class->created_at->toDayDateTimeString()}}</div>
                      </div>
                    </div>
                  <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 196px;">
                      <div class="friend-count" data-swiper-parallax="-500" style="transform: translate3d(500px, 0px, 0px); transition-duration: 0ms;">
                        <a href="/student/class/{{$class->code}}" class="friend-count-item">
                          <div class="h6">{{count($class->students)}}</div>
                          <div class="title">Students</div>
                        </a>
                        <a href="/student/class/{{$class->code}}" class="friend-count-item">
                          <div class="h6">{{count($class->posts)}}</div>
                          <div class="title">Posts</div>
                        </a>
                      </div>
                      <div class="control-block-button" data-swiper-parallax="-100" style="transform: translate3d(100px, 0px, 0px); transition-duration: 0ms;">
                        <a href="/student/classes/{{$class->code}}"><button class="btn btn-primary">View Class</button></a>
                      </div>
                    </div></div>

                  <!-- If we need pagination -->
                  <div class="swiper-pagination pagination-swiper-unique-id-0 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span></div>
                </div>
              </div>
            </div>
          </div>
    </div>
  @endforeach
@else
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background: white; padding: 15%;" align="center">
  <p style="font-size: 25px; font-family: Calibri; font-weight: lighter;">No class has been created yet!</p>
  <button class="btn btn-primary" data-toggle="modal" data-target="#join_class_modal">Join You First Class</button>
</div>
@endif

@include('StudentViews.components.responsive_sidebar')
@endsection