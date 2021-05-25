@extends('layouts.app')

@section('content')

<!-- Page Banner Area Start -->
<div id="page-banner-area" class="page-banner-area section">
    <div class="container">
        <div class="row">
            <div class="page-banner-title text-center col-xs-12">
                <h2>shop</h2>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner Area End -->

<!-- Shop Page Area Start -->
<div id="shop-page-area" class="shop-page-area section pb-70 pt-120">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-xs-12 float-right mb-50">
                <div class="row">
					<!-- Shop Top Bar -->
					<div class="shop-top-bar text-center mb-50 col-xs-12">
						<!-- Product View Mode -->
						<ul class="view-mode float-left text-left">
							<li class="active"><a href="#grid-view" data-toggle="tab"><i class="zmdi zmdi-apps"></i></a></li>
							<li><a href="#list-view" data-toggle="tab"><i class="zmdi zmdi-view-list"></i></a></li>
						</ul>
						<!-- Product Short By -->
						<div class="pro-short-by text-left">
							<p>SHORT BY</p>
							<select>
								<option value="1">Default</option>
								<option value="2">Feature</option>
								<option value="3">Best Selling</option>
								<option value="4">Alphabetically, A-Z</option>
								<option value="5">Alphabetically, Z-A</option>
								<option value="6">Price, low to high</option>
								<option value="7">Price, high to low</option>
								<option value="8">Date, new to old</option>
								<option value="9">Date, old to new</option>
							</select>
						</div>
						<!-- Product Showing Per Page -->
						<div class="pro-showing float-right text-left">
							<p>showing</p>
							<select>
								<option value="1">16</option>
								<option value="2">20</option>
								<option value="3">24</option>
								<option value="4">28</option>
								<option value="5">32</option>
							</select>
						</div>
					</div>
                </div>
                <div class="tab-content row">
                    <div role="tabpanel" class="tab-pane active" id="grid-view">
                        <!-- Single Product -->
                        <div class="col-lg-4 col-sm-6 col-xs-12 mb-50">
                            <div class="product-item">
                                <!-- Product Image -->
                                <a href="#" class="image"><img src="img/product/1.jpg" alt=""></a>
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
                        <div class="col-lg-4 col-sm-6 col-xs-12 mb-50">
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
                        <div class="col-lg-4 col-sm-6 col-xs-12 mb-50">
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
                        <div class="col-lg-4 col-sm-6 col-xs-12 mb-50">
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
                        <div class="col-lg-4 col-sm-6 col-xs-12 mb-50">
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
                        <div class="col-lg-4 col-sm-6 col-xs-12 mb-50">
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
                    <div role="tabpanel" class="tab-pane" id="list-view">
                        <!-- Single Product -->
                        <div class="col-xs-12 mb-50">
							<div class="list-product-item">
								<div class="image col-lg-4 col-sm-5 col-xs-12">
									<a href="#"><img src="{{asset('img/product/1.jpg')}}" alt="" /></a>
								</div>
								<div class="list-product-content col-lg-8 col-sm-7 col-xs-12">
                                    <!-- Product Title -->
                                    <h4 class="title"><a href="#">Title Product Here</a></h4>
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
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi  dunt a ut labore the  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud in a exer citation.</p>
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
                        <div class="col-xs-12 mb-50">
							<div class="list-product-item">
								<div class="image col-lg-4 col-sm-5 col-xs-12">
									<a href="#"><img src="{{asset('img/product/2.jpg')}}" alt="" /></a>
								</div>
								<div class="list-product-content col-lg-8 col-sm-7 col-xs-12">
                                    <!-- Product Title -->
                                    <h4 class="title"><a href="#">Title Product Here</a></h4>
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
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi  dunt a ut labore the  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud in a exer citation.</p>
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
                        <div class="col-xs-12 mb-50">
							<div class="list-product-item">
								<div class="image col-lg-4 col-sm-5 col-xs-12">
									<a href="#"><img src="{{asset('img/product/3.jpg')}}" alt="" /></a>
								</div>
								<div class="list-product-content col-lg-8 col-sm-7 col-xs-12">
                                    <!-- Product Title -->
                                    <h4 class="title"><a href="#">Title Product Here</a></h4>
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
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi  dunt a ut labore the  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud in a exer citation.</p>
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
                        <div class="col-xs-12 mb-50">
							<div class="list-product-item">
								<div class="image col-lg-4 col-sm-5 col-xs-12">
									<a href="#"><img src="{{asset('img/product/4.jpg')}}" alt="" /></a>
								</div>
								<div class="list-product-content col-lg-8 col-sm-7 col-xs-12">
                                    <!-- Product Title -->
                                    <h4 class="title"><a href="#">Title Product Here</a></h4>
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
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi  dunt a ut labore the  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud in a exer citation.</p>
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
                        <div class="col-xs-12 mb-50">
							<div class="list-product-item">
								<div class="image col-lg-4 col-sm-5 col-xs-12">
									<a href="#"><img src="{{asset('img/product/1.jpg')}}" alt="" /></a>
								</div>
								<div class="list-product-content col-lg-8 col-sm-7 col-xs-12">
                                    <!-- Product Title -->
                                    <h4 class="title"><a href="#">Title Product Here</a></h4>
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
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi  dunt a ut labore the  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud in a exer citation.</p>
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
                <div class="row">
                    <!-- Shop Bottom Bar -->
					<div class="shop-bottom-bar text-center col-xs-12">
						<!-- Product Pagination -->
						<div class="pagination float-left">
							<p>Showing 1 - 16 of 97 items</p>
							<ul class="float-left">
								<li><a href="#"><i class="zmdi zmdi-chevron-left"></i></a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
							</ul>
						</div>
						<!-- Product Showing Per Page -->
						<div class="pro-showing float-right text-left">
							<p>showing</p>
							<select>
								<option value="1">16</option>
								<option value="2">20</option>
								<option value="3">24</option>
								<option value="4">28</option>
								<option value="5">32</option>
							</select>
						</div>
					</div>
                </div>
            </div>
            <div class="col-md-3 col-xs-12">
				<!-- Single Shop Sidebar -->
                <div class="single-shop-sidebar mb-50">
                    <h4>Categories</h4>
                    <ul class="category-sidebar">
                        <li><a href="#">jersey</a></li>
                        <li><a href="#">cap</a></li>
                        <li><a href="#">boots</a></li>
                        <li><a href="#">T-Shart</a></li>
                        <li><a href="#">ball</a></li>
                        <li><a href="#">soocks</a></li>
                        <li><a href="#">glaves</a></li>
                    </ul>
                </div>
				<!-- Single Shop Sidebar -->
                <div class="single-shop-sidebar mb-50">
                    <h4>size</h4>
                    <ul class="size-sidebar">
                        <li><a href="#">s</a></li>
                        <li><a href="#">m</a></li>
                        <li><a href="#">l</a></li>
                        <li><a href="#">xl</a></li>
                        <li><a href="#">xxl</a></li>
                    </ul>
                </div>
				<!-- Single Shop Sidebar -->
                <div class="single-shop-sidebar mb-50">
                    <h4>color</h4>
                    <ul class="color-sidebar">
                        <li><a href="#">red</a></li>
                        <li><a href="#">blue</a></li>
                        <li><a href="#">green</a></li>
                        <li><a href="#">purple</a></li>
                        <li><a href="#">orange</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Point Table Area End -->

@include('layouts.breakingnews')

@endsection