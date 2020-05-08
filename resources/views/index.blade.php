<!DOCTYPE html>
<html>
    <head>
        <title> ProFix | Home </title>
        <meta charset="UTF-8">
      <!--  <link rel="stylesheet" href="style.css">-->
        <link rel="stylesheet" href="{{asset('css/style.css') }}">
        <link rel="icon" href="{{asset('images/logo/logo-test.png')}}">
        <!-- Font-style (Josefin) for (the text-wefix) -->
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    </head>

    <body>
        <header>
            
            <!-- Links & Logo -->
            <div class="logo">
            <img src="{{asset('images/logo/logo_transparent.png')}}">
            <!--   <img src="images/logo/logo_transparent.png">-->
            </div>
            
            <div class="links-head">
               <nav>
                    <a href="{{route('index')}}"> Home </a>
                    <a href="{{route('services')}}"> Services </a>
                    <a href="{{route('about')}}"> About Us </a>
                    <a href="{{route('contact')}}"> Contact </a>
                </nav>
            </div>

            <div class="sign">
              <div class="signin">
                  <a href="{{route('login')}}"> Sign In </a>
              </div>

              <div class="signup">
                  <a href="{{route('signup')}}" > Not a member ? Sign Up </a>
              </div>
              <div class="header-text">
                <h1 class="heading">ProFix </h1>
                <p class="header-paragraph">
                  "YOU USE IT WE FIX IT  "
                </p>
              </div>
            </div>

        </header>


        <!-- Banner -->
        <div class="banner">
            <div class="banner-image">
          <!--  <img src="{{asset('images/test-banner.jpg')}}">-->
                <!-- <img src="images/test-banner1.jpg"> -->
            </div>
        </div>


        <!-- Fast & Reliable banner -->
        <div class="fast">
            <div class="we-fix">
            <img src="{{asset('images/logo/house.png')}}">
              <!--  <img src="images/logo/house.png">-->

                <!-- <img src="images/logo/we-fix.png"> -->
                <div class="text-wefix">
                 We’re your appliance and home <b>improvement experts.</b>
                 <p> Contact us today and our help is on the way!</p>
                </div>
            </div>

            
           <form action="{{route('book')}}"  method="POST"> 
            <input type="submit" name="submit" class="button" value="Book Now!">
            </form>

        </div>


        <!-- Our Core Value -->

       <!-- <div class="core-value">
            <img src="images/core-value.jpg">

        </div> -->

        <!-- Contact - US -->
        
            <div class="contact-text">
              <p class="title-contact"> Contact Us </p>
                Drop us a line or give us a ring.
                We love to hear from you and are happy to answer any questions
            </div>

            <div class="contact-us">
                <div class="phone">
                <img src="{{asset('images/phone.png')}}">
                  <!--<img src="images/phone.png">-->

                    <div class="text-phone">
                      <b>our phone</b> 
                      +2010123456789
                    </div>

                </div>

               <div class="address">
                  <!-- <img src="images/address.png">-->
                   <img src="{{asset('images/address.png')}}">
                   <div class="text-address">
                     <b> our address </b>
                     Tanta, El-Nady St.
                    </div>
                    
                </div>

                <div class="email">
                    <!--<img src="images/mail.png">-->
                    <img src="{{asset('images/mail.png')}}">
                    <div class="text-email">
                        <b> our mail </b>
                        info@example.com
                    </div>
                </div>

            </div> 

        <!-- Links in the footer -->
        <div class="footer4">
            <div class="logo-footer4">
               <!-- <img src="images/logo/logo_transparent.png">-->
                <img src="{{asset('images/logo/logo_transparent.png')}}">
            </div>

            <div class="social4">
                
        
                <a href="https://www.facebook.com" target="_blank"> <img src= "{{asset('images/fbicon.png')}}"></a>
                <a href="https://www.instagram.com" target="_blank"> <img src="{{asset('images//insta.png')}}"> </a>
                <a href="https://www.twitter.com" target="_blank"> <img src="{{asset('images//twitter.png')}}"> </a>
                
            </div>


            <span>We are on social media : </span>
           
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