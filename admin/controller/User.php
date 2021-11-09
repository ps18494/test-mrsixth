<?php
    require_once PATH_ROOT . "/dao/user.php";

    function index() {
        require_once ADMIN_VIEW . "/user/index.php";
    }

    function chitiet() {
        require_once ADMIN_VIEW . "/user/chitiet.php";
    }

    function them() {
        require_once ADMIN_VIEW . "/user/them.php";
    }

    function sua() {
        require_once ADMIN_VIEW . "/user/sua.php";
    }

    function xoa() {
        require_once ADMIN_VIEW . "/user/xoa.php";
    }