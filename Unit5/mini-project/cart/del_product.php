<?php
    session_start();
    $key = $_GET['id'];
    unset($_SESSION['cart'][$key]);
    // var_dump($_SESSION['cart']);
    header('location: cart.php');
?>