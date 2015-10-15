<!DOCTYPE html>
<html lang="en">
    <head>
        <title>DolceVita</title> <base href="http://127.0.0.1/dolcevita/">
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel='stylesheet prefetch' href='css/awesom_font.css'>
        <link rel="stylesheet" href="css/style.css"> <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
		$(document).ready(function() {
			$(".dropdown" ).hover(
			function() {
				$( this ).addClass("open");
				//$(".dropdown-toggle" ).attr( "aria-expanded", "true" );
				}, function() {
				$( this ).removeClass("open");
				}
			);
		});
        </script>
    </head>
    <body>
        <div class="row LOGO_wrap">
            <div class="col-xs-12 col-md-4 col-md-offset-4 ">

                <a href="#"><img  id="logo" src="images/logo.png"></a>

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
                                    <a href="index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT US<span class="caret-equal"><img src="images/Dropdown.png" > </span></a>
                                    
                                    <ul class="dropdown-menu">
                                        <li><a href="about-us.php">DOLCEVITA HOME</a></li>
                                        <li role="separator" class="divider divider-custum"></li>
                                        <li><a href="#">THE DIAMOND GROUP</a></li>
                                       </ul>
                                   </li>
                                <li>
                                    <a href="luxuryfurniturebeds.php">LUXURY FURNITURE</a>
                                </li>

                                <li>
                                    <a href="#">LUXURY SLEEP SYSTEM</a>
                                </li>
                                <li class="dropdown">
                                    <a href="index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MEDIA<span class="caret-equal"><img src="images/Dropdown.png" > </span></a>
                                    
                                    <ul class="dropdown-menu">
                                        <li><a href="#">GALLERY</a></li>
                                        <li role="separator" class="divider divider-custum"></li>
                                        <li><a href="#">ARTICLES</a></li>
                                       </ul>
                                   </li>
                                <li>
<li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">STORE LOCATOR<span class="caret-equal"><img src="images/Dropdown.png" > </span></a> 
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">
                                                Lahore
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Karachi
                                            </a>
                                        </li>

                                        <li>

                                            <a href="#">
                                                Islamabad
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">ONLINE BOUTIQUE</a>
                                </li>
                                <li>
                                    <a href="#">CONTACT US</a>
                                </li>
                            </ul>
                           
                        </div>
                    </div>
                </div>
            </nav>
        </div>