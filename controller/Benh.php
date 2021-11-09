<?php
    require_once "./dao/Benh.php";

    function index(){
        $danhSachBenh = getBenh();
        require_once VIEW_PATH . "benh/index.php";
    }

    function chiTiet(){
        $id_benh = $_POST["id_benh"] ?? $_GET["id_benh"] ?? "";
        settype($id_benh, "int");
        require_once VIEW_PATH . "benh/chiTiet.php";
    }

    function timkiem(){
        require_once VIEW_PATH . "benh/timkiem.php";
    }

?>