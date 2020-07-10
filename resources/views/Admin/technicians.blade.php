<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Admin | Technicians </title>

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
  <link href="{{asset('Admin/css/table-responsive.css') }}" rel="stylesheet">
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license
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
    <div class="nav notify-row" id="top_menu">
      <!--  notification start -->
      <ul class="nav top-menu">
       
        <!-- settings end -->
        
            
        <!-- inbox dropdown end -->
        
    </div>
    <div class="top-menu">
      <ul class="nav pull-right top-menu">
        <li> <a class="logout" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a></li>
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
      <!-- sidebar menu start-->
      <ul class="sidebar-menu" id="nav-accordion">
        <p class="centered"><a href="{{route('indexAdmin')}}"><img src="{{asset('Admin/img/pro.png')}}" class="img-circle" width="80"></a></p>
        <h3 class="centered">ProFix</h3>
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
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i></i> Technicians</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <h4><i ></i> Technicians</h4>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>National_ID</th>
                      <th>Special</th>
                      <th>Phone</th>
                      <th>E-mail</th>
                      <th>Freeze/Activate</th>
                      <th>Update</th>
                      <th>delete</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($tech as $t)
                    <tr>
                      <td>{{$t->firstName}}</td>
                      <td>{{$t->lastName}} </td>
                      <td class="numeric">{{$t->national_id}}</td>
                      <td class="numeric">{{$t->spec}}</td>
                      <td class="numeric">{{$t->phone}}</td>
                      <td class="numeric">{{$t->mail}}</td>
                      @if($t->active == 1)
                      <td> <a href="{{route('techfreeze',['id' => $t->id])}}" class='btn btn-info' style="width:100px;">Freeze</a> </td>
                      <td> <a href="{{route('techedit',['id' => $t->id])}}" class='btn btn-primary'>Edit</a> </td>
                      <td> <a href="{{route('techdelete',['id' => $t->id])}}" class='btn btn-danger'>Delete</a> </td>
                     
                      @else
                      <td> <a href="{{route('techactive',['id' => $t->id])}}" class='btn btn-info'style="width:100px;">Activate</a> </td>
                      <td> <a href="{{route('techedit',['id' => $t->id])}}" class='btn btn-primary'>Edit</a> </td>
                      <td> <a href="{{route('techdelete',['id' => $t->id])}}" class='btn btn-danger'>Delete</a> </td>
                     
                      
                      @endif
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </section>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-lg-4 -->
        </div>
        {{$tech->links()}}
            
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
   
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{asset('Admin/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('Admin/lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script class="include" type="text/javascript" src="{{asset('Admin/lib/jquery.dcjqaccordion.2.7.js')}}"></script>
  <script src="{{asset('Admin/lib/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('Admin/lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="{{asset('Admin/lib/common-scripts.js')}}"></script>
  <!--script for this page-->
  <!--script for this page-->
</body>

</html>
