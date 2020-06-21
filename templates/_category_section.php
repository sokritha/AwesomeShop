<?php
$category = $product->getData('categories');
?>
<main>
    <section id="category-section">
        <ul class="list-category">
            <?php foreach ($category as $foundCategory) { ?>
            <li>
                <img src="<?php echo $foundCategory['icon'] ?>" alt="<?php echo $foundCategory['name'] ?>" />
                <a data-filter="<?php echo $foundCategory['name'] ?>"><?php echo $foundCategory['name'] ?></a>
            </li>
            <?php } ?>
        </ul>
    </section>