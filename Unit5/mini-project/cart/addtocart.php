<?php
    session_start();
    if(isset($_SESSION['products'])){
        $products = $_SESSION['products'];
    }
    if(isset($_GET['id'])){
        $key = $_GET['id'];
    }
    echo "<pre>";
        $_GET['id'];
    echo "</pre>";
    $product = $products[$key];
    $product['product_amount'] = 1;

    $_SESSION['cart'][] = $product;
    header('location: cart.php');
    
?>