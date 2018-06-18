
<div class="profile-settings-responsive">

  <a href="#" class="js-profile-settings-open profile-settings-open">
    <i class="fa fa-angle-right" aria-hidden="true"></i>
    <i class="fa fa-angle-left" aria-hidden="true"></i>
  </a>
  <div class="mCustomScrollbar" data-mcs-theme="dark">
     <div class="ui-block">
    <!-- Your Profile  -->
    <div class="your-profile">
       <div class="ui-block-title ui-block-title-small">
          <h6 class="title">Avatar</h6>
       </div>
       <div id="accordion_drop_down_avatar_mobile" role="tablist" aria-multiselectable="true">
          <div class="card">
             <div class="card-header" role="tab" id="avatar_header_mobile">
                <h6 class="mb-0">
                   <a data-toggle="collapse" data-parent="#accordion_drop_down_avatar_mobile" href="#avatar_drop_down_mobile" aria-expanded="true" aria-controls="avatar_drop_down_mobile">
                      {{ucfirst(Auth::user()->first_name)}} {{Auth::user()->last_name}}
                      <svg class="olymp-dropdown-arrow-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
                   </a>
                </h6>
             </div>
             <div id="avatar_drop_down_mobile" class="collapse show" role="tabpanel" aria-labelledby="avatar_header_mobile">
                <ul class="your-profile-menu">
                   <li title="Change avatar">
                    @if($student_information['avatar'] == null)
                      <input type="image" id="image_input_mobile" src="/images/{{Auth::user()->gender}}.png" class="card-img rounded-circle" style=" height: 195px; border-radius: 7em; border: none; padding: 0;" />
                    @else
                      <input type="image" id="image_input_mobile" src="{{$student_information['avatar']}}" class="card-img" style=" height: 195px; border-radius: 7em; border: none; padding: 0;" />
                    @endif
                    <form id="avatar_form_mobile" action="/student/settings/change-avatar" method="post" enctype="multipart/form-data">
                      @csrf
                      <input type="file" id="my_file_mobile" name="avatar" style="display: none;" />
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
      <div class="your-profile">
        <div class="ui-block-title ui-block-title-small">
          <h6 class="title">Your PROFILE</h6>
        </div>

        <div id="accordion1" role="tablist" aria-multiselectable="true">
          <div class="card">
            <div class="card-header" role="tab" id="headingOne-1">
              <h6 class="mb-0">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-1" aria-expanded="true" aria-controls="collapseOne">
                  Profile Settings
                  <svg class="olymp-dropdown-arrow-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
                </a>
              </h6>
            </div>

            <div id="collapseOne-1" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
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
    </div>
  </div>
</div>