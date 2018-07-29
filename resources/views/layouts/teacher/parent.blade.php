<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="/edpo/js/webfontloader.min.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ['Roboto:300,400,500,700:latin']
            }
        });
    </script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!-- Styles for plugins -->
    <link rel="stylesheet" type="text/css" href="/edpo/css/jquery.mCustomScrollbar.min.css">

    <!-- Bootstrap CSS -->
    <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="/edpo/Bootstrap/dist/css/bootstrap-reboot.css">
  <link rel="stylesheet" type="text/css" href="/edpo/Bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/edpo/Bootstrap/dist/css/bootstrap-grid.css">

    <!-- Theme Styles CSS -->
    <link rel="stylesheet" type="text/css" href="/edpo/css/theme-styles.css">
    <link rel="stylesheet" type="text/css" href="/edpo/css/blocks.css">
    <link rel="stylesheet" type="text/css" href="/edpo/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="/edpo/css/icomoon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.css" />

    @yield("in_page_stylesheets")

    <style type="text/css">
      .swal-button{
        background: #ff5e3a;
      }
    </style>
</head>
<body>
    <div id="app">

      <!-- Profile Settings Responsive -->

<!-- ... end Profile Settings Responsive -->


<!-- Fixed Sidebar Left -->

<div class="fixed-sidebar">
  <div class="fixed-sidebar-left sidebar--small" id="sidebar-left">
    <a href="/teacher/settings/profile" class="logo">
      <img src="/edpo/img/logo.png" alt="Olympus">
    </a>

    <div class="mCustomScrollbar" data-mcs-theme="dark">
      <ul class="left-menu">
        <li>
          <a href="#" class="js-sidebar-open">
            <svg class="olymp-menu-icon left-menu-icon"  data-toggle="tooltip" data-placement="right" data-original-title="OPEN MENU"><use xlink:href="/edpo/icons/icons.svg#olymp-menu-icon"></use></svg>
          </a>
        </li>
        <li>
          <a href="/teacher/news-feed">
            <svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="NEWSFEED"><use xlink:href="/edpo/icons/icons.svg#olymp-newsfeed-icon"></use></svg>
          </a>
        </li>
        <li>
          <a href="/teacher/classes">
            <svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="MY CLASSES"><use xlink:href="/edpo/icons/icons.svg#olymp-albums-icon"></use></svg>
          </a>
        </li>
        <li>
          <a data-toggle="modal" data-target="#add_new_class_modal" href="javascript;">
            <svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="CREATE NEW CLASS"><use xlink:href="/edpo/icons/icons.svg#olymp-accordion-open-icon"></use></svg>
          </a>
        </li>
        <li>
          <a href="/teacher/settings/profile">
            <svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="SETTINGS"><use xlink:href="/edpo/icons/icons.svg#olymp-settings-icon"></use></svg>
          </a>
        </li>
      </ul>
    </div>
  </div>

  <div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1">
    <a href="/teacher/settings/profile" class="logo">
      <img src="/edpo/img/logo.png" alt="Olympus">
      <h6 class="logo-title">olympus</h6>
    </a>

    <div class="mCustomScrollbar" data-mcs-theme="dark">
      <ul class="left-menu">
        <li>
          <a href="#" class="js-sidebar-open">
            <svg class="olymp-close-icon left-menu-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-close-icon"></use></svg>
            <span class="left-menu-title">Collapse Menu</span>
          </a>
        </li>
        <li>
          <a href="/teacher/news-feed">
            <svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="NEWSFEED"><use xlink:href="/edpo/icons/icons.svg#olymp-newsfeed-icon"></use></svg>
            <span class="left-menu-title">Newsfeed</span>
          </a>
        </li>
        <li>
          <a href="/teacher/classes">
            <svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="MY CLASSES"><use xlink:href="/edpo/icons/icons.svg#olymp-albums-icon"></use></svg>
            <span class="left-menu-title">My Classes</span>
          </a>
        </li>
        <li>
          <a data-toggle="modal" data-target="#add_new_class_modal" href="javascript;">
            <svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="CREATE NEW CLASS"><use xlink:href="/edpo/icons/icons.svg#olymp-accordion-open-icon"></use></svg>
            <span class="left-menu-title">Create New Class</span>
          </a>
        </li>
        <li>
          <a href="/teacher/settings/profile">
            <svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="SETTINGS"><use xlink:href="/edpo/icons/icons.svg#olymp-settings-icon"></use></svg>
            <span class="left-menu-title">Settings</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>

<!-- ... end Fixed Sidebar Left -->

<!-- Fixed Sidebar Left -->

