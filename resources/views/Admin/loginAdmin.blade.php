<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>ProFix || Admin </title>

  <!-- Favicons -->
  <link href="{{asset('Admin/img/favicon.png')}}" rel="icon">
  <link href="{{asset('Admin/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{asset('Admin/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!--external css-->
  <link href="{{asset('Admin/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{{asset('Admin/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('Admin/css/style-responsive.css') }}" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
 <!--header start-->
<!--header start-->
<header class="header black-bg">
  <div class="sidebar-toggle-box">
    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
  </div>
  <!--logo start-->
  <a href="{{route('indexAdmin')}}" class="logo"><b>Pro<span>FIX</span></b></a>
  <!--logo end-->
  <div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
     
      <!-- settings end -->
      
          
      <!-- inbox dropdown end -->
      
  </div>
  <div class="top-menu">
    <ul class="nav pull-right top-menu">
      <li><a class="logout" href="{{route('loginAdmin')}}">Logout</a></li>
    </ul>
  </div>
</header>
<!--header end-->
<!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->
<!--sidebar start-->
<aside>
  <div id="sidebar" class="nav-collapse ">
    <!-- sidebar menu start-->
    <ul class="sidebar-menu" id="nav-accordion">
      <p class="centered"><a href="{{route('indexAdmin')}}"><img src="{{asset('Admin/img/ui-sam.jpg')}}" class="img-circle" width="80"></a></p>
      <h5 class="centered">Ahmed Alaa</h5>
      <li class="mt">
        <a class="active" href="{{route('indexAdmin')}}">
          <i class="fa fa-dashboard"></i>
          <span>Dashboard</span>
          </a>
      </li>
      
     
      <li class="sub-menu">
        <a href="javascript:;">
          <i class="fa fa-book"></i>
          <span>Extra Pages</span>
          </a>
        <ul class="sub">
        
          <li><a href="{{route('loginAdmin')}}">Login</a></li>
         
        </ul>
      </li>
     
      <li class="sub-menu">
        <a href="javascript:;">
          <i class="fa fa-th"></i>
          <span>Data Tables</span>
          </a>
        <ul class="sub">
        <li><a href="{{route('customers')}}">Orders</a></li>
              <li><a href="{{route('technicians')}}">Technicians</a></li>
            
        </ul>
      </li>
     
      
     
      <li>
      <a href="{{route('maps')}}">
          <i class="fa fa-map-marker"></i>
          <span>Google Maps </span>
          </a>
      </li>
    </ul>
    <!-- sidebar menu end-->
  </div>
</aside>
<!--sidebar end-->
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="{{route('indexAdmin')}}">
        <h2 class="form-login-heading">sign in now</h2>
        <div class="login-wrap">
          <input type="text" class="form-control" placeholder="User ID" autofocus>
          <br>
          <input type="password" class="form-control" placeholder="Password">
          <label class="checkbox">
            <input type="checkbox" value="remember-me" style="margin-left:5px">&nbsp &nbsp   &nbsp  &nbsp Remember me
            <span class="pull-right">
            <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
            </span>
            </label>
          <button class="btn btn-theme btn-block" href="{{route('indexAdmin')}}" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
          <hr>
          <div class="login-social-link centered">
            <p>or you can sign in via your social network</p>
            <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
            <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
          </div>
          <div class="registration">
            Don't have an account yet?<br/>
            <a class="" href="#">
              Create an account
              </a>
          </div>
        </div>
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Forgot Password ?</h4>
              </div>
              <div class="modal-body">
                <p>Enter your e-mail address below to reset your password.</p>
                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
              </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-theme" type="button">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->
      </form>
    </div>
  </div>
 <!-- js placed at the end of the document so the pages load faster -->
 <script src="{{asset('Admin/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('Admin/lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script class="include" type="text/javascript" src="{{asset('Admin/lib/jquery.dcjqaccordion.2.7.js')}}"></script>
  <script src="{{asset('Admin/lib/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('Admin/lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="{{asset('Admin/lib/common-scripts.js')}}"></script>
  <!--script for this page-->
  <script>
    $.backstretch("img/login-bg.jpg", {
      speed: 500
    });
  </script>
</body>

</html>
