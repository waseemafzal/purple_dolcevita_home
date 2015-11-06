<?php require_once"main/header.php" ?>
<!-- -------Navbar ends -->
<!------container starts ----->
<div class="container margin0auto font_style">
    <div class="row">
        <br>
        <img id="media_header_img" class="padding0"src="images/newArivals/new_arrivals.png">
        <br><br><br>
    </div>
    <!------------------------------------ Products rows Start -------------------------------->
    <div class="row">

        <style>
            #box_slider .bx-wrapper {
                margin: 0 auto 60px;
                padding: 0;
                position: relative;
            }
            #box_slider{
                margin:10% 0 0 ;
            }
            .bx-wrapper .bx-pager {
                display: none;
            }
            .bx-wrapper {
                box-shadow: none;
            }
            .bx-wrapper #NewArival_slider li p{padding:2% 1% 0 1%;
                                               text-align:center;
            }
        </style>

        <div  class="container margin0auto">
            <div class="row">
                <!--<img class=" product_img col-xs-12 col-sm-12 padding0"src="images/Media/3-image-slider.jpg">-->
                <ul id="NewArival_slider">
                    <li>
                        <a href="#" >
                            <img class="col-md-12 col-xs-12 marginbottom15px"  src="images/newArivals/milano.png" />
                        </a>
                        <div class="margin0auto w788px">
                            <img src="images/newArivals/text_milano.png">
                        </div>
                    </li>
                    <li>
                        <a href="#" >
                            <img class="col-md-12 col-xs-12 marginbottom15px"  src="images/newArivals/nouveau.png" />
                        </a>
                        <div class="margin0auto w788px">
                            <img src="images/newArivals/text_nouveau.png">
                        </div>
                    </li>
                    <li>
                        <a href="#" >
                            <img class="col-md-12 col-xs-12 marginbottom15px"  src="images/newArivals/artisan.png" />
                        </a>
                        <div class="margin0auto w788px">
                            <img src="images/newArivals/text_artisan.png">
                        </div>
                    </li>


                </ul>

            </div>
            <br>
            <div class="row">
                <img style="margin:0 0 1% 6%" class="padding0"src="images/Hot_Picks/Hot_picks1/Dolce-Vita-Website-updated-option-5-part-3_23.png"> <br>
                <ul  id="HotPics_Bottom_slider">
                    <li>
                        <a href="life_style.php" >
                            <img src="images/Hot_Picks/Hot_picks1/lifestyle.png" />
                        </a>
                        <h3 class="textalcenter">LIFESTYLE</h3>
                        <div>
                            <div class="textalcenter fontsize20px" style="font-style: italic;">
                                <p>
                                    Just A Little "LOCO"<br> About Details
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="new-arivals.php" >
                            <img src="images/Hot_Picks/Hot_picks1/new-arrivals.png" />
                        </a>
                        <h3 class="textalcenter">NEW ARRIVALS</h3>
                        <div>
                            <div class="textalcenter fontsize20px" style="font-style: italic;">
                                <p>
                                    The Clocks Collection<br>2016 Nouveau by<br>Dolce Vita Home
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="i_am_king.php" >
                            <img src="images/Hot_Picks/Hot_Picks2/i_am_king.png" />
                        </a>
                        <h3 class="textalcenter">I AM KING</h3>
                        <div>
                            <div class="textalcenter fontsize20px" style="font-style: italic;">
                                <p>
                                    Man About The House
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="trends.php" >
                            <img src="images/homeblog/trends_submain.png" />
                        </a>
                        <h3 class="textalcenter">TRENDS</h3>
                        <div>
                            <div class="textalcenter fontsize20px" style="font-style: italic;">
                                <p>
                                    Made For Attraction
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="trends_lol.php" >
                            <img src="images/homeblog/trends_main.png" />
                        </a>
                        <h3 class="textalcenter">TRENDS</h3>
                        <div>
                            <div class="textalcenter fontsize20px" style="font-style: italic;">
                                <p>
                                    For L.O.L<br>Love Of Lighting
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="sleep_is_beautiful.php" >
                            <img src="images/Hot_Picks/Hot_picks1/sleep.png" />
                        </a>
                        <h3 class="textalcenter">SLEEP IS BEAUTIFUL</h3>
                        <div>
                            <div class="textalcenter fontsize20px" style="font-style: italic;">
                                <p>
                                    A Plush Kind Of Life
                                </p>
                            </div>
                        </div>
                    </li>

                </ul>

            </div>

        </div>
    </div>
    <!------------------------------------ FOOTER START-------------------------------->
    <?php require_once"main/footer.php" ?>


</div>