--
-- Dumping data into table `Features`
--
INSERT INTO `features`(`id`,`title`,`description`,`image`) VALUES
(1, 'Shop your designer dresses', "Ready to wear dresses tailored for you from online. Hurry up while stock lasts.", 'https://images.unsplash.com/photo-1570857502809-08184874388e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=798&q=80');

--
-- Dumping data into table `Categories`
--
INSERT INTO `categories`(`id`,`name`,`icon`,`parent_id`) VALUES
(1, 'Electronics','https://image.flaticon.com/icons/png/512/689/689355.png', 1),
(2, 'Handbags','https://image.flaticon.com/icons/png/512/2136/2136050.png', 2),
(3, 'Wallet','https://image.flaticon.com/icons/png/512/888/888203.png', 3),
(4, 'Clothes','https://image.flaticon.com/icons/png/512/2965/2965310.png', 4);

--
-- Dumping data into table `Products`
--
INSERT INTO `products`(`id`,`name`,`price`,`amount`,`discount`, `description`,`category_id`) VALUES
(1, "Tshirt", 12.3, 20, 10, "lorem ipsum lorem ipsum lorem ipsum lorem ispsum", 1),
(2, "Tshirt", 15, 20, 20, "lorem ipsum lorem ipsum lorem ipsum.", 1);