<?php
    require('connection.php');
    
    if(!empty($_POST)){
        $data = $_POST;
    };    
    $sql = "UPDATE categories SET name = '{$data['name']}', description =  '{$data['description']}' WHERE id = $data[id]";
    
    // var_dump($sql);
    // die();
    $status = $conn->query($sql);
    if($status == true){
        header('location: index.php');
    } else{
        header('location: category_add.php');
        echo "Chua them duoc";
    }

?>