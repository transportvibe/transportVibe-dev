@extends('layouts.authentication.master')

@section('css')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
<style>
    .fa-google {
        background: conic-gradient(from -45deg, #ea4335 110deg, #4285f4 90deg 180deg, #34a853 180deg 270deg, #fbbc05 270deg) 73% 55%/150% 150% no-repeat;
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        -webkit-text-fill-color: transparent;
    }

    .fa-facebook {
        color: white;
    }
</style>
@endsection

@section('main_content')
<!-- login page start-->
<div class="container-fluid p-0">
    <div class="row m-0">
        <div class="col-12 p-0">
            <div class="login-card login-dark" style="background-color:#00404F !important">
                <div>
                    <div style="text-align:center;">
                        <h1 style="color:white">Discover honest reviews, write your own,
                            <br> and make informed transport decisions
                        </h1>
                    </div>
                    <br>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                        @endforeach
                    </div>
                    @endif
                    <div class="login-main">
                        <form class="theme-form" method="POST" action="#">
                            @csrf
                            <h3>Log in or Sign up below</h3>
                            <br>

                    <div class="buttons" style="text-align:center;">
                                    <a href="{{ route('google.login') }}">
                                    <img src="{{ asset('assets/images/logo-gmail.png') }}" alt="gmail logo">
                                </a> 
                                <div class="g_id_signin" data-type="standard"></div>
                            <br>
                            <button class="form-control" style="background-color:#1877F2;color:white;"><i class="fab fa-facebook-f"></i> <a href="{{ route('facebook-login') }}" style="color:white;">Continue with Facebook</a>&nbsp;&nbsp; </button>
                            <br>
                            <button class="form-control" style="background-color:#000000;color:white;"><i class="fab fa-apple fa-1x"></i> <a href="{{ route('apple.login') }}" style="color:white;">Continue with Apple</a>&nbsp;&nbsp; </button>
                            <br>
                            <a href="{{ route('login') }}" style="color:#30CB65;text-decoration: underline;font-weight:bold;">Continue with email</a>
                    </div>
                    </form>
                </div>
                <br><br>
                <div style="text-align:center;color:white;">
                    <h1 style="color:white">Are you a business?</h1>
                    <br>
                    <p>Sign up for a free business account to manage reviews, build trust, <br> and grow your reputation on TransportVibe.</p>
                    <button class="btn" style="background-color:#30CB65;"><a href="{{ route('login') }}" style="color:white;">Log in</a></button>&nbsp;&nbsp;&nbsp;&nbsp;
                    <button class="btn" style="color:#30CB65;border:2px solid;border-color:#30CB65"><a href="{{ route('register') }}"> Sign up</a></button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://accounts.google.com/gsi/client" async defer></script>

@endsection

@section('scripts')
@endsection