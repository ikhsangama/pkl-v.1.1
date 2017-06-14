@extends('layouts.side')

@section('title', 'Customer')

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
                                            <a href="/dash/customercreate" class="btn btn-primary waves-effect waves-light">Add Customer <i class="fa fa-plus"></i></a>
                                            <a href="/dash/customers" class="btn btn-primary waves-effect waves-light">List Customer <i class="fa fa-list"></i></a>
                                        </div>
                                        <div class="m-b-30">
                                        @if(session('warning'))
                                            {{session('warning')}}
                                        @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <table class="table table-striped" id="datatable-editable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Email</th>
                                                <th>Username</th>
                                                <th>Fullname</th>
                                                <th>Address</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="gradeX">
                                            @foreach($data as $customer)
                                                <td>{{$customer->id}}</td>
                                                <td>{{$customer->email}}</td>
                                                <td>{{$customer->username}}</td>
                                                <td>{{$customer->firstname}}</td>
                                                <td>{{$customer->alamat}}</td>
                                                <td class="actions">
                                                    <a href="/dash/customer/{{$customer->id}}/edit" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                                    <a href="customerdelete/{{$customer->id}}" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- end: panel body -->

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
