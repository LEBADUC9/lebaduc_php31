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
            // var_dump($data);
            // die();
            
            $model = new Category();
            $status = $model->add($data);
            // var_dump($status);
            // die();
            if($status == true){
                // header('location: index.php?mod=categories&act=index');
                $this->redirect("index.php?mod=category&act=index");
            } else{
                // header('location: index.php?mod=categories&act=create');
                $this->redirect("index.php?mod=category&act=create");
            }
            // function uploadFile($inputName, $targetDir, $allowTypes, $maxSize, $overRide){
            //     $uploadStatus = true;
            //     $targetFile = $targetDir . "/" . basename($_FILES[$inputName]['name']);
            //     $errors = array();
            //     $types = "";
                
                
            //     if(is_array($allowTypes)){
            //         foreach($allowTypes as $key => $type){
            //             $types = $type . ",";
        
            //         }
            //     }
            //     $types = trim($types, ",");
                
            //     if(!isset($inputName)){
            //         $errors[]= "Không có dữ liệu file";
            //         $uploadStatus = false;
            //     }
            //     if($_FILES[$inputName]['error'] != 0){
            //         $errors[] = "Dữ liệu upload bị lỗi";
            //         $uploadStatus = false;
                    
            //     }
            //     $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
            //     if(!in_array($imageFileType, $allowTypes)){
            //         $errors[]= "Chỉ được upload các định dạng " . $types;
            //         $uploadStatus = false;
                    
            //     }
                
            //     if($_FILES[$inputName]['size'] > $maxSize*1024*1024){
            //         $errors[] = "Kích thước file không được lớn hơn $maxSize (MB)";
            //         $uploadStatus = false;
            //     };
            //     if(file_exists($targetFile) && $overRide == false){
            //         $errors[] = "Tên file đã tồn tại, không được ghi đè";
            //         $uploadStatus = false;
            //     }
            //     if($uploadStatus){
            //         if(move_uploaded_file($_FILES[$inputName]['tmp_name'], $targetFile)){
            //             return array(true, $targetFile);
            //             echo "upload thành công";
            //         } else{
            //             return array(false, $errors);
            //         }
            //     } else{
            //         return array(false, $errors);
            //     }
            // }
            // $upload = uploadFile('avatar', 'file', array('jpg', 'jpeg', 'png', 'gif'), 1, true);
            // $_SESSION['uploadStatus'] = $upload;
            // header('location: ex1.php');
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
                $this->redirect("index.php?mod=category&act=index");
            }
        }
        public function show(){
            $model = new Category();
            $id = isset($_GET['id'])?$_GET['id']:0;
            $category = $model->show($id);
            
            $_SESSION['category_name'] = $category['category_name'];
            // echo "<pre>";
            //     print_r($_SESSION['category_name']);
            // echo "</pre>";
            // die();
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
        public function update(){
            if(!empty($_POST)){
                $data = $_POST;
            };
            // var_dump($data);
            // die();
            $model = new Category();
            $status = $model->update($data);
            // header('location: index.php?mod=categories&act=index');
            $this->redirect("index.php?mod=category&act=index");
        }
    }
    
    
?>