<div class="fixed-sidebar fixed-sidebar-responsive">

  <div class="fixed-sidebar-left sidebar--small" id="sidebar-left-responsive">
    <a href="#" class="logo js-sidebar-open">
      <img src="/edpo/img/logo.png" alt="Olympus">
    </a>

  </div>

  <div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1-responsive">
    <a href="#" class="logo">
      <img src="/edpo/img/logo.png" alt="Olympus">
      <h6 class="logo-title">olympus</h6>
    </a>

    <div class="mCustomScrollbar" data-mcs-theme="dark">

      <div class="control-block">
        <div class="author-page author vcard inline-items">
          <div class="author-thumb">

            @if($teacher_information['avatar'] == null)
              <img alt="author" src="/images/{{Auth::user()->gender}}.png" style="height: 45px; width: 45px;" class="avatar">
            @else
              <img style="height: 45px; width: 45px;" alt="author" src="{{Auth::user()->personal_information['avatar']}}" class="avatar">
            @endif
            
            <span class="icon-status online"></span>
          </div>
          <a href="/teacher/settings/profile" class="author-name fn">
            <div class="author-title">
              {{Auth::user()->first_name}} {{Auth::user()->last_name}} <svg class="olymp-dropdown-arrow-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
            </div>
            <span class="author-subtitle" style="font-size: 12px;">{{Auth::user()->occupation}}</span>
          </a>
        </div>
      </div>

      <div class="ui-block-title ui-block-title-small">
        <h6 class="title">Menu</h6>
      </div>

      <ul class="left-menu">
        <li>
          <a href="#" class="js-sidebar-open">
            <svg class="olymp-close-icon left-menu-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-close-icon"></use></svg>
            <span class="left-menu-title">Collapse Menu</span>
          </a>
        </li>
        <li>
          <a href="/teacher/news-feed">
            <svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="NEWSFEED"><use xlink:href="/edpo/icons/icons.svg#olymp-newsfeed-icon"></use></svg>
            <span class="left-menu-title">Newsfeed</span>
          </a>
        </li>
        <li>
          <a href="/teacher/classes">
            <svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="MY CLASSES"><use xlink:href="/edpo/icons/icons.svg#olymp-albums-icon"></use></svg>
            <span class="left-menu-title">My Classes</span>
          </a>
        </li>
        <li>
          <a data-toggle="modal" data-target="#add_new_class_modal" href="javascript;">
            <svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="CREATE NEW CLASS"><use xlink:href="/edpo/icons/icons.svg#olymp-accordion-open-icon"></use></svg>
            <span class="left-menu-title">Create New Class</span>
          </a>
        </li>
        <li>
          <a href="/teacher/settings/profile">
            <svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="SETTINGS"><use xlink:href="/edpo/icons/icons.svg#olymp-settings-icon"></use></svg>
            <span class="left-menu-title">Settings</span>
          </a>
        </li>
      </ul>

      <div class="ui-block-title ui-block-title-small">
        <h6 class="title">ACCOUNT</h6>
      </div>

      <ul class="account-settings">
        <li>
          <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <svg class="olymp-logout-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-logout-icon"></use></svg>
            <span>Log Out</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>

<!-- ... end Fixed Sidebar Left -->


<!-- Fixed Sidebar Right -->

