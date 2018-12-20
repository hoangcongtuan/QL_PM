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
    $id = $_GET['id'];
    $query = 
        "SELECT *
        FROM hoc_phan
        WHERE id = $id";
    $rs = $mysqli->query($query);
    $item = mysqli_fetch_assoc($rs);

    $hp = $item['ten_hp'];
?>
<!doctype html>
<html lang="en">
<head>
<title>Cập nhật Học phần</title>
<link rel="stylesheet" href="./css/login.css">
</head>
<body>
<form action="xu_ly_cap_nhat_hp.php" method="post">
    <div class="container">

        <label><b>Mã Học phần</b></label>
        <input type="text" name="id" value = <?php echo $id?> placeholder="id" required autocomplete="off" readonly = "readonly">
        
        <label><b>Tên học phần</b></label>
        <input type="text" name="ten_hp" value = "<?php echo $hp?>" placeholder="Ho Ten" required autocomplete="off">

        <input type="submit" value="Cập nhật"/>
    </div>
</form>
</body>
</html>