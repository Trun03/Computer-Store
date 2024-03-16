<?php
require_once("Models/clsCategory.php");
require_once("Models/clsCategory2.php");
$act = "";
$id = "";

$link_tieptuc ="?module=" . $module;
$thongbao ="";

if(isset($_REQUEST["act"]))
	$act = $_REQUEST["act"];
if(isset($_REQUEST["id"]))
	$id = $_REQUEST["id"];

$Nhomsanpham = new clsCategory();
$Nhomsanpham2 = new clsCategory2();

if($act == "them"){
	require("Views/vThemNhomSP.php");
}
else if($act == "sua"){
	$ketqua = $Nhomsanpham->TimTheoIDNhomSanpham($id);
	require("Views/vSuaNhomSP.php");
}
else if($act == "xoa"){
	require("xulyXoaNhomSP.php");
}
else if($act == "xoa2"){
	require("xulyXoaNhomSP2.php");
}
else if($act == "xulythem"){
	require("xulyThemNhomSP.php");
}	
else if($act == "xulysua"){
	require("xulySuaNhomSP.php");}
else{ 
	 
	$ketqua = array_merge($Nhomsanpham->LayDanhSachNhomSanpham(2,1) , $Nhomsanpham2->LayDanhSachNhomSanpham(2,1));
	require("Views/vDanhSachNhomSP.php");
}	
?>