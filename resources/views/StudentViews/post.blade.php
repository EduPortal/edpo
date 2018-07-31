@extends('layouts.student.parent')

@section('content')
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="ui-block responsive-flex">
    <div class="ui-block-title">
      <div class="h6 title">{{ucfirst($post->type)}}</div>
    </div>
    <div class="ui-block-content">
      <article class="hentry post">
        <div class="post__author author vcard inline-items">
           @if(isset($post->learning_class->user->personal_information->avatar))
           <img class="img-fluid" src="{{$post->learning_class->user->personal_information->avatar}}" alt="author">
           @else
           <img class="img-fluid" src="/images/{{Auth::user()->gender}}.png" alt="author">
           @endif
           <div class="author-date">
              <a class="h6 post__author-name fn" href="/profile/{{$post->learning_class->user->id}}">{{$post->learning_class->user->first_name}} {{$post->learning_class->user->last_name}}</a> created a <a class="h6 post__author-name fn" href="/student/classes/{{$class->code}}/{{$post->id}}">{{$post->type}}</a>
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
              @if(count($comments_array) > 1)
                @foreach($comments_array as $commentator)
                <li>
                   <a href="#">
                   <img class="img-fluid" src="{{$commentator[0]}}" alt="friend" title="{{$commentator[1]}}">
                   </a>
                </li>
                @endforeach
              @endif
           </ul>
           <div class="names-people-likes">
              @if($comments_array != null)
              @foreach($comments_array as $key2 => $commentator)
                @if($key2 == 0)
                  @if(count($comments_array) > 1)
                    <a href="#">{{$commentator[1]}}, </a>
                  @else
                    <a href="#">{{$commentator[1]}}</a>
                  @endif
                @elseif($key2 == 1)
                  <a href="#">{{$commentator[1]}}</a>
                @endif
                @endforeach 
                @if(count($comments_array) > 2)
                and
                <br>{{(count($comments_array) - 2)}} more commented on this.
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
     <ul class="comments-list comment_box_{{$post->id}}" id="comment_box_{{$post->id}}">
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
   <form class="comment-form inline-items comment_box_{{$post->id}}">
      <div class="post__author author vcard inline-items">
         @if(isset($post->learning_class->user->personal_information->avatar))
         <img class="img-fluid" src="{{$post->learning_class->user->personal_information->avatar}}" alt="author">
         @else
         <img class="img-fluid" src="/images/{{Auth::user()->gender}}.png" alt="author">
         @endif
         <div class="form-group with-icon-right is-empty">
            <textarea id="comment_{{$post->id}}" class="form-control" placeholder=""></textarea>
            <span class="material-input"></span>
         </div>
      </div>
      <button type="button" class="btn btn-md-2 btn-primary" onclick="create_comment({{$post->id}})">Post Comment</button>
   </form>
    </div>
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