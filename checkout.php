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
			<div class="col-md-12">
				<div class="col-md-12" style="border-bottom: 1px solid #23a7f1;background-color: rgba(230, 227, 227, 0.48);padding-bottom: 10px">	
					<span style="color: #2196F3;float: left;font-size: x-large;">Checkout</span><br>
				</div>

				<div class="col-md-4" style="background-color: rgba(230, 227, 227, 0.48);    padding-top: 10px;height:800px;border-right: 1px solid #23a7f1;">
					<button class="btn btn-primary" style="background-color: #2196F3 ;border-radius:100px"> 1 </button> &nbsp
					<span style="color: #2196F3;font-size: x-large;">Billing</span>

					<div class="col-md-12">
						<div class="col-md-6">
							<div class="form-group">
								<label for="inputdefault">First Name</label><span style="color:red"> * </span>
								<input class="form-control" id="inputdefault" type="text" style=" background-color: rgba(35, 167, 241, 0.2);">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="inputdefault">Last Name</label><span style="color:red"> * </span>
								<input class="form-control" id="inputdefault" type="text" style=" background-color: rgba(35, 167, 241, 0.2);">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="inputdefault">Email Address</label><span style="color:red"> * </span>
								<input class="form-control" id="inputdefault" type="text" style=" background-color: rgba(35, 167, 241, 0.2);">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="inputdefault">Phone</label><span style="color:red"> * </span>
								<input class="form-control" id="inputdefault" type="text" style=" background-color: rgba(35, 167, 241, 0.2);">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="inputdefault">Address</label><span style="color:red"> * </span>
								<input class="form-control" id="inputdefault" type="text" style=" background-color: rgba(35, 167, 241, 0.2);"><br>
								<input class="form-control" id="inputdefault" type="text" style=" background-color: rgba(35, 167, 241, 0.2);"><br>
								<input class="form-control" id="inputdefault" type="text" style=" background-color: rgba(35, 167, 241, 0.2);"><br>
							</div>
						</div>
						<div class="col-md-offset-5 col-lg-offset-6 col-md-7 col-lg-6">
							<label>Please Pin Address</label><span style="color:red"> * </span> &nbsp
							<a data-toggle="modal" data-target="#mapModal">
								<i id="map_marker" style="cursor: pointer;font-size: 25px;" class="fa fa-map-marker" aria-hidden="true"></i>
							</a>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="inputdefault">City</label><span style="color:red"> * </span>
								<input class="form-control" id="inputdefault" type="text" style=" background-color: rgba(35, 167, 241, 0.2);">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="inputdefault">Town</label><span style="color:red"> * </span>
								<input class="form-control" id="inputdefault" type="text" style=" background-color: rgba(35, 167, 241, 0.2);">
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<label for="inputdefault">Country</label><span style="color:red"> * </span>
								<input class="form-control" id="inputdefault" type="text" style=" background-color: rgba(35, 167, 241, 0.2);">
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<div class="radio">
									<label><input type="radio" name="optradio">Ship To The Same Address</label>
								</div>	
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<div class="radio">
									<label><input type="radio" name="optradio">Ship To A Different Address</label>
								</div>	
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4" style="background-color: rgba(230, 227, 227, 0.48);padding-top: 10px;height:800px;border-right: 1px solid #23a7f1;">
					<button class="btn btn-primary" style="background-color: #2196F3 ;border-radius:100px"> 2 </button> &nbsp
					<span style="color: #2196F3;font-size: x-large;">Delivery Option</span>
					<br>
					<div class="col-md-12">
						<div class="form-group">
							<div class="radio">
								<label><input type="radio" name="optradio2">Regular (3-5 Working Day)</label><span style="float:right">FREE</span>
							</div>	
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<div class="radio">
								<label><input type="radio" name="optradio2">Express (1 Working Day)</label><span style="float:right">OR</span>
							</div>	
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<a href="#">See More Details On Delivery</a>
						</div>
						<br>
						<br>
					</div>

					<button class="btn btn-primary" style="background-color: #2196F3 ;border-radius:100px"> 3 </button> &nbsp
					<span style="color: #2196F3;font-size: x-large;">Payment Method</span>
					<br>
					<p>We Accept All Major Cards & Paypal</p>
					<br>
					<div class="col-md-12">
						<div class="form-group">
							<div class="radio">
								<label><input type="radio" name="optradio3">Credit Card</label>
							</div>	
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<div class="radio">
								<label><input type="radio" name="optradio3">Debit Card</label>
							</div>	
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<div class="radio">
								<label><input type="radio" name="optradio3">Paypal</label>
							</div>	
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<div class="radio">
								<label><input type="radio" name="optradio3">Cash On Delivery</label>
							</div>	
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<div class="radio">
								<label><input type="radio" name="optradio3">Others</label>
							</div>	
						</div>
					</div>
				</div>

				<div class="col-md-4" style="background-color: rgba(230, 227, 227, 0.48);padding-top: 10px;height:800px">
					<button class="btn btn-primary" style="background-color: #2196F3 ;border-radius:100px"> 4 </button> &nbsp
					<span style="color: #2196F3;font-size: x-large;">Review Order</span>
					<br><br>
					<div class="col-md-12" style="border-bottom: 1px solid #23a7f1">
						<div class="row" style="margin-top: 10px;">
							<div class="col-md-3">
								<a href="#" class="thumbnail" style="margin-bottom: 0px;">
									<img src="img/product/a2.jpg" alt="...">
								</a>
							</div>
							<div class="col-md-9">
								<span style="font-size: 15px;">Apple iPhone 6 64GB Smartphone<span><br>
									<span style="font-size: 15px;"> 1</span>				<span style="float:right"> 180 OMR</span><br>
								</div>
							</div>
							<div class="row" style="margin-top: 10px">
								<div class="col-md-3">

								</div>
								<div class="col-md-9">

								</div>
							</div>
							<div class="row" style="margin-top: 10px;">
								<div class="col-md-3">
									
								</div>
								<div class="col-md-9">
									
								</div>
							</div>
							<br><br>
						</div>

						<div class="col-md-12" style="border-bottom: 1px solid #23a7f1;    margin-bottom: 10px;">
							<div class="row">
								<div class="col-md-offset-3 col-md-3">
									<strong>Subtotal</strong>
									<br>
									<strong>Shipping</strong>
								</div>
								<div class="col-md-offset-3 col-md-3">
									<strong><?php  echo 180 ?> OMR </strong>
									<br>
									<strong style="color:green">FREE</strong>
								</div>
							</div>
						</div>
						<div class="col-md-12" style="    margin-bottom: 10px;">
							<div class="row">
								<div class="col-md-offset-3 col-md-3">
									<strong>Grand Total</strong>
								</div>
								<div class="col-md-offset-3 col-md-3">
									<strong><?php  echo 180 ?> OMR </strong>
								</div>
							</div>
						</div>
						<div  data-toggle="modal" data-target="#finalModal" class="col-md-12" style="text-align: -webkit-center;margin-top: 10px;background-color:#f0ad4e;font-size: large;cursor: pointer; ">
							<span class="label label-warning">
								<span>PLACE ORDER</span>
							</span>
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
				<span style="float:right;color:#8c0202;"><?php echo $_SESSION['cart'] * 180 ?> OMR</span>
			</div>
			<div  data-toggle="modal" data-target="#helpModal" class="col-md-12" style="text-align: -webkit-center;margin-top: 10px;background-color:#f0ad4e;font-size: large;cursor: pointer; ">
				<span class="label label-warning">
					<span>PLACE ORDER</span>
				</span>

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
</div>


