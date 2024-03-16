<?php
require_once("Models/clsSanpham.php");


$link_tieptuc ="?module=" . $module;
$thongbao ="";

$id = isset($_REQUEST["id"])?$_REQUEST["id"]:"";
$act = isset($_REQUEST["act"])?$_REQUEST["act"]:"";
$tukhoa = isset($_REQUEST["tTukhoa"])? $_REQUEST["tTukhoa"]:"";
$manhom = isset($_REQUEST["manhom"])?$_REQUEST["manhom"]:0;

$sanpham = new clsSanpham();


if($act == "them"){
	require("Views/vThemSP.php");
}
else if($act == "sua"){
	$ketqua = $sanpham->TimTheoIDSanpham($id);
	require("Views/vSuaSP.php");
}
else if($act == "xoa"){
	require("xulyXoaSP.php");
}
else if($act == "xulythem"){
	require("xulyThemSP.php");
}	
else if($act == "xulysua"){
	require("xulySuaSP.php");}
else{ 
	$ketqua = $sanpham->LayDanhSachSanpham(2,$manhom,$tukhoa);
	require("Views/vDanhSachSP.php");
}	
?>