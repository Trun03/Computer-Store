<?php
session_start();
require("Models/clsAdmin.php");
if(isset($_REQUEST["tUser"])==false)
{
	
	$thongbao = "BẠN CHƯA ĐĂNG NHẬP";
	$link_tieptuc = "login.php";
	require("Views/vKetqua.php");
	die();
}
$user = $_REQUEST["tUser"];
$pass= $_REQUEST["tPassword"];
$pass = md5($pass);
$admin = new clsAdmin();
$ketqua = $admin->KiemTraTaiKhoan($user,$pass);
if($ketqua==FALSE)
{
	$thongbao = "Lỗi TRUY VẤN CSDL";
	$link_tieptuc = "login.php";
	require("Views/vKetqua.php");;
	die();
}
$row = $admin->data;
if($row!=NULL)
{
	if($row["trangthai"]==1)
	{
		
		$_SESSION["logined"] ="OK";
		$_SESSION["user"] = $row["username"];
		$_SESSION["quyen"] = $row["quyen"];
		
		$thongbao = "ĐĂNG NHẬP THÀNH CÔNG";
		$link_tieptuc = "index_admin.php";
	require("Views/vKetqua.php");
	}
	else
	{
		$thongbao = "TÀI KHOẢN ĐÃ BỊ KHÓA";
		$link_tieptuc = "login.php";
		require("Views/vKetqua.php");;
	}
}
else
{
	$thongbao = "ĐĂNG NHẬP SAI USER HOẶC PASSWORD";
	$link_tieptuc = "login.php";
	require("Views/vKetqua.php");;
}
?>