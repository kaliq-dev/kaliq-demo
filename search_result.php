<?php include 'header_script.php' ?>

<style type="text/css" media="screen">
	#social_bar > img{
		width: 40px;
	}
	#social_bar{
		margin-left: -10px;
		
	}
	#price_tag{
		font-size: x-large;
		color: #fb9b02;
	}
	.caption{
		position: absolute;
		bottom: 0px;
		margin-bottom: 10px
	}
</style>

<body>
	<?php include 'navbar.php' ?>
	<!-- main box section -->
	<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12" id="main_section" style="margin-top: 200px;">
		<div class="col-md-2" id="refine_panel">
			<h4 style="color: #9E9E9E;">Refine by</h4>
			<strong>International Shipping</strong><br>
			<input type="checkbox" name="" value=""><span> Ship to India</span>
			<br><br>
			<strong>Brand</strong><br>
			<input type="checkbox" name="" value=""><span> Sphero</span><br>
			<input type="checkbox" name="" value=""><span> Gamin</span><br>
			<input type="checkbox" name="" value=""><span> Disney Princess</span><br>
			<input type="checkbox" name="" value=""><span> LEGO</span><br>
			<input type="checkbox" name="" value=""><span> Fitbit</span><br>
			<input type="checkbox" name="" value=""><span> Nuby</span><br>
			<i class="fa fa-plus" aria-hidden="true"></i><strong> See More</strong>
			<br><br>
			<strong>Eligible for Free Shipping</strong><br>
			<input type="checkbox" name="" value=""><span> Free Shipping by Kaaliq</span>
			<br><br>
			<strong>Add-on Item</strong><small> <a href="#" title="?">(What's this?)</a></small><br>
			<input type="checkbox" name="" value=""><span>Exclude <label class="label label-primary">Add-on Item</label></span>
			<br><br>
			<strong>Avg. Customer Review</strong><br>
			<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> & Up <br>
			<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> & Up <br>
			<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> & Up <br>
			<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> & Up
			<br><br>

			<strong>Price</strong><br>
			<span>Under $25</span><br>
			<span>$25 to $50</span><br>
			<span>$50 to $100</span><br>
			<span>$100 to $200</span><br>
			<span>$200 & Above</span> <br><br>

			<div class="row">
				<span>$</span> <input style="width: 60px;" type="number" name="" value="" placeholder="">&nbsp to &nbsp<span>$</span>  <input style="width: 60px;" type="number" name="" value="" placeholder="">
			</div>
			<br>
			<strong>Discount</strong><br>
			<span>10% Off or More</span><br>
			<span>25% Off or More</span><br>
			<span>50% Off or More</span><br>
			<span>70% Off or More</span><br>	
			<br>

			<strong>Seller</strong><br>
			<input type="checkbox" name="" value=""><span> HTAMWe</span><br>
			<input type="checkbox" name="" value=""><span> Audey Danis</span><br>
			<input type="checkbox" name="" value=""><span>	Refine Shop</span><br>
			<input type="checkbox" name="" value=""><span> Top Clothers Shop</span><br>
			<input type="checkbox" name="" value=""><span> Quebee</span><br>
			<input type="checkbox" name="" value=""><span> Megan SS</span><br>
			<input type="checkbox" name="" value=""><span> Roella Berry SS</span><br>
			<input type="checkbox" name="" value=""><span>guitaneer</span><br>
			<i class="fa fa-plus" aria-hidden="true"></i><strong> See More</strong>
			<br><br>

			<!-- left side panel -->
			<div id="social_bar">
				<img src="icons/social/facebook.png" alt="" onclick="window.location.href = 'https://www.facebook.com/'"><br>
				<img src="icons/social/google_plus.png" alt="" onclick="window.location.href = 'https://plus.google.com/'"><br>
				<img src="icons/social/instagram.png" alt="" onclick="window.location.href = 'https://www.instagram.com/?hl=en'"><br>
				<img src="icons/social/linkedin.png" alt="" onclick="window.location.href = 'https://www.linkedin.com/'"><br>
				<img src="icons/social/pinterest.png" alt="" onclick="window.location.href = 'https://www.pinterest.com/'"><br>
				<img src="icons/social/twitter.png" alt="" onclick="window.location.href = 'https://twitter.com/?lang=en'"><br>
				<img src="icons/social/youtube.png" alt="" onclick="window.location.href = 'https://www.youtube.com/'"><br>
				<img src="icons/social/ghost.png" alt="" onclick="window.location.href = '<?php echo baseURL() ?>'"><br>
			</div>
		</div>
		<div class="col-md-10" id="result_box">
			<h4>Showing 1-60 of 581 results for "iphone"</h4>

			<!-- column 1 -->
			<div class="col-md-2">
				<div class="row">
					<div class="col-sm-6 col-md-2">
						<div class="thumbnail" style="height: 340px;">
							<a href="<?php echo baseURL() ?>specific_product.php">
								<img style="width: 200px;" src="img/phone/01.jpg" alt="...">
							</a>
							<div class="caption">
								<strong style="font-size: large;">Google Pixel XL Very Silver 32GB</strong>
								<p>
									<span><strong id="price_tag" right="">450</strong> OMR</span>
									<button style="background-color: #fb9b02;
									border-radius: 50px" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp ADD TO CART</button> 
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-md-2">
						<div class="thumbnail" style="height: 340px;">
							<a href="<?php echo baseURL() ?>specific_product.php">
								<img style="width: 200px;font-size: large;"  src="img/phone/06.jpg" alt="...">
							</a>
							<div class="caption">
								<strong style="font-size: large;">HuaweiHONOR 8 32GB BLACK
								</strong>
								<p>
									<span><strong id="price_tag">150</strong> OMR</span>
									<button style="background-color: #fb9b02;
									border-radius: 50px;" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp ADD TO CART</button> 
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-md-2">
						<div class="thumbnail" style="height: 340px;">
							<a href="<?php echo baseURL() ?>specific_product.php">
								<img style="width: 200px;"  src="img/phone/03.jpg" alt="...">
							</a>
							<div class="caption">
								<strong style="font-size: large;">Xiaomi Mi Max LTE Gold 16</strong>
								<p>
									<span><strong id="price_tag">73</strong> OMR</span>
									<button style="background-color: #fb9b02;
									border-radius: 50px;    float: right;" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp ADD TO CART</button> 
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-md-2">
						<div class="thumbnail" style="height: 340px;">
							<a href="<?php echo baseURL() ?>specific_product.php">
								<img style="width: 200px;"  src="img/phone/04.jpg" alt="...">
							</a>
							<div class="caption">
								<strong  style="font-size: large;font-size: large;">Vertu Signature S</strong>
								<p>
									<span><strong id="price_tag">5000</strong> OMR</span>
									<button href="#" style="background-color: #fb9b02;
									border-radius: 50px;    float: right;" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp ADD TO CART</button> 
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- column 2 -->
			<div class="col-md-2">
				<div class="row">
					<div class="col-sm-6 col-md-2">
						<div class="thumbnail" style="height: 340px;">
							<a href="<?php echo baseURL() ?>specific_product.php">
								<img style="width: 200px;"  src="img/product/a2.jpg" alt="...">
							</a>
							<div class="caption">
								<strong style="font-size: large">Apple iPhone 6 64GB Smartphone</strong>
								<div>&nbsp;</div>
								<p>
									<span><strong id="price_tag">180</strong> OMR</span>
									<button style="background-color: #fb9b02;
									border-radius: 50px" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp ADD TO CART</button> 
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-md-2">
						<div class="thumbnail" style="height: 340px;">
							<a href="<?php echo baseURL() ?>specific_product.php">
								<img style="width: 200px;"   src="img/phone/02.jpg" alt="...">
							</a>
							<div class="caption">
								<strong style="font-size: large;">Apple iPhone 6s Silver 16GB</strong>
								<p>
									<span><strong id="price_tag">180</strong> OMR</span>
									<button style="background-color: #fb9b02;
									border-radius: 50px" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp ADD TO CART</button> 
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-md-2">
						<div class="thumbnail" style="height: 340px;">
							<a href="<?php echo baseURL() ?>specific_product.php">
								<img  style="width: 200px;"  src="img/phone/07.jpg" alt="...">
							</a>
							<div class="caption">
								<strong style="font-size: large;">Huawei Mate 9 Porsche Design 256GB Graphite Black</strong>
								<p>
									<span><strong id="price_tag">765</strong> OMR</span>
									<button style="background-color: #fb9b02;
									border-radius: 50px;" class="btn btn-primary btn-sm" role="button"><i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp ADD TO CART</button> 
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-md-2">
						<div class="thumbnail" style="height: 340px;">
							<a href="<?php echo baseURL() ?>specific_product.php">
								<img style="width: 200px;"  src="img/phone/08.jpg" alt="...">
							</a>
							<div class="caption">
								<strong style="font-size: large;">Xiaomi Mi 5 Dual SIM 4G LTE Black 32GB</strong>
								<p>
									<span><strong id="price_tag">115</strong> OMR</span>
									<button style="background-color: #fb9b02;
									border-radius: 50px;" class="btn btn-primary btn-sm" ><i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp ADD TO CART</button> 
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>	

			<!-- column 3 -->
			<div class="col-md-2">
				<div class="row">
					<div class="col-sm-6 col-md-2">
						<div class="thumbnail" style="height: 340px;">
							<a href="<?php echo baseURL() ?>specific_product.php">
								<img style="width: 200px;"  src="img/phone/09.jpg" alt="...">
							</a>
							<div class="caption">
								<strong style="font-size: large;">Nokia Lumia 900 16GB Black</strong>
								<p>
									<span><strong id="price_tag">57</strong> OMR</span>
									<button style="background-color: #fb9b02;
									border-radius: 50px;" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp ADD TO CART</button> 
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-md-2">
						<div class="thumbnail" style="height: 340px;">
							<a href="<?php echo baseURL() ?>specific_product.php">
								<img style="width: 200px;"  src="img/phone/10.jpg" alt="...">
							</a>
							<div class="caption">
								<strong style="font-size: large;">OnePlus 3T Gunmetal 64GB</strong>
								<p>
									<span><strong id="price_tag">165</strong> OMR</span>
									<button href="#" style="background-color: #fb9b02;
									border-radius: 50px;" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp ADD TO CART</button> 
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-md-2">
						<div class="thumbnail" style="height: 340px;">
							<a href="<?php echo baseURL() ?>specific_product.php">
								<img  style="width: 200px;"  src="img/phone/11.jpg" alt="...">
							</a>
							<div class="caption">
								<strong style="font-size: large;">Huawei Mate 9 Porsche Design</strong>
								<p>
									<span><strong id="price_tag">765</strong> OMR</span>
									<button style="background-color: #fb9b02;
									border-radius: 50px;" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp ADD TO CART</button> 
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-md-2">
						<div class="thumbnail" style="height: 340px;">
							<a href="<?php echo baseURL() ?>specific_product.php">
								<img style="width: 200px;" style="width: 200px;"  src="img/phone/12.jpg" alt="...">
							</a>
							<div class="caption">
								<strong style="font-size: large;">Huawei P9 Lite VNS-L31 Single SIM 4G LTE 16GB – Black</strong>
								<p>
									<span><strong id="price_tag">98</strong> OMR</span>
									<button style="background-color: #fb9b02;
									border-radius: 50px;" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp ADD TO CART</button> 
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- column 4 -->
			<div class="col-md-2">
				<div class="row">
					<div class="col-sm-6 col-md-2">
						<div class="thumbnail" style="height: 340px;">
							<a href="<?php echo baseURL() ?>specific_product.php">
								<img style="width: 200px;" src="img/phone/13.jpg" alt="...">
							</a>
							<div class="caption">
								<strong style="font-size: large;">Samsung Galaxy S7 Edge G9350 32GB Gold</strong>
								<p>
									<span><strong id="price_tag">210</strong> OMR</span>
									<button style="background-color: #fb9b02;
									border-radius: 50px;" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp ADD TO CART</button> 
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-md-2">
						<div class="thumbnail" style="height: 340px;">
							<a href="<?php echo baseURL() ?>specific_product.php">
								<img style="width: 200px;"  src="img/phone/14.jpg" alt="...">
							</a>
							<div class="caption">
								<strong style="font-size: large;">Galaxy S6 Edge Plus 32GB</strong>
								<p>
									<span><strong id="price_tag">240</strong> OMR</span>
									<button style="background-color: #fb9b02;
									border-radius: 50px;" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp ADD TO CART</button> 
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-md-2">
						<div class="thumbnail" style="height: 340px;">
							<a href="<?php echo baseURL() ?>specific_product.php">
								<img style="width: 200px;font-size: large;" src="img/phone/15.jpg" alt="...">
							</a>
							<div class="caption">
								<strong style="font-size: large;">Lenovo Vibe K5 Plus 16GB 4G LTE</strong>
								<p>
									<span><strong id="price_tag">65</strong> OMR</span>
									<button style="background-color: #fb9b02;
									border-radius: 50px;" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp ADD TO CART</button> 
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-md-2">
						<div class="thumbnail" style="height: 340px;">
							<a href="<?php echo baseURL() ?>specific_product.php">
								<img style="width: 200px;" src="img/phone/16.jpg" alt="...">
							</a>
							<div class="caption">
								<strong style="font-size: large;">LG G5 H860N 32GB Dual Sim - Titan Black</strong>
								<p>
									<span><strong id="price_tag">155</strong> OMR</span>
									<button style="background-color: #fb9b02;
									border-radius: 50px;" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp ADD TO CART</button> 
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- column 5 -->
			<div class="col-md-2">
				<div class="row">
					<div class="col-sm-6 col-md-2">
						<div class="thumbnail" style="height: 340px;">
							<a href="<?php echo baseURL() ?>specific_product.php">
								<img style="width: 200px;" src="img/phone/17.jpg" alt="...">
							</a>
							<div class="caption">
								<strong style="font-size: large;">Vertu Signature Touch</strong>
								<p>
									<span><strong id="price_tag">3400</strong> OMR</span>
									<button style="background-color: #fb9b02;
									border-radius: 50px;" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp ADD TO CART</button> 
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-md-2">
						<div class="thumbnail" style="height: 340px;">
							<img style="width: 200px;"  src="img/phone/18.jpg" alt="...">
							<div class="caption">
								<strong style="font-size: large;">Galaxy S6 Edge Plus 32GB Note 7 64GB</strong>
								<p>
									<span><strong id="price_tag">280</strong> OMR</span>
									<a style="background-color: #fb9b02;
									border-radius: 50px;" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp ADD TO CART</a> 
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-md-2">
						<div class="thumbnail" style="height: 340px;">
							<img  style="width: 200px;"  src="img/phone/19.jpg" alt="...">
							<div class="caption">
								<strong style="font-size: large;">
									Oppo F1 Plus 64GB LTE
								</strong>
								<p>
									<span><strong id="price_tag">190</strong> OMR</span>
									<button style="background-color: #fb9b02;
									border-radius: 50px;" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp ADD TO CART</button> 
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-md-2">

						<div class="thumbnail" style="height: 340px;">
							<img style="width: 200px;" src="img/phone/20.jpg" alt="...">
							<div class="caption">
								<strong style="font-size: large;">Samsung Galaxy Note 7 64GB</strong>
								<p>
									<span><strong id="price_tag">280</strong> OMR</span>
									<button href="#" style="background-color: #fb9b02;
									border-radius: 50px;" class="btn btn-primary btn-sm" role="button"><i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp ADD TO CART</button> 
								</p>
							</div>
						</div>
					</div>
				</div>

				<nav aria-label="Page navigation" style="float:right">
					<ul class="pagination">
						<li>
							<a href="#" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li>
							<a href="#" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<div id="" style="margin-top: 820px">
			<a id="help_btn" href="#"  data-toggle="modal" data-target="#helpModal">
				<img id="help_img" src="img/help_btn_before.png" alt="" style="    position: fixed;width: 100px;">
			</a>
		</div>
	</div>

	<!-- Modal for help -->
	<div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="helpLabel" style="margin-top: 400px;">
		<div class="modal-dialog" role="document" style="">
			<div class="modal-content" style="background-color: rgb(230, 227,227);height:220px;border:3px solid black;border-radius:20px">
				<div class="modal-header" style="border-bottom:none">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 style="text-align:center">Unparalled Support</h4>
				</div>
				<div class="modal-body">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-4" style="text-align: -webkit-center;">
								<img id="call_img" src="img/help_phone_before.png" alt="" style="width: 60px;"><br>
								<h4>CALL</h4>
							</div>
							<div class="col-md-4" style="text-align: -webkit-center;">
								<img id="message_icon_img" src="img/message_icon_before.png" alt="" style="width: 60px;">
								<h4>LIVE CHAT</h4>
							</div>
							<div class="col-md-4" style="    text-align: -webkit-center;">
								<img id="message_circle_img" src="img/message_circle_before.png" alt="" style="width: 60px;">
								<h4>E-MAIL</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- footer -->
	<?php include 'footer.php' ?>
</body>

<script>
	$(document).ready(function(){
		$(".btn-primary").click(function(){
			window.location.href = "<?php echo baseURL()?>add_cart.php";
		});

		//for onscroll SM fix
		$(window).scroll(function (event) {
			var scroll = $(window).scrollTop();
			if(scroll >= 500){
				$("#social_bar").css({
					"position":"fixed",
					"bottom": "-0px"
				});
			}else{
				$("#social_bar").css({
					"position":"",
					"marginTop": "0px"
				});
			}
		});
	});
</script>