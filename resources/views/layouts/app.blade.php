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
    <script src="{{ asset('js/app.js') }}" defer></script>

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

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!-- Styles for plugins -->
    <link rel="stylesheet" type="text/css" href="edpo/css/jquery.mCustomScrollbar.min.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="/edpo/Bootstrap/dist/css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="/edpo/Bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/edpo/Bootstrap/dist/css/bootstrap-grid.css">

    <!-- Theme Styles CSS -->
    <link rel="stylesheet" type="text/css" href="/edpo/css/theme-styles.css">
    <link rel="stylesheet" type="text/css" href="/edpo/css/blocks.css">
    <link rel="stylesheet" type="text/css" href="/edpo/css/fonts.css">

    <!-- Lightbox popup script-->
    {{-- <link rel="stylesheet" type="text/css" href="/edpo/css/magnific-popup.css"> --}}

</head>
<body>
    <div id="app">
        <div class="header--standard header--standard-dark" id="header--standard-2" style="width: 100%; left: 0; position: relative; padding: 0 20px;">
           <div class="container-fluid">
              <div class="header--standard-wrap">
                 <a href="#" class="logo">
                    <img src="img/logo-colored.png" alt="Olympus">
                    <h6 class="logo-title">olympus</h6>
                    SOCIAL NETWORK
                 </a>          
                 <a href="#" class="open-responsive-menu js-open-responsive-menu">
                    <svg class="olymp-menu-icon">
                       <use xlink:href="icons/icons.svg#olymp-menu-icon"></use>
                    </svg>
                 </a>
                 <div class="nav nav-pills nav1 header-menu">
                    <div class="mCustomScrollbar ps ps--theme_default ps--active-y" data-ps-id="fbf78068-0378-ba51-e65d-af7ecef5c380">
                       <ul>
                          <li class="nav-item">
                             <a href="#" class="nav-link">Home</a>
                          </li>
                          <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false" tabindex="1">Profile</a>
                             <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Profile Page</a>
                                <a class="dropdown-item" href="#">Newsfeed</a>
                                <a class="dropdown-item" href="#">Post Versions</a>
                             </div>
                          </li>
                          <li class="nav-item dropdown dropdown-has-megamenu">
                             <a href="#" class="nav-link dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false" tabindex="1">Forums</a>
                             <div class="dropdown-menu megamenu">
                                <div class="row">
                                   <div class="col-sm-3">
                                      <a class="dropdown-item" href="#">Profile Page</a>
                                      <a class="dropdown-item" href="#">Profile Page</a>
                                      <a class="dropdown-item" href="#">Profile Page</a>
                                      <a class="dropdown-item" href="#">Profile Page</a>
                                      <a class="dropdown-item" href="#">Profile Page</a>
                                      <a class="dropdown-item" href="#">Profile Page</a>
                                   </div>
                                   <div class="col-sm-3">
                                      <a class="dropdown-item" href="#">Profile Page</a>
                                      <a class="dropdown-item" href="#">Profile Page</a>
                                      <a class="dropdown-item" href="#">Profile Page</a>
                                      <a class="dropdown-item" href="#">Profile Page</a>
                                      <a class="dropdown-item" href="#">Profile Page</a>
                                      <a class="dropdown-item" href="#">Profile Page</a>
                                   </div>
                                   <div class="col-sm-3">
                                      <a class="dropdown-item" href="#">Profile Page</a>
                                      <a class="dropdown-item" href="#">Profile Page</a>
                                      <a class="dropdown-item" href="#">Profile Page</a>
                                      <a class="dropdown-item" href="#">Profile Page</a>
                                      <a class="dropdown-item" href="#">Profile Page</a>
                                      <a class="dropdown-item" href="#">Profile Page</a>
                                   </div>
                                   <div class="col-sm-3">
                                      <a class="dropdown-item" href="#">Profile Page</a>
                                      <a class="dropdown-item" href="#">Profile Page</a>
                                      <a class="dropdown-item" href="#">Profile Page</a>
                                      <a class="dropdown-item" href="#">Profile Page</a>
                                      <a class="dropdown-item" href="#">Profile Page</a>
                                      <a class="dropdown-item" href="#">Profile Page</a>
                                   </div>
                                </div>
                             </div>
                          </li>
                          <li class="nav-item">
                             <a href="#" class="nav-link">Terms &amp; Conditions</a>
                          </li>
                          <li class="nav-item">
                             <a href="#" class="nav-link">Events</a>
                          </li>
                          <li class="nav-item">
                             <a href="#" class="nav-link">Privacy Policy</a>
                          </li>
                          <li class="close-responsive-menu js-close-responsive-menu">
                             <svg class="olymp-close-icon">
                                <use xlink:href="#olymp-close-icon"></use>
                             </svg>
                          </li>
                       </ul>
                       <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                          <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                       </div>
                       <div class="ps__scrollbar-y-rail" style="top: 0px; height: 79px; right: 0px;">
                          <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 31px;"></div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>



        <main class="py-4">
            @yield('content')
        </main>
    </div>


    <!--footer --->

<div class="footer footer--dark" id="footer-2" style="width: 100%;">

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="widget w-about">
                    <a href="#" class="logo">
                        <img src="img/logo-colored.png" alt="Olympus">
                        <h6 class="logo-title">olympus</h6>
                        SOCIAL NETWORK
                    </a>
                    <p>Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod por incidid ut labore et lorem.</p>
                    <ul class="socials">
                        <li>
                            <a href="#">
                                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                <div class="widget w-list">
                    <h6 class="title">Main Links</h6>
                    <ul>
                        <li>
                            <a href="#">Landing</a>
                        </li>
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">About</a>
                        </li>
                        <li>
                            <a href="#">Events</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                <div class="widget w-list">
                    <h6 class="title">Your Profile</h6>
                    <ul>
                        <li>
                            <a href="#">Main Page</a>
                        </li>
                        <li>
                            <a href="#">About</a>
                        </li>
                        <li>
                            <a href="#">Friends</a>
                        </li>
                        <li>
                            <a href="#">Photos</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                <div class="widget w-list">
                    <h6 class="title">Features</h6>
                    <ul>
                        <li>
                            <a href="#">Newsfeed</a>
                        </li>
                        <li>
                            <a href="#">Post Versions</a>
                        </li>
                        <li>
                            <a href="#">Messages</a>
                        </li>
                        <li>
                            <a href="#">Friend Groups</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                <div class="widget w-list">
                    <h6 class="title">Olympus</h6>
                    <ul>
                        <li>
                            <a href="#">Privacy</a>
                        </li>
                        <li>
                            <a href="#">Terms & Conditions</a>
                        </li>
                        <li>
                            <a href="#">Forums</a>
                        </li>
                        <li>
                            <a href="#">Statistics</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

<!-- jQuery first, then Other JS. -->
<!-- <script src="edpo/js/jquery-3.2.0.min.js"></script> -->
<script src="/js/app.js"></script>
<!-- Js effects for material design. + Tooltips -->
<script src="edpo/js/material.min.js"></script>
<!-- Helper scripts (Tabs, Equal height, Scrollbar, etc) -->
<script src="edpo/js/theme-plugins.js"></script>
<!-- Init functions -->
<script src="edpo/js/main.js"></script>

<!-- Select / Sorting script -->
<script src="edpo/js/selectize.min.js"></script>

</html>