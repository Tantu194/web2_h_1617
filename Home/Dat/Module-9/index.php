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
        $less->compileFile('less/module-9-less.less', 'css/module-9-css.css');
        ?>
        <link href="css/module-9-css.css" rel="stylesheet" type="text/css"/>

    </head>

    <body>
        <div class="module-9">
            <div class="blank-space"></div>
            <div class="row">
                <div class="googlemap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1sbg!2sbg!4v1466707607406!6m8!1m7!1svsXUo6yo0NdjsXT6vPIAXA!2m2!1d51.51879257446717!2d-0.1547868106266257!3f74.10829252425589!4f-9.830256425407029!5f0.4000000000000002">
                    </iframe>
                </div>
            </div>
            <div class="space"></div>
            <div class="wapper">
                <div class="row">
                    <div class="main">
                        <div class="grid2-5  col-md-5 col-sm-12 col-xm-12">
                            <div class="spacespane"></div>
                            <h4>Opening Times</h4>
                            <table class="timetable">
                                <tbody>
                                    <tr>
                                        <td>Week days</td>
                                        <td></td>
                                        <td>9.00 – 18:00</td>
                                    </tr>
                                    <tr>
                                        <td>Saturday</td>
                                        <td></td>
                                        <td>10.00 – 17:00</td>
                                    </tr>
                                    <tr>
                                        <td>Sunday</td>
                                        <td></td>
                                        <td>Closed</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="grid1-5  col-md-2 col-sm-12 col-xm-12">
                            <div class="blank-space1"></div>
                            <div class="row">
                                <div class="grid1">
                                    <div class="grid1-1">
                                        <p>
                                            <img src="image/icon.JPG" alt=""/>
                                            <span></span>
                                        </p>
                                        <h4>Directions</h4>
                                        <p>London, UK<br>
                                            10, Firs Avenue, Muswell Hill
                                        </p>
                                        <p>
                                            <a href="#" class="button">
                                                <span class="text-button">View on map</span>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid2-5 lastgrid  col-md-5 col-sm-12 col-xm-12">
                            <div class="spacespane"></div>
                            <h4>Get in touch</h4>
                            <h4>+359 562 958</h4>
                            <p class="email"><a href="#">hello@yoursite.com</a></p>
                            <p>
                                <a href="#"><span class="fa fa-facebook"></span></a>
                                <a href="#"><span class="fa fa-twitter"></span></a>
                                <a href="#"><span class="fa fa-pinterest"></span></a>
                                <a href="#"><span class="fa fa-instagram"></span></a>
                            </p> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="blank-space"></div>
        </div>
    </body>
</html>