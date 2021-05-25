@extends('layouts.app')

@section('content')

<!-- Page Banner Area Start -->
<div id="page-banner-area" class="page-banner-area section">
    <div class="container">
        <div class="row">
            <div class="page-banner-title text-center col-xs-12">
                <h2>blog details</h2>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner Area End -->

<!-- Blog Area Start -->
<div id="blog-area" class="blog-area section pb-70 pt-120">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12 mb-50">
			
				<!-- Single Blog Details -->
				<div class="single-blog-details fix">
				    
				    <!-- Blog Details Media -->
					<div class="blog-details-media">
						<img src="{{asset('img/blog/single.jpg')}}" alt="blog">
					</div>
									    
				    <!-- Blog Details Content -->
					<div class="blog-details-content fix">
						<h3 class="blog-title">Wariations of Passages of Lorem Ipsum Available ashes here.</h3>
						<div class="blog-meta fix">
							<a href="#"><i class="zmdi zmdi-calendar-check"></i> 25 Jun 2050</a>
							<a href="#"><i class="zmdi zmdi-folder"></i> Web Design</a>
							<a href="#"><i class="zmdi zmdi-comments"></i> 19</a>
						</div>
						<p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour, There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
						<p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour, There are many variations of passages of Lorem Ipsum available,</p>
						<blockquote>
							<p>but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Loremsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
						</blockquote>
						<p>Lorem Ipsuable, amrn in some by injected humour, There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
					</div>
									    
				    <!-- Blog Details Footer -->
					<div class="blog-details-footer fix">
									    
				        <!-- Blog Details Tags -->
						<div class="blog-tags float-left">
							<p>tags:</p>
							<a href="#">design,</a>
							<a href="#">photoshop,</a>
							<a href="#">web design,</a>
							<a href="#">print</a>
						</div>
                    
				        <!-- Blog Details Share -->
						<div class="blog-share float-right">
							<p>share:</p>
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
						</div>
						
					</div>
					
				</div>
				
				<!-- Comment List -->	
				<div class="comment-wrapper fix">
					<h3>Comments</h3>
					<ul class="comment-list">
						<li>
							<div class="sin-comment fix">
								<div class="image float-left"><img src="{{asset('img/comment/1.jpg')}}" alt=""></div>
								<div class="content fix">
									<h4>Steven Porter</h4>
									<h5>Posted on Jun 12, 2015 / <a href="#">Reply</a></h5>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have uffeaation in some form, by injected humour, amr song bangla ami otami</p>
								</div>
							</div>
							<ul class="comment-list child">
								<li>
									<div class="sin-comment fix">
										<div class="image float-left"><img src="{{asset('img/comment/2.jpg')}}" alt=""></div>
										<div class="content fix">
											<h4>Steven Porter</h4>
										<h5>Posted on Jun 12, 2015 / <a href="#">Reply</a></h5>
											<p>There are many variations of passages of Lorem Ipsum available, but the majority have uffeaation in some form, by injected humour, amr song bangla ami otami</p>
										</div>
									</div>
								</li>
							</ul>
						</li>
						<li>
							<div class="sin-comment fix">
								<div class="image float-left"><img src="{{asset('img/comment/3.jpg')}}" alt=""></div>
								<div class="content fix">
									<h4>Steven Porter</h4>
									<h5>Posted on Jun 12, 2015 / <a href="#">Reply</a></h5>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have uffeaation in some form, by injected humour, amr song bangla ami otami</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
				
				<!-- Comment Form -->	
				<div class="comment-form-wrapper fix">
					<h3>Leave A Comment</h3>
					<div class="comment-form">
						<form>
							<div class="input-box box-half">
								<input name="name" placeholder="Name" type="text">
							</div>
							<div class="input-box box-half">
								<input name="email" placeholder="Email" type="email">
							</div>
							<div class="input-box">
								<textarea name="message" placeholder="Message"></textarea>
							</div>
							<div class="input-box">
								<input value="submit" type="submit">
							</div>
						</form>
					</div>
				</div>
            </div>
            <!-- Blog Sidebar -->
            <div class="col-md-4 col-xs-12 mb-50">
               
                <!-- Single Sidebar -->
                <div class="single-sidebar fix mb-30">
                    <h4>Search</h4>
                    
                    <form action="#" id="search-form">
                        <input type="text" placeholder="Search">
                        <button><i class="zmdi zmdi-search"></i></button>
                    </form>
                    
                </div>
               
                <!-- Single Sidebar -->
                <div class="single-sidebar fix mb-30">
                    <h4>Category</h4>
                    
                    <ul class="categories">
                        <li> <a href=""> Marketing(11)</a></li>
                        <li> <a href=""> Groth Rate / Facilities(54)</a></li>
                        <li> <a href=""> Telecommunications(13)</a></li>
                        <li> <a href=""> Real Estate(23)</a></li>
                        <li> <a href=""> SEO Analysis(42)</a></li>
                    </ul>
                    
                </div>
               
                <!-- Single Sidebar -->
                <div class="single-sidebar fix mb-30">
                    <h4>Latest Post</h4>
                    
                    <div class="sidebar-post">
                        <a href="#" class="image float-left"><img src="{{asset('img/sidebar-post/1.jpg')}}" alt=""></a>
                        <div class="content fix">
                            <a href="#">If you are going</a>
                            <p>There are many variaons of passages of Lorem Ipsuable.</p>
                        </div>
                    </div>
                    
                    <div class="sidebar-post">
                        <a href="#" class="image float-left"><img src="{{asset('img/sidebar-post/2.jpg')}}" alt=""></a>
                        <div class="content fix">
                            <a href="#">If you are going</a>
                            <p>There are many variaons of passages of Lorem Ipsuable.</p>
                        </div>
                    </div>
                    
                    <div class="sidebar-post">
                        <a href="#" class="image float-left"><img src="{{asset('img/sidebar-post/3.jpg')}}" alt=""></a>
                        <div class="content fix">
                            <a href="#">If you are going</a>
                            <p>There are many variaons of passages of Lorem Ipsuable.</p>
                        </div>
                    </div>
                    
                </div>
               
                <!-- Single Sidebar -->
                <div class="single-sidebar fix mb-30">
                    <h4>Tag Cloud</h4>
                    
                    <div class="tag-cloud">
                        <a href="#.">marketing</a>
                        <a href="#.">onpage</a>
                        <a href="#.">offpage</a>
                        <a href="#.">rules</a>
                        <a href="#.">works</a>
                        <a href="#.">technology</a>
                        <a href="#.">responsive</a>
                        <a href="#.">training</a>
                        <a href="#.">keywords</a>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- Blog Area End -->

@include('layouts.breakingnews')

@endsection