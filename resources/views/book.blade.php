<!DOCTYPE html>
<html>
    <head>
        <title> ProFix | Book </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{asset('css/book.css') }}">
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


        <div class="data">
          <div class="book">
              <div class="calendar">

              <img src="{{asset('images/calendar.png')}}">
                  
                  <span> Schedule a service </span>
              </div>
              <div class="name">
                  <input type="text" name="name" class="input-name" placeholder="Name*">
              </div>

              <div class="mail">
                  <input type="email" name="mail" class="input-mail" placeholder="Mail*">
              </div>

              <div class="phone">
                  <input type="text" name="number" class="input-phone" placeholder="Phone*">
              </div>

              <div class="address">
                  <input type="text" name="address" class="input-address" placeholder="Address*">
              </div>
              <select name="special"  class="choice">
                <option selected disabled>  Choose a special  </option>
                <option> Air Conditioning </option>
                <option> Carpentart </option>
                <option> Electrician </option>
                <option> Painting </option>
                <option> Plumbing </option>
                <option> Glass & Aluminium </option>
            </select>

              <div class="date">
                  <input type="date" name="date" class="input-date">
              </div>

              <div class="time">
                  <input type="time" name="time" class="input-time">
              </div>

              <div class="schedule">
                  <a href="#"> Book now! </a>
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