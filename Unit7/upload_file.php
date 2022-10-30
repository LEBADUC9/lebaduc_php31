<?php
    session_start();
    function uploadFile($inputName, $targetDir, $allowTypes, $maxSize, $overRide){
        $uploadStatus = true;
        $targetFile = $targetDir . "/" . basename($_FILES[$inputName]['name']);
        $errors = array();
        $types = "";
        if(is_array($allowTypes)){
            foreach($allowTypes as $key => $type){
                $types = $type . ",";
            }
        }
        $types = trim($types, ",");
        if(!isset($inputName)){
            $errors[]= "Không có dữ liệu file";
            $uploadStatus = false;
        }
        if($inputName['errors'] !== 0){
            $errors[] = "Dữ liệu upload bị lỗi";
            $uploadStatus = false;
        }
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        if(!in_array($imageFileType, $allowTypes)){
            $errors[]= "Chỉ được upload các định dạng " . $types;
            $uploadStatus = false;
        }
        if($_FILES[$inputName]['size'] > $maxSize*1024*1024){
            $errors[] = "Kích thước file không được lớn hơn $maxSize (MB)";
            $uploadStatus = false;
        };
        if(file_exists($targetFile) && $overRide == false){
            $errors[] = "Tên file đã tồn tại, không được ghi đè";
            $uploadStatus = false;
        }
        if($uploadStatus){
            if(move_uploaded_file($_FILES[$inputName]['tmp_name'], $targetFile)){
                return array(true, $targetFile);
                echo "upload thành công";
            } else{
                return array(false, $errors);
            }
        } else{
            return array(false, $errors);
        }
    }
    $upload = uploadFile('avatar', 'file', array('jpg', 'jpeg', 'png', 'gif'), 1, true);
    $_SESSION['uploadStatus'] = $upload;
    // echo "<pre>";
    //     print_r($_FILES);
    // echo "</pre>";
    // $targetDir = "images/";
    // $targetFile = $targetDir . basename($_FILES['avatar']['name']);
    // echo $targetFile;
?>