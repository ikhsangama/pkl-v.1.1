@extends('layouts.side')

@section('title', 'Create Product')

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
                        <h4 class="page-title">Product</h4>
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
                        <a href="/dash/products" class="waves-effect active"><i class="zmdi zmdi-cloud-box"></i> <span> Product </span> </a>
                    </li>

                    <li>
                        <a href="/dash/agents" class="waves-effect"><i class="zmdi zmdi-account-box"></i> <span> Agent </span> </a>

                    <li>
                        <a href="/dash/customers" class="waves-effect"><i class="zmdi zmdi-account-box-o"></i><span> Customer </span> </a>

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
                                            <a href="/dash/productcreate" class="btn btn-primary waves-effect waves-light">Add Product <i class="fa fa-plus"></i></a>
                                            <a href="/dash/products" class="btn btn-primary waves-effect waves-light">List Product <i class="fa fa-list"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-10">
                                    <div class="text-center">
                                      <a href="index.html" class="logo"><span>NEKANEKA</span></span></a>
                                      <h5 class="text-muted m-t-0 font-600">Product</h5><br/>
                                    </div>
                                    <div class="col-sm-offset-2 col-sm-7">
                                    <form class="form-horizontal" role="form" method="POST" action="{{ URL('/product') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                    <div class="form-group">
                                      <label class="col-md-2 control-label">Nama Agent</label>
                                        <div class="col-md-10">
                                        <select class="form-control" name="idagent">
                                            <option value="P0" selected disabled>Agent</option>
                                            @foreach($query1 as $result)
                                            <option value="{{$result->id}}">
                                            <?php
                                                echo $result->fullname
                                            ?></option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <label class="col-sm-2 control-label">Title</label>
                                      <div class="col-sm-10">
                                        <input type="text" name="title" class="form-control" placeholder="Title">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label class="col-sm-2 control-label">Kategori</label>
                                        <div class="col-md-10">
                                          <select class="form-control" name="kategori" id="kategori">
                                            <option value="A0" selected disabled>Select Adventure</option>
                                                @foreach($query as $result)
                                                <option value="{{$result->id_adv}}">
                                                <?php
                                                    echo $result->nama_adv
                                                ?></option>
                                                @endforeach
                                          </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                      <label class="control-label col-sm-2">Date Range</label>
                                        <div class="col-sm-10">
                                          <div class="input-daterange input-group" id="date-range">
                                            <input type="text" name="start_date" class="form-control" name="start" />
                                              <span class="input-group-addon bg-primary b-0 text-white">to</span>
                                                <input type="text" name="end_date" class="form-control" name="end" />
                                          </div>
                                        </div>
                                      </div>

                                      <div class="form-group">
                                      <label class="col-sm-2 control-label">Provinsi</label>
                                        <div class="col-md-10">
                                          <select class="form-control" name="province">
                                            <option value="P0" selected disabled>Provinsi</option>
                                            @foreach($query3 as $result)
                                                <option value="{{$result->lokasi_ID}}">
                                                <?php
                                                    echo $result->lokasi_nama
                                                ?></option>
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                      <label class="col-sm-2 control-label">Kota</label>
                                        <div class="col-md-10">
                                          <select class="form-control" name="city">
                                                <option value="K0" selected disabled>Kabupaten</option>
                                                @foreach($query4 as $result)
                                                <option value="{{$result->lokasi_nama}}">
                                                <?php
                                                    echo $result->lokasi_nama
                                                ?></option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <label class="col-sm-2 control-label">Pickup Point</label>
                                      <div class="col-sm-10">
                                        <input type="text" name="pickuppoint" class="form-control" placeholder="Pickup Point">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                    <label class="col-sm-2 control-label">End Point</label>
                                      <div class="col-sm-10">
                                        <input type="text" name="endpoint" class="form-control" placeholder="End Point">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Itinerary</label>
                                        <div class="col-md-10">
                                            <textarea name="event" class="form-control" rows="5"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <label class="col-sm-2 control-label">Peserta</label>
                                      <div class="col-sm-10">
                                        <input type="text" name="peserta" class="form-control" placeholder="">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                    <label class="col-sm-2 control-label">Price</label>
                                      <div class="col-sm-10">
                                        <input type="text" name="price" id="price" class="form-control" placeholder=""><p id="harga"></p>
                                      </div>
                                    </div>

                                    <div class="container">
                                      <div class="row">

                                        <label class="col-sm-2 control-label">Foto Paket</label>
                                          <div class="col-sm-10">
                                              <div class="card-box">
                                                <input type="file" name="product" class="dropify" data-height="200" />
                                              </div>
                                          </div>

                                      </div>
                                    </div>

                                    <div class="form-group">
                                    <label class="col-sm-2 control-label">Detail Paket</label>
                                      <div class="col-sm-10">
                                        <textarea name="detail" class="form-control" rows="5"></textarea>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                    <label class="col-sm-2 control-label">Description</label>
                                      <div class="col-sm-10">
                                        <textarea name="description" class="form-control" rows="5"></textarea>
                                      </div>
                                    </div>
                                    </div>
                                    <div class="form-group text-center">
                                      <div class="col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-xs-6 col-sm-6 col-md-6 tombol-submit">
                                        <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">
                                          Submit
                                        </button>
                                      </div>
                                    </div>
                                  </form>
                                  </div>
                            </div><!-- end: panel body -->

                        </div> <!-- end panel -->
                    </div> <!-- end col-->
                </div><!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->

        <footer class="footer text-right">
            2016 © NEKANEKA.
        </footer>

    </div>

</div>
<!-- END wrapper -->

@stop