<div class="fixed-sidebar right">
  <div class="fixed-sidebar-right sidebar--small" id="sidebar-right">

    <div class="mCustomScrollbar" data-mcs-theme="dark">
      <ul class="chat-users">
        <li class="inline-items js-chat-open">
          <div class="author-thumb">
            <img alt="author" src="/edpo/img/avatar67-sm.jpg" class="avatar">
            <span class="icon-status online"></span>
          </div>
        </li>
        <li class="inline-items js-chat-open">
          <div class="author-thumb">
            <img alt="author" src="/edpo/img/avatar62-sm.jpg" class="avatar">
            <span class="icon-status online"></span>
          </div>
        </li>

        <li class="inline-items js-chat-open">
          <div class="author-thumb">
            <img alt="author" src="/edpo/img/avatar68-sm.jpg" class="avatar">
            <span class="icon-status online"></span>
          </div>
        </li>

        <li class="inline-items js-chat-open">
          <div class="author-thumb">
            <img alt="author" src="/edpo/img/avatar69-sm.jpg" class="avatar">
            <span class="icon-status away"></span>
          </div>
        </li>

        <li class="inline-items js-chat-open">
          <div class="author-thumb">
            <img alt="author" src="/edpo/img/avatar70-sm.jpg" class="avatar">
            <span class="icon-status disconected"></span>
          </div>
        </li>
        <li class="inline-items js-chat-open">
          <div class="author-thumb">
            <img alt="author" src="/edpo/img/avatar64-sm.jpg" class="avatar">
            <span class="icon-status online"></span>
          </div>
        </li>
        <li class="inline-items js-chat-open">
          <div class="author-thumb">
            <img alt="author" src="/edpo/img/avatar71-sm.jpg" class="avatar">
            <span class="icon-status online"></span>
          </div>
        </li>
        <li class="inline-items js-chat-open">
          <div class="author-thumb">
            <img alt="author" src="/edpo/img/avatar72-sm.jpg" class="avatar">
            <span class="icon-status away"></span>
          </div>
        </li>
        <li class="inline-items js-chat-open">
          <div class="author-thumb">
            <img alt="author" src="/edpo/img/avatar63-sm.jpg" class="avatar">
            <span class="icon-status status-invisible"></span>
          </div>
        </li>
        <li class="inline-items js-chat-open">
          <div class="author-thumb">
            <img alt="author" src="/edpo/img/avatar72-sm.jpg" class="avatar">
            <span class="icon-status away"></span>
          </div>
        </li>
        <li class="inline-items js-chat-open">

          <div class="author-thumb">
            <img alt="author" src="/edpo/img/avatar71-sm.jpg" class="avatar">
            <span class="icon-status online"></span>
          </div>
        </li>
      </ul>
    </div>

    <div class="search-friend inline-items">
      <a href="#" class="js-sidebar-open">
        <svg class="olymp-menu-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-menu-icon"></use></svg>
      </a>
    </div>

    <a href="34-YourAccount-ChatMessages.html" class="olympus-chat inline-items">
      <svg class="olymp-chat---messages-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-chat---messages-icon"></use></svg>
    </a>

  </div>

  <div class="fixed-sidebar-right sidebar--large" id="sidebar-right-1">

    <div class="mCustomScrollbar" data-mcs-theme="dark">

      <div class="ui-block-title ui-block-title-small">
        <a href="#" class="title">Close Friends</a>
        <a href="#">Settings</a>
      </div>

      <ul class="chat-users">
        <li class="inline-items js-chat-open">

          <div class="author-thumb">
            <img alt="author" src="/edpo/img/avatar67-sm.jpg" class="avatar">
            <span class="icon-status online"></span>
          </div>

          <div class="author-status">
            <a href="#" class="h6 author-name">Carol Summers</a>
            <span class="status">ONLINE</span>
          </div>

          <div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-three-dots-icon"></use></svg>

            <ul class="more-icons">
              <li>
                <svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-comments-post-icon"></use></svg>
              </li>

              <li>
                <svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-add-to-conversation-icon"></use></svg>
              </li>

              <li>
                <svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-block-from-chat-icon"></use></svg>
              </li>
            </ul>

          </div>

        </li>
        <li class="inline-items js-chat-open">

          <div class="author-thumb">
            <img alt="author" src="/edpo/img/avatar62-sm.jpg" class="avatar">
            <span class="icon-status online"></span>
          </div>

          <div class="author-status">
            <a href="#" class="h6 author-name">Mathilda Brinker</a>
            <span class="status">AT WORK!</span>
          </div>

          <div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-three-dots-icon"></use></svg>

            <ul class="more-icons">
              <li>
                <svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-comments-post-icon"></use></svg>
              </li>

              <li>
                <svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-add-to-conversation-icon"></use></svg>
              </li>

              <li>
                <svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-block-from-chat-icon"></use></svg>
              </li>
            </ul>

          </div>

        </li>

        <li class="inline-items js-chat-open">


          <div class="author-thumb">
            <img alt="author" src="/edpo/img/avatar68-sm.jpg" class="avatar">
            <span class="icon-status online"></span>
          </div>

          <div class="author-status">
            <a href="#" class="h6 author-name">Carol Summers</a>
            <span class="status">ONLINE</span>
          </div>

          <div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-three-dots-icon"></use></svg>

            <ul class="more-icons">
              <li>
                <svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-comments-post-icon"></use></svg>
              </li>

              <li>
                <svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-add-to-conversation-icon"></use></svg>
              </li>

              <li>
                <svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-block-from-chat-icon"></use></svg>
              </li>
            </ul>

          </div>


        </li>

        <li class="inline-items js-chat-open">


          <div class="author-thumb">
            <img alt="author" src="/edpo/img/avatar69-sm.jpg" class="avatar">
            <span class="icon-status away"></span>
          </div>

          <div class="author-status">
            <a href="#" class="h6 author-name">Michael Maximoff</a>
            <span class="status">AWAY</span>
          </div>

          <div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-three-dots-icon"></use></svg>

            <ul class="more-icons">
              <li>
                <svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-comments-post-icon"></use></svg>
              </li>

              <li>
                <svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-add-to-conversation-icon"></use></svg>
              </li>

              <li>
                <svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-block-from-chat-icon"></use></svg>
              </li>
            </ul>

          </div>


        </li>

        <li class="inline-items js-chat-open">


          <div class="author-thumb">
            <img alt="author" src="/edpo/img/avatar70-sm.jpg" class="avatar">
            <span class="icon-status disconected"></span>
          </div>

          <div class="author-status">
            <a href="#" class="h6 author-name">Rachel Howlett</a>
            <span class="status">OFFLINE</span>
          </div>

          <div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-three-dots-icon"></use></svg>

            <ul class="more-icons">
              <li>
                <svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-comments-post-icon"></use></svg>
              </li>

              <li>
                <svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-add-to-conversation-icon"></use></svg>
              </li>

              <li>
                <svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-block-from-chat-icon"></use></svg>
              </li>
            </ul>

          </div>


        </li>
      </ul>


      <div class="ui-block-title ui-block-title-small">
        <a href="#" class="title">MY FAMILY</a>
        <a href="#">Settings</a>
      </div>

      <ul class="chat-users">
        <li class="inline-items js-chat-open">

          <div class="author-thumb">
            <img alt="author" src="/edpo/img/avatar64-sm.jpg" class="avatar">
            <span class="icon-status online"></span>
          </div>

          <div class="author-status">
            <a href="#" class="h6 author-name">Sarah Hetfield</a>
            <span class="status">ONLINE</span>
          </div>

          <div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-three-dots-icon"></use></svg>

            <ul class="more-icons">
              <li>
                <svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-comments-post-icon"></use></svg>
              </li>

              <li>
                <svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-add-to-conversation-icon"></use></svg>
              </li>

              <li>
                <svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-block-from-chat-icon"></use></svg>
              </li>
            </ul>

          </div>
        </li>
      </ul>


      <div class="ui-block-title ui-block-title-small">
        <a href="#" class="title">UNCATEGORIZED</a>
        <a href="#">Settings</a>
      </div>

      <ul class="chat-users">
        <li class="inline-items js-chat-open">

          <div class="author-thumb">
            <img alt="author" src="/edpo/img/avatar71-sm.jpg" class="avatar">
            <span class="icon-status online"></span>
          </div>

          <div class="author-status">
            <a href="#" class="h6 author-name">Bruce Peterson</a>
            <span class="status">ONLINE</span>
          </div>

          <div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-three-dots-icon"></use></svg>

            <ul class="more-icons">
              <li>
                <svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-comments-post-icon"></use></svg>
              </li>

              <li>
                <svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-add-to-conversation-icon"></use></svg>
              </li>

              <li>
                <svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-block-from-chat-icon"></use></svg>
              </li>
            </ul>

          </div>


        </li>
        <li class="inline-items js-chat-open">

          <div class="author-thumb">
            <img alt="author" src="/edpo/img/avatar72-sm.jpg" class="avatar">
            <span class="icon-status away"></span>
          </div>

          <div class="author-status">
            <a href="#" class="h6 author-name">Chris Greyson</a>
            <span class="status">AWAY</span>
          </div>

          <div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-three-dots-icon"></use></svg>

            <ul class="more-icons">
              <li>
                <svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-comments-post-icon"></use></svg>
              </li>

              <li>
                <svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-add-to-conversation-icon"></use></svg>
              </li>

              <li>
                <svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-block-from-chat-icon"></use></svg>
              </li>
            </ul>

          </div>

        </li>
        <li class="inline-items js-chat-open">

          <div class="author-thumb">
            <img alt="author" src="/edpo/img/avatar63-sm.jpg" class="avatar">
            <span class="icon-status status-invisible"></span>
          </div>

          <div class="author-status">
            <a href="#" class="h6 author-name">Nicholas Grisom</a>
            <span class="status">INVISIBLE</span>
          </div>

          <div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-three-dots-icon"></use></svg>

            <ul class="more-icons">
              <li>
                <svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-comments-post-icon"></use></svg>
              </li>

              <li>
                <svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-add-to-conversation-icon"></use></svg>
              </li>

              <li>
                <svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-block-from-chat-icon"></use></svg>
              </li>
            </ul>

          </div>
        </li>
        <li class="inline-items js-chat-open">

          <div class="author-thumb">
            <img alt="author" src="/edpo/img/avatar72-sm.jpg" class="avatar">
            <span class="icon-status away"></span>
          </div>

          <div class="author-status">
            <a href="#" class="h6 author-name">Chris Greyson</a>
            <span class="status">AWAY</span>
          </div>

          <div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-three-dots-icon"></use></svg>

            <ul class="more-icons">
              <li>
                <svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-comments-post-icon"></use></svg>
              </li>

              <li>
                <svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-add-to-conversation-icon"></use></svg>
              </li>

              <li>
                <svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-block-from-chat-icon"></use></svg>
              </li>
            </ul>

          </div>
        </li>
        <li class="inline-items js-chat-open">

          <div class="author-thumb">
            <img alt="author" src="/edpo/img/avatar71-sm.jpg" class="avatar">
            <span class="icon-status online"></span>
          </div>

          <div class="author-status">
            <a href="#" class="h6 author-name">Bruce Peterson</a>
            <span class="status">ONLINE</span>
          </div>

          <div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-three-dots-icon"></use></svg>

            <ul class="more-icons">
              <li>
                <svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-comments-post-icon"></use></svg>
              </li>

              <li>
                <svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-add-to-conversation-icon"></use></svg>
              </li>

              <li>
                <svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-block-from-chat-icon"></use></svg>
              </li>
            </ul>

          </div>
        </li>
      </ul>

    </div>

    <div class="search-friend inline-items">
      <form class="form-group">
        <input class="form-control" placeholder="Search Friends..." value="" type="text">
      </form>

      <a href="29-YourAccount-AccountSettings.html" class="settings">
        <svg class="olymp-settings-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-settings-icon"></use></svg>
      </a>

      <a href="#" class="js-sidebar-open">
        <svg class="olymp-close-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-close-icon"></use></svg>
      </a>


    </div>

    <a href="34-YourAccount-ChatMessages.html" class="olympus-chat inline-items">

      <h6 class="olympus-chat-title">OLYMPUS CHAT</h6>
      <svg class="olymp-chat---messages-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-chat---messages-icon"></use></svg>
    </a>

  </div>
