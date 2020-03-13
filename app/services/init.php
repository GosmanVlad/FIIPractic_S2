<?php

session_start();

include __DIR__ . '/../classes/Product.php';
include __DIR__ . '/helpers.php';

$products = [];

array_push($products, new Product(14, 'Alune', 1.56, 'https://images.unsplash.com/photo-1508779018996-601e37fa274e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80'));
array_push($products, new Product(4, 'Lapte', 3, 'https://images.unsplash.com/photo-1550583724-b2692b85b150?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80'));
array_push($products, new Product(8, 'Tenisi', 15.99, 'https://images.unsplash.com/photo-1512374382149-233c42b6a83b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=675&q=80'));
array_push($products, new Product(144, 'Ceai', 2.89, 'https://images.unsplash.com/photo-1536998003793-b13c28fae74b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=701&q=80'));

