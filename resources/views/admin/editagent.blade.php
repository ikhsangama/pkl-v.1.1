@extends('layouts.side')

@section('title', 'Edit Agent')

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
                                <h5 class="text-muted m-t-0 font-600">Edit Agent</h5><br/>
                            </div>
                <!-- MULAI FORM EDIT -->
                                <form class="" action="/dash/agent/{{$user->id}}/update" method="POST">
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="field-1" class="control-label">Fullname</label>
                                              <input name="fullname" type="text" class="form-control" value="{{$agent->fullname}}">
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="field-2" class="control-label">Username</label>
                                              <input name="username" type="text" class="form-control" value="{{$user->username}}">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="field-3" class="control-label">E-mail</label>
                                              <input name="email" type="text" class="form-control" value="{{$user->email}}">
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="field-4" class="control-label">Tanggal Lahir</label>
                                              <div class="input-group">
                                                <input type="text" name="tanggallahir" class="form-control" placeholder="mm/dd/yyyy" id="datepicker" value="{{$agent->tanggallahir}}">
                                                  <span class="input-group-addon bg-primary b-0 text-white"><i class="ti-calendar"></i></span>
                                                </div><!-- input-group -->
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="field-5" class="control-label">Alamat</label>
                                              <input name="alamat" type="text" class="form-control" value="{{$agent->address}}">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label for="field-6" class="control-label">Kota</label>
                                                <select class="form-control" name="city">
                                                    <option value="{{$agent->city}}" selected>{{$agent->city}}</option>
                                                    @foreach($query4 as $result)
                                                    <option value="{{$result->lokasi_nama}}">
                                                    <?php
                                                        echo $result->lokasi_nama
                                                    ?></option>
                                                    @endforeach
                                                </select>
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label for="field-7" class="control-label">Provinsi</label>
                                                <select class="form-control" name="province">
                                                    <option value="{{$agent->province}}" selected>{{$agent->province}}</option>
                                                    @foreach($query3 as $result)
                                                    <option value="{{$result->lokasi_nama}}">
                                                    <?php
                                                        echo $result->lokasi_nama
                                                    ?></option>
                                                    @endforeach
                                                </select>
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label for="field-8" class="control-label">Bahasa</label>
                                              <select class="form-control select2" name="bahasa">
                                                <option value="{{$agent->bahasa}}" selected>{{$agent->bahasa}}</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="English">English</option>
                                              </select>
                                          </div>
                                      </div>
                                  </div>
                                <div class="col-md-4">
                                    <div class="user-img">
                                    <label for="field-8" class="control-label">Foto Diri</label></br>                                    
                                        <img src="{{ asset('storage/diri/' .$agent->foto) }}" alt="user-img" class="img-thumbnail img-responsive" width="200px" height="200px">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="user-img">
                                    <label for="field-8" class="control-label">Foto KTP</label></br>
                                        <img id="fotoktp" src="{{ asset('storage/ktp/' .$agent->multidokumen) }}" alt="user-img" class="img-thumbnail img-responsive" width="200px" height="200px">
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                  <input type="hidden" name="_method" value="PUT">
                                    {{ csrf_field() }}
                                  <input type="submit" class="btn" value="Save">
                                </div>
                                </form>
                                <!-- AKHIR FORM EDIT -->

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
