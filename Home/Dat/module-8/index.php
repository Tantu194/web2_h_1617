<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <title>Coffee Shop &#8211; Délicious</title>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/module-8-less.less', 'css/module-8-css.css');
        ?>
        <link href="css/module-8-css.css" rel="stylesheet" type="text/css"/>

    </head>

    <body>
        <div class="module-8">
            <div class="container">
                <div class="row">
                    <div class="lavender-grid">
                        <div class="menu-center">
                            <div class="sep-before"> 
                                <div class="sep-line"></div>
                            </div>
                            <div class="content">
                                <h2 class="text-divider-double">
                                    Menu
                                </h2>
                                <div class="text-divider-subtitle">Today Specials</div>
                            </div>
                            <div class="sep-after">
                                <div class="sep-line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>