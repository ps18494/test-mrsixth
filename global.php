<?php
    /**
     * Lấy các thành phần của url
     * 
     * Ví dụ:
     * echo $_SERVER['REQUEST_URI'];  // /benh/chitiet/1?pattern=2&scope=quickrefarray
     * $url = getUrl();
     * echo $url; // ['', 'benh', 'chitiet', '12']
     * 
     * echo $_SERVER['REQUEST_URI'];  // mrsixtth/benh/chitiet/1?pattern=2&scope=quickrefarray
     * $url = getUrl();
     * echo $url; // ['', 'mrsixth', 'benh', 'chitiet', '12']
     * 
     * 
     * 
     * @return array url parts
     */
    function getUrl(){
        // $request_uri = str_replace("?". $_SERVER["QUERY_STRING"], '', $_SERVER['REQUEST_URI']);
        $request_uri = strtok($_SERVER['REQUEST_URI'], '?');
        $url = rtrim($request_uri, '/');  // Xóa dấu gạch chéo cuối cùng
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);
        return $url;
    }


    function getController(string $controllerName){
        $controllerName = ucwords($controllerName);
        return file_exists(CONTROLLER_PATH . $controllerName . '.php') ? $controllerName : 'Home';
    }

    function getAdminController(string $controllerName){
        $controllerName = ucwords($controllerName);
        return file_exists(ADMIN_CONTROLLER . $controllerName . '.php') ? $controllerName : 'Home';
    }

    function getAction(string $actionName){
        return function_exists($actionName) ? $actionName : 'index';
    }