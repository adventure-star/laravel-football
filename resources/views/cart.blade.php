@extends('layouts.app')

@section('content')

<!-- Page Banner Area Start -->
<div id="page-banner-area" class="page-banner-area section">
    <div class="container">
        <div class="row">
            <div class="page-banner-title text-center col-xs-12">
                <h2>cart</h2>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner Area End -->

<!-- Cart Area Start -->
<div class="cart-area section pb-90 pt-120">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
                <!-- Cart Table -->
				<div class="cart-table table-responsive mb-50">
					<table class="table text-center">
						<thead>
							<tr>
								<th class="product">product</th>
								<th class="price">price</th>
								<th class="stock">stock status</th>
								<th class="qty">quantity</th>
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
								<td><div class="cart-pro-qunantuty">
								    <input value="0" type="text">
								</div></td>
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
								<td><div class="cart-pro-qunantuty">
								    <input value="0" type="text">
								</div></td>
								<td><button class="cart-pro-remove"><i class="zmdi zmdi-close"></i></button></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="row">
		    <!-- Shipping Tax -->
			<div class="shipping-tax col-md-4 col-xs-12 mb-30">
				<h4>ESTIMATE SHIPPING AND TAX</h4>
				<form action="#">
					<div class="input-box">
						<select>
							<option>Country</option>
							<option>Bangladesh</option>
							<option>Morocco</option>
							<option>South Africa</option>
						</select>
					</div>
					<div class="input-box">
						<select>
							<option>City</option>
							<option>Dhaka</option>
							<option>Rabat</option>
							<option>Cape Town</option>
						</select>
					</div>
					<div class="input-box"><input type="text" placeholder="State/Province" /></div>
					<div class="input-box"><input type="text" placeholder="Zip/Postal Code" /></div>
					<div class="input-box submit-box"><input type="submit" value="Get a Quote" /></div>
				</form>
			</div>
		    <!-- Product Coupon -->
			<div class="product-coupon col-md-4 col-xs-12 mb-30">
				<h4>COUPON DISCOUNT</h4>
				<p>Enter Your Coupon Code Here</p>
				<form action="#">
					<div class="input-box"><input type="text" /></div>
					<div class="input-box submit-box"><input type="submit" value="Apply Coupon" /></div>
				</form>
			</div>
		    <!-- Procced Checkout -->
			<div class="procced-checkout col-md-4 col-xs-12 mb-30">
				<h4>CART TOTAL</h4>
				<ul>
					<li><span class="name">Subtotal</span><span class="price">$ 415.00</span></li>
					<li><span class="name">Shipping</span><span class="price">$ 415.00</span></li>
					<li><span class="name">Grand Total</span><span class="price">$ 415.00</span></li>
				</ul>
				<a href="#" class="checkout-link">Procced to checkout</a>
			</div>
		</div>
	</div>
</div>
<!-- Cart Area End -->

@include('layouts.breakingnews')

@endsection