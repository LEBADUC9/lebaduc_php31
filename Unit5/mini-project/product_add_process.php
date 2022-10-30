<?php
    session_start();
        $product = $_POST;
        $_SESSION['products'][] = $product;
         header('location: product_list.php');
         
?>
