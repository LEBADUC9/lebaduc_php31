<?php
    require_once "./Models/Category.php";
    require_once "./Controllers/AdminController.php";
    class CategoryController extends AdminController {
        public function index(){
            $model = new Category();
            $categories = $model->getAll();
            
        
            // require_once "./Views/categories/list.php";
            $this->view("/categories/list.php",[
                'categories' => $categories
            ]);
            
        }
        public function create(){
            // require_once "./Views/categories/create.php";
            $this->view("/categories/create.php",[
                // "data" => $data
            ]);
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
                // header('location: index.php?mod=categories&act=index');
                $this->redirect("index.php?mod=categories&act=index");
            } else{
                // header('location: index.php?mod=categories&act=create');
                $this->redirect("index.php?mod=categories&act=create");
            }
        }
        public function delete(){
            $model = new Category();
            $id = isset($_GET['id'])?$_GET['id']:0;
            // $this->getid();
            // var_dump($id);
            // die();
            $status = $model->delete($id);
            if($status == true){
                // header('location: index.php?mod=categories&act=index');
                $this->redirect("index.php?mod=categories&act=index");
            }
        }
        public function show(){
            $model = new Category();
            $id = isset($_GET['id'])?$_GET['id']:0;
            $category = $model->show($id);
            
            // require_once "./Views/categories/detail.php";
            $this->view("/categories/detail.php",[
                'category' => $category
            ]);
            
        }
        public function edit(){
            $model = new Category();
            $id = isset($_GET['id'])?$_GET['id']:0;
            $category = $model->show($id);
            
            // require_once "./Views/categories/edit.php";
            $this->view("/categories/edit.php",[
                'category' => $category
            ]);
        }
        public function update($data){
            $model = new Category();
            $status = $model->update($data);
            // header('location: index.php?mod=categories&act=index');
            $this->redirect("index.php?mod=categories&act=index");
        }
    }
    
    
?>
