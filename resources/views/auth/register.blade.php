@extends('layouts.app')

@section('content') 
<div class="justify-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                @if ($errors->any())
                    <div class="alert alert-danger alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif  
                @if (Session::get('error_msg'))
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span>
                    </button>
                    <strong>Error!</strong> {{  Session::get('error_msg') }}
                </div>                        
                @elseif (Session::get('success_msg'))
                <div class="alert alert-success alert-dismissible fade in text-center" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span>
                    </button>
                    <strong>{{  Session::get('success_msg') }}</strong>
                </div>
                @endif
                <form class="form-login form-listing" action="{{ route('register') }}" method="post">
                    @csrf
                    <h3 class="title-formlogin">Sign Up</h3>
                    <span class="input-login icon-form">
                        <input type="text" placeholder="Your Name*" name="name" value="{{ old('name') }}" required autofocus><i class="fa fa-user"></i>
                    </span>
                    <span class="input-login icon-form">
                        <input type="email" placeholder="E-mail*" name="email" value="{{ old('email') }}" required="required"><i class="fa fa-envelope-o"></i>
                    </span>
                    <span class="input-login icon-form">
                        <input type="text" placeholder="Telephone*" name="phone" value="{{ old('phone') }}" required="required"><i class="fa fa-phone"></i>
                    </span>
                    <span class="input-login icon-form">
                        <input type="password" placeholder="Password*" name="password" required="required"><i class="fa fa-lock"></i>
                    </span>
                     <span class="input-login icon-form">
                        <input type="password" placeholder="Repeat Password*" name="password_confirmation" required="required"><i class="fa fa-lock"></i>
                    </span>
                    <div class="wrap-button signup">
                        <button type="submit" id="logup-button" class=" login-btn effect-button" title="log in">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div> 
</div>
@endsection
