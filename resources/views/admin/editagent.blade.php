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

<!-- modal -->
    <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Agents</h4>
                </div>
                <div class="modal-body">
                    <div class="user-box">
                        <div class="user-img">
                            <img src="{{ asset('storage/diri/' .$agent->foto) }}" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
                        </div>
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
                                  <input name="tanggallahir" type="text" class="form-control" value="{{$agent->tanggallahir}}">
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
                                  <input name="kota" type="text" class="form-control" value="{{$agent->city}}">
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label for="field-7" class="control-label">Provinsi</label>
                                  <input name="provinsi" type="text" class="form-control" value="{{$agent->province}}">
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label for="field-8" class="control-label">Bahasa</label>
                                  <input name="bahasa" type="text" class="form-control" value="{{$agent->bahasa}}">
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>

                      <input type="hidden" name="_method" value="PUT">
                        {{ csrf_field() }}
                      <input type="submit" class="btn" value="Save">
                  </div>
                    </form>
                    <!-- AKHIR FORM EDIT -->
    <!-- /.modal -->

</div>
<!-- END wrapper -->

@stop
