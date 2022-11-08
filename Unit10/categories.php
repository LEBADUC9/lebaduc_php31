<?php
    require_once('connection.php');
    $sql = "SELECT * FROM categories";
    $result = $conn->query($sql);
    $categories = array();
    while($row = $result->fetch_assoc()){
        $categories[] = $row;
    };
    echo "<pre>";
        print_r($categories);
    echo "</pre>";
    header('location: index.php');

?>
