<?php 
    require_once 'sign_utils.php';
    // require_once  'Check_Login.php';
    if (!isSigned()) {
        header('location: ./');
        die();
    }
?>

<?php
    require_once 'DBConnectionUtil.php'; 
    $hp = $_POST['ten_hp'];

    $query = "INSERT INTO hoc_phan (ten_hp) 
        VALUES ('{$hp}')";
    $mysqli->query($query); 

    header( "Location: page_hoc_phan.php");
?>