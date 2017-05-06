<html>
    <head>
        <title>https://vip-restaurant.vamtam.com/home-layouts/coffee-shop/</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('../modul-16/libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/modul-16-less.less', 'css/modul-16-css.css');
        ?>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/modul-16-css.css" rel="stylesheet" type="text/css"/>
        <script src="js/m16-jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="modul-16">
            <div class="row">
                <div class="tabspill">
                    <div class="tabbable-panel">
                        <div class="tabbable-line">
                            <ul class="nav nav-tabs ">
                                <li class="active">
                                    <a href="#tab_default_1" data-toggle="tab">
                                        Description</a>
                                </li>
                                <li>
                                    <a href="#tab_default_2" data-toggle="tab">
                                        Addtional information</a>
                                </li>
                                <li>
                                    <a href="#tab_default_3" data-toggle="tab">
                                        Review(0)</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_default_1">
                                    <h2>Description</h2>

                                    <p>First separate the eggs, putting the whites into one bowl and the yolks into another. Add the flour, baking powder and milk to the yolks and mix to a smooth thick batter. Whisk the whites with the salt until they form stiff peaks. Fold into the batter – it is now ready to use.<br>
                                        Heat a good non-stick pan on a medium heat. Pour some of your batter into the pan and fry for a couple of minutes until it starts to look golden and firm. At this point sprinkle your chosen flavouring (see below) on to the uncooked side before loosening with a spatula and flipping the pancake over. Continue frying until both sides are golden.<br>
                                        You can make these pancakes large or small, to your liking. You can serve them simply doused in maple syrup and even with some butter or crème fraîche. Or if you choose to sprinkle with a flavouring, try one of these…<br>
                                        fresh corn from the cob<br>
                                        crispy bacon or pancetta<br>
                                        blueberries<br>
                                        banana<br>
                                        stewed apple<br>
                                        grated chocolate<br>
                                        anything else you can imagine…</p>

                                </div>
                                <div class="tab-pane" id="tab_default_2">
                                    <h2>Additional information</h2>
                                    <table class="tab2">
                                        <tr>
                                            <th>BRAND</th>
                                            <td>
                                                <p>
                                                    <a href="#">Home Chef</a>
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="tab-pane" id="tab_default_3">
                                    <div class="tab3">
                                        <h2>Reviews</h2>
                                        <p>There are no reviews yet.</p>
                                        <p>Be the first to review “American Breakfast Pancakes” </p>
                                        <p>
                                            <span>Your email address will not be published. Required fields are marked *</span>
                                        </p>
                                        <p class="rating">
                                            <label>Your Rating</label><br>
                                            <a href="#">
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </a>
                                        </p>
                                        <p class="review">
                                            <label>Your Review</label><br>
                                            <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" required=""></textarea>
                                        </p>
                                        <p class="name">
                                            <label>Name *</label><br>
                                            <input id="author" name="author" type="text" value="" size="30" aria-required="true" required="">
                                        </p>
                                        <p class="email">
                                            <label>Email *</label><br>
                                            <input id="author" name="author" type="text" value="" size="30" aria-required="true" required="">
                                        </p>
                                        <p class="submit-form">
                                            <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>