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
<div class="content-top1">
	<div class="container">
		<div class="banner-slider banner-slider1">
			<div class="wrap-item" data-pagination="false" data-autoplay="true" data-navigation="true" data-itemscustom="[[0,1]]">
				<div class="item-slider">
					<div class="banner-thumb"><a href="#"><img src="images/home1/slide1.jpg" alt="" /></a></div>
					<div class="banner-info black text-center text-uppercase animated" data-animated="swing">
						<h3 class="title30">homeware category</h3>
						<h2 class="title60">lucky Shop</h2>
						<div class="list-btn-banner">
							<a href="#" class="btn-rect radius">brow store</a>
							<a href="#" class="btn-rect radius dotted">Shop now</a>
						</div>
					</div>
				</div>
				<div class="item-slider">
					<div class="banner-thumb"><a href="#"><img src="images/home1/slide2.jpg" alt="" /></a></div>
					<div class="banner-info black text-center text-uppercase animated" data-animated="bounce">
						<h3 class="title30">homeware category</h3>
						<h2 class="title60">lucky Shop</h2>
						<div class="list-btn-banner">
							<a href="#" class="btn-rect radius">brow store</a>
							<a href="#" class="btn-rect radius dotted">Shop now</a>
						</div>
					</div>
				</div>
				<div class="item-slider">
					<div class="banner-thumb"><a href="#"><img src="images/home1/slide3.jpg" alt="" /></a></div>
					<div class="banner-info black text-center text-uppercase animated" data-animated="rubberBand">
						<h3 class="title30">homeware category</h3>
						<h2 class="title60">lucky Shop</h2>
						<div class="list-btn-banner">
							<a href="#" class="btn-rect radius">brow store</a>
							<a href="#" class="btn-rect radius dotted">Shop now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="list-banner-adv1">
		<div class="row">
			<div class="col-md-5 col-sm-6 col-xs-12">
				<div class="banner-adv zoom-rotate">
					<a href="#" class="adv-thumb-link"><img src="images/home1/ad1.jpg" alt="" /></a>
					<div class="banner-info adv-info-style1">
						<h2 class="title30">Hot Deals</h2>
						<p class="desc">Furniture</p>
						<a href="#" class="shopnow text-uppercase">Shop now</a>
					</div>
				</div>
			</div>
			<div class="col-md-5 col-sm-6 col-xs-12">
				<div class="banner-adv zoom-rotate">
					<a href="#" class="adv-thumb-link"><img src="images/home1/ad2.jpg" alt="" /></a>
					<div class="banner-info adv-info-style1">
						<h2 class="title30">On sale</h2>
						<p class="desc">Homeware</p>
						<a href="#" class="shopnow text-uppercase">Shop now</a>
					</div>
				</div>
			</div>
			<div class="col-md-2 hidden-sm col-xs-6">
				<div class="banner-adv banner-background" style="background-color:#ffb4a6">
					<a href="#">
						<div class="banner-info white text-uppercase">
							<h2>up to</h2>
							<h2 class="title30">60% off</h2>
							<p>Home Harvest</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-2 hidden-sm col-xs-6">
				<div class="banner-adv banner-background" style="background-color:#d8a6b2">
					<a href="#">
						<div class="banner-info white text-uppercase">
							<h2>up to</h2>
							<h2 class="title30">45% off</h2>
							<p>Beauty & Health</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-5 col-sm-6 col-xs-12">
				<div class="banner-adv zoom-rotate">
					<a href="#" class="adv-thumb-link"><img src="images/home1/ad3.jpg" alt="" /></a>
					<div class="banner-info adv-info-style1">
						<h2 class="title30">Extra -10%</h2>
						<p class="desc">Homeware</p>
						<a href="#" class="shopnow text-uppercase">Shop now</a>
					</div>
				</div>
			</div>
			<div class="col-md-5 col-sm-6 col-xs-12">
				<div class="banner-adv zoom-rotate">
					<a href="#" class="adv-thumb-link"><img src="images/home1/ad4.jpg" alt="" /></a>
					<div class="banner-info adv-info-style1">
						<h2 class="title30">-45% off</h2>
						<p class="desc">Homeware</p>
						<a href="#" class="shopnow text-uppercase">Shop now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ENd List Adv -->
	<div class="title-box1 text-center">
		<h2 class="title30"><span>Products</span></h2>
	</div>
	<div class="product-tab-loadmore">
		<div class="title-tab1 text-center">
			<ul class="list-none">
				<li><a href="#new" data-toggle="tab">New Arrivals</a></li>
				<li class="active"><a href="#bet" data-toggle="tab">Best sellers</a></li>
				<li><a href="#spe" data-toggle="tab">Specails</a></li>
				<li><a href="#fea" data-toggle="tab">Featured</a></li>
			</ul>
		</div>
		<div class="tab-content">
			<div id="new" class="tab-pane">
				<div class="list-product1">
					<div class="row">
						<div class="col-md-3 col-sm-4 col-xs-6">
							<div class="item-product">
								<div class="product-thumb">
									<a href="/item/38164" class="product-thumb-link"><img class="img-responsive" src="images/photos/1.jpg" alt=""></a>
									<div class="product-extra-link">
										<a href="#" class="compare-link"><i class="fa fa-file-o" aria-hidden="true"></i></a>
										<a href="#" class="addcart-link"><i class="fa fa-opencart" aria-hidden="true"></i></a>
										<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</div>
									<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
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
						<div class="col-md-3 col-sm-4 col-xs-6">
							<div class="item-product">
								<div class="product-thumb">
									<a href="/item/38164" class="product-thumb-link"><img class="img-responsive" src="images/photos/2.jpg" alt=""></a>
									<div class="product-extra-link">
										<a href="#" class="compare-link"><i class="fa fa-file-o" aria-hidden="true"></i></a>
										<a href="#" class="addcart-link"><i class="fa fa-opencart" aria-hidden="true"></i></a>
										<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</div>
									<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
									<div class="product-rate">
										<div class="product-rating" style="width:100%"></div>
									</div>
								</div>
								<div class="product-info">
									<h3 class="product-title"><a href="/item/38164">Lucky shop Product</a></h3>
									<div class="product-price">
										<ins><span>$49.00</span></ins>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-6">
							<div class="item-product">
								<div class="product-thumb">
									<a href="/item/38164" class="product-thumb-link"><img class="img-responsive" src="images/photos/3.jpg" alt=""></a>
									<div class="product-extra-link">
										<a href="#" class="compare-link"><i class="fa fa-file-o" aria-hidden="true"></i></a>
										<a href="#" class="addcart-link"><i class="fa fa-opencart" aria-hidden="true"></i></a>
										<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</div>
									<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
									<div class="product-rate">
										<div class="product-rating" style="width:100%"></div>
									</div>
									<span class="product-label sale-label">-20%</span>
								</div>
								<div class="product-info">
									<h3 class="product-title"><a href="/item/38164">Lucky shop Product</a></h3>
									<div class="product-price">
										<del><span>$85.00</span></del>
										<ins><span>$70.00</span></ins>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-6">
							<div class="item-product">
								<div class="product-thumb">
									<a href="/item/38164" class="product-thumb-link"><img class="img-responsive" src="images/photos/4.jpg" alt=""></a>
									<div class="product-extra-link">
										<a href="#" class="compare-link"><i class="fa fa-file-o" aria-hidden="true"></i></a>
										<a href="#" class="addcart-link"><i class="fa fa-opencart" aria-hidden="true"></i></a>
										<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</div>
									<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
									<div class="product-rate">
										<div class="product-rating" style="width:100%"></div>
									</div>
									<span class="product-label new-label">new</span>
								</div>
								<div class="product-info">
									<h3 class="product-title"><a href="/item/38164">Lucky shop Product</a></h3>
									<div class="product-price">
										<ins><span>$20.00</span></ins>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-6">
							<div class="item-product">
								<div class="product-thumb">
									<a href="/item/38164" class="product-thumb-link"><img class="img-responsive" src="images/photos/5.jpg" alt=""></a>
									<div class="product-extra-link">
										<a href="#" class="compare-link"><i class="fa fa-file-o" aria-hidden="true"></i></a>
										<a href="#" class="addcart-link"><i class="fa fa-opencart" aria-hidden="true"></i></a>
										<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</div>
									<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
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
						<div class="col-md-3 col-sm-4 col-xs-6">
							<div class="item-product">
								<div class="product-thumb">
									<a href="/item/38164" class="product-thumb-link"><img class="img-responsive" src="images/photos/6.jpg" alt=""></a>
									<div class="product-extra-link">
										<a href="#" class="compare-link"><i class="fa fa-file-o" aria-hidden="true"></i></a>
										<a href="#" class="addcart-link"><i class="fa fa-opencart" aria-hidden="true"></i></a>
										<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</div>
									<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
									<div class="product-rate">
										<div class="product-rating" style="width:100%"></div>
									</div>
								</div>
								<div class="product-info">
									<h3 class="product-title"><a href="/item/38164">Lucky shop Product</a></h3>
									<div class="product-price">
										<ins><span>$49.00</span></ins>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-6">
							<div class="item-product">
								<div class="product-thumb">
									<a href="/item/38164" class="product-thumb-link"><img class="img-responsive" src="images/photos/7.jpg" alt=""></a>
									<div class="product-extra-link">
										<a href="#" class="compare-link"><i class="fa fa-file-o" aria-hidden="true"></i></a>
										<a href="#" class="addcart-link"><i class="fa fa-opencart" aria-hidden="true"></i></a>
										<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</div>
									<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
									<div class="product-rate">
										<div class="product-rating" style="width:100%"></div>
									</div>
								</div>
								<div class="product-info">
									<h3 class="product-title"><a href="/item/38164">Lucky shop Product</a></h3>
									<div class="product-price">
										<del><span>$85.00</span></del>
										<ins><span>$70.00</span></ins>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-6">
							<div class="item-product">
								<div class="product-thumb">
									<a href="/item/38164" class="product-thumb-link"><img class="img-responsive" src="images/photos/8.jpg" alt=""></a>
									<div class="product-extra-link">
										<a href="#" class="compare-link"><i class="fa fa-file-o" aria-hidden="true"></i></a>
										<a href="#" class="addcart-link"><i class="fa fa-opencart" aria-hidden="true"></i></a>
										<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</div>
									<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
									<div class="product-rate">
										<div class="product-rating" style="width:100%"></div>
									</div>
								</div>
								<div class="product-info">
									<h3 class="product-title"><a href="/item/38164">Lucky shop Product</a></h3>
									<div class="product-price">
										<ins><span>$20.00</span></ins>
									</div>
								</div>
							</div>
						</div>
					</div>
					<a href="#" class="btn-product-loadmore border radius">Load more</a>
				</div>
			</div>
			<!-- End Tab -->
			<div id="bet" class="tab-pane active">
				<div class="list-product1">
					<div class="row">
						<div class="col-md-3 col-sm-4 col-xs-6">
							<div class="item-product">
								<div class="product-thumb">
									<a href="/item/38164" class="product-thumb-link"><img class="img-responsive" src="images/photos/6.jpg" alt=""></a>
									<div class="product-extra-link">
										<a href="#" class="compare-link"><i class="fa fa-file-o" aria-hidden="true"></i></a>
										<a href="#" class="addcart-link"><i class="fa fa-opencart" aria-hidden="true"></i></a>
										<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</div>
									<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
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
						<div class="col-md-3 col-sm-4 col-xs-6">
							<div class="item-product">
								<div class="product-thumb">
									<a href="/item/38164" class="product-thumb-link"><img class="img-responsive" src="images/photos/2.jpg" alt=""></a>
									<div class="product-extra-link">
										<a href="#" class="compare-link"><i class="fa fa-file-o" aria-hidden="true"></i></a>
										<a href="#" class="addcart-link"><i class="fa fa-opencart" aria-hidden="true"></i></a>
										<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</div>
									<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
									<div class="product-rate">
										<div class="product-rating" style="width:100%"></div>
									</div>
								</div>
								<div class="product-info">
									<h3 class="product-title"><a href="/item/38164">Lucky shop Product</a></h3>
									<div class="product-price">
										<ins><span>$49.00</span></ins>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-6">
							<div class="item-product">
								<div class="product-thumb">
									<a href="/item/38164" class="product-thumb-link"><img class="img-responsive" src="images/photos/7.jpg" alt=""></a>
									<div class="product-extra-link">
										<a href="#" class="compare-link"><i class="fa fa-file-o" aria-hidden="true"></i></a>
										<a href="#" class="addcart-link"><i class="fa fa-opencart" aria-hidden="true"></i></a>
										<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</div>
									<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
									<div class="product-rate">
										<div class="product-rating" style="width:100%"></div>
									</div>
									<span class="product-label sale-label">-20%</span>
								</div>
								<div class="product-info">
									<h3 class="product-title"><a href="/item/38164">Lucky shop Product</a></h3>
									<div class="product-price">
										<del><span>$85.00</span></del>
										<ins><span>$70.00</span></ins>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-6">
							<div class="item-product">
								<div class="product-thumb">
									<a href="/item/38164" class="product-thumb-link"><img class="img-responsive" src="images/photos/8.jpg" alt=""></a>
									<div class="product-extra-link">
										<a href="#" class="compare-link"><i class="fa fa-file-o" aria-hidden="true"></i></a>
										<a href="#" class="addcart-link"><i class="fa fa-opencart" aria-hidden="true"></i></a>
										<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</div>
									<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
									<div class="product-rate">
										<div class="product-rating" style="width:100%"></div>
									</div>
									<span class="product-label new-label">new</span>
								</div>
								<div class="product-info">
									<h3 class="product-title"><a href="/item/38164">Lucky shop Product</a></h3>
									<div class="product-price">
										<ins><span>$20.00</span></ins>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-6">
							<div class="item-product">
								<div class="product-thumb">
									<a href="/item/38164" class="product-thumb-link"><img class="img-responsive" src="images/photos/3.jpg" alt=""></a>
									<div class="product-extra-link">
										<a href="#" class="compare-link"><i class="fa fa-file-o" aria-hidden="true"></i></a>
										<a href="#" class="addcart-link"><i class="fa fa-opencart" aria-hidden="true"></i></a>
										<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</div>
									<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
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
						<div class="col-md-3 col-sm-4 col-xs-6">
							<div class="item-product">
								<div class="product-thumb">
									<a href="/item/38164" class="product-thumb-link"><img class="img-responsive" src="images/photos/4.jpg" alt=""></a>
									<div class="product-extra-link">
										<a href="#" class="compare-link"><i class="fa fa-file-o" aria-hidden="true"></i></a>
										<a href="#" class="addcart-link"><i class="fa fa-opencart" aria-hidden="true"></i></a>
										<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</div>
									<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
									<div class="product-rate">
										<div class="product-rating" style="width:100%"></div>
									</div>
								</div>
								<div class="product-info">
									<h3 class="product-title"><a href="/item/38164">Lucky shop Product</a></h3>
									<div class="product-price">
										<ins><span>$49.00</span></ins>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-6">
							<div class="item-product">
								<div class="product-thumb">
									<a href="/item/38164" class="product-thumb-link"><img class="img-responsive" src="images/photos/24.jpg" alt=""></a>
									<div class="product-extra-link">
										<a href="#" class="compare-link"><i class="fa fa-file-o" aria-hidden="true"></i></a>
										<a href="#" class="addcart-link"><i class="fa fa-opencart" aria-hidden="true"></i></a>
										<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</div>
									<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
									<div class="product-rate">
										<div class="product-rating" style="width:100%"></div>
									</div>
								</div>
								<div class="product-info">
									<h3 class="product-title"><a href="/item/38164">Lucky shop Product</a></h3>
									<div class="product-price">
										<del><span>$85.00</span></del>
										<ins><span>$70.00</span></ins>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-6">
							<div class="item-product">
								<div class="product-thumb">
									<a href="/item/38164" class="product-thumb-link"><img class="img-responsive" src="images/photos/29.jpg" alt=""></a>
									<div class="product-extra-link">
										<a href="#" class="compare-link"><i class="fa fa-file-o" aria-hidden="true"></i></a>
										<a href="#" class="addcart-link"><i class="fa fa-opencart" aria-hidden="true"></i></a>
										<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</div>
									<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
									<div class="product-rate">
										<div class="product-rating" style="width:100%"></div>
									</div>
								</div>
								<div class="product-info">
									<h3 class="product-title"><a href="/item/38164">Lucky shop Product</a></h3>
									<div class="product-price">
										<ins><span>$20.00</span></ins>
									</div>
								</div>
							</div>
						</div>
					</div>
					<a href="#" class="btn-product-loadmore border radius">Load more</a>
				</div>
			</div>
			<!-- End Tab -->
			<div id="spe" class="tab-pane">
				<div class="list-product1">
					<div class="row">
						<div class="col-md-3 col-sm-4 col-xs-6">
							<div class="item-product">
								<div class="product-thumb">
									<a href="/item/38164" class="product-thumb-link"><img class="img-responsive" src="images/photos/17.jpg" alt=""></a>
									<div class="product-extra-link">
										<a href="#" class="compare-link"><i class="fa fa-file-o" aria-hidden="true"></i></a>
										<a href="#" class="addcart-link"><i class="fa fa-opencart" aria-hidden="true"></i></a>
										<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</div>
									<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
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
						<div class="col-md-3 col-sm-4 col-xs-6">
							<div class="item-product">
								<div class="product-thumb">
									<a href="/item/38164" class="product-thumb-link"><img class="img-responsive" src="images/photos/18.jpg" alt=""></a>
									<div class="product-extra-link">
										<a href="#" class="compare-link"><i class="fa fa-file-o" aria-hidden="true"></i></a>
										<a href="#" class="addcart-link"><i class="fa fa-opencart" aria-hidden="true"></i></a>
										<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</div>
									<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
									<div class="product-rate">
										<div class="product-rating" style="width:100%"></div>
									</div>
								</div>
								<div class="product-info">
									<h3 class="product-title"><a href="/item/38164">Lucky shop Product</a></h3>
									<div class="product-price">
										<ins><span>$49.00</span></ins>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-6">
							<div class="item-product">
								<div class="product-thumb">
									<a href="/item/38164" class="product-thumb-link"><img class="img-responsive" src="images/photos/7.jpg" alt=""></a>
									<div class="product-extra-link">
										<a href="#" class="compare-link"><i class="fa fa-file-o" aria-hidden="true"></i></a>
										<a href="#" class="addcart-link"><i class="fa fa-opencart" aria-hidden="true"></i></a>
										<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</div>
									<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
									<div class="product-rate">
										<div class="product-rating" style="width:100%"></div>
									</div>
									<span class="product-label sale-label">-20%</span>
								</div>
								<div class="product-info">
									<h3 class="product-title"><a href="/item/38164">Lucky shop Product</a></h3>
									<div class="product-price">
										<del><span>$85.00</span></del>
										<ins><span>$70.00</span></ins>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-6">
							<div class="item-product">
								<div class="product-thumb">
									<a href="/item/38164" class="product-thumb-link"><img class="img-responsive" src="images/photos/19.jpg" alt=""></a>
									<div class="product-extra-link">
										<a href="#" class="compare-link"><i class="fa fa-file-o" aria-hidden="true"></i></a>
										<a href="#" class="addcart-link"><i class="fa fa-opencart" aria-hidden="true"></i></a>
										<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</div>
									<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
									<div class="product-rate">
										<div class="product-rating" style="width:100%"></div>
									</div>
									<span class="product-label new-label">new</span>
								</div>
								<div class="product-info">
									<h3 class="product-title"><a href="/item/38164">Lucky shop Product</a></h3>
									<div class="product-price">
										<ins><span>$20.00</span></ins>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-6">
							<div class="item-product">
								<div class="product-thumb">
									<a href="/item/38164" class="product-thumb-link"><img class="img-responsive" src="images/photos/20.jpg" alt=""></a>
									<div class="product-extra-link">
										<a href="#" class="compare-link"><i class="fa fa-file-o" aria-hidden="true"></i></a>
										<a href="#" class="addcart-link"><i class="fa fa-opencart" aria-hidden="true"></i></a>
										<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</div>
									<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
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
						<div class="col-md-3 col-sm-4 col-xs-6">
							<div class="item-product">
								<div class="product-thumb">
									<a href="/item/38164" class="product-thumb-link"><img class="img-responsive" src="images/photos/21.jpg" alt=""></a>
									<div class="product-extra-link">
										<a href="#" class="compare-link"><i class="fa fa-file-o" aria-hidden="true"></i></a>
										<a href="#" class="addcart-link"><i class="fa fa-opencart" aria-hidden="true"></i></a>
										<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</div>
									<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
									<div class="product-rate">
										<div class="product-rating" style="width:100%"></div>
									</div>
								</div>
								<div class="product-info">
									<h3 class="product-title"><a href="/item/38164">Lucky shop Product</a></h3>
									<div class="product-price">
										<ins><span>$49.00</span></ins>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-6">
							<div class="item-product">
								<div class="product-thumb">
									<a href="/item/38164" class="product-thumb-link"><img class="img-responsive" src="images/photos/22.jpg" alt=""></a>
									<div class="product-extra-link">
										<a href="#" class="compare-link"><i class="fa fa-file-o" aria-hidden="true"></i></a>
										<a href="#" class="addcart-link"><i class="fa fa-opencart" aria-hidden="true"></i></a>
										<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</div>
									<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
									<div class="product-rate">
										<div class="product-rating" style="width:100%"></div>
									</div>
								</div>
								<div class="product-info">
									<h3 class="product-title"><a href="/item/38164">Lucky shop Product</a></h3>
									<div class="product-price">
										<del><span>$85.00</span></del>
										<ins><span>$70.00</span></ins>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-6">
							<div class="item-product">
								<div class="product-thumb">
									<a href="/item/38164" class="product-thumb-link"><img class="img-responsive" src="images/photos/23.jpg" alt=""></a>
									<div class="product-extra-link">
										<a href="#" class="compare-link"><i class="fa fa-file-o" aria-hidden="true"></i></a>
										<a href="#" class="addcart-link"><i class="fa fa-opencart" aria-hidden="true"></i></a>
										<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</div>
									<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
									<div class="product-rate">
										<div class="product-rating" style="width:100%"></div>
									</div>
								</div>
								<div class="product-info">
									<h3 class="product-title"><a href="/item/38164">Lucky shop Product</a></h3>
									<div class="product-price">
										<ins><span>$20.00</span></ins>
									</div>
								</div>
							</div>
						</div>
					</div>
					<a href="#" class="btn-product-loadmore border radius">Load more</a>
				</div>
			</div>
			<!-- End Tab -->
			<div id="fea" class="tab-pane">
				<div class="list-product1">
					<div class="row">
						<div class="col-md-3 col-sm-4 col-xs-6">
							<div class="item-product">
								<div class="product-thumb">
									<a href="/item/38164" class="product-thumb-link"><img class="img-responsive" src="images/photos/24.jpg" alt=""></a>
									<div class="product-extra-link">
										<a href="#" class="compare-link"><i class="fa fa-file-o" aria-hidden="true"></i></a>
										<a href="#" class="addcart-link"><i class="fa fa-opencart" aria-hidden="true"></i></a>
										<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</div>
									<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
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
						<div class="col-md-3 col-sm-4 col-xs-6">
							<div class="item-product">
								<div class="product-thumb">
									<a href="/item/38164" class="product-thumb-link"><img class="img-responsive" src="images/photos/25.jpg" alt=""></a>
									<div class="product-extra-link">
										<a href="#" class="compare-link"><i class="fa fa-file-o" aria-hidden="true"></i></a>
										<a href="#" class="addcart-link"><i class="fa fa-opencart" aria-hidden="true"></i></a>
										<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</div>
									<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
									<div class="product-rate">
										<div class="product-rating" style="width:100%"></div>
									</div>
								</div>
								<div class="product-info">
									<h3 class="product-title"><a href="/item/38164">Lucky shop Product</a></h3>
									<div class="product-price">
										<ins><span>$49.00</span></ins>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-6">
							<div class="item-product">
								<div class="product-thumb">
									<a href="/item/38164" class="product-thumb-link"><img class="img-responsive" src="images/photos/26.jpg" alt=""></a>
									<div class="product-extra-link">
										<a href="#" class="compare-link"><i class="fa fa-file-o" aria-hidden="true"></i></a>
										<a href="#" class="addcart-link"><i class="fa fa-opencart" aria-hidden="true"></i></a>
										<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</div>
									<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
									<div class="product-rate">
										<div class="product-rating" style="width:100%"></div>
									</div>
									<span class="product-label sale-label">-20%</span>
								</div>
								<div class="product-info">
									<h3 class="product-title"><a href="/item/38164">Lucky shop Product</a></h3>
									<div class="product-price">
										<del><span>$85.00</span></del>
										<ins><span>$70.00</span></ins>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-6">
							<div class="item-product">
								<div class="product-thumb">
									<a href="/item/38164" class="product-thumb-link"><img class="img-responsive" src="images/photos/27.jpg" alt=""></a>
									<div class="product-extra-link">
										<a href="#" class="compare-link"><i class="fa fa-file-o" aria-hidden="true"></i></a>
										<a href="#" class="addcart-link"><i class="fa fa-opencart" aria-hidden="true"></i></a>
										<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</div>
									<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
									<div class="product-rate">
										<div class="product-rating" style="width:100%"></div>
									</div>
									<span class="product-label new-label">new</span>
								</div>
								<div class="product-info">
									<h3 class="product-title"><a href="/item/38164">Lucky shop Product</a></h3>
									<div class="product-price">
										<ins><span>$20.00</span></ins>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-6">
							<div class="item-product">
								<div class="product-thumb">
									<a href="/item/38164" class="product-thumb-link"><img class="img-responsive" src="images/photos/28.jpg" alt=""></a>
									<div class="product-extra-link">
										<a href="#" class="compare-link"><i class="fa fa-file-o" aria-hidden="true"></i></a>
										<a href="#" class="addcart-link"><i class="fa fa-opencart" aria-hidden="true"></i></a>
										<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</div>
									<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
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
						<div class="col-md-3 col-sm-4 col-xs-6">
							<div class="item-product">
								<div class="product-thumb">
									<a href="/item/38164" class="product-thumb-link"><img class="img-responsive" src="images/photos/29.jpg" alt=""></a>
									<div class="product-extra-link">
										<a href="#" class="compare-link"><i class="fa fa-file-o" aria-hidden="true"></i></a>
										<a href="#" class="addcart-link"><i class="fa fa-opencart" aria-hidden="true"></i></a>
										<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</div>
									<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
									<div class="product-rate">
										<div class="product-rating" style="width:100%"></div>
									</div>
								</div>
								<div class="product-info">
									<h3 class="product-title"><a href="/item/38164">Lucky shop Product</a></h3>
									<div class="product-price">
										<ins><span>$49.00</span></ins>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-6">
							<div class="item-product">
								<div class="product-thumb">
									<a href="/item/38164" class="product-thumb-link"><img class="img-responsive" src="images/photos/30.jpg" alt=""></a>
									<div class="product-extra-link">
										<a href="#" class="compare-link"><i class="fa fa-file-o" aria-hidden="true"></i></a>
										<a href="#" class="addcart-link"><i class="fa fa-opencart" aria-hidden="true"></i></a>
										<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</div>
									<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
									<div class="product-rate">
										<div class="product-rating" style="width:100%"></div>
									</div>
								</div>
								<div class="product-info">
									<h3 class="product-title"><a href="/item/38164">Lucky shop Product</a></h3>
									<div class="product-price">
										<del><span>$85.00</span></del>
										<ins><span>$70.00</span></ins>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-6">
							<div class="item-product">
								<div class="product-thumb">
									<a href="/item/38164" class="product-thumb-link"><img class="img-responsive" src="images/photos/31.jpg" alt=""></a>
									<div class="product-extra-link">
										<a href="#" class="compare-link"><i class="fa fa-file-o" aria-hidden="true"></i></a>
										<a href="#" class="addcart-link"><i class="fa fa-opencart" aria-hidden="true"></i></a>
										<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									</div>
									<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
									<div class="product-rate">
										<div class="product-rating" style="width:100%"></div>
									</div>
								</div>
								<div class="product-info">
									<h3 class="product-title"><a href="/item/38164">Lucky shop Product</a></h3>
									<div class="product-price">
										<ins><span>$20.00</span></ins>
									</div>
								</div>
							</div>
						</div>
					</div>
					<a href="#" class="btn-product-loadmore border radius">Load more</a>
				</div>
			</div>
			<!-- End Tab -->
		</div>
	</div>
	<!-- End Product Tab -->
	<div class="brand-slider">
		<div class="wrap-item" data-pagination="false" data-autoplay="true" data-itemscustom="[[0,2],[480,3],[768,4],[980,5],[1200,6]]">
			<div class="brand-item"><a href="#"><img src="images/home1/br1.png" alt="" class="wobble-horizontal" /></a></div>
			<div class="brand-item"><a href="#"><img src="images/home1/br2.png" alt="" class="wobble-horizontal" /></a></div>
			<div class="brand-item"><a href="#"><img src="images/home1/br3.png" alt="" class="wobble-horizontal" /></a></div>
			<div class="brand-item"><a href="#"><img src="images/home1/br4.png" alt="" class="wobble-horizontal" /></a></div>
			<div class="brand-item"><a href="#"><img src="images/home1/br5.png" alt="" class="wobble-horizontal" /></a></div>
			<div class="brand-item"><a href="#"><img src="images/home1/br6.png" alt="" class="wobble-horizontal" /></a></div>
			<div class="brand-item"><a href="#"><img src="images/home1/br1.png" alt="" class="wobble-horizontal" /></a></div>
			<div class="brand-item"><a href="#"><img src="images/home1/br2.png" alt="" class="wobble-horizontal" /></a></div>
			<div class="brand-item"><a href="#"><img src="images/home1/br3.png" alt="" class="wobble-horizontal" /></a></div>
			<div class="brand-item"><a href="#"><img src="images/home1/br4.png" alt="" class="wobble-horizontal" /></a></div>
		</div>
	</div>
	<!-- End Brand Slider -->
	<div class="title-box1 text-center">
		<h2 class="title30"><span>Latest News</span></h2>
	</div>
	<div class="latest-news1">
		<div class="latest-newslider">
			<div class="wrap-item" data-pagination="false" data-itemscustom="[[0,1],[600,2],[1024,3]]">
				<div class="item-latest-news">
					<div class="post-thumb">
						<a href="#" class="post-thumb-link"><img src="images/home1/blog1.jpg" alt="" /></a>
						<a href="images/photos/blog/1.jpg" class="post-thumb-zoom"><i class="fa fa-search" aria-hidden="true"></i></a>
					</div>
					<div class="post-info">
						<h3 class="post-title"><a href="single.html">Nasetase miytras serertas</a></h3>
						<ul class="post-comment-date list-none">
							<li><i class="fa fa-calendar-minus-o" aria-hidden="true"></i><span>Dec 07 2015</span></li>
							<li><i class="fa fa-comment-o" aria-hidden="true"></i><span>5 Comments</span></li>
						</ul>
						<p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed dobe eiusmod tempor </p>
					</div>
				</div>
				<div class="item-latest-news">
					<div class="post-thumb">
						<a href="#" class="post-thumb-link"><img src="images/home1/blog2.jpg" alt="" /></a>
						<a href="images/photos/blog/3.jpg" class="post-thumb-zoom"><i class="fa fa-search" aria-hidden="true"></i></a>
					</div>
					<div class="post-info">
						<h3 class="post-title"><a href="single.html">Nasetase miytras serertas</a></h3>
						<ul class="post-comment-date list-none">
							<li><i class="fa fa-calendar-minus-o" aria-hidden="true"></i><span>Dec 07 2015</span></li>
							<li><i class="fa fa-comment-o" aria-hidden="true"></i><span>5 Comments</span></li>
						</ul>
						<p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed dobe eiusmod tempor </p>
					</div>
				</div>
				<div class="item-latest-news">
					<div class="post-thumb">
						<a href="#" class="post-thumb-link"><img src="images/home1/blog3.jpg" alt="" /></a>
						<a href="images/photos/blog/7.jpg" class="post-thumb-zoom"><i class="fa fa-search" aria-hidden="true"></i></a>
					</div>
					<div class="post-info">
						<h3 class="post-title"><a href="single.html">Nasetase miytras serertas</a></h3>
						<ul class="post-comment-date list-none">
							<li><i class="fa fa-calendar-minus-o" aria-hidden="true"></i><span>Dec 07 2015</span></li>
							<li><i class="fa fa-comment-o" aria-hidden="true"></i><span>5 Comments</span></li>
						</ul>
						<p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed dobe eiusmod tempor </p>
					</div>
				</div>
			</div>
			<a href="#" class="btn-product-loadmore border radius">View All</a>
		</div>
	</div>
	<!-- End Latest News -->
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
