@extends('layouts.side')

@section('title', 'Create Agent')

@section('content')

<!-- Begin page -->
<div id="wrapper">

  <!-- Top Bar Start -->
  <div class="topbar">

    <!-- LOGO -->
    <div class="topbar-left">
        <a href="#" class="logo"><span>NEKA<span>NEKA</span></span><i class="zmdi zmdi-layers"></i></a>
    </div>

        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">

                <!-- Page title -->
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <button class="button-menu-mobile open-left">
                            <i class="zmdi zmdi-menu"></i>
                        </button>
                    </li>
                    <li>
                        <h4 class="page-title">Agent</h4>
                    </li>
                </ul>

            </div><!-- end container -->
        </div><!-- end navbar -->
    </div>
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">

            <!-- User -->
            <div class="user-box">
                <h5><a href="#">Admin</a> </h5>
                <ul class="list-inline">
                    <li>
                        <a href="/" class="text-custom">
                            <i class="zmdi zmdi-home"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/logout') }}" class="text-custom"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                            <i class="zmdi zmdi-power"></i>
                        </a>
                    </li>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST">
                    {{ csrf_field() }}
                    </form>
                </ul>
            </div>
            <!-- End User -->

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <ul>
                  <li class="text-muted menu-title">Navigation</li>

                    <li>
                        <a href="/dash" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span> </a>
                    </li>

                    <li>
                        <a href="/dash/products" class="waves-effect"><i class="zmdi zmdi-cloud-box"></i> <span> Products </span> </a>
                    </li>

                    <li>
                        <a href="/dash/agents" class="waves-effect active"><i class="zmdi zmdi-account-box"></i> <span> Agents </span> </a>

                    <li>
                        <a href="/dash/customers" class="waves-effect"><i class="zmdi zmdi-account-box-o"></i><span> Customers </span> </a>

                </ul>
                <div class="clearfix"></div>
            </div>
            <!-- Sidebar -->
            <div class="clearfix"></div>

        </div>

    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
	<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="m-b-30">
                                            <a href="/dash/agentcreate" class="btn btn-primary waves-effect waves-light">Add Agent <i class="fa fa-plus"></i></a>
                                            <a href="/dash/agents" class="btn btn-primary waves-effect waves-light">List Agent <i class="fa fa-list"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10">
							<div class="text-center">
                                <a href="index.html" class="logo"><span>NEKANEKA</span></span></a>
                                <h5 class="text-muted m-t-0 font-600">Add Agent</h5><br/>
                            </div>
								<div class="col-sm-offset-2 col-sm-7">
									<form class="form-horizontal" role="form" method="post"
                                    action="{{ URL('dash/agents')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                                    <!-- {{ csrf_field() }} -->
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Username</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="username" class="form-control" placeholder="Username">
                                                </div>
                                        </div>
                                        <div class="form-group ">
                                        	<label class="col-md-2 control-label" placeholder="Password">Password</label>
					                            <div class="col-md-10">
					                                <input class="form-control" name="password" id="password" type="password" placeholder="Password">
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
											<label class="col-md-2 control-label" placeholder="Address">Address</label>
												<div class="col-md-10">
													<input type="text" name="address" class="form-control" placeholder="Address" required/>
												</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">Provinsi</label>
												<div class="col-md-10">
		                                            <select class="form-control" name="province">
                                                        <option value="P0" selected disabled>Provinsi</option>
                                                        @foreach($query as $result)
                                                        <option value="{{$result->lokasi_nama}}">
                                                        <?php
                                                            echo $result->lokasi_nama
                                                        ?></option>
                                                        @endforeach
                                                    </select>
	                                            </div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">Kabupaten</label>
												<div class="col-md-10">
													<select class="form-control" name="city">
                                                        <option value="K0" selected disabled>Kabupaten</option>
                                                        @foreach($query1 as $result)
                                                        <option value="{{$result->lokasi_nama}}">
                                                        <?php
                                                            echo $result->lokasi_nama
                                                        ?></option>
                                                        @endforeach
                                                    </select>
	                                            </div>
										</div>
										<div class="form-group">
                                        <label class="col-sm-2 control-label">Gender</label>
                                            <div class="col-sm-1">
                                                <div class="radio radio-custom">
                                                    <input type="radio" name="gender" id="male" value="male" checked>
                                                    <label for="male">
                                                        Male
                                                    </label>
                                                </div>
                                                <div class="radio radio-custom">
                                                    <input type="radio" name="gender" id="female" value="female">
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
													<option value="Indonesia">Indonesia</option>
													<option value="English">English</option>
												</select>
											</div>
										</div>
										<div class="container">
											<div class="row">
												<!-- <div class="form-group"> -->
												<label class="col-sm-2 control-label">Foto Diri</label>
													<div class="col-sm-10">
							                            <div class="card-box">
							                                    <input type="file" name="fotodiri" class="dropify" />
							                            </div>
													</div>
												<!-- </div> -->
											</div>
										</div>
										<div class="container">
											<div class="row">
												<!-- <div class="form-group"> -->
												<label class="col-sm-2 control-label">Foto KTP</label>
													<div class="col-sm-10">
							                            <div class="card-box">
							                                    <input type="file" name="fotoktp" class="dropify" />
							                            </div>
													</div>
												<!-- </div> -->
											</div>
										</div>
										<div class="form-group text-center">
											<div class="col-xs-12">
												{{ csrf_field() }}
												<button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">
													Submit
												</button>
											</div>
										</div>
									</form>
								</div>
							</div>
                        	</div>
                        </div> <!-- end panel -->
                    </div> <!-- end col-->
                </div><!-- end row -->
            </div>
        </div> <!-- container -->
        </div> <!-- content -->

        <footer class="footer text-right">
            2016 © NEKANEKA.
        </footer>

    </div>
</div>
<!-- END wrapper -->

@stop
