
@extends('layouts.app')
@section('content')
	
	<script type="text/javascript" src="{{ URL('assets/js/jquery.min.js') }}"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".close-div").hide();
			$(".shown").click(function(e){
				e.stopPropagation();			
				$(this).parents('.listing-box').find(".shown").hide();
				$(this).parents('.listing-box').find(".close-div").fadeIn(500);
			});
			$(".close-div").click(function(e){
				e.stopPropagation();
				$(this).parents('.listing-box').find(".shown").fadeIn(500);
				$(this).parents('.listing-box').find(".close-div").hide();
			});
		});
	</script>
	<div class="container-full">
		<div class="list1-background">
			<div class="container">
				<!-- Header -->
				<div class="row">
					<div class="col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-md-10 col-sm-10 col-xs-10">
						<p class="list1-header">
							NEKANEKA <b>LISTING</b> 
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
						<p class="list1-description">Where happiness are looking for your</p>
					</div>
				</div>
				
				<!-- HOME | ADVENTURES -->
				<div class="row">
					<div class="col-md-offset-5 col-sm-offset-5 col-xs-offset-5 col-md-7 col-sm-7 col-xs-7">
						<div class="trapezium-home">
							<table class="tbl-header">
								<tr>
									<th class="tbl-home">HOME</th>
									<th class="tbl-adv">ADVENTURES</th>
								</tr>
							</table>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		
		<div class="list2-background">
			<div class="container">
				<div class="row">
					<!-- Select Filtering -->
					<div class="col-md-3 col-sm-3 col-xs-3">
						<select class="form-control">
							<option value="" selected disabled>Select Adventure Type</option>
						</select>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-3">
						<select class="form-control">
							<option value="" selected disabled>Select Your Destination</option>
						</select>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-2">
						<select class="form-control">
							<option value="" selected disabled>Date</option>
						</select>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-2">
						<select class="form-control">
							<option value="" selected disabled>Price</option>
						</select>
					</div>
					
					<!-- View Mode -->
					<div class="col-md-2 col-sm-2 col-xs-2">
						<div class="pull-right">
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="list3-background">
			<div class="container">
				<div class="row">
				@foreach ($pakets as $key => $paket)
					<div class="col-md-4 col-sm-4 col-xs-4">
						
							<div class="listing-box" role="button" id="{{$paket->id}}">
								<input type="hidden" id="id_paket" value="{{$paket->id}}">
								<div class="close-div">
									<div class="listing-trapezium-change" id="pop">
										<div class="row normalize2" style="padding-left:10px;padding-right:10px;">
											<div class="col-md-6 col-sm-6 col-xs-6">
												<p class="listing-title-close">
													Adventure Trip
												</p>
											</div>
											<div class="col-md-6 col-sm-6 col-xs-6">
												<p class="listing-region-close">
													{{$paket->inf_lokasi->lokasi_nama}}
											</div>
										</div>
										<div class="row normalize2 bot-info2">
											<div class="col-md-3 col-sm-3 col-xs-3">
												<p class="listing-price-bot">
													${{$paket->price}}
											</div>
											<div class="col-md-4 col-sm-4 col-xs-4">
												<p class="listing-person-bot">
													PER PERSON
												</p>
											</div>
											<div class="col-md-5 col-sm-5 col-xs-5">
													{{$paket->detail}}
											</div>
										</div>
									</div>
								</div>

								<div class="shown">
									<div class="listing-trapezium" role="button" id="{{$paket->id}}">
										<div class="row normalize" style="padding-left:10px;padding-right:10px;">
											<div class="col-md-6 col-sm-6 col-xs-6">
												<p class="listing-title-close">
													Adventure Trip
												</p>
											</div>
											<div class="col-md-6 col-sm-6 col-xs-6">
												<p class="listing-region-close">
													{{$paket->inf_lokasi->lokasi_nama}}
											</div>
										</div>
										<div class="normalize bot-info"> 
											<div class="row">
												<div class="col-md-12 col-sm-12 col-xs-12">
													<div class="row">
														<div class="col-md-4 col-sm-4 col-xs-4">
															<p class="listing-price-shown">
																${{$paket->price}}
															</p>
														</div>
														<div class="col-md-5 col-sm-5 col-xs-5">
															<p class="listing-person-shown">
																PER PERSON
															</p>
														</div>
														<div class="col-md-3 col-sm-3 col-xs-3">
															
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>							
							</div>
						<!-- </a> -->
					</div>
				@endforeach
					
					<?php 
					//}
					?>
					<!------------------------------------>
					
				</div>
			</div>
		</div>
	</div>

<script>

$('.listing-box').on('click', function(e,unik) {
	var unik = $('#id_paket').val();
	console.log(this.id);
	window.location.href = 'detail/'+this.id;
   
});


</script>
@endsection

