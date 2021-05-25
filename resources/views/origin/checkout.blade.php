@extends('layouts.app')

@section('content')

<!-- Page Banner Area Start -->
<div id="page-banner-area" class="page-banner-area section">
    <div class="container">
        <div class="row">
            <div class="page-banner-title text-center col-xs-12">
                <h2>checkout</h2>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner Area End -->

<!-- Checkout Area Start -->
<div class="checkout-area section pb-70 pt-120">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-xs-12 mb-50">
			    <!-- Billing Details -->
				<div class="billing-details">
					<h4>billing details</h4>
					<form action="#">
						<input type="text" placeholder="Your Name" />
						<input type="text" placeholder="Enter Your Here" />
						<input type="text" placeholder="Phone Here" />
						<input type="text" placeholder="Company Name Here" />
						<input type="text" placeholder="Country" />
						<input type="text" placeholder="State" />
						<input type="text" placeholder="Town / City" />
						<textarea placeholder="Type Your Message"></textarea>
					</form>
				</div>
			</div>
			<div class="col-md-6 col-xs-12 mb-50">
			    <!-- Order Payment -->
				<div class="order-payment">
					<h4>your order</h4>
					<ul>
						<li><span class="name">Dummy Product Name  x 2</span><span class="price">$86.00</span></li>
						<li><span class="name">Dummy Product Name  x 1</span><span class="price">$69.00</span></li>
						<li><span class="name">Cart Subtotal</span><span class="price">$155.00</span></li>
						<li><span class="name">Shipping and Handing</span><span class="price">$15.00</span></li>
						<li><span class="name">Vat</span><span class="price">$00.00</span></li>
						<li><span class="name">Order Total</span><span class="price">$325.00</span></li>
					</ul>
					<h4>payment method</h4>
					<div class="panel-group" id="payment-accordion">
						<div class="panel panel-default">
							<h4 class="panel-title bg-white"><a data-toggle="collapse" data-parent="#payment-accordion" href="#payment-1">direct bank transfer</a></h4>
							<div id="payment-1" class="panel-collapse collapse in">
								<div class="panel-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<h4 class="panel-title bg-white"><a class="collapsed" data-toggle="collapse" data-parent="#payment-accordion" href="#payment-2">cheque payment</a></h4>
							<div id="payment-2" class="panel-collapse collapse">
								<div class="panel-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<h4 class="panel-title bg-white"><a class="collapsed" data-toggle="collapse" data-parent="#payment-accordion" href="#payment-3">paypal</a></h4>
							<div id="payment-3" class="panel-collapse collapse">
								<div class="panel-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
					</div>
					<button class="place-order">place order</button>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Checkout Area End -->

@include('layouts.breakingnews')

@endsection