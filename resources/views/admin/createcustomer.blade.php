@extends('layouts.side')

@section('title', 'Create Customer')

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
                        <h4 class="page-title">Customer</h4>
                    </li>
                </ul>

                <!-- Right(Notification and Searchbox -->
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <!-- Notification -->
                        <div class="notification-box">
                            <ul class="list-inline m-b-0">
                                <li>
                                    <a href="javascript:void(0);" class="right-bar-toggle">
                                        <i class="zmdi zmdi-notifications-none"></i>
                                    </a>
                                    <div class="noti-dot">
                                        <span class="dot"></span>
                                        <span class="pulse"></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- End Notification bar -->
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
                        <a href="#" class="text-custom">
                            <i class="zmdi zmdi-power"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End User -->

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <ul>
                  <li class="text-muted menu-title">Navigation</li>

                    <li>
                        <a href="/dashboard" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span> </a>
                    </li>

                    <li>
                        <a href="/dash/products" class="waves-effect"><i class="zmdi zmdi-cloud-box"></i> <span> Products </span> </a>
                    </li>

                    <li>
                        <a href="/dash/agents" class="waves-effect"><i class="zmdi zmdi-account-box"></i> <span> Agents </span> </a>

                    <li>
                        <a href="/dash/customers" class="waves-effect active"><i class="zmdi zmdi-account-box-o"></i><span> Customers </span> </a>

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
                                            <a href="customercreate" class="btn btn-primary waves-effect waves-light">Add Customer <i class="fa fa-plus"></i></a>
                                            <a href="customers" class="btn btn-primary waves-effect waves-light">List Customer <i class="fa fa-list"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10">
							<div class="text-center">
                                <a href="index.html" class="logo"><span>NEKANEKA</span></span></a>
                                <h5 class="text-muted m-t-0 font-600">Add Customer</h5><br/>
                            </div>
								<div class="col-sm-offset-2 col-sm-7">
									<form class="form-horizontal" role="form" method="POST"
                                    action="{{ URL('/customer')}}" accept-charset="UTF-8" enctype="multipart/form-data">
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
                                            <label class="col-md-2 control-label">First Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="fname" class="form-control" placeholder="First Name" required/>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Last Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="lname" class="form-control" placeholder="Last Name" required/>
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
                                                <label class="col-md-2 control-label" placeholder="Alamat">Phone</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="phone" placeholder="Phone" class="form-control" required>
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
                                                <div class="radio radio-custom">
                                                    <input type="radio" name="gender" id="other" value="other">
                                                    <label for="other">
                                                        Other
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
                                        <label class="col-sm-2 control-label">Nationality</label>
                                            <div class="col-sm-10">
                                                <select class="form-control select2" name="nationality">
                                                    <option value=""> Select Your Nationality </option>
                                                    <option value="afghan">Afghan</option>
                                                    <option value="albanian">Albanian</option>
                                                    <option value="algerian">Algerian</option>
                                                    <option value="american">American</option>
                                                    <option value="andorran">Andorran</option>
                                                    <option value="angolan">Angolan</option>
                                                    <option value="antiguans">Antiguans</option>
                                                    <option value="argentinean">Argentinean</option>
                                                    <option value="armenian">Armenian</option>
                                                    <option value="australian">Australian</option>
                                                    <option value="austrian">Austrian</option>
                                                    <option value="azerbaijani">Azerbaijani</option>
                                                    <option value="bahamian">Bahamian</option>
                                                    <option value="bahraini">Bahraini</option>
                                                    <option value="bangladeshi">Bangladeshi</option>
                                                    <option value="barbadian">Barbadian</option>
                                                    <option value="barbudans">Barbudans</option>
                                                    <option value="batswana">Batswana</option>
                                                    <option value="belarusian">Belarusian</option>
                                                    <option value="belgian">Belgian</option>
                                                    <option value="belizean">Belizean</option>
                                                    <option value="beninese">Beninese</option>
                                                    <option value="bhutanese">Bhutanese</option>
                                                    <option value="bolivian">Bolivian</option>
                                                    <option value="bosnian">Bosnian</option>
                                                    <option value="brazilian">Brazilian</option>
                                                    <option value="british">British</option>
                                                    <option value="bruneian">Bruneian</option>
                                                    <option value="bulgarian">Bulgarian</option>
                                                    <option value="burkinabe">Burkinabe</option>
                                                    <option value="burmese">Burmese</option>
                                                    <option value="burundian">Burundian</option>
                                                    <option value="cambodian">Cambodian</option>
                                                    <option value="cameroonian">Cameroonian</option>
                                                    <option value="canadian">Canadian</option>
                                                    <option value="cape verdean">Cape Verdean</option>
                                                    <option value="central african">Central African</option>
                                                    <option value="chadian">Chadian</option>
                                                    <option value="chilean">Chilean</option>
                                                    <option value="chinese">Chinese</option>
                                                    <option value="colombian">Colombian</option>
                                                    <option value="comoran">Comoran</option>
                                                    <option value="congolese">Congolese</option>
                                                    <option value="costa rican">Costa Rican</option>
                                                    <option value="croatian">Croatian</option>
                                                    <option value="cuban">Cuban</option>
                                                    <option value="cypriot">Cypriot</option>
                                                    <option value="czech">Czech</option>
                                                    <option value="danish">Danish</option>
                                                    <option value="djibouti">Djibouti</option>
                                                    <option value="dominican">Dominican</option>
                                                    <option value="dutch">Dutch</option>
                                                    <option value="east timorese">East Timorese</option>
                                                    <option value="ecuadorean">Ecuadorean</option>
                                                    <option value="egyptian">Egyptian</option>
                                                    <option value="emirian">Emirian</option>
                                                    <option value="equatorial guinean">Equatorial Guinean</option>
                                                    <option value="eritrean">Eritrean</option>
                                                    <option value="estonian">Estonian</option>
                                                    <option value="ethiopian">Ethiopian</option>
                                                    <option value="fijian">Fijian</option>
                                                    <option value="filipino">Filipino</option>
                                                    <option value="finnish">Finnish</option>
                                                    <option value="french">French</option>
                                                    <option value="gabonese">Gabonese</option>
                                                    <option value="gambian">Gambian</option>
                                                    <option value="georgian">Georgian</option>
                                                    <option value="german">German</option>
                                                    <option value="ghanaian">Ghanaian</option>
                                                    <option value="greek">Greek</option>
                                                    <option value="grenadian">Grenadian</option>
                                                    <option value="guatemalan">Guatemalan</option>
                                                    <option value="guinea-bissauan">Guinea-Bissauan</option>
                                                    <option value="guinean">Guinean</option>
                                                    <option value="guyanese">Guyanese</option>
                                                    <option value="haitian">Haitian</option>
                                                    <option value="herzegovinian">Herzegovinian</option>
                                                    <option value="honduran">Honduran</option>
                                                    <option value="hungarian">Hungarian</option>
                                                    <option value="icelander">Icelander</option>
                                                    <option value="indian">Indian</option>
                                                    <option value="indonesian">Indonesian</option>
                                                    <option value="iranian">Iranian</option>
                                                    <option value="iraqi">Iraqi</option>
                                                    <option value="irish">Irish</option>
                                                    <option value="israeli">Israeli</option>
                                                    <option value="italian">Italian</option>
                                                    <option value="ivorian">Ivorian</option>
                                                    <option value="jamaican">Jamaican</option>
                                                    <option value="japanese">Japanese</option>
                                                    <option value="jordanian">Jordanian</option>
                                                    <option value="kazakhstani">Kazakhstani</option>
                                                    <option value="kenyan">Kenyan</option>
                                                    <option value="kittian and nevisian">Kittian and Nevisian</option>
                                                    <option value="kuwaiti">Kuwaiti</option>
                                                    <option value="kyrgyz">Kyrgyz</option>
                                                    <option value="laotian">Laotian</option>
                                                    <option value="latvian">Latvian</option>
                                                    <option value="lebanese">Lebanese</option>
                                                    <option value="liberian">Liberian</option>
                                                    <option value="libyan">Libyan</option>
                                                    <option value="liechtensteiner">Liechtensteiner</option>
                                                    <option value="lithuanian">Lithuanian</option>
                                                    <option value="luxembourger">Luxembourger</option>
                                                    <option value="macedonian">Macedonian</option>
                                                    <option value="malagasy">Malagasy</option>
                                                    <option value="malawian">Malawian</option>
                                                    <option value="malaysian">Malaysian</option>
                                                    <option value="maldivan">Maldivan</option>
                                                    <option value="malian">Malian</option>
                                                    <option value="maltese">Maltese</option>
                                                    <option value="marshallese">Marshallese</option>
                                                    <option value="mauritanian">Mauritanian</option>
                                                    <option value="mauritian">Mauritian</option>
                                                    <option value="mexican">Mexican</option>
                                                    <option value="micronesian">Micronesian</option>
                                                    <option value="moldovan">Moldovan</option>
                                                    <option value="monacan">Monacan</option>
                                                    <option value="mongolian">Mongolian</option>
                                                    <option value="moroccan">Moroccan</option>
                                                    <option value="mosotho">Mosotho</option>
                                                    <option value="motswana">Motswana</option>
                                                    <option value="mozambican">Mozambican</option>
                                                    <option value="namibian">Namibian</option>
                                                    <option value="nauruan">Nauruan</option>
                                                    <option value="nepalese">Nepalese</option>
                                                    <option value="new zealander">New Zealander</option>
                                                    <option value="ni-vanuatu">Ni-Vanuatu</option>
                                                    <option value="nicaraguan">Nicaraguan</option>
                                                    <option value="nigerien">Nigerien</option>
                                                    <option value="north korean">North Korean</option>
                                                    <option value="northern irish">Northern Irish</option>
                                                    <option value="norwegian">Norwegian</option>
                                                    <option value="omani">Omani</option>
                                                    <option value="pakistani">Pakistani</option>
                                                    <option value="palauan">Palauan</option>
                                                    <option value="panamanian">Panamanian</option>
                                                    <option value="papua new guinean">Papua New Guinean</option>
                                                    <option value="paraguayan">Paraguayan</option>
                                                    <option value="peruvian">Peruvian</option>
                                                    <option value="polish">Polish</option>
                                                    <option value="portuguese">Portuguese</option>
                                                    <option value="qatari">Qatari</option>
                                                    <option value="romanian">Romanian</option>
                                                    <option value="russian">Russian</option>
                                                    <option value="rwandan">Rwandan</option>
                                                    <option value="saint lucian">Saint Lucian</option>
                                                    <option value="salvadoran">Salvadoran</option>
                                                    <option value="samoan">Samoan</option>
                                                    <option value="san marinese">San Marinese</option>
                                                    <option value="sao tomean">Sao Tomean</option>
                                                    <option value="saudi">Saudi</option>
                                                    <option value="scottish">Scottish</option>
                                                    <option value="senegalese">Senegalese</option>
                                                    <option value="serbian">Serbian</option>
                                                    <option value="seychellois">Seychellois</option>
                                                    <option value="sierra leonean">Sierra Leonean</option>
                                                    <option value="singaporean">Singaporean</option>
                                                    <option value="slovakian">Slovakian</option>
                                                    <option value="slovenian">Slovenian</option>
                                                    <option value="solomon islander">Solomon Islander</option>
                                                    <option value="somali">Somali</option>
                                                    <option value="south african">South African</option>
                                                    <option value="south korean">South Korean</option>
                                                    <option value="spanish">Spanish</option>
                                                    <option value="sri lankan">Sri Lankan</option>
                                                    <option value="sudanese">Sudanese</option>
                                                    <option value="surinamer">Surinamer</option>
                                                    <option value="swazi">Swazi</option>
                                                    <option value="swedish">Swedish</option>
                                                    <option value="swiss">Swiss</option>
                                                    <option value="syrian">Syrian</option>
                                                    <option value="taiwanese">Taiwanese</option>
                                                    <option value="tajik">Tajik</option>
                                                    <option value="tanzanian">Tanzanian</option>
                                                    <option value="thai">Thai</option>
                                                    <option value="togolese">Togolese</option>
                                                    <option value="tongan">Tongan</option>
                                                    <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                                                    <option value="tunisian">Tunisian</option>
                                                    <option value="turkish">Turkish</option>
                                                    <option value="tuvaluan">Tuvaluan</option>
                                                    <option value="ugandan">Ugandan</option>
                                                    <option value="ukrainian">Ukrainian</option>
                                                    <option value="uruguayan">Uruguayan</option>
                                                    <option value="uzbekistani">Uzbekistani</option>
                                                    <option value="venezuelan">Venezuelan</option>
                                                    <option value="vietnamese">Vietnamese</option>
                                                    <option value="welsh">Welsh</option>
                                                    <option value="yemenite">Yemenite</option>
                                                    <option value="zambian">Zambian</option>
                                                    <option value="zimbabwean">Zimbabwean</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="form-group">
                                                <label class="col-sm-2 control-label">Foto</label>
                                                    <div class="col-sm-10">
                                                        <div class="card-box">
                                                                <input type="file" name="foto" class="dropify" data-height="200" />
                                                        </div>
                                                    </div>
                                                </div>
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
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->


    <!-- Right Sidebar -->
    <div class="side-bar right-bar">
        <a href="javascript:void(0);" class="right-bar-toggle">
            <i class="zmdi zmdi-close-circle-o"></i>
        </a>
        <h4 class="">Notifications</h4>
        <div class="notification-list nicescroll">
            <ul class="list-group list-no-border user-list">
                <li class="list-group-item">
                    <a href="#" class="user-list-item">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-2.jpg" alt="">
                        </div>
                        <div class="user-desc">
                            <span class="name">Michael Zenaty</span>
                            <span class="desc">There are new settings available</span>
                            <span class="time">2 hours ago</span>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="#" class="user-list-item">
                        <div class="icon bg-info">
                            <i class="zmdi zmdi-account"></i>
                        </div>
                        <div class="user-desc">
                            <span class="name">New Signup</span>
                            <span class="desc">There are new settings available</span>
                            <span class="time">5 hours ago</span>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="#" class="user-list-item">
                        <div class="icon bg-pink">
                            <i class="zmdi zmdi-comment"></i>
                        </div>
                        <div class="user-desc">
                            <span class="name">New Message received</span>
                            <span class="desc">There are new settings available</span>
                            <span class="time">1 day ago</span>
                        </div>
                    </a>
                </li>
                <li class="list-group-item active">
                    <a href="#" class="user-list-item">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-3.jpg" alt="">
                        </div>
                        <div class="user-desc">
                            <span class="name">James Anderson</span>
                            <span class="desc">There are new settings available</span>
                            <span class="time">2 days ago</span>
                        </div>
                    </a>
                </li>
                <li class="list-group-item active">
                    <a href="#" class="user-list-item">
                        <div class="icon bg-warning">
                            <i class="zmdi zmdi-settings"></i>
                        </div>
                        <div class="user-desc">
                            <span class="name">Settings</span>
                            <span class="desc">There are new settings available</span>
                            <span class="time">1 day ago</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /Right-bar -->

</div>
<!-- END wrapper -->

@stop
