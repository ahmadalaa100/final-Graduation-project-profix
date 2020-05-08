<!DOCTYPE html>
<html>
    <head>
        <title >ProFix | About </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{asset('css/about.css') }}">
      
        <link rel="icon" href="{{asset('images/logo/logo-test.png')}}">
        
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


         <!-- Data -->
         <div class="data">
         <div class="about-bg">

            <div class="about">
                <img
                  
                  src="{{asset('images/1.jpg')}}"
                  alt="About us image"
                  class="about-image"
                />
                <div class="about-text">
                <p> About Us </p>
                <span>ProFix is a leading Website that can help you to book your maintenance services and civil works in less than a minute. 
                    All you need is to submit a request through the Website for the job you want to be done in your home or office, 
                    and will connect you with qualified specialist from trusted local professionals.
                     We use technology to deliver high-quality Specialist to save your time and money.
                </span>
              </div>
            </div>
          </div>


          <div class="mission-bg">

            <div class="mission">
                <img
                src="{{asset('images/2.jpg')}}"
                  alt="Our mission image"
                  class="mission-image"
                />
                <div class="mission-text">
                <p> Our Mission </p>
                <span> This website helps in solving any defect of maintenance in  house .  
                    We aim to help customers find trusted professional workers for all their service needed in the  maintenance field
                </span>
              </div>
            </div>
          </div>

        </div>


           <!-- Links in the footer -->
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