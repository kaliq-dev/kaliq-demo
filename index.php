
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
    <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12" id="main_section">
        <!-- left side panel -->
        <div class="col-md-3 col-xs-0 col-sm-0 col-lg-1">
            <div id="banner_box_left">
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
        <!-- product boxes section -->
        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-10" style="text-align: -webkit-center;">
            <?php for($i=1;$i<=10;$i++): ?>
                <div class="col-md-2 col-lg-2 col-xs-6 col-sm-6">
                    <div style="width: 250px;height: 250px;" class="jR3DCarouselGallery_<?php echo $i ?>">
                    </div>
                </div>
            <?php endfor; ?>
            <?php for($i=11;$i<=20;$i++): ?>
                <div class="col-md-2 col-lg-2 col-xs-6 col-sm-6">
                    <div style="width: 250px;height: 250px;" class="jR3DCarouselGallery_<?php echo $i ?>">
                    </div>
                </div>
            <?php endfor; ?>
            <?php for($i=21;$i<=30;$i++): ?>
                <div class="col-md-2 col-lg-2 col-xs-6 col-sm-6">
                    <div style="width: 250px;height: 250px;" class="jR3DCarouselGallery_<?php echo $i ?>">
                    </div>
                </div>
            <?php endfor; ?>
            <?php for($i=31;$i<=35;$i++): ?>
                <div class="col-md-2 col-lg-2 col-xs-6 col-sm-6">
                    <div style="width: 250px;height: 250px;" class="jR3DCarouselGallery_<?php echo $i ?>">
                    </div>
                </div>
            <?php endfor; ?>
        </div>
        <!-- for right panel -->
        <div class="col-md-3 col-sm-0 col-xs-0 col-lg-1">
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
<div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="helpLabel" >
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
</html>
