<?php
    require_once 'DBConnectionUtil.php'; 
    $hp = $_POST['ten_hp'];

    $query = "INSERT INTO hoc_phan (ten_hp) 
        VALUES ('{$hp}')";
    $mysqli->query($query); 

    header( "Location: page_hoc_phan.php");
?>