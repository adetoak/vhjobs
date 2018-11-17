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
                        <h1 class="title">User</h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li> - </li>                         
                            <li><a href="{{ url('profile') }}">Dashboard</a></li>
                            <li> - </li>                         
                            <li>Profile</li>
                        </ul>                   
                    </div><!-- /.breadcrumbs -->   
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title --> 

    <section class="flat-row page-user bg-theme">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="flat-user">
                        <a href="{{ url('edit-profile') }}" class="edit" title="">Edit Profile <i class="ion-edit"></i></a>
                        <div class="avatar">
                            <img src="{{ asset('public/front/images/about/2.jpg') }}" alt="image">
                        </div>
                        <h3 class="name">{{ $user->name }}</h3>
                        <ul class="info">
                            <li class="phone"><i class="fa fa-phone"></i><a href="#" title="">+234 {{ $user->phone }}</a></li>
                            <li class="email"><i class="fa fa-envelope"></i><a href="#" title="">{{ $user->email }}</a></li>
                            <li class="face"><i class="fa fa-facebook-square"></i><a href="#" title="">Facebook</a></li>
                            <li class="twiter"><i class="fa fa-twitter-square"></i><a href="#" title="">Twitter</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="flat-tabs style2" data-effect="fadeIn">
                        <ul class="menu-tab clearfix">
                            <li class="active"><a href="#"><i class="ion-navicon-round"></i>({{ count($services) }}) {{ count($services == '1')?'Service':'Services' }}</a></li>
                            <li class=""><a href="#"><i class="ion-chatbubbles"></i>(3) Reviews</a></li>
                        </ul><!-- /.menu-tab -->
                    
                    <div class="content-tab listing-user">
                        <div class="content-inner active listing-list">
                            @foreach ($services as $service)
                                <div class="job-post">
                                    <h3 class="job-post-title">{{ $service->title }} <small class="pull-right">{{ $service->state.' '.$service->loccation }}</small></h3>
                                    <div class="row">
                                        <div class="col-md-9">
                                            <p class="job-post-meta">{{ $service->created_at }} by <a href="#">Mark</a></p>

                                            <p>{{ $service->description }}</p>                                     
                                        </div>
                                        <div class="col-md-3">
                                            <ul class="wrap-button float-right">
                                                <li>
                                                    <button type="button" class="button" onclick="location.href='{{ url("edit-service/".$service->id) }}'"><i class="ion-edit"></i><span>Edit</span></button>
                                                </li>
                                                <li>
                                                    <button type="button" class="button" onclick="location.href='#'"><i class="ion-trash-a"></i><span>Delete</span></button>
                                                </li>
                                            </ul>                                             
                                        </div>
                                    </div>
                                </div> 
                                <hr>
                            @endforeach
                            <div class="blog-pagination style2 text-center">
                                <ul class="flat-pagination clearfix">
                                     {{ $services->links() }}                              
                                </ul><!-- /.flat-pagination -->
                            </div>
                        </div>
                        <div class="content-inner">
                            <div class="author-review content-listing">
                                <div class="comments-area">
                                    <ol class="comment-list">
                                        <li class="comment">
                                            <article class="comment-body clearfix">        
                                                <div class="comment-author">
                                                    <img src="images/services/c1.png" alt="image">  
                                                </div><!-- .comment-author -->
                                                <div class="comment-text">
                                                    <div class="comment-metadata">
                                                        <h5><a href="#">Shaya Hill </a><span>on San Angelo Restaurants</span></h5>  
                                                        <p class="day">12/01/2017</p> <div class="flat-start">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>             
                                                    </div><!-- .comment-metadata -->
                                                    <div class="comment-content">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </p>
                                                    </div><!-- .comment-content -->
                                                </div><!-- /.comment-text -->         
                                            </article><!-- .comment-body -->
                                        </li><!-- #comment-## -->                                   
                                    </ol><!-- .comment-list -->
                                </div>
                            </div>
                        </div>
                    </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection