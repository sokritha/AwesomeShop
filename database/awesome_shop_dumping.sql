--
-- Dumping data into table `Features`
--
INSERT INTO `features`(`id`,`title`,`description`,`image`) VALUES
(1, 'Shop your designer dresses', "Ready to wear dresses tailored for you from online. Hurry up while stock lasts.", './public/images/background-img.jpg');

--
-- Dumping data into table `Categories`
--
INSERT INTO `categories`(`id`,`name`,`icon`,`parent_id`) VALUES
(1, 'Electronics','./public/images/laptop.png', 1),
(2, 'Handbags','./public/images/handbag.png', 2),
(3, 'Wallet','./public/images/wallet.png', 3),
(4, 'Clothes','./public/images/tshirt.png', 4);

--
-- Dumping data into table `Products`
--
INSERT INTO `products`(`id`,`name`,`price`,`amount`,`discount`, `description`,`category_id`) VALUES
(1, "Tshirt", 12.3, 20, 10, "lorem ipsum lorem ipsum lorem ipsum lorem ispsum", 1),
(2, "Tshirt", 15, 20, 20, "lorem ipsum lorem ipsum lorem ipsum.", 1);