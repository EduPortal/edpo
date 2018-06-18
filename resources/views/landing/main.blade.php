<!DOCTYPE html>
<html lang="en">
<head>

	<title>Landing Page</title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- Main Font -->
	<script src="edpo/js/webfontloader.min.js"></script>

	<script>
		WebFont.load({
			google: {
				families: ['Roboto:300,400,500,700:latin']
			}
		});
	</script>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="edpo/Bootstrap/dist/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="edpo/Bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="edpo/Bootstrap/dist/css/bootstrap-grid.css">

	<!-- Theme Styles CSS -->
	<link rel="stylesheet" type="text/css" href="edpo/css/theme-styles.css">
	<link rel="stylesheet" type="text/css" href="edpo/css/blocks.css">
	<link rel="stylesheet" type="text/css" href="edpo/css/fonts.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<!-- Styles for plugins -->
	<link rel="stylesheet" type="text/css" href="edpo/css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" type="text/css" href="edpo/css/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="edpo/css/bootstrap-select.css">


</head>

<body class="landing-page">

<div class="content-bg-wrap">
	<div class="content-bg"></div>
</div>


<!-- Landing Header -->

<div class="container">
	<div class="row">
		<div class="col-xl-12 col-lg-12 col-md-12">
			<div id="site-header-landing" class="header-landing">
				<a href="02-ProfilePage.html" class="logo">
					<img src="edpo/img/logo.png" alt="Olympus">
					<h5 class="logo-title">olympus</h5>
				</a>

				<ul class="profile-menu">
					<li>
						<a href="#">About Us</a>
					</li>
					<li>
						<a href="#">Careers</a>
					</li>
					<li>
						<a href="#">FAQS</a>
					</li>
					<li>
						<a href="#">Help & Support</a>
					</li>
					<li>
						<a href="#" class="js-expanded-menu">
							<svg class="olymp-menu-icon"><use xlink:href="icons/icons.svg#olymp-menu-icon"></use></svg>
							<svg class="olymp-close-icon"><use xlink:href="icons/icons.svg#olymp-close-icon"></use></svg>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<!-- ... end Landing Header -->

<!-- Login-Registration Form  -->

