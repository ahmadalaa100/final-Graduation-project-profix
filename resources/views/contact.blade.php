<!DOCTYPE html>
<html>
    <head>
        <title> ProFix | Contact Us </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{asset('css/contact.css') }}">
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
        
        <!-- Banner 
        <div class="banner">
            <img src="../images/contact.jpg">
        </div>
    -->

        <!-- Contact Area -->

        <div class="contact">
            <div class="info">
                <div class="logo-contact">
                    
                    <img src="{{asset('images/logo/logo-test.png')}}">
                </div>

                <div class="phone">
                 
                    <img src="{{asset('images/phoneicon.png')}}">
                    <span> Phone : +20123456789  </span>
                </div>

                <div class="address">
                 
                    <img src="{{asset('images/addressicon.png')}}">
                    <span> Tanta </span>
                </div>

                <div class="mail">
                  
                    <img src="{{asset('images/mailicon.png')}}">
                    <span> info@mail.com </span>
                </div>
            </div>


            <div class="input-contact">
                <div class="name">
                    <input type="text" name="name"  class="input-name" placeholder="Name * ">
                </div> 

                <div class="email">
                    <input type="email" name="mail" class="input-mail" placeholder=" E-mail * ">
                </div>

                <div class="subject">
                    <input type="text" name="subject" class="input-subject" placeholder="Subject * ">
                </div>

                <div class="message">
                <textarea cols="90" rows="10" class="input-message" placeholder="Message*"></textarea>
                </div>
            </div>
            
            <div class="button">
               <a href="#"> Send </a>
            </div>
        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d250.70692942209502!2d30.993490761689834!3d30.796157285384265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2seg!4v1585676856028!5m2!1sen!2seg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
            </iframe>
        </div>

        <!-- Footer -->
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