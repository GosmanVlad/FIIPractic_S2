<?php
    include __DIR__ . '/../services/init.php';
?>
<html>
    <head>
        <title>Products</title>
        <style>
            .product__container {
                border: 1px solid #d3d3d3;
                display: inline-block;
            }
            .product__image {
                max-height: 200px;
                max-width: auto;
            }
        </style>
    </head>
    <body>
        <a href="cart.php">Vezi cosul</a>
        <p> Currency: </p>
        <?php 
            buildLangForm('en');
            buildLangForm('ro');
        ?>
        <h1> Produse: </h1>
        <?php
        foreach($products as $product) {
        ?>
            <div class="product__container">
                <img class="product__image" src="<?php echo $product->getImage(); ?>" />
                <p><?php echo $product->getName(); ?> </p>
                <p>Pret: <?php echo $product->printPrice(); ?> </p>
                <form action="add-to-cart.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $product->getId(); ?>" />
                    <button type="submit">Add To Card</button>
                </form>
            </div>
        <?php
        }
        ?>

        <?php
            printSession();
            printCookies();
        ?>
    </body>
</html>