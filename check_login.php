<?php
include_once "../utils/sign_utils.php";
include_once "../utils/DBConnectionUtil.php"; 

if (isSigned()) {
    header("Location: ../lich_phong_may/xem_lich_phong_may.php");
} else {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $qrLogin = "SELECT * FROM admin WHERE username='{$_POST['username']}' and  PASSWORD ='{$_POST['password']}'";
        $result = $mysqli->query($qrLogin);
        if ($result->num_rows > 0) {
            if ($row = $result->fetch_array()) {
                if ($row['isAdmin'] == 1) {
                    $_SESSION[TYPE] = ADMIN_TYPE;
                } else {
                    $_SESSION[TYPE] = USER_TYPE;
                }
                $_SESSION[USER] = $_POST['username'];
                header("Location: login.php" );
                die();
            }
        } else{
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }
    } else {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
}

$mysqli->close();