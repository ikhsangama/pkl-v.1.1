@extends('layouts.app')

@section('content')
<body>
	<div class="container-full">
		<div class="section1-background">
			<div class="container">
				<!-- Section 1 -->
				<!-- Header (TRAVEL STYLES) -->
				<div class="row">
					<div class="col-md-offset-5 col-sm-offset-7 col-xs-offset-7 col-md-8 col-sm-8 col-xs-8">
						<p class="section1-header"><b>TRAVEL STYLES</b></p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-offset-5 col-md-7 col-sm-7 col-xs-7">
						<p class="section1-subheader1">THE RIGHT TOUR FOR THE</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-offset-5 col-md-7 col-sm-7 col-xs-7">
						<p class="section1-subheader2">RIGHT <b>TRAVELLER</b></p>
					</div>
				</div>
				
				<!-- Search Filtering -->
				<div class="row">
					<div class="form-group">
						<div class="col-md-offset-3 col-sm-offset-3 col-xs-offset-3 col-md-7 col-sm-7 col-xs-7 select-position">
							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-4">
									<select class="form-control a" id="adventure">
										<option value="A0" selected disabled>Select Adventure</option>
										@foreach($query as $result)
										<option value="{{$result->id_adv}}">
										<?php
											echo $result->nama_adv
										?></option>
										@endforeach
									</select>
								</div>
								<div class="col-md-5 col-sm-5 col-xs-5">
									<select class="form-control a" id="destination">
										<option value="D0" selected disabled>Select Your Destination</option>

										@foreach($query1 as $result)
										<option value="{{$result->lokasi_ID}}">
										<?php
											echo $result->lokasi_nama
										?></option>
										@endforeach
									</select>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3">
									<div class="input-group">
										<input type="date" class="form-control datepick" placeholder="Select Date" required  id="tanggal">
										<span class="input-group-addon pilihtanggal bg-primary b-0 text-white"><i class="ti-calendar"></i>
										</span>
									</div><!-- input-group -->
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Search Button -->
				<div class="row">
						<div class="col-md-offset-7 col-sm-offset-7 col-xs-offset-7 col-md-3 col-sm-3 col-xs-3">
						<button class="search-button" role="button" id="search-button">SEARCH</button>
						<!-- <input type="submit" class="search-button" value="SEARCH"> -->
						</div>
				</div>
			</div>
		</div>
		
		<!-- Section 2 -->
		<div class="section2-background">
			<div class="container">
				<!-- Browse by Adventures (Active Tab) -->
				<div class="row">
					<div class="col-md-offset-3 col-sm-offset-3 col-xs-offset-3 col-md-7 col-sm-7 col-xs-7">
						<p class="section2-header">BROWSE BY <b>ADVENTURES</b></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-offset-3 col-sm-offset-3 col-xs-offset-3 col-md-7 col-sm-7 col-xs-7">
						<!-- Icon -->
					</div>
				</div>
				
				<!-- Description-->
				<div class="row">
					<div class="col-md-offset-1 col-sm-offset-1 col-xs-offset-1 col-md-10 col-sm-10 col-xs-10">
						<p class="section2-description">
							Everyone loves to travel, but not everyone loves to travel the same way. NEKANEKA Adventures Travel Styles gather trips of a feather<br />
							together so you can spend less time searching and more time dreaming about where you'll go next.
						</p>
					</div>
				</div>
					
				<!-- Active Tab -->
				<div class="row">
					<ul class="nav nav-tabs activetab-position1">
						<div class="col-md-2 col-sm-2 col-xs-2">
							<li role="presentation" class="active">
								<a href="#">
									<svg height="160" width="160">
										<polygon points="0 0,160 0,160 160,80 150, 0 160" style="fill:transparent;stroke:#1c1c1c;stroke-width:1">
											<div class="bba bbabike">
												<i class="zmdi zmdi-bike"></i>
												<p class="bbacycling">CYCLING</p>
											</div>
										</polygon>											
									</svg>
								</a>
							</li>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-2">
							<li role="presentation" class="active">
								<a href="#">
									<svg height="160" width="160">
										<polygon points="0 0,160 0,160 160,80 150, 0 160" style="fill:transparent;stroke:#1c1c1c;stroke-width:1">
											<div class="bba bbafam">
												<i class="zmdi zmdi-male-female"></i>
												<p class="bbafamily">FAMILY</p>
											</div>
										</polygon>
									</svg>
								</a>
							</li>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-2">
							<li role="presentation" class="active">
								<a href="#">
									<svg height="160" width="160">
										<polygon points="0 0,160 0,160 160,80 150, 0 160" style="fill:transparent;stroke:#1c1c1c;stroke-width:1">
											<div class="bba bbahike">
												<i class="zmdi zmdi-walk"></i>
												<p class="bbahiking">HIKING</p>
											</div>
										</polygon>		
									</svg>
								</a>
							</li>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-2">
							<li role="presentation" class="active">
								<a href="#">
									<svg height="160" width="160">
										<polygon points="0 0,160 0,160 160,80 150, 0 160" style="fill:transparent;stroke:#1c1c1c;stroke-width:1">
											<div class="bba bbasail">
												<i class="zmdi zmdi-boat"></i>
												<p class="bbasailing">SAILING</p>
											</div>
										</polygon>		
									</svg>
								</a>
							</li>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-2">
							<li role="presentation" class="active">
								<a href="#">
									<svg height="160" width="160">
										<polygon points="0 0,160 0,160 160,80 150, 0 160" style="fill:transparent;stroke:#1c1c1c;stroke-width:1">
											<div class="bba bbapol">
												<i class="zmdi zmdi-compass"></i>
												<p class="bbapolar">POLAR</p>
											</div>
										</polygon>		
									</svg>
								</a>
							</li>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-2">
							<li role="presentation" class="active">
								<a href="#">
									<svg height="160" width="160">
										<polygon points="0 0,160 0,160 160,80 150, 0 160" style="fill:transparent;stroke:#1c1c1c;stroke-width:1">
											<div class="bba bbawild">
												<i class="zmdi zmdi-evernote"></i>
												<p class="bbawildlife">WILDLIFE</p>
											</div>
										</polygon>		
									</svg>
								</a>
							</li>
						</div>
					</ul>
				</div>
					
				<!-- Active Tab Content -->
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-3">
								<a href="#">
									<div class="active-tab1" role="button" data-toggle="button">
										<div class="active-trapezium1"></div>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3">
								<a href="#">
									<div class="active-tab2" role="button" data-toggle="button">
										<div class="active-trapezium2"></div>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3">
								<a href="#">
									<div class="active-tab1" role="button" data-toggle="button">
										<div class="active-trapezium1"></div>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3">
								<a href="#">
									<div class="active-tab2" role="button" data-toggle="button">
										<div class="active-trapezium2"></div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-3">
								<a href="#">
									<div class="active-tab3" role="button" data-toggle="button">
										<div class="active-trapezium3"></div>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3">
								<a href="#">
									<div class="active-tab4" role="button" data-toggle="button">
										<div class="active-trapezium4"></div>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3">
								<a href="#">
									<div class="active-tab3" role="button" data-toggle="button">
										<div class="active-trapezium3"></div>
									</div>
								</a>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3">
								<a href="#">
									<div class="active-tab4" role="button" data-toggle="button">
										<div class="active-trapezium4"></div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
				
		
		<div class="section3-background">
			<div class="container">
				<!-- Section 3 -->
				<!-- Some Fun Info -->
				<div class="row">
					<div class="col-md-offset-3 col-sm-offset-3 col-xs-offset-3 col-md-7 col-sm-7 col-xs-7">
						<p class="section3-header">SOME <b>FUN INFO</b></p>
					</div>
				</div>
				
				<!-- Icon -->
				<div class="row">
					<div class="col-md-offset-3 col-sm-offset-3 col-xs-offset-3 col-md-7 col-sm-7 col-xs-7">
						<!-- Icon -->
					</div>
				</div>
				
				<!-- Pentagon Description -->
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="activetab-position2">
							<div class="col-md-2 col-sm-2 col-xs-2">
								<svg height="160" width="160">
									<polygon points="0 0,160 0,160 160,80 150, 0 160" style="fill:rgb(0,0,0);fill-opacity:0.7;stroke:#1c1c1c;stroke-width:1; ">
										<div class="somefun-pic spbike">
											<i class="zmdi zmdi-bike"></i>
											<p class="sfdistance">480 M</p>
											<p class="sfcat">CYCLING TRACK</p>
										</div>
									</polygon>
								</svg>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-2">
								<svg height="160" width="160">
									<polygon points="0 0,160 0,160 160,80 150, 0 160" style="fill:rgb(0,0,0);fill-opacity:0.7;stroke:#1c1c1c;stroke-width:1">
										<div class="somefun-pic sppin">
											<i class="zmdi zmdi-pin-drop"></i>
											<p class="sfdistance">5670 M</p>
											<p class="sfcat">DISTANCE COVERED</p>
										</div>
									</polygon>
								</svg>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-2">
								<svg height="160" width="160">
									<polygon points="0 0,160 0,160 160,80 150, 0 160" style="fill:rgb(0,0,0);fill-opacity:0.7;stroke:#1c1c1c;stroke-width:1">
										<div class="somefun-pic spwalk">
											<i class="zmdi zmdi-walk"></i>
											<p class="sfdistance">180 KM</p>
											<p class="sfcat">ALTITUDE HIKED</p>
										</div>
									</polygon>
								</svg>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-2">
								<svg height="160" width="160">
									<polygon points="0 0,160 0,160 160,80 150, 0 160" style="fill:rgb(0,0,0);fill-opacity:0.7;stroke:#1c1c1c;stroke-width:1">
										<div class="somefun-pic spboat">
											<i class="zmdi zmdi-boat"></i>
											<p class="sfdistance">570 DAYS</p>
											<p class="sfcat">SAILING DISTANCE</p>
										</div>
									</polygon>
								</svg>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-2">
								<svg height="160" width="160">
									<polygon points="0 0,160 0,160 160,80 150, 0 160" style="fill:rgb(0,0,0);fill-opacity:0.7;stroke:#1c1c1c;stroke-width:1">
										<div class="somefun-pic spcloud">
											<i class="zmdi zmdi-cloud-outline-alt"></i>
											<p class="sfdistance">567 M</p>
											<p class="sfcat">SPENT ADVENTURE</p>
										</div>
									</polygon>
								</svg>
							</div>
							<div class="col-md-2 col-sm-2 col-xs-2">
								<svg height="160" width="160">
									<polygon points="0 0,160 0,160 160,80 150, 0 160" style="fill:rgb(0,0,0);fill-opacity:0.7;stroke:#1c1c1c;stroke-width:1">
										<div class="somefun-pic spjungle">
											<i class="zmdi zmdi-evernote"></i>
											<p class="sfdistance">5670 M</p>
											<p class="sfcat">JUNGLE DISTANCE</p>
										</div>
									</polygon>
								</svg>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
			
		<div class="section4-background">
			<div class="row">
				<!-- Section 4 -->
				<div class="container">
					<!-- Header -->
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<!-- Title -->
							<div class="row">
								<div class="col-md-offset-3 col-sm-offset-3 col-xs-offset-3 col-md-7 col-sm-7 col-xs-7">
									<p class="section4-header">BEST <b>SELLING TRIPS</b></p>
								</div>
							</div>
							
							<!-- Icon -->
							<div class="row">
								<div class="col-md-offset-3 col-sm-offset-3 col-xs-offset-3 col-md-7 col-sm-7 col-xs-7">
										
								</div>
							</div>
							
							<!-- Description -->
							<div class="row">
								<div class="col-md-offset-1 col-sm-offset-1 col-xs-offset-1 col-md-10 col-sm-10 col-xs-10">
									<p class="section2-description">
										Not sure what you're looking for and need a little inspiration? We can help. Check out handpicked<br />
										list of topical trips you can take right now.
									</p>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Selling Box -->
					<div class="row">
						<!-- Selling Box (Right) -->
						<div class="col-md-6 col-sm-6 col-xs-6">
							<!-- Wildlife & Social Button -->
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<!-- Wildlife -->
									<p class="section4-subheader1 pull-left">WILDLIFE</p>
									<!-- Social Button -->
									<div class="pull-right">
										<ul class="section4-icon">
											<li>
												<i class="fa fa-facebook"></i>
											</li>
											<li>
												<i class="fa fa-twitter"></i>
											</li>
											<li>
												<i class="fa fa-google"></i>
											</li>
											<li>
												<i class="fa fa-linkedin"></i>
											</li>
											<li>
												<i class="fa fa-rss"></i>
											</li>
										</ul>
									</div>
								</div>
							</div>
							
							<!-- Description -->
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<p class="section4-description">Get closer to nature, from the jungles of India to African bush, 
									our small group tours take you to the heart of nature. 
									From elephants silhouetted against an Africa sunset to orangutans swinging in the treetops.</p>
								</div>
							</div>
							
							<!-- View Trip Button & Pagination -->
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<!-- View Trip Button -->
									<a href="#" class="section4-search pull-left" role="button">VIEW TRIP</a>
									
									<!-- Pagination on Right -->
									<div class="pull-right">
										<a href="#">
											<ul class="section4-paginationbox">
												<li>
													<i class="fa fa-angle-left"></i>
												</li>
											</ul>
										</a>
										<a href="#">
											<ul class="section4-paginationbox">
												<li>
													<i class="fa fa-angle-right"></i>
												</li>
											</ul>
										</a>
									</div>
								</div>
							</div>
							
							<!-- Best Selling Box (Small) -->
							<!-- Rail Trip & Brazil Trip -->
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-6">
									<a href="#">
										<div class="section4-bestsmall" role="button" data-toggle="button">
											<div class="best-trapeziumsmall">
												<p class="bestsell-railtext">Rail Trip</p>
											</div>
										</div>
									</a>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6">
									<a href="#">
										<div class="section4-bestsmall" role="button" data-toggle="button">
											<div class="best-trapeziumsmall">
												<p class="bestsell-braziltext">Brazil Trip</p>
											</div>
										</div>
									</a>
								</div>
							</div>
							<!-- Egypt Trip & Sailing Trip -->
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-6">
									<a href="#">
										<div class="section4-bestsmall" role="button" data-toggle="button">
											<div class="best-trapeziumsmall">
												<p class="bestsell-egypttext">Egypt Trip</p>
											</div>
										</div>
									</a>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6">
									<a href="#">
										<div class="section4-bestsmall" role="button" data-toggle="button">
											<div class="best-trapeziumsmall">
												<p class="bestsell-sailingtext">Sailing Trip</p>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
						
						<!-- Selling Box (Left) -->
						<div class="col-md-6 col-sm-6 col-xs-6">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="row">
										<a href="#">
											<div class="section4-bestlarge pull-right" role="button" data-toggle="button">
												<div class="best-trapeziumlarge">
													<p class="bestsell-largetext">15 DAYS FROM USD $1,305</p>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="col-md-6 col-sm-6 col-xs-6">
						<div class="about-box">
							<!-- About Box Picture -->
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6">
						<div class="row">
							<div class="col-md-offset-1 col-sm-offset-1 col-xs-offset-1 col-md-10 col-sm-10 col-xs-10">
								<p class="about-textheader">ABOUT <b>NEKANEKA</b></p>
							</div>
						</div>
						<div class="row">
							<!-- Icon -->
						</div>
						<div class="row">
							<p class="about-textsubheader">This is Your Planet. Introduce Yourself.</p>
						</div>
						<div class="row">
							<div class="col-md-offset-1 col-sm-offset-1 col-xs-offset-1 col-md-10 col-sm-10 col-xs-10">
								<div class="about-description">
									Travelling with G Adventures is the very best way to get up close 
									and personal with your planet in a way you'd never manage on your 
									own, for more 20 years, we've brought together people from 
									all over the globe to create lifelong connections. This is your planet, 
									after all, and better you get to know it....
								</div>
							</div>
						</div>
						<div class="row">
							<a href="#" class="about-button" role="button">Why Travel with Adventures?</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="whiterow">
		</div>
		
		<div class="section5-background">
			<!-- Section 5 -->
			<div class="container">
				<div class="row">
					<div class="col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-md-10 col-sm-10 col-xs-10">
						<p class="subscribe-textheader">SUBSCRIBE FOR <b>HOLIDAY</b></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-md-10 col-sm-10 col-xs-10">
						<!-- Icon -->
					</div>
				</div>
				<div class="row">
					<div class="col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-md-10 col-sm-10 col-xs-10">
						<div class="subscribe-description">
							Join our community of over 300,000 global readers who receive emails filled with new, <br/>
							promotions, and other good stuff from G Adventures.
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="col-md-8 col-sm-8 col-xs-8">
							<ul class="input-list style-1 clearfix">
								<li>
									<input type="email" name="email" placeholder="Enter your email address .....">
								</li>
							</ul>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<a href="#" class="subscribe-button" role="button">SUBSCRIBE</a>
						</div>
					</div>
				</div>
			</div>
		</div>
			
		<div class="section6-background">
			<!-- Section 6 -->
			<div class="container">
				<div class="row">
					<p class="section6-header">LATEST <b>BLOG POSTS</b></p>
					<div class="col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-md-10 col-sm-10 col-xs-10">
						<!-- Icon -->
					</div>
					<div class="section6-description">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor turpis, pulvinar varius dui <br/>
						id, convallis iaculis eros. Praesent porta lacinia elementum.
					</div>
				</div>			
				
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-6">
						<div class="blog-box1">
							<div class="blog-box2">
								<div class="blog-trapezium2">
									<div class="trapezium2-text">10</div>
								</div>
								<div class="blog-trapezium3">
									<div class="trapezium3-text">AUG</div>
								</div>
							</div>
							<div class="blog-trapezium1">
								<div class="trapezium1-text1">
									WHAT IS TRAVEL? WE ANSWER <br/>
									THE BIG, BURNING QUESTION.....<br />
								</div>
								<div class="trapezium1-text2">
									The question of What Travel is inter-<br />
									esting, but more for what it tells you<br />
									about the people doing the asking.
								</div>
								<a href>
									<div class="trapezium1-button">LEARN MORE</div>
								</a>
							</div>
							<ul class="section6-icon">
								<li>
									<i class="fa fa-facebook"></i>
								</li>
								<li>
									<i class="fa fa-twitter"></i>
								</li>
								<li>
									<i class="fa fa-google"></i>
								</li>
								<li>
									<i class="fa fa-linkedin"></i>
								</li>
								<li>
									<i class="fa fa-rss"></i>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6">
						<div class="blog-box1">
							<div class="blog-box2">
								<div class="blog-trapezium2">
									<div class="trapezium2-text">10</div>
								</div>
								<div class="blog-trapezium3">
									<div class="trapezium3-text">AUG</div>
								</div>
							</div>
							<div class="blog-trapezium1">
								<div class="trapezium1-text1">
									WHAT IS TRAVEL? WE ANSWER <br/>
									THE BIG, BURNING QUESTION.....<br />
								</div>
								<div class="trapezium1-text2">
									The question of What Travel is inter-<br />
									esting, but more for what it tells you<br />
									about the people doing the asking.
								</div>
								<a href>
									<div class="trapezium1-button">LEARN MORE</div>
								</a>
							</div>
							<ul class="section6-icon">
								<li>
									<i class="fa fa-facebook"></i>
								</li>
								<li>
									<i class="fa fa-twitter"></i>
								</li>
								<li>
									<i class="fa fa-google"></i>
								</li>
								<li>
									<i class="fa fa-linkedin"></i>
								</li>
								<li>
									<i class="fa fa-rss"></i>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
			
		<div class="section7-background">
			<!-- Section 7 -->
			<div class="container">
				<div class="row">
					<p class="section7-header">OUR <b>PARTNERS</b></p>
					<div class="col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-md-10 col-sm-10 col-xs-10">
						<!-- Icon -->
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="partners-box"></div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="partners-box"></div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="partners-box"></div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="partners-box"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- Plugins Js -->
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <script src="assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
        <script type="text/javascript" src="assets/plugins/multiselect/js/jquery.multi-select.js"></script>
        <script type="text/javascript" src="assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
        <script src="assets/plugins/select2/dist/js/select2.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>
        <script src="assets/plugins/moment/moment.js"></script>
     	<script src="assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
     	<script src="assets/plugins/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
     	<script src="assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
     	<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script src="assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- Plugins Js -->
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <script src="assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
        <script type="text/javascript" src="assets/plugins/multiselect/js/jquery.multi-select.js"></script>
        <script type="text/javascript" src="assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
        <script src="assets/plugins/select2/dist/js/select2.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>
        <script src="assets/plugins/moment/moment.js"></script>
     	<script src="assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
     	<script src="assets/plugins/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
     	<script src="assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
     	<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script src="assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

        <!-- file uploads js -->
        <script src="assets/plugins/fileuploads/js/dropify.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $('.dropify').dropify({
                messages: {
                    'default': 'Drag and drop a file here or click',
                    'replace': 'Drag and drop or click to replace',
                    'remove': 'Remove',
                    'error': 'Ooops, something wrong appended.'
                },
                error: {
                    'fileSize': 'The file size is too big (1M max).'
                }
            });
        </script>

        <script>
        
            	//get id adventure and destination
            	$('#search-button').on('click',function(){

            		//$('#adventure').on('change',function(){
	            		var adv = $('#adventure').val();
	            		console.log('adv');	
	            	//});

	            	//$('#destination').on('change',function(){
	            		var destination = $('#destination').val();
	            		console.log(destination);	
	            	//});

	            	//$('#tanggal').on('change',function(){
	            		var date = $('#tanggal').val();
	            		console.log(date);
	            	//});

	            	
	            	 window.location.href = 'listing?adv='+adv+'&destination='+destination+'&date='+date;
				

            	



                //advance multiselect start
                $('#my_multi_select3').multiSelect({
                    selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                    selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                    afterInit: function (ms) {
                        var that = this,
                            $selectableSearch = that.$selectableUl.prev(),
                            $selectionSearch = that.$selectionUl.prev(),
                            selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                            selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

                        that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                            .on('keydown', function (e) {
                                if (e.which === 40) {
                                    that.$selectableUl.focus();
                                    return false;
                                }
                            });

                        that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                            .on('keydown', function (e) {
                                if (e.which == 40) {
                                    that.$selectionUl.focus();
                                    return false;
                                }
                            });
                    },
                    afterSelect: function () {
                        this.qs1.cache();
                        this.qs2.cache();
                    },
                    afterDeselect: function () {
                        this.qs1.cache();
                        this.qs2.cache();
                    }
                });

                // Select2
                $(".select2").select2();

                $(".select2-limiting").select2({
				  maximumSelectionLength: 2
				});

            });

            //Bootstrap-TouchSpin
            $(".vertical-spin").TouchSpin({
                verticalbuttons: true,
                buttondown_class: "btn btn-primary",
                buttonup_class: "btn btn-primary",
                verticalupclass: 'ti-plus',
                verticaldownclass: 'ti-minus'
            });
            var vspinTrue = $(".vertical-spin").TouchSpin({
                verticalbuttons: true
            });
            if (vspinTrue) {
                $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
            }

            $("input[name='demo1']").TouchSpin({
                min: 0,
                max: 100,
                step: 0.1,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                buttondown_class: "btn btn-primary",
                buttonup_class: "btn btn-primary",
                postfix: '%'
            });
            $("input[name='demo2']").TouchSpin({
                min: -1000000000,
                max: 1000000000,
                stepinterval: 50,
                buttondown_class: "btn btn-primary",
                buttonup_class: "btn btn-primary",
                maxboostedstep: 10000000,
                prefix: '$'
            });
            $("input[name='demo3']").TouchSpin({
                buttondown_class: "btn btn-primary",
                buttonup_class: "btn btn-primary"
            });
            $("input[name='demo3_21']").TouchSpin({
                initval: 40,
                buttondown_class: "btn btn-primary",
                buttonup_class: "btn btn-primary"
            });
            $("input[name='demo3_22']").TouchSpin({
                initval: 40,
                buttondown_class: "btn btn-primary",
                buttonup_class: "btn btn-primary"
            });

            $("input[name='demo5']").TouchSpin({
                prefix: "pre",
                postfix: "post",
                buttondown_class: "btn btn-primary",
                buttonup_class: "btn btn-primary"
            });
            $("input[name='demo0']").TouchSpin({
                buttondown_class: "btn btn-primary",
                buttonup_class: "btn btn-primary"
            });

            // Time Picker
            jQuery('#timepicker').timepicker({
                defaultTIme : false
            });
            jQuery('#timepicker2').timepicker({
                showMeridian : false
            });
            jQuery('#timepicker3').timepicker({
                minuteStep : 15
            });

            //colorpicker start

            $('.colorpicker-default').colorpicker({
                format: 'hex'
            });
            $('.colorpicker-rgba').colorpicker();

            // Date Picker
            jQuery('#datepicker').datepicker();
            jQuery('#datepicker-autoclose').datepicker({
                autoclose: true,
                todayHighlight: true
            });
            jQuery('#datepicker-inline').datepicker();
            jQuery('#datepicker-multiple-date').datepicker({
                format: "dd/mm/yyyy",
                clearBtn: true,
                multidate: true,
                multidateSeparator: ","
            });
            jQuery('#date-range').datepicker({
                toggleActive: true
            });

            //Date range picker
            $('.input-daterange-datepicker').daterangepicker({
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-default',
                cancelClass: 'btn-primary'
            });
            $('.input-daterange-timepicker').daterangepicker({
                timePicker: true,
                format: 'MM/DD/YYYY h:mm A',
                timePickerIncrement: 30,
                timePicker12Hour: true,
                timePickerSeconds: false,
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-default',
                cancelClass: 'btn-primary'
            });
            $('.input-limit-datepicker').daterangepicker({
                format: 'MM/DD/YYYY',
                minDate: '06/01/2016',
                maxDate: '06/30/2016',
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-default',
                cancelClass: 'btn-primary',
                dateLimit: {
                    days: 6
                }
            });

            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

            $('#reportrange').daterangepicker({
                format: 'MM/DD/YYYY',
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2016',
                maxDate: '12/31/2016',
                dateLimit: {
                    days: 60
                },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'left',
                drops: 'down',
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-success',
                cancelClass: 'btn-default',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Cancel',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            }, function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            });

            //Bootstrap-MaxLength
            $('input#defaultconfig').maxlength()

            $('input#thresholdconfig').maxlength({
                threshold: 20
            });

            $('input#moreoptions').maxlength({
                alwaysShow: true,
                warningClass: "label label-success",
                limitReachedClass: "label label-danger"
            });

            $('input#alloptions').maxlength({
                alwaysShow: true,
                warningClass: "label label-success",
                limitReachedClass: "label label-danger",
                separator: ' out of ',
                preText: 'You typed ',
                postText: ' chars available.',
                validate: true
            });

            $('textarea#textarea').maxlength({
                alwaysShow: true
            });

            $('input#placement').maxlength({
                alwaysShow: true,
                placement: 'top-left'
            });
        </script>
</body>
@endsection