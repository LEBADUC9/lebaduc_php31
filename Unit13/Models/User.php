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
            // var_dump($email);
            // die();
            $users = $this->where(["email" => $email, "password" => $password]);
            // echo "<>"
            //  var_dump($users);
            // die();
            // if(!isset($users[0])){
           
            //     return false;
            // }
            // $users = $users[0];
            
            if(count($users) > 0){
                $_SESSION['auth'] = [
                    'id' => $users[0]['id'],
                    'name' => $users[0]['name']
                ];
                // var_dump($users);
                // echo "<pre>";
                //     print_r($_SESSION['auth']);
                // echo "</pre>";
                // die();
                return true;
            }else{
                return false;
            }
            
        }
        
    }
    // class User extends Model{
    //     public $table = "users";
    //     public function checkLogin($email, $password){
    //         $users->this->where(["email" => $email, "password" => $password]);
    //         $users = $users[0];
    //         if(count($users) > 0){
    //             $_SESSION['auth'] = [
    //                 'id' => $users['id'],
    //                 'name' => $users['name']
    //             ];
    //             return true;
    //         }else{
    //             return false;
    //         }
    //     }
    // }
?>
