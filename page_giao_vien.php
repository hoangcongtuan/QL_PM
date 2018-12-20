<?php
	ob_start();
	session_start();
	require_once   'DBConnectionUtil.php'; 
	// require_once  'Check_Login.php';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="templates/admin/assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="templates/admin/assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Trang Quản Lý</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="templates/admin/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Animation library for notifications   -->
    <link href="templates/admin/assets/css/animate.min.css" rel="stylesheet"/>
    <!--  Paper Dashboard core CSS    -->
    <link href="templates/admin/assets/css/paper-dashboard.css" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="templates/admin/assets/css/demo.css" rel="stylesheet" />
    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="templates/admin/assets/css/themify-icons.css" rel="stylesheet">
	<script type="text/javascript" src="templates/admin/assets/js/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="templates/admin/assets/js/ckfinder/ckfinder.js"></script>
	<script type="text/javascript" src="templates/admin/assets/js/jquery-2.1.1.min.js"></script>
	 <script type="text/javascript" src="templates/admin/assets/js/jquery-3.3.1.min.js"></script> 
	<script type="text/javascript" src="templates/admin/assets/js/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="templates/admin/assets/js/jquery.validate.min.js"></script>

</head>
<body>

<div class="wrapper">
	<!-- leftbar -->
<div class="sidebar" data-background-color="black" data-active-color="danger">
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="page_giao_vien.php" class="simple-text"><?php echo $_SESSION['userInfo']['username']?></a>
            </div>
            <ul class="nav">
				<?php
					$url2=$_SERVER['REQUEST_URI'];
                ?>

                <li >
                    <a href="xem_lich_phong_may.php">
                        Lịch phòng máy
                    </a>
                </li>
                
                <li >
                    <a href="page_phong_may.php">
                        Phòng máy
                    </a>
                </li>

            	<li >
                    <a href="page_giao_vien.php">
                        Danh sách giáo viên
                    </a>
                </li>

            	 <li>
                    <a href="page_hoc_phan.php">
                        Danh sách lớp học phần
                    </a>
                </li>
            </ul>
    	</div>
    </div>
<div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="xem_lich_phong_may.php">Phòng máy</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
						<li>
                            <a href="logout.php">
								<input type="submit" value="Logout" name="logout" />
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <form action = "" method = "get">
                                <input type = "text" name = "keyword" placeholder = "enter your text">
                                <input type = "submit" value ="search">
                                <select name = "field">
                                    <option value = "ho_ten">Họ tên</option> 
                                    <option value = "ghi_chu">Ghi chú</option>
                                </select>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <a href="them_giao_vien.php" class="addtop"><img src="templates/admin//assets/img/add.png" alt="" /> Thêm Giáo viên</a>

        <div class="content">
        <table class="table table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Họ tên</th>
                                        <th>Ghi chú</th>
                                        <th>Sửa</th>
                                        <th>Xóa</th>
                                    </thead>
                                    <tbody class="danhsach">
                                        <?php
                                            if (isset($_GET['keyword'])) {
                                                $keyword = $_GET['keyword'];
                                                $field = $_GET['field'];
                                                echo $keyword." va ".$field;
                                                $query = 
                                                    "SELECT *
                                                    FROM giao_vien
                                                    WHERE $field like '%{$keyword}%'  
                                                    ORDER BY id";
                                            }
                                            else 
                                                $query =
                                                    "SELECT *
                                                    FROM giao_vien
                                                    ORDER BY id";;
										
										$rs= $mysqli->query($query);
										while ($item=mysqli_fetch_assoc($rs)){
                                            $id=$item['id'];
                                            $ht = $item['ho_ten'];
                                            $ghi_chu = $item['ghi_chu'];
								        ?>
                                        <tr>
                                        	<td><?php echo $id?></td>
                                        	<td><?php echo $ht?></td>
                                            <td><?php echo $ghi_chu?></td>
                                            <td><a href="cap_nhat_gv.php?id=<?php echo $id?>">Sửa</a></td>
                                            <td><a href="xu_ly_xoa_gv.php?id=<?php echo $id?>">Xóa</a></td>
                                        </tr>
                                    <?php }?>
                                    </tbody>
 
                                </table>      
        </div>
	</body>
</html>