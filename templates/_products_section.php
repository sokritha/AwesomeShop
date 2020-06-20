<?php
$product_shuffle = $product->getData();
?>
<main>
    <section id="category-section">
        <ul class="list-category">
            <li>
                <img src="./public/images/laptop.png" alt="laptop" />
                <a href="#">Electronics</a>
            </li>
            <li>
                <img src="./public/images/handbag.png" alt="laptop" />
                <a href="#">Handbags</a>
            </li>
            <li>
                <img src="./public/images/wallet.png" alt="laptop" />
                <a href="#">Wallet</a>
            </li>
            <li>
                <img src="./public/images/tshirt.png" alt="laptop" />
                <a href="#">Clothes</a>
            </li>
        </ul>
    </section>

    <section id="products-section">
        <?php foreach ($product_shuffle as $eachProduct) { ?>
        <div class="product">

            <div class="discount"><span><?php echo $eachProduct['item_discount'] ?>%</span></div>
            <img src="<?php echo $eachProduct['item_image'] ?? "./public/images/bag.png" ?>" alt="tshirt" />
            <p>
                <?php echo $eachProduct['item_description'] ?? "Unknown" ?>
            </p>
            <div class="price-cart">
                <div class="price">
                    <p class="initial-price"><?php echo $eachProduct['item_price'] ?></p>
                    <p class="after-price">$12</p>
                </div>
                <button class="btn btn-cart">
                    <i class="fas fa-shopping-cart cart-icon"></i>Cart
                </button>
            </div>
        </div>
        <?php } ?>
    </section>
</main>