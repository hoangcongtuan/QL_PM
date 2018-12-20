<?php
    require_once 'DBConnectionUtil.php'; 
    $id = $_GET['id'];
    $query = 
        "SELECT *
        FROM giao_vien
        WHERE id = $id";
    $rs = $mysqli->query($query);
    $item = mysqli_fetch_assoc($rs);

    $ht = $item['ho_ten'];
    $ghi_chu = $item['ghi_chu'];
?>
<!doctype html>
<html lang="en">
<head>
<title>Cập nhật Giáo viên</title>
<link rel="stylesheet" href="./css/login.css">
</head>
<body>
<form action="xu_ly_cap_nhat_gv.php" method="post">
    <div class="container">

        <label><b>Mã Giáo vien</b></label>
        <input type="text" name="id" value = <?php echo $id?> placeholder="id" required autocomplete="off" readonly = "readonly">
        
        <label><b>Họ tên</b></label>
        <input type="text" name="ho_ten" value = "<?php echo $ht?>" placeholder="Ho Ten" required autocomplete="off">

        <label><b>Ghi Chú</b></label>
        <input type="text" name="ghi_chu" value = "<?php echo $ghi_chu?>" placeholder="Ghi chu" required autocomplete="off">

        <input type="submit" value="Cập nhật"/>
    </div>
</form>
</body>
</html>