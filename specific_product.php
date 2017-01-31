<?php include 'header_script.php' ?>
<style type="text/css">
	html, body {
		margin: 0;
		padding: 0;
	}

	* {
		box-sizing: border-box;
	}

	.slider {
		width: 50%;
		margin: 100px auto;
	}

	.slick-slide {
		margin: 0px 20px;
		width: 200px;
	}

	.slick-slide img {
		width: 100%;
	}

	.slick-prev:before,
	.slick-next:before {
		color: black;
	}
</style>
<body>
	<?php include 'navbar.php' ?>
	<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12" id="main_section" style="margin-top: 200px;">
		<!-- left panel for showing images -->
		<div class="col-md-6">
			<div class="col-md-10"> 
				<div class="col-md-12">
					<div class="simpleLens-gallery-container" id="demo-1">
						<div class="col-md-4">
							<div class="simpleLens-thumbnails-container">
								<a href="#" class="simpleLens-thumbnail-wrapper" data-lens-image="img/product/a2.jpg" data-big-image="img/product/a2.jpg">
									<img src="img/product/a2.jpg" style="width:110px">
								</a>
								<a href="#" class="simpleLens-thumbnail-wrapper" data-lens-image="img/product/a3.jpg" data-big-image="img/product/a3.jpg">
									<img src="img/product/a3.jpg" style="width:110px">
								</a>
								<a href="#" class="simpleLens-thumbnail-wrapper" data-lens-image="img/product/a1.jpeg" data-big-image="img/product/a1.jpeg">
									<img src="img/product/a1.jpeg" style="width:110px">
								</a>
							</div>
						</div>
						<div class="col-md-8">
							<div class="simpleLens-container">
								<div class="simpleLens-big-image-container">
									<a class="simpleLens-lens-image" data-lens-image="img/product/a2.jpg">
										<img src="img/product/a2.jpg" class="simpleLens-big-image">
									</a>
								</div>
							</div>
							<br>
							<div class ="col-md-12" style="margin-left: 40px">
								<button id="buy_it_now" style="background-color: #23a7f1;" class="btn btn-primary btn-sm">BUY IT NOW</button> 
								<i class="fa fa-heart" aria-hidden="true"></i>
								<button style="background-color: #fb9b02;" id="add_to_cart" class="btn btn-primary btn-sm" role="button"><i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp ADD TO CART</button> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6" style="margin-left: -155px;">
			<ol class="breadcrumb">
				<li><a href="<?php echo baseURL() ?>">HOME</a></li>
				<li><a href="<?php echo baseURL() ?>search_result.php">ELECTRONICS</a></li>
				<li class="active">IPHONE</li>
			</ol>
			<span>
				<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
			</span>
			<span>(4.5) - 12 Ratings - 5 Reviews - Q&A</span>
			<hr>
			<h2 style="color:#2eaaf0;">Apple iPhone 6 64GB Smartphone</h2>
			<br>
			<p style="font-size: x-large">
				<span style="font-size: large;">Price: </span> <strong style="color: #fb9b02;">180</strong> <small> OMR</small>
			</p>
			<p>
				<span style="font-size: large;">Deliver To: &nbsp</span>
				<input type="text" name="" value="" placeholder=""> &nbsp
				<span onclick="showMap()" id="map_marker_specific" style="cursor: pointer;font-size: 25px;" class="fa fa-map-marker" aria-hidden="true"></span><br>
				<img id="map_img_specific" style="display:none;width: 900px;margin-top: 10px;" src="img/map.jpg" alt="">

				<br>
				<small>Usually delivered in 48-96 hours. Pin Location for exact delivery/charges</small>
			</p><br>
			<p>
				<span style="font-size: large;">Highlights: </span><br>
				<p>- This Ceramic wall vase features a mordern abstract face finished in a matte white</p>
				<p>- Overall Product Dimensions: 5-inch width by 4-inch depth by 10-inch height</p>
				<p>- Overall Product Dimensions: 5-inch width by 4-inch depth by 10-inch height</p>
			</p><br>

			<!-- tab for product info-->
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" aria-controls="details" class="active"><a href="#details" aria-controls="details" role="tab" data-toggle="tab">Details</a></li>
				<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Specifications</a></li>
				<li role="presentation"><a href="#review" aria-controls="review" role="tab" data-toggle="tab">Review</a></li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="details">
					<br>
					iPhone SE, the most powerful 4inch phone ever. To create it, we started with a beloved design, then reinvented it from the inside out. The A9 is the same advanced chip used in iPhone 6s. The 12megapixel camera captures incredible photos and 4K videos.
					<br>
					<li>Retina display</li>

					<li>4‑inch (diagonal) LED‑backlit widescreen Multi‑Touch display</li>

					<li>1136‑by‑640‑pixel resolution at 326 ppi</li>

					<li>800:1 contrast ratio (typical)</li>

					<li>Full sRGB standard</li>
					<li>500 cd/m2 max brightness (typical)</li>

					<li>Fingerprint‑resistant oleophobic coating</li>

					<li>Support for display of multiple languages and characters simultaneousl</li>
				</div>

				<div role="tabpanel" class="tab-pane" id="profile">
					<h5>Display</h5>
					<ul>
						<li>Retina display
						</li>
						<li>4inch (diagonal) LED backlit widescreen MultiTouch display
						</li>
						<li>1136 by 640 pixel resolution at 326 ppi
						</li>
						<li>800:1 contrast ratio (typical)
						</li>
						<li>500 cd/m2 max brightness (typical)
						</li>
						<li>Full sRGB standard
						</li>
						<li>Fingerprint resistant oleophobic coating
						</li>
						<li>Support for display of multiple languages and characters simultaneously
						</li>
					</ul>
					<h5>Size and Weight</h5>
					<ul>
						<li>4.87 inches (123.8 mm)/ 2.31 inches (58.6 mm)/ 0.30 inch (7.6 mm)
						</li>
						<li>Weight: 3.99 ounces (113 grams)</li>
					</ul>

					<h5>Operating System</h5>
					<ul>
						<li>iOS 9
						</li>
						<li>The world’s most advanced mobile operating system gets major enhancements to built?in apps, a smarter Siri and search, and much more.</li>
					</ul>
					<h5>Power and Battery</h5>
					<ul>
						<li>iOS 9
						</li>
						<li>The world’s most advanced mobile operating system gets major enhancements to built?in apps, a smarter Siri and search, and much more.</li>
					</ul>
				</div>

				<div role="tabpanel" class="tab-pane" id="review">
					<br>
					<div class="row">
						<div class="col-md-3" style="width: 0%;">
							<strong>5</strong>
						</div>
						<div class="col-md-6">
							<div class="progress">
								<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
									<span class="sr-only">79% Complete</span>
								</div>
							</div>
						</div>
						<div class="col-md-3" style="width: 0%;">
							<strong>(77878)</strong>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-3" style="width: 0%;">
							<strong>4</strong>
						</div>
						<div class="col-md-6">
							<div class="progress">
								<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 55%">
									<span class="sr-only">55% Complete</span>
								</div>
							</div>
						</div>
						<div class="col-md-3" style="width: 0%;">
							<strong>(2900)</strong>
						</div>
					</div>
					

					<br>
					<div class="row">
						<div class="col-md-3" style="width: 0%;">
							<strong>3</strong>
						</div>
						<div class="col-md-6">
							<div class="progress">
								<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
									<span class="sr-only">70% Complete</span>
								</div>
							</div>
						</div>
						<div class="col-md-3" style="width: 0%;">
							<strong>(77878)</strong>
						</div>
					</div>
					
					

					<br>
					<div class="row">
						<div class="col-md-3" style="width: 0%;">
							<strong>2</strong>
						</div>
						<div class="col-md-6">
							<div class="progress">
								<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
									<span class="sr-only">10% Complete</span>
								</div>
							</div>
						</div>
						<div class="col-md-3" style="width: 0%;">
							<strong>(77878)</strong>
						</div>
					</div>

					<br>
					<div class="row">
						<div class="col-md-3" style="width: 0%;">
							<strong>1</strong>
						</div>
						<div class="col-md-6">
							<div class="progress">
								<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 5%">
									<span class="sr-only">5% Complete</span>
								</div>
							</div>
						</div>
						<div class="col-md-3" style="width: 0%;">
							<strong>(5)</strong>
						</div>
					</div>
					
				</div>

			</div>
		</div>



		<footer class="footer">
			<div class="container" id="similar_product_box" style="margin-top: 300px;">
				<h3 style="text-align: center">Similar Products</h3>
				<section id="similar_product_slider" class="variable slider" style="">
					<div>
						<img src="img/phone/20.jpg">
					</div>
					<div>
						<img src="img/phone/19.jpg">
					</div>
					<div>
						<img src="img/phone/18.jpg">
					</div>
					<div>
						<img src="img/phone/17.jpg">
					</div>
					<div>
						<img src="img/phone/16.jpg">
					</div>
					<div>
						<img src="img/phone/15.jpg">
					</div>
				</section>
			</div>
			<?php include "footer.php" ?>
		</footer>
	</div>

	<script>
		$(document).ready(function(){
			$('#demo-1 .simpleLens-thumbnails-container img').simpleGallery({
				loading_image: 'demo/images/loading.gif'
			});
			$('#demo-1 .simpleLens-big-image').simpleLens({
				loading_image: 'demo/images/loading.gif'
			});
			//buy it now option
			$("#buy_it_now").click(function(){
				window.location.href = "<?php baseURL() ?>checkout.php";
			});
			//map marker
			$("#map_marker_specific").hover(function(){
				$("#map_img_specific").toggle("slow");
			},function(){
				$("#map_img_specific").toggle("slow");
			});	
		});
	</script>
	<script>
		$(document).ready(function(){
			$('#demo-2 .simpleLens-thumbnails-container img').simpleGallery({
				loading_image: 'demo/images/loading.gif',
				show_event: 'click'
			});

			$('#demo-2 .simpleLens-big-image').simpleLens({
				loading_image: 'demo/images/loading.gif',
				open_lens_event: 'click'
			});

			$("#add_to_cart").click(function(){
				window.location.href = "<?php echo baseURL()?>add_cart.php";
			});
		});
	</script>
	<script type="text/javascript">
		$(document).on('ready', function() {
			$(".regular").slick({
				dots: true,
				infinite: true,
				slidesToShow: 6,
				slidesToScroll: 10
			});
			$(".center").slick({
				dots: true,
				infinite: true,
				centerMode: true,
				slidesToShow: 5,
				slidesToScroll: 3
			});
			$(".variable").slick({
				dots: true,
				infinite: true,
				variableWidth: true,
				slidesToShow: 5
			});
		});
	</script>

</body>