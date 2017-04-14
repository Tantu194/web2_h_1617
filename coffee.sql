-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 14, 2017 lúc 04:47 SA
-- Phiên bản máy phục vụ: 5.7.11
-- Phiên bản PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web2_h_1617`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coffee_category`
--

CREATE TABLE `coffee_category` (
  `coffee_categoryID` int(11) NOT NULL,
  `coffee_categoryName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `coffee_category`
--

INSERT INTO `coffee_category` (`coffee_categoryID`, `coffee_categoryName`) VALUES
(1, 'RECIPES'),
(2, 'TIPS & TRICKS'),
(3, 'HEALTHY FOOD'),
(4, 'COOKING');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coffee_details`
--

CREATE TABLE `coffee_details` (
  `coffee_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coffee_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coffee_phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coffee_mail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `coffee_details`
--

INSERT INTO `coffee_details` (`coffee_name`, `coffee_description`, `coffee_phone`, `coffee_mail`) VALUES
('About', 'Osteria Francescana is a restaurant owned and run by chef Massimo Bottura in Modena, Italy', NULL, NULL),
('Contacts', 'Via Stella, 22\r\nModena MO, Italy', '+390 59 223 912', 'hello@yoursite.com'),
('Get in touch', '', '+359 562 958', 'hello@yoursite.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coffee_event`
--

CREATE TABLE `coffee_event` (
  `coffee_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coffee_timeStart` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coffee_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coffee_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coffee_id` int(11) NOT NULL,
  `coffee_image` blob
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `coffee_event`
--

INSERT INTO `coffee_event` (`coffee_name`, `coffee_timeStart`, `coffee_description`, `coffee_contact`, `coffee_id`, `coffee_image`) VALUES
('Happy hour', 'Starts at 3pm', 'The restaurant will open at 3pm for happy hour and dinner service starting at 5pm. We will continue to offer brunch on weekends from 10am-3pm with bottomless mimosas. We will also continue with our late night lounge on Friday and Saturdays until 2am.', '+359 562 958', 1, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coffee_menu`
--

CREATE TABLE `coffee_menu` (
  `coffee_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coffee_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coffee_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coffee_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coffee_id` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `coffee_menu`
--

INSERT INTO `coffee_menu` (`coffee_name`, `coffee_description`, `coffee_price`, `coffee_status`, `coffee_id`) VALUES
('Antioxidant Fruits Mix', '', '8', 'Breakfast', 1),
('Blueberry banana pancakes', 'Banana, almond milk, vanilla, cinnamon, blueberry topping', '5', 'Breakfast', 2),
('Fig and lemon cake', '', '7', 'Breakfast', 3),
('Home made bread', '', '3 each', 'Breakfast', 4),
('Pain au chocolat', 'Beautiful homemade croissants, each containing a bar of high-quality dark chocolate, make for an impressive and indulgent addition to ...', '4', 'Breakfast', 5),
('Sun-Dried Tomato Bruschetta', '', '7', 'Breakfast', 6),
('Sun-Dried Tomato Bruschetta', '', '7', 'Breakfast', 7),
('Traditional pancakes with maple syrup butter & berry jam', '\r\nMilk, eggs, strawberries, butter, maple syrup', '5', 'Breakfast', 8),
('Alder Grilled Chinook Salmon', 'Candied salmon, basil potato puree, baby kale marsala eggplant confit & balsamic butter sauce.', '33', 'Dinner', 9),
('Alder grilled seafood paella', 'Shell-on king prawns, monkfish, onion, paella rice, garlic, smoked paprika, cayenne pepper (optional), saffron, tomatoes, mussels, peas, broad beans, ...', '37', 'Dinner', 10),
('Asian chicken & vegetable stir fry', 'Chicken breast, cornstarch, soy sauce, garlic, minced, potatoes, onion, bell pepper, carrot, green beans (aka Baguio beans)', '41', 'Dinner', 11),
('Creamy smoked salmon, leek & potato soup', 'Served in deep bowls with smoked salmon and snipped chives on the top.', '9.50', 'Dinner', 12),
('Head on prawns, manila clams & mussels', 'These small shellfish have a sweet flavour and a firm texture.', '39', 'Dinner', 13),
('Lamb Chops Sizzled with Garlic', '', '45', 'Dinner', 14),
('Salad With Vegetables', 'Cashew Chicken With Stir-Fry Vegetables served with green salad, sprouts and stewed mushrooms.', '22', 'Dinner', 15),
('Smoked Paprika Hummus', 'Optional garnishes: roasted red bell peppers, roasted garlic, lemon slices, olives, mint or parsley sprigs.', '19', 'Dinner', 16),
('Spicy Vegan Potato Curry', 'Onion, garlic, turmeric, cumin, coriander, tomato, potato, carrot, red pepper, chili, coconut milk.', '28', 'Dinner', 17),
('Antioxidant Fruits Mix', '', '8', 'Dessert', 18),
('Berries and creme tart', 'Butter crust, vanilla pudding with heavy cream, topping with fresh raspberries, blueberries, cranberry.', '7', 'Dessert', 19),
('Blueberry banana pancakes', 'Banana, almond milk, vanilla, cinnamon, blueberry topping', '5', 'Dessert', 20),
('Blueberry Sweet Rolls with Lemon Glaze', 'Butter, blueberries, lemon, heavy cream - an irresistible sweet-sour combination of tastes.', '7', 'Dessert', 21),
('Chocolate Cherry Cake with Meringue Butter Cream', 'Vanilla, milk, dark chocolate, cherries, eggs, butter', '8', 'Dessert', 22),
('Classic Blueberry Pie', 'Pastry, cinnamon, blueberries, lemon juice', '6', 'Dessert', 23),
('Creamy mascarpone cake with passion fruit sauce', '', '8', 'Dessert', 24),
('Fig and lemon cake', '', '7', 'Dessert', 25),
('Traditional pancakes with maple syrup butter & berry jam', 'Milk, eggs, strawberries, butter, maple syrup', '5', 'Dessert', 26),
('American Brunch Combo Menu', 'Freshly scrambled eggs with applewood smoked bacon, tomatoes, green onions and cheddar cheese.', '15', 'Brunch', 27),
('Blueberry banana pancakes', 'Banana, almond milk, vanilla, cinnamon, blueberry topping', '5', 'Brunch', 28),
('Cashew Chicken With Stir-Fry Vegetables & Green Salad', 'Cashew Chicken With Stir-Fry Vegetables served with green salad, sprouts and stewed mushrooms.', '22', 'Brunch', 29),
('Coffee & Strawberry Jam French Toast with Strawberry Butter Combo Menu', 'Hot coffee in the company of fresh bread toast topped with homemade strawberry butter, warm maple syrup, and fresh ...', '11', 'Brunch', 30),
('Coffee and Pain au chocolat (Chocolate croissant) Combo Menu', 'Hot coffee in the company of Beautiful homemade croissants, each containing a bar of high-quality dark chocolate, make for ...', '11', 'Brunch', 31),
('French Toast with Strawberry Jam', 'Hot coffee in the company of fresh bread toast topped with homemade strawberry butter, warm maple syrup, and fresh ...', '11', 'Brunch', 32),
('Optic Big Breakfast Combo Menu', '', '20', 'Brunch', 33),
('Optic Big Salad Combo', '', '20', 'Brunch', 34),
('Pain au chocolat', 'Beautiful homemade croissants, each containing a bar of high-quality dark chocolate, make for an impressive and indulgent addition to ...', '4', 'Brunch', 35),
('Salad With Vegetables', 'Cashew Chicken With Stir-Fry Vegetables served with green salad, sprouts and stewed mushrooms.', '22', 'Brunch', 36),
('Traditional pancakes with maple syrup butter & berry jam', 'Milk, eggs, strawberries, butter, maple syrup', '5', 'Brunch', 37),
('Alder Grilled Chinook Salmon', 'Candied salmon, basil potato puree, baby kale marsala eggplant confit & balsamic butter sauce.', '33', 'Lunch', 38),
('Alder grilled seafood paella', 'Shell-on king prawns, monkfish, onion, paella rice, garlic, smoked paprika, cayenne pepper (optional), saffron, tomatoes, mussels, peas, broad beans, ...', '37', 'Lunch', 39),
('Asian chicken & vegetable stir fry', 'Chicken breast, cornstarch, soy sauce, garlic, minced, potatoes, onion, bell pepper, carrot, green beans (aka Baguio beans)', '41', 'Lunch', 40),
('Creamy smoked salmon, leek & potato soup', 'Served in deep bowls with smoked salmon and snipped chives on the top.', '9.50', 'Lunch', 41),
('Head on prawns, manila clams & mussels', 'These small shellfish have a sweet flavour and a firm texture.', '39', 'Lunch', 42),
('Lamb Chops Sizzled with Garlic', '', '45', 'Lunch', 43),
('Smoked Paprika Hummus', 'Optional garnishes: roasted red bell peppers, roasted garlic, lemon slices, olives, mint or parsley sprigs', '39', 'Lunch', 44),
('Spicy Vegan Potato Curry', 'Onion, garlic, turmeric, cumin, coriander, tomato, potato, carrot, red pepper, chili, coconut milk.', '28', 'Lunch', 45),
('Aperol Spritz', 'Ice and slice of orange, prosecco, aperol, soda', '7.90', 'Drinks', 46),
('Caffe Latte', 'A Latte is a coffee drink made with espresso and steamed milk.', '5.90', 'Drinks', 47),
('Caffè macchiato', 'An espresso coffee drink with a small amount of milk, usually foamed.', '5.90', 'Drinks', 48),
('Campari', 'Campari\'s bracing bitterness and lush grapefruit notes are refreshing when mixed simply with soda, drunk before dinner to awaken ...', '6.90', 'Drinks', 49),
('Cappuccino', 'A cappuccino is an Italian coffee drink that is traditionally prepared with espresso, hot milk, and steamed milk foam.', '5.90', 'Drinks', 50),
('Stoneburn Pinot Noir 2013, Marlborough, New Zealand', 'Wonderful flavours of soft plums and raspberry, it has the depth and body to satisfy any Pinot Noir lover.', '13.90', 'Drinks', 51),
('Tormentoso Bush Vine Pintoage', 'Ruby centre with a bright rim, this wine has typical Pinotage aromas of black cherries. On the palate, you’ll ...', '11.90', 'Drinks', 52);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coffee_news`
--

CREATE TABLE `coffee_news` (
  `coffee_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coffee_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coffee_id` int(11) NOT NULL,
  `coffee_category` int(11) NOT NULL,
  `coffee_tag` int(11) NOT NULL,
  `coffee_creator` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coffee_timePost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coffee_countComment` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coffee_offers`
--

CREATE TABLE `coffee_offers` (
  `coffee_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coffee_id` int(11) NOT NULL,
  `coffee_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coffee_image` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coffee_opentime`
--

CREATE TABLE `coffee_opentime` (
  `coffee_dayofweek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coffee_timeopen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coffee_timeclose` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coffee_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coffee_portfolios`
--

CREATE TABLE `coffee_portfolios` (
  `coffee_id` int(11) NOT NULL,
  `coffee_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coffee_portfolio_items`
--

CREATE TABLE `coffee_portfolio_items` (
  `coffee_id` int(11) NOT NULL,
  `coffee_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coffee_image` blob NOT NULL,
  `coffee_portfolio` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coffee_products`
--

CREATE TABLE `coffee_products` (
  `coffee_id` int(11) NOT NULL,
  `coffee_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coffee_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coffee_image` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coffee_section`
--

CREATE TABLE `coffee_section` (
  `coffee_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coffee_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coffee_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coffee_subcribles`
--

CREATE TABLE `coffee_subcribles` (
  `coffee_usermail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coffee_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coffee_tags`
--

CREATE TABLE `coffee_tags` (
  `coffee_tagID` int(11) NOT NULL,
  `coffee_tagName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `coffee_category`
--
ALTER TABLE `coffee_category`
  ADD PRIMARY KEY (`coffee_categoryID`);

--
-- Chỉ mục cho bảng `coffee_event`
--
ALTER TABLE `coffee_event`
  ADD PRIMARY KEY (`coffee_id`);

--
-- Chỉ mục cho bảng `coffee_menu`
--
ALTER TABLE `coffee_menu`
  ADD PRIMARY KEY (`coffee_id`);

--
-- Chỉ mục cho bảng `coffee_news`
--
ALTER TABLE `coffee_news`
  ADD PRIMARY KEY (`coffee_id`);

--
-- Chỉ mục cho bảng `coffee_offers`
--
ALTER TABLE `coffee_offers`
  ADD PRIMARY KEY (`coffee_id`);

--
-- Chỉ mục cho bảng `coffee_opentime`
--
ALTER TABLE `coffee_opentime`
  ADD PRIMARY KEY (`coffee_id`);

--
-- Chỉ mục cho bảng `coffee_portfolios`
--
ALTER TABLE `coffee_portfolios`
  ADD PRIMARY KEY (`coffee_id`);

--
-- Chỉ mục cho bảng `coffee_portfolio_items`
--
ALTER TABLE `coffee_portfolio_items`
  ADD PRIMARY KEY (`coffee_id`);

--
-- Chỉ mục cho bảng `coffee_products`
--
ALTER TABLE `coffee_products`
  ADD PRIMARY KEY (`coffee_id`);

--
-- Chỉ mục cho bảng `coffee_section`
--
ALTER TABLE `coffee_section`
  ADD PRIMARY KEY (`coffee_id`);

--
-- Chỉ mục cho bảng `coffee_subcribles`
--
ALTER TABLE `coffee_subcribles`
  ADD PRIMARY KEY (`coffee_id`);

--
-- Chỉ mục cho bảng `coffee_tags`
--
ALTER TABLE `coffee_tags`
  ADD PRIMARY KEY (`coffee_tagID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `coffee_category`
--
ALTER TABLE `coffee_category`
  MODIFY `coffee_categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `coffee_event`
--
ALTER TABLE `coffee_event`
  MODIFY `coffee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `coffee_menu`
--
ALTER TABLE `coffee_menu`
  MODIFY `coffee_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT cho bảng `coffee_portfolios`
--
ALTER TABLE `coffee_portfolios`
  MODIFY `coffee_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `coffee_portfolio_items`
--
ALTER TABLE `coffee_portfolio_items`
  MODIFY `coffee_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
