<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/11.less', 'css/11.css');
        ?>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/11.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <footer>
            <div class="row">
                <div class="m11-title-footer">
                    <h2>Délicious</h2>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="m11-col-footer">
                    <div class="col-md-4 c1 col-sm-4">
                        <h4>About</h4>
                        <p>Osteria Francescana is a restaurant owned and run by chef Massimo Bottura in Modena, Italy</p>
                        <p>
                            <a href="#" class="button">
                                <span class="text-button">
                                    Buy this Delicious Theme
                                </span>
                            </a>
                        </p>
                    </div>
                    <div class="col-md-4 c2 col-sm-4">
                        <h4>Get news & offers</h4>
                        <div class="c2-input">
                            <input type="email" name="EMAIL" placeholder="Your email" required="">
                            <input type="submit" value="Subscrible">
                            <p>* We never send you spam!</p>
                        </div>
                        <div class="c2-icon">
                            <a href="#">
                                <span class="fa fa-tripadvisor"></span>
                            </a>
                            <a href="#">
                                <span class="fa fa-facebook"></span>
                            </a>
                            <a href="#">
                                <span class="fa fa-twitter"></span>
                            </a>
                            <a href="#">
                                <span class="fa fa-pinterest"></span>
                            </a>
                            <a href="#">
                                <span class="fa fa-instagram"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 c3 col-sm-4">
                        <h4>Contacts</h4>
                        <p>Via Stella, 22<br>
                            Modena MO, Italy<br>
                            +390 59 223 912</p>
                        <p><a href="#">hello@yoursite.com</a></p>
                    </div>
                </div>
            </div>
            <div class="ad">
                <div class="ad1">
                    © 2016
                    <a href="#">Delicious Restaurant & Café Theme</a>
                    by
                    <a href="#">VamTam Themes</a>
                </div>
                <div class="ad2">
                    Proudly powered by 
                    <a href="#">WordPress</a>
                </div>
            </div>
        </footer>
    </body>
</html>