<?php
    include __DIR__ . '/../services/init.php';
    include __DIR__ . '/../services/mysql.php';

    $statement = $conn->prepare("SELECT * FROM products ORDER BY id DESC");
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $statement->fetchAll();
    $statement->execute();
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
        <a href="cart">Vezi cosul</a>
        <p> Currency: </p>
        <?php 
            buildLangForm('en');
            buildLangForm('ro');
        ?>
        <h1> Produse: </h1>
        <?php
        foreach($statement as $row) {
        ?>
            <div class="product__container">
                <img class="product__image" src="<?php echo $row['image']; ?>" />
                <p><?php echo $row['name']; ?> </p>
                <p>Pret: <?php echo printPrice($row['price']); ?> </p>
                <form action="add-to-cart" method="POST">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
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