<?php
    echo $currentPage;
?>

<div class="navbar-container">
    <ul class="navbar">
        <li class="navbar-item <?php if ($currentPage === 'index') { echo 'navbar-item--selected'; };?>"><a href="index.php">Home</a></li>
        <li class="navbar-item <?php if ($currentPage === 'products') { echo 'navbar-item--selected'; };?>"><a href="products.php">Products</a></li>
        <li class="navbar-item <?php if ($currentPage === 'contact') { echo 'navbar-item--selected'; };?>"><a href="contact.php">Contact</a></li>
        <li class="navbar-item <?php if ($currentPage === 'about') { echo 'navbar-item--selected'; };?>"><a href="about.php">About us</a></li>
    </ul>
</div>