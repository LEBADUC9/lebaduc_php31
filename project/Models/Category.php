<?php

require_once 'Connection.php';
require_once 'Model.php';
class Category extends Model{
    // public $conn;
    // function __construct()
    // {
    //     $connection = new Connection();
    //     $this->conn = $connection->conn;
    // }
    // public function getAll()
    // {
    //     $query = "SELECT * FROM categories";
    //     $result = $this->conn->query($query);
    //     $categories = array();
    //     while($row = $result->fetch_assoc()){
    //         $categories[] = $row;
    //     }
    //     return $categories;
    // }
    public $table = "categories";
    public function add($data)
    {
       
        $query = "INSERT INTO categories(category_name, category_description) VALUES('$data[name]', '$data[description]') ";
        $status = $this->conn->query($query);
        // var_dump($status);
        //     die();
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
    public function update($data){
        
        $query = "UPDATE categories SET category_name = '{$data['name']}', category_slug =  '{$data['slug']}', category_description =  '{$data['description']}' WHERE id = $data[id]";
        $status = $this->conn->query($query);
    }
    public function getOutstandingCate(){
        $query = "SELECT * FROM categories WHERE id = 1 OR id = 4 OR id = 6";
        $result = $this->conn->query($query);
        $outstandingCate = array();
        while($row = $result->fetch_assoc()){
            $outstandingCate[] = $row;
        }
        return $outstandingCate;
    }
}

?>
