<?php
    require_once 'DBConnectionUtil.php'; 
?>
<!doctype html>
<html lang="en">
<head>
<title>Thêm Giáo viên</title>
<link rel="stylesheet" href="./css/login.css">
</head>
<body>
<form action="xu_ly_them_gv.php" method="post">
    <div class="container">

        <label><b>Họ tên</b></label>
        <input type="text" name="ho_ten" placeholder="Ho Ten" required autocomplete="off">

        <label><b>Ghi Chú</b></label>
        <input type="text" name="ghi_chu" placeholder="Ghi chu">

        <input type="submit" value="Thêm"/>
    </div>
</form>
</body>
</html>