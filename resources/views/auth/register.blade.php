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
                    <h4>Create New Account!</h4>
                    <form id="contact-form" action="{{route('register')}}" method="post">
                        @csrf
                        <input type="text" class="@error('fullname') is-invalid @enderror" name="fullname" placeholder="FullName" value="{{ old('fullname') }}" required autocomplete="fullname" autofocus>
                        @error('fullname')
                            <p class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror
                        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <p class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror
                        <input type="text" class="@error('teamname') is-invalid @enderror" name="teamname" placeholder="TeamName" value="{{ old('teamname') }}" required autocomplete="teamname" autofocus>
                        @error('teamname')
                            <p class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror
                        <input type="text" class="@error('username') is-invalid @enderror" name="username" placeholder="LoginName" value="{{ old('username') }}" required autocomplete="username" autofocus>
                        @error('username')
                            <p class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror
                        <div class="input-group">
                            <input id="password" name="password" type="password" class="form-control-password @error('password') is-invalid @enderror" placeholder="LoginPassword" required autocomplete="new-password"/>
                            <div class="form-control-after cursor-pointer">
                                <svg id="eye_fill" xmlns="http://www.w3.org/2000/svg" width="25.515" height="16" viewBox="0 0 25.515 16">
                                    <path d="M12.762,27.286c7.539,0,12.753-6.1,12.753-8s-5.224-8-12.753-8C5.28,11.286,0,17.376,0,19.286S5.318,27.286,12.762,27.286Zm0-2.758a5.274,5.274,0,0,1-5.271-5.242,5.266,5.266,0,0,1,10.532,0A5.266,5.266,0,0,1,12.762,24.529Zm0-3.351a1.9,1.9,0,1,0-1.92-1.892A1.914,1.914,0,0,0,12.762,21.178Z" transform="translate(0 -11.286)" fill="#3b3b3a" opacity="0.596"/>
                                </svg>
                                <svg id="eye_slash_fill" style="display: none;" xmlns="http://www.w3.org/2000/svg" width="25.52" height="16.939" viewBox="0 0 25.52 16.939">
                                    <path d="M20.028,27.346a.715.715,0,0,0,1.224-.5.724.724,0,0,0-.213-.51L5.52,10.824a.715.715,0,0,0-.51-.2.738.738,0,0,0-.714.7.685.685,0,0,0,.2.51Zm.872-2.625c2.913-1.883,4.62-4.332,4.62-5.418,0-1.883-5.148-7.885-12.755-7.885a14.059,14.059,0,0,0-4.406.714l2.421,2.412a5,5,0,0,1,1.985-.408A5.143,5.143,0,0,1,17.95,19.3a4.532,4.532,0,0,1-.436,1.976Zm-8.136,2.468a14.306,14.306,0,0,0,4.74-.807l-2.458-2.458a4.933,4.933,0,0,1-2.282.547A5.192,5.192,0,0,1,7.57,19.3a5.116,5.116,0,0,1,.547-2.319L4.889,13.737C1.828,15.62,0,18.19,0,19.3,0,21.177,5.241,27.188,12.765,27.188Zm2.95-8.08a2.938,2.938,0,0,0-2.95-2.941c-.121,0-.241.009-.352.019L15.7,19.47C15.705,19.359,15.715,19.229,15.715,19.108ZM9.805,19.09a2.967,2.967,0,0,0,2.969,2.95c.13,0,.25-.009.38-.019l-3.33-3.33C9.815,18.821,9.805,18.96,9.805,19.09Z" transform="translate(0 -10.62)" fill="#3b3b3a" opacity="0.596"/>
                                </svg>
                            </div>
                        </div>
                        @error('password')
                            <p class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror
                        <div class="px-10">
                            <label class="checkbox-container">Email Marketing, received email regarding this game and coming games.
                                <input type="checkbox" name="ismarketing" value="1">
                                <span class="checkbox-checkmark"></span>
                            </label>
                        </div>
                   
                        <div class="row">
                            <input type="submit" value="Register" />
                        </div>
                        <p class="py-4">If you have an account, please <a href="{{route('login')}}">Log In</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Area End -->

@endsection

@section('scripts')

    <!-- JQuery
    ============================================ -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/password-switch.js')}}"></script>
    
@endsection
