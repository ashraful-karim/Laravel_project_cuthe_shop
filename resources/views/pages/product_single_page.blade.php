@extends('master')

@section('content')


<div class="columns-container">
	<div class="container" id="columns">
		<!-- breadcrumb -->
		<div class="breadcrumb clearfix">
			<a class="home" href="#" title="Return to Home">Home</a>
			<span class="navigation-pipe">&nbsp;</span>
			<a href="#" title="Return to Home">Fashion</a>
			<span class="navigation-pipe">&nbsp;</span>
			<a href="#" title="Return to Home">Women</a>
			<span class="navigation-pipe">&nbsp;</span>
			<a href="#" title="Return to Home">Dresses</a>
			<span class="navigation-pipe">&nbsp;</span>
			<span class="navigation_page">Maecenas consequat mauris</span>
		</div>
		<!-- ./breadcrumb -->
		<!-- row -->
		<div class="row">

			<!-- Center colunm-->
			<div class="center_column col-xs-12 col-sm-12" id="center_column">
				<!-- Product -->
				<div id="product">
					<div class="primary-box row">
						<div class="pb-left-column col-xs-12 col-sm-5">
							<!-- product-imge-->
							<div class="product-image">
								<div class="product-full">
									<img style="width: 412px;height: 512px" id="product-zoom" src="{{URL::to($product_info->image_option)}}" data-zoom-image="{{url($product_info->image_option)}}"/>
								</div>
								<div class="product-img-thumb" id="gallery_01">
									<ul class="owl-carousel" data-items="3" data-nav="true" data-dots="false" data-margin="21" data-loop="true">
										<li>
											<a href="#" data-image="{{url($product_info->image_option)}}" data-zoom-image="{{url($product_info->image_option)}}">
												<img id="product-zoom"  src="{{url($product_info->image_option)}}" /> 
											</a>
										</li>
										<li>
											<a href="#" data-image="{{url($product_info->image_option)}}" data-zoom-image="{{url($product_info->image_option)}}">
												<img id="product-zoom"  src="{{url($product_info->image_option)}}" /> 
											</a>
										</li>



									</ul>
								</div>
							</div>
							<!-- product-imge-->
						</div>
						<div class="pb-right-column col-xs-12 col-sm-7">
							<h1 class="product-name">{{$product_info->product_name}}</h1>
							<div class="product-comments">
								<div class="product-star">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</div>
								<div class="comments-advices">
									<a href="#">Based  on 3 ratings</a>
									<a href="#"><i class="fa fa-pencil"></i> write a review</a>
								</div>
							</div>
							<div class="product-price-group">
								<span class="price">BDT {{$product_info->product_new_price}}</span>
								<span class="old-price">BDT {{$product_info->product_old_price}}</span>
								<span class="discount">-30%</span>
							</div>
							<div class="info-orther">
								<p>Item Code: # {{$product_info->product_id}}</p>
								<p>Availability: <span class="in-stock">{{$product_info->product_stock}}</span></p>
								<p>Condition: New</p>
							</div>
							<div class="product-desc">
								{{$product_info->product_short_description}}
							</div>
							<div class="form-option">
								<p class="form-option-title">Available Options:</p>
								<div class="attributes">
									<div class="attribute-label">Color:</div>
									<div class="attribute-list">
										<ul class="list-color">
											<li style="background:#0c3b90;"><a href="#">red</a></li>
											<li style="background:#036c5d;" class="active"><a href="#">red</a></li>
											<li style="background:#5f2363;"><a href="#">red</a></li>
											<li style="background:#ffc000;"><a href="#">red</a></li>
											<li style="background:#36a93c;"><a href="#">red</a></li>
											<li style="background:#ff0000;"><a href="#">red</a></li>
										</ul>
									</div>
								</div>

			{!! Form::open(['url' => 'add_to_cart/'.$product_info->product_id,'method' => 'post']) !!}


								<div class="attributes">
									<div class="attribute-label">Qty:</div>
									<div class="attribute-list product-qty">
										<div class="qty">
											<input id="option-product-qty" name="qty" type="text" value="1">
											<!-- <input id="option-product-qty" name="product_id" type="hidden" value="{{$product_info->product_id}}"> -->
										</div>
										<div class="btn-plus">
											<a href="#" class="btn-plus-up">
												<i class="fa fa-caret-up"></i>
											</a>
											<a href="#" class="btn-plus-down">
												<i class="fa fa-caret-down"></i>
											</a>
										</div>
									</div>
								</div>
								<div class="attributes">
									<div class="attribute-label">Size:</div>
									<div class="attribute-list">
										<select>
											<option value="1">X</option>
											<option value="2">XL</option>
											<option value="3">XXL</option>
										</select>
										<a id="size_chart" class="fancybox" href="assets/data/size-chart.jpg">Size Chart</a>
									</div>

								</div>
							</div>
							<div class="form-action">

							<button type="submit">
								<div class="button-group">

								<span class="btn-add-cart">Add to cart</span>
									<!-- <a class="btn-add-cart" href="#">Add to cart</a> -->
								</div>

							</button>

							{!! Form::close() !!}
								<div class="button-group">
									<a class="wishlist" href="#"><i class="fa fa-heart-o"></i>
										<br>Wishlist</a>
										<a class="compare" href="#"><i class="fa fa-signal"></i>
											<br>        
											Compare</a>
										</div>
									</div>
									<div class="form-share">
										<div class="sendtofriend-print">
											<a href="javascript:print();"><i class="fa fa-print"></i> Print</a>
											<a href="#"><i class="fa fa-envelope-o fa-fw"></i>Send to a friend</a>
										</div>
										<div class="network-share">
										</div>
									</div>
								</div>
							</div>
							<!-- tab product -->
							<div class="product-tab">
								<ul class="nav-tab">
									<li class="active">
										<a aria-expanded="false" data-toggle="tab" href="#product-detail">Product Details</a>
									</li>
									<li>
										<a aria-expanded="true" data-toggle="tab" href="#information">information</a>
									</li>
									<li>
										<a data-toggle="tab" href="#reviews">reviews</a>
									</li>
									<li>
										<a data-toggle="tab" href="#extra-tabs">Extra Tabs</a>
									</li>
									<li>
										<a data-toggle="tab" href="#guarantees">guarantees</a>
									</li>
								</ul>
								<div class="tab-container">
									<div id="product-detail" class="tab-panel active">


										<p>{{$product_info->product_long_description}}<p>
										</div>
										<div id="information" class="tab-panel">
											<table class="table table-bordered">
												<tr>
													<td width="200">Compositions</td>
													<td>Cotton</td>
												</tr>
												<tr>
													<td>Styles</td>
													<td>Girly</td>
												</tr>
												<tr>
													<td>Properties</td>
													<td>Colorful Dress</td>
												</tr>
											</table>
										</div>
										<div id="reviews" class="tab-panel">
											<div class="product-comments-block-tab">
												<div class="comment row">
													<div class="col-sm-3 author">
														<div class="grade">
															<span>Grade</span>
															<span class="reviewRating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
															</span>
														</div>
														<div class="info-author">
															<span><strong>Jame</strong></span>
															<em>04/08/2015</em>
														</div>
													</div>
													<div class="col-sm-9 commnet-dettail">
														Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet convallis pulvinar
													</div>
												</div>
												<div class="comment row">
													<div class="col-sm-3 author">
														<div class="grade">
															<span>Grade</span>
															<span class="reviewRating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
															</span>
														</div>
														<div class="info-author">
															<span><strong>Author</strong></span>
															<em>04/08/2015</em>
														</div>
													</div>
													<div class="col-sm-9 commnet-dettail">
														Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet convallis pulvinar
													</div>
												</div>
												<p>
													<a class="btn-comment" href="#">Write your review !</a>
												</p>
											</div>

										</div>
										<div id="extra-tabs" class="tab-panel">
											<p>Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est. Sed lectus. Sed a libero. Vestibulum eu odio.</p>


										</div>
										<div id="guarantees" class="tab-panel">
											<p>Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est. Sed lectus. Sed a libero. Vestibulum eu odio.</p>


										</div>
									</div>
								</div>

								<!-- ./tab product -->
								<!-- box product -->
								<div class="page-product-box">
									<h3 class="heading">Related Products</h3>
									<ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
										<li>
											<div class="product-container">
												<div class="left-block">
													<a href="#">
														<img class="img-responsive" alt="product" src="" />
													</a>
													<div class="quick-view">
														<a title="Add to my wishlist" class="heart" href="#"></a>
														<a title="Add to compare" class="compare" href="#"></a>
														<a title="Quick view" class="search" href="#"></a>
													</div>
													<div class="add-to-cart">
														<a title="Add to Cart" href="#add">Add to Cart</a>
													</div>
												</div>
												<div class="right-block">
													<h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
													<div class="product-star">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-half-o"></i>
													</div>
													<div class="content_price">
														<span class="price product-price">$38,95</span>
														<span class="price old-price">$52,00</span>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="product-container">
												<div class="left-block">
													<a href="#">
														<img class="img-responsive" alt="product" src="{{URL::to('public/assets/data/p35.jpg')}}" />
													</a>
													<div class="quick-view">
														<a title="Add to my wishlist" class="heart" href="#"></a>
														<a title="Add to compare" class="compare" href="#"></a>
														<a title="Quick view" class="search" href="#"></a>
													</div>
													<div class="add-to-cart">
														<a title="Add to Cart" href="#add">Add to Cart</a>
													</div>
												</div>
												<div class="right-block">
													<h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
													<div class="product-star">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-half-o"></i>
													</div>
													<div class="content_price">
														<span class="price product-price">$38,95</span>
														<span class="price old-price">$52,00</span>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="product-container">
												<div class="left-block">
													<a href="#">
														<img class="img-responsive" alt="product" src="assets/data/p37.jpg" />
													</a>
													<div class="quick-view">
														<a title="Add to my wishlist" class="heart" href="#"></a>
														<a title="Add to compare" class="compare" href="#"></a>
														<a title="Quick view" class="search" href="#"></a>
													</div>
													<div class="add-to-cart">
														<a title="Add to Cart" href="#add">Add to Cart</a>
													</div>
												</div>
												<div class="right-block">
													<h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
													<div class="product-star">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-half-o"></i>
													</div>
													<div class="content_price">
														<span class="price product-price">$38,95</span>
														<span class="price old-price">$52,00</span>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="product-container">
												<div class="left-block">
													<a href="#">
														<img class="img-responsive" alt="product" src="assets/data/p39.jpg" />
													</a>
													<div class="quick-view">
														<a title="Add to my wishlist" class="heart" href="#"></a>
														<a title="Add to compare" class="compare" href="#"></a>
														<a title="Quick view" class="search" href="#"></a>
													</div>
													<div class="add-to-cart">
														<a title="Add to Cart" href="#add">Add to Cart</a>
													</div>
												</div>
												<div class="right-block">
													<h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
													<div class="product-star">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-half-o"></i>
													</div>
													<div class="content_price">
														<span class="price product-price">$38,95</span>
														<span class="price old-price">$52,00</span>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<!-- ./box product -->
								<!-- box product -->
								<div class="page-product-box">
									<h3 class="heading">You might also like</h3>
									<ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
										<li>
											<div class="product-container">
												<div class="left-block">
													<a href="#">
														<img class="img-responsive" alt="product" src="assets/data/p97.jpg" />
													</a>
													<div class="quick-view">
														<a title="Add to my wishlist" class="heart" href="#"></a>
														<a title="Add to compare" class="compare" href="#"></a>
														<a title="Quick view" class="search" href="#"></a>
													</div>
													<div class="add-to-cart">
														<a title="Add to Cart" href="#add">Add to Cart</a>
													</div>
												</div>
												<div class="right-block">
													<h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
													<div class="product-star">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-half-o"></i>
													</div>
													<div class="content_price">
														<span class="price product-price">$38,95</span>
														<span class="price old-price">$52,00</span>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="product-container">
												<div class="left-block">
													<a href="#">
														<img class="img-responsive" alt="product" src="assets/data/p34.jpg" />
													</a>
													<div class="quick-view">
														<a title="Add to my wishlist" class="heart" href="#"></a>
														<a title="Add to compare" class="compare" href="#"></a>
														<a title="Quick view" class="search" href="#"></a>
													</div>
													<div class="add-to-cart">
														<a title="Add to Cart" href="#add">Add to Cart</a>
													</div>
												</div>
												<div class="right-block">
													<h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
													<div class="product-star">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-half-o"></i>
													</div>
													<div class="content_price">
														<span class="price product-price">$38,95</span>
														<span class="price old-price">$52,00</span>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="product-container">
												<div class="left-block">
													<a href="#">
														<img class="img-responsive" alt="product" src="assets/data/p36.jpg" />
													</a>
													<div class="quick-view">
														<a title="Add to my wishlist" class="heart" href="#"></a>
														<a title="Add to compare" class="compare" href="#"></a>
														<a title="Quick view" class="search" href="#"></a>
													</div>
													<div class="add-to-cart">
														<a title="Add to Cart" href="#add">Add to Cart</a>
													</div>
												</div>
												<div class="right-block">
													<h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
													<div class="product-star">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-half-o"></i>
													</div>
													<div class="content_price">
														<span class="price product-price">$38,95</span>
														<span class="price old-price">$52,00</span>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="product-container">
												<div class="left-block">
													<a href="#">
														<img class="img-responsive" alt="product" src="assets/data/p36.jpg" />
													</a>
													<div class="quick-view">
														<a title="Add to my wishlist" class="heart" href="#"></a>
														<a title="Add to compare" class="compare" href="#"></a>
														<a title="Quick view" class="search" href="#"></a>
													</div>
													<div class="add-to-cart">
														<a title="Add to Cart" href="#add">Add to Cart</a>
													</div>
												</div>
												<div class="right-block">
													<h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
													<div class="product-star">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-half-o"></i>
													</div>
													<div class="content_price">
														<span class="price product-price">$38,95</span>
														<span class="price old-price">$52,00</span>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<!-- ./box product -->
							</div>
							<!-- Product -->
						</div>
						<!-- ./ Center colunm -->
					</div>
					<!-- ./row-->
				</div>
			</div>

			@endsection