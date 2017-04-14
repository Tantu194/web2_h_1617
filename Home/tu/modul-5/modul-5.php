<html>
    <head>
        <title>https://vip-restaurant.vamtam.com/home-layouts/coffee-shop/</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('../modul-5/libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/modul-5-less.less', 'css/modul-5-css.css');
        ?>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/modul-5-css.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="m5">
            <div class="m5-parallax"></div>
            <div class="m5-container">
                <div class="m5-content">
                    <div class="m5-content-line-left"><div class="m5-content-line"></div></div>
                    <div class="m5-content-text">
                        <h2>
                            Tea
                        </h2>
                        <div class="m5-content-text-subtitle">Today Specials</div>                            
                    </div>
                    <div class="m5-content-line-right"><div class="m5-content-line"></div></div>
                </div> 
            </div>
        </div>    
    </body>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="js/modul-5-js.js" type="text/javascript"></script>
</html>
