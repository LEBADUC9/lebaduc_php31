<?php
    require_once "./Models/Category.php";
    require_once "./Models/Posts.php";
    require_once "./Controllers/AdminController.php";
    // require_once "./Controllers/BaseController.php";
    class IndexController extends AdminController {
        public function index(){
            $model = new Category();
            $categories = $model->getAll();
            $outstandingCate = $model->getOutstandingCate();
            $model = new Posts();
            $outstanding = $model->getOutstanding();
            // echo "<pre>";
            //     print_r($outstanding);
            // echo "</pre>";
            // die();
            require_once "./Views/admin/index.php";
            // $this->view("/categories/list.php",[
            //     'categories' => $categories
            // ]);
        }
    }
?>