</div>

<!-- ... end Fixed Sidebar Right -->

<!-- Fixed Sidebar Right -->

<div class="fixed-sidebar right fixed-sidebar-responsive">

  <div class="fixed-sidebar-right sidebar--small" id="sidebar-right-responsive">

    <a href="#" class="olympus-chat inline-items js-chat-open">
      <svg class="olymp-chat---messages-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-chat---messages-icon"></use></svg>
    </a>

  </div>

</div>

<!-- ... end Fixed Sidebar Right -->


<!-- Header -->

<header class="header" id="site-header">

  <div class="page-title">
    <h6>your account</h6>
  </div>

  <div class="header-content-wrapper">
    <form class="search-bar w-search notification-list friend-requests">
      <div class="form-group with-button">
        <input class="form-control js-user-search" placeholder="Search here people or pages..." type="text">
        <button>
          <svg class="olymp-magnifying-glass-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-magnifying-glass-icon"></use></svg>
        </button>
      </div>
    </form>

    <a href="#" class="link-find-friend">Find Friends</a>

    <div class="control-block">

      <div class="control-icon more has-items">
        <svg class="olymp-chat---messages-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-chat---messages-icon"></use></svg>
        <div class="label-avatar bg-purple">2</div>

        <div class="more-dropdown more-with-triangle triangle-top-center">
          <div class="ui-block-title ui-block-title-small">
            <h6 class="title">Chat / Messages</h6>
            <a href="#">Mark all as read</a>
            <a href="#">Settings</a>
          </div>

          <div class="mCustomScrollbar" data-mcs-theme="dark">
            <ul class="notification-list chat-message">
              <li class="message-unread">
                <div class="author-thumb">
                  <img src="/edpo/img/avatar59-sm.jpg" alt="author">
                </div>
                <div class="notification-event">
                  <a href="#" class="h6 notification-friend">Diana Jameson</a>
                  <span class="chat-message-item">Hi James! It’s Diana, I just wanted to let you know that we have to reschedule...</span>
                  <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
                </div>
                <span class="notification-icon">
                  <svg class="olymp-chat---messages-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                </span>
                <div class="more">
                  <svg class="olymp-three-dots-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-three-dots-icon"></use></svg>
                </div>
              </li>

              <li>
                <div class="author-thumb">
                  <img src="/edpo/img/avatar60-sm.jpg" alt="author">
                </div>
                <div class="notification-event">
                  <a href="#" class="h6 notification-friend">Jake Parker</a>
                  <span class="chat-message-item">Great, I’ll see you tomorrow!.</span>
                  <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
                </div>
                <span class="notification-icon">
                  <svg class="olymp-chat---messages-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                </span>

                <div class="more">
                  <svg class="olymp-three-dots-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-three-dots-icon"></use></svg>
                </div>
              </li>
              <li>
                <div class="author-thumb">
                  <img src="/edpo/img/avatar61-sm.jpg" alt="author">
                </div>
                <div class="notification-event">
                  <a href="#" class="h6 notification-friend">Elaine Dreyfuss</a>
                  <span class="chat-message-item">We’ll have to check that at the office and see if the client is on board with...</span>
                  <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 9:56pm</time></span>
                </div>
                  <span class="notification-icon">
                    <svg class="olymp-chat---messages-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                  </span>
                <div class="more">
                  <svg class="olymp-three-dots-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-three-dots-icon"></use></svg>
                </div>
              </li>

              <li class="chat-group">
                <div class="author-thumb">
                  <img src="/edpo/img/avatar11-sm.jpg" alt="author">
                  <img src="/edpo/img/avatar12-sm.jpg" alt="author">
                  <img src="/edpo/img/avatar13-sm.jpg" alt="author">
                  <img src="/edpo/img/avatar10-sm.jpg" alt="author">
                </div>
                <div class="notification-event">
                  <a href="#" class="h6 notification-friend">You, Faye, Ed &amp; Jet +3</a>
                  <span class="last-message-author">Ed:</span>
                  <span class="chat-message-item">Yeah! Seems fine by me!</span>
                  <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 16th at 10:23am</time></span>
                </div>
                  <span class="notification-icon">
                    <svg class="olymp-chat---messages-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                  </span>
                <div class="more">
                  <svg class="olymp-three-dots-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-three-dots-icon"></use></svg>
                </div>
              </li>
            </ul>
          </div>

          <a href="#" class="view-all bg-purple">View All Messages</a>
        </div>
      </div>

      <div class="control-icon more has-items">
        <svg class="olymp-thunder-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-thunder-icon"></use></svg>

        <div class="label-avatar bg-primary">8</div>

        <div class="more-dropdown more-with-triangle triangle-top-center">
          <div class="ui-block-title ui-block-title-small">
            <h6 class="title">Notifications</h6>
            <a href="#">Mark all as read</a>
            <a href="#">Settings</a>
          </div>

          <div class="mCustomScrollbar" data-mcs-theme="dark">
            <ul class="notification-list">
              <li>
                <div class="author-thumb">
                  <img src="/edpo/img/avatar62-sm.jpg" alt="author">
                </div>
                <div class="notification-event">
                  <div><a href="#" class="h6 notification-friend">Mathilda Brinker</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
                  <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
                </div>
                  <span class="notification-icon">
                    <svg class="olymp-comments-post-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-comments-post-icon"></use></svg>
                  </span>

                <div class="more">
                  <svg class="olymp-three-dots-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-three-dots-icon"></use></svg>
                  <svg class="olymp-little-delete"><use xlink:href="/edpo/icons/icons.svg#olymp-little-delete"></use></svg>
                </div>
              </li>

              <li class="un-read">
                <div class="author-thumb">
                  <img src="/edpo/img/avatar63-sm.jpg" alt="author">
                </div>
                <div class="notification-event">
                  <div>You and <a href="#" class="h6 notification-friend">Nicholas Grissom</a> just became friends. Write on <a href="#" class="notification-link">his wall</a>.</div>
                  <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 hours ago</time></span>
                </div>
                  <span class="notification-icon">
                    <svg class="olymp-happy-face-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-happy-face-icon"></use></svg>
                  </span>

                <div class="more">
                  <svg class="olymp-three-dots-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-three-dots-icon"></use></svg>
                  <svg class="olymp-little-delete"><use xlink:href="/edpo/icons/icons.svg#olymp-little-delete"></use></svg>
                </div>
              </li>

              <li class="with-comment-photo">
                <div class="author-thumb">
                  <img src="/edpo/img/avatar64-sm.jpg" alt="author">
                </div>
                <div class="notification-event">
                  <div><a href="#" class="h6 notification-friend">Sarah Hetfield</a> commented on your <a href="#" class="notification-link">photo</a>.</div>
                  <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
                </div>
                  <span class="notification-icon">
                    <svg class="olymp-comments-post-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-comments-post-icon"></use></svg>
                  </span>

                <div class="comment-photo">
                  <img src="/edpo/img/comment-photo1.jpg" alt="photo">
                  <span>“She looks incredible in that outfit! We should see each...”</span>
                </div>

                <div class="more">
                  <svg class="olymp-three-dots-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-three-dots-icon"></use></svg>
                  <svg class="olymp-little-delete"><use xlink:href="/edpo/icons/icons.svg#olymp-little-delete"></use></svg>
                </div>
              </li>

              <li>
                <div class="author-thumb">
                  <img src="/edpo/img/avatar65-sm.jpg" alt="author">
                </div>
                <div class="notification-event">
                  <div><a href="#" class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in <a href="#" class="notification-link">Gotham Bar</a>.</div>
                  <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
                </div>
                  <span class="notification-icon">
                    <svg class="olymp-happy-face-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-happy-face-icon"></use></svg>
                  </span>

                <div class="more">
                  <svg class="olymp-three-dots-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-three-dots-icon"></use></svg>
                  <svg class="olymp-little-delete"><use xlink:href="/edpo/icons/icons.svg#olymp-little-delete"></use></svg>
                </div>
              </li>

              <li>
                <div class="author-thumb">
                  <img src="/edpo/img/avatar66-sm.jpg" alt="author">
                </div>
                <div class="notification-event">
                  <div><a href="#" class="h6 notification-friend">James Summers</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
                  <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
                </div>
                  <span class="notification-icon">
                    <svg class="olymp-heart-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-heart-icon"></use></svg>
                  </span>

                <div class="more">
                  <svg class="olymp-three-dots-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-three-dots-icon"></use></svg>
                  <svg class="olymp-little-delete"><use xlink:href="/edpo/icons/icons.svg#olymp-little-delete"></use></svg>
                </div>
              </li>
            </ul>
          </div>

          <a href="#" class="view-all bg-primary">View All Notifications</a>
        </div>
      </div>

      <div class="author-page author vcard inline-items more">
        <div class="author-thumb">
          @if($teacher_information['avatar'] == null)
            <img alt="author" src="/images/{{Auth::user()->gender}}.png" style="height: 45px; width: 45px;" class="avatar">
          @else
            <img style="height: 45px; width: 45px;" alt="author" src="{{Auth::user()->personal_information['avatar']}}" class="avatar">
          @endif
          <span class="icon-status online"></span>
          <div class="more-dropdown more-with-triangle">
            <div class="mCustomScrollbar" data-mcs-theme="dark">

              <div class="ui-block-title ui-block-title-small">
                <h6 class="title">Your Account</h6>
              </div>

              <ul class="account-settings">
                <li>
                  <a href="/teacher/settings/profile">

                    <svg class="olymp-menu-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-menu-icon"></use></svg>
                    <span>Settings</span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                    <svg class="olymp-logout-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-logout-icon"></use></svg>
                    <span>Log Out</span>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                  </a>
                </li>
              </ul>
            </div>

          </div>
        </div>
        <a href="/teacher/settings/profile" class="author-name fn">
          <div class="author-title">
            {{Auth::user()->first_name}} {{Auth::user()->last_name}} <svg class="olymp-dropdown-arrow-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
          </div>
          <span class="author-subtitle" style="font-size: 12px;">{{Auth::user()->occupation}}</span>
        </a>
      </div>
    </div>
  </div>

