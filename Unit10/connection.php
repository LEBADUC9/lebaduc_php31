<?php
    $severname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blogs";
    $conn = new mysqli($severname, $username, $password, $dbname);

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . $conn->connect_error;
        exit();

//        return false;
    }

    return $conn;
?>