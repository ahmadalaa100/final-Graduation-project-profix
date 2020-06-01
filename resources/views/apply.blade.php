<!DOCTYPE html>
<html>
    <head>
        <title> ProFix | Join Us </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{asset('css/applynew.css') }}">
        <link rel="icon" href="{{asset('images/logo/p.jpg')}}">
        <!-- Font-style (Josefin) for (the text-wefix) -->
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
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


        <!-- Application Form -->
        <form action="{{route('applyTech')}}" method="post">
        {{csrf_field()}}
        <div class="data">
       <div class="book">
                <div class="calendar">
                  <!--  <img src="{{asset('images/calendar.png')}}">-->
                    <span>  Complete the form and Join Us ! </span>
                </div>
                <div class="name">
                    <input type="text" name="fname" class="input-name" placeholder="Enter Your first name*" required>
                </div>

                <div class="name">
                    <input type="text" name="lname" class="input-name" placeholder="Enter Your last name*" required>
                </div>

                <div class="phone">
                    <input type="text" name="id" class="input-phone" placeholder="Enter Your National ID *" required>
                </div>

                <select name="spec"  class="choice" required>
                    <option selected disabled>  Choose Your  special  </option>
                    <option> Air Conditioning </option>
                    <option> Carpentary</option>
                    <option> Electrician </option>
                    <option> Painting </option>
                    <option> Plumbing </option>
                    <option> Glass & Aluminium </option>
                </select>
                
    
            <div class="phone">
                    <input type="text" name="phone" class="input-phone" placeholder="Enter Your Phone *" required>
                </div>
                <div class="mail">
                    <input type="email" name="mail" class="input-mail" placeholder="Enter Your Mail *"required>
                </div>
        
            <div class="button">
                <input type="submit" value="Apply" class="input-submit">
            </div>
        </div>
        </form>
        
        
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