</header>

<!-- ... end Header -->


<!-- Responsive Header -->

<header class="header header-responsive" id="site-header-responsive">

  <div class="header-content-wrapper">
    <ul class="nav nav-tabs mobile-app-tabs" role="tablist">
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#chat" role="tab">
          <div class="control-icon has-items">
            <svg class="olymp-chat---messages-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-chat---messages-icon"></use></svg>
            <div class="label-avatar bg-purple">2</div>
          </div>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#notification" role="tab">
          <div class="control-icon has-items">
            <svg class="olymp-thunder-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-thunder-icon"></use></svg>
            <div class="label-avatar bg-primary">8</div>
          </div>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#search" role="tab">
          <svg class="olymp-magnifying-glass-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-magnifying-glass-icon"></use></svg>
          <svg class="olymp-close-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-close-icon"></use></svg>
        </a>
      </li>
    </ul>
  </div>

  <!-- Tab panes -->
  <div class="tab-content tab-content-responsive">

    <div class="tab-pane " id="chat" role="tabpanel">

      <div class="mCustomScrollbar" data-mcs-theme="dark">
        <div class="ui-block-title ui-block-title-small">
          <h6 class="title">Chat / Messages</h6>
          <a href="#">Mark all as read</a>
          <a href="#">Settings</a>
        </div>

        <ul class="notification-list chat-message">
          <li class="message-unread">
            <div class="author-thumb">
              <img src="/edpo/img/avatar59-sm.jpg" alt="author">
            </div>
            <div class="notification-event">
              <a href="#" class="h6 notification-friend">Diana Jameson</a>
              <span class="chat-message-item">Hi James! It’s Diana, I just wanted to let you know that we have to reschedule...</span>
              <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
            </div>
                  <span class="notification-icon">
                    <svg class="olymp-chat---messages-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                  </span>
            <div class="more">
              <svg class="olymp-three-dots-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-three-dots-icon"></use></svg>
            </div>
          </li>

          <li>
            <div class="author-thumb">
              <img src="/edpo/img/avatar60-sm.jpg" alt="author">
            </div>
            <div class="notification-event">
              <a href="#" class="h6 notification-friend">Jake Parker</a>
              <span class="chat-message-item">Great, I’ll see you tomorrow!.</span>
              <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
            </div>
                  <span class="notification-icon">
                    <svg class="olymp-chat---messages-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                  </span>

            <div class="more">
              <svg class="olymp-three-dots-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-three-dots-icon"></use></svg>
            </div>
          </li>
          <li>
            <div class="author-thumb">
              <img src="/edpo/img/avatar61-sm.jpg" alt="author">
            </div>
            <div class="notification-event">
              <a href="#" class="h6 notification-friend">Elaine Dreyfuss</a>
              <span class="chat-message-item">We’ll have to check that at the office and see if the client is on board with...</span>
              <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 9:56pm</time></span>
            </div>
                    <span class="notification-icon">
                      <svg class="olymp-chat---messages-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                    </span>
            <div class="more">
              <svg class="olymp-three-dots-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-three-dots-icon"></use></svg>
            </div>
          </li>

          <li class="chat-group">
            <div class="author-thumb">
              <img src="/edpo/img/avatar11-sm.jpg" alt="author">
              <img src="/edpo/img/avatar12-sm.jpg" alt="author">
              <img src="/edpo/img/avatar13-sm.jpg" alt="author">
              <img src="/edpo/img/avatar10-sm.jpg" alt="author">
            </div>
            <div class="notification-event">
              <a href="#" class="h6 notification-friend">You, Faye, Ed &amp; Jet +3</a>
              <span class="last-message-author">Ed:</span>
              <span class="chat-message-item">Yeah! Seems fine by me!</span>
              <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 16th at 10:23am</time></span>
            </div>
                    <span class="notification-icon">
                      <svg class="olymp-chat---messages-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-chat---messages-icon"></use></svg>
                    </span>
            <div class="more">
              <svg class="olymp-three-dots-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-three-dots-icon"></use></svg>
            </div>
          </li>
        </ul>

        <a href="#" class="view-all bg-purple">View All Messages</a>
      </div>

    </div>

    <div class="tab-pane " id="notification" role="tabpanel">

      <div class="mCustomScrollbar" data-mcs-theme="dark">
        <div class="ui-block-title ui-block-title-small">
          <h6 class="title">Notifications</h6>
          <a href="#">Mark all as read</a>
          <a href="#">Settings</a>
        </div>

        <ul class="notification-list">
          <li>
            <div class="author-thumb">
              <img src="/edpo/img/avatar62-sm.jpg" alt="author">
            </div>
            <div class="notification-event">
              <div><a href="#" class="h6 notification-friend">Mathilda Brinker</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
              <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
            </div>
                    <span class="notification-icon">
                      <svg class="olymp-comments-post-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-comments-post-icon"></use></svg>
                    </span>

            <div class="more">
              <svg class="olymp-three-dots-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-three-dots-icon"></use></svg>
              <svg class="olymp-little-delete"><use xlink:href="/edpo/icons/icons.svg#olymp-little-delete"></use></svg>
            </div>
          </li>

          <li class="un-read">
            <div class="author-thumb">
              <img src="/edpo/img/avatar63-sm.jpg" alt="author">
            </div>
            <div class="notification-event">
              <div>You and <a href="#" class="h6 notification-friend">Nicholas Grissom</a> just became friends. Write on <a href="#" class="notification-link">his wall</a>.</div>
              <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 hours ago</time></span>
            </div>
                    <span class="notification-icon">
                      <svg class="olymp-happy-face-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-happy-face-icon"></use></svg>
                    </span>

            <div class="more">
              <svg class="olymp-three-dots-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-three-dots-icon"></use></svg>
              <svg class="olymp-little-delete"><use xlink:href="/edpo/icons/icons.svg#olymp-little-delete"></use></svg>
            </div>
          </li>

          <li class="with-comment-photo">
            <div class="author-thumb">
              <img src="/edpo/img/avatar64-sm.jpg" alt="author">
            </div>
            <div class="notification-event">
              <div><a href="#" class="h6 notification-friend">Sarah Hetfield</a> commented on your <a href="#" class="notification-link">photo</a>.</div>
              <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
            </div>
                    <span class="notification-icon">
                      <svg class="olymp-comments-post-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-comments-post-icon"></use></svg>
                    </span>

            <div class="comment-photo">
              <img src="/edpo/img/comment-photo1.jpg" alt="photo">
              <span>“She looks incredible in that outfit! We should see each...”</span>
            </div>

            <div class="more">
              <svg class="olymp-three-dots-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-three-dots-icon"></use></svg>
              <svg class="olymp-little-delete"><use xlink:href="/edpo/icons/icons.svg#olymp-little-delete"></use></svg>
            </div>
          </li>

          <li>
            <div class="author-thumb">
              <img src="/edpo/img/avatar65-sm.jpg" alt="author">
            </div>
            <div class="notification-event">
              <div><a href="#" class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in <a href="#" class="notification-link">Gotham Bar</a>.</div>
              <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
            </div>
                    <span class="notification-icon">
                      <svg class="olymp-happy-face-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-happy-face-icon"></use></svg>
                    </span>

            <div class="more">
              <svg class="olymp-three-dots-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-three-dots-icon"></use></svg>
              <svg class="olymp-little-delete"><use xlink:href="/edpo/icons/icons.svg#olymp-little-delete"></use></svg>
            </div>
          </li>

          <li>
            <div class="author-thumb">
              <img src="/edpo/img/avatar66-sm.jpg" alt="author">
            </div>
            <div class="notification-event">
              <div><a href="#" class="h6 notification-friend">James Summers</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
              <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
            </div>
                    <span class="notification-icon">
                      <svg class="olymp-heart-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-heart-icon"></use></svg>
                    </span>

            <div class="more">
              <svg class="olymp-three-dots-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-three-dots-icon"></use></svg>
              <svg class="olymp-little-delete"><use xlink:href="/edpo/icons/icons.svg#olymp-little-delete"></use></svg>
            </div>
          </li>
        </ul>

        <a href="#" class="view-all bg-primary">View All Notifications</a>
      </div>

    </div>

    <div class="tab-pane " id="search" role="tabpanel">


        <form class="search-bar w-search notification-list friend-requests">
          <div class="form-group with-button">
            <input class="form-control js-user-search" placeholder="Search here people or pages..." type="text">
          </div>
        </form>


    </div>

  </div>
  <!-- ... end  Tab panes -->

