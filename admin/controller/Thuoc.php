<?php
    require_once PATH_ROOT . "/dao/thuoc.php";

    function index() {
        require_once ADMIN_VIEW . "thuoc/index.php";
    }

    function chitiet() {
        require_once ADMIN_VIEW . "thuoc/chitiet.php";
    }

    function them() {
        require_once ADMIN_VIEW . "thuoc/them.php";
    }

    function sua() {
        require_once ADMIN_VIEW . "thuoc/sua.php";
    }

    function xoa() {
        require_once ADMIN_VIEW . "thuoc/xoa.php";
    }

    function timkiem() {
        require_once ADMIN_VIEW . "thuoc/timkiem.php";
    }