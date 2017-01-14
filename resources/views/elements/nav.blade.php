<div id="header">
		<div class="top-header">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4 hidden-xs">
						<div class="top-left">
							<div class="language-box">
								<a href="#" class="language-link">En</a>
								<div class="language-inner-box item-box-sub">
									<ul class="list-unstyled">
										<li><a href="#">English</a></li>
										<li><a href="#">France</a></li>
										<li><a href="#">Germany</a></li>
										<li><a href="#">Italia</a></li>
									</ul>
								</div>
							</div>
							<div class="currency-box">
								<a href="#" class="currency-link">$ BTC</a>
								<div class="currency-inner-box item-box-sub">
									<ul class="list-unstyled">
										<li><a href="#">BTC</a></li>
										<li><a href="#">Dollar</a></li>
										<li><a href="#">Franch</a></li>
										<li><a href="#">Mark</a></li>
										<li><a href="#">Lira</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-8 col-sm-8 col-xs-12">
						<div class="top-right">
							<ul class="list-inline">
								<li class="info-user">
									<a href="#" class="account-link"><i class="fa fa-user" aria-hidden="true"></i> My Account</a>
									<ul class="list-unstyled inner-user-info">
										
										<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> Wishlist</a></li>
										<li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i> Compare</a></li>
										<li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> Checkout</a></li>
									</ul>
								</li>
								<li class="info-wishlist"><a href="#" class="wishlist-link"><i class="fa fa-heart" aria-hidden="true"></i>wishlist</a></li>
								<li class="info-cart">
									<a href="#" class="mycart-link"><i class="fa fa-opencart" aria-hidden="true"></i> My Cart <span class="number-cart-total">{{count($cart)}} </span></a>
									<div class="inner-cart-info">

										<h2>{{count($cart)}} items</h2>
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
													<a href="#" class="remove-product"></a>
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
											<label>Subtotal</label> <span>${{$subTotal}}</span> / ฿ {{number_format($subTotal/$btc_price['last'],4)}}
										</div>
										<div class="link-cart" style="text-align: center;">
											<a href="/thanks" class="cart-checkout">checkout</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-header header-ontop">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="logo logo1">
							<h1 class="hidden">Lucky Html Theme</h1>
							<a href="/"><img src="/images/home1/logo.png" alt=""></a>	
						</div>
						<nav class="main-nav main-nav1">
							<ul class="main-menu">
								<li class="menu-item-has-children current-menu-item">
									<a href="/">Home</a>
									<ul class="sub-menu">
										<li class="menu-item-has-children">
											<a href="#">Home 1-5</a>
											<ul class="sub-menu">
												<li class="menu-item-preview">
													<a href="home-1.html">Home 1</a>
													<div class="preview-image">
														<a href="home-1.html"><img src="/images/previews/02_index_01.jpg" alt="" /></a>
													</div>
												</li>
												<li class="menu-item-preview">
													<a href="home-2.html">Home 2</a>
													<div class="preview-image">
														<a href="home-2.html"><img src="/images/previews/02_index_02.jpg" alt="" /></a>
													</div>
												</li>
												<li class="menu-item-preview">
													<a href="home-3.html">Home 3</a>
													<div class="preview-image">
														<a href="home-3.html"><img src="/images/previews/02_index_03.jpg" alt="" /></a>
													</div>
												</li>
												<li class="menu-item-preview">
													<a href="home-4.html">Home 4</a>
													<div class="preview-image">
														<a href="home-4.html"><img src="/images/previews/02_index_04.jpg" alt="" /></a>
													</div>
												</li>
												<li class="menu-item-preview">
													<a href="home-5.html">Home 5</a>
													<div class="preview-image">
														<a href="home-5.html"><img src="/images/previews/02_index_05.jpg" alt="" /></a>
													</div>
												</li>
											</ul>
										</li>
										<li class="menu-item-has-children">
											<a href="#">Home 6-10</a>
											<ul class="sub-menu">
												<li class="menu-item-preview">
													<a href="home-6.html">Home 6</a>
													<div class="preview-image">
														<a href="home-6.html"><img src="/images/previews/02_index_06.jpg" alt="" /></a>
													</div>
												</li>
												<li class="menu-item-preview">
													<a href="home-7.html">Home 7</a>
													<div class="preview-image">
														<a href="home-7.html"><img src="/images/previews/02_index_07.jpg" alt="" /></a>
													</div>
												</li>
												<li class="menu-item-preview">
													<a href="home-8.html">Home 8</a>
													<div class="preview-image">
														<a href="home-8.html"><img src="/images/previews/02_index_08.jpg" alt="" /></a>
													</div>
												</li>
												<li class="menu-item-preview">
													<a href="home-9.html">Home 9</a>
													<div class="preview-image">
														<a href="home-9.html"><img src="/images/previews/02_index_09.jpg" alt="" /></a>
													</div>
												</li>
												<li class="menu-item-preview">
													<a href="home-10.html">Home 10</a>
													<div class="preview-image">
														<a href="home-10.html"><img src="/images/previews/02_index_10.jpg" alt="" /></a>
													</div>
												</li>
											</ul>
										</li>
										<li class="menu-item-has-children">
											<a href="#">Home 11-14</a>
											<ul class="sub-menu">
												<li class="menu-item-preview">
													<a href="home-11.html">Home 11</a>
													<div class="preview-image">
														<a href="home-11.html"><img src="/images/previews/02_index_11.jpg" alt="" /></a>
													</div>
												</li>
												<li class="menu-item-preview">
													<a href="home-12.html">Home 12</a>
													<div class="preview-image">
														<a href="home-12.html"><img src="/images/previews/02_index_12.jpg" alt="" /></a>
													</div>
												</li>
												<li class="menu-item-preview">
													<a href="home-13.html">Home 13</a>
													<div class="preview-image">
														<a href="home-13.html"><img src="/images/previews/02_index_13.jpg" alt="" /></a>
													</div>
												</li>
												<li class="menu-item-preview">
													<a href="home-14.html">Home 14</a>
													<div class="preview-image">
														<a href="home-14.html"><img src="/images/previews/02_index_14.jpg" alt="" /></a>
													</div>
												</li>
											</ul>
										</li>
									</ul>
								</li>

								<li class="menu-item-has-children">
									<a href="grid.html">Shop</a>
									<ul class="sub-menu">
										<li><a href="list.html">List Product</a></li>
										<li><a href="grid.html">Grid Product</a></li>
										<li><a href="detail.html">Detail</a></li>
										<li><a href="detail-group.html">Detail Group</a></li>
										<li><a href="detail-config.html">Detail Configuration</a></li>
										<li><a href="detail-extralink.html">Detail Extra Link</a></li>
									</ul>
								</li>
								<li class="menu-item-has-children">
									<a href="blog.html">Blog</a>
									<ul class="sub-menu">
										<li><a href="blog.html">List Post</a></li>
										<li><a href="single.html">Single Post</a></li>
									</ul>
								</li>
							</ul>
							<a href="#" class="toggle-mobile-menu"><span></span></a>
						</nav>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="wrap-search-login">
							<div class="search-form">
								<form>
									<input onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" value="Find amazing products" type="text">
									<div class="submit-form">
										<input value="" type="submit">
									</div>
								</form>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
<!-- End Header -->