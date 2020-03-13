<?php
    include __DIR__ . '/../services/init.php';
?>
<html>
    <head>
        <title>Cart</title>
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
        <a href="index.php">Vezi produsele</a>
        <h1> Cos de cumparaturi: </h1>
        <?php
        $cart = [];
        if (isset($_SESSION['cart'])) {
            $cart = $_SESSION['cart'];
        }
        foreach($cart as $item) {
            $product = getProductById($products, $item);
        ?>
            <div class="product__container">
                <img class="product__image" src="<?php echo $product->getImage(); ?>" />
                <p><?php echo $product->getName(); ?> </p>
                <p>Pret: <?php echo $product->printPrice(); ?> </p>
                <form action="remove-from-cart.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $product->getId(); ?>" />
                    <button type="submit">Remove from cart</button>
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