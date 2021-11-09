<?php
    require_once "./dao/Thuoc.php";

    function index(){
        require_once VIEW_PATH . "benh/index.php";
    }

    function chiTiet(){
        require_once VIEW_PATH . "benh/chiTiet.php";
    }

    function timkiem(){
        require_once VIEW_PATH . "benh/timkiem.php";
    }

?>