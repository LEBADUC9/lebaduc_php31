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
    public function delete(){
        $id = isset($_GET['id'])?$_GET['id']:0;
        var_dump($id);
        die();
        $query = "DELETE  FROM categories WHERE id = $id";
    }
}

?>
