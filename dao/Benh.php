<?php

    require_once "pdo.php";

    // Lấy danh sách bệnh
    function getBenh() {
        $sql = "SELECT * FROM pma__bookmark";
        $result = pdo_query($sql);
        return $result;
    }

    // Lấy chi tiết bệnh
    function getBenhById($id_benh) {
        $sql = "SELECT * FROM pma__bookmark WHERE dbase=?";
        $result = pdo_query_one($sql, $id_benh);
        return $result;
    }


    // Thêm bệnh
    function insertBenh() {
        $sql = "";
        // $result = pdo_execute($sql);
        return $result;
    }

    // Cập nhật bệnh
    function updateBenh() {
        $sql = "";
        // $result = pdo_execute($sql);
        return $result;
    }

    // Xóa bệnh
    function deleteBenh() {
        $sql = "";
        // $result = pdo_execute($sql);
        return $result;
    }


    // Tìm kiếm bệnh
    function searchBenhByName() {
        $sql = "";
        // $result = pdo_query($sql);
        return $result;
    }

    // Danh sách đề xuất theo bệnh
    function getSuggestionsByBenh() {
        $sql = "";
        // $result = pdo_query($sql);
        return $result;
    }