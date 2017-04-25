<html>
    <head>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>


        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/6.less', 'css/6.css');
        ?>
        <link href="css/6.css" rel="stylesheet" type="text/css" />
        <script src="JS/6.js" type="text/javascript"></script>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <script src="JS/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="JS/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="Module-6">
            <div class="col-md-8">
                <div class="row">
                    <div class="anhcafe">
                        <img src="anh/anh1.jpg">

                        <div class="M6-grid-1-2">
                            <p><span class="icon"></span></p>
                            <h2>Buddha:<br>
                                How to drink tea?</h2>
                            <p>The types of tea are white tea, green tea, yellow tea, oolong tea, black tea, and pu-erh tea. “When you have the title ‘white tea’ or ‘green tea’, you’re actually describing the process by which it has been made,”
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">

                <div class="M7">

                    <div class='row'>

                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <!-- Bottom Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#quote-carousel" data-slide-to="1"></li>
                                <li data-target="#quote-carousel" data-slide-to="2"></li>
                            </ol>        
                            <!-- Carousel Slides / Quotes -->
                            <div class="carousel-inner">        
                                <!-- Quote 1 -->
                                <div class="item active">
                                    <blockquote>
                                        <div class="row">
                                            <div class="product">
                                                <a href="#" class="woocommerce-LoopProduct-link"></a>
                                                <div class="col-sm-12 text-center">
                                                    <img class="img-circle" src="anh/anh6.jpg">
                                                </div>
                                                <div class="col-sm-12 text-center">
                                                    <h5>Harney &amp; Sons </h5>
                                                    <span class="tagged_as">

                                                        <a href="#" rel="tag">Coffee</a>
                                                        <a href="#" rel="tag">Honey</a>
                                                        <a href="#" rel="tag">Organic</a> 
                                                        <a href="#" rel="tag">Tea</a>
                                                    </span>

                                                    <a href="#">
                                                        <h3 class="woocommerce-loop-product__title">Wild Flower Honey</h3>
                                                    </a>
                                                    <span class="price">
                                                        <span class="woocommerce-Price-amount amount">
                                                            <span class="woocommerce-Price-currencySymbol">£</span>60.00</span>

                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 2 -->
                                <div class="item active">
                                    <blockquote>
                                        <div class="row">
                                            <div class="product">
                                                <a href="#" class="woocommerce-LoopProduct-link"></a>
                                                <div class="col-sm-12 text-center">
                                                    <img class="img-circle" src="anh/anh7.jpg">
                                                </div>


                                                <div class="col-sm-12 text-center">
                                                    <h5>Harney &amp; Sons </h5>
                                                    <span class="tagged_as">

                                                        <a href="#" rel="tag">Coffee</a>
                                                        <a href="#" rel="tag">Honey</a>
                                                        <a href="#" rel="tag">Organic</a> 
                                                        <a href="#" rel="tag">Tea</a>
                                                    </span>

                                                    <a href="#">
                                                        <h3 class="woocommerce-loop-product__title">Wild Flower Honey</h3>
                                                    </a>
                                                    <span class="price">
                                                        <span class="woocommerce-Price-amount amount">
                                                            <span class="woocommerce-Price-currencySymbol">£</span>4.90</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 3 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="product">
                                            <a href="#" class="woocommerce-LoopProduct-link"></a>
                                            <div class="col-sm-12 text-center">
                                                <img class="img-circle" src="anh/anh8.jpg">
                                            </div>


                                            <div class="col-sm-12 text-center">
                                                <h5>Harney &amp; Sons </h5>
                                                <span class="tagged_as">

                                                    <a href="#" rel="tag">Coffee</a>
                                                    <a href="#" rel="tag">Honey</a>
                                                    <a href="#" rel="tag">Organic</a> 
                                                    <a href="#" rel="tag">Tea</a>
                                                </span>

                                                <a href="#">
                                                    <h3 class="woocommerce-loop-product__title">Elea – Tea set with tray</h3>
                                                </a>
                                                <span class="price">
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">£</span>60.00</span>
                                                </span>     
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>        
                            <!-- Carousel Buttons Next/Prev -->
                            <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                            <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                        </div>                          

                    </div>

                </div>
            </div>

            <div class="anhdau">
                <div class="container">
                    <div class="row">
                        <p>
                            <img src="anh/anh3.jpg">
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </body>
</html>