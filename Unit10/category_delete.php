<?php
    require_once('connection.php');
    $id = isset($_GET['id'])?$_GET['id']:0;
    $sql = "DELETE  FROM categories WHERE id = $id";
    // var_dump($sql);
    // die();
    $status = $conn->query($sql);
    header('location: index.php');
?>