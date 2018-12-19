<?php
    require_once 'DBConnectionUtil.php'; 
    $id = $_POST['id'];
    $id_hp = $_POST['id_hp'];
    $id_pm = $_POST['id_pm'];
    $id_gv = $_POST['id_gv'];
    $tieu_de = $_POST['tieu_de'];
    $ghi_chu = $_POST['ghi_chu'];

    echo $id;
    echo $id = $_POST['id'];
    echo $id_hp = $_POST['id_hp'];
    echo $id_pm = $_POST['id_pm'];
    echo $id_gv = $_POST['id_gv'];
    echo $tieu_de = $_POST['tieu_de'];
    echo $ghi_chu = $_POST['ghi_chu'];

    $query = "UPDATE lich_phong_may SET id_hp = '{$id_hp}', id_pm = '{$id_pm}', id_gv = '{$id_gv}'
            , tieu_de = '{$tieu_de}', ghi_chu = '{$ghi_chu}'
            WHERE id = '{$id}'";
    $mysqli->query($query); 

    header( "Location: xem_lich_phong_may.php");
?>