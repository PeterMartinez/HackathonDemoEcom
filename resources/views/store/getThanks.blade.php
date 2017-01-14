@section('title', 'Title')
@section('description', 'Description')

@section('page_styles')
@stop

@section('page_scripts')
@stop

@section('onReady_Scripts')
BitTastic.init();
	BitTastic.initIFrame('.main-content');
@stop

@extends('layouts.main')
@section('content')
<div class="main-content">
	<div class="row">
		<div class="col-md-3 col-md-offset-4">

			<div class="inner-cart-info">
			<h1>Thanks!</h1>	
			<p>
				For shopping at Lucky Online Store, we hope you enjoyed your shoping experience!
			</p>		
			<ul class="info-list-cart">
				@if(count($cart) > 0)
				<?php $subTotal = 0;?>
				@foreach($cart as $cartItem)
				<?php $subTotal += $cartItem[0]['qty']*$cartItem[0]['item']	['price'];?>
				<li class="item-info-cart">
					<div class="cart-thumb">
						<a href="#" class="cart-thumb">
							<img src="{{$cartItem[0]['item']['img']}}" alt="">
						</a>
					</div>	
					<div class="wrap-cart-title">
						<h3 class="cart-title"><a href="#">Lucky shop Product {{$cartItem[0]['qty']}}</a></h3>
						<div class="cart-qty"><label>Qty:</label> <span>{{$cartItem[0]['qty']}}</span></div>
					</div>	
					<div class="wrap-cart-remove">
						<br/>
						<span class="cart-price">
						${{number_format($cartItem[0]['qty']*$cartItem[0]['item']['price'],2)}}
						<br/>
						 ฿ {{number_format(($cartItem[0]['qty']*$cartItem[0]['item']['price'])/$btc_price['last'],4)}}
						</span>
					</div>	
				</li>
				@endforeach
				@endif
				
			</ul>
			<div class="total-cart">
				<label>Charged</label> <span>${{$subTotal}}</span> / ฿ {{number_format($subTotal/$btc_price['last'],4)}}
			</div>			
			</div>
		</div>
	</div>
</div>
@stop