<?php
    session_start();
    $productInCart = $_SESSION['cart'];
    $products = $_SESSION['products'];
    $key = $_GET['id'];
    echo"<pre>";
        print_r($productInCart);
    echo "</pre>";
    $productInCart[$key]['product_amount'] += 1;
    $product['product_amount'] = $productInCart[$key]['product_amount'];
    var_dump($product['product_amount']);
    // header('location: cart.php');
?>