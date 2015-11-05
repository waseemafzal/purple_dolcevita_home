<?php require_once"main/header.php" ?>
<!-- -------Navbar ends -->
<!------container starts ----->
<div class="container margin0auto">
    <div class="row">
        <br>
        <img id="media_header_img" class="padding0"src="images/newArivals/new_arrivals.png">
        <br><br><br>
    </div>
    <!------------------------------------ Products rows Start -------------------------------->
    <div class="row">
        <div class=" product_img col-xs-12 col-sm-12 padding0">
            <center> <img src="images/Media/Dolce-Vita-Website_07.png"></center>
        </div>
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
                            <img class="col-md-12 col-xs-12"  src="images/newArivals/milano.png" />
                        </a>
                        <div class="margin0auto w788px">
                            <img src="images/newArivals/text_milano.png">
                        </div>
                    </li>
                    <li>
                        <a href="#" >
                            <img class="col-md-12 col-xs-12"  src="images/newArivals/nouveau.png" />
                        </a>
                        <div class="margin0auto w788px">
                            <img src="images/newArivals/text_nouveau.png">
                        </div>
                    </li>
                    <li>
                        <a href="#" >
                            <img class="col-md-12 col-xs-12"  src="images/newArivals/artisan.png" />
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
                    <li><a href="#" ><img src="images/Hot_Picks/Hot_picks1/lifestyle.png" />
                        </a>
                        <h3>LIFESTYLE</h3>
                        <p>Contray to pupolar belief. Lorem ipsumn is not only dumy text</p>
                    </li>
                    <li><a href="#" ><img src="images/Hot_Picks/Hot_picks1/sleep.png" />
                        </a>
                        <h3>SLEEP IS BEAUTIFUL</h3>
                        <p>Contray to pupolar belief. Lorem ipsumn is not only dumy text</p>
                    </li>
                    <li><a href="#" ><img src="images/Hot_Picks/Hot_picks1/new-arrivals.png" />
                        </a>
                        <h3>NEW ARRIVALS</h3>
                        <p>Contray to pupolar belief. Lorem ipsumn is not only dumy text</p>
                    </li>
                    <li><a href="#" ><img src="images/Hot_Picks/Hot_picks1/sleep.png" />
                        </a>
                        <h3>SLEEP IS BEAUTIFUL</h3>
                        <p>Contray to pupolar belief. Lorem ipsumn is not only dumy text</p>
                    </li>

                </ul>

            </div>

        </div>
    </div>
    <!------------------------------------ FOOTER START-------------------------------->
    <?php require_once"main/footer.php" ?>


</div>