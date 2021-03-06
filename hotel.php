<?php include 'header.php' ?>

<section class="parallax-window" data-parallax="scroll" data-image-src="img/hotels_bg.jpg" data-natural-width="1400" data-natural-height="470">
	<div class="parallax-content-1">
		<div class="animated fadeInDown">
			<h1>Paris Hotels</h1>
			<p>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</p>
		</div>
	</div>
</section>

<main>
		<div id="position">
			<div class="container">
				<ul>
					<li><a href="#">Home</a>
					</li>
					<li><a href="#">Category</a>
					</li>
					<li>Page active</li>
				</ul>
			</div>
		</div>
		<!-- Position -->

		<div class="collapse" id="collapseMap">
			<div id="map" class="map"></div>
		</div>
		<!-- End Map -->

		<div class="container margin_60">
			<div class="row">
				<aside class="col-lg-3 col-md-3">
					<p>
						<a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
					</p>

					<div id="filters_col">
						<a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt"><i class="icon_set_1_icon-65"></i>Filters <i class="icon-plus-1 pull-right"></i></a>
						<div class="collapse in" id="collapseFilters">
							
							<div class="filter_type">
								<h6>Star Category</h6>
								<ul>
									<li>
										<label>
											<input type="checkbox"><span class="rating">
						<i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i>
						</span>(15)</label>
									</li>
									<li>
										<label>
											<input type="checkbox"><span class="rating">
						<i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81"></i>
						</span>(45)</label>
									</li>
									<li>
										<label>
											<input type="checkbox"><span class="rating">
						<i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i>
						</span>(35)</label>
									</li>
									<li>
										<label>
											<input type="checkbox"><span class="rating">
						<i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i>
						</span>(25)</label>
									</li>
									<li>
										<label>
											<input type="checkbox"><span class="rating">
						<i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i>
						</span>(15)</label>
									</li>
								</ul>
							</div>
							<div class="filter_type">
								<h6>Review Score</h6>
								<ul>
									<li>
										<label>
											<input type="checkbox">Superb: 9+ (77)</label>
									</li>
									<li>
										<label>
											<input type="checkbox">Very good: 8+ (552)</label>
									</li>
									<li>
										<label>
											<input type="checkbox">Good: 7+ (909)</label>
									</li>
									<li>
										<label>
											<input type="checkbox">Pleasant: 6+ (1196)</label>
									</li>
									<li>
										<label>
											<input type="checkbox">No rating (198)</label>
									</li>
								</ul>
							</div>
							<div class="filter_type">
								<h6>Facility</h6>
								<ul>
									<li>
										<label>
											<input type="checkbox">Pet allowed</label>
									</li>
									<li>
										<label>
											<input type="checkbox">Wifi</label>
									</li>
									<li>
										<label>
											<input type="checkbox">Spa</label>
									</li>
									<li>
										<label>
											<input type="checkbox">Restaurant</label>
									</li>
									<li>
										<label>
											<input type="checkbox">Pool</label>
									</li>
									<li>
										<label>
											<input type="checkbox">Parking</label>
									</li>
									<li>
										<label>
											<input type="checkbox">Fitness center</label>
									</li>
								</ul>
							</div>
							<div class="filter_type">
								<h6>District</h6>
								<ul>
									<li>
										<label>
											<input type="checkbox">Paris Centre</label>
									</li>
									<li>
										<label>
											<input type="checkbox">La Defance</label>
									</li>
									<li>
										<label>
											<input type="checkbox">La Marais</label>
									</li>
									<li>
										<label>
											<input type="checkbox">Latin Quarter</label>
									</li>
								</ul>
							</div>
						</div>
						<!--End collapse -->
					</div>
					<!--End filters col-->
					<div class="box_style_2">
						<i class="icon_set_1_icon-57"></i>
						<h4>Need <span>Help?</span></h4>
						<a href="tel://004542344599" class="phone">+45 423 445 99</a>
						<small>Monday to Friday 9.00am - 7.30pm</small>
					</div>
				</aside>
				<!--End aside -->

				<div class="col-lg-9 col-md-8">

					<div id="tools">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-6">
								<div class="styled-select-filters">
									<select name="sort_price" id="sort_price">
										<option value="" selected>Sort by price</option>
										<option value="lower">Lowest price</option>
										<option value="higher">Highest price</option>
									</select>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-6">
								<div class="styled-select-filters">
									<select name="sort_rating" id="sort_rating">
										<option value="" selected>Sort by ranking</option>
										<option value="lower">Lowest ranking</option>
										<option value="higher">Highest ranking</option>
									</select>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 hidden-xs text-right">
								<a href="#" class="bt_filters"><i class="icon-th"></i></a> <a href="all_hotels_list.html" class="bt_filters"><i class=" icon-list"></i></a>
							</div>
						</div>
					</div>
					<!--End tools -->

					<div class="row">
						<div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
							<div class="hotel_container">
								<div class="ribbon_3 popular"><span>Popular</span>
								</div>
								<div class="img_container">
									<a href="single_hotel.html">
										<img src="img/hotel_1.jpg" width="800" height="533" class="img-responsive" alt="Image">
										<div class="score"><span>7.5</span>Good</div>
										<div class="short_info hotel">
											From/Per night<span class="price"><sup>$</sup>59</span>
										</div>
									</a>
								</div>
								<div class="hotel_title">
									<h3><strong>Park Hyatt</strong> Hotel</h3>
									<div class="rating">
										<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
									</div>
									<!-- end rating -->
									<div class="wishlist">
										<a class="tooltip_flip tooltip-effect-1" href="#">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
									</div>
									<!-- End wish list-->
								</div>
							</div>
							<!-- End box tour -->
						</div>
						<!-- End col-md-6 -->

						<div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.2s">
							<div class="hotel_container">
								<div class="ribbon_3 popular"><span>Popular</span>
								</div>
								<div class="img_container">
									<a href="single_hotel.html">
										<img src="img/hotel_2.jpg" width="800" height="533" class="img-responsive" alt="Image">
										<div class="score"><span>9.0</span>Superb</div>
										<div class="short_info hotel">
											From/Per night<span class="price"><sup>$</sup>45</span>
										</div>
									</a>
								</div>
								<div class="hotel_title">
									<h3><strong>Mariott</strong> Hotel</h3>
									<div class="rating">
										<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
									</div>
									<!-- end rating -->
									<div class="wishlist">
										<a class="tooltip_flip tooltip-effect-1" href="#">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
									</div>
									<!-- End wish list-->
								</div>
							</div>
							<!-- End box -->
						</div>
						<!-- End col-md-6 -->
					</div>
					<!-- End row -->

					<div class="row">
						<div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.2s">
							<div class="hotel_container">
								<div class="ribbon_3"><span>Top rated</span>
								</div>
								<div class="img_container">
									<a href="single_hotel.html">
										<img src="img/hotel_3.jpg" width="800" height="533" class="img-responsive" alt="Image">
										<div class="score"><span>9.5</span>Superb</div>
										<div class="short_info hotel">
											From/Per night<span class="price"><sup>$</sup>39</span>
										</div>
									</a>
								</div>
								<div class="hotel_title">
									<h3><strong>Lumiere</strong> Hotel</h3>
									<div class="rating">
										<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
									</div>
									<!-- end rating -->
									<div class="wishlist">
										<a class="tooltip_flip tooltip-effect-1" href="#">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
									</div>
									<!-- End wish list-->
								</div>
							</div>
							<!-- End box -->
						</div>
						<!-- End col-md-6 -->

						<div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.4s">
							<div class="hotel_container">
								<div class="ribbon_3"><span>Top rated</span>
								</div>
								<div class="img_container">
									<a href="single_hotel.html">
										<img src="img/hotel_4.jpg" width="800" height="533" class="img-responsive" alt="Image">
										<div class="score"><span>7.5</span>Good</div>
										<div class="short_info hotel">
											From/Per night<span class="price"><sup>$</sup>45</span>
										</div>
									</a>
								</div>
								<div class="hotel_title">
									<h3><strong>Concorde</strong> Hotel</h3>
									<div class="rating">
										<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
									</div>
									<!-- end rating -->
									<div class="wishlist">
										<a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
									</div>
									<!-- End wish list-->
								</div>
							</div>
							<!-- End box -->
						</div>
						<!-- End col-md-6 -->
					</div>
					<!-- End row -->

					<div class="row">
						<div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.2s">
							<div class="hotel_container">
								<div class="ribbon_3"><span>Top rated</span>
								</div>
								<div class="img_container">
									<a href="single_hotel.html">
										<img src="img/hotel_5.jpg" width="800" height="533" class="img-responsive" alt="Image">
										<div class="score"><span>8.0</span>Good</div>
										<div class="short_info hotel">
											From/Per night<span class="price"><sup>$</sup>39</span>
										</div>
									</a>
								</div>
								<div class="hotel_title">
									<h3><strong>Louvre</strong> Hotel</h3>
									<div class="rating">
										<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
									</div>
									<!-- end rating -->
									<div class="wishlist">
										<a class="tooltip_flip tooltip-effect-1" href="#">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
									</div>
									<!-- End wish list-->
								</div>
							</div>
							<!-- End box -->
						</div>
						<!-- End col-md-6 -->

						<div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.4s">
							<div class="hotel_container">
								<div class="ribbon_3"><span>Top rated</span>
								</div>
								<div class="img_container">
									<a href="single_hotel.html">
										<img src="img/hotel_6.jpg" width="800" height="533" class="img-responsive" alt="Image">
										<div class="score"><span>8.5</span>Superb</div>
										<div class="short_info hotel">
											From/Per night<span class="price"><sup>$</sup>45</span>
										</div>
									</a>
								</div>
								<div class="hotel_title">
									<h3><strong>Concorde</strong> Hotel</h3>
									<div class="rating">
										<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
									</div>
									<!-- end rating -->
									<div class="wishlist">
										<a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
									</div>
									<!-- End wish list-->
								</div>
							</div>
							<!-- End box -->
						</div>
						<!-- End col-md-6 -->
					</div>
					<!-- End row -->

					<hr>

					<div class="text-center">
						<ul class="pagination">
							<li><a href="#">Prev</a>
							</li>
							<li class="active"><a href="#">1</a>
							</li>
							<li><a href="#">2</a>
							</li>
							<li><a href="#">3</a>
							</li>
							<li><a href="#">4</a>
							</li>
							<li><a href="#">5</a>
							</li>
							<li><a href="#">Next</a>
							</li>
						</ul>
					</div>
					<!-- end pagination-->

				</div>
				<!-- End col lg 9 -->
			</div>
			<!-- End row -->
		</div>
		<!-- End container -->
	</main>

<?php include 'footer.php' ?>