<?php



if(isset($_SESSION["logined"])==false || $_SESSION["logined"]=="")
{
	
	
	$thongbao = "BẠN CHƯA ĐĂNG NHẬP";
	$link_tieptuc = "login.php";
	require("Views/vKetqua.php");
	
}
?>