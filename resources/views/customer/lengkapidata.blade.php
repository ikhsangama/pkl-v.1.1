<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App Favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App title -->
        <title>Completing Form</title>

        <!-- App CSS -->
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>

    </head>

  <body>
    <div class="account-pages"></div>
    <div class="clearfix"></div>
    <div class="wrapper-page">
      <div class="text-center">
        <a href="/" class="logo"><span>NEKANEKA</span></span></a>
        <h5 class="text-muted m-t-0 font-600">The Right Tour for The Right Traveller</h5>
      </div>
        <div class="m-t-40 card-box">
            <div class="text-center">
                <h4 class="text-uppercase font-bold m-b-0">Lengkapi Data : {{$user->username}}</h4>
            </div>
            <div class="panel-body">
                <form class="form-horizontal m-t-20" method="POST" action="/{{$user->id}}/customer">

                    <div class="form-group ">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <input class="form-control" name="firstname" type="text"  placeholder="Your First Name" required autofocus>
                                <!-- validation-->
                                @if ($errors->has('firstname'))
                                <!-- <div class="container red-text text accent-3"> -->
                                  {{ $errors->first('firstname') }}
                                <!-- </div> -->
                                @endif
                                <!-- endvalidation-->
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <input class="form-control" name="lastname" type="text"  placeholder="Your Last Name" required autofocus>
                                <!-- validation-->
                                @if ($errors->has('lastname'))
                                <!-- <div class="container red-text text accent-3"> -->
                                  {{ $errors->first('lastname') }}
                                <!-- </div> -->
                                @endif
                                <!-- endvalidation-->
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <textarea class="form-control" rows="5" name="alamat" placeholder="Your Address" required></textarea>
                                <!-- validation-->
                                @if ($errors->has('alamat'))
                                <!-- <div class="container red-text text accent-3"> -->
                                  {{ $errors->first('alamat') }}
                                <!-- </div> -->
                                @endif
                                <!-- endvalidation-->
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <input class="form-control" name="phone" type="text"  placeholder="Your Phone" required>
                                <!-- validation-->
                                @if ($errors->has('phone'))
                                <!-- <div class="container red-text text accent-3"> -->
                                  {{ $errors->first('phone') }}
                                <!-- </div> -->
                                @endif
                                <!-- endvalidation-->
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="radio">
                                <div class="col-xs-3 col-sm-3 col-md-3">
                                    <input type="radio" name="gender" id="radio1" value="M" checked>
                                    <label for="radio1">
                                        Male
                                    </label>
                                </div>
                                <div class="col-xs-3 col-sm-3 col-md-3">
                                    <input type="radio" name="gender" id="radio2" value="F">
                                    <label for="radio2">
                                        Female
                                    </label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group text-center m-t-40">
                                <input type="hidden" name="_method" value="PUT">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                {{ csrf_field() }}
                                    <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">
                                        Completing Your Profile
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <!-- end card-box -->

    </div>
    <!-- end wrapper page -->

    <script>
        var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/detect.js"></script>
    <script src="/assets/js/fastclick.js"></script>
    <script src="/assets/js/jquery.slimscroll.js"></script>
    <script src="/assets/js/jquery.blockUI.js"></script>
    <script src="/assets/js/waves.js"></script>
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/jquery.nicescroll.js"></script>
    <script src="/assets/js/jquery.scrollTo.min.js"></script>

    <!-- App js -->
    <script src="/assets/js/jquery.core.js"></script>
    <script src="/assets/js/jquery.app.js"></script>

  </body>
</html>
