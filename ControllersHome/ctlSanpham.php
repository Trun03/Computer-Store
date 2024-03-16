<?php
require_once("Models/clsSanpham.php");
require_once("Models/clsCategory.php");

$link_tieptuc ="?module=" . $module;
$thongbao ="";

$act = isset($_REQUEST["act"])?$_REQUEST["act"]:"";
$tukhoa = isset($_REQUEST["tTukhoa"])? $_REQUEST["tTukhoa"]:"";
$manhom = isset($_REQUEST["manhom"])?$_REQUEST["manhom"]:0;

$sanpham = new clsSanpham();
$soketqua =0;
$tennhom = "";
if($act=="timkiem")
{
	$ketqua = $sanpham->LayDanhSachSanpham(1,$manhom,$tukhoa);
	if($ketqua)
		$soketqua = $sanpham->db->pdo_stm->rowCount();
}
else 
{
	if($manhom >0){
		$ketqua = $sanpham->LayDanhSachSanpham(1,$manhom);
		$cat =  new clsCategory();
		$cat->TimTheoIDNhomSanpham($manhom);
		$tennhom = is_array($cat->data) && isset($cat->data["cat_name"]) ? $cat->data["cat_name"] : "";
	}
	else{ 
		$ketqua = $sanpham->LayDanhSachSanpham(1,0);
	}	
}
require("ViewsHome/v_DSSanpham.php");
?>