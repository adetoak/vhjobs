@extends('layouts.app')
@section('content')

    <!-- ***** Welcome Area Start ***** -->
    <section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url({{ asset('public/front/temp2/img/bg-img/hero-1.jpg') }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="hero-content">
                        <h2>Discover places near you</h2>
                        <h4>This is the best guide of your city</h4>
                    </div>
                    <!-- Hero Search Form -->
                    <div class="hero-search-form">
                        <!-- Tabs -->
                        <div class="nav nav-tabs" id="heroTab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-places-tab" data-toggle="tab" href="#nav-places" role="tab" aria-controls="nav-places" aria-selected="true">Places</a>
                            <a class="nav-item nav-link" id="nav-events-tab" data-toggle="tab" href="#nav-events" role="tab" aria-controls="nav-events" aria-selected="false">Events</a>
                        </div>
                        <!-- Tabs Content -->
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab">
                                <h6>What are you looking for?</h6>
                                <form action="#" method="get">
                                    <select class="custom-select">
                                        <option selected>Your Destinations</option>
                                        <option value="1">New York</option>
                                        <option value="2">Latvia</option>
                                        <option value="3">Dhaka</option>
                                        <option value="4">Melbourne</option>
                                        <option value="5">London</option>
                                    </select>
                                    <select class="custom-select">
                                        <option selected>All Catagories</option>
                                        <option value="1">Catagories 1</option>
                                        <option value="2">Catagories 2</option>
                                        <option value="3">Catagories 3</option>
                                    </select>
                                    <select class="custom-select">
                                        <option selected>Price Range</option>
                                        <option value="1">$100 - $499</option>
                                        <option value="2">$500 - $999</option>
                                        <option value="3">$1000 - $4999</option>
                                    </select>
                                    <button type="submit" class="btn dorne-btn"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab">
                                <h6>What are you looking for?</h6>
                                <form action="#" method="get">
                                    <select class="custom-select">
                                        <option selected>Your Destinations</option>
                                        <option value="1">New York</option>
                                        <option value="2">Latvia</option>
                                        <option value="3">Dhaka</option>
                                        <option value="4">Melbourne</option>
                                        <option value="5">London</option>
                                    </select>
                                    <select class="custom-select">
                                        <option selected>All Catagories</option>
                                        <option value="1">Catagories 1</option>
                                        <option value="2">Catagories 2</option>
                                        <option value="3">Catagories 3</option>
                                    </select>
                                    <select class="custom-select">
                                        <option selected>Price Range</option>
                                        <option value="1">$100 - $499</option>
                                        <option value="2">$500 - $999</option>
                                        <option value="3">$1000 - $4999</option>
                                    </select>
                                    <button type="submit" class="btn dorne-btn"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Social Btn -->
        <div class="hero-social-btn">
            <div class="social-title d-flex align-items-center">
                <h6>Follow us on Social Media</h6>
                <span></span>
            </div>
            <div class="social-btns">
                <a href="#"><i class="fa fa-linkedin" aria-haspopup="true"></i></a>
                <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-haspopup="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-haspopup="true"></i></a>
            </div>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Catagory Area Start ***** -->
    <section class="dorne-catagory-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="all-catagories">
                        <div class="row">
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.2s">
                                    <div class="catagory-content">
                                        <img src="{{ asset('public/front/temp2/img/core-img/icon-1.png') }}" alt="">
                                        <a href="#">
                                            <h6>Hotels</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.4s">
                                    <div class="catagory-content">
                                        <img src="{{ asset('public/front/temp2/img/core-img/icon-2.png') }}" alt="">
                                        <a href="#">
                                            <h6>Restaurants</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.6s">
                                    <div class="catagory-content">
                                        <img src="{{ asset('public/front/temp2/img/core-img/icon-3.png') }}" alt="">
                                        <a href="#">
                                            <h6>Shopping</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.8s">
                                    <div class="catagory-content">
                                        <img src="{{ asset('public/front/temp2/img/core-img/icon-4.png') }}" alt="">
                                        <a href="#">
                                            <h6>Beauty &amp; Spa</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="1s">
                                    <div class="catagory-content">
                                        <img src="{{ asset('public/front/temp2/img/core-img/icon-5.png')}}" alt="">
                                        <a href="#">
                                            <h6>Cinema</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Catagory Area End ***** -->
    <section class="flat-row blog-shortcode">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-section style2">
                    <h1 class="title">Latest News</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <article class="post clearfix">
                    <div class="featured-post">
                        <a href="blog-single.html"><img src="{{ asset('public/front/images/blog/s1.jpg') }}" alt="image"></a>
                        <ul class="post-comment">
                            <li class="date">
                                27        
                            </li>
                            <li class="month">
                                AUG
                            </li>
                        </ul>
                    </div><!-- /.feature-post -->
                    <div class="content-post">     
                        <ul class="meta-data clearfix">
                            <li class="category">
                                Posted in: <a href="#">Restaurant, </a><a href="#">Hotel</a>
                            </li>
                            <li> by: <a href="#">admin</a></li>
                        </ul><!-- /.meta-post -->
                        <h3 class="title-post"><a href="blog-single.html">
                            Top 10 French restaurants
                            </a></h3>                        
                        <p>Sed ut perspiciatis unde omnis iste error sit luptatem accusantium doloremque lau dantium, </p>
                        <div class="more-link">
                            <a href="blog-single.html">Read More</a>
                        </div>
                    </div><!-- /.content-post -->
                </article>
            </div>
            <div class="col-lg-4 col-sm-6">
                <article class="post clearfix">
                    <div class="featured-post">
                        <a href="blog-single.html"><img src="{{ asset('public/front/images/blog/s2.jpg') }}" alt="image"></a>
                        <ul class="post-comment">
                            <li class="date">
                                21        
                            </li>
                            <li class="month">
                                DEC
                            </li>
                        </ul>
                    </div><!-- /.feature-post -->
                    <div class="content-post">     
                        <ul class="meta-data clearfix">
                            <li class="category">
                                Posted in: <a href="#">Restaurant, </a><a href="#">Hotel</a>
                            </li>
                            <li> by: <a href="#">admin</a></li>
                        </ul><!-- /.meta-post -->
                        <h3 class="title-post"><a href="blog-single.html">
                            6 Tips to retain your top sales talent
                            </a></h3>                        
                        <p>Sed ut perspiciatis unde omnis iste error sit luptatem accusantium doloremque lau dantium, </p>
                        <div class="more-link">
                            <a href="blog-single.html">Read More</a>
                        </div>
                    </div><!-- /.content-post -->
                </article>
            </div>
            <div class="col-lg-4 col-sm-6">
                <article class="post clearfix">
                    <div class="featured-post">
                        <a href="blog-single.html"><img src="{{ asset('public/front/images/blog/s3.jpg') }}" alt="image"></a>
                        <ul class="post-comment">
                            <li class="date">
                                18        
                            </li>
                            <li class="month">
                                JUN
                            </li>
                        </ul>
                    </div><!-- /.feature-post -->
                    <div class="content-post">     
                        <ul class="meta-data clearfix">
                            <li class="category">
                                Posted in: <a href="#">Restaurant, </a><a href="#">Hotel</a>
                            </li>
                            <li> by: <a href="#">admin</a></li>
                        </ul><!-- /.meta-post -->
                        <h3 class="title-post"><a href="blog-single.html">
                            Top 10 French restaurants
                            </a></h3>                        
                        <p>Sed ut perspiciatis unde omnis iste error sit luptatem accusantium doloremque lau dantium, </p>
                        <div class="more-link">
                            <a href="blog-single.html">Read More</a>
                        </div>
                    </div><!-- /.content-post -->
                </article>
            </div> 
        </div>
    </div>
</section>
@endsection