<!-- Modal for help -->
<div class="modal fade" id="finalModal" tabindex="-1" role="dialog" aria-labelledby="finalLabel" style="margin-top: 400px;">
	<div class="modal-dialog" role="document" style="">
		<div class="modal-content" style="background-color: rgb(230, 227,227);height:250px;border:3px solid black;border-radius:20px">
			<div class="modal-header" style="border-bottom:none">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h2 style="text-align:center;color: #2eaaf0">THANK YOU FOR SHOPPING WITH KALIQ</h2>
			</div>
			<div class="modal-body">
				<div onclick="continue_shopping()" class="col-md-12" style="text-align: -webkit-center;margin-top: 10px;background-color:#f0ad4e;font-size: large;cursor: pointer;    padding-top: 5px;
				padding-bottom: 5px; ">
				<span class="label label-warning">
					<span>CONTINUE SHOPPING</span>
				</span>
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

<!-- Map Modal -->
<div id="mapModal" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Pin Address</h4>
			</div>
			<div class="modal-body">
				<img src="img/map.jpg" alt="Map Image Here" style="    width: 100%;">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>

</div>
<?php include "footer.php" ?>

</body>
</html>

<script type="text/javascript">
	
	function continue_shopping(){
		window.location.href = "<?php echo baseURL() ?>";
	}

</script>
