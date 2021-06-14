@extends('layouts.app')

@section('content')

<!-- Page Banner Area Start -->
<div id="page-banner-area" class="page-banner-area section">
    <div class="container">
    </div>
</div>
<!-- Page Banner Area End -->

<!-- Contact Area Start -->
<div id="contact-area" class="contact-area section pb-90 pt-120">
    <div class="container">
        <div class="row text-center">
            <!-- Contact Form -->
            <div class="col-sm-8 col-sm-offset-2 col-xs-12 mb-30">
                <div class="contact-form">
                    <h4>Join The Game!</h4>
                    <form id="contact-form" action="{{route('login')}}" method="post">
                        @csrf
                        <input type="text" class="@error('username') is-invalid @enderror" name="username" placeholder="Name" value="{{ old('username') }}" required autocomplete="username" autofocus>
                        <input type="password" class="@error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                        @error('username')
                            <p class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror
                        @error('password')
                            <p class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror
                        <input type="submit" value="Login" />
                        <p class="pt-4">If you don't have an account, please <a href="{{route('register')}}" class="color-red">Register</a></p>
                        <p class="pb-4">If you forgot your password, please <a href="{{route('password.request')}}" class="color-red">Click Here</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Area End -->

@endsection