<div class="container">
	<div class="row display-flex">
		<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<div class="landing-content">
				<h1>Welcome to the Biggest Social Network in the World</h1>
				<p>We are the best and biggest social network with 5 billion active users all around the world. Share you
					thoughts, write blog posts, show your favourite music via Stopify, earn badges and much more!
				</p>
				<a href="#" class="btn btn-md btn-border c-white">Register Now!</a>
			</div>
		</div>

		<div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<div class="registration-login-form">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#home" role="tab">
							<svg class="olymp-login-icon"><use xlink:href="icons/icons.svg#olymp-login-icon"></use></svg>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#profile" role="tab">
							<svg class="olymp-register-icon"><use xlink:href="icons/icons.svg#olymp-register-icon"></use></svg>
						</a>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="home" role="tabpanel" data-mh="log-tab">
						<div class="title h6">Register to Olympus</div>
						<form class="content" method="POST" action="/register">
							@csrf
							<div class="row">
								<div class="col-lg-6 col-md-6">
									<div class="form-group label-floating is-empty">
										<label class="control-label">First Name</label>
										<input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autofocus>

		                                @if ($errors->has('first_name'))
		                                    <span class="invalid-feedback">
		                                        <strong>{{ $errors->first('first_name') }}</strong>
		                                    </span>
		                                @endif
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="form-group label-floating is-empty">
										<label class="control-label">Last Name</label>
										<input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autofocus>

		                                @if ($errors->has('last_name'))
		                                    <span class="invalid-feedback">
		                                        <strong>{{ $errors->first('last_name') }}</strong>
		                                    </span>
		                                @endif
									</div>
								</div>
								<div class="col-xl-12 col-lg-12 col-md-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">Registration number</label>
										<input id="registration_number" type="text" class="form-control{{ $errors->has('registration_number') ? ' is-invalid' : '' }}" name="registration_number" value="{{ old('registration_number') }}" required autofocus>

		                                @if ($errors->has('registration_number'))
		                                    <span class="invalid-feedback">
		                                        <strong>{{ $errors->first('registration_number') }}</strong>
		                                    </span>
		                                @endif
									</div>
									<div class="form-group label-floating is-empty">
										<label class="control-label">Your Email</label>
										<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

		                                @if ($errors->has('email'))
		                                    <span class="invalid-feedback">
		                                        <strong>{{ $errors->first('email') }}</strong>
		                                    </span>
		                                @endif
									</div>
									<div class="form-group label-floating is-empty">
										<label class="control-label">Phone</label>
										<input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus>

		                                @if ($errors->has('phone'))
		                                    <span class="invalid-feedback">
		                                        <strong>{{ $errors->first('phone') }}</strong>
		                                    </span>
		                                @endif
									</div>
									<div class="form-group label-floating is-empty">
										<label class="control-label">Your Password</label>
										<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

		                                @if ($errors->has('password'))
		                                    <span class="invalid-feedback">
		                                        <strong>{{ $errors->first('password') }}</strong>
		                                    </span>
		                                @endif
									</div>

									<div class="form-group label-floating is-empty">
										<label class="control-label">Repeat Password</label>
										<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
									</div>

									<div class="form-group label-floating is-select">
										<label class="control-label">Your Occupation</label>
										<select name="occupation" id="occupation" class="selectpicker form-control" size="auto">
											<option value="Student">Student</option>
											<option value="Teacher">Teacher</option>
										</select>
									</div>

									<div class="form-group label-floating is-select">
										<label class="control-label">Your Gender</label>
										<select name="gender" class="selectpicker form-control" size="auto">
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										</select>
									</div>

									<div class="remember">
										<div class="checkbox">
											<label>
												<input name="i_agreed_checkbox" type="checkbox" required>
												I accept the <a href="#">Terms and Conditions</a> of the website
											</label>
										</div>
									</div>

									<button style="padding: 5%;" type="submit" class="btn btn-purple btn-lg full-width">Complete Registration!</button>
								</div>
							</div>
						</form>
					</div>

					<div class="tab-pane" id="profile" role="tabpanel" data-mh="log-tab">
						<div class="title h6">Login to your Account</div>
						<form class="content" method="POST" action="{{ route('login') }}">
                        @csrf
							<div class="row">
								<div class="col-xl-12 col-lg-12 col-md-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">Your Email</label>
										<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

		                                @if ($errors->has('email'))
		                                    <span class="invalid-feedback">
		                                        <strong>{{ $errors->first('email') }}</strong>
		                                    </span>
		                                @endif
									</div>
									<div class="form-group label-floating is-empty">
										<label class="control-label">Your Password</label>
										<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

		                                @if ($errors->has('password'))
		                                    <span class="invalid-feedback">
		                                        <strong>{{ $errors->first('password') }}</strong>
		                                    </span>
		                                @endif
									</div>

									<div class="remember">

										<div class="checkbox">
											<label>
												<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
												Remember Me
											</label>
										</div>
										<a href="/password/reset" class="forgot">Forgot my Password</a>
									</div>

									<button type="submit" style="padding: 5%;" class="btn btn-lg btn-primary full-width">Login</button>

									<!-- <div class="or"></div>

									<a href="#" class="btn btn-lg bg-facebook full-width btn-icon-left"><i class="fa fa-facebook" aria-hidden="true"></i>Login with Facebook</a>

									<a href="#" class="btn btn-lg bg-twitter full-width btn-icon-left"><i class="fa fa-twitter" aria-hidden="true"></i>Login with Twitter</a> -->


									<p>Don’t you have an account? <a href="/register">Register Now!</a> it’s really simple and you can start enjoing all the benefits!</p>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ... end Login-Registration Form  -->





<!-- jQuery first, then Other JS. -->
<script src="edpo/js/jquery-3.2.0.min.js"></script>
<!-- Js effects for material design. + Tooltips -->
<script src="edpo/js/material.min.js"></script>
<!-- Helper scripts (Tabs, Equal height, Scrollbar, etc) -->
<script src="edpo/js/theme-plugins.js"></script>
<!-- Init functions -->
<script src="edpo/js/main.js"></script>

<!-- Select / Sorting script -->
<script src="edpo/js/selectize.min.js"></script>

<!-- Swiper / Sliders -->
<script src="edpo/js/swiper.jquery.min.js"></script>

<!-- Datepicker input field script-->
<script src="edpo/js/moment.min.js"></script>
<script src="edpo/js/daterangepicker.min.js"></script>

<script src="edpo/js/mediaelement-and-player.min.js"></script>
<script src="edpo/js/mediaelement-playlist-plugin.min.js"></script>




</body>
</html>