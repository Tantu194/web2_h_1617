<html>
    <head>
        <title>https://vip-restaurant.vamtam.com/home-layouts/coffee-shop/</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('../modul-12/libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/modul-12-less.less', 'css/modul-12-css.css');
        ?>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/modul-12-css.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="modul-12">
            <div class="row">
                <div class="m10-title">
                    <div class="m10-title-main">
                        <div class="line-before"> 
                            <div class="under-line"></div>
                        </div>
                        <div class="content">
                            <h2 class="content-1">
                                New & Event
                            </h2>
                            <div class="content-2">Today Specials</div>
                        </div>
                        <div class="line-after">
                            <div class="under-line"></div>
                        </div>
                    </div>
                </div>
            </div>
           </div>        
    </body>
</html>