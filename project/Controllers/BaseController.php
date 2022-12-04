<?php
    class BaseController {
        public function redirect($url){
            header('location: ' . $url);
        }
        public function view($path, $data){
            extract($data);
            require_once "./Views/admin". $path;
        }
        // public function getid($id){
        //     $id = isset($_GET['id'])?$_GET['id']:0;
        //     return $id;
        // }
    }
?>
