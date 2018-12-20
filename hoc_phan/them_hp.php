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
?>
<!doctype html>
<html lang="en">
<head>
<title>Thêm Học phần</title>
<link rel="stylesheet" href="./css/login.css">
</head>
<body>
<form action="xu_ly_them_hp.php" method="post">
    <div class="container">

        <label><b>Tên học phần</b></label>
        <input type="text" name="ten_hp" placeholder="Tên học phần" required autocomplete="off">

        <input type="submit" value="Thêm"/>
    </div>
</form>
</body>
</html>