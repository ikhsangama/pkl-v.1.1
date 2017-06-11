<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Page Title -->
    <title>NEKANEKA</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}" />
    <!-- mystyle -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/nekaneka.css') }}" />
    <!-- font-awesome -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/font-awesome.min.css') }}" />
    <!-- App Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}" />


    <!-- App CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/components.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/icons.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/pages.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/menu.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/responsive.css') }}"/>

    <script src="assets/js/modernizr.min.js"></script>

  <!-- Navigation Bar (Top) -->
    <nav class="navbar navbar-top navbar-inverse navbar-fixed-top">
      <div class="container">
        <ul class="nav navbar-nav">
          <!-- Currency -->
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">USD
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">USD</a></li>
              <li><a href="#">IDR</a></li>
            </ul>
          </li>

          <!-- Language -->
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">English
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Bahasa</a></li>
              <li><a href="#">English</a></li>
            </ul>
          </li>
        </ul>
@if (Auth::guest())
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/login"><span class="glyphicon glyphicon-lock"></span> Sign In </a></li>
          <li><a href="/register"><span class="glyphicon glyphicon-edit"></span> Register</a></li>
        </ul>

@elseif(Auth::user())
@if(Auth::user()->isAdmin(true))
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/dash">Dashboard</a></li>
@endif
@if(Auth::user()->isCustomer(true))
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/{{$query2}}/customer/showedit">Profile</a></li>
@endif
@if(Auth::user()->isAgent(true))
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/dashboardagent">Dashboard</a></li>
@endif
          <li>
            <a href="{{ url('/logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                Logout
            </a>
          </li>
          <form id="logout-form" action="{{ url('/logout') }}" method="POST">
            {{ csrf_field() }}
          </form>
        </ul>
@endif
      </div>
    </nav>

  <!-- Navigation Bar Menu -->
    <nav class="navbar navbar-menu navbar-inverse">
      <div class="container container-menu">
        <ul class="nav navbar-nav navbar-right">
          <li class="navbar-padding">
            <a class="home" id="home" role="button" href="{{url('/')}}">HOME</a>
          </li>
          <li class="navbar-padding">
            <a href="#">DESTINATIONS</a>
          </li>
          <li class="navbar-padding">
            <a href="#">TRAVEL STYLES</a>
          </li>
          <li class="navbar-padding">
            <a href="#">SPECIALS</a>
          </li>
          <li class="navbar-padding">
            <a href="#">BLOG</a>
          </li>
          <li>
            <a href="#">CONTACT</a>
          </li>
        </ul>
      </div>
    </nav>
  </head>
