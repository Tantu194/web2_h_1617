<!DOCTYPE html>
<html lang="en">
    <head>
        <title>https://vip-restaurant.vamtam.com/home-layouts/coffee-shop/</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('../modul-7/libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/modul-7-less.less', 'css/modul-7-css.css');
        ?>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/modul-7-css.css" rel="stylesheet" type="text/css"/>
        <script src="js/m7-jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="modul-7">

            <div class="row m7-tabs-all">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#all" data-toggle="tab">All<span>8</span></a></li>
                    <li><a href="#coffee" data-toggle="tab">Coffee Shop<span>4</span></a></li>
                    <li><a href="#gourmet" data-toggle="tab">Gourmet<span>3</span></a></li>
                    <li><a href="#recipes" data-toggle="tab">Recipes<span>4</span></a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="all">
                        <div class="col-md-3 tab-content-pic">
                            <img src="images/Meat-3-800x615.jpg">
                            <span>
                                <h3>
                                    <a>Jamie Oliver: Try Something New</a>
                                </h3>
                            </span>
                        </div>
                        <div class="col-md-3 tab-content-pic">
                            <img src="images/Seafood-2-800x615.jpg">
                            <span>
                                <h3>
                                    <a>Creamy Leek & Potato Soup</a>
                                </h3>
                            </span>
                        </div>
                        <div class="col-md-3 tab-content-pic">
                            <img src="images/Brunch-2-800x615.jpg">
                            <span>
                                <h3>
                                    <a>Top 10 breakfast spots in Paris</a>
                                </h3>
                            </span>
                        </div>
                        <div class="col-md-3 tab-content-pic">
                            <img src="images/Coffee-3-800x615.jpg">
                            <span>
                                <h3>
                                    <a>Caffe Latte Recipe</a>
                                </h3>
                            </span>
                        </div>
                        <div class="col-md-3 tab-content-pic">
                            <img src="images/sushi-1-800x615.jpg">
                            <span>
                                <h3>
                                    <a>7 Tips for the Best Sushi Party Ever</a>
                                </h3>
                            </span>
                        </div>
                        <div class="col-md-3 tab-content-pic">
                            <img src="images/Sushi-2-800x615.jpg">
                            <span>
                                <h3>
                                    <a>Sushi Lovers or Beginners</a>
                                </h3>
                            </span>
                        </div>
                        <div class="col-md-3 tab-content-pic">
                            <img src="images/tea-7-800x615.jpg">
                            <span>
                                <h3>
                                    <a>Coffee for Your Health</a>
                                </h3>
                            </span>
                        </div>
                        <div class="col-md-3 tab-content-pic">
                            <img src="images/people-800x615.jpg">
                            <span>
                                <h3>
                                    <a>Coffee with a friend is like capturing</a>
                                </h3>
                            </span>
                        </div>
                    </div>
                    <div class="tab-pane" id="coffee">
                        <div class="col-md-3 tab-content-pic">
                            <img src="images/Brunch-2-800x615.jpg">
                            <span>
                                <h3>
                                    <a>Top 10 breakfast spots in Paris</a>
                                </h3>
                            </span>
                        </div>
                        <div class="col-md-3 tab-content-pic">
                            <img src="images/Coffee-3-800x615.jpg">
                            <span>
                                <h3>
                                    <a>Caffe Latte Recipe</a>
                                </h3>
                            </span>
                        </div>
                        <div class="col-md-3 tab-content-pic">
                            <img src="images/tea-7-800x615.jpg">
                            <span>
                                <h3>
                                    <a>Coffee for Your Health</a>
                                </h3>
                            </span>
                        </div>
                        <div class="col-md-3 tab-content-pic">
                            <img src="images/people-800x615.jpg">
                            <span>
                                <h3>
                                    <a>Coffee with a friend is like capturing</a>
                                </h3>
                            </span>
                        </div>
                    </div>
                    <div class="tab-pane" id="gourmet">
                        <div class="col-md-3 tab-content-pic">
                            <img src="images/Seafood-2-800x615.jpg">
                            <span>
                                <h3>
                                    <a>Creamy Leek & Potato Soup</a>
                                </h3>
                            </span>
                        </div>
                        <div class="col-md-3 tab-content-pic">
                            <img src="images/Brunch-2-800x615.jpg">
                            <span>
                                <h3>
                                    <a>Top 10 breakfast spots in Paris</a>
                                </h3>
                            </span>
                        </div>
                        <div class="col-md-3 tab-content-pic">
                            <img src="images/Coffee-3-800x615.jpg">
                            <span>
                                <h3>
                                    <a>Caffe Latte Recipe</a>
                                </h3>
                            </span>
                        </div>
                    </div>
                    <div class="tab-pane" id="recipes">
                        <div class="col-md-3 tab-content-pic">
                            <img src="images/Meat-3-800x615.jpg">
                            <span>
                                <h3>
                                    <a>Jamie Oliver: Try Something New</a>
                                </h3>
                            </span>
                        </div>
                        <div class="col-md-3 tab-content-pic">
                            <img src="images/Coffee-3-800x615.jpg">
                            <span>
                                <h3>
                                    <a>Caffe Latte Recipe</a>
                                </h3>
                            </span>
                        </div>
                        <div class="col-md-3 tab-content-pic">
                            <img src="images/sushi-1-800x615.jpg">
                            <span>
                                <h3>
                                    <a>7 Tips for the Best Sushi Party Ever</a>
                                </h3>
                            </span>
                        </div>
                        <div class="col-md-3 tab-content-pic">
                            <img src="images/Sushi-2-800x615.jpg">
                            <span>
                                <h3>
                                    <a>Sushi Lovers or Beginners</a>
                                </h3>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>