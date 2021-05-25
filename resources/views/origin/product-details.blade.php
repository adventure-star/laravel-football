@extends('layouts.app')

@section('content')

<!-- Page Banner Area Start -->
<div id="page-banner-area" class="page-banner-area section">
    <div class="container">
        <div class="row">
            <div class="page-banner-title text-center col-xs-12">
                <h2>product details</h2>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner Area End -->

<!-- Shop Page Area Start -->
<div id="shop-page-area" class="shop-page-area section pb-70 pt-120">
    <div class="container">
        <div class="row">
            <!-- Single Product Wrapper -->
            <div class="single-product-wrap">
                <!-- Single Product Image -->
                <div class="single-product-image col-md-5 col-xs-12">
                    <!-- Product Thumb Slider -->
                    <div class="product-thumb-slider">
                        <div class="sin-item"><img src="{{asset('img/product/1.jpg')}}" alt="" /></div>
                        <div class="sin-item"><img src="{{asset('img/product/2.jpg')}}" alt="" /></div>
                        <div class="sin-item"><img src="{{asset('img/product/3.jpg')}}" alt="" /></div>
                        <div class="sin-item"><img src="{{asset('img/product/4.jpg')}}" alt="" /></div>
                    </div>
                    <!-- Product Image Slider -->
                    <div class="product-image-slider">
                        <a class="image-popup" href="img/product/1.jpg"><img src="{{asset('img/product/1.jpg')}}" alt="" /></a>
                        <a class="image-popup" href="img/product/1.jpg"><img src="{{asset('img/product/2.jpg')}}" alt="" /></a>
                        <a class="image-popup" href="img/product/1.jpg"><img src="{{asset('img/product/3.jpg')}}" alt="" /></a>
                        <a class="image-popup" href="img/product/1.jpg"><img src="{{asset('img/product/4.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <!-- Single Product Content -->
                <div class="single-product-content col-md-7 col-xs-12">
                    <!-- Product Title -->
                    <h3 class="title">Title Product Here</h3>
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
                    <!-- Product Description -->
                    <div class="list-product-dec">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi  dunt a ut labore the  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud in a exer citation. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi  dunt a ut labore the  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud in a exer citation.</p>
                    </div>
                    <!-- Product Action Button -->
                    <div class="action-btn fix">
                        <a href="#" class="add-cart">ADD TO CART</a>
                        <a href="#" class="wishlist"><i class="zmdi zmdi-favorite"></i></a>
                    </div>
                    <div class="product-share fix">
                        <h5>Share:</h5>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-rss"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
			<div class="col-xs-12 mt-40">
				<div class="pro-details-tab-container fix">
					<ul class="pro-details-tablist fix">
						<li class="active"><a href="#description" data-toggle="tab">description</a></li>
						<li><a href="#information" data-toggle="tab">information</a></li>
						<li><a href="#reviews" data-toggle="tab">reviews</a></li>        
					</ul>
					<div class="tab-content fix">
						<!-- Product Info Tab -->
						<div id="description" class="pro-details-tab pro-dsc-tab tab-pane active">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
							<ul>
								<li>Lorem ipsum dolor sit amet, consectetur product</li>
								<li>Duis aute irure dolor in reprehenderit in voluptate velit esse</li>
								<li>Excepteur sinted occaecat cupidatat non proident products</li>
								<li>Voluptate velit esse cillum.</li>
							</ul>
						</div>
						<!-- Product Info Tab -->
						<div id="information" class="pro-details-tab pro-info-tab tab-pane">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
						<!-- Product Info Tab -->
						<div id="reviews" class="pro-details-tab pro-rev-tab tab-pane">
							<div class="review-wrapper fix">
								<div class="sin-review">
									<div class="review-image">
										<img src="img/review/1.jpg" alt="" />
									</div>
									<div class="review-details fix">
										<div class="review-author float-left">
											<h3>Gerald Barnes</h3>
											<div class="review-star float-left">
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
											</div>
											<span>27 Jun 2016 at 12:24pm</span>
										</div>
										<div class="replay-delect float-right">
											<a href="#"><i class="zmdi zmdi-mail-reply"></i></a>
											<a href="#"><i class="zmdi zmdi-close"></i></a>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at estei to bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
									</div>
								</div>
								<div class="sin-review">
									<div class="review-image">
										<img src="{{asset('img/review/2.jpg')}}" alt="" />
									</div>
									<div class="review-details fix">
										<div class="review-author float-left">
											<h3>Gerald Barnes</h3>
											<div class="review-star float-left">
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
												<i class="zmdi zmdi-star"></i>
											</div>
											<span>27 Jun 2016 at 12:24pm</span>
										</div>
										<div class="replay-delect float-right">
											<a href="#"><i class="zmdi zmdi-mail-reply"></i></a>
											<a href="#"><i class="zmdi zmdi-close"></i></a>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at estei to bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
									</div>
								</div>
							</div>
				            <!-- Review Form -->
							<div class="review-form-wrapper fix">
								<h3>write a review</h3>
								<div class="review-form">
									<form action="#">
										<div class="star-box fix">
											<h4>your Rating</h4>
											<div class="star star-1">
												<i class="zmdi zmdi-star-outline"></i>
											</div>
											<div class="star star-2">
												<i class="zmdi zmdi-star-outline"></i>
												<i class="zmdi zmdi-star-outline"></i>
											</div>
											<div class="star star-3">
												<i class="zmdi zmdi-star-outline"></i>
												<i class="zmdi zmdi-star-outline"></i>
												<i class="zmdi zmdi-star-outline"></i>
											</div>
											<div class="star star-4">
												<i class="zmdi zmdi-star-outline"></i>
												<i class="zmdi zmdi-star-outline"></i>
												<i class="zmdi zmdi-star-outline"></i>
												<i class="zmdi zmdi-star-outline"></i>
											</div>
											<div class="star star-5">
												<i class="zmdi zmdi-star-outline"></i>
												<i class="zmdi zmdi-star-outline"></i>
												<i class="zmdi zmdi-star-outline"></i>
												<i class="zmdi zmdi-star-outline"></i>
												<i class="zmdi zmdi-star-outline"></i>
											</div>
										</div>
										<div class="input-box-2 fix">
											<div class="input-box float-left">
												<input id="name" placeholder="Type your name" type="text">
											</div>
											<div class="input-box float-left">
												<input placeholder="Type your email" type="text">
											</div>
										</div>
										<div class="input-box review-box fix">
											<textarea placeholder="Write your review"></textarea>
										</div>
										<div class="input-box submit-box fix">
											<input value="submit review" type="submit">
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
</div>
<!-- Point Table Area End -->

@include('layouts.breakingnews')

@endsection