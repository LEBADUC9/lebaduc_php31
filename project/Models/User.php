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
        public function checkLogin($email, $password){
            $users = $this->where(["email" => $email, "password" => $password]);
            if(count($users) > 0){
                $_SESSION['auth'] = [
                    'id' => $users[0]['id'],
                    'name' => $users[0]['name1']
                ];
                return true;
            }else{
                return false;
            }
        }
    }
?>
