<?php
    require_once 'DBConnectionUtil.php'; 
    $id = $_POST['id'];
    $hp = $_POST['ten_hp'];

    $query = "UPDATE hoc_phan SET ten_hp = '{$hp}'
            WHERE id = '{$id}'";
    $mysqli->query($query); 

    header( "Location: page_hoc_phan.php");
?>