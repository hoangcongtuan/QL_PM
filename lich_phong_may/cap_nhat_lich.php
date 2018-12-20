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
    $id = $_GET['id'];
    $query = 
        "SELECT lich_phong_may.id, hoc_phan.ten_hp, phong_may.ten_phong, lich_phong_may.id_pm, lich_phong_may.id_gv,
            lich_phong_may.id_hp,
            tieu_de, giao_vien.ho_ten, thoi_gian_bat_dau, thoi_gian_ket_thuc, lich_phong_may.ghi_chu
        FROM lich_phong_may 
        INNER JOIN hoc_phan
            ON id_hp = hoc_phan.id
        INNER JOIN phong_may
            ON id_pm = phong_may.id
        INNER JOIN giao_vien
            ON id_gv = giao_vien.id
        WHERE lich_phong_may.id = $id
        ORDER BY lich_phong_may.id";
    $rs = $mysqli->query($query);
    $item = mysqli_fetch_assoc($rs);

    $id=$item['id'];
    $id_hp = $item['id_hp'];
    $id_gv = $item['id_gv'];
    $id_pm = $item['id_pm'];
    $hp = $item['ten_hp'];
    $pm = $item['ten_phong'];
    $tieu_de = $item['tieu_de'];
    $gv = $item['ho_ten'];
    $start = $item['thoi_gian_bat_dau'];
    $end = $item['thoi_gian_ket_thuc'];
    $ghi_chu = $item['ghi_chu'];

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
<title>Cập nhật Nhân viên</title>
<link rel="stylesheet" href="../css/login.css">
</head>
<body>
<form action="xu_ly_cap_nhat_lich.php" method="post">
    <div class="container">

        <label><b>Mã Lịch</b></label>
        <input type="text" name="id" value = <?php echo $id?> placeholder="id" required autocomplete="off" readonly = "readonly">
        
        <label><b>Lớp học phần</b></label>
        <select name = "id_hp">
            <?php 
                while($item_hp = mysqli_fetch_assoc($list_hp)) {
                    if ($item_hp['id'] == $id_hp)
                        echo "<option selected value = ".$item_hp['id'].">".$item_hp['ten_hp']."</option>";
                    else 
                        echo "<option value = ".$item_hp['id'].">".$item_hp['ten_hp']."</option>";
                }
            ?>
        </select>

        <label><b>Phòng máy</b></label>
        <select name = "id_pm">
            <?php 
                while($item_pm = mysqli_fetch_assoc($list_pm)) {
                    if ($item_pm['id'] == $id_pm)
                        echo "<option selected value = ".$item_pm['id'].">".$item_pm['ten_phong']."</option>";
                    else 
                        echo "<option value = ".$item_pm['id'].">".$item_pm['ten_phong']."</option>";
                }
            ?>
        </select>

        <br>
        <label><b>Giáo Viên</b></label>
        <select name = "id_gv">
            <?php 
                while($item_gv = mysqli_fetch_assoc($list_gv)) {
                    if ($item_gv['id'] == $id_gv)
                        echo "<option selected value = ".$item_gv['id'].">".$item_gv['ho_ten']."</option>";
                    else 
                        echo "<option value = ".$item_gv['id'].">".$item_gv['ho_ten']."</option>";
                }
            ?>
        </select>

        <br>
        <label><b>Nội dung</b></label>
        <input type="text" name="tieu_de" value = "<?php echo $tieu_de?>" placeholder="title" required autocomplete="off">

        <label><b>Bắt đầu</b></label>
        <input type="text" name="thoi_gian_bat_dau" value = <?php echo $start?> placeholder="start" required autocomplete="off">

        <label><b>Kết thúc</b></label>
        <input type="text" name="thoi_gian_ket_thuc" value = <?php echo $end?> placeholder="end" required autocomplete="off">

        <label><b>Ghi chú</b></label>
        <input type="text" name="ghi_chu" value = "<?php echo $ghi_chu?>"" placeholder="Note" required autocomplete="off">
        <input type="submit" value="Cập nhật"/>
    </div>
</form>
</body>
</html>