@yield('content')
<!-- Footer -->
  <div class="container-full">
    <div class="footer-background">
      <!-- Footer Menu -->
      <div class="container">
        <div class="row">
          <!-- Contact Us -->
          <div class="col-md-3 col-sm-3 col-xs-3">
            <p class="title-subfooter"><b>CONTACT US</b></p><br /><br />
            <table class="footer-link" border="0">
              <tr>
                <td><li><i class="image-contact fa fa-paper-plane fa-lg" aria-hidden="true"></i></li></td>
                <td><p class="text-subfooter">19 Charlotte Street, Toronto, Ontario, M5V 2H5</p></td>
              </tr>
              <tr>
                <td><li><i class="image-contact fa fa-envelope-o fa-lg" aria-hidden="true"></i></li></td>
                <td><p class="text-subfooter">travel@gadventures.com</p></td>
              </tr>

              <tr>
                <td><li><i class="image-contact contact-image glyphicon glyphicon-earphone "></i></li></td>
                <td><p class="text-subfooter">+001 666 8989 55</p></td>
              </tr>
            </table>
          </div>

          <!-- About Us -->
          <div class="col-md-2 col-sm-2 col-xs-2">
            <p class="title-subfooter"><b>ABOUT US</b></p><br /><br />
            <ul class="footer-link">
              <li>
                <a href="#">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <p class="text-aboutus"> Why Us</p>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <p class="text-aboutus"> Our Trips</p>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <p class="text-aboutus"> Responsible Business</p>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <p class="text-aboutus"> Our History</p>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <p class="text-aboutus"> Our Core Values</p>
                </a>
              </li>
            </ul>
          </div>

          <!-- Destinations -->
          <div class="col-md-2 col-sm-2 col-xs-2">
            <p class="title-subfooter"><b>DESTINATIONS</b></p><br /><br />
            <ul class="footer-link">
              <li>
                <a href="#">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <p class="text-aboutus"> Africa</p>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <p class="text-aboutus"> Asia</p>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <p class="text-aboutus"> Central America</p>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <p class="text-aboutus"> Europe</p>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <p class="text-aboutus"> Middle East</p>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <p class="text-aboutus"> North America</p>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <p class="text-aboutus"> Oceania</p>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <p class="text-aboutus"> South America</p>
                </a>
              </li>
            </ul>
          </div>

          <!-- Design Themes -->
          <div class="col-md-2 col-sm-2 col-xs-2">
            <p class="title-subfooter"><b>DESIGN THEMES</b></p><br /><br />
            <ul class="footer-link">
              <li>
                <a href="#">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <p class="text-aboutus"> Adventure</p>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <p class="text-aboutus"> Hiking and Camping</p>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <p class="text-aboutus"> Walking and Trekking</p>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <p class="text-aboutus"> Safari Trip</p>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <p class="text-aboutus"> Polar</p>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <p class="text-aboutus"> Sailing</p>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <p class="text-aboutus"> Climbing</p>
                </a>
              </li>
            </ul>
          </div>

          <!-- NEKANEKA Latest Tweets -->
          <div class="col-md-3 col-sm-3 col-xs-3">
            <p class="title-subfooter"><b>LATEST TWEET</b></p><br /><br />
            <table class="footer-link" border="0">
              <tr>
                <td><li><i class="fa fa-twitter fa-2x live-tweet" aria-hidden="true"></i></li></td>
                <td><p class="text-subfooter">@ThemeAdventures Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p></td>
              </tr>
              <tr>
                <td><li><i class="fa fa-twitter fa-2x live-tweet" aria-hidden="true"></i></li></td>
                <td><p class="text-subfooter">@ThemeAdventures Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p></td>
              </tr>
            </table>
          </div>

          <div class="row">
            <!-- Social Media Icon -->
            <div class="col-md-6 col-sm-6 col-xs-6">
              <div class="socialmedia-box">
                <div class="socialmedia-icon">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </div>
              </div>
              <div class="socialmedia-box">
                <div class="socialmedia-icon">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </div>
              </div>
              <div class="socialmedia-box" style="position:relative;top:2px !important;">
                <div class="socialmedia-icon">
                  <i class="ti-google" aria-hidden="true"></i>
                </div>
              </div>
              <div class="socialmedia-box">
                <div class="socialmedia-icon">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </div>
              </div>
              <div class="socialmedia-box">
                <div class="socialmedia-icon">
                  <i class="fa fa-rss" aria-hidden="true"></i>
                </div>
              </div>
            </div>
            <!-- Payment Support -->
            <div class="col-md-6 col-sm-6 col-xs-6">
              <ul class="footer-link">
                <div class="payment-position pull-right">
                  <li class="payment-support"><i class="fa fa-cc-amex fa-3x" aria-hidden="true"></i></li>
                  <li class="payment-support"><i class="fa fa-cc-mastercard fa-3x" aria-hidden="true"></i></li>
                  <li class="payment-support"><i class="fa fa-cc-paypal fa-3x" aria-hidden="true"></i></li>
                  <li class="payment-support"><i class="fa fa-cc-visa fa-3x" aria-hidden="true"></i></li>
                </div>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-fixed-bottom navbar-light bg-faded">
      <div class="container">
        <div class="row">
          <div class="navbar-bottom pull-right">
            <ul class="bottombar-menu">
              <li>
                <a href="#">HOME</a>
              </li>
              <li>
                <a href="#">DESTINATIONS</a>
              </li>
              <li>
                <a href="#">TRAVEL STYLES</a>
              </li>
              <li>
                <a href="#">SPECIALS</a>
              </li>
              <li>
                <a href="#">BLOG</a>
              </li>
              <li>
                <a href="#">CONTACT US</a>
              </li>
            </ul>
          </div>
          <div class="navbar-bottom pull-left">
            <p class="copyright">Copyright © 2015 Andriewid. All rights reserved.</p>
          </div>
        </div>
      </div>
    </nav>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

  <script type="text/javascript" href="{{ URL::asset('assets/js/jquery.js') }}"></script>

  <script>
    var resizefunc = [];
  </script>
</html>
