<div style="background-color: white;" id="top-bar" class="navbar-fixed-top">        
    <!-- header section -->
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="container-fluid">
            <div class="col-md-1 col-lg-1" id="left_icon">
                <br>
                <div id="kaliq_logo_box">
                    <a href="<?php echo baseURL() ?>index.php">
                        <img src="icons/kaliq_logo.png" id="kaliq_logo">
                    </a>
                </div>
            </div>
            <div class="col-md-10 col-lg-10" id="nav_parent">
                <ul class="nav nav-pills">
                    <li role="" id="hotline_li" class="top-pills">
                        <a href="#" id="hotline_pill">
                            <span id="hotline">24X7</span> HOTLINE - <span id="hotline">9912381923</span>
                        </a>
                        <img id="hotline_thumb" src="img/hotline_thumb.jpg" alt="" style="display:none" />
                    </li>
                    <li id="delivery_li" role="" class="top-pills">
                        <a href="#" id="delivery_pill">
                            NEXT DAY DELIVERY
                        </a>
                        <img id="delivery_thumb" src="img/delivery_thumb.jpg" alt="" style="display:none" />
                    </li>
                    <li id="return_li" role="" class="top-pills" style="">
                        <a href="#" id="return_pill">
                            EASY RETURNS
                        </a>
                        <img id="return_thumb" src="img/return_thumb.jpg" alt="" style="display:none" />
                    </li>
                    <li id="cash_li" role="" class="top-pills">
                        <a href="#" id="cash_pill">
                            CASH ON DELIVERY
                        </a>
                        <img id="cash_thumb" src="img/cash_thumb.jpg" alt="" style="display:none"/>
                    </li>
                    <li id="track_li" role="" class="top-pills">
                        <a href="#" id="track_pill">
                            TRACK ORDER
                        </a>
                        <img id="track_thumb" src="img/track_thumb.jpg" alt="" style="display:none" />
                    </li>
                    <li id="support_li" role="" class="top-pills" style="">
                        <a href="#" id="support_pill">
                            HELP
                        </a>
                        <img id="support_thumb" src="img/support_thumb.jpg" alt="" style="display:none" />
                    </li>
                    <li id="cart_pill">
                        <a id="cart_counter" href="<?php baseURL() ?>shopping_cart.php">
                            <i id="cart" style="font-size: 19px;" class="fa fa-shopping-cart" aria-hidden="true"></i> 
                            <span id="cart_no" class="label label-warning" style="font-size: 12px;border-radius: 100px;"><?php echo $_SESSION['cart'] ?></span>
                        </a>
                    </li>
                </ul>
                <div class="row" style="position: fixed;z-index: 3;">
                    <div class="col-lg-6">

                        <form id="search_box" class="input-group" action="<?php echo baseURL() ?>search_result.php" method="GET">
                            <input type="text" class="" id="search_bar" placeholder="         Search Products, Brands & Much More">
                            <span class="input-group-btn" style="z-index: 0;">
                                <!-- <!-- <a href="<?php echo baseURL() ?>search_result.php"> --> -->
                                <button class="btn btn-default" type="submit" id="search_btn">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true">
                                    </span>
                                </button>
                            </span>
                        </form>

                        <div id="search_result" style="display:none">
                            <ul style="list-style-type:none">
                                <li>
                                    <span class="search_text"></span> in <span style="color:rgb(255, 157, 0);">All Departments</span>
                                </li>
                                <li>
                                    <span class="search_text"></span> in <span style="color:rgb(255, 157, 0);">Electronics</span>
                                </li>
                                <li>
                                    <span class="search_text"></span> in <span style="color:rgb(255, 157, 0);">Toys and Games </span>
                                </li>

                                <li>
                                    <span class="search_text"></span> in <span style="color:rgb(255, 157, 0);">Accessories </span>
                                </li>
                                <li>
                                    <span class="search_text"></span> in <span style="color:rgb(255, 157, 0);"> New Deal </span>
                                </li>
                                <hr>
                                <li>
                                   <strong>99 results found for</strong> <span class="search_text"></span>
                               </li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-md-1 col-lg-1" id="right_icon">
            <br>
            <div>
                <a href="#" data-toggle="modal" data-target="#signInModal" onclick="start_modal()">
                    <img id="user_icon" alt="">
                </a>
            </div>
        </div>
    </div>
