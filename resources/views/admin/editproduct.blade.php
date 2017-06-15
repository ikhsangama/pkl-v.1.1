@extends('layouts.side')

@section('title', 'Edit Product')

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
                        <a href="/dash/products" class="waves-effect active"><i class="zmdi zmdi-cloud-box"></i> <span> Products </span> </a>
                    </li>

                    <li>
                        <a href="/dash/agents" class="waves-effect "><i class="zmdi zmdi-account-box"></i> <span> Agents </span> </a>

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
                                            <a href="/dash/productcreate" class="btn btn-primary waves-effect waves-light">Add Product <i class="fa fa-plus"></i></a>
                                            <a href="/dash/products" class="btn btn-primary waves-effect waves-light">List Product <i class="fa fa-list"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                             <div class="text-center">
                                <a href="index.html" class="logo"><span>NEKANEKA</span></span></a>
                                <h5 class="text-muted m-t-0 font-600">Edit Product</h5><br/>
                            </div>
                <!-- MULAI FORM EDIT -->
                                <form class="" action="/dash/product/{{$product->id}}/update" method="POST">
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="field-1" class="control-label">Nama Agent</label>
                                            <input name="idagent" type="text" class="form-control" value="{{$product->agents_id}}" disabled=""></input>
                                        </select>
                                          </div>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="field-2" class="control-label">Title</label>
                                              <input name="title" type="text" class="form-control" value="{{$product->judul}}">
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="field-3" class="control-label">Date 1</label>
                                              <div class="input-group">
                                                <input type="text" name="start_date" class="form-control" id="datepicker" value="{{$product->start_date}}">
                                                  <span class="input-group-addon bg-primary b-0 text-white"><i class="ti-calendar"></i></span>
                                                </div><!-- input-group -->
                                          </div>
                                          </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="field-4" class="control-label">Date 2</label>
                                              <div class="input-group">
                                                <input type="text" name="end_date" class="form-control" id="datepicker1" value="{{$product->end_date}}">
                                                  <span class="input-group-addon bg-primary b-0 text-white"><i class="ti-calendar"></i></span>
                                                </div><!-- input-group -->
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label for="field-6" class="control-label">Kota</label>
                                                <select class="form-control" name="city">
                                                  <option value="{{$product->lokasi_id}}" selected>{{$product->lokasi_id}}</option>
                                                    @foreach($query7 as $result)
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
                                              <label for="field-7" class="control-label">Pickup Point</label>
                                              <input type="text" name="pickuppoint" class="form-control" placeholder="Pickup Point" value="{{$product->start_point}}">
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label for="field-8" class="control-label">End Point</label>
                                              <input type="text" name="endpoint" class="form-control" placeholder="End Point" value="{{$product->end_point}}">
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label for="field-6" class="control-label">Kategori</label>
                                                <select class="form-control" name="city">
                                                    <option value="" selected></option>
                                                    <option value="">
                                                </select>
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label for="field-7" class="control-label">Peserta</label>
                                              <input type="text" name="peserta" class="form-control" placeholder="" value="{{$product->maxpeople}}">
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label for="field-8" class="control-label">Price</label>
                                              <input type="text" name="price" id="price" class="form-control" placeholder="" value="{{$product->price}}"><p id="harga"></p>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="field-2" class="control-label">Itinerary</label>
                                              <textarea name="event" class="form-control" rows="5">
                                              <?php
                                                  echo $product->event
                                              ?>
                                              </textarea>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="field-2" class="control-label">Detail Paket</label>
                                              <textarea name="detail" class="form-control" rows="5">
                                              <?php
                                                  echo $product->detail
                                              ?></textarea>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="field-2" class="control-label">Description</label>
                                              <textarea name="description" class="form-control" rows="5" value="">
                                              <?php
                                                  echo $product->description
                                              ?>
                                              </textarea>
                                          </div>
                                      </div>
                                  </div>

                              <div class="row">
                                <div class="col-md-4">
                                    <div class="user-img">
                                    <label for="field-8" class="control-label">Foto Paket</label></br>                      
                                        <img src="{{ asset('storage/product/' .$product->multipic) }}" alt="user-img" class="img-thumbnail img-responsive" width="200px" height="200px">
                                    </div>
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
