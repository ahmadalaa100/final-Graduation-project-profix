<!DOCTYPE html>
<html>
    <head>
        <title> ProFix | Book </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{asset('css/book.css') }}">
        <link rel="icon" href="{{asset('images/logo/p.jpg')}}">
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

        <form action="{{route('bookJob')}}" method="post">
            {{csrf_field()}}
            <div class="data">
            <div class="book">
                <div class="calendar">
                    <img src="{{asset('images/calendar.png')}}">
                    <span> Schedule a service </span>
                </div>
                <div class="name">
                    <input type="text" name="name" class="input-name" placeholder="Name*" required>
                </div>

                <div class="mail">
                    <input type="email" name="mail" class="input-mail" placeholder="Mail*" required>
                </div>

                <div class="phone">
                    <input type="text" name="phone" class="input-phone" placeholder="Phone*" required>
                </div>

                <div class="address">
                    <input type="text" name="address" class="input-address" placeholder="Address*" required>
                </div>
                <select name="spec"  class="choice" required>
                    <option selected disabled>  Choose a special  </option>
                    <option> Air Conditioning </option>
                    <option> Carpentary</option>
                    <option> Electrician </option>
                    <option> Painting </option>
                    <option> Plumbing </option>
                    <option> Glass & Aluminium </option>
                </select>
                <select name="pay"  class="choice" required>
                    <option selected disabled>  choose Payment type..  </option>
                    <option value='cash'> Cash</option>
                    <option value='visa'> Visa </option>
                    
                </select>
                <select name="tech"  class="choice" required>
                <option selected disabled>Choose Technicans . . .</option>

                <option value='0'>NONE</option>
                @foreach($tech as $t)
                    <option value="{{$t->id}}">{{$t->firstName . ' ' . $t->lastName . ' ' . $t->spec}}</option>
                @endforeach
                </select>

                <div class="date">
                    <input type="date" name="date" class="input-date" required>
                </div>
                
                
                <div class="time">
                    <input type="time" name="time" class="input-time" required>
                </div>
                
                <div class="photo">
                    <input type="file" name="photo" class="input-photo" placeholder="Insert Photo to your Problem" >
                </div>

                <div class="schedule">
                    <input type="submit" value="Book Now !" class="input-submit">
                </div>
                <input type="hidden" name="user_id" value='{{Auth::id()}}'>
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