<?php
    require_once 'DBConnectionUtil.php'; 
    echo $id_hp = $_POST['id_hp'];
    echo $id_pm = $_POST['id_pm'];
    echo $id_gv = $_POST['id_gv'];
    echo $tieu_de = $_POST['tieu_de'];
    echo $ghi_chu = $_POST['ghi_chu'];
    echo $start = $_POST['start'];
    echo $end = $_POST['end'];

    $query = "INSERT INTO lich_phong_may (id_hp, id_pm, id_gv, thoi_gian_bat_dau, thoi_gian_ket_thuc, tieu_de, ghi_chu) 
        VALUES ('{$id_hp}', '{$id_pm}', '{$id_gv}', '{$start}', '{$end}', '{$tieu_de}', '{$ghi_chu}')";
    $mysqli->query($query); 

    header( "Location: xem_lich_phong_may.php");
?>