

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
  <link href="{{asset('Admin/css/apply1.css')}}" rel="stylesheet">

  
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
          <p class="centered"><a href="{{route('indexAdmin')}}"><img src="{{asset('Admin/img/logo.jpg')}}" class="img-circle" width="80"></a></p>
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
    <div class="container">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <h1 class='text-center'>Update Delegate</h1>
            <br>
            <br>
    <form  class='forml' >
           
            <div class="data">
           
                

                    <div class="fname">
                        <label>  Name : </label>
                        <input type="text" 
                         name="fname" placeholder="ex: Ahmed" class="input-fname"  required style="margin-left:35px;"> 
                    </div>
<!--
                    <div class="lname">
                        <label> Last Name : </label>
                        <input type="text" 
                         name="lname" placeholder="ex: Ali" class="input-lname"required>
                    </div>

                    <div class="id">
                        <label> National ID : </label>
                        <input type="text" 
                         name="nid" placeholder="ex:298012345678912" class="input-id"required>
                    </div>

                    <div class="specialization">
                        <label> Specialization : </label>
                    <select name="special[]"required>
                        <option selected disabled>  </option>
                        <option value="A/C Specialist"> A/C Specialist </option>
                        <option value="Carpenter"> Carpenter </option>
                        <option value="Electrician"> Electrician </option>
                        <option value="Painter"> Painter </option>
                        <option value="Plumber"> Plumber </option>
                        <option value="Glass & Aluminium"> Glass & Aluminium </option>
                    </select>
                    </div>
-->

                    <div class="number">
                        <label> Phone : </label>
                        <input type="text"  name="number" class="input-number" placeholder="ex: 01234567890"required  style="margin-left:32px;">
                    </div>

                    <div class="email">
                        <label> E-mail : </label>
                        <input type="email" name="email" class="input-email" placeholder="ex: info@example.com"required>
                    </div>
<!--
                    <div class="address">
                        <label> Address : </label>
                        <input type="text" name="address" class="input-address" placeholder="ex: Tanta, El-Nadi ST."required>
                    </div>

                    <div class="birth">
                        <label> Birthdate : </label>
                        <input type="date"  name="date" class="input-birth" placeholder="ex: 1/1/1998"required>
                    </div>
-->
                    <div >
                        <button type="submit" name="send" value="send" style="
                                    height: 50px;
                                    text-align: center;
                                    background-color: #103f7e;
                                    position: relative;
                                    left: 250px;
                                    border-radius: 10px;
                                    margin-top: 20px;
                                    margin-bottom:20px;
                                    border:none;
                                    padding: 10px 60px;
                                    color:white;
                                    font-size:15px;
                                    font-weight:bold;
                                    cursor: pointer; 
                                    margin-left:240px   " >Update !</button>
             
                      </div>
             </form>
</div>
    
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
  
</body>

</html>
