@extends('layout')
@section('content')

<section id="cart_items">
		<div class="container col-sm-12">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<?php
				    $cartCollection=Cart::getContent();
				    //echo "<pre>";
				    //print_r($cartCollection);
				    //echo "</pre>";
				    //exit();
				?>

				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Image</td>
							<td class="description">Name</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td>Action</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($cartCollection as $v_cartCollection) {?>
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{URL::to($v_cartCollection->attributes->image)}}" height="80px" width="80px"  alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$v_cartCollection->name}}</a></h4>
							</td>
							<td class="cart_price">
								<p>{{$v_cartCollection->price}}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="{{$v_cartCollection->qty}}" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">{{$v_cartCollection->total}}</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<?php } ?>

						
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

<section id="do_action">
	<div class="container">
		<div class="heading">
			<h3>What would you like to do next?</h3>
			<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
		</div>
		<div class="breadcrumbs">
			<ol class="breadcrumb">
			  <li><a href="#">Home</a></li>
			  <li class="active">Payment method</li>
			</ol>
		</div>
		<div class="paymentCont col-sm-8">
					<div class="headingWrap">
							<h3 class="headingTop text-center">Select Your Payment Method</h3>	
							<p class="text-center">Created with bootsrap button and using radio button</p>
					</div>
				
						<form action="{{url('/order-place')}}" method="post">
					        {{csrf_field()}}
				            <input type="radio" name="payment_method" value="handcash"> Hand Cash<br>
				            <input type="radio" name="payment_method" value="cart"> Debit Card<br>
				            <input type="radio" name="payment_method" value="bkash"> B-Kash<br>
				            <input type="submit" name="Done" >
				          
				        </form>
			</div>
	</div>
</section><!--/#do_action-->

@endsection