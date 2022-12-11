<?php
    require_once "./Models/Posts.php";
    require_once "./Controllers/AdminController.php";
    // require_once "./Controllers/BaseController.php";
    class PostsController extends AdminController {
        public function index(){
            $model = new Posts();
            $postses = $model->getAll();
            
            // echo "<pre>";
            //     print_r($postses);
            // echo "</pre>";
            // die();
            // require_once "./Views/categories/list.php";
            $this->view("/posts/list.php",[
                'postses' => $postses
            ]);
            // var_dump($posts);
            
        }
        
        public function create(){
            // require_once "./Views/categories/create.php";
            $this->view("/posts/create.php",[
                // "data" => $data
            ]);
        }
        public function store(){
            if(!empty($_POST['title']) && !empty($_POST['description'])){
                $data = $_POST;
            }else{
                echo "Lỗi";
                return false;
            };
            // var_dump($_POST);
            // die();
            
            $model = new Posts();
            $status = $model->add($data);
            // var_dump($status);
            // die();
            if($status == true){
                // header('location: index.php?mod=categories&act=index');
                $this->redirect("index.php?mod=posts&act=index");
            } else{
                // header('location: index.php?mod=categories&act=create');
                $this->redirect("index.php?mod=posts&act=create");
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
            $model = new Posts();
            $id = isset($_GET['id'])?$_GET['id']:0;
            // $this->getid();
            // var_dump($id);
            // die();
            $status = $model->delete($id);
            if($status == true){
                // header('location: index.php?mod=categories&act=index');
                $this->redirect("index.php?mod=posts&act=index");
            }
        }
        
        public function edit(){
            $model = new Posts();
            $id = isset($_GET['id'])?$_GET['id']:0;
            $posts = $model->show($id);
            // var_dump($posts);
            // die();
            // require_once "./Views/categories/edit.php";
            $this->view("/posts/edit.php",[
                'posts' => $posts
            ]);
        }
        public function update(){
            if(!empty($_POST)){
                $data = $_POST;
            };
            // var_dump($data);
            // die();
            $model = new Posts();
            $status = $model->update($data);
            // header('location: index.php?mod=categories&act=index');
            $this->redirect("index.php?mod=posts&act=index");
        }
        public function show(){
            $model = new Posts();
            $id = isset($_GET['id'])?$_GET['id']:0;
            $posts = $model->show($id);
            // echo "<pre>";
            //     print_r($posts);
            // echo "</pre>";
            // die();
            // require_once "./Views/posts/detail.php";
            
            $this->view("/posts/detail.php",[
                'posts' => $posts
            ]);
            
        }
        public function getArticleList(){
            $model = new Posts();
            $categoryId = isset($_GET['categoryId'])?$_GET['categoryId']:0;
            // var_dump($_GET['categoryId']);
            // die();
           
            $articleList = $model->getArticleList($categoryId);
            // echo "<pre>";
            //     print_r($articleList);
            // echo "</pre>";
            // die();
            $this->view("/posts/article_list.php",[
                'articleList' => $articleList
            ]);
        }
    }
?>