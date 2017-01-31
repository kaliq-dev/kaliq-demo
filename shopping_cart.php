<?php include 'header_script.php' ?>
<?php
session_start();
$username = "kaliq";
$password = "kaliq@admin";

if($_SESSION['username'] != $username && $_SESSION['password'] != $password){
	header('Location:'.baseURL().'login.php');
	exit();
}
?>
<body>
	<?php include 'navbar.php' ?>
	<!-- product box section -->
	<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12" id="main_section" style="margin-top: 200px;">
		<!-- left side panel -->
		<div class="col-md-3 col-xs-0 col-sm-0 col-lg-1">
			<div class="col-md-3 col-xs-0 col-sm-0 col-lg-1">
				<div id="banner_box_left" onclick="window.location.href = '<?php echo baseURL() ?>'">
					<img src="icons/social/facebook.png" alt=""><br>
					<img src="icons/social/google_plus.png" alt=""><br>
					<img src="icons/social/instagram.png" alt=""><br>
					<img src="icons/social/linkedin.png" alt=""><br>
					<img src="icons/social/pinterest.png" alt=""><br>
					<img src="icons/social/twitter.png" alt=""><br>
					<img src="icons/social/youtube.png" alt=""><br>
					<img src="icons/social/ghost.png" alt=""><br>

				</div>
			</div>
		</div>
		<!-- product boxes section -->
		<div class="col-md-6 col-xs-12 col-sm-12 col-lg-10">
			<div class="col-md-12" style="background-color: rgba(230, 227, 227, 0.48);">
				<div class="col-md-12" style="margin-bottom: 20px;margin-top: 20px;">
					<span style="color: #2196F3;float: left;font-size: x-large;">Shopping Cart</span>
					<a href="<?php echo baseURL() ?>checkout.php">
						<button class="btn btn-warning" type="button" style="margin-right: 50px;float:right">Checkout</button>
					</a>
				</div>
				<table class="table table-hover">
					<thead style="border-top: 1px solid #23a7f1">
						<tr>
							<th style="width:10%">Item</th>
							<th style="width:30%"></th>
							<th style="width:30%">Delivery</th>
							<th style="width:20%">Units</th>
							<th style="width:20%">Price</th>
						</tr>
					</thead>
					<tbody>
						<?php for($i=0;$i<$_SESSION['cart'];$i++): ?>
							<tr>
								<td style="width:10%">
									<a style="width:60px" href="#" class="thumbnail">
										<img src="img/product/a2.jpg" alt="...">
									</a>
								</td>
								<td style="width:30%">
									Apple iPhone 6 64GB Smartphone
									<br>									
									<span style="color:green">IN STOCK</span>
								</td>
								<td style="width:30%">
									Skip to Home <span style="color:green">FREE</span><br>
									Estimated Arrival:<br>
									<span style="color:green">NOV 25 - NOV 29</span>
								</td>
								<td style="width:20%">
									1
								</td>
								<td style="width:20%">
									<span style="color: #8c0202;">180 <small>OMR</small></span>
								</td>
							</tr>
						<?php endfor; ?>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<span style="color:#2196F3;font-size: x-large;">Subtotal</span>
							</td>
							<td>
								<span style="color:#8c0202;font-size: x-large;">
									<?php echo $_SESSION['cart']*147 ?> <small>OMR</small>
								</span><br>
								<a href="<?php echo baseURL() ?>checkout.php">
									<button class="btn btn-warning" type="button">Checkout</button>
								</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-md-12">
				<span style="color: #2196F3;float: left;font-size: larger;">Customers Who Brought Items in Your Cart Also Bought</span>
				<br>
				<hr>
				<div class="row" style="border-top: 1px solid #23a7f1;    border-bottom: 1px solid #23a7f1;padding-top:15px ;    padding-bottom: 15px;">
					<div class="col-xs-3 col-md-1 col-lg-1">
						<a href="#" class="thumbnail" style="margin-bottom: 0px;">
							<img src="img/phone/20.jpg" alt="...">
						</a>
						<span style="font-size: 10px;">Item 1<br>Buy 1 Get 1 Free</span>
					</div>
					<div class="col-xs-3 col-md-1 col-lg-1">
						<a href="#" class="thumbnail" style="margin-bottom: 0px;">
							<img src="img/phone/19.jpg" alt="...">
						</a>
						<span style="font-size: 10px;">Item 1<br>Buy 1 Get 1 Free</span>
					</div>
					<div class="col-xs-3 col-md-1 col-lg-1">
						<a href="#" class="thumbnail" style="margin-bottom: 0px;">
							<img src="img/phone/18.jpg" alt="...">
						</a>
						<span style="font-size: 10px;">Item 1<br>Buy 1 Get 1 Free</span>
					</div>
					<div class="col-xs-3 col-md-1 col-lg-1">
						<a href="#" class="thumbnail" style="margin-bottom: 0px;">
							<img src="img/phone/17.jpg" alt="...">
						</a>
						<span style="font-size: 10px;">Item 1<br>Buy 1 Get 1 Free</span>
					</div>
					<div class="col-xs-3 col-md-1 col-lg-1">
						<a href="#" class="thumbnail" style="margin-bottom: 0px;">
							<img src="img/phone/16.jpg" alt="...">
						</a>
						<span style="font-size: 10px;">Item 1<br>Buy 1 Get 1 Free</span>
					</div>
					<div class="col-xs-3 col-md-1 col-lg-1">
						<a href="#" class="thumbnail" style="margin-bottom: 0px;">
							<img src="img/phone/15.jpg" alt="...">
						</a>
						<span style="font-size: 10px;">Item 1<br>Buy 1 Get 1 Free</span>
					</div>
					<div class="col-xs-3 col-md-1 col-lg-1">
						<a href="#" class="thumbnail" style="margin-bottom: 0px;">
							<img src="img/phone/14.jpg" alt="...">
						</a>
						<span style="font-size: 10px;">Item 1<br>Buy 1 Get 1 Free</span>
					</div>
					<div class="col-xs-3 col-md-1 col-lg-1">
						<a href="#" class="thumbnail" style="margin-bottom: 0px;">
							<img src="img/phone/13.jpg" alt="...">
						</a>
						<span style="font-size: 10px;">Item 1<br>Buy 1 Get 1 Free</span>
					</div>
					<div class="col-xs-3 col-md-1 col-lg-1">
						<a href="#" class="thumbnail" style="margin-bottom: 0px;">
							<img src="img/phone/12.jpg" alt="...">
						</a>
						<span style="font-size: 10px;">Item 1<br>Buy 1 Get 1 Free</span>
					</div>
					<div class="col-xs-3 col-md-1 col-lg-1">
						<a href="#" class="thumbnail" style="margin-bottom: 0px;">
							<img src="img/phone/11.jpg" alt="...">
						</a>
						<span style="font-size: 10px;">Item 1<br>Buy 1 Get 1 Free</span>
					</div>
					<div class="col-xs-3 col-md-1 col-lg-1">
						<a href="#" class="thumbnail" style="margin-bottom: 0px;">
							<img src="img/phone/10.jpg" alt="...">
						</a>
						<span style="font-size: 10px;">Item 1<br>Buy 1 Get 1 Free</span>
					</div>
					<div class="col-xs-3 col-md-1 col-lg-1">
						<a href="#" class="thumbnail" style="margin-bottom: 0px;">
							<img src="img/phone/09.jpg" alt="...">
						</a>
						<span style="font-size: 10px;">Item 1<br>Buy 1 Get 1 Free</span>
					</div>
				</div>
			</div>
		</div>

		<!-- for right panel -->
		<div class="col-md-3 col-sm-0 col-xs-0 col-lg-1">
			<div id="banner_box_right">
				<div class="col-md-12" style="border:1px solid #23a7f1;">
					<span style="color: #2196F3;font-size: x-large;">Summary</span>
				</div>
				<div class="col-md-12" style="border:1px solid #23a7f1;color:#4CAF50;">
					<div class="col-md-6" style="border-radius: 100px;border: 2px solid;    margin-top: 10px;
					margin-bottom: 10px;text-align: -webkit-center;padding: 7px">
					<span style="font-size: 30px"><?php echo $_SESSION['cart'] ?></span>
					<br>
					<small>Items</small>
				</div>	
				<div class="col-md-6" style="border-radius: 100px;border: 2px solid;    margin-top: 10px;
				margin-bottom: 10px;text-align: -webkit-center;padding:7px">
				<span style="font-size: 15px;">
					<i class="fa fa-check" aria-hidden="true"></i>
					FREE
				</span>
				<small>Shipping</small>
			</div>
		</div>
		<div class="col-md-12" style="border:1px solid #23a7f1">
			<span style="color:#23a7f1;">Total</span>
			<span style="float:right;color:#8c0202;"><?php echo $_SESSION['cart'] * 147 ?> OMR</span>
		</div>
		<div id="banner_box_right_help" style="    margin-left: 70px;">
			<a href="#" data-toggle="modal" data-target="#helpModal">
				<img src="img/help_btn.png" alt="">
			</a>
		</div>	
		<div class="col-md-12" style="text-align: -webkit-center;margin-top: 10px;background-color:#f0ad4e;font-size: large;cursor: pointer; ">
			<span class="label label-warning">
				<a style="text-decoration: none;color:white" href="<?php echo baseURL() ?>checkout.php"><span>CHECKOUT</span></a>
			</button>

		</div>
		<div id="banner_box_right_help">
			<a id="help_btn" href="#"  data-toggle="modal" data-target="#helpModal">
				<img id="help_img" src="img/help_btn_before.png" alt="">
			</a>
		</div>
	</div>
</div>
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

<?php include "footer.php" ?>
</div>
</body>
</html>
