<?php 
    require_once '../sign_utils.php';
    // require_once  'Check_Login.php';
    if (!isSigned()) {
        header('location: ./');
        die();
    }
?>

<?php
    require_once '../DBConnectionUtil.php'; 
    $id = $_GET['id'];
    $qr = "DELETE FROM lich_phong_may WHERE id = {$id}";
    $mysqli->query($qr);
    header("Location: " . $_SERVER["HTTP_REFERER"]);
?>