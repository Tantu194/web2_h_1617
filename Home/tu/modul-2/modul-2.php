<html>
    <head>
        <title>https://vip-restaurant.vamtam.com/home-layouts/coffee-shop/</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('../modul-2/libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/modul-2-less.less', 'css/modul-2-css.css');
        ?>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/modul-2-css.css" rel="stylesheet" type="text/css"/>
        

    </head>
    <body>
        <div class="m2">
            <div class="m2-container">
                <div class="m2-grip">
                    <div class="m2-grip-paralax">
                        <div class="m2-grip-background"></div>
                    </div>
                    <div class="m2-grip-content">
                        <div class="m2-grip-content-1 col-md-4 col-sm-4">
                            <div class="m2-grip-content-1-left col-md-10">
                                <h4>Tools</h4>
                                <p>“Professional chefs rely on a battery of tools and equipment. Chefs must be conscious of their kitchen tools when planning a menu and understand their use and production capacity.”</p>
                            </div>
                        </div>
                        <div class="m2-grip-content-2 col-md-4 col-sm-4">
                            <img src="img/coffee-img-1.png">
                            <h3>Welcome</h3>
                            <p>“First and foremost I am a chef, whether behind the stove at one of my Northern California restaurants or for the past 15 years in front of the camera on my Food Network cooking shows. Creating new dishes and flavor combinations that bring cooks and our restaurant guests pleasure is my job and I love it.”</p>
                        </div>
                        <div class="m2-grip-content-1 m2-grip-content-3 col-md-4 col-sm-4">
                            <div class="m2-grip-content-1-left col-md-10">
                                <h4>Food</h4>
                                <p>“Creating new dishes and flavor combinations that bring cooks and our restaurant guests pleasure is my job and I love it.”</p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>    
    </body>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="js/modul-2-js.js" type="text/javascript"></script>
    
</html>
