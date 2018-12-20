<?php
    require_once 'DBConnectionUtil.php'; 
?>
<!doctype html>
<html lang="en">
<head>
<title>Thêm Phòng máy</title>
<link rel="stylesheet" href="./css/login.css">
</head>
<body>
<form action="xu_ly_them_pm.php" method="post">
    <div class="container">
        <label><b>Tên phòng</b></label>
        <input type="text" name="ten_phong" placeholder="ten_phong" >

        <label><b>Số máy</b></label>
        <input type="text" name="so_may" placeholder="so_may">

        <label><b>Ghi chú</b></label>
        <input type="text" name="ghi_chu" placeholder="ghi_chu">

        <input type="submit" value="Thêm"/>
    </div>
</form>
</body>
</html>