<html>
    <head>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="JS/6.js" type="text/javascript"></script>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/15.less', 'css/15.css');
        ?>
        <link href="css/15.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <div class="Module-15">

            <div class="row">
                <div class="col-md-6">
                    <div class="anh">
                        <img src="anh/anh1.jpg">
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="Module-15-summary">
                        <p class="price">
                            <span class="woocommerce-Price">
                                <span class="woocommerce-Price-currencySymbol">£</span>
                                6.00
                            </span>
                        </p>
                        <div class="text">
                            <p>These American pancakes are great! Instead of being thin and silky like French crêpes, they are wonderfully fluffy and thick and can be made to perfection straight away.</p>
                        </div>
                        <form class="cart">
                            <div class="quantity">
                                <input type="number" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric">
                            </div>
                            <button type="submit" name="add-to-cart" value="12033" class="single_add_to_cart_button button alt">Add to cart</button>
                        </form>
                        <div class="product_meta">
                            <span class="posted_in">Category: 
                                <a href="#" rel="tag">Breakfast</a>
                            </span>
                            <span class="tagged_as">Tags: 
                                <a href="#" rel="tag">bio</a>
                                <a href="#" rel="tag">breakfast</a> 
                                <a href="#" rel="tag">pancake</a>
                            </span>
                        </div>
                        <div class="icon">
                            <ul>
                                <li class="fb">
                                    <a class="fa fa-facebook-square"></a>
                              
                                </li>
                                <li class="tw">
                                    <a class="fa fa-twitter-square" aria-hidden="true"></a>
                                </li>
                                <li class="pin">
                                    <a class="fa fa-pinterest-square" aria-hidden="true"></a>
                                </li>
                                <li class="tum">
                                    <a class="fa fa-tumblr-square" aria-hidden="true"></a>
                                </li>
                                <li class="google">
                                    <a class="fa fa-google-plus" aria-hidden="true"></a>
                                </li>
                               
                            </ul>
                        
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </body>
</html>