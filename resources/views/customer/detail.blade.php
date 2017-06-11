@extends('layouts.app')
@section('content')
	<div class="container-full">
		<div class="detail1-background">
			<div class="container">
				<!-- Header -->
				<div class="row">
					<div class="col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-md-10 col-sm-10 col-xs-10">
						<p class="list1-header">
							EXPERIENCE <b>NEPAL</b>
						</p>
					</div>
				</div>

				<!-- Icon -->
				<div class="row">
					<div class="col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-md-10 col-sm-10 col-xs-10">
						<div class="list1-icon">
						</div>
					</div>
				</div>

				<!-- Description -->
				<div class="row">
					<div class="col-md-offset-5 col-sm-offset-5 col-xs-offset-5 col-md-7 col-sm-7 col-xs-7">
						<p class="list1-description">The right tour for the right traveller</p>
					</div>
				</div>

				<!-- HOME | ADVENTURES -->
				<div class="row">
					<div class="col-md-offset-5 col-sm-offset-5 col-xs-offset-5 col-md-7 col-sm-7 col-xs-7">
						<div class="trapezium-homedetail">
							<table class="tbl-headerdetail">
								<tr>
									<th class="tbl-homedetail">HOME</th>
									<th class="tbl-advdetail">ADVENTURES</th>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="detail2-background">
			<div class="container">
				<div class="row">
					<div class="filter-position">
						<!-- Select Filtering -->
						<div class="col-md-3 col-sm-3 col-xs-3">
							<select class="form-control">
								<option value="" selected disabled>Select Destination</option>
							</select>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3">
							<select class="form-control">
								<option value="" selected disabled>Duration</option>
							</select>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-2">
							<select class="form-control">
								<option value="" selected disabled>Departing</option>
							</select>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-2">
							<select class="form-control">
								<option value="" selected disabled>Price</option>
							</select>
						</div>

						<div class="col-md-2 col-sm-2 col-xs-2">
							<a href="#" class="detail-searchbtn" role="button">SEARCH</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		@foreach ($pakets as $key=>$paket){
		<div class="detail3-background">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-6">
						<!-- Detail 3 Header -->
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<p class="detail3-header">
									TRIP <b>OVERVIEW</b>
								</p>
							</div>
						</div>

						<!-- Icon -->
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
							</div>
						</div>

						<!-- Detail 3 Description -->
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<p class="detail3-description">
									{{$paket->detail}}
								</p>
							</div>
						</div>

						<!-- Trip Overview -->
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="row">
									<div class="col-md-6 col-sm-6 col-xs-6">
										<div class="row">
											<!-- Start, Finish, Countries -->
											<div class="col-md-6 col-sm-6 col-xs-6">
												<div class="to1">
													<p><b>START</b></p>
													<p><b>FINISH</b></p>
													<p><b>COUNTRIES</b></p>
												</div>
											</div>
											<!-- Kathmandu, Nepal -->
											<div class="col-md-6 col-sm-6 col-xs-6">
												<div class="to2">
													<p>KATHMANDU, NEPAL</p>
													<p>KATHMANDU, NEPAL</p>
													<p>NEPAL</p>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-6 col-sm-6 col-xs-6">
										<div class="row">
											<!-- Ages, Group Size -->
											<div class="col-md-6 col-sm-6 col-xs-6">
												<div class="row">
													<div class="to1">
														<p><b>AGES</b></p>
														<p><b>GROUP SIZES</b></p>
													</div>
												</div>
											</div>
											<!-- Min 16, Min 1 -->
											<div class="col-md-6 col-sm-6 col-xs-6">
												<div class="row">
													<div class="to2">
														<p>MIN 16</p>
														<p>MIN 1, MAX 12</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Social Media Icon -->
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="detail-socialposition">
									<div class="detail-socialmedia">
										<div class="detail-socialicon">
											<i class="fa fa-facebook" aria-hidden="true"></i>
										</div>
									</div>
									<div class="detail-socialmedia">
										<div class="detail-socialicon">
											<i class="fa fa-twitter" aria-hidden="true"></i>
										</div>
									</div>
									<div class="detail-socialmedia" style="position:relative;top:2px !important;">
										<div class="detail-socialicon">
											<i class="ti-google" aria-hidden="true"></i>
										</div>
									</div>
									<div class="detail-socialmedia">
										<div class="detail-socialicon">
											<i class="fa fa-linkedin" aria-hidden="true"></i>
										</div>
									</div>
									<div class="detail-socialmedia">
										<div class="detail-socialicon">
											<i class="fa fa-rss" aria-hidden="true"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Another Trip Overview -->
					<div class="col-md-6 col-sm-6 col-xs-6">
						<div class="detail3-subbackground">
							<div class="row">
								<div class="detail3-fontheader1">
									<div class="col-md-6 col-sm-6 col-xs-6">
										<p class>ACTIVITIES</p>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6">
										<p class>ACTIVITY LEVEL</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-6">
									<div class="row">
										<div class="detail3-font">
											<div class="col-md-4 col-sm-4 col-xs-4">
												<p class>CAMPING</p>
											</div>
											<div class="col-md-4 col-sm-4 col-xs-4">
												<p class>HIKING</p>
											</div>
											<div class="col-md-4 col-sm-4 col-xs-4">
												<p class>CAMPING</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6">
									<div class="row">
										<div class="detail3-font">
											<div class="col-md-4 col-sm-4 col-xs-4">
												<p class>EASY</p>
											</div>
											<div class="col-md-4 col-sm-4 col-xs-4">
												<p class>MEDIUM</p>
											</div>
											<div class="col-md-4 col-sm-4 col-xs-4">
												<p class>HARD</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="detail3-fontheader2">
									<div class="col-md-4 col-sm-4 col-xs-4">
										<p class>RATING</p>
									</div>
									<div class="col-md-4 col-sm-4 col-xs-4">
										<p class>DURATION</p>
									</div>
									<div class="col-md-4 col-sm-4 col-xs-4">
										<p class>BUDGET</p>
									</div>
								</div>
							</div>

							<!-- Book Button -->
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<input type="hidden" value="{{$id}}" id="paket">
									<input type="hidden" value="{{$query2}}" id="customer">
									<button class="booking-button" id="booking">BOOK THIS TRIP</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		}
		@endforeach
		<div class="detail4-background">
			<div class="container">
				<!-- Header -->
				<div class="row">
					<p class="detail4-header">TRIP <b>INCLUSIONS</b></p>
				</div>

				<!-- Icon -->
				<div class="row">
					<div class="detail4-iconheader"></div>
				</div>

				<!-- Description -->
				<div class="row">
					<div class="col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-md-8 col-sm-8 col-xs-8">
						<p class="detail4-description">Lorem ipsum dolor sit amet, consetectur adipiscing elit. Pellentesque dolor turpis, pulvinar varius dui
						<br />id, convallis iaculis eros. Praesent porta lacinia elementum.</p>
					</div>
				</div>

				<!-- Inclusion Trapezium (Belum Bisa Margin Bottom, Belum Buat Kelas)-->
				<div class="row">
					<div class="inclusions-position">
						<div class="col-md-4 col-sm-4 col-xs-4">
							<svg class="detail4-polygonsize">
								<polygon points="0 0,80 0,80 80,40 70, 0 80" class="detail4-polygonstyling"/>
							</svg>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<svg class="detail4-polygonsize">
								<polygon points="0 0,80 0,80 80,40 70, 0 80" class="detail4-polygonstyling"/>
							</svg>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<svg class="detail4-polygonsize">
								<polygon points="0 0,80 0,80 80,40 70, 0 80" class="detail4-polygonstyling"/>
							</svg>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="detail5-background">
			<div class="container">
				<!-- Header -->
				<div class="row">
					<p class="detail5-header">TRIP <b>DATE & PRICE</b></p>
				</div>

				<!-- Icon -->
				<div class="row">
					<div class="detail5-icon">

					</div>
				</div>

				<!-- Description -->
				<div class="row">
					<div class="col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-md-8 col-sm-8 col-xs-8">
						<p class="detail5-description">Lorem ipsum dolor sit amet, consetectur adipiscing elit. Pellentesque dolor turpis, pulvinar varius dui
						<br />id, convallis iaculis eros. Praesent porta lacinia elementum.</p>
					</div>
				</div>

				<div class="row">
					<table border="0" class="table-position">
						<tr class="table-header">
							<th class="table-paddingheader">DEPARTURE</th>
							<th class="table-paddingheader">TRIP STATUS</th>
							<th class="table-paddingheader">PRICE (PER PERSON)</th>
							<th class="table-paddingheader">ACTION</th>
						</tr>
						<tr class="table-header">
							<td class="table-padding">19 Dec - 28 Dec 2016</td>
							<td class="table-padding">Fully Booked</td>
							<td class="table-padding">$1,200 - $1,400</td>
							<td class="table-padding"><a href="#" class="booking-button2" role="button">BOOK NOW</a></td>
						</tr>
						<tr class="table-header">
							<td class="table-padding">19 Dec - 28 Dec 2016</td>
							<td class="table-padding">Fully Booked</td>
							<td class="table-padding">$1,200 - $1,400</td>
							<td class="table-padding"><a href="#" class="booking-button2" role="button">BOOK NOW</a></td>
						</tr>
						<tr class="table-header">
							<td class="table-padding">19 Dec - 28 Dec 2016</td>
							<td class="table-padding">Fully Booked</td>
							<td class="table-padding">$1,200 - $1,400</td>
							<td class="table-padding"><a href="#" class="booking-button2" role="button">BOOK NOW</a></td>
						</tr>
						<tr class="table-header">
							<td class="table-padding">19 Dec - 28 Dec 2016</td>
							<td class="table-padding">Fully Booked</td>
							<td class="table-padding">$1,200 - $1,400</td>
							<td class="table-padding"><a href="#" class="booking-button2" role="button">BOOK NOW</a></td>
						</tr>
						<tr class="table-header">
							<td class="table-padding">19 Dec - 28 Dec 2016</td>
							<td class="table-padding">Fully Booked</td>
							<td class="table-padding">$1,200 - $1,400</td>
							<td class="table-padding"><a href="#" class="booking-button2" role="button">BOOK NOW</a></td>
						</tr>
						<tr class="table-header">
							<td class="table-padding">19 Dec - 28 Dec 2016</td>
							<td class="table-padding">Fully Booked</td>
							<td class="table-padding">$1,200 - $1,400</td>
							<td class="table-padding"><a href="#" class="booking-button2" role="button">BOOK NOW</a></td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<div class="detail6-background">
			<div class="container">
				<div class="row">
					<!-- Header -->
					<p class="detail6-header">RELATED <b>TRIPS</b></p>
				</div>

				<!-- Icon -->
				<div class="row">
					<div class="detail6-icon">

					</div>
				</div>

				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-4">
						<a href="#">
							<div class="detail6-listingbox" role="button" data-toggle="button">
								<div class="detail6-listingtrapezium">
									<div class="row">

									</div>
									<div class="row">

									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-4">
						<a href="#">
							<div class="detail6-listingbox" role="button" data-toggle="button">
								<div class="detail6-listingtrapezium">
									<div class="row">

									</div>
									<div class="row">

									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-4">
						<a href="#">
							<div class="detail6-listingbox" role="button" data-toggle="button">
								<div class="detail6-listingtrapezium">
									<div class="row">

									</div>
									<div class="row">

									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
	<script type="text/javascript">
	console.log('aa');

		$('#booking').on('click', function(e,unik) {
			var unik = $('#paket').val();
			var cust = $('#customer').val();
			console.log(this.id);
			window.location.href = '/booking/'+unik+'/'+cust;

		});


	</script>
@endsection
