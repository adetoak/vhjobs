<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>vhjobs - Directory &amp; Listing Template</title> 

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('public/front/temp2/img/core-img/favicon.ico') }}">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/front/stylesheets/style.css') }}">

    <!-- Core Stylesheet -->
    <link href="{{ asset('public/front/temp2/css/style.css') }}" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="{{ asset('public/front/temp2/css/responsive/responsive.css') }}" rel="stylesheet">

    <!-- Custom Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/front/style.css') }}">

</head>

<body> 

    <!-- ***** Search Form Area ***** -->
    <div class="dorne-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form action="#" method="get">
                        <input type="search" name="caviarSearch" id="search" placeholder="Search Your Desire Destinations or Events">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg">
                        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('public/front/temp2/img/core-img/logo.png') }}" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <!-- Nav -->
                        <div class="collapse navbar-collapse" id="dorneNav">
                            <ul class="navbar-nav mr-auto" id="dorneMenu">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                                </li> 
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Jobs <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                        <a class="dropdown-item" href="{{ url('post-job') }}">Post a Job</a>
                                        <a class="dropdown-item" href="{{ url('job-requests') }}">Job requests</a> 
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Blog</a>
                                </li>
                                <div class="dorne-add-listings-btn">
                                    <a href="{{ url('add-service') }}" class="btn dorne-btn">NGN2,000</a>
                                </div>
                            </ul>
                            <!-- Search btn -->
                            <div class="dorne-search-btn">
                                <a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i> Search</a>
                            </div> 
                             @if (Auth::guest())    
                                <div class="dorne-signin-btn">
                                    <a href="{{ url('login') }}">Sign in</a>
                                </div>
                                <div class="dorne-signin-btn">
                                    <a href="{{ url('register') }}">Register</a>
                                </div>
                                @else 
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hi <strong>{{ Auth::user()->name }}!</strong> <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2"> 
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">Logout</a>
                                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            {{ csrf_field() }}
                                                        </form>
                                        <a class="dropdown-item" href="{{ url('profile') }}">Profile</a>
                                    </div>
                                </li> 
                                <!-- <div class="dorne-add-listings-btn">
                                    <a href="{{ url('add-service') }}" class="btn dorne-btn">NGN2,000</a>
                                </div> -->   
                                @endif      
                                <!-- Add listings btn -->
                                <div class="dorne-add-listings-btn">
                                    <a href="{{ url('add-service') }}" class="btn dorne-btn">+ Add Service</a>
                                </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    @yield('content')        
    
    

    <!-- ***** Clients Area Start ***** -->
   <!--  <div class="dorne-clients-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="clients-logo d-md-flex align-items-center justify-content-around">
                        <img src="{{ asset('public/front/temp2/img/clients-img/1.png') }}" alt="">
                        <img src="{{ asset('public/front/temp2/img/clients-img/2.png') }}" alt="">
                        <img src="{{ asset('public/front/temp2/img/clients-img/3.png') }}" alt="">
                        <img src="{{ asset('public/front/temp2/img/clients-img/4.png') }}" alt="">
                        <img src="{{ asset('public/front/temp2/img/clients-img/5.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- ***** Clients Area End ***** --> 
    <section class="flat-row v1 bg-theme">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="title-section">
                        <h1 class="title">Newsletter</h1>
                        <div class="sub-title">
                            Subscribe now and receive weekly newsletter with
                        </div>
                    </div>
                    <form id="subscribe-form" class="flat-mailchimp" method="post" action="#" data-mailchimp="true">
                        <div class="field clearfix" id="subscribe-content"> 
                            <p class="wrap-input-email">
                                <input type="text" tabindex="2" id="subscribe-email" name="subscribe-email" placeholder="Your Email Here">
                            </p>
                            <p class="wrap-btn">
                                <button type="button" id="subscribe-button" class=" subscribe-submit effect-button" title="Subscribe now">SUBSCRIBE</button>
                            </p>
                        </div>
                        <div id="subscribe-msg"></div>
                    </form>
                </div>
                <div class="col-lg-2">
                    <div class="flat-counter text-center">                            
                        <div class="content-counter">
                            <div class="icon-count">
                                <i class="ion-waterdrop"></i>
                            </div>
                            <div class="name-count">Listing</div>
                            <div class="numb-count" data-to="1897" data-speed="2000" data-waypoint-active="yes">1897</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="flat-counter text-center">                            
                        <div class="content-counter">
                            <div class="icon-count">
                                <i class="ion-pricetags"></i>
                            </div>
                            <div class="name-count">Categories</div>
                            <div class="numb-count" data-to="967" data-speed="2000" data-waypoint-active="yes">967</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="flat-counter text-center">                            
                        <div class="content-counter">
                            <div class="icon-count">
                                <i class="ion-ios-people"></i>
                            </div>
                            <div class="name-count">Users</div>
                            <div class="numb-count" data-to="1101" data-speed="2000" data-waypoint-active="yes">1101</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </section>
    <!-- Footer -->
    <footer class="dorne-footer-area"> 
        <div class="container-fluid">
            <div class="">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copyright"> 
                            <p>Copyright &copy; {{ date('Y') }} {{ config('app.name', 'vhjobs') }}. Designed by <a href="https://themeforest.net/user/themesflat/portfolio">Tizzy</a>. All Rights Reserved.
                            </p>
                        </div>                   
                    </div><!-- /.col-md-12 -->
                    <div class="col-lg-6">
                        <div class="social-links float-right">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>                  
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </footer> 

    <!-- jQuery-2.2.4 js -->
    <script src="{{ asset('public/front/temp2/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('public/front/temp2/js/bootstrap/popper.min.js') }}"></script>
    <!-- Bootstrap-4 js -->
    <script src="{{ asset('public/front/temp2/js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('public/front/temp2/js/others/plugins.js') }}"></script>
    <!-- Active JS -->
    <script src="{{ asset('public/front/temp2/js/active.js') }}"></script>
</body>

</html>