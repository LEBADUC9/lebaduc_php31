<?php
    require_once 'Connection.php';
    require_once 'Model.php';
    class Posts extends Model {
        public $table = "posts";
        public function getOutstanding(){
        $query = "SELECT * FROM posts ORDER BY view_count DESC LIMIT 3";
        $result = $this->conn->query($query);
        $outstanding = array();
        while($row = $result->fetch_assoc()){
            $outstanding[] = $row;
            }
        return $outstanding;
        }
        public function add($data)
        {
       
        $query = "INSERT INTO posts(title, description) VALUES('$data[title]', '$data[description]') ";
        $status = $this->conn->query($query);
        // var_dump($status);
        //     die();
        return $status;
        }
        public function delete($id){
        
        // var_dump($id);
        // die();
        $query = "DELETE  FROM posts WHERE id = $id";
        $status = $this->conn->query($query);
        return $status;
        }
        public function show($id){
        $query = "SELECT * FROM posts WHERE id = $id";
        $status = $this->conn->query($query);
        $posts = $status->fetch_assoc();
        
        return $posts;
       
        }
        public function update($data){
        
        $query = "UPDATE posts SET title = '{$data['title']}', slug =  '{$data['slug']}', description =  '{$data['description']}' WHERE id = $data[id]";
        $status = $this->conn->query($query);
        }
        public function getArticleList($categoryId){
            $query = "SELECT * FROM posts WHERE category_id = $categoryId";
            // var_dump($query);
            // die();
            $status = $this->conn->query($query);
            // $articleList = $status->fetch_assoc();
           
            // echo "<pre>";
            //     print_r($status);
            // echo "</pre>";
            // die();
            return $status;
            // return $articleList;
        }
    }
?>