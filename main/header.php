<?php
define("SHARE_URL","http://purpleartsmedia.com/staging/purple_dolcevita_home/");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>DolceVita</title>
        <base href="http://127.0.0.1/git/purple_dolcevita_home/">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel='stylesheet' href='css/awesom_font.css'>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/media.css">
        <link rel="stylesheet" href="css/homeblog.css">
        <link rel="stylesheet" href="css/contact-us.css">

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bxslider/jquery.bxslider.js"></script>
        <link rel="stylesheet" href="js/bxslider/jquery.bxslider.css"> 

        <script src="js/bxslider/jquery.fitvids.js"></script>
        <script>
            $(document).ready(function () {
                $(".dropdown").hover(
                        function () {
                            $(this).addClass("open");
                            //$(".dropdown-toggle" ).attr( "aria-expanded", "true" );
                        }, function () {
                    $(this).removeClass("open");
                }
                );

                // $(function () {
//                    $('.sub-nav ul li').on('click', function () {
//
//                        /*$( this ).parent().find('.sub-nav ul li').removeClass( 'activeNav' );
//                         $( this ).addClass('activeNav');*/
//                    });
//                });
                //SLIDER FOR MEDIA

				$('.bxslider').bxSlider({
				auto: true,
				minSlides: 3,
				maxSlides: 3,
				slideWidth: 320,
				slideMargin: 35,
				});
				
				$('#HotPics_slider').bxSlider({
				auto: false,
				minSlides: 2,
				maxSlides: 2,
				slideWidth: 475,
				slideMargin: 50,
				});
				$('#HotPics_Bottom_slider').bxSlider({
				auto: true,
				minSlides: 3,
				maxSlides: 3,
				slideWidth: 320,
				slideMargin: 35,
				});
				
				// new arival slider
				$('#NewArival_slider').bxSlider({
				auto: false,
				minSlides: 1,
				maxSlides: 1,
				slideWidth: 900,
				});
				
				// vieo in bx slider of home page 
				//$('.bxslider-video').bxSlider({
                $('.bxslider').bxSlider({
                    auto: true,
                    minSlides: 3,
                    maxSlides: 3,
                    slideWidth: 320,
                    slideMargin: 35,
                });

                $('.xyz').bxSlider({
                    slideWidth: 1005,
                    pager: false
                });
                $('.you_may_also_like').bxSlider({
                    minSlides: 3,
                    maxSlides: 3,
                    slideWidth: 320,
                    slideMargin: 35,
                    pager: false
                });


            });
        </script>
    </head>
    <body>
        <div class="row LOGO_wrap">
            <div class="col-xs-12 col-md-4 col-md-offset-4 ">

                <a href="http://127.0.0.1/git/purple_dolcevita_home/"><img class="col-xs-12"  id="logo" src="images/logo.png"></a>

            </div>
        </div>
        <div class="row-fluid">
            <!-- Navbar starts... -->
            <nav class="navbar">
                <div class="margin0auto ">
                    <div class="navbar-header nav_hearder">
                        <button type="button" id="collapsed_button" class="pull-right navbar-toggle" data-target="#navbar_items" data-toggle="collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse mgb0px container" id="navbar_items"> 

                        <div class="container">
                            <ul class="nav navbar-nav navbar_items">
                                <li id="DROP" class="dropdown">
                                    <a href="about-us.php" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">ABOUT US<span class="caret-equal"><img src="images/Dropdown.png" > </span></a>

                                    <ul class="dropdown-menu">
                                        <li><a href="about-us.php">DOLCEVITA HOME</a></li>
                                        <li role="separator" class="divider divider-custum"></li>
                                        <li><a href="about_the_diamond_group.php">THE DIAMOND GROUP</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="luxuryfurniturebeds.php">LUXURY FURNITURE</a>
                                </li>

                                <li>
                                    <a href="luxury_sleep_system_plush_soft.php">LUXURY SLEEP SYSTEM</a>
                                </li>
                                <li class="dropdown">
                                    <a href="media.php"  role="button" aria-haspopup="true" aria-expanded="false">MEDIA<span class="caret-equal"><img src="images/Dropdown.png" > </span></a>

                                    <ul class="dropdown-menu">
                                        <li><a href="home-blog.php">HOME BLOG</a></li>
                                        <li role="separator" class="divider divider-custum"></li>
                                        <li><a href="hot-pics.php">HOT PICKS</a></li>
                                        <li role="separator" class="divider divider-custum"></li>
                                        <li><a href="new-arivals.php">NEW ARIVALS</a></li>
                                        <li role="separator" class="divider divider-custum"></li>
                                        <li><a href="connecting-to-dreams.php">	CONNECTING TO DREAMS </a></li>
                                        <li role="separator" class="divider divider-custum"></li>
                                        <li><a href="melanuDesign.php">	MELANU & DESIGN </a></li>
                                        <li role="separator" class="divider divider-custum"></li>
                                        <li><a href="newyorkchic.php">	NEW YORK CHIC </a></li>
                                        <li role="separator" class="divider divider-custum"></li>
                                        <li><a href="#">ARTICLES</a></li>
                                       
                                    </ul>
                                </li>
                                <li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">STORE LOCATOR<span class="caret-equal"><img src="images/Dropdown.png" > </span></a> 
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="store-locator.php">
                                                Lahore
                                            </a>
                                        </li>
                                        <li>
                                            <a href="store-locator-karachi.php">
                                                Karachi
                                            </a>
                                        </li>

                                        <li>

                                            <a href="store-locator-isb.php">
                                                Islamabad
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">ONLINE BOUTIQUE</a>
                                </li>
                                <li id="DROP" class="dropdown">
                                    <a href="contact_us.php" role="button" aria-haspopup="true" aria-expanded="false">CONTACT US<span class="caret-equal"><img src="images/Dropdown.png" > </span></a>

                                    <ul class="dropdown-menu">
                                        <li><a href="contact_us.php">GENERAL INQUIRY</a></li>
                                        <li role="separator" class="divider divider-custum"></li>
                                        <li><a href="contact_us_privilegiato.php">PRIVILEGIATO</a></li>
                                        <li role="separator" class="divider divider-custum"></li>
                                        <li><a href="contact_us_careers.php">CAREERS</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>