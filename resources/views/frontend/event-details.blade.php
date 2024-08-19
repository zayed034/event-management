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
									<span class="sub-title">event single</span>
									<h2 class="big-title">Xubisoft <strong>event details</strong></h2>
								</div>
								<!-- breadcrumb-title - end -->

								<!-- breadcrumb-list - start -->
								<div class="breadcrumb-list">
									<ul>
										<li class="breadcrumb-item"><a href="index.html" class="breadcrumb-link">Home</a></li>
										<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Events</a></li>
										<li class="breadcrumb-item active" aria-current="page">Istanbul Wine Party 2018</li>
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





		<!-- event-details-section - start
		================================================== -->
		<section id="event-details-section" class="event-details-section sec-ptb-100 clearfix">
			<div class="container">
				<div class="row">

					<!-- col - event-details - start -->
					<div class="col-lg-8 col-md-12 col-sm-12">

						<!-- event-details - start -->
						<div class="event-details mb-80">

							<div class="event-title mb-30">
								<span class="tag-item">
									<i class="fas fa-bookmark"></i>
									Featured Event
								</span>
								<h2 class="event-title">Istanbul <strong>Wine Party 2018</strong></h2>
							</div>

							<div id="event-details-carousel" class="event-details-carousel owl-carousel owl-theme">
								<div class="item">
									<img src="{{ url('frontend/assets/images/event/event-details-1.jpg') }}" alt="Image_not_found">
								</div>
								<div class="item">
									<img src="{{ url('frontend/assets/images/event/event-details-2.jpg') }}" alt="Image_not_found">
								</div>
								<div class="item">
									<img src="{{ url('frontend/assets/images/event/event-details-3.jpg') }}" alt="Image_not_found">
								</div>
							</div>

							<div class="event-info-list ul-li clearfix mb-50">
								<ul>
									<li>
										<span class="icon">
											<i class="far fa-calendar"></i>
										</span>
										<div class="event-content">
											<small class="event-title">Event Date</small>
											<h3 class="event-date">26 december 2018</h3>
										</div>
									</li>
									<li>
										<span class="icon">
											<i class="far fa-clock"></i>
										</span>
										<div class="event-content">
											<small class="event-title">Event Time</small>
											<h3 class="event-date">15:00PM ~ 22:00PM</h3>
										</div>
									</li>
									<li>
										<span class="icon">
											<i class="fas fa-map-marker-alt"></i>
										</span>
										<div class="event-content">
											<small class="event-title">Event Location</small>
											<h3 class="event-date">vanila hotal</h3>
										</div>
									</li>
								</ul>
							</div>

							<p class="black-color mb-30">
								Lorem ipsum dollor site amet the best  consectuer diam adipiscing elites sed diam nonummy nibh the euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer adipiscing elit. Lorem ipsum dollor site amet the best  consectuer diam adipiscing elites sed diam nonummy nibh the euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer adipiscing elit. Lorem ipsum dollor site amet the best  consectuer diam adipiscing elites sed diam nonummy nibh the euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer adipiscing elit. 
							</p>

							<p class="black-color m-0">
								Lorem ipsum dollor site amet the best  consectuer diam adipiscing elites sed diam nonummy nibh the euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer adipiscing elit. 
							</p>

						</div>
						<!-- event-details - end -->

						<!-- event-schedule - start -->
						<div class="event-schedule mb-80">

							<div class="section-title text-left mb-30">
								<h2 class="big-title">event <strong>schedule</strong></h2>
							</div>

							<!-- schedule-wrapper - start -->
							<div class="schedule-wrapper">
								<ul class="nav schedule-date-menu">
									<li><a class="active" data-toggle="tab" href="#day1">Day 1 <small>26 December 2018</small></a></li>
									<li><a data-toggle="tab" href="#day2">Day 2 <small>26 December 2018</small></a></li>
									<li><a data-toggle="tab" href="#day3">Day 3 <small>26 December 2018</small></a></li>
								</ul>

								<div class="tab-content">
									<!-- day 1 - start -->
									<div id="day1" class="tab-pane fade in active show">
										<ul class="nav hotal-menu">
											<li><a data-toggle="tab" href="#day1hall1"><i class="fas fa-arrow-circle-right"></i> vanila hall 1</a></li>
											<li><a class="active" data-toggle="tab" href="#day1hall2"><i class="fas fa-arrow-circle-right"></i> vanila hall 2</a></li>
											<li><a data-toggle="tab" href="#day1hall3"><i class="fas fa-arrow-circle-right"></i> vanila hall 3</a></li>
											<li><a data-toggle="tab" href="#day1hall4"><i class="fas fa-arrow-circle-right"></i> vanila hall 4</a></li>
										</ul>
										<div class="tab-content">
											<div id="day1hall1" class="tab-pane fade">
												<div class="hall-item clearfix">
													<div class="hall-image">
														<img src="{{ url('frontend/assets/images/event/1.hall.png') }}" alt="Image_not_found">
													</div>
													<div class="hall-content">
														<h3 class="event-title title-large mb-15">01. Greeting <strong>Welcome</strong></h3>
														<p class="mb-30 black-color">
															Lorem ipsum dollor site amet the best  consectuer diam nerd adipiscing elites sed diam nonummy nibh the ebest uismod tincidunt ut laoreet dolore magna aliquam erat volutpat guild insignia the consectuer adipiscing elit. 
														</p>
														<div class="event-info-list ul-li clearfix">
															<ul>
																<li>
																	<span class="icon">
																		<i class="fas fa-microphone"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Speaker</small>
																		<h3 class="event-date">jenny juis</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="fas fa-ticket-alt"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Max Seats</small>
																		<h3 class="event-date">2,250 seats</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="far fa-clock"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Event Time</small>
																		<h3 class="event-date">15~16pm</h3>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>

											<div id="day1hall2" class="tab-pane fade in active show">
												<div class="hall-item clearfix">
													<div class="hall-image">
														<img src="{{ url('frontend/assets/images/event/1.hall.png') }}" alt="Image_not_found">
													</div>
													<div class="hall-content">
														<h3 class="event-title title-large mb-15">01. Greeting <strong>Welcome</strong></h3>
														<p class="mb-30 black-color">
															Lorem ipsum dollor site amet the best  consectuer diam nerd adipiscing elites sed diam nonummy nibh the ebest uismod tincidunt ut laoreet dolore magna aliquam erat volutpat guild insignia the consectuer adipiscing elit. 
														</p>
														<div class="event-info-list ul-li clearfix">
															<ul>
																<li>
																	<span class="icon">
																		<i class="fas fa-microphone"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Speaker</small>
																		<h3 class="event-date">jenny juis</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="fas fa-ticket-alt"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Max Seats</small>
																		<h3 class="event-date">2,250 seats</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="far fa-clock"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Event Time</small>
																		<h3 class="event-date">15~16pm</h3>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="hall-item clearfix">
													<div class="hall-image">
														<img src="{{ url('frontend/assets/images/event/2.hall.png') }}" alt="Image_not_found">
													</div>
													<div class="hall-content">
														<h3 class="event-title title-large mb-15">02. learn <strong>drink wine</strong></h3>
														<p class="mb-30 black-color">
															Lorem ipsum dollor site amet the best  consectuer diam nerd adipiscing elites sed diam nonummy nibh the ebest uismod tincidunt ut laoreet dolore magna aliquam erat volutpat guild insignia the consectuer adipiscing elit. 
														</p>
														<div class="event-info-list ul-li clearfix">
															<ul>
																<li>
																	<span class="icon">
																		<i class="fas fa-microphone"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Speaker</small>
																		<h3 class="event-date">jenny juis</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="fas fa-ticket-alt"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Max Seats</small>
																		<h3 class="event-date">2,250 seats</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="far fa-clock"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Event Time</small>
																		<h3 class="event-date">15~16pm</h3>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="hall-item clearfix">
													<div class="hall-image">
														<img src="{{ url('frontend/assets/images/event/1.hall.png') }}" alt="Image_not_found">
													</div>
													<div class="hall-content">
														<h3 class="event-title title-large mb-15">03. say <strong>goodbye</strong></h3>
														<p class="mb-30 black-color">
															Lorem ipsum dollor site amet the best  consectuer diam nerd adipiscing elites sed diam nonummy nibh the ebest uismod tincidunt ut laoreet dolore magna aliquam erat volutpat guild insignia the consectuer adipiscing elit. 
														</p>
														<div class="event-info-list ul-li clearfix">
															<ul>
																<li>
																	<span class="icon">
																		<i class="fas fa-microphone"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Speaker</small>
																		<h3 class="event-date">jenny juis</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="fas fa-ticket-alt"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Max Seats</small>
																		<h3 class="event-date">2,250 seats</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="far fa-clock"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Event Time</small>
																		<h3 class="event-date">15~16pm</h3>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>

											<div id="day1hall3" class="tab-pane fade">
												<div class="hall-item clearfix">
													<div class="hall-image">
														<img src="{{ url('frontend/assets/images/event/2.hall.png') }}" alt="Image_not_found">
													</div>
													<div class="hall-content">
														<h3 class="event-title title-large mb-15">01. learn <strong>drink wine</strong></h3>
														<p class="mb-30 black-color">
															Lorem ipsum dollor site amet the best  consectuer diam nerd adipiscing elites sed diam nonummy nibh the ebest uismod tincidunt ut laoreet dolore magna aliquam erat volutpat guild insignia the consectuer adipiscing elit. 
														</p>
														<div class="event-info-list ul-li clearfix">
															<ul>
																<li>
																	<span class="icon">
																		<i class="fas fa-microphone"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Speaker</small>
																		<h3 class="event-date">jenny juis</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="fas fa-ticket-alt"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Max Seats</small>
																		<h3 class="event-date">2,250 seats</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="far fa-clock"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Event Time</small>
																		<h3 class="event-date">15~16pm</h3>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>

											<div id="day1hall4" class="tab-pane fade">
												<div class="hall-item clearfix">
													<div class="hall-image">
														<img src="{{ url('frontend/assets/images/event/2.hall.png') }}" alt="Image_not_found">
													</div>
													<div class="hall-content">
														<h3 class="event-title title-large mb-15">01. learn <strong>drink wine</strong></h3>
														<p class="mb-30 black-color">
															Lorem ipsum dollor site amet the best  consectuer diam nerd adipiscing elites sed diam nonummy nibh the ebest uismod tincidunt ut laoreet dolore magna aliquam erat volutpat guild insignia the consectuer adipiscing elit. 
														</p>
														<div class="event-info-list ul-li clearfix">
															<ul>
																<li>
																	<span class="icon">
																		<i class="fas fa-microphone"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Speaker</small>
																		<h3 class="event-date">jenny juis</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="fas fa-ticket-alt"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Max Seats</small>
																		<h3 class="event-date">2,250 seats</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="far fa-clock"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Event Time</small>
																		<h3 class="event-date">15~16pm</h3>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="hall-item clearfix">
													<div class="hall-image">
														<img src="{{ url('frontend/assets/images/event/1.hall.png') }}" alt="Image_not_found">
													</div>
													<div class="hall-content">
														<h3 class="event-title title-large mb-15">02. say <strong>goodbye</strong></h3>
														<p class="mb-30 black-color">
															Lorem ipsum dollor site amet the best  consectuer diam nerd adipiscing elites sed diam nonummy nibh the ebest uismod tincidunt ut laoreet dolore magna aliquam erat volutpat guild insignia the consectuer adipiscing elit. 
														</p>
														<div class="event-info-list ul-li clearfix">
															<ul>
																<li>
																	<span class="icon">
																		<i class="fas fa-microphone"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Speaker</small>
																		<h3 class="event-date">jenny juis</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="fas fa-ticket-alt"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Max Seats</small>
																		<h3 class="event-date">2,250 seats</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="far fa-clock"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Event Time</small>
																		<h3 class="event-date">15~16pm</h3>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- day 1 - end -->

									<!-- day 2 - start -->
									<div id="day2" class="tab-pane fade">
										<ul class="nav hotal-menu">
											<li><a class="active" data-toggle="tab" href="#day2hall1"><i class="fas fa-arrow-circle-right"></i> vanila hall 1</a></li>
											<li><a data-toggle="tab" href="#day2hall2"><i class="fas fa-arrow-circle-right"></i> vanila hall 2</a></li>
											<li><a data-toggle="tab" href="#day2hall3"><i class="fas fa-arrow-circle-right"></i> vanila hall 3</a></li>
											<li><a data-toggle="tab" href="#day2hall4"><i class="fas fa-arrow-circle-right"></i> vanila hall 4</a></li>
										</ul>
										<div class="tab-content">
											<div id="day2hall1" class="tab-pane fade in active show">
												<div class="hall-item clearfix">
													<div class="hall-image">
														<img src="{{ url('frontend/assets/images/event/1.hall.png') }}" alt="Image_not_found">
													</div>
													<div class="hall-content">
														<h3 class="event-title title-large mb-15">01. Greeting <strong>Welcome</strong></h3>
														<p class="mb-30 black-color">
															Lorem ipsum dollor site amet the best  consectuer diam nerd adipiscing elites sed diam nonummy nibh the ebest uismod tincidunt ut laoreet dolore magna aliquam erat volutpat guild insignia the consectuer adipiscing elit. 
														</p>
														<div class="event-info-list ul-li clearfix">
															<ul>
																<li>
																	<span class="icon">
																		<i class="fas fa-microphone"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Speaker</small>
																		<h3 class="event-date">jenny juis</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="fas fa-ticket-alt"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Max Seats</small>
																		<h3 class="event-date">2,250 seats</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="far fa-clock"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Event Time</small>
																		<h3 class="event-date">15~16pm</h3>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>

											<div id="day2hall2" class="tab-pane fade">
												<div class="hall-item clearfix">
													<div class="hall-image">
														<img src="{{ url('frontend/assets/images/event/1.hall.png') }}" alt="Image_not_found">
													</div>
													<div class="hall-content">
														<h3 class="event-title title-large mb-15">01. Greeting <strong>Welcome</strong></h3>
														<p class="mb-30 black-color">
															Lorem ipsum dollor site amet the best  consectuer diam nerd adipiscing elites sed diam nonummy nibh the ebest uismod tincidunt ut laoreet dolore magna aliquam erat volutpat guild insignia the consectuer adipiscing elit. 
														</p>
														<div class="event-info-list ul-li clearfix">
															<ul>
																<li>
																	<span class="icon">
																		<i class="fas fa-microphone"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Speaker</small>
																		<h3 class="event-date">jenny juis</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="fas fa-ticket-alt"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Max Seats</small>
																		<h3 class="event-date">2,250 seats</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="far fa-clock"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Event Time</small>
																		<h3 class="event-date">15~16pm</h3>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="hall-item clearfix">
													<div class="hall-image">
														<img src="{{ url('frontend/assets/images/event/2.hall.png') }}" alt="Image_not_found">
													</div>
													<div class="hall-content">
														<h3 class="event-title title-large mb-15">02. learn <strong>drink wine</strong></h3>
														<p class="mb-30 black-color">
															Lorem ipsum dollor site amet the best  consectuer diam nerd adipiscing elites sed diam nonummy nibh the ebest uismod tincidunt ut laoreet dolore magna aliquam erat volutpat guild insignia the consectuer adipiscing elit. 
														</p>
														<div class="event-info-list ul-li clearfix">
															<ul>
																<li>
																	<span class="icon">
																		<i class="fas fa-microphone"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Speaker</small>
																		<h3 class="event-date">jenny juis</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="fas fa-ticket-alt"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Max Seats</small>
																		<h3 class="event-date">2,250 seats</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="far fa-clock"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Event Time</small>
																		<h3 class="event-date">15~16pm</h3>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="hall-item clearfix">
													<div class="hall-image">
														<img src="{{ url('frontend/assets/images/event/1.hall.png') }}" alt="Image_not_found">
													</div>
													<div class="hall-content">
														<h3 class="event-title title-large mb-15">03. say <strong>goodbye</strong></h3>
														<p class="mb-30 black-color">
															Lorem ipsum dollor site amet the best  consectuer diam nerd adipiscing elites sed diam nonummy nibh the ebest uismod tincidunt ut laoreet dolore magna aliquam erat volutpat guild insignia the consectuer adipiscing elit. 
														</p>
														<div class="event-info-list ul-li clearfix">
															<ul>
																<li>
																	<span class="icon">
																		<i class="fas fa-microphone"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Speaker</small>
																		<h3 class="event-date">jenny juis</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="fas fa-ticket-alt"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Max Seats</small>
																		<h3 class="event-date">2,250 seats</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="far fa-clock"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Event Time</small>
																		<h3 class="event-date">15~16pm</h3>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>

											<div id="day2hall3" class="tab-pane fade">
												<div class="hall-item clearfix">
													<div class="hall-image">
														<img src="{{ ('frontend/assets/images/event/2.hall.png') }}" alt="Image_not_found">
													</div>
													<div class="hall-content">
														<h3 class="event-title title-large mb-15">01. learn <strong>drink wine</strong></h3>
														<p class="mb-30 black-color">
															Lorem ipsum dollor site amet the best  consectuer diam nerd adipiscing elites sed diam nonummy nibh the ebest uismod tincidunt ut laoreet dolore magna aliquam erat volutpat guild insignia the consectuer adipiscing elit. 
														</p>
														<div class="event-info-list ul-li clearfix">
															<ul>
																<li>
																	<span class="icon">
																		<i class="fas fa-microphone"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Speaker</small>
																		<h3 class="event-date">jenny juis</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="fas fa-ticket-alt"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Max Seats</small>
																		<h3 class="event-date">2,250 seats</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="far fa-clock"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Event Time</small>
																		<h3 class="event-date">15~16pm</h3>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>

											<div id="day2hall4" class="tab-pane fade">
												<div class="hall-item clearfix">
													<div class="hall-image">
														<img src="{{ url('frontend/assets/images/event/2.hall.png') }}" alt="Image_not_found">
													</div>
													<div class="hall-content">
														<h3 class="event-title title-large mb-15">01. learn <strong>drink wine</strong></h3>
														<p class="mb-30 black-color">
															Lorem ipsum dollor site amet the best  consectuer diam nerd adipiscing elites sed diam nonummy nibh the ebest uismod tincidunt ut laoreet dolore magna aliquam erat volutpat guild insignia the consectuer adipiscing elit. 
														</p>
														<div class="event-info-list ul-li clearfix">
															<ul>
																<li>
																	<span class="icon">
																		<i class="fas fa-microphone"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Speaker</small>
																		<h3 class="event-date">jenny juis</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="fas fa-ticket-alt"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Max Seats</small>
																		<h3 class="event-date">2,250 seats</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="far fa-clock"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Event Time</small>
																		<h3 class="event-date">15~16pm</h3>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="hall-item clearfix">
													<div class="hall-image">
														<img src="{{ url('frontend/assets/images/event/1.hall.png') }}" alt="Image_not_found">
													</div>
													<div class="hall-content">
														<h3 class="event-title title-large mb-15">02. say <strong>goodbye</strong></h3>
														<p class="mb-30 black-color">
															Lorem ipsum dollor site amet the best  consectuer diam nerd adipiscing elites sed diam nonummy nibh the ebest uismod tincidunt ut laoreet dolore magna aliquam erat volutpat guild insignia the consectuer adipiscing elit. 
														</p>
														<div class="event-info-list ul-li clearfix">
															<ul>
																<li>
																	<span class="icon">
																		<i class="fas fa-microphone"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Speaker</small>
																		<h3 class="event-date">jenny juis</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="fas fa-ticket-alt"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Max Seats</small>
																		<h3 class="event-date">2,250 seats</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="far fa-clock"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Event Time</small>
																		<h3 class="event-date">15~16pm</h3>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- day 2 - end -->

									<!-- day 3 - start -->
									<div id="day3" class="tab-pane fade">
										<ul class="nav hotal-menu">
											<li><a data-toggle="tab" href="#day3hall1"><i class="fas fa-arrow-circle-right"></i> vanila hall 1</a></li>
											<li><a data-toggle="tab" href="#day3hall2"><i class="fas fa-arrow-circle-right"></i> vanila hall 2</a></li>
											<li><a class="active" data-toggle="tab" href="#day3hall3"><i class="fas fa-arrow-circle-right"></i> vanila hall 3</a></li>
											<li><a data-toggle="tab" href="#day3hall4"><i class="fas fa-arrow-circle-right"></i> vanila hall 4</a></li>
										</ul>
										<div class="tab-content">
											<div id="day3hall1" class="tab-pane fade">
												<div class="hall-item clearfix">
													<div class="hall-image">
														<img src="{{ url('frontend/assets/images/event/1.hall.png') }}" alt="Image_not_found">
													</div>
													<div class="hall-content">
														<h3 class="event-title title-large mb-15">01. Greeting <strong>Welcome</strong></h3>
														<p class="mb-30 black-color">
															Lorem ipsum dollor site amet the best  consectuer diam nerd adipiscing elites sed diam nonummy nibh the ebest uismod tincidunt ut laoreet dolore magna aliquam erat volutpat guild insignia the consectuer adipiscing elit. 
														</p>
														<div class="event-info-list ul-li clearfix">
															<ul>
																<li>
																	<span class="icon">
																		<i class="fas fa-microphone"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Speaker</small>
																		<h3 class="event-date">jenny juis</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="fas fa-ticket-alt"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Max Seats</small>
																		<h3 class="event-date">2,250 seats</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="far fa-clock"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Event Time</small>
																		<h3 class="event-date">15~16pm</h3>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>

											<div id="day3hall2" class="tab-pane fade in active show">
												<div class="hall-item clearfix">
													<div class="hall-image">
														<img src="{{ url('frontend/assets/images/event/1.hall.png') }}" alt="Image_not_found">
													</div>
													<div class="hall-content">
														<h3 class="event-title title-large mb-15">01. Greeting <strong>Welcome</strong></h3>
														<p class="mb-30 black-color">
															Lorem ipsum dollor site amet the best  consectuer diam nerd adipiscing elites sed diam nonummy nibh the ebest uismod tincidunt ut laoreet dolore magna aliquam erat volutpat guild insignia the consectuer adipiscing elit. 
														</p>
														<div class="event-info-list ul-li clearfix">
															<ul>
																<li>
																	<span class="icon">
																		<i class="fas fa-microphone"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Speaker</small>
																		<h3 class="event-date">jenny juis</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="fas fa-ticket-alt"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Max Seats</small>
																		<h3 class="event-date">2,250 seats</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="far fa-clock"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Event Time</small>
																		<h3 class="event-date">15~16pm</h3>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="hall-item clearfix">
													<div class="hall-image">
														<img src="{{ url('frontend/assets/images/event/2.hall.png') }}" alt="Image_not_found">
													</div>
													<div class="hall-content">
														<h3 class="event-title title-large mb-15">02. learn <strong>drink wine</strong></h3>
														<p class="mb-30 black-color">
															Lorem ipsum dollor site amet the best  consectuer diam nerd adipiscing elites sed diam nonummy nibh the ebest uismod tincidunt ut laoreet dolore magna aliquam erat volutpat guild insignia the consectuer adipiscing elit. 
														</p>
														<div class="event-info-list ul-li clearfix">
															<ul>
																<li>
																	<span class="icon">
																		<i class="fas fa-microphone"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Speaker</small>
																		<h3 class="event-date">jenny juis</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="fas fa-ticket-alt"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Max Seats</small>
																		<h3 class="event-date">2,250 seats</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="far fa-clock"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Event Time</small>
																		<h3 class="event-date">15~16pm</h3>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="hall-item clearfix">
													<div class="hall-image">
														<img src="{{ url('frontend/assets/images/event/1.hall.png') }}" alt="Image_not_found">
													</div>
													<div class="hall-content">
														<h3 class="event-title title-large mb-15">03. say <strong>goodbye</strong></h3>
														<p class="mb-30 black-color">
															Lorem ipsum dollor site amet the best  consectuer diam nerd adipiscing elites sed diam nonummy nibh the ebest uismod tincidunt ut laoreet dolore magna aliquam erat volutpat guild insignia the consectuer adipiscing elit. 
														</p>
														<div class="event-info-list ul-li clearfix">
															<ul>
																<li>
																	<span class="icon">
																		<i class="fas fa-microphone"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Speaker</small>
																		<h3 class="event-date">jenny juis</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="fas fa-ticket-alt"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Max Seats</small>
																		<h3 class="event-date">2,250 seats</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="far fa-clock"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Event Time</small>
																		<h3 class="event-date">15~16pm</h3>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>

											<div id="day3hall3" class="tab-pane fade">
												<div class="hall-item clearfix">
													<div class="hall-image">
														<img src="{{ url('frontend/assets/images/event/2.hall.png') }}" alt="Image_not_found">
													</div>
													<div class="hall-content">
														<h3 class="event-title title-large mb-15">01. learn <strong>drink wine</strong></h3>
														<p class="mb-30 black-color">
															Lorem ipsum dollor site amet the best  consectuer diam nerd adipiscing elites sed diam nonummy nibh the ebest uismod tincidunt ut laoreet dolore magna aliquam erat volutpat guild insignia the consectuer adipiscing elit. 
														</p>
														<div class="event-info-list ul-li clearfix">
															<ul>
																<li>
																	<span class="icon">
																		<i class="fas fa-microphone"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Speaker</small>
																		<h3 class="event-date">jenny juis</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="fas fa-ticket-alt"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Max Seats</small>
																		<h3 class="event-date">2,250 seats</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="far fa-clock"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Event Time</small>
																		<h3 class="event-date">15~16pm</h3>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>

											<div id="day3hall4" class="tab-pane fade">
												<div class="hall-item clearfix">
													<div class="hall-image">
														<img src="{{ url('frontend/assets/images/event/2.hall.png') }}" alt="Image_not_found">
													</div>
													<div class="hall-content">
														<h3 class="event-title title-large mb-15">01. learn <strong>drink wine</strong></h3>
														<p class="mb-30 black-color">
															Lorem ipsum dollor site amet the best  consectuer diam nerd adipiscing elites sed diam nonummy nibh the ebest uismod tincidunt ut laoreet dolore magna aliquam erat volutpat guild insignia the consectuer adipiscing elit. 
														</p>
														<div class="event-info-list ul-li clearfix">
															<ul>
																<li>
																	<span class="icon">
																		<i class="fas fa-microphone"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Speaker</small>
																		<h3 class="event-date">jenny juis</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="fas fa-ticket-alt"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Max Seats</small>
																		<h3 class="event-date">2,250 seats</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="far fa-clock"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Event Time</small>
																		<h3 class="event-date">15~16pm</h3>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="hall-item clearfix">
													<div class="hall-image">
														<img src="{{ url('frontend/assets/images/event/1.hall.png') }}" alt="Image_not_found">
													</div>
													<div class="hall-content">
														<h3 class="event-title title-large mb-15">02. say <strong>goodbye</strong></h3>
														<p class="mb-30 black-color">
															Lorem ipsum dollor site amet the best  consectuer diam nerd adipiscing elites sed diam nonummy nibh the ebest uismod tincidunt ut laoreet dolore magna aliquam erat volutpat guild insignia the consectuer adipiscing elit. 
														</p>
														<div class="event-info-list ul-li clearfix">
															<ul>
																<li>
																	<span class="icon">
																		<i class="fas fa-microphone"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Speaker</small>
																		<h3 class="event-date">jenny juis</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="fas fa-ticket-alt"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Max Seats</small>
																		<h3 class="event-date">2,250 seats</h3>
																	</div>
																</li>
																<li>
																	<span class="icon">
																		<i class="far fa-clock"></i>
																	</span>
																	<div class="event-content">
																		<small class="event-title">Event Time</small>
																		<h3 class="event-date">15~16pm</h3>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- day 3 - end -->
								</div>
							</div>
							<!-- schedule-wrapper - end -->

						</div>
						<!-- event-schedule - end -->

						<!-- event-pricing-plan - start -->
						
						<!-- event-pricing-plan - end -->

						<!-- register-wrapper - start -->
						<div class="register-wrapper mb-80 clearfix">

							<div class="section-title text-left mb-50">
								<span class="line-style"></span>
								<h2 class="big-title">register <strong>now</strong></h2>
							</div>

							<div class="register-table">
								<ul>
									<li class="rt-header">
										<div class="header-leftside-content">SUN, <strong>DEC 26, 2018,</strong> 15:00 PM – THU, <strong>DEC 28, 2018,</strong> 10:00 PM</div>
										<div class="header-rightside-content">Sales end on December 31</div>
									</li>
									<li class="rt-body">
										<div class="rt-body-item">
											<div class="leftside-content">
												<h3 class="ticket-title">Xubisoft Package 1</h3>
												<span class="ticket-price">$120.00 + FEE $5.00</span>
											</div>
											<div class="rightside-content">
												<div class="ticket-select">
													<select id="ticket-select1">
														<option selected>0 TICKET</option>
														<option value="1">1 TICKET</option>
														<option value="2">2 TICKET</option>
														<option value="3">3 TICKET</option>
													</select>
												</div>
											</div>
										</div>

										<div class="rt-body-item">
											<div class="leftside-content">
												<h3 class="ticket-title">Xubisoft Package 2</h3>
												<span class="ticket-price">$120.00 + FEE $5.00</span>
											</div>
											<div class="rightside-content">
												<div class="ticket-select">
													<select id="ticket-select2">
														<option selected>0 TICKET</option>
														<option value="1">1 TICKET</option>
														<option value="2">2 TICKET</option>
														<option value="3">3 TICKET</option>
													</select>
												</div>
											</div>
										</div>

										<div class="rt-body-item">
											<div class="leftside-content">
												<h3 class="ticket-title">Xubisoft Package 3</h3>
												<span class="ticket-price">$120.00 + FEE $5.00</span>
											</div>
											<div class="rightside-content">
												<div class="ticket-select">
													<select id="ticket-select3">
														<option selected>0 TICKET</option>
														<option value="1">1 TICKET</option>
														<option value="2">2 TICKET</option>
														<option value="3">3 TICKET</option>
													</select>
												</div>
											</div>
										</div>
									</li>
									<li class="rt-footer">
										<div class="footer-leftside-content">
											<span class="payment-card">
												<img src="{{ url('frontend/assets/images/payment-cards.png') }}" alt="payment_cards_not_found">
											</span>
											<span class="total-price">TOTAL PRICE :  $570.00</span>
										</div>
										<div class="footer-rightside-content">
											<a href="#!" class="custom-btn">order now</a>
										</div>
									</li>
								</ul>
							</div>

						</div>
						<!-- register-wrapper - end -->

						<!-- reviewer-comment-wrapper - start -->
						<div class="reviewer-comment-wrapper mb-30 clearfix">

							<div class="section-title text-left mb-50">
								<h2 class="big-title">Event <strong>reviews</strong></h2>
							</div>

							<div class="comment-bar clearfix">
								<div class="admin-image">
									<img src="{{ url('frontend/assets/images/admin.png') }}" alt="Image_not_found">
								</div>
								<div class="comment-content">
									<div class="admin-name mb-15">
										<div class="rateing-star ul-li clearfix">
											<ul>
												<li class="rated"><i class="fas fa-star"></i></li>
												<li class="rated"><i class="fas fa-star"></i></li>
												<li class="rated"><i class="fas fa-star"></i></li>
												<li class="rated"><i class="fas fa-star"></i></li>
												<li class="rated"><i class="fas fa-star"></i></li>
											</ul>
										</div>
										<div class="name">
											<a href="#!">john doe</a>
										</div>
									</div>
									<div class="comment-text">
										<p class="mb-30">
											Brilliant production.  Enjoyed this as it captured so many emotions and being Irish some bits resonated with Irish families, the craic, singing.  Fantastic acting and so many surprises.
										</p>

										<div class="meta-wrapper">
											<div class="btn-group-left float-left">
												<span class="title"><i class="fas fa-heart"></i> Helpful?</span>
												<ul>
													<li><button type="button">Yes</button></li>
													<li><button type="button">No</button></li>
												</ul>
											</div>
											<div class="btn-group-right float-right">
												<ul>
													<li><button type="button"><i class="fas fa-reply-all"></i> Replay</button></li>
													<li><button type="button"><i class="fas fa-share-square"></i> Share</button></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
						<!-- reviewer-comment-wrapper - end -->

						<div class="pagination ul-li clearfix mb-80">
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

						<!-- comment-form - start -->
						<div class="comment-form clearfix">

							<div class="section-title text-left mb-50">
								<h2 class="big-title">write a <strong>comment</strong></h2>

								<div class="rateing-star-wrapper">
									<span class="rating-title float-left">Your Rating:</span>
									<div class="rateing-star-form float-right">
										<form action="#">

											<div class="form-check clearfix">
												<input type="checkbox">
											</div>
											<div class="form-check clearfix">
												<input type="checkbox">
											</div>
											<div class="form-check clearfix">
												<input type="checkbox">
											</div>
											<div class="form-check clearfix">
												<input type="checkbox">
											</div>
											<div class="form-check clearfix">
												<input type="checkbox">
											</div>

										</form>
									</div>
								</div>

							</div>

							<div class="form-wrapper">
								<form action="contact.php">
									<div class="row">

										<!-- form-item - start -->
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="form-item mb-30">
												<input type="text" name="name" placeholder="Your Name" required>
											</div>
										</div>
										<!-- form-item - end -->

										<!-- form-item - start -->
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="form-item mb-30">
												<input type="email" name="email" placeholder="Your Email Address" required>
											</div>
										</div>
										<!-- form-item - end -->

										<!-- form-item - start -->
										<div class="col-lg-4 col-md-12 col-sm-12">
											<div class="form-item mb-30">
												<input type="tel" name="phone" placeholder="Your Phone" required>
											</div>
										</div>
										<!-- form-item - end -->

										<!-- form-item - start -->
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="mb-30">
												<textarea name="message" placeholder="Your Comment" required></textarea>
											</div>
											<button type="submit" class="custom-btn">SUBMIT NOW</button>
										</div>
										<!-- form-item - end -->

									</div>
								</form>
							</div>

						</div>
						<!-- comment-form - end -->

					</div>
					<!-- col - event-details - end -->

					<!-- sidebar-section - start -->
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="sidebar-section">

							<!-- Add to Calendar - start -->
							<div title="Add to Calendar" class="addeventatc">
								Add to Calendar
								<span class="start">06/18/2015 09:00 AM</span>
								<span class="end">06/18/2015 11:00 AM</span>
								<span class="timezone">Europe/Paris</span>
								<span class="title">Summary of the event</span>
								<span class="description">Description of the event</span>
								<span class="location">Location of the event</span>
								<span class="organizer">Organizer</span>
								<span class="organizer_email">Organizer e-mail</span>
								<span class="all_day_event">false</span>
								<span class="date_format">MM/DD/YYYY</span>
							</div>
							<!-- Add to Calendar - end -->

							<!-- map-wrapper - start -->
							<div class="map-wrapper mb-30">

								<!-- section-title - start -->
								<div class="section-title mb-30">
									<h2 class="big-title">event <strong>location</strong></h2>
								</div>
								<!-- section-title - end -->

								<div id="google-map">
									<div id="googleMaps" class="google-map-container"></div>
								</div>

							</div>
							<!-- map-wrapper - end -->

							<!-- location-wrapper - start -->
							<div class="location-wrapper mb-30">
								<div class="title-wrapper">
									<small class="up-arrow-icon">
										<i class="fas fa-chevron-circle-up"></i>
									</small>
									<span class="icon">
										<i class="fas fa-map-marker-alt"></i>
									</span>
									<div class="title-content">
										<small>event location</small>
										<h3>vanila hotel</h3>
									</div>
								</div>
								<div class="location-info-list ul-li-block clearfix">
									<span class="area-name">Istanbul Turkey</span>
									<ul>
										<li><i class="fas fa-arrow-circle-right"></i> Bayezid II Mosque and Beyazid Square</li>
										<li><i class="fas fa-arrow-circle-right"></i> Istanbul, IS 240012</li>
										<li><i class="fas fa-arrow-circle-right"></i> Thursday, December 26, 2018</li>
										<li><i class="fas fa-arrow-circle-right"></i> From <strong>15.00 PM</strong> to <strong>20.00 PM</strong> (EST)</li>
									</ul>
								</div>
								<div class="button">
									<a href="#!" class="custom-btn">ADD TO MY CALENDAR</a>
								</div>
								<div class="title-wrapper">
									<small class="up-arrow-icon">
										<i class="fas fa-chevron-circle-up"></i>
									</small>
									<span class="icon">
										<i class="fas fa-link"></i>
									</span>
									<div class="title-content">
										<small>contact information</small>
										<h3>Xubisoft staff</h3>
									</div>
								</div>
								<div class="contact-links ul-li-block clearfix">
									<p class="black-color mb-30">
										Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant. Proin gravida nibh vel velit auctor aliquet. sollicitudin, lorem quis more...
									</p>
									<ul>
										<li>
											<a href="#!" target="_blank">
												<span class="icon">
													<i class="fab fa-facebook-f"></i>
												</span>
												facebook.com/Xubisoft
											</a>
										</li>
										<li>
											<a href="#!" target="_blank">
												<span class="icon">
													<i class="fab fa-twitter"></i>
												</span>
												twitter.com@Xubisoft
											</a>
										</li>
										<li>
											<a href="#!" target="_blank">
												<span class="icon">
													<i class="fas fa-link"></i>
												</span>
												http://www.Xubisoft.com
											</a>
										</li>
									</ul>
									<a href="#!" class="custom-btn">CONTACT US NOW</a>
								</div>
							</div>
							<!-- location-wrapper - end -->

							<!-- faq-wrapper - start -->
							<div class="faq-wrapper mb-30">

								<!-- section-title - start -->
								<div class="section-title mb-30">
									<h2 class="big-title">event <strong>FAQ</strong></h2>
								</div>
								<!-- section-title - end -->

								<div id="faq-accordion" class="faq-accordion">
									<div class="card">
										<div class="card-header" id="headingone">
											<button class="btn btn-link" data-toggle="collapse" data-target="#collapseone" aria-expanded="true" aria-controls="collapseone">
												How to join this event?
											</button>
										</div>

										<div id="collapseone" class="collapse show" aria-labelledby="headingone" data-parent="#faq-accordion">
											<div class="card-body">
												Lorem ipsum dollor site amet the best  consectuer diam nerd adipiscing elites sed diam nonummy nibh the ebest uismod tincidunt ut laoreet dolore.
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="headingtwo">
											<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">
												How to make new event?
											</button>
										</div>
										<div id="collapsetwo" class="collapse" aria-labelledby="headingtwo" data-parent="#faq-accordion">
											<div class="card-body">
												Lorem ipsum dollor site amet the best  consectuer diam nerd adipiscing elites sed diam nonummy nibh the ebest uismod tincidunt ut laoreet dolore.
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="headingthree">
											<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
												Lorem ipsm dolor sit amet?
											</button>
										</div>
										<div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-parent="#faq-accordion">
											<div class="card-body">
												Lorem ipsum dollor site amet the best  consectuer diam nerd adipiscing elites sed diam nonummy nibh the ebest uismod tincidunt ut laoreet dolore.
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="headingfour">
											<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
												Consectuerer set diam?
											</button>
										</div>
										<div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#faq-accordion">
											<div class="card-body">
												Lorem ipsum dollor site amet the best  consectuer diam nerd adipiscing elites sed diam nonummy nibh the ebest uismod tincidunt ut laoreet dolore.
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="headingfive">
											<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
												Volutpat laoret nonummy?
											</button>
										</div>
										<div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#faq-accordion">
											<div class="card-body">
												Lorem ipsum dollor site amet the best  consectuer diam nerd adipiscing elites sed diam nonummy nibh the ebest uismod tincidunt ut laoreet dolore.
											</div>
										</div>
									</div>
								</div>
								
							</div>
							<!-- faq-wrapper - end -->

							<!-- spacial-event-wrapper - start -->
							<div class="spacial-event-wrapper text-center" style="background-image: url({{ url('frontend/assets/images/spacial-event-bg.jpg') }});">
								<div class="overlay-black">
									<p class="sub-title white-color mb-30">26 DECEMBER 2018</p>
									<h2 class="title-large white-color mb-30">
										AMSTERDAM
										<strong class="yellow-color">PHP CONFERENCE</strong>
									</h2>
									<a href="#!" class="custom-btn">booking ticket</a>
								</div>
							</div>
							<!-- spacial-event-wrapper - end -->
							
						</div>
					</div>
					<!-- sidebar-section - end -->
					
				</div>
			</div>
		</section>
		<!-- event-details-section - end
		================================================== -->


		@endsection