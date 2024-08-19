
<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<title>Xubisoft</title>
		<link rel="shortcut icon" href="assets/images/favicon.png">

		<!-- fraimwork - css include -->
		<link rel="stylesheet" type="text/css" href="{{ url('frontend/assets/css/bootstrap.min.css') }}">

		<!-- icon css include -->
		<link rel="stylesheet" type="text/css" href="{{ url('frontend/assets/css/fontawesome-all.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ url('frontend/assets/css/flaticon.css') }}">

		<!-- carousel css include -->
		<link rel="stylesheet" type="text/css" href="{{ url('frontend/assets/css/slick.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ url('frontend/assets/css/slick-theme.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ url('frontend/assets/css/animate.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ url('frontend/assets/css/owl.carousel.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ url('frontend/assets/css/owl.theme.default.min.css') }}">

		<!-- others css include -->
		<link rel="stylesheet" type="text/css" href="{{ url('frontend/assets/css/magnific-popup.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ url('frontend/assets/css/jquery.mCustomScrollbar.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ url('frontend/assets/css/calendar.css') }}">

		<!-- color switcher css include -->
		<link rel="stylesheet" type="text/css" href="{{ url('frontend/assets/css/colors/style-switcher.css') }}">
		<link id="color_theme" rel="stylesheet" type="text/css" href="{{ url('frontend/assets/css/colors/default.css') }}">

		<!-- custom css include -->
		<link rel="stylesheet" type="text/css" href="{{ url('frontend/assets/css/style.css') }}">
		

	</head>

	<body class="homepage3 default-header-p">
	
		<!-- backtotop - start -->
		<div id="thetop" class="thetop"></div>
		<div class='backtotop'>
			<a href="#thetop" class='scroll'>
				<i class="fas fa-angle-double-up"></i>
			</a>
		</div>
		<!---------------- backtotop - end ------------------------->

		<!------------------- preloader - start -------------------->
		<div id="preloader"></div>
		<!-- preloader - end -->

		<!---------------- header-section - start --------------------->
		<header id="header-section" class="header-section default-header-section auto-hide-header clearfix">

			<!-- header-top - start -->
			<div class="header-top">
				<div class="container">
					<div class="row">

						<!-- basic-contact - start -->
						<div class="col-lg-6">
							<div class="basic-contact">
								<ul>
									<li>
										<a href="#!">
											<i class="fas fa-envelope"></i>
											info@xubisoftltd.com
										</a>
									</li>
									<li>
										<a href="#!">
											<i class="fas fa-phone"></i>
											+8880 1710-203169
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- basic-contact - end -->

						<!-- register-login-group - start -->
						<div class="col-lg-6">
							<div class="register-login-group">
								<ul>
									<li>
										<a href="#register-modal" class="register-modal-btn">
											<i class="fas fa-user"></i>
											Register
										</a>
										<div id="register-modal" class="reglog-modal-wrapper register-modal mfp-hide clearfix" style="background-image: url( {{ url('frontend/assets/images/login-modal-bg.jpg') }});">
											<div class="overlay-black clearfix">

												<!-- leftside-content - start -->
												<div class="leftside-content">
													<div class="site-logo-wrapper mb-80">
														<a href="#!" class="logo rg-ln">
															<img src="{{ url('frontend/assets/images/xubisoft-logo.jpg') }}" alt="logo_not_found">
														</a>
													</div>
													<div class="register-login-link mb-80">
														<ul>
															<li><a href="#!">Login</a></li>
															<li class="active"><a href="#!">Register</a></li>
														</ul>
													</div>
													<div class="copyright-text rg-ln">
													<p class="m-0">&copy; <script>document.write(new Date().getFullYear())</script> <a href="#!" class="site-link">xubisoft.com</a> all right reserved, made with </p>
													</div>
												</div>
												<!-- leftside-content - end -->

												<!-- rightside-content - start -->
												<div class="rightside-content text-center">

													<div class="mb-30">
														<h2 class="form-title title-large white-color">Account <strong>Register</strong></h2>
														<span class="form-subtitle white-color">Have an account? <strong>LOGIN NOW</strong></span>
													</div>

													<div class="login-form text-center mb-50">
														<form action="#!">
															<div class="form-item">
																<input type="email" placeholder="User Name">
															</div>
															<div class="form-item">
																<input type="password" placeholder="Password">
															</div>
															<div class="form-item">
																<input type="email" placeholder="Repeat Password">
															</div>
															<div class="form-item">
																<input type="password" placeholder="Email Address">
															</div>
															<div class="human-verification text-left">
																<input type="checkbox" id="imnotarobot">
																<label for="imnotarobot">Im not a robot</label>
																<span class="verification-image">
																	<img src="{{ url('frontend/assets/images/iamnotrobot.png') }}" alt="Image_not_found">
																</span>
															</div>
															<button type="submit" class="login-btn">login now</button>
														</form>
													</div>

													<div class="bottom-text white-color">
														<p class="m-0">
															* Denotes mandatory field.
														</p>
														<p class="m-0">** At least one telephone number is required.</p>
													</div>

												</div>
												<!-- rightside-content - end -->

												<a class="popup-modal-dismiss" href="#!">
													<i class="fas fa-times"></i>
												</a>

											</div>
										</div>
									</li>
									<li>
										<a href="#login-modal" class="login-modal-btn">
											<i class="fas fa-lock"></i>
											Login
										</a>
										<div id="login-modal" class="reglog-modal-wrapper mfp-hide clearfix" style="background-image: url({{ url('frontend/assets/images/login-modal-bg.jpg') }});">
											<div class="overlay-black clearfix">

												<!-- leftside-content - start -->
												<div class="leftside-content">
													<div class="site-logo-wrapper mb-80">
														<a href="#!" class="logo rg-ln">
															<img src="{{ url('frontend/assets/images/xubisoft-logo.jpg') }}" alt="logo_not_found">
														</a>
													</div>
													<div class="register-login-link mb-80">
														<ul>
															<li class="active"><a href="#!">Login</a></li>
															<li><a href="#!">Register</a></li>
														</ul>
													</div>
													<div class="copyright-text rg-ln">
													<p class="m-0">&copy; <script>document.write(new Date().getFullYear())</script> <a href="#!" class="site-link">xubisoft.com</a> all right reserved, made with </p>
													</div>
												</div>
												<!-- leftside-content - end -->

												<!-- rightside-content - start -->
												<div class="rightside-content text-center">

													<div class="mb-30">
														<h2 class="form-title title-large white-color">Account <strong>Login</strong></h2>
														<span class="form-subtitle white-color">Login to our website, or <strong>REGISTER</strong></span>
													</div>

													<div class="fb-login-btn mb-30">
														<a href="#!">
															<span class="icon">
																<i class="fab fa-facebook-f"></i>
															</span>
															login with facebook
														</a>
													</div>

													<div class="or-text mb-30">
														<span>or sign in</span>
													</div>

													<div class="login-form text-center mb-50">
														<form action="#!">
															<div class="form-item">
																<input type="email" placeholder="example@gmail.com">
															</div>
															<div class="form-item">
																<input type="password" placeholder="Password">
															</div>
															<button type="submit" class="login-btn">login now</button>
														</form>
													</div>

													<div class="bottom-text white-color">
														<p class="m-0">
															* Denotes mandatory field.
														</p>
														<p class="m-0">** At least one telephone number is required.</p>
													</div>

												</div>
												<!-- rightside-content - end -->

												<a class="popup-modal-dismiss" href="#!">
													<i class="fas fa-times"></i>
												</a>

											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<!-- register-login-group - end -->
						
					</div>
				</div>
			</div>
			<!-- header-top - end -->

			<!-- header-bottom - start -->
			<div class="header-bottom">
				<div class="container">
					<div class="row">

						<!-- site-logo-wrapper - start -->
						<div class="col-lg-3">
							<div class="site-logo-wrapper">
								<a href="{{ url('/') }}" class="logo">
									<img src="{{ url('frontend/assets/images/xubisoft.png') }}" alt="logo_not_found">
								</a>
							</div>
						</div>
						<!-- site-logo-wrapper - end -->

						<!-- mainmenu-wrapper - start -->
						<div class="col-lg-9">
							<div class="mainmenu-wrapper">
								<div class="row">

									<!-- menu-item-list - start -->
									<div class="col-lg-10">
										<div class="menu-item-list ul-li clearfix">
											<ul>
												<li class="menu-item-has-children active">
													<a href="{{ url('/') }}">home</a>
												</li>
												<li class="menu-item-has-children">
													<a href="#!">about</a>
													<ul class="sub-menu">
														<li><a href="{{ url('/about') }}">about us</a></li>
														<li><a href="{{ url('/service') }}">service</a></li>
														<li><a href="{{ url('/faq') }}">FAQ</a></li>
													</ul>
												</li>
												<li class="menu-item-has-children">
													<a href="#!">events</a>
													<ul class="sub-menu">
														<li class="menu-item-has-children">
															<a href="{{ url('/event-1') }}">event List</a>
														</li>
														<li><a href="{{ url('/event-details') }}">event details</a></li>
														<li><a href="{{ url('/booking') }}">event booking</a></li>
													</ul>
												</li>
												<li class="menu-item-has-children">
													<a href="#!">blogs</a>
													<ul class="sub-menu">
														<li><a href="{{ url('/blog') }}">blog</a></li>
														<li><a href="{{ url('/blog-details') }}">blog details</a></li>
													</ul>
												</li>
												<li>
													<a href="{{ url('/gallery') }}">gallery</a>
												</li>
												<li>
													<a href="{{ url('/speaker') }}">speaker</a>
												</li>
												<li class="menu-item-has-children">
													<a href="{{ url('/contact') }}">contact</a>
												</li>
											</ul>
										</div>
									</div>
									<!-- menu-item-list - end -->

									<!-- menu-item-list - start -->
									<div class="col-lg-2">
										<div class="user-search-btn-group ul-li clearfix">
											<ul>
												<li>
													<a href="#!">
														<i class="fas fa-user"></i>
													</a>
												</li>
												<li>
													<button type="button" class="toggle-overlay search-btn">
														<i class="fas fa-search"></i>
													</button>
													<!-- search-body - start -->
													<div class="search-body">
														<div class="search-form">
															<form action="#">
																<input class="search-input" type="search" placeholder="Search Here">
																<div class="outer-close toggle-overlay">
																	<button type="button" class="search-close">
																		<i class="fas fa-times"></i>
																	</button>
																</div>
															</form>
														</div>
													</div>
													<!-- search-body - end -->
												</li>
											</ul>
										</div>
									</div>
									<!-- menu-item-list - end -->

								</div>
							</div>
						</div>
						<!-- mainmenu-wrapper - end -->

					</div>
				</div>
			</div>
			<!-- header-bottom - end -->

		</header>
		<!------------- header-section - end------------->

		<!------------ altranative-header - start------------------->
		<div class="header-altranative">
			<div class="container">
				<div class="logo-area float-left">
					<a href="index.html">
						<img src="{{ url('frontend/assets/images/xubisoft.png') }}" alt="logo_not_found">
					</a>
				</div>

				<button type="button" id="sidebarCollapse" class="alt-menu-btn float-right">
					<i class="fas fa-bars"></i>
				</button>
			</div>

			<!-- sidebar menu - start -->
			<div class="sidebar-menu-wrapper">
				<div id="sidebar" class="sidebar">
					<span id="sidebar-dismiss" class="sidebar-dismiss">
						<i class="fas fa-arrow-left"></i>
					</span>

					<div class="sidebar-header">
						<a href="#!">
							<img src="{{ url('frontend/assets/images/xubisoft-lg.jpg') }}" alt="logo_not_found">
						</a>
					</div>

					<!-- sidebar-form - start -->
					<div class="sidebar-form">
						<form action="#">
							<input id="altmenu-sidebar-search" type="search" placeholder="Search">
							<label for="altmenu-sidebar-search"><i class="fas fa-search"></i></label>
						</form>
					</div>
					<!-- sidebar-form - end -->

					<!-- main-pages-links - start -->
					<div class="menu-link-list main-pages-links">
						<h2 class="menu-title">all home pages</h2>
						<ul>
							<li>
								<a href="index.html">
									<span class="icon"><i class="fas fa-home"></i></span>
									Home
								</a>
							</li>
						</ul>
					</div>
					<!-- main-pages-links - end -->

					<!-- other-pages-links - start -->
					<div class="menu-link-list other-pages-links">
						<h2 class="menu-title">all single pages</h2>
						<ul>
							<li>
								<a href="about.html">
									<span class="icon"><i class="fas fa-home"></i></span>
									About Us
								</a>
							</li>
							<li>
								<a href="service.html">
									<span class="icon"><i class="fas fa-home"></i></span>
									our Services
								</a>
							</li>
							<li>
								<a href="event-1.html">
									<span class="icon"><i class="fas fa-home"></i></span>
									event list
								</a>
							</li>
							<li>
								<a href="blog.html">
									<span class="icon"><i class="fas fa-home"></i></span>
									Latest blogs
								</a>
							</li>
							<li>
								<a href="gallery.html">
									<span class="icon"><i class="fas fa-home"></i></span>
									our gallery
								</a>
							</li>
							<li>
								<a href="speaker.html">
									<span class="icon"><i class="fas fa-home"></i></span>
									event speakers
								</a>
							</li>
							<li>
								<a href="contact.html">
									<span class="icon"><i class="fas fa-home"></i></span>
									contact us
								</a>
							</li>
						</ul>
					</div>
					<!-- other-pages-links - end -->

					<!-- inner-pages-links - start -->
					<div class="menu-link-list inner-pages-links">
						<h2 class="menu-title">all inner pages</h2>
						<ul>
							<li>
								<a href="booking.html">
									<span class="icon"><i class="fas fa-home"></i></span>
									event booking
								</a>
							</li>
							<li>
								<a href="event-details.html">
									<span class="icon"><i class="fas fa-home"></i></span>
									event details
								</a>
							</li>
							<li>
								<a href='blog-details.html'>
									<span class="icon"><i class="fas fa-home"></i></span>
									blog details
								</a>
							</li>
							<li>
								<a href="faq.html">
									<span class="icon"><i class="fas fa-home"></i></span>
									Frequently Ask Qusetion
								</a>
							</li>
						</ul>
					</div>
					<!-- inner-pages-links - end -->

					<!-- login-btn-group - start -->
					<div class="login-btn-group">
						<ul>

							<li>
								<a href="#alt-register-modal" class="register-modal-btn">
									Register
								</a>
								<div id="alt-register-modal" class="reglog-modal-wrapper register-modal mfp-hide clearfix" style="background-image: url({{ url('frontend/assets/images/login-modal-bg.jpg') }});">
									<div class="overlay-black clearfix">

										<!-- leftside-content - start -->
										<div class="leftside-content">
											<div class="site-logo-wrapper mb-80">
												<a href="#!" class="logo">
													<img src="{{ url('frontend/assets/images/xubisoft-logo.jpg') }}" alt="logo_not_found">
												</a>
											</div>
											<div class="register-login-link mb-80">
												<ul>
													<li><a href="#!">Login</a></li>
													<li class="active"><a href="#!">Register</a></li>
												</ul>
											</div>
											<div class="copyright-text rg-ln">
												<p class="m-0">&copy; <script>document.write(new Date().getFullYear())</script> <a href="#!" class="site-link">xubisoft.com</a> all right reserved.</p>
											</div>
										</div>
										<!-- leftside-content - end -->

										<!-- rightside-content - start -->
										<div class="rightside-content text-center">

											<div class="mb-30">
												<h2 class="form-title title-large white-color">Account <strong>Register</strong></h2>
												<span class="form-subtitle white-color">Have an account? <strong>LOGIN NOW</strong></span>
											</div>

											<div class="login-form text-center mb-50">
												<form action="#!">
													<div class="form-item">
														<input type="email" placeholder="User Name">
													</div>
													<div class="form-item">
														<input type="password" placeholder="Password">
													</div>
													<div class="form-item">
														<input type="email" placeholder="Repeat Password">
													</div>
													<div class="form-item">
														<input type="password" placeholder="Email Address">
													</div>
													<div class="human-verification text-left">
														<input type="checkbox" id="alt-imnotarobot">
														<label for="alt-imnotarobot">Im not a robot</label>
														<span class="verification-image">
															<img src="{{ url('frontend/assets/images/iamnotrobot.png') }}" alt="Image_not_found">
														</span>
													</div>
													<button type="submit" class="login-btn">login now</button>
												</form>
											</div>

											<div class="bottom-text white-color">
												<p class="m-0">
													* Denotes mandatory field.
												</p>
												<p class="m-0">** At least one telephone number is required.</p>
											</div>

										</div>
										<!-- rightside-content - end -->

										<a class="popup-modal-dismiss" href="#!">
											<i class="fas fa-times"></i>
										</a>

									</div>
								</div>
							</li>
							<li>
								<a href="#alt-login-modal" class="login-modal-btn">
									Login
								</a>
								<div id="alt-login-modal" class="reglog-modal-wrapper mfp-hide clearfix" style="background-image: url({{ url('frontend/assets/images/login-modal-bg.jpg') }});">
									<div class="overlay-black clearfix">

										<!-- leftside-content - start -->
										<div class="leftside-content">
											<div class="site-logo-wrapper mb-80">
												<a href="#!" class="logo">
													<img src="{{ url('assets/images/xubisoft-logo.jpg') }}" alt="logo_not_found">
												</a>
											</div>
											<div class="register-login-link mb-80">
												<ul>
													<li class="active"><a href="#!">Login</a></li>
													<li><a href="#!">Register</a></li>
												</ul>
											</div>
											<div class="copyright-text rg-ln">
													<p class="m-0">&copy; <script>document.write(new Date().getFullYear())</script> <a href="#!" class="site-link">xubisoft.com</a> all right reserved.</p>
													</div>
										</div>
										<!-- leftside-content - end -->

										<!-- rightside-content - start -->
										<div class="rightside-content text-center">

											<div class="mb-30">
												<h2 class="form-title title-large white-color">Account <strong>Login</strong></h2>
												<span class="form-subtitle white-color">Login to our website, or <strong>REGISTER</strong></span>
											</div>

											<div class="fb-login-btn mb-30">
												<a href="#!">
													<span class="icon">
														<i class="fab fa-facebook-f"></i>
													</span>
													login with facebook
												</a>
											</div>

											<div class="or-text mb-30">
												<span>or sign in</span>
											</div>

											<div class="login-form text-center mb-50">
												<form action="#!">
													<div class="form-item">
														<input type="email" placeholder="example@gmail.com">
													</div>
													<div class="form-item">
														<input type="password" placeholder="Password">
													</div>
													<button type="submit" class="login-btn">login now</button>
												</form>
											</div>

											<div class="bottom-text white-color">
												<p class="m-0">
													* Denotes mandatory field.
												</p>
												<p class="m-0">** At least one telephone number is required.</p>
											</div>

										</div>
										<!-- rightside-content - end -->

										<a class="popup-modal-dismiss" href="#!">
											<i class="fas fa-times"></i>
										</a>

									</div>
								</div>
							</li>
							
						</ul>
					</div>
					<!-- login-btn-group - end -->

					<!-- social-links - start -->
					<div class="social-links">
						<h2 class="menu-title">get in touch</h2>
						<div class="mb-15">
							<h3 class="contact-info">
								<i class="fas fa-phone"></i>
								 +8880 1710-203169
							</h3>
							<h3 class="contact-info">
								<i class="fas fa-envelope"></i>
								info@Xubisoft.com
							</h3>
						</div>
						<ul>
							<li>
								<a href="#!"><i class="fab fa-facebook-f"></i></a>
							</li>
							<li>
								<a href="#!"><i class="fab fa-twitter"></i></a>
							</li>
							<li>
								<a href="#!"><i class="fab fa-twitch"></i></a>
							</li>
							<li>
								<a href="#!"><i class="fab fa-google-plus-g"></i></a>
							</li>
							<li>
								<a href="#!"><i class="fab fa-instagram"></i></a>
							</li>
						</ul>
						<a href="contact.html" class="contact-btn">contact us</a>
					</div>
					<!-- social-links - end -->

					<div class="overlay"></div>
				</div>
			</div>
			<!-- sidebar menu - end -->
		</div>
		<!--------------------- altranative-header - end ------------------>