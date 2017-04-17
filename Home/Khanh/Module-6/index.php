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
    </head>

    <body>
        <div class="Module-6">
            <div class="row">
                <div class="anhcafe">
                    <img src="anh/anh1.jpg">
                   
                        <div class="M6-grid-1-2">
                            <p><span class="icon"></span></p>
                            <h2>Buddha:<br>
                                How to drink tea?</h2>
                            <p>The types of tea are white tea, green tea, yellow tea, oolong tea, black tea, and pu-erh tea. “When you have the title ‘white tea’ or ‘green tea’, you’re actually describing the process by which it has been made,”
                                Woollard says.</p>
                            
                            
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

            </div>
        

    </body>
</html>