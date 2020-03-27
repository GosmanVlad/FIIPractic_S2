<?php
    include __DIR__ . '/../services/init.php';
    include __DIR__ . '/../services/mysql.php';
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
        <a href="<?php echo ''.URL.'' ?>">Vezi produsele</a>
        <h1> Cos de cumparaturi: </h1>
        <?php
        $cart = [];
        if (isset($_SESSION['cart'])) {
            $cart = $_SESSION['cart'];
        }
        foreach($cart as $item) {
            $cart = $conn->prepare("SELECT * FROM products WHERE id = '$item'");
            $cart->setFetchMode(PDO::FETCH_ASSOC);
            $cart->fetchAll();
            $cart->execute();
            
            foreach($cart as $row) {
        ?>
            <div class="product__container">
                <img class="product__image" src="<?php echo $row['image']; ?>" />
                <p><?php echo $row['name']; ?> </p>
                <p>Pret: <?php echo $row['price']; ?> </p>
                <form action="remove-from-cart" method="POST">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                    <button type="submit">Remove from cart</button>
                </form>
            </div>
        <?php
        }
        }
        ?>

        <?php
            printSession();
            printCookies();
        ?>
    </body>
</html>