</header>

<!-- ... end Responsive Header -->



<div class="header-spacer header-spacer-small"></div>

<div class="container" style="margin-top: 2%;">
  <div class="row">
    @yield('content')
  </div>
</div>

<!-- Window-popup-CHAT for responsive min-width: 768px -->

<div class="ui-block popup-chat popup-chat-responsive">
  <div class="ui-block-title">
    <span class="icon-status online"></span>
    <h6 class="title" >Chat</h6>
    <div class="more">
      <svg class="olymp-three-dots-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-three-dots-icon"></use></svg>
      <svg class="olymp-little-delete js-chat-open"><use xlink:href="/edpo/icons/icons.svg#olymp-little-delete"></use></svg>
    </div>
  </div>
  <div class="mCustomScrollbar">
    <ul class="notification-list chat-message chat-message-field">
      <li>
        <div class="author-thumb">
          <img src="/edpo/img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
        </div>
        <div class="notification-event">
          <span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
          <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
        </div>
      </li>

      <li>
        <div class="author-thumb">
          <img src="/edpo/img/author-page.jpg" alt="author" class="mCS_img_loaded">
        </div>
        <div class="notification-event">
          <span class="chat-message-item">Don’t worry Mathilda!</span>
          <span class="chat-message-item">I already bought everything</span>
          <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
        </div>
      </li>

      <li>
        <div class="author-thumb">
          <img src="/edpo/img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
        </div>
        <div class="notification-event">
          <span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
          <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
        </div>
      </li>
    </ul>
  </div>

  <form>

    <div class="form-group label-floating is-empty">
      <label class="control-label">Press enter to post...</label>
      <textarea class="form-control" placeholder=""></textarea>
      <div class="add-options-message">
        <a href="#" class="options-message">
          <svg class="olymp-computer-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-computer-icon"></use></svg>
        </a>
        <div class="options-message smile-block">

          <svg class="olymp-happy-sticker-icon"><use xlink:href="/edpo/icons/icons.svg#olymp-happy-sticker-icon"></use></svg>

          <ul class="more-dropdown more-with-triangle triangle-bottom-right">
            <li>
              <a href="#">
                <img src="/edpo/img/icon-chat1.png" alt="icon">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="/edpo/img/icon-chat2.png" alt="icon">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="/edpo/img/icon-chat3.png" alt="icon">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="/edpo/img/icon-chat4.png" alt="icon">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="/edpo/img/icon-chat5.png" alt="icon">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="/edpo/img/icon-chat6.png" alt="icon">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="/edpo/img/icon-chat7.png" alt="icon">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="/edpo/img/icon-chat8.png" alt="icon">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="/edpo/img/icon-chat9.png" alt="icon">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="/edpo/img/icon-chat10.png" alt="icon">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="/edpo/img/icon-chat11.png" alt="icon">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="/edpo/img/icon-chat12.png" alt="icon">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="/edpo/img/icon-chat13.png" alt="icon">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="/edpo/img/icon-chat14.png" alt="icon">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="/edpo/img/icon-chat15.png" alt="icon">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="/edpo/img/icon-chat16.png" alt="icon">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="/edpo/img/icon-chat17.png" alt="icon">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="/edpo/img/icon-chat18.png" alt="icon">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="/edpo/img/icon-chat19.png" alt="icon">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="/edpo/img/icon-chat20.png" alt="icon">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="/edpo/img/icon-chat21.png" alt="icon">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="/edpo/img/icon-chat22.png" alt="icon">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="/edpo/img/icon-chat23.png" alt="icon">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="/edpo/img/icon-chat24.png" alt="icon">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="/edpo/img/icon-chat25.png" alt="icon">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="/edpo/img/icon-chat26.png" alt="icon">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="/edpo/img/icon-chat27.png" alt="icon">
              </a>
            </li>
          </ul>
        </div>
      </div>
       </div>

  </form>


