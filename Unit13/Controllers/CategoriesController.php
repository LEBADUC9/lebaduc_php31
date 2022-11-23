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
                header('location: index.php?mod=categories&act=create');
                
            }
        }
        public function delete(){
            $model = new Category();
            $id = isset($_GET['id'])?$_GET['id']:0;
            // var_dump($id);
            // die();
            $status = $model->delete($id);
            if($status == true){
                header('location: index.php?mod=categories&act=index');
            }
        }
        public function show(){
            $model = new Category();
            $id = isset($_GET['id'])?$_GET['id']:0;
            $category = $model->show($id);
            
            require_once "./Views/categories/detail.php";
            
        }
        public function edit(){
            $model = new Category();
            $id = isset($_GET['id'])?$_GET['id']:0;
            $category = $model->show($id);
            
            require_once "./Views/categories/edit.php";
        }
        public function update(){
            $model = new Category();
            $status = $model->update();
            header('location: index.php?mod=categories&act=index');
        }
    }
    
    
?>
