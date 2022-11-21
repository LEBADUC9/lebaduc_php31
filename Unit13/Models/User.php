<?php
    require_once 'Connection.php';
    require_once 'Model.php';
    class User extends Model {
        // public $conn;
        // function __construct()
        // {
        //     $connection = new Connection();
        //     $this->conn = $connection->conn;
        // }
        // public function getAll()
        // {
        //     $query = "SELECT * FROM users";
        //     $result = $this->conn->query($query);
        //     $users = array();
        //     while($row = $result->fetch_assoc()){
        //         $users[] = $row;
        //     }
        //     return $users;
        // }
        public $table = "users";
    }
?>