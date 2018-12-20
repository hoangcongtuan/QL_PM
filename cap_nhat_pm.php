<?php
    require_once 'DBConnectionUtil.php'; 
    $id = $_GET['id'];
    $query = 
        "SELECT *
        FROM phong_may
        WHERE id = $id";
    $rs = $mysqli->query($query);
    $item = mysqli_fetch_assoc($rs);

    $tp = $item['ten_phong'];
    $sm = $item['so_may'];
    $ghi_chu = $item['ghi_chu'];
?>
<!doctype html>
<html lang="en">
<head>
<title>Cập nhật Phòng máy</title>
<link rel="stylesheet" href="./css/login.css">
</head>
<body>
<form action="xu_ly_cap_nhat_pm.php" method="post">
    <div class="container">

        <label><b>Mã Phòng</b></label>
        <input type="text" name="id" value = <?php echo $id?> placeholder="id" required autocomplete="off" readonly = "readonly">
        
        <label><b>Tên phòng</b></label>
        <input type="text" name="ten_phong" value = "<?php echo $tp?>" placeholder="id" required autocomplete="off">

        <label><b>Số máy</b></label>
        <input type="text" name="so_may" value = "<?php echo $sm?>" placeholder="title" required autocomplete="off">

        <label><b>Ghi chú</b></label>
        <input type="text" name="ghi_chu" value = "<?php echo $ghi_chu?>" placeholder="start" required autocomplete="off">

        <input type="submit" value="Cập nhật"/>
    </div>
</form>
</body>
</html>