<!DOCTYPE html>
<html>

    <head>
        <title >ProFix | Services </title>
        <meta charset="UTF-8">
   
        <link rel="stylesheet" href="{{asset('css/services.css') }}">
        <link rel="icon" href="images/logo/logo-test.png">
    </head>

    <body>

        <header>
            
                        
           <!-- Links & Logo -->
           <div class="logo">
              <img src="images/logo/logo_transparent.png">
          </div>
          
          <div class="links-head">
             <nav>
                  <a href="../index.blade.php" class="home"> Home </a>
                  <a href="services.blade.php"> Services </a>
                  <a href="about.blade.php"> About Us </a>
                  <a href="contact.blade.php"> Contact </a>
              </nav>

            </div>
       

        </header>


        <div class="middle-page">
        <!-- Banner -->
        <div class="service-banner">
            <img src="images/test-service.png">
            <span> Our Services : </span>
        </div>

        <!-- Services -->
         <!-- <div class="data"> -->
            <div class="line-one">
                 <div class="ac">
                     <img src="images/ac.jpg">
                     <span> Air Conditioning </span>
                 </div>
             
                 <div class="carpentry">
                     <img src="images/carpenter.jpeg">
                     <span> Carpentry </span>
                 </div>
             
             
                 <div class="electrician">
                     <img src="images/electrician.jpg">
                      <span> Electrician </span>
                </div>
            </div>
        
            <div class="line-two">
               <div class="painting">
                   <img src="images/painting.jpg">
                   <span> Painting </span>
               </div>
           
               <div class="plumbing">
                   <img src="images/plumbing.jpg">
                   <span> Plumbing </span>
               </div>
           
               <div class="glass">
                   <img src="images/glass.jpg">
                   <span> Glass & Aluminium
               </div>
           
            </div>

            <div class="button">
                <form action="book.blade.php" target="_blank" method="POST"> 
                    <input type="submit" name="submit" class="button" value="Book Now!">
              </form>
          </div>
       

    </div>


          <!-- Links in the footer -->
        <div class="footer4">
            <div class="logo-footer4">
                <img src="images/logo/logo_transparent.png">
            </div>

            <div class="social4">
                
                <!-- <div class="fb"> -->
                <a href="https://www.facebook.com" target="_blank"> <img src="images/fbicon.png"></a>
                <!-- <div class="fb-text"> -->
                    <!-- Visit Our Facebook Page  -->
                <!-- </div> -->
                <!-- </div> -->
                <a href="https://www.instagram.com" target="_blank"> <img src="images/insta.png"> </a>
                <a href="https://www.twitter.com" target="_blank"> <img src="images/twitter.png"> </a>
                
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