@extends('layouts.app')

@section('content')

    <!-- Hero Area Start -->
    <div id="hero-area" class="hero-area section">
        <!-- Hero Slider Start -->
        <div class="hero-slider">
            <!-- Single Hero Item --> 
            <div class="hero-item">
                <!-- Hero Slider Image -->
                <img src="{{asset('img/hero/1.jpg')}}" alt="">
                <div class="container">
                    <div class="row">
                        <!-- Hero Slider Content -->
                        <div class="hero-content col-md-10 col-xs-12">
                            <h1>best team, <span>one dream</span></h1>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered eration in some form, by injected humour, or randomised words which don't look even slightly believableilable, but the majority have suffered eration in some form, by injected</p>
                            <a href="#next-match-area" data-scroll>next match</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Item --> 
            <div class="hero-item">
                <!-- Hero Slider Image -->
                <img src="{{asset('img/hero/2.jpg')}}" alt="">
                <div class="container">
                    <div class="row">
                        <!-- Hero Slider Content -->
                        <div class="hero-content col-md-10 col-xs-12">
                            <h1>best team, <span>one dream</span></h1>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered eration in some form, by injected humour, or randomised words which don't look even slightly believableilable, but the majority have suffered eration in some form, by injected</p>
                            <a href="#next-match-area" data-scroll>next match</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Item --> 
            <div class="hero-item">
                <!-- Hero Slider Image -->
                <img src="{{asset('img/hero/3.jpg')}}" alt="">
                <div class="container">
                    <div class="row">
                        <!-- Hero Slider Content -->
                        <div class="hero-content col-md-10 col-xs-12">
                            <h1>best team, <span>one dream</span></h1>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered eration in some form, by injected humour, or randomised words which don't look even slightly believableilable, but the majority have suffered eration in some form, by injected</p>
                            <a href="#next-match-area" data-scroll>next match</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---- Hero Slider End ---->
    </div>
    <!-- Hero Area End -->
    
    <!-- About Area Start -->
    <div id="about-area" class="about-area section pb-120 pt-120">
        <div class="container">
            <div class="row">
                <!-- About Image -->
                <div class="about-image col-md-5 col-xs-12">
                    <img src="{{asset('img/about/1.jpg')}}" alt="">
                </div>
                <!-- About Content -->
                <div class="about-content col-md-7 col-xs-12">
                    <h4>ABOUT US</h4>
                    <h2>WELCOME TO OUR <span>SUPER SPORT</span></h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humandomised words which don't look even slightly believable.</p>
                    <a href="#staff-area" data-scroll>OUR PLAYER</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About Area End -->
    
    <!-- Result Area Start -->
    <div id="result-area" class="result-area section pb-120">
        <div class="container">
            <!-- Section Title -->
            <div class="row">
               <div class="section-title text-center col-xs-12 mb-70">
                   <h1>Latest Result</h1>
                   <h5>Primera Division 2016/2017</h5>
               </div>
            </div>
            <div class="row">
                <!-- Latest Result Wrapper -->
                <div class="latest-result-wrapper fix">
                    <!-- Single Result -->
                    <div class="col-md-6 col-xs-12">
                        <div class="single-result result-left">
                            <img  class="team-banner" src="{{asset('img/result/team-1.png')}}" alt="">
                            <div class="content float-left">
                                <h3 class="team-name"><span class="left">Mohammedan</span> <span class="total-goal right">( 2 )</span> <span class="border"></span></h3>
                                <ul class="goalers">
                                    <li>Karim Benzema  (62')</li>
                                    <li>Gareth Bale  (90')</li>
                                </ul>
                                <span class="final-result">LOSS</span>
                            </div>
                        </div>
                    </div>
                    <span class="vs">vs</span>
                    <!-- Single Result -->
                    <div class="col-md-6 col-xs-12">
                        <div class="single-result result-right">
                            <img  class="team-banner" src="{{asset('img/result/team-2.png')}}" alt="">
                            <div class="content float-right">
                                <h3 class="team-name"><span class="left">Arambagh KS</span> <span class="total-goal right">( 3 )</span> <span class="border"></span></h3>
                                <ul class="goalers">
                                    <li>Gerard Piqué  (56')</li>
                                    <li>Lionel Messi  (47') (82')</li>
                                </ul>
                                <span class="final-result">WIN</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Result Area End -->
    
    <!-- Next Match Area Start -->
    <div id="next-match-area" class="next-match-area overlay section pb-110 pt-120">
        <div class="container">
            <!-- Section Title -->
            <div class="row">
               <div class="section-title title-white text-center col-xs-12 mb-70">
                   <h1>next match</h1>
               </div>
            </div>
            <div class="row">
                <div class="col-xs-12 text-center">
                    <!-- Upcoming Match -->
                    <div class="upcoming-match">
                        <!-- Upcoming Match Teams -->
                        <div class="teams">
                            <div class="nms-team">
                                <div class="image float-left"><img src="{{asset('img/next-match/team-1.png')}}" alt=""></div>
                                <h4>Abahani</h4>
                            </div>
                            <span class="vs">vs</span>
                            <div class="nms-team">
                                <h4>Brothers</h4>
                                <div class="image float-right"><img src="{{asset('img/next-match/team-2.png')}}" alt=""></div>
                            </div>
                        </div>
                        <!-- Upcoming Match Time & Venue -->
                        <div class="match-time-venue text-center">
                            <span>Jule 20,2017  |  4.00 pm</span>
                            <h4>Stamford Bridge, UK</h4>
                        </div>
                        <!-- Upcoming Match Countdown -->
                        <div class="next-match-countdown" data-countdown="2018/01/01"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Next Match Area End -->
    
    <!-- Staff Area Start -->
    <div id="staff-area" class="staff-area section pb-120 pt-120">
        <div class="container">
            <!-- Section Title -->
            <div class="row">
               <div class="section-title text-center col-xs-12 mb-70">
                   <h1>CLUB STAFF</h1>
               </div>
            </div>
            <div class="row">
                <div class="col-xs-12 text-center">
                    <!-- Staff Tab List -->
                    <ul class="staff-tab-list nav nav-tabs text-center" role="tablist">
                        <li class="active"><a href="#managers" data-toggle="tab">Managers</a></li>
                        <li><a href="#first-team" data-toggle="tab">First Team</a></li>
                        <li><a href="#academy" data-toggle="tab">academy</a></li>
                    </ul>
                </div>
                <!-- Staff Tab panes -->
                <div class="tab-content">
                    <!-- Manager Tab -->
                    <div role="tabpanel" class="tab-pane active" id="managers">
                        <!-- Stuff Slider -->
                        <div class="staff-slider">
                            <!-- Single Stuff -->
                            <div class="staff-item col-xs-12">
                                <div class="image"><img src="{{asset('img/staff/manager/1.jpg')}}" alt=""></div>
                                <div class="content">
                                    <div class="details">
                                        <h4><a href="#">Juan Graham</a></h4>
                                        <p>Coach</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Stuff -->
                            <div class="staff-item col-xs-12">
                                <div class="image"><img src="{{asset('img/staff/manager/2.jpg')}}" alt=""></div>
                                <div class="content">
                                    <div class="details">
                                        <h4><a href="#">Donald Collins</a></h4>
                                        <p>Coach</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Stuff -->
                            <div class="staff-item col-xs-12">
                                <div class="image"><img src="{{asset('img/staff/manager/3.jpg')}}" alt=""></div>
                                <div class="content">
                                    <div class="details">
                                        <h4><a href="#">Ronald Gray</a></h4>
                                        <p>Coach</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Stuff -->
                            <div class="staff-item col-xs-12">
                                <div class="image"><img src="{{asset('img/staff/manager/4.jpg')}}" alt=""></div>
                                <div class="content">
                                    <div class="details">
                                        <h4><a href="#">William Mendez</a></h4>
                                        <p>Coach</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Stuff -->
                            <div class="staff-item col-xs-12">
                                <div class="image"><img src="{{asset('img/staff/manager/2.jpg')}}" alt=""></div>
                                <div class="content">
                                    <div class="details">
                                        <h4><a href="#">Gary Evans</a></h4>
                                        <p>Coach</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- First Team Tab -->
                    <div role="tabpanel" class="tab-pane" id="first-team">
                        <!-- Stuff Slider -->
                        <div class="staff-slider">
                            <!-- Single Stuff -->
                            <div class="staff-item col-xs-12">
                                <div class="image"><img src="{{asset('img/staff/player/1.jpg')}}" alt=""></div>
                                <div class="content">
                                    <div class="details">
                                        <h4><a href="#">Jeffrey Moore</a></h4>
                                        <p>Midfielder</p>
                                    </div>
                                    <h2 class="num">14</h2>
                                </div>
                            </div>
                            <!-- Single Stuff -->
                            <div class="staff-item col-xs-12">
                                <div class="image"><img src="{{asset('img/staff/player/2.jpg')}}" alt=""></div>
                                <div class="content">
                                    <div class="details">
                                        <h4><a href="#">Bryan Parker</a></h4>
                                        <p>Midfielder</p>
                                    </div>
                                    <h2 class="num">14</h2>
                                </div>
                            </div>
                            <!-- Single Stuff -->
                            <div class="staff-item col-xs-12">
                                <div class="image"><img src="{{asset('img/staff/player/3.jpg')}}" alt=""></div>
                                <div class="content">
                                    <div class="details">
                                        <h4><a href="#">Juan Wood</a></h4>
                                        <p>Midfielder</p>
                                    </div>
                                    <h2 class="num">14</h2>
                                </div>
                            </div>
                            <!-- Single Stuff -->
                            <div class="staff-item col-xs-12">
                                <div class="image"><img src="{{asset('img/staff/player/4.jpg')}}" alt=""></div>
                                <div class="content">
                                    <div class="details">
                                        <h4><a href="#">Ethan Barrett</a></h4>
                                        <p>Midfielder</p>
                                    </div>
                                    <h2 class="num">14</h2>
                                </div>
                            </div>
                            <!-- Single Stuff -->
                            <div class="staff-item col-xs-12">
                                <div class="image"><img src="{{asset('img/staff/player/2.jpg')}}" alt=""></div>
                                <div class="content">
                                    <div class="details">
                                        <h4><a href="#">Peter Day</a></h4>
                                        <p>Midfielder</p>
                                    </div>
                                    <h2 class="num">14</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Academy Tab -->
                    <div role="tabpanel" class="tab-pane" id="academy">
                        <!-- Stuff Slider -->
                        <div class="staff-slider">
                            <!-- Single Stuff -->
                            <div class="staff-item col-xs-12">
                                <div class="image"><img src="{{asset('img/staff/academy/1.jpg')}}" alt=""></div>
                                <div class="content">
                                    <div class="details">
                                        <h4><a href="#">Carl Hill</a></h4>
                                        <p>Midfielder</p>
                                    </div>
                                    <h2 class="num">14</h2>
                                </div>
                            </div>
                            <!-- Single Stuff -->
                            <div class="staff-item col-xs-12">
                                <div class="image"><img src="{{asset('img/staff/academy/2.jpg')}}" alt=""></div>
                                <div class="content">
                                    <div class="details">
                                        <h4><a href="#">John Ward</a></h4>
                                        <p>Midfielder</p>
                                    </div>
                                    <h2 class="num">14</h2>
                                </div>
                            </div>
                            <!-- Single Stuff -->
                            <div class="staff-item col-xs-12">
                                <div class="image"><img src="{{asset('img/staff/academy/3.jpg')}}" alt=""></div>
                                <div class="content">
                                    <div class="details">
                                        <h4><a href="#">David Bates</a></h4>
                                        <p>Midfielder</p>
                                    </div>
                                    <h2 class="num">14</h2>
                                </div>
                            </div>
                            <!-- Single Stuff -->
                            <div class="staff-item col-xs-12">
                                <div class="image"><img src="{{asset('img/staff/academy/4.jpg')}}" alt=""></div>
                                <div class="content">
                                    <div class="details">
                                        <h4><a href="#">Carl Stanley</a></h4>
                                        <p>Midfielder</p>
                                    </div>
                                    <h2 class="num">14</h2>
                                </div>
                            </div>
                            <!-- Single Stuff -->
                            <div class="staff-item col-xs-12">
                                <div class="image"><img src="{{asset('img/staff/academy/2.jpg')}}" alt=""></div>
                                <div class="content">
                                    <div class="details">
                                        <h4><a href="#">Randy Bates</a></h4>
                                        <p>Midfielder</p>
                                    </div>
                                    <h2 class="num">14</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Staff Area End -->
    
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
    
    <!-- Product Area Start -->
    <div id="product-area" class="product-area section pb-100 pt-120">
        <div class="container">
            <!-- Section Title -->
            <div class="row">
               <div class="section-title text-center col-xs-12 mb-60">
                   <h1>top product</h1>
               </div>
            </div>
            <div class="row">
                <!-- Product Slider -->
                <div class="product-slider">
                    <!-- Single Product -->
                    <div class="col-md-3 col-xs-12">
                        <div class="product-item">
                            <!-- Product Image -->
                            <a href="#" class="image"><img src="{{asset('img/product/1.jpg')}}" alt=""></a>
                            <!-- Product Content -->
                            <div class="content">
                                <!-- Product Title -->
                                <h4 class="title"><a href="#">Title Product Here</a></h4>
                                <!-- Product Category -->
                                <h5 class="cat">Categories</h5>
                                <div class="price-ratting fix">
                                   <!-- Product Price -->
                                    <h3 class="price float-left"><span>$</span>28</h3>
                                    <!-- Product Ratting -->
                                    <span class="ratting float-right">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                    </span>
                                </div>
                                <!-- Product Action Button -->
                                <div class="action-btn fix">
                                    <a href="#" class="add-cart">ADD TO CART</a>
                                    <a href="#" class="wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product -->
                    <div class="col-md-3 col-xs-12">
                        <div class="product-item">
                            <!-- Product Image -->
                            <a href="#" class="image"><img src="{{asset('img/product/2.jpg')}}" alt=""></a>
                            <!-- Product Content -->
                            <div class="content">
                                <!-- Product Title -->
                                <h4 class="title"><a href="#">Title Product Here</a></h4>
                                <!-- Product Category -->
                                <h5 class="cat">Categories</h5>
                                <div class="price-ratting fix">
                                   <!-- Product Price -->
                                    <h3 class="price float-left"><span>$</span>28</h3>
                                    <!-- Product Ratting -->
                                    <span class="ratting float-right">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                    </span>
                                </div>
                                <!-- Product Action Button -->
                                <div class="action-btn fix">
                                    <a href="#" class="add-cart">ADD TO CART</a>
                                    <a href="#" class="wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product -->
                    <div class="col-md-3 col-xs-12">
                        <div class="product-item">
                            <!-- Product Image -->
                            <a href="#" class="image"><img src="{{asset('img/product/3.jpg')}}" alt=""></a>
                            <!-- Product Content -->
                            <div class="content">
                                <!-- Product Title -->
                                <h4 class="title"><a href="#">Title Product Here</a></h4>
                                <!-- Product Category -->
                                <h5 class="cat">Categories</h5>
                                <div class="price-ratting fix">
                                   <!-- Product Price -->
                                    <h3 class="price float-left"><span>$</span>28</h3>
                                    <!-- Product Ratting -->
                                    <span class="ratting float-right">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                    </span>
                                </div>
                                <!-- Product Action Button -->
                                <div class="action-btn fix">
                                    <a href="#" class="add-cart">ADD TO CART</a>
                                    <a href="#" class="wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product -->
                    <div class="col-md-3 col-xs-12">
                        <div class="product-item">
                            <!-- Product Image -->
                            <a href="#" class="image"><img src="{{asset('img/product/4.jpg')}}" alt=""></a>
                            <!-- Product Content -->
                            <div class="content">
                                <!-- Product Title -->
                                <h4 class="title"><a href="#">Title Product Here</a></h4>
                                <!-- Product Category -->
                                <h5 class="cat">Categories</h5>
                                <div class="price-ratting fix">
                                   <!-- Product Price -->
                                    <h3 class="price float-left"><span>$</span>28</h3>
                                    <!-- Product Ratting -->
                                    <span class="ratting float-right">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                    </span>
                                </div>
                                <!-- Product Action Button -->
                                <div class="action-btn fix">
                                    <a href="#" class="add-cart">ADD TO CART</a>
                                    <a href="#" class="wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product -->
                    <div class="col-md-3 col-xs-12">
                        <div class="product-item">
                            <!-- Product Image -->
                            <a href="#" class="image"><img src="{{asset('img/product/2.jpg')}}" alt=""></a>
                            <!-- Product Content -->
                            <div class="content">
                                <!-- Product Title -->
                                <h4 class="title"><a href="#">Title Product Here</a></h4>
                                <!-- Product Category -->
                                <h5 class="cat">Categories</h5>
                                <div class="price-ratting fix">
                                   <!-- Product Price -->
                                    <h3 class="price float-left"><span>$</span>28</h3>
                                    <!-- Product Ratting -->
                                    <span class="ratting float-right">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                    </span>
                                </div>
                                <!-- Product Action Button -->
                                <div class="action-btn fix">
                                    <a href="#" class="add-cart">ADD TO CART</a>
                                    <a href="#" class="wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area End -->
    
    <!-- Gallery Area Start -->
    <div id="gallery-area" class="gallery-area section overlay pb-100 pt-120">
        <div class="container">
            <!-- Section Title -->
            <div class="row">
               <div class="section-title title-white text-center col-xs-12 mb-70">
                   <h1>photo gallery</h1>
               </div>
            </div>
            <div class="row row-10">
                <!-- Single Gallery Image -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <a href="img/gallery/big-1.jpg" class="gallery-item overlay gallery-popup"><img src="{{asset('img/gallery/1.jpg')}}" alt=""></a>
                </div>
                <!-- Single Gallery Image -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <a href="img/gallery/big-2.jpg" class="gallery-item overlay gallery-popup"><img src="{{asset('img/gallery/2.jpg')}}" alt=""></a>
                </div>
                <!-- Single Gallery Image -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <a href="img/gallery/big-3.jpg" class="gallery-item overlay gallery-popup"><img src="{{asset('img/gallery/3.jpg')}}" alt=""></a>
                </div>
                <!-- Single Gallery Image -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <a href="img/gallery/big-4.jpg" class="gallery-item overlay gallery-popup"><img src="{{asset('img/gallery/4.jpg')}}" alt=""></a>
                </div>
                <!-- Single Gallery Image -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <a href="img/gallery/big-5.jpg" class="gallery-item overlay gallery-popup"><img src="{{asset('img/gallery/5.jpg')}}" alt=""></a>
                </div>
                <!-- Single Gallery Image -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <a href="img/gallery/big-6.jpg" class="gallery-item overlay gallery-popup"><img src="{{asset('img/gallery/6.jpg')}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Area End -->
    
    <!-- Point Table Area Start -->
    <div id="point-table-area" class="point-table-area section pb-120 pt-120">
        <div class="container">
            <!-- Section Title -->
            <div class="row">
               <div class="section-title text-center col-xs-12 mb-70">
                   <h1>Points Table</h1>
               </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
                    <!-- Points Table -->
                    <div class="table-responsive points-table">
                        <table class="table">
                            <tr>
                                <th>2016 / 2017</th>
                                <th>GP</th>
                                <th>W</th>
                                <th>D</th>
                                <th>L</th>
                                <th>F</th>
                                <th>PT</th>
                            </tr>
                            <tr>
                                <td>01. Abahani</td>
                                <td>25</td>
                                <td>21</td>
                                <td>2</td>
                                <td>2</td>
                                <td>52</td>
                                <td>48</td>
                            </tr>
                            <tr>
                                <td>02. Mohammedan</td>
                                <td>25</td>
                                <td>20</td>
                                <td>2</td>
                                <td>2</td>
                                <td>45</td>
                                <td>47</td>
                            </tr>
                            <tr>
                                <td>03. Arambagh KS</td>
                                <td>25</td>
                                <td>19</td>
                                <td>1</td>
                                <td>3</td>
                                <td>44</td>
                                <td>45</td>
                            </tr>
                            <tr>
                                <td>04. Brothers Union</td>
                                <td>25</td>
                                <td>19</td>
                                <td>1</td>
                                <td>3</td>
                                <td>40</td>
                                <td>44</td>
                            </tr>
                            <tr>
                                <td>05. Feni Soccer Club</td>
                                <td>25</td>
                                <td>19</td>
                                <td>1</td>
                                <td>3</td>
                                <td>40</td>
                                <td>44</td>
                            </tr>
                            <tr>
                                <td>06. Muktijoddha Sangsad</td>
                                <td>25</td>
                                <td>17</td>
                                <td>1</td>
                                <td>5</td>
                                <td>40</td>
                                <td>40</td>
                            </tr>
                        </table>
                    </div>
                    <a href="point-table.html" class="view-point-table">VIEW ALL</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Point Table Area End -->
    
    <!-- Video Area Start -->
    <div class="video-area section overlay">
        <div class="container">
            <div class="row">
                <!-- Video Wrapper -->
                <div class="video-wrapper col-xs-12 text-center">
                    <h1>RUNNING TUTORIAL SESSION</h1>
                    {{-- <a class="video-popup" href="https://www.youtube.com/watch?v=4n55_OwKJig"><i class="zmdi zmdi-play-circle-outline"></i></a> --}}
                    <a class="video-popup" href="#"><i class="zmdi zmdi-play-circle-outline"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Area End -->
    
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