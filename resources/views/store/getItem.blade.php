@section('title', 'Title')
@section('description', 'Description')

@section('page_styles')
@stop

@section('page_scripts')
@stop

@section('onReady_Scripts')
@stop

@extends('layouts.main')
@section('content')
<div class="main-content">
	<div class="container">
		<div class="bread-crumb">
			<a href="#">Home</a> <i class="fa fa-caret-right" aria-hidden="true"></i> <span>Light</span>
		</div>
		<div class="row">
			<div class="col-md-9 col-sm-8 col-xs-12">
				<div class="content-product-detail has-sidebar">
					<div class="row">
						<div class="col-md-6 col-sm-12 col-xs-12">
							<div class="product-gallery">
								<div class="clearfix">
									<ul class="bxslider">
										<li><img src="{{$items[$currentItemNumber]['img']}}" alt="" /></li>
									</ul>
								</div>
								<ul class="list-inline share-social">
									<li><a href="#" class="share-face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#" class="share-twit"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#" class="share-pint"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<!-- End Product Gallery -->
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12">
							<div class="info-product-detail">
								<h2 class="title-product-detail">Lucky shop Product</h2>
								<ul class="list-inline review-rating">
									<li>
										<div class="product-rate rate-counter">
											<div class="product-rating" style="width:70%"></div>
											<span>(2s)</span>
										</div>
									</li>
									<li>
										<a href="#" class="add-review">Add your review</a>
									</li>
								</ul>

								<div class="product-price">
									<del><span>${{number_format($items[$currentItemNumber]['price']*1.34,2)}}</span></del>
									<ins style=""><span>${{number_format($items[$currentItemNumber]['price'],2)}}</span></ins>
									<ins ><span>฿ {{number_format($items[$currentItemNumber]['price']/$btc_price['last'],4)}}</span></ins>
								</div>
								<p class="desc">Lorem ipsum dolor sit amet conse ctetur adipisicing elit do eiusmod tempor. Dolor sit amet conse ctetur adipisicing elit do eiusmod tempor. Lorem ipsum dolor sit amet conse ctetur adipisicing elit do eiusmod tempor. </p>
								<div class="info-extra">
									<a href="#" class="link-wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i><span>Wishlist</span></a>
									<a href="#" class="link-compare"><i class="fa fa-file-o" aria-hidden="true"></i><span>Compare</span></a>
								</div>
								<div class="attr-product attr-size-box">
									<label>Size*:</label>
									<ul class="list-none">
										<li><a href="#" class="active">S</a></li>
										<li><a href="#">M</a></li>
										<li><a href="#">L</a></li>
										<li><a href="#">XL</a></li>
										<li><a href="#">2XL</a></li>
									</ul>
								</div>
								<div class="attr-product attr-color">
									<label>Color*:</label>
									<ul>
										<li><a href="#"><span style="background:#4D6DBD"></span></a></li>
										<li><a href="#" class="selected"><span style="background:#2FBCDA"></span></a></li>
										<li><a href="#"><span style="background:#FBB450"></span></a></li>
										<li><a href="#"><span style="background:#72B226"></span></a></li>
										<li><a href="#"><span style="background:#D8D8D9"></span></a></li>
										<li><a href="#"><span style="background:#202020"></span></a></li>
										<li><a href="#"><span style="background:#FB5D5D"></span></a></li>
										<li><a href="#"><span style="background:#FFE00C"></span></a></li>
										<li><a href="#"><span style="background:#1997D4"></span></a></li>
									</ul>
								</div> 
								<form method="post" action="/cart">
    								{{ csrf_field() }}		
								<input type="hidden"  name="data[currentItemNumber]" value="{{$items[$currentItemNumber]['number']}}">								
								<input type="hidden" class="qty-val-input"  name="data[quanity]" value="1">
								<div class="wrap-cart-qty">
									<div class="info-qty">
										<label>Qty:</label>
										<a class="qty-down" href="#"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
										<span class="qty-val">1</span>
										<a class="qty-up" href="#"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
									</div>
									<input type="submit" class="btn-link-default add-to-cart" value="Add To Cart">
								</div>
								</form>
								<div class="product-available">
									<span>Available: <span class="avail-instock">instock</span></span>
								</div>
								<p class="desc product-code">#Code Products: 7up1678</p>
							</div>
						</div>
					</div>
					<!-- End Product Top -->
					<div class="detail-product-tab">
						<!-- Nav tabs -->
						<div class="nav-tabs-default">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#home" data-toggle="tab">Description</a></li>
								<li><a href="#profile" data-toggle="tab">Additional Information</a></li>
								<li><a href="#messages" data-toggle="tab">Reviews </a></li>
								<li><a href="#settings" data-toggle="tab">Tags</a></li>
							</ul>
						</div>
						<!-- Tab panes -->
						<div class="tab-content">
							<div class="tab-pane active" id="home">
								<div class="content-tags-detail">
									<p><img src="/images/shop/tags.jpg" alt="" /></p>
									<p class="desc">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
									<p class="desc">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
								</div>
							</div>
							<div class="tab-pane" id="profile">
								<div class="content-tags-detail">
									<p><img src="/images/shop/tags.jpg" alt="" /></p>
									<p class="desc">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
									<p class="desc">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
								</div>
							</div>
							<div class="tab-pane" id="messages">
								<div class="content-tags-detail">
									<h3 class="title14">2 Review for bakery macaron</h3>
									<ul class="list-none list-tags-review">
										<li>
											<div class="review-author">
												<a href="#"><img src="/images/shop/author1.jpg" alt="" /></a>
											</div>
											<div class="review-info">
												<p class="review-header"><a href="#"><strong>7up-theme</strong></a> – March 30, 2017:</p>
												<div class="product-rate">
													<div class="product-rating" style="width:100%"></div>
												</div>
												<p class="desc">Really a nice stool. It was better than I expected in quality. The color is a rich, honey brown and looks a little lighter than pictured but still a great stool for the money.</p>
											</div>
										</li>
										<li>
											<div class="review-author">
												<a href="#"><img src="/images/shop/author2.jpg" alt="" /></a>
											</div>
											<div class="review-info">
												<p class="review-header"><a href="#"><strong>7up-theme</strong></a> – March 30, 2017:</p>
												<div class="product-rate">
													<div class="product-rating" style="width:100%"></div>
												</div>
												<p class="desc">Really a nice stool. It was better than I expected in quality. The color is a rich, honey brown and looks a little lighter than pictured but still a great stool for the money.</p>
											</div>
										</li>
									</ul>
									<div class="add-review-form">
										<h3 class="title14">Add a Review</h3>
										<p>Your email address will not be published. Required fields are marked *</p>
										<form class="review-form">
											<div>
												<label>Name *</label>
												<input type="text" name="name" id="name" />
											</div>
											<div>
												<label>Email *</label>
												<input type="text" name="email" id="email" />
											</div>
											<div>
												<label>Email *</label>
												<div class="product-rate">
													<div class="product-rating" style="width:100%"></div>
												</div>
											</div>
											<div>
												<label>Your Review *</label>
												<textarea name="messasge" id="message" cols="30" rows="10"></textarea>
											</div>
											<div>
												<input class="btn-rect radius" type="submit" value="Submit" />
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="settings">
								<div class="content-tags-detail">
									<p><img src="/images/shop/tags.jpg" alt="" /></p>
									<p class="desc">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
									<p class="desc">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
								</div>
							</div>
						</div>
					</div>
					<!-- End Product Tab -->
					<div class="relate-product">
						<!-- Nav tabs -->
						<div class="nav-tabs-default">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#relate-product" data-toggle="tab">Related Products</a></li>
								<li><a href="#upsell-product" data-toggle="tab">UP-SELL PRODUCTS</a></li>
							</ul>
						</div>
						<!-- Tab panes -->
						<div class="tab-content">
							<div class="tab-pane active" id="related-product">
								<div class="product-related-slider">
									<div class="wrap-item" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1],[480,2],[1024,3]]">
									@foreach($items as $next)
										<div class="item-product">
											<div class="product-thumb">
												<a href="/item/{{$next['number']}}" class="product-thumb-link"><img class="img-responsive" src="{{$next['img']}}" alt=""></a>
												<div class="product-extra-link">
													<a href="#" class="compare-link"><i class="fa fa-file-o" aria-hidden="true"></i></a>
													<a href="#" class="addcart-link"><i class="fa fa-opencart" aria-hidden="true"></i></a>
													<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
												</div>
												<a href="#" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
												<div class="product-rate">
													<div class="product-rating" style="width:100%"></div>
												</div>
											</div>
											<div class="product-info">
												<h3 class="product-title"><a href="/item/38164">Lucky shop Product</a></h3>
												<div class="product-price">
													<del><span>${{number_format($next['price']*1.34,2)}}</span></del>
													<ins style=""><span>${{number_format($next['price'],2)}}</span></ins>
													<ins ><span>฿ {{number_format($next['price']/$btc_price['last'],4)}}</span></ins>
												</div>
											</div>
										</div>
									@endforeach
										
										
									</div>
								</div>
							</div>
							<div class="tab-pane" id="upsell-product">
								<div class="product-related-slider">
									<div class="wrap-item" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1],[480,2],[1024,3]]">
										<div class="item-product">
											<div class="product-thumb">
												<a href="/item/38164" class="product-thumb-link"><img class="img-responsive" src="/images/photos/5.jpg" alt=""></a>
												<div class="product-extra-link">
													<a href="#" class="compare-link"><i class="fa fa-file-o" aria-hidden="true"></i></a>
													<a href="#" class="addcart-link"><i class="fa fa-opencart" aria-hidden="true"></i></a>
													<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
												</div>
												<a href="#" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
												<div class="product-rate">
													<div class="product-rating" style="width:100%"></div>
												</div>
											</div>
											<div class="product-info">
												<h3 class="product-title"><a href="/item/38164">Lucky shop Product</a></h3>
												<div class="product-price">
													<del><span>$98.00</span></del>
													<ins><span>$49.00</span></ins>
												</div>
											</div>
										</div>
										<div class="item-product">
											<div class="product-thumb">
												<a href="/item/38164" class="product-thumb-link"><img class="img-responsive" src="/images/photos/6.jpg" alt=""></a>
												<div class="product-extra-link">
													<a href="#" class="compare-link"><i class="fa fa-file-o" aria-hidden="true"></i></a>
													<a href="#" class="addcart-link"><i class="fa fa-opencart" aria-hidden="true"></i></a>
													<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
												</div>
												<a href="#" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
												<div class="product-rate">
													<div class="product-rating" style="width:100%"></div>
												</div>
											</div>
											<div class="product-info">
												<h3 class="product-title"><a href="/item/38164">Lucky shop Product</a></h3>
												<div class="product-price">
													<del><span>$98.00</span></del>
													<ins><span>$49.00</span></ins>
												</div>
											</div>
										</div>
										<div class="item-product">
											<div class="product-thumb">
												<a href="/item/38164" class="product-thumb-link"><img class="img-responsive" src="/images/photos/7.jpg" alt=""></a>
												<div class="product-extra-link">
													<a href="#" class="compare-link"><i class="fa fa-file-o" aria-hidden="true"></i></a>
													<a href="#" class="addcart-link"><i class="fa fa-opencart" aria-hidden="true"></i></a>
													<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
												</div>
												<a href="#" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
												<div class="product-rate">
													<div class="product-rating" style="width:100%"></div>
												</div>
											</div>
											<div class="product-info">
												<h3 class="product-title"><a href="/item/38164">Lucky shop Product</a></h3>
												<div class="product-price">
													<del><span>$98.00</span></del>
													<ins><span>$49.00</span></ins>
												</div>
											</div>
										</div>
										<div class="item-product">
											<div class="product-thumb">
												<a href="/item/38164" class="product-thumb-link"><img class="img-responsive" src="/images/photos/8.jpg" alt=""></a>
												<div class="product-extra-link">
													<a href="#" class="compare-link"><i class="fa fa-file-o" aria-hidden="true"></i></a>
													<a href="#" class="addcart-link"><i class="fa fa-opencart" aria-hidden="true"></i></a>
													<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
												</div>
												<a href="#" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
												<div class="product-rate">
													<div class="product-rating" style="width:100%"></div>
												</div>
											</div>
											<div class="product-info">
												<h3 class="product-title"><a href="/item/38164">Lucky shop Product</a></h3>
												<div class="product-price">
													<del><span>$98.00</span></del>
													<ins><span>$49.00</span></ins>
												</div>
											</div>
										</div>
										<div class="item-product">
											<div class="product-thumb">
												<a href="/item/38164" class="product-thumb-link"><img class="img-responsive" src="/images/photos/9.jpg" alt=""></a>
												<div class="product-extra-link">
													<a href="#" class="compare-link"><i class="fa fa-file-o" aria-hidden="true"></i></a>
													<a href="#" class="addcart-link"><i class="fa fa-opencart" aria-hidden="true"></i></a>
													<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
												</div>
												<a href="#" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
												<div class="product-rate">
													<div class="product-rating" style="width:100%"></div>
												</div>
											</div>
											<div class="product-info">
												<h3 class="product-title"><a href="/item/38164">Lucky shop Product</a></h3>
												<div class="product-price">
													<del><span>$98.00</span></del>
													<ins><span>$49.00</span></ins>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-12">
				<div class="sidebar sidebar-right sidebar-product">
					<div class="widget widget-category">
						<h2 class="widget-title sub-title">PRODUCT CATEGORIES</h2>
						<h3><a href="#">Furniter</a></h3>
						<ul>
							<li><a href="#">Kitchen LightingBathroom </a></li>
							<li><a href="#">LightingDining Room </a></li>
							<li><a href="#">LightingBedroom </a></li>
						</ul>
						<h3><a href="#">home improvement</a></h3>
						<ul>
							<li><a href="#">Bathroom Fixtures</a></li>
							<li><a href="#">Flooring</a></li>
							<li><a href="#">Large Appliances</a></li>
							<li><a href="#">Heating & Cooling</a></li>
						</ul>
					</div>
					<div class="widget widget-filter-price">
						<h2 class="widget-title sub-title">FILTER BY PRICE</h2>
						<div id="slider-range"></div>
						<div class="info-price-filter">
							<button class="btn-link-default">Filter</button>
							<p>
								<label for="amount">Price:</label>
								<input type="text" id="amount" readonly />
							</p>
						</div>
					</div>
					<div class="widget widget-attribute widget-default">
						<h2 class="widget-title sub-title">shop by color</h2>
						<ul>
							<li><a href="#">Blue <span>(5)</span></a></li>
							<li><a href="#">Red <span>(9)</span></a></li>
							<li><a href="#">Yellow <span>(3)</span></a></li>
							<li><a href="#">Cyan <span>(0)</span></a></li>
							<li><a href="#">Black <span>(5)</span></a></li>
						</ul>
					</div>
					<div class="widget widget-attribute widget-default">
						<h2 class="widget-title sub-title">shop by size</h2>
						<ul>
							<li><a href="#">S <span>(5)</span></a></li>
							<li><a href="#">M <span>(9)</span></a></li>
							<li><a href="#">L <span>(3)</span></a></li>
						</ul>
					</div>
					<div class="widget widget-top-seller">
						<h2 class="widget-title sub-title">top sellers</h2>
						<ul>
							@foreach($items as $next)
							<li class="clearfix">

								<div class="product-thumb">
									<a href="#" class="product-thumb-link"><img class="img-responsive" src="{{$next['img']}}" alt="" /></a>
								</div>	
								<h3 class="product-title"><a href="/item/{{$next['number']}}">Lucky shop Product</a></h3>
								<div class="product-price">
									<del><span>${{number_format($next['price']*1.34,2)}}</span></del>
									<ins style=""><span>${{number_format($next['price'],2)}}</span></ins>
									<ins ><span>฿ {{number_format($next['price']/$btc_price['last'],4)}}</span></ins>
								</div>
							</li>
							@endforeach
						</ul>
					</div>
				</div>
				<!-- End Sidebar -->
			</div>
		</div>
	</div>
</div>
<div class="newsletter">
	<div class="container">
		<div class="newsletter-form">
			<label>Newsletter</label>
			<form>
				<input onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" value="Enter your Email" type="text">
				<input value="Submit" type="submit">
			</form>
		</div>
	</div>
</div>
@stop