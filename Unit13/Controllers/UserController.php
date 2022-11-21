<?php
    require_once "./Models/User.php";
    class UserController {
        public function index(){
            $model = new User();
            $users = $model->getAll();
            // echo "<pre>";
            //     print_r($categories);
            // echo "</pre>";
            // echo 'lits category';
        
            require_once "./Views/users/list.php";
        }
    }
?>