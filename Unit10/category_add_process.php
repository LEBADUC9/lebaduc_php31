<?php
    require('connection.php');
    
    if(!empty($_POST['name']) && !empty($_POST['description'])){
        $data = $_POST;
    }else{
        echo "Lỗi";
        return false;
    };
    // die();
    // var_dump($data);
    $sql = "INSERT INTO categories(name, description) VALUES('$data[name]', '$data[description]')";
    $status = $conn->query($sql);
    if($status == true){
        header('location: index.php');
    } else{
        header('location: category_add.php');
        echo "Chua them duoc";
    }

?>