<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
        <titlee>Yummy Hut Packages</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
       
        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
        <link rel="stylesheet" href="fonts/beyond_the_mountains-webfont.css" type="text/css"/>

        <!-- Stylesheets -->
        <link href="plugin-frameworks/bootstrap.min.css" rel="stylesheet">
        <link href="plugin-frameworks/swiper.css" rel="stylesheet">
        <link href="fonts/ionicons.css" rel="stylesheet">
        <link href="/css/package.css" rel="stylesheet">
    
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
            integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }
    
            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>
        <!-- Custom styles for this template -->
        <link href="{{asset('css/home.css')}}" rel="stylesheet">
        
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark ">
        <!--<a class="navbar-brand" href="#">Yummy Hut</a>  class="navbar-brand" -->
        <!--<img class="bd-placeholder-img rounded" width="100" height="40" src="{{URL::asset('/img/logo.jpeg')}}" alt="profile Pic"  > -->
         <!--  <img class="bd-placeholder-img rounded" width="100" height="40" src="img/logo.jpeg"> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09"
          aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <!--mx-auto,ml-auto,mr-auto-->
        <div class="collapse navbar-collapse" id="navbarsExample09">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active ">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="/show-item">Foods and Beverages</a>
            </li>
    
            <li class="nav-item">
              <a class="nav-link" href="/packages"> Packages</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="/show-packages"> Catering</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/show-staff"> Our Staff</a>
            </li>
    
            <!--<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">Menu</a>
              <div class="dropdown-menu" aria-labelledby="dropdown09">
                <a class="dropdown-item" href="#">Meals</a>
                <a class="dropdown-item" href="#">Beverages</a>
                <a class="dropdown-item" href="#">Starters</a>
              </div>
            </li>-->
          </ul>
    
        <div>
          @if (Route::has('login'))
                  <div class="top-right links">
                      @auth
                      <a href="{{ url('/user') }}"><button type="button" class="btn btn-success" >User Dashboard</button></a>
                      <a href="{{ url('/admin') }}"><button type="button" class="btn btn-info" >Admin Dashboard</button></a>
                        @else
                          <a href="{{ route('login') }}"> <button type="button" class="btn btn-success" >Login</button></a>
    
                          @if (Route::has('register'))
                              <a href="{{ route('register') }}"> <button type="button" class="btn btn-info" >Register</button></a>
                          @endif
                      @endauth
                  </div>
              @endif
          
        </div>
      </div>
    </nav>
    
    <main  role="main">
        @yield('content')
    </main>
    <div class="bg-dark text-white">
        <footer class="container py-5">
            <div class="row">
                <div class="col-6 col-md">
                    <h5>Catering</h5>
                    <ul class="list-unstyled text-small">
                        <p>Yummy Hut catering service is a leading catering service in Colombo Sri Lanka, located in
                            Malabe. Yummy
                            Hut will take care of your birthday parties, wedding functions, almsgivings or any
                            corporate event in a
                            special way with delicious food and high quality catering service.</p>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Others</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Take away</a></li>
                        <li><a class="text-muted" href="#">Delivery</a></li>
                        <li><a class="text-muted" href="#">Food Menu</a></li>
                        <li><a class="text-muted" href="#">Offers</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Contact US</h5>
                    <ul class="list-unstyled text-small">
                        <p><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-fill"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                <path fill-rule="evenodd"
                                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                            </svg> 370 Kaduwela Rd, Malabe 10115</p>
                        <p> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-fill"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z" />
                            </svg> 070 300 3235 , 076 605 1555</p>
                        <p> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope-fill"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                            </svg> info@yummyhut.lk</p>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>About</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="https://yummyhut.lk/">Restaurant</a></li>
                        <li><a class="text-muted" href="#">Locations</a></li>
                        <li><a class="text-muted" href="#">Privacy</a></li>
                        <li><a class="text-muted" href="#">Terms</a></li>
                    </ul>
                </div>
                <div class="container">
                    <p class="float-right">
                        <a href="#">Back to top</a>
                    </p>
                </div>
            </div>
            <p>&copy; Copyright © 2020 Yummy Hut Food & Catering - All Rights Reserved &middot; <a
                    href="#">Privacy</a>
                &middot; <a href="#">Terms</a></p>
        </footer>
    </div>


</main>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>

</body>
</html>