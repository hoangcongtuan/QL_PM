<?php 
    require_once 'sign_utils.php';
    // require_once  'Check_Login.php';
    if (!isSigned()) {
        header('location: ./');
        die();
    }
?>

<?php
include_once "sign_utils.php";

if (isSigned()) {
    unset($_SESSION[TYPE]);
    unset($_SESSION[USER]);
}
header("Location: ./");