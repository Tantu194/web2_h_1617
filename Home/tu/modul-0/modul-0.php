<html>
    <head>
        <title>https://vip-restaurant.vamtam.com/home-layouts/coffee-shop/</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('../modul-0/libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/modul-0-less.less', 'css/modul-0-css.css');
        ?>
        
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="m0-splash-screen">
            <div class="m0-splash-screen-progress-wrapper">
                <img src="img/logo-dark.svg" class="attachment-full size-full">
                <div class="m0-splash-screen-progress"></div>
            </div>
        </div>
    </body>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/modul-0-css.css" rel="stylesheet" type="text/css"/>
    <script src="js/modul-0-splash.js" type="text/javascript"></script>
</html>