</div>
<!-- navbar section -->
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="margin-bottom: -40px;">
    <div class="col-md-1">
    </div>
    <div class="col-md-10">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav" id="option_panel">
                        <li id="appliance" class="dropdown nav_pill">
                            <a href="#" id="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Appliances</a>
                            <ul class="dropdown-menu" id="appliance_menu">
                                <li><a href="#">Kitchen Small Appliances </a></li>
                                <li><a href="#">Appliance Warranties </a></li>
                                <li><a href="#">Mixer Parts & Accessories </a></li>
                                <li><a href="#">Rice Cookers </a></li>
                                <li><a href="#">Iced Tea Machines </a></li>
                                <li><a href="#">Mini Donut Makers </a></li>
                                <li><a href="#">Refrigerators </a></li>
                                <li><a href="#">Air Purifiers </a></li>
                                <li><a href="#">Compact Refrigerators  </a></li>
                                <li><a href="#">Air Purifiers </a></li>
                                <li><a href="#">Cooktops </a></li>
                                <li><a href="#">Freezers  </a></li>
                                <li><a href="#">Ice Makers  </a></li>
                                <li><a href="#">Irons & Steamers  </a></li>
                                <li><a href="#">Ranges  </a></li>
                                <li><a href="#">Space Heaters  </a></li>
                                <li><a href="#">Wall Ovens  </a></li>
                                <li><a href="#">And more.. <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Sleep Wear</a></li>
                                        <li><a href="#">Sandals</a></li>
                                        <li><a href="#">Loafers</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li id="kids" class="dropdown nav_pill">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Kids </a>
                            <ul class="dropdown-menu" id="kids_menu">
                                <li><a href="#">Baby & Toddler Toys </a></li>
                                <li><a href="#">Basic & Life Skills Toys </a></li>
                                <li><a href="#">Baby Musical Toys </a></li>
                                <li><a href="#">Grown-Up Toys </a></li>
                                <li><a href="#">Games </a></li>
                                <li><a href="#">Dress Up & Pretend Play </a></li>
                                <li><a href="#">Sports & Outdoor Play </a></li>
                                <li><a href="#">Novelty & Gag Toys </a></li>
                                <li><a href="#">Action Figures & Statues  </a></li>
                                <li><a href="#">NKids' Furniture, Décor & Storage s </a></li>
                                <li><a href="#">Puzzles  </a></li>
                                <li><a href="#">Party Supplies </a></li>

                                <li><a href="#">And more.. <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Sleep Wear</a></li>
                                        <li><a href="#">Sandals</a></li>
                                        <li><a href="#">Loafers</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown nav_pill" id="books">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Books </a>
                            <ul class="dropdown-menu" id="books_menu">
                                <li><a href="#">Military History </a></li>
                                <li><a href="#">Historical </a></li>
                                <li><a href="#">United States History </a></li>
                                <li><a href="#">U.S. State & Local History </a></li>
                                <li><a href="#">Self-Help </a></li>
                                <li><a href="#">Business & Money </a></li>
                                <li><a href="#">Calendars</a></li>
                                <li><a href="#">Computers & Technology </a></li>
                                <li><a href="#">Health, Fitness & Dieting  </a></li>
                                <li><a href="#">Education & Teaching  </a></li>
                                <li><a href="#">History </a></li>
                                <li><a href="#">Humor& Entertainment  </a></li>
                                <li><a href="#">Law  </a></li>
                                <li><a href="#">Literature & Fiction </a></li>
                                <li><a href="#">Medical Books </a></li>
                                <li><a href="#">Mystery, Thriller & Suspense </a></li>
                                <li><a href="#">Parenting & Relationships </a></li>
                                <li><a href="#">Religion & Spirituality </a></li>
                                <li><a href="#">Test Preparation </a></li>
                                <li><a href="#">Travel </a></li>
                                <li><a href="#">Test Preparation</a></li>

                                <li><a href="#">And more.. <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Gay & Lesbian </a></li>
                                        <li><a href="#">Health, Fitness & Dieting </a></li>
                                        <li><a href="#">History </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown nav_pill" id="clothing">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Clothing </a>
                            <ul class="dropdown-menu" id="clothing_menu">

                                <li><a href="#">Men</a></li>
                                <li><a href="#">Uniforms, Work & Safety</a></li>
                                <li><a href="#">Women</a></li>
                                <li><a href="#">Boys</a></li>
                                <li><a href="#">Baby</a></li>
                                <li><a href="#">Girls</a></li>
                                <li><a href="#">Novelty & More</a></li>
                                <li><a href="#">Traditional & Cultural Wear</a></li>
                                <li><a href="#">And more.. <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Sleep Wear</a></li>
                                        <li><a href="#">Sandals</a></li>
                                        <li><a href="#">Loafers</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown nav_pill" id="computers">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Computers </a>
                            <ul class="dropdown-menu" id="computers_menu">

                                <li><a href="#">Home Audio Speakers </a></li>
                                <li><a href="#">Headphones </a></li>
                                <li><a href="#">MP3 & MP4 Player Accessories </a></li>
                                <li><a href="#">Portable Bluetooth Speakers </a></li>
                                <li><a href="#">Earbud & In-Ear Headphones </a></li>
                                <li><a href="#">Accessories & Supplies  </a></li>
                                <li><a href="#">Home Audio </a></li>
                                <li><a href="#">Camera & Photo </a></li>
                                <li><a href="#">GPS & Navigation  </a></li>
                                <li><a href="#">Office Electronics Products  </a></li>
                                <li><a href="#">Video Projectors  </a></li>
                                <li><a href="#">eBook Readers & Accessories  </a></li>
                                <li><a href="#">And more.. <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Sleep Wear</a></li>
                                        <li><a href="#">Sandals</a></li>
                                        <li><a href="#">Loafers</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown nav_pill" id="electronics">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Electronics </a>
                            <ul class="dropdown-menu" id="electronics_menu">

                                <li><a href="#">Home Audio Speakers </a></li>
                                <li><a href="#">Headphones </a></li>
                                <li><a href="#">MP3 & MP4 Player Accessories </a></li>
                                <li><a href="#">Portable Bluetooth Speakers </a></li>
                                <li><a href="#">Earbud & In-Ear Headphones </a></li>
                                <li><a href="#">Accessories & Supplies  </a></li>
                                <li><a href="#">Home Audio </a></li>
                                <li><a href="#">Camera & Photo </a></li>

                                <li><a href="#">GPS & Navigation  </a></li>
                                <li><a href="#">Office Electronics Products  </a></li>
                                <li><a href="#">Video Projectors  </a></li>
                                <li><a href="#">eBook Readers & Accessories  </a></li>

                                <li><a href="#">And more.. <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Sleep Wear</a></li>
                                        <li><a href="#">Sandals</a></li>
                                        <li><a href="#">Loafers</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown nav_pill" id="furniture">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Furniture </a>
                            <ul class="dropdown-menu" id="furniture_menu">

                                <li><a href="#">Sofas & Couches </a></li>
                                <li><a href="#">Living Room Furniture Sets </a></li>
                                <li><a href="#">Living Room Furniture </a></li>
                                <li><a href="#">Sofa Slipcovers  </a></li>
                                <li><a href="#">Futons </a></li>
                                <li><a href="#">Furniture </a></li>
                                <li><a href="#">Home Décor </a></li>
                                <li><a href="#">Heating, Cooling & Air Quality </a></li>

                                <li><a href="#">Wall Art  </a></li>
                                <li><a href="#">Seasonal Décor  </a></li>
                                <li><a href="#">Vacuums & Floor Care  </a></li>
                                <li><a href="#">Storage & Organization  </a></li>

                                <li><a href="#">And more.. <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Sleep Wear</a></li>
                                        <li><a href="#">Sandals</a></li>
                                        <li><a href="#">Loafers</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown nav_pill" id="health_and_beauty">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Health & Beauty </a>
                            <ul class="dropdown-menu" id="health_and_beauty_menu">

                                <li><a href="#">Soaps </a></li>
                                <li><a href="#">Hand Soaps </a></li>
                                <li><a href="#">Body Washes </a></li>
                                <li><a href="#">Bath Products </a></li>
                                <li><a href="#">Facial Cleansing Products </a></li>
                                <li><a href="#">Bars  </a></li>
                                <li><a href="#">Makeup </a></li>
                                <li><a href="#">Trousers</a></li>

                                <li><a href="#">Skin Care </a></li>
                                <li><a href="#">Hair Care </a></li>
                                <li><a href="#">Fragrance </a></li>
                                <li><a href="#">Standard</a></li>
                                <li><a href="#">Tools & Accessories </a></li>
                                <li><a href="#">Shave & Hair Removal </a></li>
                                <li><a href="#">Personal Care </a></li>
                                <li><a href="#">Health Care </a></li>

                                <li><a href="#">And more.. <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Sleep Wear</a></li>
                                        <li><a href="#">Sandals</a></li>
                                        <li><a href="#">Loafers</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown nav_pill" id="home">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Home </a>
                            <ul class="dropdown-menu" id="home_menu">

                                <li><a href="#">Reusable Grocery Bags </a></li>
                                <li><a href="#">Party Favors </a></li>
                                <li><a href="#">Event & Party Supplies </a></li>
                                <li><a href="#">Laundry Bags  </a></li>
                                <li><a href="#">Kids' Home Store </a></li>
                                <li><a href="#">Kitchen & Dining </a></li>
                                <li><a href="#">Bedding </a></li>
                                <li><a href="#">Bath </a></li>


                                <li><a href="#">Wall Art   </a></li>
                                <li><a href="#">Seasonal Décor </a></li>
                                <li><a href="#">Heating, Cooling & Air Quality </a></li>
                                <li><a href="#">Storage & Organization  </a></li>
                                <li><a href="#">Cleaning Supplies  </a></li>

                                <li><a href="#">And more.. <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Sleep Wear</a></li>
                                        <li><a href="#">Sandals</a></li>
                                        <li><a href="#">Loafers</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown nav_pill" id="fashion">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Fashion </a>
                            <ul class="dropdown-menu" id="fashion_menu">

                                <li><a href="#">Women</a></li>
                                <li><a href="#">Novelty & More</a></li>
                                <li><a href="#">Men</a></li>
                                <li><a href="#">Shoe, Jewelry& Watch Accessories</a></li>
                                <li><a href="#">Luggage & Travel Gear</a></li>
                                <li><a href="#">Girls</a></li>
                                <li><a href="#">Boys</a></li>
                                <li><a href="#">Uniforms, Work & Safety</a></li>

                                <li><a href="#">Baby</a></li>
                                <li><a href="#">Traditional & Cultural Wear</a></li>
                                <li><a href="#">Jewelry</a></li>
                                <li><a href="#">Costumes & Accessories</a></li>
                                <li><a href="#">And more.. <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Sleep Wear</a></li>
                                        <li><a href="#">Sandals</a></li>
                                        <li><a href="#">Loafers</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown nav_pill" id="movies_and_music">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Movies & Music </a>
                            <ul class="dropdown-menu" id="movies_and_music_menu">

                                <li><a href="#">Action & Adventure </a></li>
                                <li><a href="#">Anime </a></li>
                                <li><a href="#">Bollywood </a></li>
                                <li><a href="#">Comedy </a></li>
                                <li><a href="#">Documentary </a></li>
                                <li><a href="#">Educational </a></li>
                                <li><a href="#">Exercise & Fitness (</a></li>
                                <li><a href="#">Fantasy </a></li>

                                <li><a href="#">Foreign Films  </a></li>
                                <li><a href="#">LGBT  </a></li>
                                <li><a href="#">Military & War  </a></li>
                                <li><a href="#">Musicals  </a></li>
                                <li><a href="#">Reality TV  </a></li>
                                <li><a href="#">Mystery & Thrillers  </a></li>
                                <li><a href="#">Exercise & Fitness (</a></li>
                                <li><a href="#">Romance  </a></li>
                                <li><a href="#">And more.. <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Sleep Wear</a></li>
                                        <li><a href="#">Sandals</a></li>
                                        <li><a href="#">Loafers</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown nav_pill" id="office">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Office </a>
                            <ul class="dropdown-menu" id="office_menu">

                                <li><a href="#">Copy & Multipurpose Paper </a></li>
                                <li><a href="#">Laser Printer Paper </a></li>
                                <li><a href="#">Inkjet Printer Paper </a></li>
                                <li><a href="#">Cover Stock Paper </a></li>
                                <li><a href="#">Color Printer & Copier Paper </a></li>
                                <li><a href="#">Paper </a></li>
                                <li><a href="#">Computer Printer Parts & Accessories </a></li>
                                <li><a href="#">Office & School Supplies </a></li>

                                <li><a href="#">Office Electronics  </a></li>
                                <li><a href="#">Computer Printer Parts & Accessories </a></li>
                                <li><a href="#">Office Furniture & Lighting  </a></li>

                                <li><a href="#">And more.. <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Sleep Wear</a></li>
                                        <li><a href="#">Sandals</a></li>
                                        <li><a href="#">Loafers</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown nav_pill" id="toys">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Toys </a>
                            <ul class="dropdown-menu" id="toys_menu">

                                <li><a href="#">Building Sets </a></li>
                                <li><a href="#">Building Toys </a></li>
                                <li><a href="#">Grown-Up Toys </a></li>
                                <li><a href="#">Baby Musical Toys </a></li>
                                <li><a href="#">Play Vehicles </a></li>
                                <li><a href="#">Stacking Blocks </a></li>
                                <li><a href="#">Decks & Sets </a></li>
                                <li><a href="#">Kids' Electronics </a></li>

                                <li><a href="#">Hobbies  </a></li>
                                <li><a href="#">Kids' Furniture, Décor & Storage  </a></li>
                                <li><a href="#">Learning & Education  </a></li>
                                <li><a href="#">Novelty & Gag Toys  </a></li>
                                <li><a href="#">Party Supplies  </a></li>
                                <li><a href="#">Stuffed Animals & Plush Toys  </a></li>
                                <li><a href="#">Toy Remote Control & Play Vehicles  </a></li>
                                <li><a href="#">Video Games  </a></li>


                                <li><a href="#">And more.. <span class="caret"></span></a>

                                    <ul class="dropdown-menu">
                                        <li><a href="#">Sleep Wear</a></li>
                                        <li><a href="#">Sandals</a></li>
                                        <li><a href="#">Loafers</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>

    <div class="col-md-1">

    </div>
</div>
</div>

<!-- Modal for sign in / register -->
<div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="background-color: rgb(230, 227,227);height:500px;border:3px solid black;border-radius:20px">
            <div class="modal-header" style="border-bottom:none">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">WELCOME</h4>
            </div>
            <div class="modal-body">
                <div class="col-md-12" id="login_register_block">
                    <div class="col-md-6" id="join_us_block">
                        <h5 style="text-align:center;">JOIN US</h5>
                        <!-- form for registration -->
                        <div class="" style="border: 2px solid black;border-radius:30px;padding: 40px 10px 30px 10px">
                            <form class="" action="index.html" method="post">
                                <input id="inputTextField" type="email" class="form-control" name="" value="" placeholder="Email"><br>
                                <input id="inputTextField" type="password" class="form-control" name="" value="" placeholder="Password"><br>
                                <input id="inputTextField" type="password" class="form-control" name="" value="" placeholder="Password again"><br>
                            </form>
                        </div>
                        <br>
                        <button id="btn_submit" type="button" name="button" class="btn btn-default btn-block" onclick="join()">
                            <span>JOIN</span>
                        </button>
                    </div>
                    <div class="col-md-6" id="already_with_us_block">
                        <h5 style="text-align:center;">ALREADY WITH US</h5>
                        <!-- form for login -->
                        <div class="" style="border: 2px solid black;border-radius:30px;padding: 20px 10px 0px 10px">
                            <form class="" action="index.html" method="post">
                                <input style="visibility: hidden;" id="inputTextField" type="text" class="form-control" name="" value="" placeholder="Username"><br>
                                <input id="inputTextField" type="text" class="form-control" name="" value="" placeholder="Username"><br>
                                <input id="inputTextField" type="password" class="form-control" name="" value="" placeholder="Password"><br>
                                <input style="visibility: hidden;" id="inputTextField" type="text" class="form-control" name="" value="" placeholder="Username"><br>
                            </form>
                        </div>
                        <br>
                        <button id="btn_submit" type="button" name="button" class="btn btn-default btn-block">
                            <span>SIGN IN</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-offset-3 col-md-12" id="name_block" style="display:none"> 
                    <div class="col-md-6">
                        <form class="" action="index.html" method="post">
                            <h5 style="color:#23a7f1;">FIRST NAME</h5>
                            <input id="inputTextField" type="text" class="form-control" name="" value="" placeholder=""><br>
                            <h5 style="color:#23a7f1;">LAST NAME</h5>
                            <input id="inputTextField" type="text" class="form-control" name="" value="" placeholder=""><br>

                            <div class="row">
                                <div class="col-md-6">
                                    <img id="male_box" style="width: 100px;" src="img/avatar/male_before.png" onclick="male_check()" >
                                </div>
                                <div class="col-md-6">
                                    <img id="female_box" style="width: 100px;" src="img/avatar/female_before.png" onclick="female_check()">
                                </div>
                            </div>
                            <br>
                            <button id="btn_submit" type="button" name="button" class="btn btn-default btn-block" onclick="name_next()">
                                <span>NEXT</span>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-12" id="avatar_block" style="display:none"> 
                    <h5 style="text-align:center;color:#23a7f1;">PLEASE CHOOSE AN AVATAR</h5>
                    <div class="col-md-offset-2 col-md-8">
                        <div class="row" style="margin-bottom: 15px;"> 
                            <div class="col-md-4">
                                <img class="avatar" src="img/avatar/a1.jpg" style="width: 80px;border-radius: 40px;" id="a1" onclick="avatar_choose('a1')">
                            </div>
                            <div class="col-md-4">
                                <img  class="avatar" src="img/avatar/a2.jpg" style="width: 80px;border-radius: 40px;" id="a2" onclick="avatar_choose('a2')">
                            </div>
                            <div class="col-md-4">
                                <img class="avatar" src="img/avatar/a3.jpg" style="width: 80px;border-radius: 40px;" id="a3" onclick="avatar_choose('a3')">
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-md-4">
                                <img class="avatar" src="img/avatar/a4.jpg" style="width: 80px;border-radius: 40px;" id="a4" onclick="avatar_choose('a4')">
                            </div>
                            <div class="col-md-4">
                                <img class="avatar" src="img/avatar/a5.jpg" style="width: 80px;border-radius: 40px;" id="a5" onclick="avatar_choose('a5')">
                            </div>
                            <div class="col-md-4">
                                <img class="avatar" src="img/avatar/a6.jpg" style="width: 80px;border-radius: 40px;" id="a6" onclick="avatar_choose('a6')">
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-md-4">

                            </div>
                            <div class="col-md-4">
                                <img src="img/avatar/add.png" style="width: 80px;border-radius: 40px;">
                            </div>
                            <div class="col-md-4">

                            </div>
                        </div>
                    </div>

                    <br><br>

                    <div class="col-md-offset-3 col-md-6">
                        <button id="btn_submit" type="button" name="button" class="btn btn-default btn-block" onclick="avatar_next()">
                            <span>NEXT</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-12" id="address_block" style="display:none"> 
                    <h5 style="text-align:center;color:#23a7f1;">ADDRESS</h5>
                    <div class="col-md-offset-3 col-md-6">
                        <form class="" action="index.html" method="post">
                            <input id="inputTextField" type="text" class="form-control" name="" value="" placeholder=""><br>
                            <input id="inputTextField" type="text" class="form-control" name="" value="" placeholder=""><br>
                            <input id="inputTextField" type="text" class="form-control" name="" value="" placeholder=""><br>

                            <div style="text-align:center"><i id="map_marker" style="cursor: pointer;font-size: 25px;" class="fa fa-map-marker" aria-hidden="true"></i></div>
                            <small style="float: left;text-align:center;color:#23a7f1;">PIN YOUR LOCATION FOR DELIVERY ACCURACY </small>
                            <button id="btn_submit" type="button" name="button" class="btn btn-default btn-block" onclick="address_next()">
                                <span>NEXT</span>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-12" id="mobile_block" style="display:none"> 
                    <h5 style="text-align:center;color:#23a7f1;">MOBILE NUMBER</h5>
                    <div class="col-md-offset-3 col-md-6">
                        <form class="" action="index.html" method="post">
                            <input id="inputTextField" type="text" class="form-control" name="" value="" placeholder=""><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <img id="iphone" src="img/avatar/iphone.png" alt="" onclick="ios_select()">
                                </div>
                                <div class="col-md-6">
                                    <img id="android" src="img/avatar/android.png" alt="" onclick="android_select()">
                                </div>
                            </div>
                            <br>
                            <button id="btn_submit" type="button" name="button" class="btn btn-default btn-block" onclick="mobile_next()">
                                <span>NEXT</span>
                            </button>
                        </form>
                    </div>
                </div>

                <div class="col-md-12" id="map_box" style="display:none;    margin-top: -70px;">
                    <div class="modal-header">
                        <h4 class="modal-title">Pin Address</h4>
                    </div>
                    <div class="modal-body">
                        <img src="img/map.jpg" alt="Map Image Here" style="height: 350px;width: 100%;">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" onclick="map_done()">Done</button>
                    </div> 
                </div> 

                <div class="col-md-offset-3 col-md-6" id="thank_block" style="display:none;margin-top: -30px;"> 
                    <h1 style="text-align:center;color:#23a7f1;margin-top: 150px">THANK YOU</h1>
                    <br>
                    <button id="btn_submit" type="button" name="button" class="btn btn-default btn-block" data-dismiss="modal" aria-label="Close" onclick="reload()">
                        <span>DONE</span>
                    </button>
                </div>
            </div>
            <div class="modal-footer" style="border-top:none">
            </div>
        </div>
    </div>
</div>

<script>
    //for avatar selection
    function avatar_choose(id){
        $(".avatar").css('border','');
        $("#" + id).css('border','3px inset #2eaaf0');
        sessionStorage.setItem('avatar','img/avatar/' + id +".jpg");   
    }
    function reload(){
        location.reload();
    }

    $(document).ready(function(){
        var data = sessionStorage.getItem('avatar');
        $("#user_icon").attr("src",data);
    });

</script>