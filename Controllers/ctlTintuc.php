<?php
require_once("Models/clsTintuc.php");
$act = "";
$id = "";

$link_tieptuc ="?module=" . $module;
$thongbao ="";

if(isset($_REQUEST["act"]))
	$act = $_REQUEST["act"];
if(isset($_REQUEST["id"]))
	$id = $_REQUEST["id"];

$tintuc = new clsTintuc();

if($act == "them"){
	require("Views/vThemTintuc.php");
}
else if($act == "sua"){
	$ketqua = $tintuc->TimTheoIDTintuc($id);
	require("Views/vSuaTintuc.php");
}
else if($act == "xoa"){
	require("xulyXoaTintuc.php");
}
else if($act == "xulythem"){
	require("xulyThemTintuc.php");
}	
else if($act == "xulysua"){
	require("xulySuaTintuc.php");}
else{ 
	$ketqua = $tintuc->LayDanhSachTintuc();
	require("Views/vDanhSachTintuc.php");
}	
?>