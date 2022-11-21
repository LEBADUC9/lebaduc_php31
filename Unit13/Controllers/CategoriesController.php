<?php
    require_once "./Models/Category.php";
    require_once "./Controllers/BaseController.php";
    class CategoriesController extends BaseController {
        public function index(){
            $model = new Category();
            $categories = $model->getAll();
            // echo "<pre>";
            //     print_r($categories);
            // echo "</pre>";
            // echo 'lits category';
        
            // require_once "./Views/categories/list.php";
            $this->view("/categories/list.php",[
                'categories' => $categories
            ]);
        }
        public function create(){
            require_once "./Views/categories/create.php";

        }
        public function store(){
            if(!empty($_POST['name']) && !empty($_POST['description'])){
                $data = $_POST;
            }else{
                echo "Lỗi";
                return false;
            };
            
            
            $model = new Category();
            $status = $model->add($data);
            // var_dump($status);
            // die();
            if($status == true){
                header('location: index.php?mod=categories&act=index');
            } else{
                header('location: index.php?mod=categories&act=index');
                
            }
        }
        public function delete(){
            
        }
    }
    
    
?>
