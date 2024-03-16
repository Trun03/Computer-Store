<?php
require_once("Models/clsSanpham.php");

$link_tieptuc ="?module=" . $module;
$thongbao ="";

$manhom = 0;
$masp = 0;

if(isset($_REQUEST["manhom"]))
	$manhom = $_REQUEST["manhom"];
if(isset($_REQUEST["masp"]))
	$masp = $_REQUEST["masp"];

$sanpham = new clsSanpham();

if($masp > 0)
{
	$ketqua = $sanpham->TimTheoIDSanpham($masp,1);
	require("ViewsHome/v_ChitietSanpham.php");
}
else
{
	$link_tieptuc="index.php";
	$thongbao = "ID NOT VALID";
	require("Views/vKetqua.php");
}
?>