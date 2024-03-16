<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Đăng xuất</title>
</head>

<body>
<?php
session_start();

session_destroy();
$thongbao = "ĐÃ ĐĂNG XUẤT THÀNH CÔNG";
$link_tieptuc = "login.php";
require("Views/vKetqua.php");
?>
</body>
</html>