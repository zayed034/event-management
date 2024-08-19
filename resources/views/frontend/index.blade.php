@extends('frontend.layouts.main')
@section('main-container')


		<!--------------------- slide-section - start ----------------------->
		<section id="main-carousel2" class="main-carousel2 clearfix">

			<div class="item" style="background-image: url({{ url('frontend/assets/images/slider/slider01.jpg') }});">
				<div class="overlay-black">
					<div class="container">
						<div class="row">

							<!-- slider-content - start -->
							<div class="col-lg-8">
								<div class="slider-content">
									<div class="countdown-timer mb-30">
										<ul class="countdown-list" data-countdown="2020/08/08"></ul>
									</div>
									<span class="date">26 december 2019</span>
									<h1 class="title-text">
										AMSTERDAM
									</h1>
									<strong class="bold-text">PHP CONFERENCE</strong>
									<a href="#!" class="custom-btn">booking ticket</a>
									<a href="#!" class="details-btn">event details</a>
								</div>
							</div>
							<!-- slider-content - end -->
							
						</div>
					</div>
				</div>
			</div>

			<div class="item" style="background-image: url({{ url('frontend/assets/images/slider/slider-bg8.jpg') }});">
				<div class="overlay-black">
					<div class="container">
						<div class="row">

							<!-- slider-content - start -->
							<div class="col-lg-8">
								<div class="slider-content">
									<div class="countdown-timer mb-30">
										<ul class="countdown-list" data-countdown="2020/08/08"></ul>
									</div>
									<span class="date">26 december 2019</span>
									<h1 class="title-text">
										AMSTERDAM
									</h1>
									<strong class="bold-text">PHP CONFERENCE</strong>
									<a href="#!" class="custom-btn">booking ticket</a>
									<a href="#!" class="details-btn">event details</a>
								</div>
							</div>
							<!-- slider-content - end -->
							
						</div>
					</div>
				</div>
			</div>

			<div class="item" style="background-image: url({{ url('frontend/assets/images/slider/slider-bg9.jpg') }});">
				<div class="overlay-black">
					<div class="container">
						<div class="row">

							<!-- slider-content - start -->
							<div class="col-lg-8">
								<div class="slider-content">
									<div class="countdown-timer mb-30">
										<ul class="countdown-list" data-countdown="2020/08/08"></ul>
									</div>
									<span class="date">26 december 2019</span>
									<h1 class="title-text">
										AMSTERDAM
									</h1>
									<strong class="bold-text">PHP CONFERENCE</strong>
									<a href="#!" class="custom-btn">booking ticket</a>
									<a href="#!" class="details-btn">event details</a>
								</div>
							</div>
							<!-- slider-content - end -->
							
						</div>
					</div>
				</div>
			</div>

		</section>
		<!--------------------- slide-section - end ----------------------->



		<!--------------------- absolute-eventmake-section - start ----------------------->
		
		<div id="absolute-eventmake-section" class="absolute-eventmake-section sec-ptb-100 bg-gray-light clearfix">
			<div class="eventmaking-wrapper">

				<ul class="nav eventmake-tabs">
					<li>
						<a class="active" data-toggle="tab" href="#conference">
							<i class="fas fa-microphone"></i>
							conference
						</a>
					</li>
					<li>
						<a data-toggle="tab" href="#musical">
							<i class="fas fa-music"></i>
							musical
						</a>
					</li>
					<li>
						<a data-toggle="tab" href="#playground">
							<i class="fas fa-birthday-cake"></i>
							play ground
						</a>
					</li>
				</ul>

				<div class="tab-content">
					<div id="conference" class="tab-pane fade in active show">
						<form action="#">
							<ul>

								<li>
									<input type="text" placeholder="Type event name">
								</li>
								<li>
									<select class="country-select">
										<option selected="">select Country</option>
										<option>option 1</option>
										<option>option 2</option>
										<option>option 3</option>
										<option>option 4</option>
										<option>option 5</option>
									</select>
								</li>
								<li>
									<select class="capital-select">
										<option selected="">select capital</option>
										<option>option 1</option>
										<option>option 2</option>
										<option>option 3</option>
										<option>option 4</option>
										<option>option 5</option>
									</select>
								</li>
								<li>
									<select class="date-select">
										<option selected="">select date</option>
										<option>option 1</option>
										<option>option 2</option>
										<option>option 3</option>
										<option>option 4</option>
										<option>option 5</option>
									</select>
								</li>
								<li>
									<button type="submit" class="custom-btn">search event</button>
								</li>

							</ul>
						</form>
					</div>

					<div id="musical" class="tab-pane fade">
						<form action="#">
							<ul>

								<li>
									<input type="text" placeholder="Type event name">
								</li>
								<li>
									<select class="country-select">
										<option selected="">select Country</option>
										<option>option 1</option>
										<option>option 2</option>
										<option>option 3</option>
										<option>option 4</option>
										<option>option 5</option>
									</select>
								</li>
								<li>
									<select class="capital-select">
										<option selected="">select capital</option>
										<option>option 1</option>
										<option>option 2</option>
										<option>option 3</option>
										<option>option 4</option>
										<option>option 5</option>
									</select>
								</li>
								<li>
									<select class="date-select">
										<option selected="">select date</option>
										<option>option 1</option>
										<option>option 2</option>
										<option>option 3</option>
										<option>option 4</option>
										<option>option 5</option>
									</select>
								</li>
								<li>
									<button type="submit" class="custom-btn">search event</button>
								</li>

							</ul>
						</form>
					</div>
					<div id="playground" class="tab-pane fade">
						<form action="#">
							<ul>

								<li>
									<input type="text" placeholder="Type event name">
								</li>
								<li>
									<select class="country-select">
										<option selected="">select Country</option>
										<option>option 1</option>
										<option>option 2</option>
										<option>option 3</option>
										<option>option 4</option>
										<option>option 5</option>
									</select>
								</li>
								<li>
									<select class="capital-select">
										<option selected="">select capital</option>
										<option>option 1</option>
										<option>option 2</option>
										<option>option 3</option>
										<option>option 4</option>
										<option>option 5</option>
									</select>
								</li>
								<li>
									<select class="date-select">
										<option selected="">select date</option>
										<option>option 1</option>
										<option>option 2</option>
										<option>option 3</option>
										<option>option 4</option>
										<option>option 5</option>
									</select>
								</li>
								<li>
									<button type="submit" class="custom-btn">search event</button>
								</li>

							</ul>
						</form>
					</div>

					<div class="top-event-location">
						<span class="title-text">TOP SEARCH <strong>EVENT LOCATION:</strong></span>
						<ul>

							<li><strong>Dhaka</strong> Bangladesh</li>
							<li><strong>Dilli</strong> India</li>
							<li><strong>Milan</strong> Italia</li>
							<li><strong>Amsterdam</strong> Netherland</li>
							<li><strong>Barcelona</strong> Spain</li>
							<li><strong>Istanbul</strong> Turkey</li>
							
						</ul>
					</div>
				</div>
				
			</div>
		</div>
		<!-------------------- absolute-eventmake-section - end ------------------------->






		<!--------------------- about-section2 - start ------------------>
		<section id="about-section2" class="about-section2 sec-ptb-100 bg-gray-light clearfix">
			<div class="container">

				<div class="mb-50">
					<div class="row">

						<!-- section-pragraph - start -->
						<div class="col-lg-6 col-md-12 col-sm-12">
							<div class="section-pragraph text-right">
								<p>Lorem ipsum dollor site amet the consectuer adipiscing elites sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer adipiscing elit.</p>
							</div>
						</div>
						<!-- section-pragraph - end -->

						<!-- section-title - start -->
						<div class="col-lg-6 col-md-12 col-sm-12">
							<div class="section-title text-left">
								<span class="line-style"></span>
								<small class="sub-title">we are Xubisoft</small>
								<h2 class="big-title"><strong>No.1</strong> Events Management</h2>
							</div>
						</div>
						<!-- section-title - end -->

					</div>
				</div>

				<div class="services-list">
					<ul>

						<li>
							<a href="#!">
								<span class="icon">
									<i class="flaticon-handshake"></i>
								</span>
								<strong class="title-text">friendly team</strong>
								<small class="sub-title">more than 200 teams</small>
							</a>
						</li>
						<li>
							<a href="#!">
								<span class="icon">
									<i class="flaticon-two-balloons"></i>
								</span>
								<strong class="title-text">perfect venues</strong>
								<small class="sub-title">the best & perfect venues</small>
							</a>
						</li>
						<li>
							<a href="#!">
								<span class="icon">
									<i class="flaticon-cheers"></i>
								</span>
								<strong class="title-text">Unique Scenario</strong>
								<small class="sub-title">We thinking out of the box</small>
							</a>
						</li>

						<li>
							<a href="#!">
								<span class="icon">
									<i class="flaticon-clown-hat"></i>
								</span>
								<strong class="title-text">Unforgettable Time</strong>
								<small class="sub-title">We make you perfect event</small>
							</a>
						</li>
						<li>
							<a href="#!">
								<span class="icon">
									<i class="flaticon-speech-bubble"></i>
								</span>
								<strong class="title-text">24/7 Hours Support</strong>
								<small class="sub-title">anytime anywhere</small>
							</a>
						</li>
						<li>
							<a href="#!">
								<span class="icon">
									<i class="flaticon-light-bulb"></i>
								</span>
								<strong class="title-text">New & Briliant Idea</strong>
								<small class="sub-title">we have million ideas</small>
							</a>
						</li>

					</ul>
				</div>

			</div>
		</section>
		<!---------------------- about-section2 - end -------------------->






		<!---------------------- upcomming-event-section2 - start --------------------->
		<section id="upcomming-event-section2" class="upcomming-event-section2 sec-ptb-100 clearfix">

			<div class="container">
				<!-- section-title - start -->
				<div class="section-title mb-50">
					<span class="line-style"></span>
					<small class="sub-title">our latest event</small>
					<h2 class="big-title"><strong>our upcoming</strong> Events</h2>
				</div>
				<!-- section-title - end -->
			</div>

			<div class="comming-event-item">
				<div class="container">
					<div class="row justify-content-start">

						<div class="col-lg-6 col-md-12 col-sm-12">
							<div class="event-content">

								<!-- event-title - start -->
								<div class="event-title">
									<small class="tag">
										<i class="fas fa-bookmark"></i>
										Featured Event
									</small>
									<h3 class="title-text">Barcelona <strong>Food Truck Festival</strong></h3>
									<span class="sub-title">Tickets start from $52.00</span>
								</div>
								<!-- event-title - end -->

								<p class="black-color mb-30">
									Lorem ipsum dollor site amet the best consectuer diam adipiscing elites sed diam nonummy nibh the euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer adipiscing elit.
								</p>

								<div class="event-info-list ul-li-block mb-30">
									<ul>

										<li>
											<span class="icon">
												<i class="far fa-clock"></i>
											</span>
											Start 20:00pm - 22:00pm
										</li>
										<li>
											<span class="icon">
												<i class="fas fa-map-marker-alt"></i>
											</span>
											Barcelona, Spain
										</li>
										
									</ul>
								</div>

								<div class="text-left">
									<a href="#!" class="custom-btn">booking ticket</a>
									<a href="#!" class="details-btn">event details</a>
								</div>
								
							</div>
						</div>

					</div>
				</div>
				<div class="event-image">
					<div class="big-image">
						<div class="badge-item">
							<div class="content">
								<i class="fas fa-star"></i>
								<strong>5.0</strong>
								<small>featured hotel</small>
							</div>
						</div>
						<div class="brand-logo">
							<a href="#!" class="logo">
								<img src="{{ url('frontend/assets/images/1.site-logo.png') }}" alt="logo_not_found">
							</a>
						</div>
						<img src="{{ url('frontend/assets/images/event/1.upcoming-big.jpg') }}" alt="Image_not_found">
					</div>
					<div class="small-image">
						<img src="{{ url('frontend/assets/images/event/1.1.upcoming-small.jpg') }}" alt="Image_not_found">
					</div>
				</div>
			</div>

		</section>
		<!------------------ upcomming-event-section2 - end ---------------------->





		<!-------------------- testimonial5-section - start ----------------->
		<section id="testimonial5-section" class="testimonial5-section clearfix">
			<div class="jarallax" style="background-image: url({{ url('frontend/assets/images/testimonial-bg.jpg') }});">
				<div class="overlay-black sec-ptb-100">
					<div class="container">

						<!-- testimonial5-carousel - start -->
						<div id="testimonial5-carousel" class="testimonial5-carousel owl-carousel owl-theme">

							<div class="item text-center">
								<span class="quote-icon">
									<i class="fas fa-quote-right"></i>
								</span>
								<p class="clients-comment">
									“Bring people together, or turn your passion into a business. Xubisoft gives you everything you need to host your best event yet. lorem ipsum diamet. Bring people together, or turn your passion into a business. Xubisoft gives you everything you need to host your best event yet.”
								</p>
								<div class="client-info">
									<h3 class="client-name">Jenni Hernandes</h3>
									<span class="client-sub-title">Graphic Designer</span>
								</div>
							</div>

							<div class="item text-center">
								<span class="quote-icon">
									<i class="fas fa-quote-right"></i>
								</span>
								<p class="clients-comment">
									“Bring people together, or turn your passion into a business. Xubisoft gives you everything you need to host your best event yet. lorem ipsum diamet. Bring people together, or turn your passion into a business. Xubisoft gives you everything you need to host your best event yet.”
								</p>
								<div class="client-info">
									<h3 class="client-name">Jenni Hernandes</h3>
									<span class="client-sub-title">Graphic Designer</span>
								</div>
							</div>

							<div class="item text-center">
								<span class="quote-icon">
									<i class="fas fa-quote-right"></i>
								</span>
								<p class="clients-comment">
									“Bring people together, or turn your passion into a business. Xubisoft gives you everything you need to host your best event yet. lorem ipsum diamet. Bring people together, or turn your passion into a business. Xubisoft gives you everything you need to host your best event yet.”
								</p>
								<div class="client-info">
									<h3 class="client-name">Jenni Hernandes</h3>
									<span class="client-sub-title">Graphic Designer</span>
								</div>
							</div>

							<div class="item text-center">
								<span class="quote-icon">
									<i class="fas fa-quote-right"></i>
								</span>
								<p class="clients-comment">
									“Bring people together, or turn your passion into a business. Xubisoft gives you everything you need to host your best event yet. lorem ipsum diamet. Bring people together, or turn your passion into a business. Xubisoft gives you everything you need to host your best event yet.”
								</p>
								<div class="client-info">
									<h3 class="client-name">Jenni Hernandes</h3>
									<span class="client-sub-title">Graphic Designer</span>
								</div>
							</div>

						</div>
						<!-- testimonial5-carousel - end -->

					</div>
				</div>
			</div>
		</section>
		<!------------------------- testimonial5-section - end ------------------->





		<!------------------------- event-section - start ---------------------------->
		<section id="event-section" class="event-section sec-ptb-100 bg-gray-light clearfix">
			<div class="container">

				<div class="mb-50">
					<div class="row">

						<!-- section-title - start -->
						<div class="col-lg-4 col-md-12 col-sm-12">
							<div class="section-title text-left">
								<span class="line-style"></span>
								<small class="sub-title">Xubisoft events</small>
								<h2 class="big-title"><strong>event</strong> listing</h2>
							</div>
						</div>
						<!-- section-title - end -->

						<!-- event-tab-menu - start -->
						<div class="col-lg-8 col-md-12 col-sm-12">
							<div class="event-tab-menu clearfix">
								<ul class="nav">
									<li>
										<a data-toggle="tab" href="#conference-event">
											<strong><i class="fas fa-microphone"></i> conference</strong> event
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#playground-event">
											<strong><i class="fas fa-birthday-cake"></i> play ground</strong> event
										</a>
									</li>
									<li>
										<a class="active" data-toggle="tab" href="#musical-event">
											<strong><i class="fas fa-music"></i> musical</strong> event
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#other-event">
											<strong><i class="far fa-check-square"></i> other</strong> event
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- event-tab-menu - end -->

					</div>
				</div>

				<!-- tab-content - start -->
				<div class="tab-content">

					<!-- conference-event - start -->
					<div id="conference-event" class="tab-pane fade">
						<div class="row">

							<!-- event-item - start -->
							<div class="col-lg-4 col-md-6 col-sm-12">
								<div class="event-item2 clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="{{ url('frontend/assets/images/event/1.event-grid.jpg') }}" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2020
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<!-- event-item - start -->
							<div class="col-lg-4 col-md-6 col-sm-12">
								<div class="event-item2 clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="{{ url('frontend/assets/images/event/2.event-grid.jpg') }}" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2020
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<!-- event-item - start -->
							<div class="col-lg-4 col-md-6 col-sm-12">
								<div class="event-item2 clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="{{ url('frontend/assets/images/event/3.event-grid.jpg') }}" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2020
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<div class="col-lg-12 col-md-12 col-sm-12">
								<div class="pagination ul-li clearfix">
									<ul>
										<li class="page-item prev-item">
											<a class="page-link" href="#">Prev</a>
										</li>
										<li class="page-item"><a class="page-link" href="#">01</a></li>
										<li class="page-item active"><a class="page-link" href="#">02</a></li>
										<li class="page-item"><a class="page-link" href="#">03</a></li>
										<li class="page-item"><a class="page-link" href="#">04</a></li>
										<li class="page-item"><a class="page-link" href="#">05</a></li>
										<li class="page-item next-item">
											<a class="page-link" href="#">Next</a>
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div>
					<!-- conference-event - end -->

					<!-- playground-event - start -->
					<div id="playground-event" class="tab-pane fade">
						<div class="row">

							<!-- event-item - start -->
							<div class="col-lg-4 col-md-6 col-sm-12">
								<div class="event-item2 clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="{{ url('frontend/assets/images/event/7.event-grid.jpg') }}" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2020
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<!-- event-item - start -->
							<div class="col-lg-4 col-md-6 col-sm-12">
								<div class="event-item2 clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="{{ url('frontend/assets/images/event/8.event-grid.jpg') }}" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2020
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<!-- event-item - start -->
							<div class="col-lg-4 col-md-6 col-sm-12">
								<div class="event-item2 clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="{{ url('frontend/assets/images/event/1.event-grid.jpg') }}" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2020
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<div class="col-lg-12 col-md-12 col-sm-12">
								<div class="pagination ul-li clearfix">
									<ul>
										<li class="page-item prev-item">
											<a class="page-link" href="#">Prev</a>
										</li>
										<li class="page-item"><a class="page-link" href="#">01</a></li>
										<li class="page-item active"><a class="page-link" href="#">02</a></li>
										<li class="page-item"><a class="page-link" href="#">03</a></li>
										<li class="page-item"><a class="page-link" href="#">04</a></li>
										<li class="page-item"><a class="page-link" href="#">05</a></li>
										<li class="page-item next-item">
											<a class="page-link" href="#">Next</a>
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div>
					<!-- playground-event - end -->

					<!-- musical-event - start -->
					<div id="musical-event" class="tab-pane fade in active show">
						<div class="row">

							<!-- event-item - start -->
							<div class="col-lg-4 col-md-6 col-sm-12">
								<div class="event-item2 clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="{{ url('frontend/assets/images/event/5.event-grid.jpg') }}" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2020
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<!-- event-item - start -->
							<div class="col-lg-4 col-md-6 col-sm-12">
								<div class="event-item2 clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="{{ url('frontend/assets/images/event/6.event-grid.jpg') }}" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2020
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<!-- event-item - start -->
							<div class="col-lg-4 col-md-6 col-sm-12">
								<div class="event-item2 clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="{{ url('frontend/assets/images/event/7.event-grid.jpg') }}" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2020
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<div class="col-lg-12 col-md-12 col-sm-12">
								<div class="pagination ul-li clearfix">
									<ul>
										<li class="page-item prev-item">
											<a class="page-link" href="#">Prev</a>
										</li>
										<li class="page-item"><a class="page-link" href="#">01</a></li>
										<li class="page-item active"><a class="page-link" href="#">02</a></li>
										<li class="page-item"><a class="page-link" href="#">03</a></li>
										<li class="page-item"><a class="page-link" href="#">04</a></li>
										<li class="page-item"><a class="page-link" href="#">05</a></li>
										<li class="page-item next-item">
											<a class="page-link" href="#">Next</a>
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div>
					<!-- musical-event - end -->

					<!-- other-event - start -->
					<div id="other-event" class="tab-pane fade">
						<div class="row">

							<!-- event-item - start -->
							<div class="col-lg-4 col-md-6 col-sm-12">
								<div class="event-item2 clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="{{ url('frontend/assets/images/event/3.event-grid.jpg') }}" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2020
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<!-- event-item - start -->
							<div class="col-lg-4 col-md-6 col-sm-12">
								<div class="event-item2 clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="{{ url('frontend/assets/images/event/4.event-grid.jpg') }}" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2020
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<!-- event-item - start -->
							<div class="col-lg-4 col-md-6 col-sm-12">
								<div class="event-item2 clearfix">

									<!-- event-image - start -->
									<div class="event-image">
										<div class="post-date">
											<span class="date">26</span>
											<small class="month">june</small>
										</div>
										<img src="{{ url('frontend/assets/images/event/5.event-grid.jpg') }}" alt="Image_not_found">
									</div>
									<!-- event-image - end -->

									<!-- event-content - start -->
									<div class="event-content">
										<div class="event-title mb-15">
											<h3 class="title">
												Barcelona Food truck Festival 2020
											</h3>
											<span class="ticket-price yellow-color">Tickets from $52</span>
										</div>
										<div class="event-post-meta ul-li-block mb-30">
											<ul>
												<li>
													<span class="icon">
														<i class="far fa-clock"></i>
													</span>
													Start 20:00pm - 22:00pm
												</li>
												<li>
													<span class="icon">
														<i class="fas fa-map-marker-alt"></i>
													</span>
													Manhattan, New York
												</li>
											</ul>
										</div>
										<a href="#!" class="tickets-details-btn">
											tickets & details
										</a>
									</div>
									<!-- event-content - end -->

								</div>
							</div>
							<!-- event-item - end -->

							<div class="col-lg-12 col-md-12 col-sm-12">
								<div class="pagination ul-li clearfix">
									<ul>
										<li class="page-item prev-item">
											<a class="page-link" href="#">Prev</a>
										</li>
										<li class="page-item"><a class="page-link" href="#">01</a></li>
										<li class="page-item active"><a class="page-link" href="#">02</a></li>
										<li class="page-item"><a class="page-link" href="#">03</a></li>
										<li class="page-item"><a class="page-link" href="#">04</a></li>
										<li class="page-item"><a class="page-link" href="#">05</a></li>
										<li class="page-item next-item">
											<a class="page-link" href="#">Next</a>
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div>
					<!-- other-event - end -->

				</div>
				<!-- tab-content - end -->

			</div>
		</section>
		<!--------------------- event-section - end ------------------- -->





		<!--------------------- speaker-section - start ------------------->
		<section id="speaker-section" class="speaker-section clearfix">
			<div class="jarallax" style="background-image: url({{ url('frontend/assets/images/speaker/Black-White-Dubai-Wallpaper.jpg') }});">
				<div class="overlay-white">
					<div class="container">

						<!-- speaker-carousel - start -->
						<div class="speaker-carousel">
							<div class="slider-for">

								<div class="item">
									<div class="row">

										<!-- speaker-image - start -->
										<div class="col-lg-6 col-md-12 col-sm-12">
											<div class="speaker-image image-wrapper text-center">
												<img src="{{ url('frontend/assets/images/speaker/speakes1.png') }}" alt="Image_not_found">
												<span class="speaker-name"><strong>Jenni</strong> Berthas</span>
											</div>
										</div>
										<!-- speaker-image - end -->

										<!-- speaker-content - start -->
										<div class="col-lg-6 col-md-12 col-sm-12">
											<div class="speaker-content">

												<!-- section-title - start -->
												<div class="section-title text-left mb-50">
													<span class="line-style"></span>
													<small class="sub-title">Xubisoft staffs</small>
													<h2 class="big-title">Professional <strong>Speakers</strong></h2>
												</div>
												<!-- section-title - end -->

												<div class="speaker-info">
													<div class="speaker-title mb-30">
														<span class="speaker-name"><strong>Jenni</strong> Berthas</span>
														<span class="work-experienc yellow-color"><strong>15 Years</strong> experienced</span>
													</div>
													<p class="black-color mb-30">
														Lorem ipsum dollor site amet the best  consectuer adipiscing elites sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam...
													</p>
													<div class="speaker-social-network ul-li">
														<h3 class="title title-medium mb-15">
															<strong>Social</strong> Network
														</h3>
														<ul>
															<li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
															<li><a href="#!"><i class="fab fa-twitter"></i></a></li>
															<li><a href="#!"><i class="fab fa-twitch"></i></a></li>
															<li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
															<li><a href="#!"><i class="fab fa-instagram"></i></a></li>
														</ul>
													</div>
												</div>

											</div>
										</div>
										<!-- speaker-content - end -->

									</div>
								</div>

								<div class="item">
									<div class="row">

										<!-- speaker-image - start -->
										<div class="col-lg-6 col-md-12 col-sm-12">
											<div class="speaker-image image-wrapper text-center">
												<img src="{{ url('frontend/assets/images/speaker/speakes1.png') }}" alt="Image_not_found">
												<span class="speaker-name"><strong>Jonathan</strong> Doe</span>
											</div>
										</div>
										<!-- speaker-image - end -->

										<!-- speaker-content - start -->
										<div class="col-lg-6 col-md-12 col-sm-12">
											<div class="speaker-content">

												<!-- section-title - start -->
												<div class="section-title text-left mb-50">
													<span class="line-style"></span>
													<small class="sub-title">Xubisoft staffs</small>
													<h2 class="big-title">Professional <strong>Speakers</strong></h2>
												</div>
												<!-- section-title - end -->

												<div class="speaker-info">
													<div class="speaker-title mb-30">
														<span class="speaker-name"><strong>Jonathan</strong> Doe</span>
														<span class="work-experienc yellow-color"><strong>15 Years</strong> experienced</span>
													</div>
													<p class="black-color mb-30">
														Lorem ipsum dollor site amet the best  consectuer adipiscing elites sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam...
													</p>
													<div class="speaker-social-network ul-li">
														<h3 class="title title-medium mb-15">
															<strong>Social</strong> Network
														</h3>
														<ul>
															<li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
															<li><a href="#!"><i class="fab fa-twitter"></i></a></li>
															<li><a href="#!"><i class="fab fa-twitch"></i></a></li>
															<li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
															<li><a href="#!"><i class="fab fa-instagram"></i></a></li>
														</ul>
													</div>
												</div>

											</div>
										</div>
										<!-- speaker-content - end -->

									</div>
								</div>

								<div class="item">
									<div class="row">

										<!-- speaker-image - start -->
										<div class="col-lg-6 col-md-12 col-sm-12">
											<div class="speaker-image image-wrapper text-center">
												<img src="{{ url('frontend/assets/images/speaker/speakes1.png') }}" alt="Image_not_found">
												<span class="speaker-name"><strong>Denies</strong> Suarez</span>
											</div>
										</div>
										<!-- speaker-image - end -->

										<!-- speaker-content - start -->
										<div class="col-lg-6 col-md-12 col-sm-12">
											<div class="speaker-content">

												<!-- section-title - start -->
												<div class="section-title text-left mb-50">
													<span class="line-style"></span>
													<small class="sub-title">Xubisoft staffs</small>
													<h2 class="big-title">Professional <strong>Speakers</strong></h2>
												</div>
												<!-- section-title - end -->

												<div class="speaker-info">
													<div class="speaker-title mb-30">
														<span class="speaker-name"><strong>Denies</strong> Suarez</span>
														<span class="work-experienc yellow-color"><strong>15 Years</strong> experienced</span>
													</div>
													<p class="black-color mb-30">
														Lorem ipsum dollor site amet the best  consectuer adipiscing elites sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam...
													</p>
													<div class="speaker-social-network ul-li">
														<h3 class="title title-medium mb-15">
															<strong>Social</strong> Network
														</h3>
														<ul>
															<li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
															<li><a href="#!"><i class="fab fa-twitter"></i></a></li>
															<li><a href="#!"><i class="fab fa-twitch"></i></a></li>
															<li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
															<li><a href="#!"><i class="fab fa-instagram"></i></a></li>
														</ul>
													</div>
												</div>

											</div>
										</div>
										<!-- speaker-content - end -->

									</div>
								</div>

								<div class="item">
									<div class="row">

										<!-- speaker-image - start -->
										<div class="col-lg-6 col-md-12 col-sm-12">
											<div class="speaker-image image-wrapper text-center">
												<img src="{{ url('frontend/assets/images/speaker/speakes1.png') }}" alt="Image_not_found">
												<span class="speaker-name"><strong>Jonathan</strong> Doe</span>
											</div>
										</div>
										<!-- speaker-image - end -->

										<!-- speaker-content - start -->
										<div class="col-lg-6 col-md-12 col-sm-12">
											<div class="speaker-content">

												<!-- section-title - start -->
												<div class="section-title text-left mb-50">
													<span class="line-style"></span>
													<small class="sub-title">Xubisoft staffs</small>
													<h2 class="big-title">Professional <strong>Speakers</strong></h2>
												</div>
												<!-- section-title - end -->

												<div class="speaker-info">
													<div class="speaker-title mb-30">
														<span class="speaker-name"><strong>Jonathan</strong> Doe</span>
														<span class="work-experienc yellow-color"><strong>15 Years</strong> experienced</span>
													</div>
													<p class="black-color mb-30">
														Lorem ipsum dollor site amet the best  consectuer adipiscing elites sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam...
													</p>
													<div class="speaker-social-network ul-li">
														<h3 class="title title-medium mb-15">
															<strong>Social</strong> Network
														</h3>
														<ul>
															<li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
															<li><a href="#!"><i class="fab fa-twitter"></i></a></li>
															<li><a href="#!"><i class="fab fa-twitch"></i></a></li>
															<li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
															<li><a href="#!"><i class="fab fa-instagram"></i></a></li>
														</ul>
													</div>
												</div>

											</div>
										</div>
										<!-- speaker-content - end -->

									</div>
								</div>

							</div>

							<div class="slider-nav">
								<div class="item">
									<div class="item-content">
										<span class="speaker-thumbnail">
											<img src="{{ url('frontend/assets/images/speaker/speakes-thumbnail.png') }}" alt="Image_not_found">
										</span>
										<h3 class="speaker-name">Jenni Berthas</h3>
										<span class="sub-title">Xubisoft Speaker</span>
									</div>
								</div>

								<div class="item">
									<div class="item-content">
										<span class="speaker-thumbnail">
											<img src="{{ url('frontend/assets/images/speaker/speakes-thumbnail.png') }}" alt="Image_not_found">
										</span>
										<h3 class="speaker-name">Jonathan Doe</h3>
										<span class="sub-title">Xubisoft Speaker</span>
									</div>
								</div>

								<div class="item">
									<div class="item-content">
										<span class="speaker-thumbnail">
											<img src="{{ url('frontend/assets/images/speaker/speakes-thumbnail.png') }}" alt="Image_not_found">
										</span>
										<h3 class="speaker-name">Denies Suarez</h3>
										<span class="sub-title">Xubisoft Speaker</span>
									</div>
								</div>

								<div class="item">
									<div class="item-content">
										<span class="speaker-thumbnail">
											<img src="{{ url('frontend/assets/images/speaker/speakes-thumbnail.png') }}" alt="Image_not_found">
										</span>
										<h3 class="speaker-name">Jonathan Doe</h3>
										<span class="sub-title">Xubisoft Speaker</span>
									</div>
								</div>

							</div>
						</div>
						<!-- speaker-carousel - end -->

					</div>
				</div>
			</div>
		</section>
		<!--------------------- speaker-section - end ---------------------------->





		<!--------------------- conference-section - start ---------------------->
		<section id="conference-section" class="conference-section clearfix">
			<div class="jarallax" style="background-image: url({{ url('frontend/assets/images/conference/pexels-photo-262669.jpg') }});">
				<div class="overlay-black sec-ptb-100">

					<div class="mb-50">
						<div class="container">
							<div class="row">

								<!-- section-title - start -->
								<div class="col-lg-6 col-md-12 col-sm-12">
									<div class="section-title text-left">
										<span class="line-style"></span>
										<small class="sub-title">Xubisoft venues</small>
										<h2 class="big-title">Conference <strong>Rooms & Hotels</strong></h2>
									</div>
								</div>
								<!-- section-title - end -->

								<!-- conference-location - start -->
								<div class="col-lg-6 col-md-12 col-sm-12">
									<div class="conference-location ul-li clearfix">
										<ul>

											<!-- country-select - start -->
											<li class="country-select">
												<form action="#!">
													<label for="country">Country :</label>
													<select class="custom-select" id="country">
														<option selected>Netherland</option>
														<option value="1">USA</option>
														<option value="2">england</option>
														<option value="3">germany</option>
													</select>	
												</form>
											</li>
											<!-- country-select - end -->

											<!-- city-select - start -->
											<li class="city-select">
												<form action="#!">
													<label for="city">city :</label>
													<select class="custom-select" id="city">
														<option selected>Amsterdam</option>
														<option value="1">washington</option>
														<option value="2">london</option>
														<option value="3">berlin</option>
													</select>	
												</form>
											</li>
											<!-- city-select - end -->

										</ul>
									</div>
								</div>
								<!-- conference-location - end -->

							</div>
						</div>
					</div>

					<!-- conference-content-wrapper - start -->
					<div class="tab-wrapper">

						<!-- tab-menu - start -->
						<div class="container">
							<div class="row justify-content-lg-start">
								<div class="col-lg-6 col-md-12 col-sm-12">
									<div class="tab-menu">
										<ul class="nav tab-nav mb-50">

											<li class="nav-item">
												<a class="nav-link active" id="nav-one-tab" data-toggle="tab" href="#nav-one" aria-expanded="true">
													<span class="image">
														<img src="{{ url('frontend/assets/images/conference/RCJAKPP_00016_coddddnversion.jpg') }}" alt="Image_not_found">
													</span>
													<span class="title">
														<strong class="yellow-color">5 <i class="fas fa-star"></i> Chocolato </strong>
														Hotel
													</span>
													<small class="sub-title">Party Room 2.500 seats</small>
													<small class="price yellow-color">Price from $52/night</small>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" id="nav-two-tab" data-toggle="tab" href="#nav-two" aria-expanded="false">
													<span class="image">
														<img src="{{ url('frontend/assets/images/conference/fresh-conference-room-microphones-decoration-ideas-collection-gallery-to-conference-room-microphones-home-ideas.jpg') }}" alt="Image_not_found">
													</span>
													<span class="title">
														<strong class="yellow-color">4 <i class="fas fa-star"></i> Vanila </strong>
														Hotel
													</span>
													<small class="sub-title">Party Room 2.500 seats</small>
													<small class="price yellow-color">Price from $52/night</small>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" id="nav-three-tab" data-toggle="tab" href="#nav-three" aria-expanded="false">
													<span class="image">
														<img src="{{ url('frontend/assets/images/conference/RCTORON_00047ss.jpg') }}" alt="Image_not_found">
													</span>
													<span class="title">
														<strong class="yellow-color">3 <i class="fas fa-star"></i> Pear </strong>
														Hotel
													</span>
													<small class="sub-title">Party Room 2.500 seats</small>
													<small class="price yellow-color">Price from $52/night</small>
												</a>
											</li>

											<li class="nav-item">
												<a class="nav-link" id="nav-four-tab" data-toggle="tab" href="#nav-four" aria-expanded="false">
													<span class="image">
														<img src="{{ url('frontend/assets/images/conference/clayton-hotel-leopardstown-meeting-room-1.jpg') }}" alt="Image_not_found">
													</span>
													<span class="title">
														<strong class="yellow-color">5 <i class="fas fa-star"></i> Chocolato </strong>
														Hotel
													</span>
													<small class="sub-title">Party Room 2.500 seats</small>
													<small class="price yellow-color">Price from $52/night</small>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" id="nav-five-tab" data-toggle="tab" href="#nav-five" aria-expanded="false">
													<span class="image">
														<img src="{{ url('frontend/assets/images/conference/conference-room-with-projection-facilities-3d-model-max.jpg') }}" alt="Image_not_found">
													</span>
													<span class="title">
														<strong class="yellow-color">4 <i class="fas fa-star"></i> Vanila </strong>
														Hotel
													</span>
													<small class="sub-title">Party Room 2.500 seats</small>
													<small class="price yellow-color">Price from $52/night</small>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" id="nav-six-tab" data-toggle="tab" href="#nav-six" aria-expanded="false">
													<span class="image">
														<img src="{{ url('frontend/assets/images/conference/midlands-park-hotel-meeting-rooms.jpg') }}" alt="Image_not_found">
													</span>
													<span class="title">
														<strong class="yellow-color">3 <i class="fas fa-star"></i> pear </strong>
														Hotel
													</span>
													<small class="sub-title">Party Room 2.500 seats</small>
													<small class="price yellow-color">Price from $52/night</small>
												</a>
											</li>

										</ul>
										<div class="more-btn">
											<a href="#!">
												<strong class="yellow-color">VIEW ALL</strong> HOTEL & RESORT
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- tab-menu - end -->

						<!-- tab-content - start -->
						<div class="tab-content">
							<!-- tab-pane - start -->
							<div class="tab-pane fade active show" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab" aria-expanded="true">
								<div class="image">
									<img src="{{ url('frontend/assets/images/conference/RCJAKPP_00016_coddddnversion.jpg') }}" alt="Image_not_found">
									<a href="#!" class="custom-btn">
										booking now
									</a>
									<div class="badge-item">
										<div class="content">
											<i class="fas fa-star"></i>
											<strong>5.0</strong>
											<small>featured hotel</small>
										</div>
									</div>
								</div>
							</div>
							<!-- tab-pane - end -->

							<!-- tab-pane - start -->
							<div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab" aria-expanded="false">
								<div class="image">
									<img src="{{ url('frontend/assets/images/conference/fresh-conference-room-microphones-decoration-ideas-collection-gallery-to-conference-room-microphones-home-ideas.jpg') }}" alt="Image_not_found">
									<a href="#!" class="custom-btn">
										booking now
									</a>
									<div class="badge-item">
										<div class="content">
											<i class="fas fa-star"></i>
											<strong>5.0</strong>
											<small>featured hotel</small>
										</div>
									</div>
								</div>
							</div>
							<!-- tab-pane - end -->

							<!-- tab-pane - start -->
							<div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="nav-three-tab" aria-expanded="false">
								<div class="image">
									<img src="{{ url('frontend/assets/images/conference/RCTORON_00047ss.jpg') }}" alt="Image_not_found">
									<a href="#!" class="custom-btn">
										booking now
									</a>
									<div class="badge-item">
										<div class="content">
											<i class="fas fa-star"></i>
											<strong>5.0</strong>
											<small>featured hotel</small>
										</div>
									</div>
								</div>
							</div>
							<!-- tab-pane - end -->

							<!-- tab-pane - start -->
							<div class="tab-pane fade" id="nav-four" role="tabpanel" aria-labelledby="nav-four-tab" aria-expanded="false">
								<div class="image">
									<img src="{{ url('frontend/assets/images/conference/clayton-hotel-leopardstown-meeting-room-1.jpg') }}" alt="Image_not_found">
									<a href="#!" class="custom-btn">
										booking now
									</a>
									<div class="badge-item">
										<div class="content">
											<i class="fas fa-star"></i>
											<strong>5.0</strong>
											<small>featured hotel</small>
										</div>
									</div>
								</div>
							</div>
							<!-- tab-pane - end -->

							<!-- tab-pane - start -->
							<div class="tab-pane fade" id="nav-five" role="tabpanel" aria-labelledby="nav-five-tab" aria-expanded="false">
								<div class="image">
									<img src="{{ url('frontend/assets/images/conference/conference-room-with-projection-facilities-3d-model-max.jpg') }}" alt="Image_not_found">
									<a href="#!" class="custom-btn">
										booking now
									</a>
									<div class="badge-item">
										<div class="content">
											<i class="fas fa-star"></i>
											<strong>5.0</strong>
											<small>featured hotel</small>
										</div>
									</div>
								</div>
							</div>
							<!-- tab-pane - end -->

							<!-- tab-pane - start -->
							<div class="tab-pane fade" id="nav-six" role="tabpanel" aria-labelledby="nav-six-tab" aria-expanded="false">
								<div class="image">
									<img src="{{ url('frontend/assets/images/conference/midlands-park-hotel-meeting-rooms.jpg') }}" alt="Image_not_found">
									<a href="#!" class="custom-btn">
										booking now
									</a>
									<div class="badge-item">
										<div class="content">
											<i class="fas fa-star"></i>
											<strong>5.0</strong>
											<small>featured hotel</small>
										</div>
									</div>
								</div>
							</div>
							<!-- tab-pane - end -->

						</div>
						<!-- tab-content - end -->

					</div>
					<!-- conference-content-wrapper - end -->

				</div>
			</div>
		</section>
		<!------------------- conference-section - end -------------------->





		<!---------------------- special-offer-section - start ------------------>
		<section id="special-offer-section" class="special-offer-section clearfix" style="background-image: url({{ url('frontend/assets/images/historyheader.jpg') }});">
			<div class="container">
				<div class="row">

					<!-- special-offer-content - start -->
					<div class="col-lg-9 col-md-12 col-sm-12">
						<div class="special-offer-content">
							<h2><strong>30%</strong> Off in June~July for <span>Birthday Events</span></h2>
							<p class="m-0 text-white">
								Contact us now and we will make your event unique & unforgettable
							</p>
						</div>
					</div>
					<!-- special-offer-content - end -->

					<!-- event-makeing-btn - start -->
					<div class="col-lg-3 col-md-12 col-sm-12">
						<div class="event-makeing-btn">
							<a href="#!">make an event now</a>
						</div>
					</div>
					<!-- event-makeing-btn - end -->

				</div>
			</div>
		</section>
		<!----------------------- special-offer-section - end -------------------->





		<!---------------------- event-expertise-section - start ------------------->
		<section id="event-expertise-section" class="event-expertise-section bg-gray-light sec-ptb-100 clearfix">
			<div class="container">

				<!-- section-title - start -->
				<div class="row">
					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="section-title mb-50">
							<small class="sub-title">our services</small>
							<h2 class="big-title">harmony <strong>Expertise</strong></h2>
						</div>
					</div>

					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="link-btn text-right">
							<a href="service.html">Xubisoft services</a>
						</div>
					</div>
				</div>
				<!-- section-title - end -->

				<!-- event-expertise-carousel - start -->
				<div id="event-expertise-carousel" class="event-expertise-carousel owl-carousel owl-theme">

					<!-- expertise-item - start -->
					<div class="item">
						<span class="expertise-title">Xubisoft party events</span>
						<div class="expertise-item">
							<div class="image image-wrapper">
								<img src="{{ url('frontend/assets/images/experties/img1.jpg') }}" alt="Image_not_found">
								<a href="#!" class="plus-effect"></a>
							</div>
							<div class="content">
								<h3 class="title">Wedding Party</h3>
								<p>Start from <strong>$1.200-$2.000</strong></p>
							</div>
						</div>
					</div>
					<!-- expertise-item - end -->

					<!-- expertise-item - start -->
					<div class="item">
						<span class="expertise-title">Xubisoft party events</span>
						<div class="expertise-item">
							<div class="image image-wrapper">
								<img src="{{ url('frontend/assets/images/experties/img2.jpg') }}" alt="Image_not_found">
								<a href="#!" class="plus-effect"></a>
							</div>
							<div class="content">
								<h3 class="title">birthday Party</h3>
								<p>Start from <strong>$1.200-$2.000</strong></p>
							</div>
						</div>
					</div>
					<!-- expertise-item - end -->

					<!-- expertise-item - start -->
					<div class="item">
						<span class="expertise-title">Xubisoft party events</span>
						<div class="expertise-item">
							<div class="image image-wrapper">
								<img src="{{ url('frontend/assets/images/experties/img3.jpg') }}" alt="Image_not_found">
								<a href="#!" class="plus-effect"></a>
							</div>
							<div class="content">
								<h3 class="title">business meeting</h3>
								<p>Start from <strong>$1.200-$2.000</strong></p>
							</div>
						</div>
					</div>
					<!-- expertise-item - end -->

					<!-- expertise-item - start -->
					<div class="item">
						<span class="expertise-title">Xubisoft party events</span>
						<div class="expertise-item">
							<div class="image image-wrapper">
								<img src="{{ url('frontend/assets/images/experties/img1.jpg') }}" alt="Image_not_found">
								<a href="#!" class="plus-effect"></a>
							</div>
							<div class="content">
								<h3 class="title">Wedding Party</h3>
								<p>Start from <strong>$1.200-$2.000</strong></p>
							</div>
						</div>
					</div>
					<!-- expertise-item - end -->

					<!-- expertise-item - start -->
					<div class="item">
						<span class="expertise-title">Xubisoft party events</span>
						<div class="expertise-item">
							<div class="image image-wrapper">
								<img src="{{ url('frontend/assets/images/experties/img2.jpg') }}" alt="Image_not_found">
								<a href="#!" class="plus-effect"></a>
							</div>
							<div class="content">
								<h3 class="title">birthday Party</h3>
								<p>Start from <strong>$1.200-$2.000</strong></p>
							</div>
						</div>
					</div>
					<!-- expertise-item - end -->

					<!-- expertise-item - start -->
					<div class="item">
						<span class="expertise-title">Xubisoft party events</span>
						<div class="expertise-item">
							<div class="image image-wrapper">
								<img src="{{ url('frontend/assets/images/experties/img3.jpg') }}" alt="Image_not_found">
								<a href="#!" class="plus-effect"></a>
							</div>
							<div class="content">
								<h3 class="title">business meeting</h3>
								<p>Start from <strong>$1.200-$2.000</strong></p>
							</div>
						</div>
					</div>
					<!-- expertise-item - end -->

					<!-- expertise-item - start -->
					<div class="item">
						<span class="expertise-title">Xubisoft party events</span>
						<div class="expertise-item">
							<div class="image image-wrapper">
								<img src="{{ url('frontend/assets/images/experties/img1.jpg') }}" alt="Image_not_found">
								<a href="#!" class="plus-effect"></a>
							</div>
							<div class="content">
								<h3 class="title">Wedding Party</h3>
								<p>Start from <strong>$1.200-$2.000</strong></p>
							</div>
						</div>
					</div>
					<!-- expertise-item - end -->

					<!-- expertise-item - start -->
					<div class="item">
						<span class="expertise-title">Xubisoft party events</span>
						<div class="expertise-item">
							<div class="image image-wrapper">
								<img src="{{ url('frontend/assets/images/experties/img2.jpg') }}" alt="Image_not_found">
								<a href="#!" class="plus-effect"></a>
							</div>
							<div class="content">
								<h3 class="title">birthday Party</h3>
								<p>Start from <strong>$1.200-$2.000</strong></p>
							</div>
						</div>
					</div>
					<!-- expertise-item - end -->

					<!-- expertise-item - start -->
					<div class="item">
						<span class="expertise-title">Xubisoft party events</span>
						<div class="expertise-item">
							<div class="image image-wrapper">
								<img src="{{ url('frontend/assets/images/experties/img3.jpg') }}" alt="Image_not_found">
								<a href="#!" class="plus-effect"></a>
							</div>
							<div class="content">
								<h3 class="title">business meeting</h3>
								<p>Start from <strong>$1.200-$2.000</strong></p>
							</div>
						</div>
					</div>
					<!-- expertise-item - end -->

					<!-- expertise-item - start -->
					<div class="item">
						<span class="expertise-title">Xubisoft party events</span>
						<div class="expertise-item">
							<div class="image image-wrapper">
								<img src="{{ url('frontend/assets/images/experties/img1.jpg') }}" alt="Image_not_found">
								<a href="#!" class="plus-effect"></a>
							</div>
							<div class="content">
								<h3 class="title">Wedding Party</h3>
								<p>Start from <strong>$1.200-$2.000</strong></p>
							</div>
						</div>
					</div>
					<!-- expertise-item - end -->

					<!-- expertise-item - start -->
					<div class="item">
						<span class="expertise-title">Xubisoft party events</span>
						<div class="expertise-item">
							<div class="image image-wrapper">
								<img src="{{ url('frontend/assets/images/experties/img2.jpg') }}" alt="Image_not_found">
								<a href="#!" class="plus-effect"></a>
							</div>
							<div class="content">
								<h3 class="title">birthday Party</h3>
								<p>Start from <strong>$1.200-$2.000</strong></p>
							</div>
						</div>
					</div>
					<!-- expertise-item - end -->

					<!-- expertise-item - start -->
					<div class="item">
						<span class="expertise-title">Xubisoft party events</span>
						<div class="expertise-item">
							<div class="image image-wrapper">
								<img src="{{ url('frontend/assets/images/experties/img3.jpg') }}" alt="Image_not_found">
								<a href="#!" class="plus-effect"></a>
							</div>
							<div class="content">
								<h3 class="title">business meeting</h3>
								<p>Start from <strong>$1.200-$2.000</strong></p>
							</div>
						</div>
					</div>
					<!-- expertise-item - end -->

				</div>
				<!-- event-expertise-carousel - end -->

			</div>
		</section>
		<!--------------------- event-expertise-section - end ------------------------>





		<!--------------------- event-gallery-section - start ------------------------>
		<section id="event-gallery-section" class="event-gallery-section sec-ptb-100 clearfix">
			<div class="container">

				<!-- section-title - start -->
				<div class="section-title text-center mb-80">
					<small class="sub-title">Xubisoft gallery</small>
					<h2 class="big-title">Beautiful & <strong>Unforgettable Times</strong></h2>
				</div>
				<!-- section-title - end -->

				<div class="button-group filters-button-group mb-30">
					<button class="button is-checked" data-filter="*">
						<i class="fas fa-star"></i>
						<strong>all</strong> gallery
					</button>
					<button class="button" data-filter=".video-gallery">
						<i class="fas fa-play-circle"></i>
						<strong>video</strong> gallery
					</button>
					<button class="button" data-filter=".photo-gallery">
						<i class="far fa-image"></i>
						<strong>photo</strong> gallery
					</button>
				</div>

				<div class="grid zoom-gallery clearfix mb-80" data-isotope="{ &quot;masonry&quot;: { &quot;columnWidth&quot;: 0 } }">
				<div class="grid-item grid-item--height2 photo-gallery " data-category="photo-gallery">
					<a class="popup-link" href="{{ url('frontend/assets/images/gallery/1.image.jpg') }}">
						<img src="{{ url('frontend/assets/images/gallery/1.image.jpg') }}" alt="Image_not_found">
					</a>
					<div class="item-content">
						<h3>John Doe Wedding day</h3>
						<span>Wedding Party, 24 June 2016</span>
					</div>
				</div>
				<div class="grid-item grid-item--width2 video-gallery " data-category="video-gallery">
					<a class="popup-youtube" href="https://youtu.be/-haiaZ011OM">
						<img src="{{ url('frontend/assets/images/gallery/2.image.jpg') }}" alt="Image_not_found">
					</a>
					<div class="item-content">
						<h3>Business Conference in Dubai</h3>
						<span>Food Festival, 24 June 2016</span>
					</div>
				</div>
				<div class="grid-item photo-gallery " data-category="photo-gallery">
					<a class="popup-link" href="{{ url('frontend/assets/images/gallery/3.image.jpg') }}">
						<img src="{{ url('frontend/assets/images/gallery/3.image.jpg') }}" alt="Image_not_found">
					</a>
					<div class="item-content">
						<h3>Envato Author Fun Hiking</h3>
						<span>Food Festival, 24 June 2016</span>
					</div>
				</div>

				<div class="grid-item photo-gallery " data-category="photo-gallery">
					<a class="popup-link" href="{{ url('frontend/assets/images/gallery/4.image.jpg') }}">
						<img src="{{ url('frontend/assets/images/gallery/4.image.jpg') }}" alt="Image_not_found">
					</a>
					<div class="item-content">
						<h3>John Doe Wedding day</h3>
						<span>Wedding Party, 24 June 2016</span>
					</div>
				</div>
				<div class="grid-item grid-item--width2 video-gallery " data-category="video-gallery">
					<a class="popup-youtube" href="https://youtu.be/-haiaZ011OM">
						<img src="{{ url('frontend/assets/images/gallery/5.image.jpg') }}" alt="Image_not_found">
					</a>
					<div class="item-content">
						<h3>New Year Celebration</h3>
						<span>Food Festival, 24 June 2016</span>
					</div>
				</div>

				<div class="grid-item grid-item--width2 photo-gallery " data-category="photo-gallery">
					<a class="popup-link" href="{{ url('frontend/assets/images/gallery/6.image.jpg') }}">
						<img src="{{ url('frontend/assets/images/gallery/6.image.jpg') }}" alt="Image_not_found">
					</a>
					<div class="item-content">
						<h3>John Doe Wedding day</h3>
						<span>Wedding Party, 24 June 2016</span>
					</div>
				</div>
				<div class="grid-item video-gallery " data-category="video-gallery">
					<a class="popup-youtube" href="https://youtu.be/-haiaZ011OM">
						<img src="{{ url('frontend/assets/images/gallery/7.image.jpg') }}" alt="Image_not_found">
					</a>
					<div class="item-content">
						<h3>New Year Celebration</h3>
						<span>Food Festival, 24 June 2016</span>
					</div>
				</div>
				<div class="grid-item photo-gallery " data-category="photo-gallery">
					<a class="popup-link" href="{{ url('frontend/assets/images/gallery/8.image.jpg') }}">
						<img src="{{ url('frontend/assets/images/gallery/8.image.jpg') }}" alt="Image_not_found">
					</a>
					<div class="item-content">
						<h3>Envato Author Fun Hiking</h3>
						<span>Food Festival, 24 June 2016</span>
					</div>
				</div>
			</div>
				<div class="text-center">
					<a href="#!" class="custom-btn">view all gallery</a>
				</div>

			</div>
		</section>
		<!--------------------- event-gallery-section - end -------------------->





		<!--------------------- default-sponsor-section - start ------------------>
		<div id="default-sponsor-section" class="default-sponsor-section clearfix" style="background-image: url({{ url('frontend/assets/images/historyheader.jpg') }});">
			<div class="container">
				<ul>

					<li>
						<a href="#!">
							<img src="{{ url('frontend/assets/images/partners/image1.png') }}" alt="Image_not_found">
						</a>
					</li>
					<li>
						<a href="#!">
							<img src="{{ url('frontend/assets/images/partners/image2.png') }}" alt="Image_not_found">
						</a>
					</li>
					<li>
						<a href="#!">
							<img src="{{ url('frontend/assets/images/partners/image4.png') }}" alt="Image_not_found">
						</a>
					</li>
					<li>
						<a href="#!">
							<img src="{{ url('frontend/assets/images/partners/image6.png') }}" alt="Image_not_found">
						</a>
					</li>

				</ul>
			</div>
		</div>
		<!--------------------------- default-sponsor-section - end ----------------------------->





		<!-------------------------- news-update-section - start -------------------------------->
		<section id="news-update-section" class="news-update-section sec-ptb-100 clearfix">
			<div class="container">
				<div class="row">

					<!-- faq-accordion - start -->
					<div class="col-lg-6 col-md-12 col-sm-12">
						<!-- section-title - start -->
						<div class="section-title mb-30">
							<span class="line-style"></span>
							<small class="sub-title">find your answer</small>
							<h2 class="big-title">ask & <strong>questions</strong></h2>
						</div>
						<!-- section-title - end -->
						<div id="faq-accordion" class="faq-accordion">

							<div class="card">
								<div class="card-header" id="headingone">
									<button class="btn collapsed" data-toggle="collapse" data-target="#collapseone" aria-expanded="true" aria-controls="collapseone">
										<span>01.</span> How to join Xubisoft Event Management?
									</button>
								</div>

								<div id="collapseone" class="collapse" aria-labelledby="headingone" data-parent="#faq-accordion">
									<div class="card-body">
										<h3>answer</h3>
										Bring people together, or turn your passion into a business. Xubisoft gives you everything you need to host your best event yet. lorem ipsum diamet.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header" id="headingtwo">
									<button class="btn" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">
										<span>02.</span> How to make my own event?
									</button>
								</div>
								<div id="collapsetwo" class="collapse show" aria-labelledby="headingtwo" data-parent="#faq-accordion">
									<div class="card-body">
										<h3>answer</h3>
										Bring people together, or turn your passion into a business. Xubisoft gives you everything you need to host your best event yet. lorem ipsum diamet.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header" id="headingthree">
									<button class="btn collapsed" data-toggle="collapse" data-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
										<span>03.</span> About the price to make new event?
									</button>
								</div>
								<div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-parent="#faq-accordion">
									<div class="card-body">
										<h3>answer</h3>
										Bring people together, or turn your passion into a business. Xubisoft gives you everything you need to host your best event yet. lorem ipsum diamet.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header" id="headingfour">
									<button class="btn collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
										<span>04.</span> About the price to make new event?
									</button>
								</div>
								<div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#faq-accordion">
									<div class="card-body">
										<h3>answer</h3>
										Bring people together, or turn your passion into a business. Xubisoft gives you everything you need to host your best event yet. lorem ipsum diamet.
									</div>
								</div>
							</div>

						</div>
					</div>
					<!-- faq-accordion - end -->

					<!-- latest-blog-wrapper - start -->
					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="latest-blog-wrapper">

							<!-- section-title - start -->
							<div class="section-title mb-30">
								<span class="line-style"></span>
								<small class="sub-title">our blog</small>
								<h2 class="big-title">latest <strong>news</strong></h2>
							</div>
							<!-- section-title - end -->

							<!-- latest-blog - start -->
							<div class="latest-blog clearfix">
								<div class="blog-image">
									<img src="{{ url('frontend/assets/images/blog/1.latest-blog.jpg') }}" alt="Image_not_found">
									<a href="#!" class="plus-effect"></a>
								</div>
								<div class="blog-content">
									<div class="blog-title mb-30">
										<h3>Barcelona Friday Food Truck Festival 26 Mei 2019</h3>
										<span>26 June 2020</span>
									</div>
									<p class="m-0">
										Xubisoft gives you everything you need to host your best event yet. lorem ipsum diamet.
									</p>
								</div>
							</div>
							<!-- latest-blog - end -->

							<!-- latest-blog - start -->
							<div class="latest-blog clearfix">
								<div class="blog-image">
									<img src="{{ url('frontend/assets/images/blog/1.latest-blog.jpg') }}" alt="Image_not_found">
									<a href="#!" class="plus-effect"></a>
								</div>
								<div class="blog-content">
									<div class="blog-title mb-30">
										<h3>Barcelona Friday Food Truck Festival 26 May 2020</h3>
										<span>26 June 2020</span>
									</div>
									<p class="m-0">
										Xubisoft gives you everything you need to host your best event yet. lorem ipsum diamet.
									</p>
								</div>
							</div>
							<!-- latest-blog - end -->

						</div>
					</div>
					<!-- latest-blog-wrapper - end -->
					
				</div>
			</div>
		</section>
		<!---------------------- news-update-section - end --------------------------->

		<!---------------------- google map - start ---------------------------------->
		<section id="map-section" class="map-section clearfix">
			<div id="google-map">
				<div id="googleMaps" class="google-map-container">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.7852345483734!2d90.39817187533939!3d23.86175887859456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c432847eacf7%3A0xd02f082dce6d913!2sXUBISOFT%20LIMITED!5e0!3m2!1sen!2sbd!4v1717821544051!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</section>
		<!-------------------------- google map - end ------------------------>

		@endsection