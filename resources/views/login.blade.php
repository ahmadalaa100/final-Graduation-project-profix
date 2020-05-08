<html>
<head>
<title> ProFix | LOGIN </title>
<link rel="icon" href="{{asset('images/logo/logo-test.png')}}">
<link rel="stylesheet" href="{{asset('css/login.css') }}">

</head>
<body>
    <header>
            
                        
        <!-- Links & Logo -->
        <div class="logo">
        <img src="{{asset('images/logo/logo_transparent.png')}}">
       </div>
       
       <div class="links-head">
          <nav>
          <a href="{{route('index')}}"> Home </a>
                    <a href="{{route('services')}}"> Services </a>
                    <a href="{{route('about')}}"> About Us </a>
                    <a href="{{route('contact')}}"> Contact </a>
           </nav>

         </div>
    

     </header>
    <div class="loginbox">
    <img src="{{asset('images/avatar1.png')}}" class="avatar">
    
        <h1>Login Here</h1>
        <form>
            <p>Username</p>
            <input type="text" name="" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="" placeholder="Enter Password">
            <input type="submit" name="" value="Login">
            <a href="#">Forgot your password?</a><br>
            <a href="{{route('signup')}}"  >Don't have an account?</a>
        </form>
        
    </div>
    <div class="footer4">
        <div class="logo-footer4">
        <img src="{{asset('images/logo/logo_transparent.png')}}">
        </div>

        <div class="social4">
            
            <!-- <div class="fb"> -->
            <a href="https://www.facebook.com" target="_blank"> <img src= "{{asset('images/fbicon.png')}}"></a>
                <a href="https://www.instagram.com" target="_blank"> <img src="{{asset('images//insta.png')}}"> </a>
                <a href="https://www.twitter.com" target="_blank"> <img src="{{asset('images//twitter.png')}}"> </a>
            
        </div>


        <span>We are on social media : </span>
       
    </div>


    <footer>
        <div class="copyright">
            
        <div class="copy-text">
              &#169; 2020 All Rights Reserved   |   ProFix 
             </div>
        </div>

    </footer>
</body>
</html>