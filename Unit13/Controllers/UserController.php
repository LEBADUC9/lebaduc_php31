<?php
    require_once "./Models/User.php";
    require_once "./Controllers/BaseController.php";
    class UserController extends BaseController {
        public function index(){
            $model = new User();
            $users = $model->getAll();
            // echo "<pre>";
            //     print_r($categories);
            // echo "</pre>";
            // echo 'lits category';
        
            // require_once "./Views/users/list.php";
            $this->view("/users/list.php",[
                "users" => $users
            ]);
            // echo "<pre>";
            //     print_r($users);
            // echo "</pre>";
            $size = "large";
            $var_array = array("color" => "blue", "size"  => "medium", "shape" => "sphere");
            extract($var_array, EXTR_PREFIX_SAME, "wddx");

            echo "$color, $size, $shape, $wddx_size";
        }
    }
?>
