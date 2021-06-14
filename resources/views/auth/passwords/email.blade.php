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
                    <h4>Please Enter Your Email To Reset Password!</h4>
                    <form id="contact-form" action="{{ route('password.email') }}" method="post">
                        @csrf
                        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <p class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror

                        <input type="submit" value="{{ __('Send Reset Link') }}" />

                        <div class="py-4"></div>

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Area End -->

@endsection
