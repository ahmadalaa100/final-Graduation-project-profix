<!DOCTYPE html>
<html>
    <head>
        <title> ProFix | Join Us </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{asset('css/apply.css') }}">
        <link rel="icon" href="{{asset('images/logo/logo-test.png')}}">
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
            <div class="text">
               Complete the form and Join Us !
            </div>
            <div class="fname">
                <label> First Name : </label>
                <input type="text" name="fname" placeholder="ex: Ahmed" class="input-fname">
            </div>

            <div class="lname">
                <label> Last Name : </label>
                <input type="text" name="lname" placeholder="ex: Ali" class="input-lname">
            </div>

            <div class="id">
                <label> National ID : </label>
                <input type="text" name="id" placeholder="ex:298012345678912" class="input-id">
            </div>

            <div class="specialization">
                <label> Your Specialization : </label>
               <select name="spec"  >
                   <option selected disabled> Select your specialization </option>
                   <option> A/C Specialist </option>
                   <option> Carpenter </option>
                   <option> Electrician </option>
                   <option> Painter </option>
                   <option> Plumber </option>
                   <option> Glass & Aluminium </option>
               </select>
            </div>

            <div class="number">
                <label> Mobile Number : </label>
                <input type="text" name="phone" class="input-number" placeholder="ex: 01234567890">
            </div>

            <div class="email">
                <label> E-mail : </label>
                <input type="email" name="mail" class="input-email" placeholder="ex: info@example.com">
            </div>
<!--
            <div class="address">
                <label> Address : </label>
                <input type="text" name="address" class="input-address" placeholder="ex: Tanta, El-Nadi ST.">
            </div>

            <div class="birth">
                <label> Birthdate : </label>
                <input type="date" name="date" class="input-birth" placeholder="ex: 1/1/1998">
            </div>

            <div class="photo">
                <label> Your Personal Photo : </label>
                <input type="file" name="photo" class="input-photo" >
            </div>

            <div class="certificate">
                <label> Criminal Record Certificate : </label>
                <input type="file" name="certificate" multiple class="input-certificate" >
            </div>
-->
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