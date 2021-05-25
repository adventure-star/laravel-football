    <!-- Header Area Start -->
    <div id="header-area" class="header-area section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Logo -->
                    <a class="logo float-left" href="index.html"><img src="{{asset('img/logo.png')}}" alt=""></a>
                    <!-- Mini Cart -->
                    <div class="mini-cart float-right">
                        <a href={{route('cart')}}><i class="zmdi zmdi-shopping-basket"></i></a>
                    </div>
                    <!---- Menu ---->
                    <div id="main-menu" class="main-menu float-right">
                        <nav>
                            <ul>
                                <li class="active"><a href={{route('index')}}>home</a></li>
                                <li><a href={{route('about')}}>about</a></li>
                                <li><a href={{route('team')}}>team</a></li>
                                <li><a href={{route('fixture')}}>fixture</a></li>
                                <li><a href={{route('pointtable')}}>point table</a></li>
                                <li><a href={{route('blog')}}>blog</a>
                                    <ul>
                                        <li><a href={{route('blog')}}>blog</a></li>
                                        <li><a href={{route('blogdetails')}}>blog details</a></li>
                                    </ul>
                                </li>
                                <li><a href={{route('shop')}}>shop</a>
                                    <ul>
                                        <li><a href={{route('shop')}}>shop</a></li>
                                        <li><a href={{route('productdetails')}}>product details</a></li>
                                        <li><a href={{route('cart')}}>cart</a></li>
                                        <li><a href={{route('wishlist')}}>wishlist</a></li>
                                        <li><a href={{route('checkout')}}>checkout</a></li>
                                    </ul>
                                </li>
                                <li><a href={{route('contact')}}>contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!---- Mobile Menu ---->
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Area End -->