--
-- Table structure for table `clothes product`
--

-- CREATE TABLE `product`(
--     `item_id` int unsigned NOT NULL auto_increment primary key,
--     `item_description` varchar(255) NOT NULL,
--     `item_price` double(10,2) NOT NULL,
--     `item_discount` int DEFAULT NULL,
--     `item_image` varchar(255) DEFAULT NULL,
--     `item_register` datetime DEFAULT NULL,
--     `item_catagory` varchar(255) NOT NULL,
--     `item_quantity` int NOT NULL
-- )ENGINE=innoDB;

--
-- Dumping data into table `clothes product`
--
INSERT INTO `product`(`item_description`,`item_price`,`item_discount`,`item_image`,`item_register`, `item_catagory`,`item_quantity`) VALUES
("Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, at.", 20.5, 50,null,null, 'cloth', 50),
("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.", 50.5, 20,null,null, 'cloth', 100);