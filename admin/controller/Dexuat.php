<?php
    require_once PATH_ROOT . "/dao/dexuat.php";
    function index() {
        require_once ADMIN_VIEW . "dexuat/index.php";
    }

    
    function chitiet(){
        require_once ADMIN_VIEW . "dexuat/chitiet.php";
    }

    function duyet() {
        require_once ADMIN_VIEW . "dexuat/duyet.php";
    }