<?php
session_start();
function BaseURL(){
    $http_prefix = 'http://';
    // $base = '/kaaliq.com/';
    $base = '/localhost/kaaliq/';
    return $http_prefix.$base;
}
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = 0;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>kaaliq.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>kaliq.com</title>
    <link rel="stylesheet" href="css/font-awesome.css" title="no title">
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.simpleGallery.css">
    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/custom.css" title="no title">
    <link rel="stylesheet" href="css/media_query.css" title="no title">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <!-- Custom js -->
    <script src="js/my_script.js"></script>
    <!-- jquery 3d slider -->
    <script type="text/javascript" src="js/jR3DCarousel.js"></script>
    <!-- custom script for slider -->
    <script src="js/product_slider.js"></script>
    <!-- product lens effect -->
    <script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
    <script type="text/javascript" src="js/jquery.simpleLens.js"></script>
    <script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
</head>

