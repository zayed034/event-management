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
										<span class="sub-title">blog single</span>
										<h2 class="big-title">Xubisoft <strong>blog details</strong></h2>
									</div>
									<!-- breadcrumb-title - end -->

									<!-- breadcrumb-list - start -->
									<div class="breadcrumb-list">
										<ul>
											<li class="breadcrumb-item"><a href="index.html" class="breadcrumb-link">Home</a></li>
											<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">blogs</a></li>
											<li class="breadcrumb-item active" aria-current="page">blog details</li>
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
												<small class="event-title">Date</small>
												<h3 class="event-date">26 december 2018</h3>
											</div>
										</li>

										<li>
											<span class="icon">
												<i class="fas fa-tags"></i>
											</span>
											<div class="event-content">
												<small class="event-title">Category</small>
												<h3 class="event-date">vanila hotal</h3>
											</div>
										</li>
									</ul>
								</div>

								<p class="black-color mb-30">
									Lorem ipsum dollor site amet the best  consectuer diam adipiscing elites sed diam nonummy nibh the euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer adipiscing elit. Lorem ipsum dollor site amet the best  consectuer diam adipiscing elites sed diam nonummy nibh the euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer adipiscing elit. Lorem ipsum dollor site amet the best  consectuer diam adipiscing elites sed diam nonummy nibh the euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer adipiscing elit. 
								</p>


								<h3>Lorem ipsum dolor sit amet, Quas, facere.</h3>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil tenetur eveniet esse deserunt officiis itaque fugit velit accusantium praesentium! Pariatur tempore recusandae consequatur odio odit corrupti aliquam neque modi molestias. Porro nulla, sequi illo ipsum ducimus soluta nemo numquam vitae a rem labore earum inventore possimus voluptas commodi doloremque, voluptatum. 
								</p>

								<p class="black-color mb-30">
									Lorem ipsum dollor site amet the best  consectuer diam adipiscing elites sed diam nonummy nibh the euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer adipiscing elit. Lorem ipsum dollor site amet the best  consectuer diam adipiscing elites sed diam nonummy nibh the euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer adipiscing elit. Lorem ipsum dollor site amet the best  consectuer diam adipiscing elites sed diam nonummy nibh the euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer adipiscing elit. 
								</p>
								<h4>Lorem ipsum dolor sit--</h4>
								<ul>
									<li><a href="">Lorem ipsum dolor sit amet.</a></li>
									<li><a href="">Consequatur voluptatem soluta accusamus ab.</a></li>
									<li><a href="">Eius distinctio ratione sit dignissimos!</a></li>
									<li><a href="">Maxime, aliquam, unde! Suscipit, libero.</a></li>
									<li><a href="">Ipsam nostrum repellendus nihil molestiae.</a></li>
								</ul>


								<p class="black-color m-0">
									Lorem ipsum dollor site amet the best  consectuer diam adipiscing elites sed diam nonummy nibh the euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer adipiscing elit. 
								</p>

							</div>
							<!-- event-details - end -->


							<!-- reviewer-comment-wrapper - start -->
							<div class="reviewer-comment-wrapper mb-30 clearfix">

								<div class="section-title text-left mb-50">
									<h2 class="big-title">Blog <strong>comments</strong></h2>
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


								<!-- faq-wrapper - start -->
								<div class="faq-wrapper mb-30">

									<!-- section-title - start -->
									<div class="section-title mb-30">
										<h2 class="big-title">Recent <strong>Post</strong></h2>
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
												<a href="#!" class="tickets-details-btn float-right">
													Read More
												</a>
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
												<a href="#!" class="tickets-details-btn float-right">
													Read More
												</a>
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
												<a href="#!" class="tickets-details-btn float-right">
													Read More
												</a>
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
												<a href="#!" class="tickets-details-btn float-right">
													Read More
												</a>
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
												<a href="#!" class="tickets-details-btn float-right">
													Read More
												</a>
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



