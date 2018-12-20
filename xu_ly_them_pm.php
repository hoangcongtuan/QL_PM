<?php
    require_once 'DBConnectionUtil.php'; 
    $tp = $_POST['ten_phong'];
    $sm = $_POST['so_may'];
    $ghi_chu = $_POST['ghi_chu'];

    $query = "INSERT INTO phong_may (ten_phong, so_may, ghi_chu) 
        VALUES ('{$tp}', '{$sm}', '{$ghi_chu}')";
    $mysqli->query($query); 

    header( "Location: page_phong_may.php");
?>