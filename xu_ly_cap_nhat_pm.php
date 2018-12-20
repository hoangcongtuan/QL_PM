<?php
    require_once 'DBConnectionUtil.php'; 
    $id = $_POST['id'];
    $tp = $_POST['ten_phong'];
    $sm = $_POST['so_may'];
    $ghi_chu = $_POST['ghi_chu'];

    $query = "UPDATE phong_may SET ten_phong = '{$tp}', so_may = '{$sm}'
            , ghi_chu = '{$ghi_chu}'
            WHERE id = '{$id}'";
    $mysqli->query($query); 

    header( "Location: page_phong_may.php");
?>