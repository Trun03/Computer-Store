<?php
require_once("Models/clsSanpham2.php");

$link_tieptuc ="?module=" . $module;
$thongbao ="";

$id = isset($_REQUEST["id"])?$_REQUEST["id"]:"";
$act = isset($_REQUEST["act"])?$_REQUEST["act"]:"";
$tukhoa = isset($_REQUEST["tTukhoa"])? $_REQUEST["tTukhoa"]:"";
$manhom = isset($_REQUEST["manhom"])?$_REQUEST["manhom"]:0;
$sanpham2 = new clsSanpham2();

if($act == "them"){
	require("Views/vThemSP2.php");
}
else if($act == "sua"){
	$ketqua = $sanpham2->TimTheoIDSanpham($id);
	require("Views/vSuaSP2.php");
}
else if($act == "xoa"){
	require("xulyXoaSP2.php");
}
else if($act == "xulythem"){
	require("xulyThemSP2.php");
}	
else if($act == "xulysua"){
	require("xulySuaSP2.php");}
else{ 
	$ketqua = $sanpham2->LayDanhSachSanpham(2,$manhom,$tukhoa) ;
	require("Views/vDanhSachSP2.php");
}	
?>