<html>
<head>
<title> ProFix | SIGN UP </title>   
<link rel="icon" href="{{asset('images/logo/p.jpg')}}">
<link rel="stylesheet" href="{{asset('css/signup.css') }}">
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
    <div id="login-box">
      <div class="left-box">
        <h1> Sign Up</h1>
          
          <input type="text" name="username" placeholder="Username"/>
          <input type="text" name="email" placeholder="Email"/>
          <input type="password" name="password" placeholder="Password"/>
        
          <input type="password" name="password2" placeholder="Retype password"/>
        
          <input type="submit" name="signup-button" value="Sign Up"/>
        
        </div>
        <div class="right-box">
          <span class="signinwith">Sign in with<br/>Social Network     </span>
        
        <button class="social facebook">Log in with Facebook</button>    
        <button class="social twitter">Log in with Twitter</button> 
        <button class="social google">Log in with Google+</button> 
            
        
        </div>
        <div class="or">OR</div>
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