@extends('layouts.side')

@section('title', 'Agent Sign Up')

@section('content')

		<div class="content">
			<div class="container">
				<div class="row">
					<center>
						<div class="col-sm-10">
							<div class="text-center">
                                <a href="index.html" class="logo"><span>NEKANEKA</span></span></a>
                                <h5 class="text-muted m-t-0 font-600">Sign Up</h5><br/>
                            </div>
								<div class="col-sm-offset-2 col-sm-7">
									<form class="form-horizontal" role="form" method="POST"
                                    action="/{{$user->id}}/agent" accept-charset="UTF-8" enctype="multipart/form-data">
                                    {{ csrf_field() }}

										<div class="form-group">
											<label class="col-md-2 control-label">Nomor ID</label>
												<div class="col-md-10">
													<input type="text" name="nomorid" class="form-control" value="{{ $user->id }}" readonly>
												</div>
										</div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Username</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" value="{{ $user->username }}" readonly>
                                                </div>
                                        </div>
                                        <div class="form-group">
											<label class="col-md-2 control-label" placeholder="Fullname">Fullname</label>
												<div class="col-md-10">
													<input type="text" name="fullname" class="form-control" placeholder="Fullname" required/>
												</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label" placeholder="">E-Mail</label>
												<div class="col-md-10">
													<input type="text" name="email" class="form-control" placeholder="E-Mail" required/>
												</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label" placeholder="Alamat">Alamat</label>
												<div class="col-md-10">
													<input type="text" name="alamat" class="form-control" placeholder="Alamat" required/>
												</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">Provinsi</label>
												<div class="col-md-10">
													<select class="form-control" name="provinsi">
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
	                                                </select>
	                                            </div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">Kabupaten</label>
												<div class="col-md-10">
													<select class="form-control" name="kabupaten">
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
	                                                </select>
	                                            </div>
										</div>
										<div class="form-group">
                                        <label class="col-sm-2 control-label">Gender</label>
                                            <div class="col-sm-1">
                                                <div class="radio radio-custom">
                                                    <input type="radio" name="gender" id="male" value="M" checked>
                                                    <label for="male">
                                                        Male
                                                    </label>
                                                </div>
                                                <div class="radio radio-custom">
                                                    <input type="radio" name="gender" id="female" value="F">
                                                    <label for="female">
                                                        Female
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
			                            <div class="form-group">
											<label class="control-label col-sm-2">Tanggal Lahir</label>
												<div class="col-sm-8">
													<div class="input-group">
														<input type="text" name="tanggallahir" class="form-control" placeholder="mm/dd/yyyy" id="datepicker" required>
															<span class="input-group-addon bg-primary b-0 text-white"><i class="ti-calendar"></i></span>
														</div><!-- input-group -->
												</div>
										</div>

										<div class="form-group">
										<label class="col-sm-2 control-label">Bahasa</label>
											<div class="col-sm-10">
												<select class="form-control select2" name="bahasa">
													<option value="ID">Indonesia</option>
													<option value="ENG">English</option>
												</select>
											</div>
										</div>
										<div class="container">
											<div class="row">
												<div class="form-group">
												<label class="col-sm-2 control-label">Foto Diri</label>
													<div class="col-sm-10">
							                            <div class="card-box">
							                                    <input type="file" name="fotodiri" class="dropify" data-height="200" />
							                            </div>
													</div>
												</div>
											</div>
										</div>

										<div class="container">
											<div class="row">
												<div class="form-group">
												<label class="col-sm-2 control-label">Foto KTP</label>
													<div class="col-sm-10">
							                            <div class="card-box">
							                                    <input type="file" name="fotoktp" class="dropify" data-height="200" />
							                            </div>
													</div>
												</div>
											</div>
										</div>

										<div class="form-group text-center">
											<div class="col-xs-12">
												<button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">
													Submit
												</button>
											</div>
										</div>

									</form>
								</div>
						</div>
					</center>
				</div>
			</div>
@stop
