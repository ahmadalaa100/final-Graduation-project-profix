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
  <link href="{{asset('Admin/img/p.jpg')}}" rel="icon">
  <link href="{{asset('Admin/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{asset('Admin/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!--external css-->
  <link href="{{asset('Admin/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="{{asset('Admin/css/style.css') }}">
  
  <link href="{{asset('Admin/css/style-responsive.css') }}" rel="stylesheet">
  <!-- =======================================================
   
  ======================================================= -->
  
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
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
        <p class="centered"><a href="{{route('indexAdmin')}}"><img src="{{asset('Admin/img/p.png')}}" class="img-circle" width="80"></a></p>
        <h5 class="centered">ProFix</h5>
        <br>
        
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
              <li><a href="{{route('delegatetable')}}">delegate</a></li>
               
           
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
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading">
                Google Map with Loaction List
              </header>
              <div class="panel-body">
                <div id="gmap-list"></div>
              </div>
            </section>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading">
                Google Map with Tab Location
              </header>
              <div class="panel-body">
                <div id="controls-tabs"></div>
                <div id="info"></div>
                <div id="gmap-tabs"></div>
              </div>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    
  </section>
 <!-- js placed at the end of the document so the pages load faster -->
 <script src="{{asset('Admin/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('Admin/lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script class="include" type="text/javascript" src="{{asset('Admin/lib/jquery.dcjqaccordion.2.7.js')}}"></script>
  <script src="{{asset('Admin/lib/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('Admin/lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="{{asset('Admin/lib/common-scripts.js')}}"></script>
  <!--script for this page-->
  
  <!--Google Map-->
  <script src="http://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.7"></script>
  <script src="{{asset('Adminlib/google-maps/maplace.js')}}"></script>
  <script src="{{asset('Admin/lib/google-maps/data/points.js')}}"></script>
  <script>
    //ul list example
    new Maplace({
      locations: LocsB,
      map_div: '#gmap-list',
      controls_type: 'list',
      controls_title: 'Choose a location:'
    }).Load();

    new Maplace({
      locations: LocsB,
      map_div: '#gmap-tabs',
      controls_div: '#controls-tabs',
      controls_type: 'list',
      controls_on_map: false,
      show_infowindow: false,
      start: 1,
      afterShow: function(index, location, marker) {
        $('#info').html(location.html);
      }
    }).Load();
  </script>

</body>

</html>
