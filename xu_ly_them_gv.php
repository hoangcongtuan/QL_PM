<?php
    require_once 'DBConnectionUtil.php'; 
    $ht = $_POST['ho_ten'];
    $ghi_chu = $_POST['ghi_chu'];

    $query = "INSERT INTO giao_vien (ho_ten, ghi_chu) 
        VALUES ('{$ht}', '{$ghi_chu}')";
    $mysqli->query($query); 

    header( "Location: page_giao_vien.php");
?>