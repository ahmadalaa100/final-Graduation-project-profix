<!DOCTYPE html>
<html>

    <head>
        <title >ProFix | Services </title>
        <meta charset="UTF-8">
   
        <link rel="stylesheet" href="{{asset('css/services.css') }}">
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


        <div class="middle-page">
        <!-- Banner -->
        <div class="service-banner">
        <img src="{{asset('images/test-service.png')}}">
            
            <span> Our Services : </span>
        </div>

        <!-- Services -->
         <!-- <div class="data"> -->
            <div class="line-one">
                 <div class="ac">
                 <img src="{{asset('images/ac.jpg')}}">
                     
                     <span> Air Conditioning </span>
                 </div>
             
                 <div class="carpentry">
                 <img src="{{asset('images/carpenter.jpeg')}}">
                     
                     <span> Carpentry </span>
                 </div>
             
             
                 <div class="electrician">
                 <img src="{{asset('images/electrician.jpg')}}">
                     
                      <span> Electrician </span>
                </div>
            </div>
        
            <div class="line-two">
               <div class="painting">
               <img src="{{asset('images/painting.jpg')}}">
                  
                   <span> Painting </span>
               </div>
           
               <div class="plumbing">
               <img src="{{asset('images/plumbing.jpg')}}">
                   
                   <span> Plumbing </span>
               </div>
           
               <div class="glass">
               <img src="{{asset('images/glass.jpg')}}">
                   
                   <span> Glass & Aluminium
               </div>
           
            </div>

            <div class="button">
                <form action="{{route('book')}}"   method="GET"> 
                    <input type="submit" name="submit" class="button" value="Book Now!">
              </form>
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