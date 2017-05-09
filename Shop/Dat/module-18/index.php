<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <title>Coffee Shop &#8211; Délicious</title>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/module-18-less.less', 'css/module-18-css.css');
        ?>
        <link href="css/module-18-css.css" rel="stylesheet" type="text/css"/>

    </head>

    <body>
        <div class="module-18">
            <div class="row">
                <div class="limit-wapper">
                    <ul>
                        <li>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="product">
                                    <a href="#"></a>
                                    <div class="productimg">
                                        <img src="image/breakfast-9-300x233.jpg" alt=""/>
                                    </div>
                                    <div class="addtocart">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <h5>Home Chef</h5>
                                    <span class="tagged">
                                        <a href="#">BREAKFAST</a>
                                        <a href="#">CAPPUCCINO</a>
                                        <a href="#">COFFEE</a>
                                    </span>
                                    <a href="#">
                                        <h3>Mix of Croissants Breakfast</h3> 
                                    </a>
                                    <span class="price">
                                        <p>£5.00</p>
                                    </span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </body>
</html>