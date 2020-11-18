@extends('layouts.masterweb')
@section('content')
<section>
	<div class="container my-2">
		<div class="row ">
			<div class="col-sm-3 ">
				<div class="left-sidebar ">
					<h2>Category</h2>
					<div class="panel-group category-products" id="accordian"><!--category-productsr-->
					
					
					
					@foreach($categories as $cat)
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordian" href="#{{$cat->name}}">
								<span class="badge pull-right"><i class="fa fa-plus"></i></span>
								{{$cat->name}}
							</a>
							</h4>
						</div>
						<div id="{{$cat->name}}" class="panel-collapse collapse">
							<div class="panel-body">
								<ul>
									<li><a href="#"></a>{{$cat->name}}</li>
									<li><a href="#">Guess</a></li>
									<li><a href="#">Valentino</a></li>
									<li><a href="#">Dior</a></li>
									<li><a href="#">Versace</a></li>
								</ul>
							</div>
						</div>
					</div>
					@endforeach
					@foreach($categories as $cat)
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"><a href="/categorydetails/{{$cat->id}}">{{$cat->name}}</a></h4>
						</div>
					</div>
					@endforeach
					
					</div><!--/category-products-->
					
					
					
					<div class="price-range"><!--price-range-->
					<h2>Price Range</h2>
					<div class="well text-center">
						<input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
						<b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
					</div>
					</div><!--/price-range-->
					
					
					
				</div>
			</div>
			<div class="col-sm-9 padding-right">
				<div class="product-details"><!--product-details-->
				<div class="col-sm-5">
					<div class="view-product">
						<img src="/storage/cover_images/{{$product->img1}}" alt="" />
						<h3></h3>
					</div>
					<div id="similar-product" class="carousel slide" data-ride="carousel">
						
						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active ">
								<a href=""><img src="/storage/cover_images/{{$product->img2}}" alt="" style="height: 200px; width: 260px;"></a>
								
								
							</div>
							<div class="item  ">
								
								<a href=""><img src="/storage/cover_images/{{$product->img3}}" alt="" style="height: 200px; width: 260px;"></a>
								
							</div>
							<div class="item">
								<a href=""><img src="/storage/cover_images/{{$product->img4}}" alt="" style="height: 200px; width: 260px;"></a>
								
								
							</div>
							<div class="item">
								
								<a href=""><img src="/storage/cover_images/{{$product->img5}}" alt="" style="height: 200px; width: 260px;"></a>
								
							</div>
							
							
						</div>
						<!-- Controls -->
						<a class="left item-control" href="#similar-product" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a class="right item-control" href="#similar-product" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
				</div>
				<h4> <small></small></h4>
				
				
				
				
				<div class="col-sm-7">
					<div class="product-information"><!--/product-information-->
					<img src="images/product-details/new.jpg" class="newarrival" alt="" />
					<h2>{{$product->name}}</h2>
					<p>Web ID: 1089772</p>
					<img src="images/product-details/rating.png" alt="" />
					<span>
						<span>{{$product->price}}</span>
						<label>Quantity:</label><br>
						<input type="text" value="3" />
						<button type="button" class="btn btn-fefault cart">
						<i class="fa fa-shopping-cart"></i>
						Add to cart
						</button>
					</span>
					<p><b>Availability:</b> @if($product->status == '1')
						<span class="badge badge-pill badge-success">Available</span>
						@elseif($product->status == '0')
						<span class="badge badge-pill badge-primary">Not Available</span>
						@endif
					</p>
					<p><b>Available Colors:</b>{{$product->color}}</p>
					@foreach($product->category as $prod)
					<p><b>Category:</b>{{$prod->name}}</p>
					@endforeach
				
					<p><b>Os:</b>{{$product->os}}</p>
					<p><b>Weight:</b>{{$product->weight}}</p>
					<p><b>Screen:</b>{{$product->screen}}</p>
					<p><b>Resolution:</b>{{$product->resolation}}</p>
					<p><b>Dimension:</b>{{$product->dimension}}</p>
					<p><b>Expandable:</b>{{$product->expandable}}</p>
					<p><b>RAM:</b>{{$product->RAM}}</p>
					<p><b>ROM:</b>{{$product->ROM}}</p>
					<p><b>Number of cores:</b>{{$product->number_of_cores}}</p>
					<p><b>SoC:</b>{{$product->SoC}}</p>
					<p><b>CPU:</b>{{$product->CPU}}</p>
					<p><b>GPU:</b>{{$product->GPU}}</p>
					<p><b>Featurues:</b>{{$product->featurues}}</p>
					<p><b>Video:</b>{{$product->vedio}}</p>
					<p><b>Primary:</b>{{$product->primary}}</p>
					<p><b>Secondary:</b>{{$product->secondary}}</p>
					<p><b>Battery:</b>{{$product->battery}}</p>
					<p><b>Charging:</b>{{$product->charging}}</p>
					<p><b>Wi-Fi:</b>{{$product->wifi}}</p>
					<p><b>Internet:</b>{{$product->internet}}</p>
					<p><b>USB:</b>{{$product->USB}}</p>
					<p><b>Bluetooth:</b>{{$product->bluetooth}}</p>
					<p><b>Radio:</b>{{$product->radio}}</p>
					<p><b>First arrival:</b>{{$product->first_arrival}}</p>
					<p><b>Manufactured By:</b>{{$product->manufacturedby}}</p>
					<p><b>SIM:</b>{{$product->SIM}}</p>
					<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>


					</div><!--/product-information-->
				</div>
				</div><!--/product-details-->
			</div>
			<div class="category-tab shop-details-tab"><!--category-tab-->
			<div class="col-sm-12">
				<ul class="nav nav-tabs">
					<li><a href="#details" data-toggle="tab">Details</a></li>
					<li class="active"><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>
				</ul>
			</div>
			<div class="tab-content">
				<div class="tab-pane fade" id="details" >
					<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									@foreach($products as $prod)
									
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="/storage/cover_images/{{$prod->img1}}" alt="" style="height: 150px; width: 100px;" />
													<h2>{{$prod->price}}</h2>
													<a href="/productdetails/{{$prod->id}}"><p>{{$prod->name}}</p></a>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									
									@endforeach
									
									
								</div>
								<div class="item">	
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend1.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend3.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
				</div>
				
				
				
				<div class="tab-pane fade active in" id="reviews" >
					<div class="col-sm-12">
						<ul>
							<li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
							<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
							<li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
						</ul>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
						<p><b>Write Your Review</b></p>
						
						<form action="#">
							<span>
								<input type="text" placeholder="Your Name"/>
								<input type="email" placeholder="Email Address"/>
							</span>
							<textarea name="" ></textarea>
							<b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
							<button type="button" class="btn btn-default pull-right">
							Submit
							</button>
						</form>
					</div>
				</div>
				
			</div>
			</div><!--/category-tab-->
		</div>
	</div>
	<h3 class="my-3 name" id="name"></h3>
	<hr>



	
	@endsection
	@section('js')

	@endsection