@extends('layouts.app')

@section('content')

<!-- Page Banner Area Start -->
<div id="page-banner-area" class="page-banner-area section">
    <div class="container">
        <div class="row">
            <div class="page-banner-title text-center col-xs-12">
                <h2>wishlist</h2>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner Area End -->

<!-- Wishlist Area Start -->
<div class="wishlist-area section pb-120 pt-120">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
                <!-- Wishlist Table -->
				<div class="cart-table table-responsive">
					<table class="table text-center">
						<thead>
							<tr>
								<th class="product">product</th>
								<th class="price">price</th>
								<th class="stock">stock status</th>
								<th class="add-cart">add to cart</th>
								<th class="remove">remove</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><div class="cart-product text-left fix">
									<img src="{{asset('img/product/1.jpg')}}" alt="" />
									<div class="details fix">
										<a href="#">Title Product Here</a>
										<p>Color :  Black</p>
										<p>Size :  SL</p>
									</div>
								</div></td>
								<td><p class="cart-price">$56.00</p></td>
								<td><p class="cart-stock">in stock</p></td>
								<td><a href="#" class="add-cart-btn">add to cart</a></td>
								<td><button class="cart-pro-remove"><i class="zmdi zmdi-close"></i></button></td>
							</tr>
							<tr>
								<td><div class="cart-product text-left fix">
									<img src="{{asset('img/product/2.jpg')}}" alt="" />
									<div class="details fix">
										<a href="#">Title Product Here</a>
										<p>Color :  Black</p>
										<p>Size :  SL</p>
									</div>
								</div></td>
								<td><p class="cart-price">$56.00</p></td>
								<td><p class="cart-stock">in stock</p></td>
								<td><a href="#" class="add-cart-btn">add to cart</a></td>
								<td><button class="cart-pro-remove"><i class="zmdi zmdi-close"></i></button></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Wishlist Area End -->

@include('layouts.breakingnews')

@endsection