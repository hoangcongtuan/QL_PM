<?php
    require_once 'DBConnectionUtil.php'; 
    $id = $_GET['id'];
    $qr = "DELETE FROM lich_phong_may WHERE id = {$id}";
    $mysqli->query($qr);
    header("Location: " . $_SERVER["HTTP_REFERER"]);
?>