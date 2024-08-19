@extends('frontend.layouts.main')
@section('main-container')


		<!-- breadcrumb-section - start
		================================================== -->
		<section id="breadcrumb-section" class="breadcrumb-section clearfix">
			<div class="jarallax" style="background-image: url({{ url('frontend/assets/images/breadcrumb/0.breadcrumb-bg.jpg') }});">
				<div class="overlay-black">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-6 col-md-12 col-sm-12">

								<!-- breadcrumb-title - start -->
								<div class="breadcrumb-title text-center mb-50">
									<span class="sub-title">contact us now</span>
									<h2 class="big-title">keep <strong>in touch</strong></h2>
								</div>
								<!-- breadcrumb-title - end -->

								<!-- breadcrumb-list - start -->
								<div class="breadcrumb-list">
									<ul>
										<li class="breadcrumb-item"><a href="index.html" class="breadcrumb-link">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">contact us</li>
									</ul>
								</div>
								<!-- breadcrumb-list - end -->

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- breadcrumb-section - end
		================================================== -->





		<!-- contact-section - start
		================================================== -->
		<section id="contact-section" class="contact-section sec-ptb-100 clearfix">
			<div class="container">

				<!-- section-title - start -->
				<div class="section-title mb-50">
					<small class="sub-title">contact us</small>
					<h2 class="big-title">Keep in touch <strong>with Xubisoft</strong></h2>
				</div>
				<!-- section-title - end -->

				<!-- contact-form - start -->
				<div class="contact-form form-wrapper text-center">
					<form action="contact.php" method="post">
						<div class="row">

							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="form-item">
									<input type="text" placeholder="Your Name" required>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="form-item">
									<input type="email" placeholder="Email Address" required>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="form-item">
									<input type="text" placeholder="Your Country" required>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="form-item">
									<input type="tel" placeholder="Phone Number" required>
								</div>
							</div>

							<div class="col-lg-12 col-md-12 col-sm-12">
								<textarea placeholder="Your Message" required></textarea>
								<button type="submit" class="custom-btn">send mail</button>
							</div>
							
						</div>
					</form>
				</div>
				<!-- contact-form - end -->

			</div>
		</section>
		<!-- contact-section - end
		================================================== -->





		<!-- google map - start
		================================================== -->
		<section id="map-section" class="map-section clearfix">
			<div id="google-map">
				<div id="googleMaps" class="google-map-container">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.7852345483734!2d90.39817187533939!3d23.86175887859456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c432847eacf7%3A0xd02f082dce6d913!2sXUBISOFT%20LIMITED!5e0!3m2!1sen!2sbd!4v1717821544051!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</section>
		<!-- google map - end
		================================================== -->


		@endsection