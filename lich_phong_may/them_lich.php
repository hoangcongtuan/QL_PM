<?php 
    require_once '../utils/sign_utils.php';
    // require_once  'Check_Login.php';
    if (!isSigned()) {
        header('location: ./');
        die();
    }
?>

<?php
    require_once '../utils/DBConnectionUtil.php'; 
    $qr_hp = "SELECT id, ten_hp FROM hoc_phan";
    $list_hp = $mysqli->query($qr_hp);

    $qr_pm = "SELECT id, ten_phong FROM phong_may";
    $list_pm = $mysqli->query($qr_pm);

    $qr_gv = "SELECT id, ho_ten FROM giao_vien";
    $list_gv = $mysqli->query($qr_gv);
?>
<!doctype html>
<html lang="en">
<head>
<title>Thêm lịch</title>
<link rel="stylesheet" href="../css/login.css">
</head>
<body>
<form action="xu_ly_them_lich.php" method="post">
    <div class="container">

        <label><b>Lớp học phần</b></label>
        <select name = "id_hp">
            <?php 
                while($item_hp = mysqli_fetch_assoc($list_hp)) {
                    echo "<option value = ".$item_hp['id'].">".$item_hp['ten_hp']."</option>";
                }
            ?>
        </select>

        <label><b>Phòng máy</b></label>
        <select name = "id_pm">
            <?php 
                while($item_pm = mysqli_fetch_assoc($list_pm)) {
                    echo "<option value = ".$item_pm['id'].">".$item_pm['ten_phong']."</option>";
                }
            ?>
        </select>

        <br>
        <label><b>Giáo Viên</b></label>
        <select name = "id_gv">
            <?php 
                while($item_gv = mysqli_fetch_assoc($list_gv)) {
                    echo "<option value = ".$item_gv['id'].">".$item_gv['ho_ten']."</option>";
                }
            ?>
        </select>

        <br>
        <label><b>Nội dung</b></label>
        <input type="text" name="tieu_de" value = "" placeholder="title" required autocomplete="off">

        <label><b>Bắt đầu</b></label>
        <input type="text" name="start" placeholder="yyyy-mm-dd hh:mm:ss" required autocomplete="off">

        <label><b>Kết thúc</b></label>
        <input type="text" name="end" placeholder="yyyy-mm-dd hh:mm:ss" required autocomplete="off">

        <label><b>Ghi chú</b></label>
        <input type="text" name="ghi_chu" placeholder="Note" required autocomplete="off">
        <input type="submit" value="Thêm"/>
    </div>
</form>
</body>
</html>