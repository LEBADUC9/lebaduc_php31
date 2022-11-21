<?php
    if(!isset($_GET['mod'])){
        echo "Tham số không tồn tại";
        exit();
    }
    $mod = $_GET['mod'];
    if(!isset($_GET['act'])){
        echo "Tham số không tồn tại";
        exit();
    }
    $act = $_GET['act'];
    $controllerName = ucfirst($mod) . "Controller";
    $path = "./Controllers/{$controllerName}.php";
    if(!file_exists($path)){
        echo "File $path không tồn tại";
        exit();
    }
    require_once $path;
    $controller = new $controllerName();
    if(!method_exists($controller, $act)){
        echo "Method $act không tồn tại";
        exit();
    }
    $controller->$act();

?>