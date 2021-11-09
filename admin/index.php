<?php
    require "../config.php";
    require PATH_ROOT . "/global.php";

    $currentController = "Home";
    $currentAction = "index";
    $params = [];

    //lay URL
    $url = getUrl();


    // 
    foreach(range(0, ADMIN_LEVEL) as $i){
        unset($url[$i]);
    }

    //kiểm tra tồn tại controller thì cập nhật controller lại
    $requestController = $url[(1 + ADMIN_LEVEL)] ?? NULL;
    if($requestController){
        $currentController = getAdminController($requestController);
        unset($url[(1 + ADMIN_LEVEL)]);
    }
    
    //chuyển đièu yêu cầu cho controller
    require_once ADMIN_CONTROLLER . $currentController . '.php';

    //chọn phương thức thực hiện yêu cầu
    $requestAction = $url[(2 + ADMIN_LEVEL)] ?? NULL;
    if($requestAction){
        $currentAction = getAction($requestAction);
        unset($url[(2 + ADMIN_LEVEL)]);
    }

    // Lay danh tham so cho phương thức
    $params = $url ? array_values($url) : [];

    //goi ham voi tham so la mang tham so
    echo "Current Admin Controller : ". $currentController . "<br>";
    echo "Current Admin Action : ". $currentAction . "<br>";
    call_user_func_array($currentAction, $params);