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
  <link rel="stylesheet" type="text/css" href="{{asset('Admin/css/zabuto_calendar.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('Admin/lib/gritter/css/jquery.gritter.css')}}" />
  <!-- Custom styles for this template -->
  <link href="{{asset('Admin/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('Admin/css/style-responsive.css')}}" rel="stylesheet">
  <script src="{{asset('Admin/lib/chart-master/Chart.js')}}"></script>

  <!-- =======================================================
    
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
     <!--logo start-->
    <a href="{{route('indexAdmin')}}" class="logo"><b>Pro<span>FIX</span></b></a>
    <!--logo end-->
        <!--  notification start -->
        <ul class="nav top-menu">
         
          <!-- settings end -->
          
              
          <!-- inbox dropdown end -->
          
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li> 
              <a class="logout" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>
            </li>
          <li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </li>
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
    
    <ul class="sidebar-menu" id="nav-accordion">
      <p class="centered"><a href="{{route('indexAdmin')}}"><img src="{{asset('Admin/img/p.png')}}" class="img-circle" width="80"></a></p>
      <h5 class="centered">ProFix</h5>
      <br>
        

      <li class="mt">
        <a class="active"  href="{{route('indexAdmin')}}">
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

        <li><a href="{{route('Addtech')}}">Add Technician</a></li>
        <li><a href="{{route('register')}}">Add Delegate</a></li>
            <li><a href="{{route('register')}}">Add Admin</a></li>
             
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


<!--
      <li>
        <a href="{{route('maps')}}">
          <i class="fa fa-map-marker"></i>
          <span>Google Maps </span>
          </a>
      </li>-->
      <li>
        <a href="{{route('customers')}}">
          <i class="fa fa-book"></i>
          <span>Data </span>
          </a>
      </li>
    </ul>
   
  </div>
</aside>
<!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
       <div>
       <img  src="{{asset('images/logo/22.png')}}" style="margin-left:500px;
      width:720px;height:720px" >
       </div>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
 
</body>

</html>
