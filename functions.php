<?php
include('./database/DBcontroller.php');
include('./database/Product.php');

$db = new DBcontroller();
$product = new Product($db);