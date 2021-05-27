    <!-- Header Area Start -->
    <div id="header-area" class="header-area section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Logo -->
                    <a class="logo float-left" href="{{route('index')}}"><img src="{{asset('img/logo.png')}}" alt=""></a>
                    <!-- Mini Cart -->
                    <div class="mini-cart float-right">
                        <a href={{route('cart')}}><i class="zmdi zmdi-shopping-basket"></i></a>
                    </div>
                    <!---- Menu ---->
                    <div id="main-menu" class="main-menu float-right">
                        <nav>
                            <ul>
                                <li @if(Route::is('index'))class="active"@endif><a href={{route('index')}}>home</a></li>
                                {{-- <li><a href={{route('about')}}>about</a></li>
                                <li><a href={{route('team')}}>team</a></li> --}}
                                @if(Auth::user())
                                    <li @if(Route::is('submit'))class="active"@endif><a href={{route('submit')}}>submit</a></li>
                                    @if(Auth::user()->isadmin == 1)
                                        <li @if(Route::is('fixture'))class="active"@endif><a href={{route('fixture')}}>fixtures</a></li>
                                        <li @if(Route::is('players'))class="active"@endif><a href={{route('players')}}>players</a></li>
                                        <li @if(Route::is('rounds'))class="active"@endif><a href={{route('rounds')}}>rounds</a></li>
                                        <li @if(Route::is('teams'))class="active"@endif><a href={{route('teams')}}>teams</a></li>
                                    @endif
                                @endif
                                {{-- <li><a href={{route('pointtable')}}>point table</a></li> --}}
                                {{-- <li><a href={{route('blog')}}>blog</a>
                                    <ul>
                                        <li><a href={{route('blog')}}>blog</a></li>
                                        <li><a href={{route('blogdetails')}}>blog details</a></li>
                                    </ul>
                                </li> --}}
                                {{-- <li><a href={{route('shop')}}>shop</a>
                                    <ul>
                                        <li><a href={{route('shop')}}>shop</a></li>
                                        <li><a href={{route('productdetails')}}>product details</a></li>
                                        <li><a href={{route('cart')}}>cart</a></li>
                                        <li><a href={{route('wishlist')}}>wishlist</a></li>
                                        <li><a href={{route('checkout')}}>checkout</a></li>
                                    </ul>
                                </li> --}}
                                {{-- <li><a href={{route('contact')}}>contact</a></li> --}}
                                @if(Auth::user())
                                    <li>
                                        <a href="#" onclick="logout()">logout</a>
                                        <form id="logoutform" class="w-full" method="post" action="{{ route('logout') }}">
                                            @csrf
                                        </form>
                                    </li>
                                @else
                                    <li><a href="{{route('login')}}">login</a></li>
                                @endif
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
