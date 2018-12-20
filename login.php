<?php 
include_once "./utils/sign_utils.php";
    if (isSigned()) {
        header("location: ./lich_phong_may/page_lich_phong_may.php");
        die();
    }
?>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
<form name = "form_login" action="check_login.php" method="post">
    <div class="container">
        <label><b>Username</b></label>
        <input type="text" name="username" value = "a" placeholder="Username" required autocomplete="off" autofocus>

        <label><b>Password</b></label>
        <input type="password" name="password" value = "a" placeholder="Password" required autocomplete="off">
        <input type="submit" value="Login"/>
    </div>
</form>
</body>
</html>