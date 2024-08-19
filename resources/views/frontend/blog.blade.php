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
										<span class="sub-title">our blogs</span>
										<h2 class="big-title">Xubisoft <strong>latest blogs</strong></h2>
									</div>
									<!-- breadcrumb-title - end -->

									<!-- breadcrumb-list - start -->
									<div class="breadcrumb-list">
										<ul>
											<li class="breadcrumb-item"><a href="index.html" class="breadcrumb-link">Home</a></li>
											<li class="breadcrumb-item active" aria-current="page">our blogs</li>
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





		<!-- blog-section - start
			================================================== -->
			<section id="blog-section" class="blog-section sec-ptb-100 clearfix">
				<div class="container">
					<div class="row">

						<div class="col-lg-8 col-md-12 col-sm-12">
							<!-- blog-wrapper - start -->
							<div class="blog-wrapper">
								<div class="layout-btn-group">
									<!-- <h3 class="float-left">change layout</h3> -->
									<ul class="nav blog-layout-menubar float-right">
										<li>
											<a class="active" data-toggle="tab" href="#grid-layout"><i class="fas fa-th"></i></a>
										</li>
										<li>
											<a data-toggle="tab" href="#list-layout"><i class="fas fa-th-list"></i></a>
										</li>
										<li>
											<a data-toggle="tab" href="#big-layout"><i class="fas fa-square"></i></a>
										</li>
									</ul>
								</div>

								<div class="tab-content">
									<!-- grid-layout - start -->
									<div id="grid-layout" class="tab-pane fade in active show">
										<div class="row">

											<!-- blog-grid-item - start -->
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="blog-grid-item">

													<div class="event-date">
														26 may 2018 - 4.00 PM
													</div>

													<div class="blog-image">
														<img src="{{ url('frontend/assets/images/blog/musical-event1.jpg') }}" alt="Image_not_found">
														<a href="#!" class="plus-effect"></a>
													</div>

													<div class="blog-content">
														<a href="#!" class="tag">
															<i class="fas fa-bookmark"></i>
															musical event
														</a>
														<h4 class="blog-title">biggest musical event</h4>
														<p class="mb-15">
															Lorem Ipsum is simply dummy text of the printing and typesetting industry.
														</p>
														<a href="#!" class="tickets-details-btn">
															Read More
														</a>
													</div>

												</div>
											</div>
											<!-- blog-grid-item - end -->

											<!-- blog-grid-item - start -->
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="blog-grid-item">

													<div class="event-date">
														26 may 2018 - 4.00 PM
													</div>

													<div class="blog-image">
														<img src="{{ url('frontend/assets/images/blog/confarence-event2.jpg') }}" alt="Image_not_found">
														<a href="#!" class="plus-effect"></a>
													</div>

													<div class="blog-content">
														<a href="#!" class="tag">
															<i class="fas fa-bookmark"></i>
															conference event
														</a>
														<h4 class="blog-title">designers conference event</h4>
														<p class="mb-15">
															Lorem Ipsum is simply dummy text of the printing and typesetting industry.
														</p>
														<a href="#!" class="tickets-details-btn">
															Read More
														</a>
													</div>

												</div>
											</div>
											<!-- blog-grid-item - end -->

											<!-- blog-grid-item - start -->
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="blog-grid-item">

													<div class="event-date">
														26 may 2018 - 4.00 PM
													</div>

													<div class="blog-image">
														<img src="{{ url('frontend/assets/images/blog/confarence-event1.jpg') }}" alt="Image_not_found">
														<a href="#!" class="plus-effect"></a>
													</div>

													<div class="blog-content">
														<a href="#!" class="tag">
															<i class="fas fa-bookmark"></i>
															conference event
														</a>
														<h4 class="blog-title">developer conference event</h4>
														<p class="mb-15">
															Lorem Ipsum is simply dummy text of the printing and typesetting industry.
														</p>
														<a href="#!" class="tickets-details-btn">
															Read More
														</a>
													</div>

												</div>
											</div>
											<!-- blog-grid-item - end -->

											<!-- blog-grid-item - start -->
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="blog-grid-item">

													<div class="event-date">
														26 may 2018 - 4.00 PM
													</div>

													<div class="blog-image">
														<img src="{{ url('frontend/assets/images/blog/big-ebent1.jpg') }}" alt="Image_not_found">
														<a href="#!" class="plus-effect"></a>
													</div>

													<div class="blog-content">
														<a href="#!" class="tag">
															<i class="fas fa-bookmark"></i>
															special event
														</a>
														<h4 class="blog-title">hermoni personal event</h4>
														<p class="mb-15">
															Lorem Ipsum is simply dummy text of the printing and typesetting industry.
														</p>
														<a href="#!" class="tickets-details-btn">
															Read More
														</a>
													</div>

												</div>
											</div>
											<!-- blog-grid-item - end -->

											<!-- blog-grid-item - start -->
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="blog-grid-item">

													<div class="event-date">
														26 may 2018 - 4.00 PM
													</div>

													<div class="blog-image">
														<img src="{{ url('frontend/assets/images/blog/big-ebent2.jpg') }}" alt="Image_not_found">
														<a href="#!" class="plus-effect"></a>
													</div>

													<div class="blog-content">
														<a href="#!" class="tag">
															<i class="fas fa-bookmark"></i>
															special event
														</a>
														<h4 class="blog-title">hermoni personal event</h4>
														<p class="mb-15">
															Lorem Ipsum is simply dummy text of the printing and typesetting industry.
														</p>
														<a href="#!" class="tickets-details-btn">
															Read More
														</a>
													</div>

												</div>
											</div>
											<!-- blog-grid-item - end -->

											<!-- blog-grid-item - start -->
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="blog-grid-item without-image">

													<div class="event-date">
														26 may 2018 - 4.00 PM
													</div>

													<div class="blog-content">
														<a href="#!" class="tag">
															<i class="fas fa-bookmark"></i>
															musical event
														</a>
														<h4 class="blog-title">biggest musical event</h4>
														<p class="mb-15">
															Lorem Ipsum is simply dummy text of the printing and typesetting industry.
														</p>
														<a href="#!" class="tickets-details-btn">
															Read More
														</a>
													</div>

												</div>
											</div>
											<!-- blog-grid-item - end -->

											<!-- pagination - start -->
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="pagination ul-li clearfix">
													<ul>
														<li class="page-item prev-item">
															<a class="page-link" href="#!">Prev</a>
														</li>
														<li class="page-item"><a class="page-link" href="#!">01</a></li>
														<li class="page-item active"><a class="page-link" href="#!">02</a></li>
														<li class="page-item"><a class="page-link" href="#!">03</a></li>
														<li class="page-item"><a class="page-link" href="#!">04</a></li>
														<li class="page-item"><a class="page-link" href="#!">05</a></li>
														<li class="page-item next-item">
															<a class="page-link" href="#!">Next</a>
														</li>
													</ul>
												</div>
											</div>
											<!-- pagination - end -->

										</div>
									</div>
									<!-- grid-layout - end -->

									<!-- list-layout - start -->
									<div id="list-layout" class="tab-pane fade">

										<!-- blog-list-item - start -->
										<div class="blog-list-item clearfix">

											<div class="blog-image float-left">
												<img src="{{ url('frontend/assets/images/blog/musical-event1.jpg') }}" alt="Image_not_found">
												<a href="#!" class="plus-effect"></a>
												<div class="event-date">
													26 may 2018 - 4.00 PM
												</div>
											</div>

											<div class="blog-content float-right">
												<a href="#!" class="tag">
													<i class="fas fa-bookmark"></i>
													musical event
												</a>
												<h4 class="blog-title">biggest musical event</h4>
												<p class="mb-15">
													Lorem Ipsum is simply dummy text of the printing and typesetting industry.
												</p>
												<a href="#!" class="tickets-details-btn">
													Read More
												</a>
											</div>

										</div>
										<!-- blog-list-item - end -->

										<!-- blog-list-item - start -->
										<div class="blog-list-item clearfix">

											<div class="blog-image float-right">
												<img src="{{ url('frontend/assets/images/blog/confarence-event2.jpg') }}" alt="Image_not_found">
												<a href="#!" class="plus-effect"></a>
												<div class="event-date">
													26 may 2018 - 4.00 PM
												</div>
											</div>

											<div class="blog-content text-right float-left">
												<a href="#!" class="tag">
													<i class="fas fa-bookmark"></i>
													conference event
												</a>
												<h4 class="blog-title">designers conference event</h4>
												<p class="mb-15">
													Lorem Ipsum is simply dummy text of the printing and typesetting industry.
												</p>
												<a href="#!" class="tickets-details-btn">
													Read More
												</a>
											</div>

										</div>
										<!-- blog-list-item - end -->

										<!-- blog-list-item - start -->
										<div class="blog-list-item clearfix">

											<div class="blog-image float-left">
												<img src="{{ url('frontend/assets/images/blog/confarence-event1.jpg') }}" alt="Image_not_found">
												<a href="#!" class="plus-effect"></a>
												<div class="event-date">
													26 may 2018 - 4.00 PM
												</div>
											</div>

											<div class="blog-content float-right">
												<a href="#!" class="tag">
													<i class="fas fa-bookmark"></i>
													conference event
												</a>
												<h4 class="blog-title">developer conference event</h4>
												<p class="mb-15">
													Lorem Ipsum is simply dummy text of the printing and typesetting industry.
												</p>
												<a href="#!" class="tickets-details-btn">
													Read More
												</a>
											</div>

										</div>
										<!-- blog-list-item - end -->

										<!-- blog-list-item - start -->
										<div class="blog-list-item clearfix">

											<div class="blog-image float-right">
												<img src="{{ url('frontend/assets/images/blog/big-ebent1.jpg') }}" alt="Image_not_found">
												<a href="#!" class="plus-effect"></a>
												<div class="event-date">
													26 may 2018 - 4.00 PM
												</div>
											</div>

											<div class="blog-content text-right float-left">
												<a href="#!" class="tag">
													<i class="fas fa-bookmark"></i>
													special event
												</a>
												<h4 class="blog-title">hermoni personal event</h4>
												<p class="mb-15">
													Lorem Ipsum is simply dummy text of the printing and typesetting industry.
												</p>
												<a href="#!" class="tickets-details-btn">
													Read More
												</a>
											</div>

										</div>
										<!-- blog-list-item - end -->

										<!-- blog-list-item - start -->
										<div class="blog-list-item clearfix">

											<div class="blog-image float-left">
												<img src="{{ url('frontend/assets/images/blog/big-ebent2.jpg') }}" alt="Image_not_found">
												<a href="#!" class="plus-effect"></a>
												<div class="event-date">
													26 may 2018 - 4.00 PM
												</div>
											</div>

											<div class="blog-content float-right">
												<a href="#!" class="tag">
													<i class="fas fa-bookmark"></i>
													special event
												</a>
												<h4 class="blog-title">hermoni personal event</h4>
												<p class="mb-15">
													Lorem Ipsum is simply dummy text of the printing and typesetting industry.
												</p>
												<a href="#!" class="tickets-details-btn">
													Read More
												</a>
											</div>

										</div>
										<!-- blog-list-item - end -->

										<!-- pagination - start -->
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="pagination ul-li clearfix">
												<ul>
													<li class="page-item prev-item">
														<a class="page-link" href="#!">Prev</a>
													</li>
													<li class="page-item"><a class="page-link" href="#!">01</a></li>
													<li class="page-item active"><a class="page-link" href="#!">02</a></li>
													<li class="page-item"><a class="page-link" href="#!">03</a></li>
													<li class="page-item"><a class="page-link" href="#!">04</a></li>
													<li class="page-item"><a class="page-link" href="#!">05</a></li>
													<li class="page-item next-item">
														<a class="page-link" href="#!">Next</a>
													</li>
												</ul>
											</div>
										</div>
										<!-- pagination - end -->

									</div>
									<!-- list-layout - end -->

									<!-- big-layout - start -->
									<div id="big-layout" class="tab-pane fade">

										<!-- blog-big-item - start -->
										<div class="blog-big-item clearfix">

											<div class="blog-image">
												<img src="{{ url('frontend/assets/images/blog/musical-event1.jpg') }}" alt="Image_not_found">
												<a href="#!" class="plus-effect"></a>
												<div class="event-date">
													26 may 2018 - 4.00 PM
												</div>
											</div>

											<div class="blog-content">
												<a href="#!" class="tag">
													<i class="fas fa-bookmark"></i>
													musical event
												</a>
												<h4 class="blog-title">biggest musical event</h4>
												<p class="mb-15">
													Lorem Ipsum is simply dummy text of the printing and typesetting industry.
												</p>
												<a href="#!" class="tickets-details-btn">
													Read More
												</a>
											</div>

										</div>
										<!-- blog-big-item - end -->

										<!-- blog-big-item - start -->
										<div class="blog-big-item clearfix">

											<div class="blog-image">
												<img src="{{ url('frontend/assets/images/blog/confarence-event2.jpg') }}" alt="Image_not_found">
												<a href="#!" class="plus-effect"></a>
												<div class="event-date">
													26 may 2018 - 4.00 PM
												</div>
											</div>

											<div class="blog-content">
												<a href="#!" class="tag">
													<i class="fas fa-bookmark"></i>
													conference event
												</a>
												<h4 class="blog-title">designers conference event</h4>
												<p class="mb-15">
													Lorem Ipsum is simply dummy text of the printing and typesetting industry.
												</p>
												<a href="#!" class="tickets-details-btn">
													Read More
												</a>
											</div>

										</div>
										<!-- blog-big-item - end -->

										<!-- blog-big-item - start -->
										<div class="blog-big-item clearfix">

											<div class="blog-image">
												<img src="{{ url('frontend/assets/images/blog/confarence-event1.jpg') }}" alt="Image_not_found">
												<a href="#!" class="plus-effect"></a>
												<div class="event-date">
													26 may 2018 - 4.00 PM
												</div>
											</div>

											<div class="blog-content">
												<a href="#!" class="tag">
													<i class="fas fa-bookmark"></i>
													conference event
												</a>
												<h4 class="blog-title">developer conference event</h4>
												<p class="mb-15">
													Lorem Ipsum is simply dummy text of the printing and typesetting industry.
												</p>
												<a href="#!" class="tickets-details-btn">
													Read More
												</a>
											</div>

										</div>
										<!-- blog-big-item - end -->

										<!-- blog-big-item - start -->
										<div class="blog-big-item clearfix">

											<div class="blog-image">
												<img src="{{ url('frontend/assets/images/blog/big-ebent1.jpg') }}" alt="Image_not_found">
												<a href="#!" class="plus-effect"></a>
												<div class="event-date">
													26 may 2018 - 4.00 PM
												</div>
											</div>

											<div class="blog-content">
												<a href="#!" class="tag">
													<i class="fas fa-bookmark"></i>
													special event
												</a>
												<h4 class="blog-title">hermoni personal event</h4>
												<p class="mb-15">
													Lorem Ipsum is simply dummy text of the printing and typesetting industry.
												</p>
												<a href="#!" class="tickets-details-btn">
													Read More
												</a>
											</div>

										</div>
										<!-- blog-big-item - end -->

										<!-- blog-big-item - start -->
										<div class="blog-big-item clearfix">

											<div class="blog-image">
												<img src="{{ url('frontend/assets/images/blog/big-ebent2.jpg') }}" alt="Image_not_found">
												<a href="#!" class="plus-effect"></a>
												<div class="event-date">
													26 may 2018 - 4.00 PM
												</div>
											</div>

											<div class="blog-content">
												<a href="#!" class="tag">
													<i class="fas fa-bookmark"></i>
													special event
												</a>
												<h4 class="blog-title">hermoni personal event</h4>
												<p class="mb-15">
													Lorem Ipsum is simply dummy text of the printing and typesetting industry.
												</p>
												<a href="#!" class="tickets-details-btn">
													Read More
												</a>
											</div>

										</div>
										<!-- blog-big-item - end -->

										<!-- pagination - start -->
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="pagination ul-li clearfix">
												<ul>
													<li class="page-item prev-item">
														<a class="page-link" href="#!">Prev</a>
													</li>
													<li class="page-item"><a class="page-link" href="#!">01</a></li>
													<li class="page-item active"><a class="page-link" href="#!">02</a></li>
													<li class="page-item"><a class="page-link" href="#!">03</a></li>
													<li class="page-item"><a class="page-link" href="#!">04</a></li>
													<li class="page-item"><a class="page-link" href="#!">05</a></li>
													<li class="page-item next-item">
														<a class="page-link" href="#!">Next</a>
													</li>
												</ul>
											</div>
										</div>
										<!-- pagination - end -->
									</div>
									<!-- big-layout - end -->

								</div>
							</div>
							<!-- blog-wrapper - end -->
						</div>

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
		<!-- blog-section - end
			================================================== -->

			@endsection