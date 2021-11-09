<?php
    require_once PATH_ROOT . "/dao/benh.php";

    function index(){
        $danhSachBenh = getBenh();
        require_once ADMIN_VIEW . "benh/index.php";
    }

    function chiTiet(){
        $id_benh = $_POST["id_benh"] ?? $_GET["id_benh"] ?? "";
        settype($id_benh, "int");
        require_once ADMIN_VIEW . "benh/chiTiet.php";
    }

    function sua(){
        $id_benh = $_POST["id_benh"] ?? $_GET["id_benh"] ?? "";
        settype($id_benh, "int");
        $benh = getBenhById($id_benh);
        require_once ADMIN_VIEW . "benh/sua.php";
    }

    function xoa(){
        $id_benh = $_POST["id_benh"] ?? $_GET["id_benh"] ?? "";
        settype($id_benh, "int");
        $benh = getBenhById($id_benh);
        require_once ADMIN_VIEW . "benh/xoa.php";
    }

    function timkiem(){
        require_once ADMIN_VIEW . "benh/timkiem.php";
    }

?>