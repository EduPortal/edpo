@extends('layouts.teacher.parent')

@section('in_page_stylesheets')
   <style type="text/css">
      .td{
         font-size: 23px !important;
         vertical-align: middle !important;
         font-family: Calibri !important;
         font-weight: lighter !important;
      }
   </style>
@endsection

@section('content')

<div class="container">
   <div class="row">
      <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
         <div class="ui-block">
            <div class="top-header">
               <div class="top-header-thumb clearfix" style="height: 300px; background-position: center; background: url({{$class->cover}}) no-repeat; background-size: cover; background-position-x: center; background-position-y: center;">
               </div>
               <div class="profile-section">
                  <div class="row">
                     <div class="col col-lg-5 ml-auto col-md-5 col-sm-12 col-12">
                        <ul class="profile-menu">
                           <li>
                              <div class="more">
                                 <svg class="olymp-three-dots-icon">
                                 </svg>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="top-header-author">
                  <a href="{{URL::current()}}" class="author-thumb">
                    <img class="img-fluid" src="{{$class->avatar}}" alt="avatar`">
                  </a>
                  <div class="author-content">
                     <a href="{{URL::current()}}" class="h4 author-name">{{$class->name}}</a>
                     <div class="country">{{$class->code}}</div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="container">
   <div class="row">
      <!-- Main Content -->
      <div class="col col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
         @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>{{Session::get('success')}}</strong>
            </div>
         @endif
      <div class="ui-block">
      <!-- News Feed Form  -->
      <div class="news-feed-form">
        <form id="post_form" action="/teacher/class/create-post" method="post" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
               <textarea id="post_description" name="description" class="form-control" placeholder="Write something here ...">{{old('description')}}</textarea>
               @if ($errors->has('description'))
                   <span class="invalid-feedback" style="display: block;">
                       <strong>{{ $errors->first('description') }}</strong>
                   </span>
               @endif
            </div>

            <div class="add-options-message">
               <select class="form-control" size="auto" name="post_type" id="post_type">
                  <option value="none" {{(old('post_type') == 'none' ? 'selected':'')}}>Select post type</option>
                  <option value="general post" {{(old('post_type') == 'general post' ? 'selected':'')}}>General post</option>
                  <option value="lecture" {{(old('post_type') == 'lecture' ? 'selected':'')}}>Lecture</option>
                  <option value="assignment" {{(old('post_type') == 'assignment' ? 'selected':'')}}>Assignment</option>
                  <option value="announcement" {{(old('post_type') == 'announcement' ? 'selected':'')}}>Announcement</option>
               </select>
               @if ($errors->has('post_type'))
                   <span class="invalid-feedback" style="display: block;">
                       <strong>{{ $errors->first('post_type') }}</strong>
                   </span>
               @endif
            </div>

            @if(count($errors) > 0 && old("post_type") != "announcement" )
               <div class="add-options-message" id="attachments">
                  <input class="form-control" name="attachments[]" type="file" multiple>
                  <small>Only txt, pdf, xls, doc, ppt, pptx, pps, jpeg, jpg, bmp, png allowed (Max size: 25MB)</small>
                  @if ($errors->has('attachments.*'))
                     <span class="invalid-feedback" style="display: block;">
                          <strong>Please upload valid documents.</strong>
                      </span>
                  @endif
               </div>
            @else
               <div class="add-options-message" id="attachments" style="display: none;">
                  <input class="form-control" name="attachments[]" type="file" multiple="multiple">
                  <small>Only txt, pdf, xls, doc, ppt, pptx, pps, jpeg, jpg, bmp, png allowed (Max size: 25MB)</small>
                  @if ($errors->has('attachments.*'))
                     <span class="invalid-feedback" style="display: block;">
                          <strong>Please upload a valid document.</strong>
                      </span>
                  @endif
               </div>
            @endif

            <input type="hidden" name="class_id" value="{{$class->id}}">
            @if(count($errors) > 0)
               <div class="form-group pull-right" style="margin-right: 4%;">
                  <button type="button" class="btn btn-primary" id="post_btn" {{(count($errors) == 0 ? 'disabled' :'')}}>Post</button>
               </div>
            @else
               <div class="form-group pull-right" style="margin-right: 4%;">
                  <button type="button" class="btn" id="post_btn" {{(count($errors) == 0 ? 'disabled' :'')}}>Post</button>
               </div>
            @endif
        </form>
      </div>
      <!-- ... end News Feed Form  -->      
   </div>
         <div id="newsfeed-items-grid">

            @if(count($posts) > 0)
               @foreach($posts as $key => $post)
                  <div class="ui-block">
                     <!-- Post -->
                     <article class="hentry post">
                        <div class="post__author author vcard inline-items">
                           @if(isset($post->learning_class->user->personal_information->avatar))
                              <img class="img-fluid" src="{{$post->learning_class->user->personal_information->avatar}}" alt="author">
                           @else
                              <img class="img-fluid" src="/images/{{Auth::user()->gender}}.png" alt="author">
                           @endif
                           <div class="author-date">
                              <a class="h6 post__author-name fn" href="/teacher/profile">{{$post->learning_class->user->first_name}} {{$post->learning_class->user->last_name}}</a> created a <a class="h6 post__author-name fn" href="/class/post/{{$class->code}}/{{$post->id}}">{{$post->type}}</a>
                              <div class="post__date">
                                 <time class="published" datetime="2017-03-24T18:18">
                                    {{$post->created_at->toDayDateTimeString()}}
                                 </time>
                              </div>
                           </div>
                        </div>
                        <p>{{$post->description}}</p>
                        
                        @if(count($post->attachments) > 0)
                           <hr>
                           <div class="row">
                             <button onclick="view_attachments({{$post->id}})" class="btn btn-primary btn-sm btn-block"><i class="icon-attachment position-left"></i> View Attachments ({{count($post->attachments)}})</button>
                           </div>
                        @endif
                        <div class="post-additional-info inline-items">
                           <ul class="friends-harmonic">
                              @if($comments_array[$key][0] != null)
                                 @foreach($comments_array[$key] as $commentator)
                                    <li>
                                       <a href="#">
                                          <img class="img-fluid" src="{{$commentator[0]}}" alt="friend" title="{{$commentator[1]}}">
                                       </a>
                                    </li>
                                 @endforeach
                              @endif
                           </ul>
                           <div class="names-people-likes">

                              @if($comments_array[$key][0] != null)
                                 @foreach($comments_array[$key] as $key2 => $commentator)
                                    @if($key2 == 0)
                                       @if(count($comments_array[$key]) > 1)
                                          <a href="#">{{$commentator[1]}}, </a>
                                       @else
                                          <a href="#">{{$commentator[1]}}</a>
                                       @endif
                                    @elseif($key2 == 1)
                                       <a href="#">{{$commentator[1]}}</a>
                                    @endif
                                 @endforeach 
                                 @if(count($comments_array[$key]) > 2)
                                    and
                                    <br>{{(count($comments_array[$key]) - 2)}} more commented on this.
                                 @endif
                              @endif
                           </div>
                           <div class="comments-shared">
                              <a onclick="toggleComments({{$post->id}})" class="post-add-icon inline-items">
                                 <svg class="olymp-speech-balloon-icon">
                                    <use xlink:href="/icons/icons.svg#olymp-speech-balloon-icon"></use>
                                 </svg>
                                 <span id="comment_counter_{{$post->id}}">{{count($post->comments)}}</span>
                              </a>                        
                           </div>
                        </div>
                     </article>
                     <ul class="comments-list comment_box_{{$post->id}}" id="comment_box_{{$post->id}}" style="display: none;">
                        @foreach($post->comments as $comment)
                           <li class="comment-item" style="padding: 1% 0 0 3%;">
                              <div class="post__author author vcard inline-items">
                                 @if(isset($comment->user->personal_information->avatar))
                                    <img class="img-fluid" src="{{$comment->user->personal_information->avatar}}" alt="author">
                                 @else
                                    <img class="img-fluid" src="/images/{{$comment->user->gender}}.png" alt="author">
                                 @endif
                        
                                 <div class="author-date">
                                    <a class="h6 post__author-name fn" href="#">{{$comment->user->first_name}} {{$comment->user->last_name}}</a>
                                    <div class="post__date">
                                       <time class="published" datetime="2004-07-24T18:18">
                                          {{$comment->created_at->toDayDateTimeString()}}
                                       </time>
                                    </div>
                                 </div>
                              </div>
                              <p>{{$comment->comment}}</p>
                           </li>
                        @endforeach
                     </ul>
                     <form class="comment-form inline-items comment_box_{{$post->id}}" style="display: none;">
               
                        <div class="post__author author vcard inline-items">
                           @if(isset($post->learning_class->user->personal_information->avatar))
                              <img class="img-fluid" src="{{$post->learning_class->user->personal_information->avatar}}" alt="author">
                           @else
                              <img class="img-fluid" src="/images/{{Auth::user()->gender}}.png" alt="author">
                           @endif
                     
                           <div class="form-group with-icon-right is-empty">
                              <textarea id="comment_{{$post->id}}" class="form-control" placeholder=""></textarea>
                           <span class="material-input"></span></div>
                        </div>
                     
                        <button type="button" class="btn btn-md-2 btn-primary" onclick="create_comment({{$post->id}})">Post Comment</button>
                     
                     </form>
                     <!-- .. end Post -->       
                  </div>
               @endforeach
            @else
               <div class="ui-block" style="padding: 10%; text-align: center; font-size: 25px; font-weight: lighter; font-family: Calibri;">
                  Nothing yet ...
               </div>
            @endif
         </div>
         @if(count($posts) > 10)
            <a id="load-more-button" href="#" class="btn btn-control btn-more" data-load-link="items-to-load.html" data-container="newsfeed-items-grid">
               <svg class="olymp-three-dots-icon">
                  <use xlink:href="/icons/icons.svg#olymp-three-dots-icon"></use>
               </svg>
            </a>
         @endif
      </div>
      <!-- ... end Main Content -->
      <!-- Left Sidebar -->
      <div class="col col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-12 col-12">
         <div class="ui-block">
            <div class="ui-block-title">
               <h6 class="title">Class Information</h6>
            </div>
            <div class="ui-block-content">
               <!-- W-Personal-Info -->
               <ul class="widget w-personal-info item-block">
                  <li>
                     <span class="title">About:</span>
                     <span class="text">{{$class->description}}</span>
                  </li>
                  <li>
                     <span class="title">Class Code:</span>
                     <span class="text"><b>{{$class->code}}</b></span>
                  </li>
                  <li>
                     <span class="title">Created at:</span>
                     <span class="text">{{$class->created_at->toDayDateTimeString()}}</span>
                  </li>
               </ul>
               <!-- .. end W-Personal-Info -->
            </div>
         </div>
      </div>
      <!-- ... end Left Sidebar -->
      <!-- Right Sidebar -->
      <div class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">
         <div class="ui-block">
            <div class="ui-block-title">
               <h6 class="title">Latest Photos</h6>
            </div>
            <div class="ui-block-content">
               <!-- W-Latest-Photo -->
               <ul class="widget w-last-photo js-zoom-gallery">
                  @if(count($pictures))
                     @foreach($pictures as $picture)
                     <li>
                        <a href="{{$picture->path}}" target="_blank">
                           <img class="img-fluid" src="{{$picture->path}}" alt="photo">
                        </a>
                     </li>
                     @endforeach
                  @endif
               </ul>
               <!-- .. end W-Latest-Photo -->
            </div>
         </div>

         <div class="ui-block">
            <div class="ui-block-title">
               <h6 class="title">Students ({{count($students)}})</h6>
            </div>
            <div class="ui-block-content">
               <!-- W-Faved-Page -->
               <ul class="widget w-faved-page js-zoom-gallery">
                  @if(count($students) > 0)
                     @foreach($students as $key => $student)
                        @if($key < 24)
                           <li>
                              <a href="#">
                                 @if(isset($student->personal_information->avatar))
                                    <img title="{{$student->first_name}} {{$student->last_name}}" class="img-fluid" src="{{$student->personal_information->avatar}}" alt="author">
                                 @else
                                    <img title="{{$student->first_name}} {{$student->last_name}}" class="img-fluid" src="/images/{{$student->gender}}.png" alt="author">
                                 @endif
                              </a>
                           </li>
                        @endif
                     @endforeach
                  @if($key > 23)
                     <li class="all-users">
                        <a href="#">+{{count($students) - 24}}</a>
                     </li>
                  @endif
                  @else
                     <button class="btn btn-primary btn-sm">Invite Students</button>
                  @endif
               </ul>
               <!-- .. end W-Faved-Page -->
            </div>
         </div>

      </div>
      <!-- ... end Right Sidebar -->
   </div>
</div>

<div class="modal fade" id="attachments_modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Attachments</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body" style="overflow-y: scroll; max-height: 500px;">
         <table class="table">
          <thead class="thead-light">
            <tr>
              <th>Type</th>
              <th>Name</th>
              <th>Size</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="attachments_table"></tbody>
         </table>
      </div>

    </div>
  </div>
</div>
@endsection