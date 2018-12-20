<?php
    require_once 'DBConnectionUtil.php'; 
    $id = $_POST['id'];
    $ht = $_POST['ho_ten'];
    $ghi_chu = $_POST['ghi_chu'];

    $query = "UPDATE giao_vien SET ho_ten = '{$ht}', ghi_chu = '{$ghi_chu}'
            WHERE id = '{$id}'";
    $mysqli->query($query); 

    header( "Location: page_giao_vien.php");
?>