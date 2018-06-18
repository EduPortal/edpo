@extends('layouts.teacher.parent')

@section('in_page_stylesheets')
  <link rel="stylesheet" type="text/css" href="/edpo/css/swiper.min.css">
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
      <div class="h6 title">{{Auth::user()->first_name}} {{Auth::user()->last_name}}'s classes ({{count($classes)}})</div>
      <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#add_new_class_modal"><i class="icon-plus3"></i> CREATE NEW CLASS</button>
    </div>
  </div>
</div>

@if(count($classes) > 0)
  @foreach($classes as $class)
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
          <div class="ui-block">
            <div class="friend-item">
              <div class="friend-header-thumb">
                <img src="/edpo/img/friend1.jpg" alt="friend">
              </div>

              <div class="friend-item-content">

                <div class="more">
                  <svg class="olymp-three-dots-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-three-dots-icon"></use></svg>
                  <ul class="more-dropdown">
                    <li>
                      <a href="#">Report Profile</a>
                    </li>
                    <li>
                      <a href="#">Block Profile</a>
                    </li>
                    <li>
                      <a href="#">Turn Off Notifications</a>
                    </li>
                  </ul>
                </div>
                <div class="friend-avatar">
                  <div class="author-thumb">
                    <img src="/edpo/img/avatar1.jpg" alt="author">
                  </div>
                  <div class="author-content">
                    <a href="#" class="h5 author-name">Nicholas Grissom</a>
                    <div class="country">San Francisco, CA</div>
                  </div>
                </div>

                <div class="swiper-container swiper-swiper-unique-id-0 initialized swiper-container-horizontal" data-slide="fade" id="swiper-unique-id-0">
                  <div class="swiper-wrapper" style="width: 784px; transform: translate3d(-196px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 196px;">
                      <p class="friend-about" data-swiper-parallax="-500" style="transform: translate3d(-500px, 0px, 0px); transition-duration: 0ms;">
                        Hi!, I’m Marina and I’m a Community Manager for “Gametube”. Gamer and full-time mother.
                      </p>

                      <div class="friend-since" data-swiper-parallax="-100" style="transform: translate3d(-100px, 0px, 0px); transition-duration: 0ms;">
                        <span>Friends Since:</span>
                        <div class="h6">December 2014</div>
                      </div>
                    </div>
                    <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 196px;">
                      <div class="friend-count" data-swiper-parallax="-500" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                        <a href="#" class="friend-count-item">
                          <div class="h6">52</div>
                          <div class="title">Friends</div>
                        </a>
                        <a href="#" class="friend-count-item">
                          <div class="h6">240</div>
                          <div class="title">Photos</div>
                        </a>
                        <a href="#" class="friend-count-item">
                          <div class="h6">16</div>
                          <div class="title">Videos</div>
                        </a>
                      </div>
                      <div class="control-block-button" data-swiper-parallax="-100" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                        <a href="#" class="btn btn-control bg-blue">
                          <svg class="olymp-happy-face-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-happy-face-icon"></use></svg>
                        </a>

                        <a href="#" class="btn btn-control bg-purple">
                          <svg class="olymp-chat---messages-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                        </a>

                      </div>
                    </div>

                    <div class="swiper-slide swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" style="width: 196px;">
                      <p class="friend-about" data-swiper-parallax="-500" style="transform: translate3d(500px, 0px, 0px); transition-duration: 0ms;">
                        Hi!, I’m Marina and I’m a Community Manager for “Gametube”. Gamer and full-time mother.
                      </p>

                      <div class="friend-since" data-swiper-parallax="-100" style="transform: translate3d(100px, 0px, 0px); transition-duration: 0ms;">
                        <span>Friends Since:</span>
                        <div class="h6">December 2014</div>
                      </div>
                    </div>
                  <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 196px;">
                      <div class="friend-count" data-swiper-parallax="-500" style="transform: translate3d(500px, 0px, 0px); transition-duration: 0ms;">
                        <a href="#" class="friend-count-item">
                          <div class="h6">52</div>
                          <div class="title">Friends</div>
                        </a>
                        <a href="#" class="friend-count-item">
                          <div class="h6">240</div>
                          <div class="title">Photos</div>
                        </a>
                        <a href="#" class="friend-count-item">
                          <div class="h6">16</div>
                          <div class="title">Videos</div>
                        </a>
                      </div>
                      <div class="control-block-button" data-swiper-parallax="-100" style="transform: translate3d(100px, 0px, 0px); transition-duration: 0ms;">
                        <a href="#" class="btn btn-control bg-blue">
                          <svg class="olymp-happy-face-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-happy-face-icon"></use></svg>
                        </a>

                        <a href="#" class="btn btn-control bg-purple">
                          <svg class="olymp-chat---messages-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                        </a>

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
  <button class="btn btn-primary" data-toggle="modal" data-target="#add_new_class_modal"><i class="icon-plus3"></i> CREATE YOUR FIRST CLASS</button>
</div>
@endif

@include('TeacherViews.components.responsive_sidebar')

<div class="modal fade" id="add_new_class_modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Create New Class</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="post" action="/teacher/create-class" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label class="control-label">Class name</label>
            <input id="class_name" name="class_name" type="text" class="form-control" required autocomplete="off">
            @if ($errors->has('class_name'))
                <span class="invalid-feedback" style="display: block;">
                    <strong>{{ $errors->first('class_name') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
            <label class="control-label">Class description</label>
            <textarea class="form-control" id="class_description" name="class_description" rows="1"></textarea>
            @if ($errors->has('class_description'))
                <span class="invalid-feedback" style="display: block;">
                    <strong>{{ $errors->first('class_description') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
            <label class="control-label">Avatar</label>
            <input id="class_avatar" name="class_avatar" type="file" class="form-control">
            @if ($errors->has('class_avatar'))
                <span class="invalid-feedback" style="display: block;">
                    <strong>{{ $errors->first('class_avatar') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
            <label class="control-label">Cover Photo</label>
            <input id="class_cover_photo" name="class_cover_photo" type="file" class="form-control">
            @if ($errors->has('class_cover_photo'))
                <span class="invalid-feedback" style="display: block;">
                    <strong>{{ $errors->first('class_cover_photo') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group pull-right">
            <button type="submit" class="btn btn-primary"><i class="icon-plus3"></i> Create</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>
@endsection