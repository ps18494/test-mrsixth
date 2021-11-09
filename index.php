<?php
    require_once "config.php";
    require "global.php";

    $currentController = "Home";
    $currentAction = "index";
    $params = [];

    //lay URL
    $url = getUrl();

    // 
    foreach(range(0, ROOT_LEVEL) as $i){
        unset($url[$i]);
    }

    //kiểm tra tồn tại controller thì cập nhật controller lại
    $requestController = $url[(1 + ROOT_LEVEL)] ?? NULL;
    if($requestController){
        $currentController = getController($requestController);
        unset($url[(1 + ROOT_LEVEL)]);
    }
    
    //chuyển đièu yêu cầu cho controller
    require_once CONTROLLER_PATH . $currentController . '.php';

    //chọn phương thức thực hiện yêu cầu
    $requestAction = $url[(2 + ROOT_LEVEL)] ?? NULL;
    if($requestAction){
        $currentAction = getAction($requestAction);
        unset($url[(2 + ROOT_LEVEL)]);
    }

    // Lay danh tham so cho phương thức
    $params = $url ? array_values($url) : [];

    //goi ham voi tham so la mang tham so
    echo "Current Controller : ". $currentController . "<br>";
    echo "Current Action : ". $currentAction . "<br>";
    // abc
    echo "Hello";

    // New feature


    call_user_func_array($currentAction, $params);