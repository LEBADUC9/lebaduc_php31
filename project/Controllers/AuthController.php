<?php
    require_once "./Controllers/BaseController.php";
    require_once "./Controllers/UserController.php";
    class AuthController extends BaseController {
        public function login(){
            $this->view("/auth/login.php",[]);
        }
        public function handleLogin(){
            // var_dump($_POST);
            //     die();
            $user = new User();
            if($user->checkLogin($_POST['email'], $_POST['password'])){
                $this->redirect("index.php?mod=index&act=index");
                
            } else{
                $this->redirect("index.php?mod=auth&act=login");
                setcookie('checkLogin', 'Đăng nhập không thành công!', time() + 10 );
                // var_dump($_COOKIE['checkLogin']);
                // die();
            }
        }
        public function logout(){
            unset($_SESSION['auth']);
            $this->redirect("index.php?mod=auth&act=login");
        }
    }
?>