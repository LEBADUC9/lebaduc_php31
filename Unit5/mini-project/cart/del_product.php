<?php
    session_start();
    $key = $_GET['id'];
    unset($_SESSION['cart'][$key]);
    header('location: cart.php');
?>