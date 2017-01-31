
<?php 
include 'header_script.php';
if(isset($_SESSION['cart'])){
	$_SESSION['cart'] = $_SESSION['cart'] + 1;
}
echo "<script>window.history.back()</script>";
?>