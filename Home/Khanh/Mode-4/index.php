<html>
    <head>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>


        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1.less', 'css/1.css');
        ?>
        <link href="css/1.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="m4">
           
                <div class="row">
                   
                    <div class="m4-content">
                        <h2 class="m4-content-text">
                            We offer
                        </h2>
                        <div class="m4-content-today">
                            Today Specials
                        </div> 
                    </div>

                    <div class="m4-trong"></div>
                    
                     
                    <div class="m4-services">
                        <div class="m4-limit">

                            <div class="m4-limit-thumbnail">
                                <a href="/" title="Coffee &amp; Tea" class="has-border">
                                    <img src="anh/anh1.jpg" class="attachment-full size-full"> </a>
                            </div>
                            <h4 class="m4-limit-services-title">
                                <a href="/" title="Coffee &amp; Tea">Coffee &amp; Tea</a>
                            </h4>
                            <div class="m4-services-content">
                                <p>Its delicious smooth blend and various varieties seductively charm you at the start of your day.</p>
                            </div>

                        </div>
                    </div>
                    
                     <div class="m4-services">
                        <div class="m4-limit">

                            <div class="m4-limit-thumbnail">
                                <a href="/" title="Coffee &amp; Tea" class="has-border">
                                    <img src="anh/anh2.jpg" class="attachment-full size-full"> </a>
                            </div>
                            <h4 class="m4-limit-services-title">
                                <a href="/" title="Bakery &amp; Sweets">Bakery &amp; Sweets</a>
                            </h4>
                            <div class="m4-services-content">
                                <p>These desserts aren’t simply favorites of ours; they also help define, in their own way…</p>
                            </div>


                        </div>
                    </div>
                    
                     <div class="m4-services">
                        <div class="m4-limit">

                            <div class="m4-limit-thumbnail">
                                <a href="/" title="Coffee &amp; Tea" class="has-border">
                                    <img src="anh/anh3.jpg" class="attachment-full size-full"> </a>
                            </div>
                            <h4 class="m4-limit-services-title">
                                <a href="/" title="Lunch Menu">Lunch Menu</a>
                                </h4>
                            <div class="m4-services-content">
                                <p>We make our lunches and dinners with the finest ingredients we can find to make our meals as flavorful as possible.</p>
                            </div>


                        </div>
                    </div>
                    
                    <div class="m4-services">
                        <div class="m4-limit">

                            <div class="m4-limit-thumbnail">
                                <a href="/" title="Coffee &amp; Tea" class="has-border">
                                    <img src="anh/anh4.jpg" class="attachment-full size-full"> </a>
                            </div>
                            <h4 class="m4-limit-services-title">
                                 <a href="/" title="Work Spots">Work Spots</a>
                            </h4>
                           <div class="m4-services-content">
                                <p>Coffice in Stockholm is a great place to work from. Food options beyond pastries. Free WiFi.</p>
                            </div>


                        </div>
                    </div>
                    
                    
                    <div class="m4-services">
                        <div class="m4-limit">

                            <div class="m4-limit-thumbnail">
                                <a href="/" title="Coffee &amp; Tea" class="has-border">
                                    <img src="anh/anh5.jpg" class="attachment-full size-full"> </a>
                            </div>
                            <h4 class="m4-limit-services-title">
                                <a href="/" title="Child Friendly">Child Friendly</a>
                            </h4>
                           <div class="m4-services-content">
                            <p>Based in Barcelona, Pudding Bar was designed for spending the afternoon with the kids.</p>
                            </div>


                        </div>
                    </div>
                    
                    
                </div>
            </div>
        

     

   









</body>
</html>