<?php
    require_once 'DBConnectionUtil.php'; 
    $id = $_GET['id'];
    $qr = "DELETE FROM hoc_phan WHERE id = {$id}";
    $mysqli->query($qr);
    header("Location: " . $_SERVER["HTTP_REFERER"]);
?>