<?php

require_once 'Connection.php';

class Category{
    public $conn;
    function __construct()
    {
        $connection = new Connection();
        $this->conn = $connection->conn;
    }
    public function getAll()
    {
        $query = "SELECT * FROM categories";
        $result = $this->conn->query($query);
        $categories = array();
        while($row = $result->fetch_assoc()){
            $categories[] = $row;
        }
        return $categories;
    }
    public function add($data)
    {
       
        $query = "INSERT INTO categories(name, description) VALUES('$data[name]', '$data[description]') ";
        $status = $this->conn->query($query);
        return $status;
    }
    public function delete($id){
        
        // var_dump($id);
        // die();
        $query = "DELETE  FROM categories WHERE id = $id";
        $status = $this->conn->query($query);
        return $status;
    }
    public function show($id){
        $query = "SELECT * FROM categories WHERE id = $id";
        $status = $this->conn->query($query);
        $category = $status->fetch_assoc();
        
        return $category;
       
    }
    public function update(){
        if(!empty($_POST)){
            $data = $_POST;
        };
        // var_dump($data);
        // die();
        $query = "UPDATE categories SET name = '{$data['name']}', description =  '{$data['description']}' WHERE id = $data[id]";
        $status = $this->conn->query($query);
    }
}

?>
