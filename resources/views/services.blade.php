<!DOCTYPE html>
<html>

    <head>
        <title >ProFix | Services </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{asset('css/services.css') }}">
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
                    <a href="{{route('customerUI')}}"> My Orders </a>
           </nav>
<!--
           <div class="sign">
            <div class="signin">
                <a href="{{route('login')}}" target="_self"> Sign In </a>
            </div>

            <div class="signup">
                <a href="{{route('signup')}}" target="_self"> Not a member ? Sign Up </a>
            </div>
            <div class="header-text"> -->
              <!-- <h1 class="heading">ProFix </h1> -->
              <!-- <p class="header-paragraph"> -->
                <!-- "YOU USE IT WE FIX IT  " -->
              <!-- </p> -->
            <!-- </div>
          </div>
        -->

        </header>


        <div class="middle-page">
        <!-- Banner -->
        <div class="service-banner">
            <img src="{{asset('images/test-service.png')}}">
            <span> Our Services : </span>
        </div>

        <!-- Services -->
        <div class="gallery">

            <div class="image" id="image1">
                <img src="{{asset('images/ac.jpg')}}">
                <div class="text">
                    
                   <span><br> <br>  <br>  <br>  Air Conditioning </span>
               </div>
            </div>

            <div class="image" id="image2">
                <img src="{{asset('images/carpenter.jpeg')}}">
              <div class="text">
                 <span><br> <br>  <br>  <br>  Carpentry </span>
             </div>
           </div>

            <div class="image" id="image3">
                <img src="{{asset('images/electrician.jpg')}}">
               <div class="text">
                  <span> <br> <br>  <br>  <br> Electrician </span>
              </div>
           </div>

           
           <div class="image" id="image4">
            <img src="{{asset('images/painting.jpg')}}">
               <div class="text">
                  <span> <br> <br>  <br>  <br> Painting </span>
              </div>
           </div>

           
            <div class="image" id="image5">
                <img src="{{asset('images/plumbing.jpg')}}">
               <div class="text">
                  <span><br> <br>  <br>  <br>  Plumbing </span>
              </div>
            </div>
            
            <div class="image" id="image6">
                <img src="{{asset('images/glass.jpg')}}">
                <div class="text">
                   <span> <br> <br>  <br>  <br> Glass & Aluminium </span>
               </div>
            </div>

        </div>
            

        <div class="button">
            <form action="{{route('book')}}" method="GET"> 
                <input type="submit" name="submit" class="button" value="Book Now!">
            </form>
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