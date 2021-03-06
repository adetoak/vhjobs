@extends('layouts.app')
@section('content')
<div class="justify-content">
<!-- Page title -->
    <div class="page-title parallax parallax1">
        <div class="section-overlay">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">                    
                    <div class="page-title-heading">
                        <h1 class="title">Listing</h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li> - </li>                            
                            <li>Listing</li>
                        </ul>                   
                    </div><!-- /.breadcrumbs -->   
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title --> 

    <!-- Blog posts -->
    <section class="main-content page-listing-grid">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="flat-select clearfix">
                        <div class="float-left width50 clearfix">
                            <div class="one-three showing">
                                <p><span>{{ count($jobs) }}</span> Job Requests Found </p>
                            </div>
                            <div class="one-three more-filter">
                                <ul class="unstyled">
                                    <li class="current"><a href="#" class="title">More Fillter <i class="fa fa-angle-right"></i></a>
                                        <ul class="unstyled">
                                            <li class="en">
                                                <input type="checkbox" id="wifi" name="category">
                                                <label for="wifi">Wifi</label>
                                            </li>
                                            <li class="en">
                                                <input type="checkbox" id="smoking" name="category">
                                                <label for="smoking">Smoking allowed</label>
                                            </li>
                                            <li class="en">
                                                <input type="checkbox" id="onl" name="category">
                                                <label for="onl">Online Reservation</label>
                                            </li>
                                            <li class="en">
                                                <input type="checkbox" id="parking" name="category" checked="checked">
                                                <label for="parking">Parking street</label>
                                            </li>
                                            <li class="en">
                                                <input type="checkbox" id="event" name="category">
                                                <label for="event">Events</label>
                                            </li>
                                            <li class="en">
                                                <input type="checkbox" id="in" name="category" checked="checked">
                                                <label for="in">Elevator in building</label>
                                            </li>
                                            <li class="en">
                                                <input type="checkbox" id="card" name="category">
                                                <label for="card">Credit Card Payment</label>
                                            </li>
                                        </ul>
                                     </li>
                                </ul>
                            </div>
                            <div class="one-three sortby">
                                <ul class="unstyled">
                                    <li class="current"><a href="#" class="title">Sort by: Random <i class="fa fa-angle-right"></i></a>
                                        <ul class="unstyled">
                                            <li class="en"><a href="#" title=""><i class="fa fa-caret-right"></i>Open Now</a></li>
                                            <li class="en"><a href="#" title=""><i class="fa fa-caret-right"></i>Most reviewed</a></li>
                                            <li class="en"><a href="#" title=""><i class="fa fa-caret-right"></i>Top rated</a></li>
                                            <li class="en"><a href="#" title=""><i class="fa fa-caret-right"></i>Random</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="float-right">
                            <div class="flat-sort">
                               <a href="listing-list.html" class="course-list-view active"><i class="fa fa-list"></i></a>
                                <a href="listing-grid.html" class="course-grid-view "><i class="fa fa-th"></i></a>
                            </div>
                        </div>
                    </div> 
                    <div class="listing-list">
                        @foreach($jobs as $job)  
                        <div class="job-post">
                            <h2 class="job-post-title">Sample job post <small class="pull-right">Abujas</small></h2>
                            <p class="job-post-meta">{{ $job->created_at }} by <a href="#">Mark</a></p>

                            <p>This job post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
                            <a href="#" class="btn btn-primary">Apply for job</a>
                            <p class="card-text">
                                 
                            </p> 
                            <hr>
                        </div> 
                        @endforeach 
                    </div>
                    <div class="blog-pagination style2 text-center">
                        <ul class="flat-pagination clearfix">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li> 
                            <li><a href="#">3</a></li>                                 
                            <li class="next">
                                <a href="#">Next</a>
                            </li>                               
                        </ul><!-- /.flat-pagination -->
                    </div><!-- /.blog-pagination -->                  
                </div><!-- /.col-lg-9 -->    
                <div class="col-lg-3">
                    <div class="sidebar">
                        <div class=" widget widget-form style2">
                            <h5 class="widget-title">
                                Search Box
                            </h5>
                            <form novalidate="" class="filter-form clearfix" id="filter-form" method="post" action="#">
                                <p class="book-notes">                                      
                                    <input type="text" placeholder="What are you looking for?" name="question" required="">
                                </p>
                                <p class="book-form-select icon">            
                                    <select class=" dropdown_sort">
                                        <option value="">All Categories</option>
                                        <option value="">Hotel & travel</option>
                                        <option value="">Real Estate</option>
                                        <option value="">Restaurant</option>
                                        <option value="">Healthy & Fitness</option>
                                        <option value="">Food and coffee</option>
                                        <option value="">Drinks</option>
                                    </select>
                                    <i class="fa fa-angle-down"></i>
                                </p> 
                                <p class="book-form-address icon">            
                                    <input type="text" placeholder="Address" name="address" required="">
                                    <i class="ion-android-locate"></i>
                                </p>  
                                <p class="location">Location <i class="ion-location float-right"></i></p>
                                <p class="input-location form-filter">
                                    <span class="filter">
                                        <input id="ex8" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="10" data-slider-step="1" data-slider-value="5"/>
                                    </span>
                                </p>          
                                <p class="form-submit text-center">
                                    <button class="flat-button">Search <i class="ion-ios-search-strong"></i></button>
                                </p>
                            </form>
                        </div>
                        <div class="widget widget-map">
                            <h5 class="widget-title">Map</h5>
                            <p>Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie.</p>
                            <div class="flat-maps">
                                <div class="maps" style="width: 100%; height: 359px; "></div> 
                            </div>
                        </div>
                    </div><!-- /.sidebar -->
                </div><!-- /.col-md-3 -->            
            </div><!-- /.row -->           
        </div><!-- /.container -->   
    </section> 
</div>
@endsection