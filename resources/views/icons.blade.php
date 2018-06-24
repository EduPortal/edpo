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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <script src="/edpo/js/webfontloader.min.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ['Roboto:300,400,500,700:latin']
            }
        });
    </script>

    <link href="/edpo/css/icomoon.css" rel="stylesheet" type="text/css">

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.css" />

    @yield("in_page_stylesheets")

    <style type="text/css">
      .swal-button{
        background: #ff5e3a;
      }
    </style>
</head>
<body>



<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-stats-arrow"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-little-delete"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-trophy-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-block-from-chat"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-weather-refresh-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-popup-left-arrow"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-popup-right-arrow"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-register-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-login-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-three-dots-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-small-pin-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-small-calendar-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-share-post-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-like-post-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-accordion-open-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-comments-post-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-accordion-close-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-play-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-remove-playlist-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-save-playlist-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-share-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-heart-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-magnifying-glass-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-cupcake-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-weather-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-star-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-headphones-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-block-from-chat-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-add-to-conversation-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-speech-balloon-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-add-a-place-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-chat---messages-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-check-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-plus-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-albums-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-photos-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-day-calendar-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-week-calendar-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-month-calendar-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-checked-calendar-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-multimedia-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-settings-v2-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-close-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-logout-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-settings-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-blog-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-status-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-happy-sticker-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-happy-face-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-computer-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-manage-widgets-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-badge-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-newsfeed-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-camera-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-stats-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-calendar-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-happy-faces-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-thunder-icon"></use></svg>
  </a>
</li>
<li>
  <a href="#" class="js-sidebar-open">
    <svg style="height: 50px; margin-top: 2%;"><use xlink:href="/edpo/icons/icons.svg#olymp-menu-icon"></use></svg>
  </a>
</li>

<!-- jQuery first, then Other JS. -->
<script src="/edpo/js/jquery-3.2.0.min.js"></script>
<!-- Js effects for material design. + Tooltips -->
<script src="/edpo/js/material.min.js"></script>
<!-- Helper scripts (Tabs, Equal height, Scrollbar, etc) -->
<script src="/edpo/js/theme-plugins.js"></script>
<!-- Init functions -->
<script src="/edpo/js/main.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="/edpo/js/moment.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.js"></script>

<!-- Select / Sorting script -->
<script src="/edpo/js/selectize.min.js"></script>

@yield("in_page_scripts")

<script src="/edpo/js/custom.js"></script>

</body>

</html>