</div>

</div>

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
            <input id="class_name" name="class_name" type="text" class="form-control" required autocomplete="off" value="{{old('class_name')}}">
            @if ($errors->has('class_name'))
                <span class="invalid-feedback" style="display: block;">
                  <strong>{{ $errors->first('class_name') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
            <label class="control-label">Class description</label>
            <textarea class="form-control" id="class_description" name="class_description" rows="1">{{old('class_description')}}</textarea>
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

@if(count($errors) > 0)
  <span id="errors_occured"></span>
@endif

<!-- jQuery first, then Other JS. -->
<script src="/js/app.js"></script>
<!-- Js effects for material design. + Tooltips -->
<script src="/edpo/js/material.min.js"></script>
<!-- Helper scripts (Tabs, Equal height, Scrollbar, etc) -->
<script src="/edpo/js/theme-plugins.js"></script>
<!-- Init functions -->
<script src="/edpo/js/main.js"></script>

<script src="/edpo/js/sweetalert.js"></script>

<script type="text/javascript" src="/edpo/js/noty.js"></script>

<script src="/edpo/js/moment.min.js"></script>

<!-- Select / Sorting script -->
<script src="/edpo/js/selectize.min.js"></script>

@yield("in_page_scripts")

<script src="/edpo/js/custom.js"></script>

</body>

</html>