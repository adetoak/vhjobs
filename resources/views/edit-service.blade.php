@extends('layouts.app')
@section('content')
 <!-- Page title -->
    <div class="page-title parallax parallax1">
        <div class="section-overlay">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">                    
                    <div class="page-title-heading">
                        <h1 class="title">Profile</h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li> - </li>                         
                            <li><a href="index.html">Page</a></li>
                            <li> - </li>                         
                            <li>Profile</li>
                        </ul>                   
                    </div><!-- /.breadcrumbs -->   
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title -->

    <section class="flat-row page-profile bg-theme">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="flat-user profile">
                        <a href="page-user.html" class="edit" title="">Back to profile <i class="fa fa-backward"></i></a>
                        <ul class="info">
                            <li><a href="#" title=""><i class="fa fa-user"></i>Dashboard</a></li>
                            <li><a href="#" title=""><i class="fa fa-link"></i>Listings</a></li>
                            <li><a href="#" title=""><i class="fa fa-link"></i>Listings</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="flat-tabs style2" data-effect="fadeIn">
                        <ul class="menu-tab clearfix">
                            <li class="active"><a href="#"><i class="ion-navicon-round"></i>(3) Listings</a></li>
                            <li class=""><a href="#"><i class="ion-chatbubbles"></i>(3) Reviews</a></li>
                        </ul><!-- /.menu-tab -->
                    
                        <div class="content-tab listing-user profile">
                            <div class="content-inner active">
                               @if ($errors->any())
                                    <div class="alert alert-danger"> 
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif                                  
                                @if ($message = Session::get('success_msg'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif

                                @if ($message = Session::get('error_msg'))
                                    <div class="alert alert-danger text-center">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif  
                                <form method="post" action="{{ url('add-service') }}">
                                    @csrf
                                    <div class="add-filter">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <h5 class="title-list">Basic Service</h5>
                                            </div>
                                            <div class="col-lg-10 widget-form">
                                                <div class="filter-form form-addlist">
                                                    <p class="input-info">
                                                        <label class="nhan">Service Title*</label>
                                                        <input type="text" name="title" id="title" value="{{ old('title') }}" placeholder="I can help you wash your car" required>
                                                    </p>
                                                    <p class="input-info icon">
                                                        <label class="nhan">Categories*</label>
                                                        <select class=" dropdown_sort" name="category">
                                                            <option value="">All Categories</option> 
                                                            <option value="Real Estate">Real Estate</option>
                                                            <option value="Restaurant">Restaurant</option>
                                                            <option value="Healthy & Fitness">Healthy &amp; Fitness</option>
                                                            <option value="Food and coffee">Food and coffee</option> 
                                                        </select>
                                                        <i class="fa fa-angle-down"></i>
                                                    </p>
                                                    <p class="input-info">
                                                        <label class="nhan">Description*</label>
                                                        <textarea class="" tabindex="4" name="description" style="white-space: pre;" required>{{ (old('description') != "")?old('description'):''}}</textarea>
                                                    </p>
                                                </div>                              
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info-contact">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <h5 class="title-list">Infomation</h5>
                                            </div>
                                            <div class="col-lg-10 profile">
                                                <label class="nhan">Address of Operation</label> 
                                                <div class="form-contact row" >
                                                    <div class="col-lg-4">
                                                        <p class="input-info">
                                                            <select class="dropdown_sort" name="state">
                                                                <option value="">Select State</option>
                                                                <option value="Lagos" {{ (old('state') == "Lagos")?'selected':'' }}>Lagos</option>
                                                                <option value="Abuja" {{ (old('state') == 'Abuja')?'selected':'' }}>Abuja</option>
                                                                <option value="Port Haccourt" {{ (old('state') == 'Port Haccourt')?'selected':'' }}>Port Haccourt</option>
                                                                <option value="Ibadan" {{ (old('state') == 'Ibadan')?'selected':'' }}>Ibadan</option> 
                                                            </select> 
                                                        </p>
                                                    </div> 
                                                    <div class="col-lg-4">
                                                        <p class="input-info">
                                                            <select class="dropdown_sort" name="location">
                                                            <option value="">Select Location</option>
                                                            <option value="Ojota" {{ (old('location') == 'Ojota')?'selected':'' }}>Ojota</option>
                                                            <option value="Ogudu" {{ (old('location') == 'Ogudu')?'selected':'' }}>Ogudu</option>
                                                            <option value="Lekki" {{ (old('location') == 'Lekki')?'selected':'' }}>Lekki</option>
                                                            <option value="Yaba" {{ (old('location') == 'Yaba')?'selected':'' }}>Yaba</option>
                                                            <option value="Berger" {{ (old('location') == 'Berger')?'selected':'' }}>Berger</option>            
                                                        </select> 
                                                        </p>
                                                    </div> 
                                                </div> 
                                                <div class="open-hour">
                                                    <label class="nhan">Working Periods*</label>                            
                                                    <div class="form-contact row" >
                                                        <div class="col-lg-4">
                                                            <p class="input-info">
                                                                <input type="text" name="workingdays" placeholder="Working Days" value="{{ (old('workingdays') != '')?old('workingdays'):'Mon - Sat' }}" required>
                                                            </p>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <p class="input-info">
                                                                <input type="text" name="workinghours" placeholder="Working Hours" value="{{ (old('workinghours') != '')?old('workinghours'):'e.g 9am - 5pm' }}" required="">
                                                            </p>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wrap-accadion">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <h5 class="title-list">Pricing</h5>
                                            </div>
                                            <div class="col-lg-10">
                                                <div class="flat-accordion">
                                                    <div class="form-profile">
                                                        <ul class="list-input">
                                                            <li class="clearfix excep">
                                                                <p class="input-info pricing">
                                                                    <input type="number" min="500" name="price" value="{{ old('price')?:$service->price }}" placeholder="500">
                                                                    <span>NGN</span>
                                                                </p>
                                                            </li>
                                                        </ul>
                                                    </div> 
                                                </div> <!-- /.flat-accordion -->
                                                <div class="button-addservice">
                                                    <button type="submit" class="flat-button">Update service</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div> 
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection