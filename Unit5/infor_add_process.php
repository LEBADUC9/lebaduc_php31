<?php
    session_start();
    $infor = $_POST;
    $_SESSION['infor'] = $infor;
    if(isset($_SESSION['infor'])){
        echo "<br> <strong>Họ và tên: </strong>". $_SESSION['infor']['name'];
        echo "<br> <strong>Giới tính: </strong>". $_SESSION['infor']['sex'];
        echo "<br> <strong>Ngày sinh: </strong>". $_SESSION['infor']['date'];
        echo "<br> <strong>Quê quán: </strong>". $_SESSION['infor']['country'];
        echo "<br> <strong>Ngoại ngữ: </strong>". $_SESSION['infor']['lag'];
        echo "<br> <strong>Thông tin thêm: </strong>". $_SESSION['infor']['moreInfor'];
    }
?>