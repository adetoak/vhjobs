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
                        <h1 class="title">Post Job</h1>
                    </div><!-- /.page-title-captions -->
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li> - </li>                         
                            <li><a href="{{ url('dashboard') }}">Page</a></li>
                            <li> - </li>                         
                            <li>Post Job</li>
                        </ul>                   
                    </div><!-- /.breadcrumbs -->   
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title --> 

    <section class="flat-row page-addjob">
        <div class="container">
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
        	<form method="post" action="{{ url('post-job') }}">
        		@csrf
	            <div class="add-filter">
	                <div class="row">
	                    <div class="col-lg-2">
	                        <h5 class="title-list">Basic job</h5>
	                    </div>
	                    <div class="col-lg-10 widget-form">
	                        <div class="filter-form form-addlist">
	                            <p class="input-info">
	                                <label class="nhan">job Title*</label>
	                                <input type="text" name="title" id="title" value="{{ old('title') }}" placeholder="I can help you wash your car" required>
	                            </p>
	                            <p class="input-info icon">
	                                <label class="nhan">Categories*</label>
	                                <select class=" dropdown_sort" name="category">
	                                    <option value="">All Categories</option> 
	                                    <option value="Real Estate" {{ (old('category') == "Real Estate")?'selected':'' }}>Real Estate</option>
	                                    <option value="Restaurant" {{ (old('category') == "Restaurant")?'selected':'' }}>Restaurant</option>
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
	                        <label class="nhan">Job Location</label> 
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
	                            <div class="col-lg-4">
	                                <p class="input-info">
	                                      <input type="text" name="address" id="address" value="{{ old('address') }}" placeholder="Address" required>
	                                </p>
	                            </div> 
	                        </div> 
	                        <div class="open-hour">
	                            <label class="nhan">Assignment Date*</label>                            
		                    	<div class="form-contact row" >
		                            <div class="col-lg-6">
		                                <p class="input-info">
		                                    <input type="date" name="duration" value="{{ (old('duration') != '')?old('duration'):date('Y-m-d') }}" required>
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
			                                    <input type="number" min="500" name="price" value="{{ old('price') }}" placeholder="500">
			                                    <span>NGN</span>
			                                </p>
			                            </li>
			                        </ul>
			                    </div> 
	                        </div> <!-- /.flat-accordion -->
	                        <div class="button-addjob">
	                            <button type="submit" class="flat-button">Post Job</button>
	                        </div>
	                    </div>

	                </div>
	            </div>
            </form> 
        </div>
    </section>  
</div>
@endsection