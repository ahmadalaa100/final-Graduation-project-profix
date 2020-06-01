<!DOCTYPE html>
<html>
    <head>
        <title> ProFix | Home </title>
        <meta charset="UTF-8">
        <link rel="icon" href="{{asset('images/logo/p.jpg')}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <script src="{{asset('js/bootstrap.js')}}"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Font-style (Josefin) for (the text-wefix) -->
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/style.css') }}">

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
           
            <div class="sign">
              <div class="signin">
                  <a  href="{{route('login')}}" > Sign In </a>
              </div>

              <div class="signup">
                  <a href="{{route('signup')}}" > Not a member ? Sign Up </a>
             
            </div>
            <!--
            <div class="header-text"> 
               <h1 class="heading">ProFix </h1> 
                <p class="header-paragraph"> 
                  "YOU USE IT WE FIX IT  " 
                </p> 
               </div> -->
        </header>

       <!-- Banner -->
      <div class="banner">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('images/1.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/image2c1.jpeg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/IMG_0850.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/test2.jpg')}}" class="d-block w-100" alt="...">
              </div>
             
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            </div>
              
          </div>
          
      <!--    <div class="banner-image">
             
          </div>-->
     </div>

      <!-- Fast & Reliable banner -->
      <div class="fast">
            <div class="we-fix">

                <div class="wefix-image">
                  <img src="{{asset('images/logo/house.png')}}">
                </div> 

                <div class="text-wefix">
                We’re your appliance and home <b>improvement experts.</b>
                <p> Contact us today and our help is on the way!</p>
                </div>

            </div>

            <div class="fix-button">
               <form action="{{route('book')}}"  method="GET"> 
                   <input type="submit" name="submit" class="button" value="Book Now!">
               </form>
           </div>
      </div>
       <!-- Contact - US -->
    
       <div class="contact-text">
           <p class="title-contact"> Contact Us </p>
         Drop us a line or give us a ring.
         We love to hear from you and are happy to answer any questions
       </div>

      <div class="contact-bg" style="background-image: url('{{ asset('images/contact-bg.png')}}');">
           <div class="contact-us">
               <div class="phone">
                <img src="{{asset('images/phone.png')}}">
                    <b> Our Phone </b>
                    +201234567890
               </div>
              <div class="address">
                <img src="{{asset('images/address.png')}}">
                   <b> our address </b>
                   Tanta, El-Nady St.
               </div>
               <div class="email">
                <img src="{{asset('images/mail.png')}}">
                   <b> our mail </b>
                   info@example.com
               </div>
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
            <div class="join">
                <span> Interested to join our community ? </span>
                <a href="{{route('apply')}}" > Apply Now !</a>
            </div>
            <div class="copyright">
                
                 <div class="copy-text">
                  &#169; 2020 All Rights Reserved   |   ProFix 
                 </div>
            </div>
        </footer>            
    </body>
</html>