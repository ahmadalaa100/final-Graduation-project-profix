<!DOCTYPE html>
<html>
    <head>
        <title >ProFix | About </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{asset('css/about.css') }}">
      
        <link rel="icon" href="{{asset('images/logo/p.jpg')}}">
        
    </head>

    <body>
        
      <header>
            
                        
        <!-- Links & Logo -->
        <div class="logo">
          <img src="{{asset('images/logo/logo_transparent.png')}}">
       </div>
       
      
       <nav>
              <a href="{{route('index')}}"> Home </a>
              <a href="{{route('services')}}"> Services </a>
              <a href="{{route('about')}}"> About Us </a>
              <a href="{{route('contact')}}"> Contact </a>
         </nav>
<!--
        <div class="sign">
         <div class="signin">
             <a href="{{route('login')}}" > Sign In </a>
         </div>

         <div class="signup">
             <a href="{{route('signup')}}" > Not a member ? Sign Up </a>
         </div>
         <!-- <div class="header-text"> -->
           <!-- <h1 class="heading">ProFix </h1> -->
           <!-- <p class="header-paragraph"> -->
             <!-- "YOU USE IT WE FIX IT  " -->
           <!-- </p> -->
         <!-- </div> -->
      <!-- </div>-->
     </header>


     <!-- Data -->
        <div class="about">
          <div class="about-bg">
            <img src="{{asset('images/1.jpg')}}" alt="About us image" class="about-image">
          </div>
          <div class="about-text">
            <p> About Us </p>
            <span>ProFix is a leading Website that can help you to book your maintenance services and civil works in less than a minute. 
              All you need is to submit a request through the Website for the job you want to be done in your home or office, 
              and will connect you with qualified specialist from trusted local professionals.
               We use technology to deliver high-quality Specialist to save your time and money.
           </span>
          </div>
        </div>

        <div class="mission">
          <div class="mission-bg">
            <img  src="{{asset('images/2.jpg')}}" alt="Our Mission Image" class="mission-image">
          </div>

          <div class="mission-text">
            <p> Our Mission </p>
            <span> This website helps in solving any defect of maintenance in  house .  
                We aim to help customers find trusted professional workers for all their service needed in the  maintenance field
            </span>
          </div>
        </div>


       <!-- Links in the footer -->
       <div class="footer">
        <div class="logo-footer">
          <img src="{{asset('images/logo/logo_transparent.png')}}">
        </div>

        <div class="social">
            <span>We are on social media : </span>
                <a href="https://www.facebook.com" target="_blank"> <img src= "{{asset('images/fbicon.png')}}"></a>
                <a href="https://www.instagram.com" target="_blank"> <img src="{{asset('images//insta.png')}}"> </a>
                <a href="https://www.twitter.com" target="_blank"> <img src="{{asset('images//twitter.png')}}"> </a>
            
        </div>

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