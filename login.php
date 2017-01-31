<?php include 'header_script.php' ?>
<?php 
$username = "kaliq";
$password = "kaliq@admin";
$status = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	// check if valid 
	if($_REQUEST['username'] == $username && $_REQUEST['password'] == $password){
		$status = 1;
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['cart'] = 0;
		
		$path = baseURL();
		echo "<script>location='".$path."'</script>";
		exit();
	}else{
		$status = 2;
	}
}
?>
<body>
	<div class="container">
		<div class="col-md-offset-3 col-md-6 col-md-offset-3">
			<form method="POST" action="">
				<h1 style="text-align: center">Please Login</h1>
				<div class="form-group">
					<label>USERNAME</label>
					<input type="text" class="form-control" name = "username" placeholder="Enter Username">
				</div>
				<div class="form-group">
					<label>PASSWORD</label>
					<input type="password" class="form-control" placeholder="Enter Pasword" name="password">
				</div>
				<?php if($status == 2): ?>
					<label class="label label-danger"> Invalid Credentials. Please Try Again !!</label>	
				<?php endif; ?>
				<button style="float:right" type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</div>
</body>
</html>
<script>
	sessionStorage.setItem('avatar', 'icons/login.jpg');
</script>