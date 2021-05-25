@extends('layouts.app')

@section('content')

<!-- Page Banner Area Start -->
<div id="page-banner-area" class="page-banner-area section">
    <div class="container">
        <div class="row">
            <div class="page-banner-title text-center col-xs-12">
                <h2>about us</h2>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner Area End -->

<!-- About Area Start -->
<div id="about-area" class="about-area section pb-120 pt-120">
    <div class="container">
        <div class="row">
            <!-- About Image -->
            <div class="about-image col-md-5 col-xs-12 float-right">
                <img src="{{asset('img/about/2.jpg')}}" alt="">
            </div>
            <!-- About Content -->
            <div class="about-content about-content-2 col-md-7 col-xs-12">
                <h2>About Team</h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If yh are going to use a passage of Lorem Ipsum, you need to be</p>
                <ol>
                    <li>Maecenas laoreet enim sit amet turpis efficitur varius.</li>
                    <li>Morbi eu eros sed nulla convallis rutrum ut eget mi.</li>
                    <li>Nullam tempor nisl non lectus molestie ornare.</li>
                    <li>Nulla a metus ut nulla eleifend suscipit a eget elit.</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- About Area End -->

<!-- Achievement Area Start -->
<div id="achievement-area" class="achievement-area section overlay pb-120 pt-120">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
           <div class="section-title title-white text-center col-xs-12 mb-70">
               <h1>TEAM ACHIEVEMENT</h1>
           </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <!-- Achievement Timeline -->
                <div class="achievement-timeline">
                    <!-- Single Timeline -->
                    <div class="single-timeline">
                        <span class="date">
                            <span>2002</span>
                        </span>
                        <div class="content fix">
                            <h4>INTERCONTINENTAL CUP</h4>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                        </div>
                    </div>
                    <!-- Single Timeline -->
                    <div class="single-timeline">
                        <span class="date">
                            <span>2005</span>
                        </span>
                        <div class="content fix">
                            <h4>champions league winner</h4>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                        </div>
                    </div>
                    <!-- Single Timeline -->
                    <div class="single-timeline">
                        <span class="date">
                            <span>2006</span>
                        </span>
                        <div class="content fix">
                            <h4>Spanish football champions</h4>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                        </div>
                    </div>
                    <!-- Single Timeline -->
                    <div class="single-timeline">
                        <span class="date">
                            <span>2010</span>
                        </span>
                        <div class="content fix">
                            <h4>champions league winner</h4>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Achievement Area End -->

<!-- Testimonial Area Start -->
<div id="testimonial-area" class="testimonial-area section pb-105 pt-120">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
           <div class="section-title text-center col-xs-12 mb-70">
               <h1>PEOPLE LOVE US</h1>
           </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="row row-45">
                    <!-- Testimonial Slider -->
                    <div class="testimonial-slider text-center">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial">
                            <img src="{{asset('img/testimonial/1.jpg')}}" alt="">
                            <h4>Johnny Jones</h4>
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete </p>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial">
                            <img src="{{asset('img/testimonial/2.jpg')}}" alt="">
                            <h4>Johnny Jones</h4>
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<!-- Testimonial Area End -->

<!-- Funfact Area Start -->
<div class="funfact-area section overlay pb-60 pt-90">
    <div class="container">
        <div class="row">
            <!-- Single Funfact -->
            <div class="col-sm-3 col-xs-6 text-center mb-30">
                <div class="single-funfact text-right">
                    <h1 class="counter">2000</h1>
                    <h3>Goals</h3>
                </div>
            </div>
            <!-- Single Funfact -->
            <div class="col-sm-3 col-xs-6 text-center mb-30">
                <div class="single-funfact text-right">
                    <h1 class="counter">180</h1>
                    <h3>Active Playears</h3>
                </div>
            </div>
            <!-- Single Funfact -->
            <div class="col-sm-3 col-xs-6 text-center mb-30">
                <div class="single-funfact text-right">
                    <h1 class="counter">580</h1>
                    <h3>Win</h3>
                </div>
            </div>
            <!-- Single Funfact -->
            <div class="col-sm-3 col-xs-6 text-center mb-30">
                <div class="single-funfact text-right">
                    <h1 class="counter">190</h1>
                    <h3>Awards</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Funfact Area End -->

<!-- Blog Area Start -->
<div id="blog-area" class="blog-area section pb-90 pt-120">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
           <div class="section-title text-center col-xs-12 mb-70">
               <h1>latest post</h1>
           </div>
        </div>
        <div class="row">
            <!-- Single Blog -->
            <div class="blog-item col-md-4 col-sm-6 col-xs-12 mb-30">
                <!-- Image -->
                <div class="image"><img src="{{asset('img/blog/1.jpg')}}" alt=""></div>
                <!-- Content -->
                <div class="content">
                    <!-- Meta -->
                    <div class="meta">
                        <p class="date">10 JUN 2016</p>
                        <p class="cat"><a href="#">CRICKET</a></p>
                        <p class="author">BY <a href="#">ADMIN</a></p>
                    </div>
                    <!-- Title -->
                    <h3 class="title"><a href="#">Lukaku, Jesus in Team of the Weekend BD</a></h3>
                    <p>Gabriel Jesus rescues Man City, Romelu Lukaku continues his remarkable form, aLiverpool slump further. Iain Macintosh offers up Heroes & Villains. ahare santi re</p>
                    <a href="#" class="read-more">READ MORE</a>
                </div>
            </div>
            <!-- Single Blog -->
            <div class="blog-item col-md-4 col-sm-6 col-xs-12 mb-30">
                <!-- Image -->
                <div class="image"><img src="{{asset('img/blog/2.jpg')}}" alt=""></div>
                <!-- Content -->
                <div class="content">
                    <!-- Meta -->
                    <div class="meta">
                        <p class="date">10 JUN 2016</p>
                        <p class="cat"><a href="#">CRICKET</a></p>
                        <p class="author">BY <a href="#">ADMIN</a></p>
                    </div>
                    <!-- Title -->
                    <h3 class="title"><a href="#">Atleti make Barca look ordina ry but fall in cup</a></h3>
                    <p>Gabriel Jesus rescues Man City, Romelu Lukaku continues his remarkable form, aLiverpool slump further. Iain Macintosh offers up Heroes & Villains. ahare santi re</p>
                    <a href="#" class="read-more">READ MORE</a>
                </div>
            </div>
            <!-- Single Blog -->
            <div class="blog-item col-md-4 col-sm-6 col-xs-12 mb-30">
                <!-- Image -->
                <div class="image"><img src="{{asset('img/blog/3.jpg')}}" alt=""></div>
                <!-- Content -->
                <div class="content">
                    <!-- Meta -->
                    <div class="meta">
                        <p class="date">10 JUN 2016</p>
                        <p class="cat"><a href="#">CRICKET</a></p>
                        <p class="author">BY <a href="#">ADMIN</a></p>
                    </div>
                    <!-- Title -->
                    <h3 class="title"><a href="#">Lukaku, Jesus in Team of the Weekend BD</a></h3>
                    <p>Gabriel Jesus rescues Man City, Romelu Lukaku continues his remarkable form, aLiverpool slump further. Iain Macintosh offers up Heroes & Villains. ahare santi re</p>
                    <a href="#" class="read-more">READ MORE</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Area End -->

@include('layouts.breakingnews')

@endsection