@extends('layouts.app')

@section('content')

<!-- Page Banner Area Start -->
<div id="page-banner-area" class="page-banner-area section">
    <div class="container">
        <div class="row">
            <div class="page-banner-title text-center col-xs-12">
                <h2>contact</h2>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner Area End -->

<!-- Contact Area Start -->
<div id="contact-area" class="contact-area section pb-90 pt-120">
    <div class="container">
        <div class="row">
            <!-- Contact Map -->
            <div class="col-xs-12 mb-50">
                <div id="contact-map"></div>
            </div>
            <!-- Contact Info -->
            <div class="col-md-4 col-sm-5 col-xs-12 mb-30">
                <div class="contact-info">
                    <h4>Contact details</h4>
                    <p><span>address: </span> 121 King Street, Melbourne Victoria 3000 Australia</p>
                    <p><span>phone: </span> +61 3 8376 6284</p>
                    <p><span>email: </span> <a href="#">info@domain.com</a></p>
                    <p><span>skype: </span> <a href="#">suparsport333</a></p>
                    <p><span>facebook: </span> <a href="#">www.facebook.com/suparsport</a></p>
                    <p><span>twitter: </span> <a href="#">www.twitter.com/suparsport</a></p>
                    <p><span>website: </span> <a href="#">info@domain.com</a></p>
                </div>
            </div>
            <!-- Contact Form -->
            <div class="col-md-8 col-sm-7 col-xs-12 mb-30">
                <div class="contact-form">
                    <h4>Get In Tauch</h4>
                    <form id="contact-form" action="mail.php" method="post">
                        <input type="text" name="name" placeholder="Name">
                        <input type="email" name="email" placeholder="Email">
                        <input type="text" name="phone" name="name" placeholder="Phone">
                        <input type="text" name="subject" placeholder="Subject">
                        <textarea name="message" placeholder="Message"></textarea>
                        <input type="submit" value="send">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Area End -->

@include('layouts.breakingnews')

@endsection