@extends('layouts.student.parent')

@section('content')

<div class="col-xl-8 order-xl-2 col-lg-8 order-lg-2 col-md-12 order-md-1 col-sm-12 col-xs-12">
   
   <div class="ui-block">
      <div class="ui-block-title">
         <h6 class="title">Hobbies and Interests</h6>
      </div>
      <div class="ui-block-content">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               @if($hobbies_and_interests['hobbies'] != "" || $hobbies_and_interests['favourite_tv_shows'] != "" || $hobbies_and_interests['favourite_movies'] != "" || $hobbies_and_interests['favourite_games'] != "" || $hobbies_and_interests['favourite_artists'] != "" || $hobbies_and_interests['favourite_books'] != "" || $hobbies_and_interests['favourite_writers'] != "" || $hobbies_and_interests['favourite_interests'] != "")
               <ul class="widget w-personal-info item-block">
                  @if($hobbies_and_interests['hobbies'] != "")
                  <li>
                     <span class="title">Hobbies:</span>
                     <span class="text">{{$hobbies_and_interests['hobbies']}}
                     </span>
                  </li>
                  @endif
                  
                  @if($hobbies_and_interests['favourite_tv_shows'] != "")
                  <li>
                     <span class="title">Favourite TV Shows:</span>
                     <span class="text">{{$hobbies_and_interests['favourite_tv_shows']}}</span>
                  </li>
                  @endif
                  
                  @if($hobbies_and_interests['favourite_movies'] != "")
                  <li>
                     <span class="title">Favourite Movies:</span>
                     <span class="text">{{$hobbies_and_interests['favourite_movies']}}</span>
                  </li>
                  @endif
                  
                  @if($hobbies_and_interests['favourite_games'] != "")
                  <li>
                     <span class="title">Favourite Games:</span>
                     <span class="text">{{$hobbies_and_interests['favourite_games']}}</span>
                  </li>
                  @endif

                  @if($hobbies_and_interests['favourite_artists'] != "")
                  <li>
                     <span class="title">Favourite Music Bands / Artists:</span>
                     <span class="text">{{$hobbies_and_interests['favourite_artists']}}</span>
                  </li>
                  @endif

                  @if($hobbies_and_interests['favourite_books'] != "")
                  <li>
                     <span class="title">Favourite Books:</span>
                     <span class="text">{{$hobbies_and_interests['favourite_books']}}</span>
                  </li>
                  @endif

                  @if($hobbies_and_interests['favourite_writers'] != "")
                  <li>
                     <span class="title">Favourite Writers:</span>
                     <span class="text">{{$hobbies_and_interests['favourite_writers']}}</span>
                  </li>
                  @endif

                  @if($hobbies_and_interests['favourite_interests'] != "")
                  <li>
                     <span class="title">Other Interests:</span>
                     <span class="text">{{$hobbies_and_interests['favourite_interests']}}</span>
                  </li>
                  @endif
               </ul>
               @else
               <div align="center">
                  <span style="font-family: Calibri; font-weight: lighter; font-size: 20px;">No hobbies and interests found!</span>
               </div>
               @endif
            </div>
         </div>
      </div>
   </div>
   
   <div class="ui-block">
      <div class="ui-block-title">
         <h6 class="title">Other Social Networks</h6>
      </div>
      <div class="ui-block-content">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               @if($student_information['facebook'] != "" || $student_information['twitter'] != "" || $student_information['google_plus'] != "" || $student_information['linkedin'] != "")
                  @if($student_information['facebook'] != "")
                  <a href="{{$student_information['facebook']}}" class="social-item bg-facebook">
                  <i class="fa fa-facebook" aria-hidden="true"></i>Facebook</a>
                  @endif

                  @if($student_information['linkedin'] != "")
                  <a style="background: #0077B5;" href="{{$student_information['linkedin']}}" class="social-item">
                  <i aria-hidden="true" class="fa fa-linkedin"></i>Linkedin</a>
                  @endif

                  @if($student_information['twitter'] != "")
                  <a href="{{$student_information['twitter']}}" class="social-item bg-twitter">
                  <i class="fa fa-twitter" aria-hidden="true"></i>Twitter</a>
                  @endif
                  
                  @if($student_information['google_plus'] != "")
                  <a style="background: #d34836;" href="{{$student_information['google_plus']}}" class="social-item">
                  <i class="fa fa-google-plus" aria-hidden="true"></i>Google Plus</a>
                  @endif
               @else
                  <div align="center">
                     <span style="font-family: Calibri; font-weight: lighter; font-size: 20px;">No Social Networks Found!</span>
                  </div>
               @endif
            </div>
         </div>
      </div>
   </div>
</div>
<div class="col-xl-4 order-xl-1 col-lg-4 order-lg-1 col-md-12 order-md-2 col-sm-12 col-xs-12">
   <div class="ui-block">
      <div class="ui-block-title">
         <h6 class="title">Avatar</h6>
      </div>
      <div class="ui-block-content">
         <img src="{{$student_information['avatar']}}" style="width: 100%;">
      </div>
   </div>
   <div class="ui-block">
      <div class="ui-block-title">
         <h6 class="title">Personal Info</h6>
      </div>
      <div class="ui-block-content">
         <ul class="widget w-personal-info">
            <li>
               <span class="title">About Me:</span>
               <span class="text">
                  {{$student_information['description']}}
               </span>
            </li>
            <li>
               <span class="title">Birthday:</span>
               <span class="text">{{$student_information['birthday']}}</span>
            </li>
            <li>
               <span class="title">Birthplace:</span>
               <span class="text">{{$student_information['birthplace']}}</span>
            </li>
            <li>
               <span class="title">Lives in:</span>
               <span class="text">{{$student_information['city']." , "}} {{$student_information['province']." , "}} {{$student_information['country']}}</span>
            </li>
            <li>
               <span class="title">Occupation:</span>
               <span class="text">{{$user->occupation}}</span>
            </li>
            <li>
               <span class="title">Joined:</span>
               <span class="text">{{$user->created_at->toFormattedDateString()}}</span>
            </li>
            <li>
               <span class="title">Gender:</span>
               <span class="text">{{$user->gender}}</span>
            </li>
            <li>
               <span class="title">Status:</span>
               <span class="text">{{$student_information['marital_status']}}</span>
            </li>
            <li>
               <span class="title">Email:</span>
               <a href="mailto:{{$user->email}}" class="text">{{$user->email}}</a>
            </li>
            <li>
               <span class="title">Website:</span>
               <a href="#" class="text">{{$student_information['website']}}</a>
            </li>
            <li>
               <span class="title">Phone Number:</span>
               <a href="tel:{{$user->phone}}" class="text">{{$user->phone}}</a>
            </li>
         </ul>
      </div>
   </div>
</div>

@include('StudentViews.components.responsive_sidebar')
@endsection