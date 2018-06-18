<div class="ui-block">
    <!-- Your Profile  -->
    <div class="your-profile">
       <div class="ui-block-title ui-block-title-small">
          <h6 class="title">Avatar</h6>
       </div>
       <div id="accordion_drop_down_avatar" role="tablist" aria-multiselectable="true">
          <div class="card">
             <div class="card-header" role="tab" id="avatar_header">
                <h6 class="mb-0">
                   <a data-toggle="collapse" data-parent="#accordion_drop_down_avatar" href="#avatar_drop_down" aria-expanded="true" aria-controls="avatar_drop_down">
                      {{ucfirst(Auth::user()->first_name)}} {{Auth::user()->last_name}}
                      <svg class="olymp-dropdown-arrow-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
                   </a>
                </h6>
             </div>
             <div id="avatar_drop_down" class="collapse show" role="tabpanel" aria-labelledby="avatar_header">
                <ul class="your-profile-menu">
                   <li title="Change avatar">
                    @if($student_information['avatar'] == null)
                      <input type="image" id="image_input" src="/images/{{Auth::user()->gender}}.png" class="card-img rounded-circle" style=" height: 195px; border-radius: 7em; border: none; padding: 0;" />
                    @else
                      <input type="image" id="image_input" src="{{$student_information['avatar']}}" class="card-img" style=" height: 195px; border-radius: 7em; border: none; padding: 0;" />
                    @endif
                    <form id="avatar_form" action="/student/settings/change-avatar" method="post" enctype="multipart/form-data">
                      @csrf
                      <input type="file" id="my_file" name="avatar" style="display: none;" />
                    </form>
                   </li>
                   @if ($errors->has('avatar'))
                        <li class="invalid-feedback text-center" style="display: block;">
                            <strong>{{ $errors->first('avatar') }}</strong>
                        </li>
                    @endif
                </ul>
             </div>
          </div>
       </div>
    </div>
    <!-- ... end Your Profile  -->
 </div>

 <div class="ui-block">
    <!-- Your Profile  -->
    <div class="your-profile">
       <div class="ui-block-title ui-block-title-small">
          <h6 class="title">Your PROFILE</h6>
       </div>
       <div id="accordion_drop_down" role="tablist" aria-multiselectable="true">
          <div class="card">
             <div class="card-header" role="tab" id="heading_one">
                <h6 class="mb-0">
                   <a data-toggle="collapse" data-parent="#accordion_drop_down" href="#first_drop_down" aria-expanded="true" aria-controls="first_drop_down">
                      Profile Settings
                      <svg class="olymp-dropdown-arrow-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
                   </a>
                </h6>
             </div>
             <div id="first_drop_down" class="collapse show" role="tabpanel" aria-labelledby="heading_one">
                <ul class="your-profile-menu">
                   <li>
                      <a href="/student/settings/profile">Personal Information</a>
                   </li>
                   <li>
                      <a href="/student/settings/change-password">Change Password</a>
                   </li>
                   <li>
                      <a href="/student/settings/hobbies-and-interests">Hobbies and Interests</a>
                   </li>
                </ul>
             </div>
          </div>
       </div>
       <div class="ui-block-title">
          <a href="33-YourAccount-Notifications.html" class="h6 title">Notifications</a>
          <a href="#" class="items-round-little bg-primary">8</a>
       </div>
       <div class="ui-block-title">
          <a href="34-YourAccount-ChatMessages.html" class="h6 title">Chat / Messages</a>
       </div>
    </div>
    <!-- ... end Your Profile  -->
 </div>