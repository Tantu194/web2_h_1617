<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans%3A400italic%2C600%2C700%2C400%2C300%3Alatin%7CLibre+Baskerville%3Anormal%2Cbold%3A%7CVarela+Round%3Anormal%2Cbold%3A%7CHandlee%3Anormal%2Cbold%3A%7CKaushan+Script%3A400%3Alatin">
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
                <div class="module-8-main">
                    <div class="row">
                        <div class="grid-1 col-md-4 col-sm-12 col-xm-12">
                            <div class="foodpress_menu">
                                <h2>
                                    Breakfast
                                </h2>
                                <div class="fp_container">
                                    <div class="food_items_container">
                                        <div  class="fp_box">
                                            <div class="inner">
                                                <h3>
                                                    Antioxidant Fruits Mix
                                                    <span class="fp_price">$8</span>
                                                </h3>
                                                <div class="menu_description">
                                                    <a class="fp_inline_btn"> Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div  class="fp_box">
                                            <div class="inner">
                                                <h3>
                                                    Blueberry banana pancakes
                                                    <span class="fp_price">$5</span>
                                                </h3>
                                                <div class="menu_description">
                                                    Banana, almond milk, vanilla, cinnamon, blueberry topping
                                                    <a class="fp_inline_btn"> Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div  class="fp_box">
                                            <div class="inner">
                                                <h3>
                                                    Fig and lemon cake
                                                    <span class="fp_price">$7</span>
                                                </h3>
                                                <div class="menu_description">
                                                    <a class="fp_inline_btn"> Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div  class="fp_box">
                                            <div class="inner">
                                                <h3>
                                                    Home made bread
                                                    <span class="fp_price">$3 each</span>
                                                </h3>
                                                <div class="menu_description">
                                                    <a class="fp_inline_btn"> Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div  class="fp_box">
                                            <div class="inner">
                                                <h3>
                                                    Pain au chocolat
                                                    <span class="fp_price">$4</span>
                                                </h3>
                                                <div class="menu_description">
                                                    Beautiful homemade croissants, each containing a bar of high-quality dark chocolate, make for an impressive and indulgent addition to ...
                                                    <a class="fp_inline_btn"> Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div  class="fp_box">
                                            <div class="inner">
                                                <h3>
                                                    Sun-Dried Tomato Bruschetta
                                                    <span class="fp_price">$7</span>
                                                </h3>
                                                <div class="menu_description">
                                                    <a class="fp_inline_btn"> Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div  class="fp_box">
                                            <div class="inner">
                                                <h3>
                                                    Traditional pancakes with maple syrup butter & berry jam
                                                    <span class="fp_price">$5</span>
                                                </h3>
                                                <div class="menu_description">
                                                    Milk, eggs, strawberries, butter, maple syrup
                                                    <a class="fp_inline_btn"> Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h2>
                                    Bruch
                                </h2>
                                <div  class="fp_box">
                                    <div class="inner">
                                        <h3>
                                            American Brunch Combo Menu
                                            <span class="fp_price">$ 15</span>
                                        </h3>
                                        <div class="menu_description">
                                            Freshly scrambled eggs with applewood smoked bacon, tomatoes, green onions and cheddar cheese.
                                            <a class="fp_inline_btn"> Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div  class="fp_box">
                                    <div class="inner">
                                        <h3>
                                            Blueberry banana pancakes
                                            <span class="fp_price">$5</span>
                                        </h3>
                                        <div class="menu_description">
                                            Banana, almond milk, vanilla, cinnamon, blueberry topping
                                            <a class="fp_inline_btn"> Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div  class="fp_box">
                                    <div class="inner">
                                        <h3>
                                            Cashew Chicken With Stir-Fry Vegetables & Green Salad
                                            <span class="fp_price">$22</span>
                                        </h3>
                                        <div class="menu_description">
                                            Cashew Chicken With Stir-Fry Vegetables served with green salad, sprouts and stewed mushrooms.
                                            <a class="fp_inline_btn"> Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div  class="fp_box">
                                    <div class="inner">
                                        <h3>
                                            Coffee & Strawberry Jam French Toast with Strawberry Butter Combo Menu
                                            <span class="fp_price">$11</span>
                                        </h3>
                                        <div class="menu_description">
                                            Hot coffee in the company of fresh bread toast topped with homemade strawberry butter, warm maple syrup, and fresh ...
                                            <a class="fp_inline_btn"> Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div  class="fp_box">
                                    <div class="inner">
                                        <h3>
                                            Coffee and Pain au chocolat (Chocolate  croissant) Combo Menu
                                            <span class="fp_price">$11</span>
                                        </h3>
                                        <div class="menu_description">
                                            Hot coffee in the company of Beautiful homemade croissants, each containing a bar of high-quality dark chocolate, make for ...                                        
                                        </div>
                                    </div>
                                </div>
                                <div  class="fp_box">
                                    <div class="inner">
                                        <h3>
                                            French Toast with Strawberry Jam
                                            <span class="fp_price">$11</span>
                                        </h3>
                                        <div class="menu_description">
                                            Hot coffee in the company of fresh bread toast topped with homemade strawberry butter, warm maple syrup, and fresh ...
                                            <a class="fp_inline_btn"> Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div  class="fp_box">
                                    <div class="inner">
                                        <h3>
                                            Optic Big Breakfast Combo Menu
                                            <span class="fp_price">$20</span>
                                        </h3>
                                        <div class="menu_description">
                                            <a class="fp_inline_btn"> Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div  class="fp_box">
                                    <div class="inner">
                                        <h3>
                                            Optic Big Salad Combo
                                            <span class="fp_price">$20</span>
                                        </h3>
                                        <div class="menu_description">
                                            <a class="fp_inline_btn"> Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div  class="fp_box">
                                    <div class="inner">
                                        <h3>
                                            Pain au chocolat
                                            <span class="fp_price">$4</span>
                                        </h3>
                                        <div class="menu_description">
                                            Beautiful homemade croissants, each containing a bar of high-quality dark chocolate, make for an impressive and indulgent addition to ...
                                            <a class="fp_inline_btn"> Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div  class="fp_box">
                                    <div class="inner">
                                        <h3>
                                            Salad With Vegetables
                                            <span class="fp_price">$22</span>
                                        </h3>
                                        <div class="menu_description">
                                            Cashew Chicken With Stir-Fry Vegetables served with green salad, sprouts and stewed mushrooms.
                                            <a class="fp_inline_btn"> Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div  class="fp_box">
                                    <div class="inner">
                                        <h3>
                                            Traditional pancakes with maple syrup butter & berry jam
                                            <span class="fp_price">$5</span>
                                        </h3>
                                        <div class="menu_description">
                                            Milk, eggs, strawberries, butter, maple syrup
                                            <a class="fp_inline_btn"> Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-1 col-md-4 col-sm-12 col-xm-12">
                            <div class="foodpress_menu">
                                <h2>
                                    Dinner
                                </h2>
                                <div class="fp_container">
                                    <div class="food_items_container">
                                        <div  class="fp_box">
                                            <div class="inner">
                                                <h3>
                                                    Alder Grilled Chinook Salmon
                                                    <span class="fp_price">$33</span>
                                                </h3>
                                                <div class="menu_description">
                                                    Candied salmon, basil potato puree, baby kale marsala eggplant confit & balsamic butter sauce.
                                                    <a class="fp_inline_btn"> Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div  class="fp_box">
                                            <div class="inner">
                                                <h3>
                                                    Alder grilled seafood paella
                                                    <span class="fp_price">$37</span>
                                                </h3>
                                                <div class="menu_description">
                                                    Shell-on king prawns, monkfish, onion, paella rice, garlic, smoked paprika, cayenne pepper (optional), saffron, tomatoes, mussels, peas, broad beans, ...
                                                    <a class="fp_inline_btn"> Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div  class="fp_box">
                                            <div class="inner">
                                                <h3>
                                                    Asian chicken & vegetable stir fry
                                                    <span class="fp_price">$41</span>
                                                </h3>
                                                <div class="menu_description">
                                                    Chicken breast, cornstarch, soy sauce, garlic, minced, potatoes, onion, bell pepper, carrot, green beans (aka Baguio beans)
                                                    <a class="fp_inline_btn"> Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div  class="fp_box">
                                            <div class="inner">
                                                <h3>
                                                    Creamy smoked salmon, leek & potato soup
                                                    <span class="fp_price">$9.50</span>
                                                </h3>
                                                <div class="menu_description">
                                                    Served in deep bowls with smoked salmon and snipped chives on the top.
                                                    <a class="fp_inline_btn"> Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div  class="fp_box">
                                            <div class="inner">
                                                <h3>
                                                    Head on prawns, manila clams &  mussels
                                                    <span class="fp_price">$39</span>
                                                </h3>
                                                <div class="menu_description">
                                                    These small shellfish have a sweet flavour and a firm texture.
                                                    <a class="fp_inline_btn"> Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div  class="fp_box">
                                            <div class="inner">
                                                <h3>
                                                    Lamb Chops Sizzled with Garlic
                                                    <span class="fp_price">$45</span>
                                                </h3>
                                                <div class="menu_description">
                                                    <a class="fp_inline_btn"> Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div  class="fp_box">
                                            <div class="inner">
                                                <h3>
                                                    Salad With Vegetables
                                                    <span class="fp_price">$22</span>
                                                </h3>
                                                <div class="menu_description">
                                                    Cashew Chicken With Stir-Fry Vegetables served with green salad, sprouts and stewed mushrooms.
                                                    <a class="fp_inline_btn"> Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div  class="fp_box">
                                            <div class="inner">
                                                <h3>
                                                    Smoked Paprika Hummus
                                                    <span class="fp_price">$19</span>
                                                </h3>
                                                <div class="menu_description">
                                                    Optional garnishes: roasted red bell peppers, roasted garlic, lemon slices, olives, mint or parsley sprigs
                                                    <a class="fp_inline_btn"> Read More</a>
                                                </div>
                                            </div>
                                        </div><div  class="fp_box">
                                            <div class="inner">
                                                <h3>
                                                    Spicy Vegan Potato Curry
                                                    <span class="fp_price">$28</span>
                                                </h3>
                                                <div class="menu_description">
                                                    Onion, garlic, turmeric, cumin, coriander, tomato, potato, carrot, red pepper, chili, coconut milk.
                                                    <a class="fp_inline_btn"> Read More</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <h2>
                                    Lunch
                                </h2>
                                <div  class="fp_box">
                                    <div class="inner">
                                        <h3>
                                            Alder Grilled Chinook Salmon
                                            <span class="fp_price">$33</span>
                                        </h3>
                                        <div class="menu_description">
                                            Candied salmon, basil potato puree, baby kale marsala eggplant confit & balsamic butter sauce.
                                            <a class="fp_inline_btn"> Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div  class="fp_box">
                                    <div class="inner">
                                        <h3>
                                            Alder grilled seafood paella
                                            <span class="fp_price">$37</span>
                                        </h3>
                                        <div class="menu_description">
                                            Shell-on king prawns, monkfish, onion, paella rice, garlic, smoked paprika, cayenne pepper (optional), saffron, tomatoes, mussels, peas, broad beans, ...
                                            <a class="fp_inline_btn"> Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div  class="fp_box">
                                    <div class="inner">
                                        <h3>
                                            Asian chicken & vegetable stir fry
                                            <span class="fp_price">$41</span>
                                        </h3>
                                        <div class="menu_description">
                                            Chicken breast, cornstarch, soy sauce, garlic, minced, potatoes, onion, bell pepper, carrot, green beans (aka Baguio beans)
                                            <a class="fp_inline_btn"> Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div  class="fp_box">
                                    <div class="inner">
                                        <h3>
                                            Creamy smoked salmon, leek & potato  soup
                                            <span class="fp_price">$9.50</span>
                                        </h3>
                                        <div class="menu_description">
                                            Served in deep bowls with smoked salmon and snipped chives on the top.
                                            <a class="fp_inline_btn"> Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div  class="fp_box">
                                    <div class="inner">
                                        <h3>
                                            Head on prawns, manila clams &  mussels
                                            <span class="fp_price">$39</span>
                                        </h3>
                                        <div class="menu_description">
                                            These small shellfish have a sweet flavour and a firm texture.                                        
                                        </div>
                                    </div>
                                </div>
                                <div  class="fp_box">
                                    <div class="inner">
                                        <h3>
                                            Lamb Chops Sizzled with Garlic
                                            <span class="fp_price">$45</span>
                                        </h3>
                                        <div class="menu_description">
                                            <a class="fp_inline_btn"> Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div  class="fp_box">
                                    <div class="inner">
                                        <h3>
                                            Smoked Paprika Hummus
                                            <span class="fp_price">$19</span>
                                        </h3>
                                        <div class="menu_description">
                                            Optional garnishes: roasted red bell peppers, roasted garlic, lemon slices, olives, mint or parsley sprigs
                                            <a class="fp_inline_btn"> Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div  class="fp_box">
                                    <div class="inner">
                                        <h3>
                                            Spicy Vegan Potato Curry
                                            <span class="fp_price">$28</span>
                                        </h3>
                                        <div class="menu_description">
                                            Onion, garlic, turmeric, cumin, coriander, tomato, potato, carrot, red pepper, chili, coconut milk.
                                            <a class="fp_inline_btn"> Read More</a>
                                        </div>
                                    </div>
                                </div>     
                            </div>
                        </div>
                        <div class="grid-1 col-md-4 col-sm-12 col-xm-12">
                            <div class="foodpress_menu">
                                <h2>
                                    Dessert
                                </h2>
                                <div class="fp_container">
                                    <div class="food_items_container">
                                        <div  class="fp_box">
                                            <div class="inner">
                                                <h3>
                                                    Alder Grilled Chinook Salmon
                                                    <span class="fp_price">$33</span>
                                                </h3>
                                                <div class="menu_description">
                                                    Candied salmon, basil potato puree, baby kale marsala eggplant confit & balsamic butter sauce.
                                                    <a class="fp_inline_btn"> Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div  class="fp_box">
                                            <div class="inner">
                                                <h3>
                                                    Alder grilled seafood paella
                                                    <span class="fp_price">$37</span>
                                                </h3>
                                                <div class="menu_description">
                                                    Shell-on king prawns, monkfish, onion, paella rice, garlic, smoked paprika, cayenne pepper (optional), saffron, tomatoes, mussels, peas, broad beans, ...
                                                    <a class="fp_inline_btn"> Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div  class="fp_box">
                                            <div class="inner">
                                                <h3>
                                                    Asian chicken & vegetable stir fry
                                                    <span class="fp_price">$41</span>
                                                </h3>
                                                <div class="menu_description">
                                                    Chicken breast, cornstarch, soy sauce, garlic, minced, potatoes, onion, bell pepper, carrot, green beans (aka Baguio beans)
                                                    <a class="fp_inline_btn"> Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div  class="fp_box">
                                            <div class="inner">
                                                <h3>
                                                    Creamy smoked salmon, leek & potato soup
                                                    <span class="fp_price">$9.50</span>
                                                </h3>
                                                <div class="menu_description">
                                                    Served in deep bowls with smoked salmon and snipped chives on the top.
                                                    <a class="fp_inline_btn"> Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div  class="fp_box">
                                            <div class="inner">
                                                <h3>
                                                    Head on prawns, manila clams &  mussels
                                                    <span class="fp_price">$39</span>
                                                </h3>
                                                <div class="menu_description">
                                                    These small shellfish have a sweet flavour and a firm texture.
                                                    <a class="fp_inline_btn"> Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div  class="fp_box">
                                            <div class="inner">
                                                <h3>
                                                    Lamb Chops Sizzled with Garlic
                                                    <span class="fp_price">$45</span>
                                                </h3>
                                                <div class="menu_description">
                                                    <a class="fp_inline_btn"> Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div  class="fp_box">
                                            <div class="inner">
                                                <h3>
                                                    Salad With Vegetables
                                                    <span class="fp_price">$22</span>
                                                </h3>
                                                <div class="menu_description">
                                                    Cashew Chicken With Stir-Fry Vegetables served with green salad, sprouts and stewed mushrooms.
                                                    <a class="fp_inline_btn"> Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div  class="fp_box">
                                            <div class="inner">
                                                <h3>
                                                    Smoked Paprika Hummus
                                                    <span class="fp_price">$19</span>
                                                </h3>
                                                <div class="menu_description">
                                                    Optional garnishes: roasted red bell peppers, roasted garlic, lemon slices, olives, mint or parsley sprigs
                                                    <a class="fp_inline_btn"> Read More</a>
                                                </div>
                                            </div>
                                        </div><div  class="fp_box">
                                            <div class="inner">
                                                <h3>
                                                    Spicy Vegan Potato Curry
                                                    <span class="fp_price">$28</span>
                                                </h3>
                                                <div class="menu_description">
                                                    Onion, garlic, turmeric, cumin, coriander, tomato, potato, carrot, red pepper, chili, coconut milk.
                                                    <a class="fp_inline_btn"> Read More</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <h2>
                                    Lunch
                                </h2>
                                <div  class="fp_box">
                                    <div class="inner">
                                        <h3>
                                            Alder Grilled Chinook Salmon
                                            <span class="fp_price">$33</span>
                                        </h3>
                                        <div class="menu_description">
                                            Candied salmon, basil potato puree, baby kale marsala eggplant confit & balsamic butter sauce.
                                            <a class="fp_inline_btn"> Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div  class="fp_box">
                                    <div class="inner">
                                        <h3>
                                            Alder grilled seafood paella
                                            <span class="fp_price">$37</span>
                                        </h3>
                                        <div class="menu_description">
                                            Shell-on king prawns, monkfish, onion, paella rice, garlic, smoked paprika, cayenne pepper (optional), saffron, tomatoes, mussels, peas, broad beans, ...
                                            <a class="fp_inline_btn"> Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div  class="fp_box">
                                    <div class="inner">
                                        <h3>
                                            Asian chicken & vegetable stir fry
                                            <span class="fp_price">$41</span>
                                        </h3>
                                        <div class="menu_description">
                                            Chicken breast, cornstarch, soy sauce, garlic, minced, potatoes, onion, bell pepper, carrot, green beans (aka Baguio beans)
                                            <a class="fp_inline_btn"> Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div  class="fp_box">
                                    <div class="inner">
                                        <h3>
                                            Creamy smoked salmon, leek & potato  soup
                                            <span class="fp_price">$9.50</span>
                                        </h3>
                                        <div class="menu_description">
                                            Served in deep bowls with smoked salmon and snipped chives on the top.
                                            <a class="fp_inline_btn"> Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div  class="fp_box">
                                    <div class="inner">
                                        <h3>
                                            Head on prawns, manila clams & mussels
                                            <span class="fp_price">$39</span>
                                        </h3>
                                        <div class="menu_description">
                                            These small shellfish have a sweet flavour and a firm texture.                                        
                                        </div>
                                    </div>
                                </div>
                                <div  class="fp_box">
                                    <div class="inner">
                                        <h3>
                                            Lamb Chops Sizzled with Garlic
                                            <span class="fp_price">$45</span>
                                        </h3>
                                        <div class="menu_description">
                                            <a class="fp_inline_btn"> Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div  class="fp_box">
                                    <div class="inner">
                                        <h3>
                                            Smoked Paprika Hummus
                                            <span class="fp_price">$19</span>
                                        </h3>
                                        <div class="menu_description">
                                            Optional garnishes: roasted red bell peppers, roasted garlic, lemon slices, olives, mint or parsley sprigs
                                            <a class="fp_inline_btn"> Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div  class="fp_box">
                                    <div class="inner">
                                        <h3>
                                            Spicy Vegan Potato Curry
                                            <span class="fp_price">$28</span>
                                        </h3>
                                        <div class="menu_description">
                                            Onion, garlic, turmeric, cumin, coriander, tomato, potato, carrot, red pepper, chili, coconut milk.
                                            <a class="fp_inline_btn"> Read More</a>
                                        </div>
                                    </div>
                                </div>     
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>