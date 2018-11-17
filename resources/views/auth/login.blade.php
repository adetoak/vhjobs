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
                <form class="form-login form-listing" action="{{ route('login') }}" method="post">
                    @csrf
                    <h3 class="title-formlogin">Log in</h3>
                    <span class="input-login icon-form">
                        <input type="email" placeholder="Your Email*" name="email" value="{{ old('email') }}" required autofocus><i class="fa fa-user"></i>
                    </span>
                    <span class="input-login icon-form">
                        <input type="password" placeholder="Password*" name="password" required="required"><i class="fa fa-lock"></i>
                    </span>
                    <div class="flat-fogot clearfix">
                        <label class="float-left">
                           <span class="input-check">
                                <input type="checkbox" id="rem" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="rem" class="remember">Remember me</label> 
                            </span>
                        </label>
                        <label class="float-right link-register">
                            <a href="{{ route('password.request') }}">Lost your password?</a>
                        </label>
                    </div>
                    <span class="wrap-button">
                        <button type="submit" id="login-button" class=" login-btn effect-button" title="log in">LOG IN</button>
                    </span>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
