<?php
    require_once 'Connection.php';
    class Model {
        public $conn;
        function __construct()
        {
            $connection = new Connection();
            $this->conn = $connection->conn;
        }
        public function getAll()
        {
            $query = "SELECT * FROM " . $this->table;
            $result = $this->conn->query($query);
            $items = array();
            while($row = $result->fetch_assoc()){
                $items[] = $row;
            }
            return $items;
        }
    }
?>