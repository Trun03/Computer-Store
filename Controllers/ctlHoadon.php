<?php
require_once("Models/clsHoadon.php");
$act = "";
$id = "";
$link_tieptuc ="?module=" . $module;
$thongbao = "";

if(isset($_REQUEST["act"]))
	$act = $_REQUEST["act"];
if(isset($_REQUEST["id"]))
	$id = $_REQUEST["id"];

$hoadon = new clsHoadon();
if($act == "xoa"){
	require("xulyXoaHD.php");
}
else if($act == "trangthai"){
	require("xulyTrangthaiHD.php");
}	
else if($act == "chitiet"){
	$ketqua = $hoadon->TimHoadon($id);
	if($ketqua==TRUE)
	{
		$rowHD = $hoadon->data;
		$tongtien = $hoadon->TongTien($id);
		if($rowHD)
		{
			$ketqua = $hoadon->ChitietHoadon($id);
			require("Views/vChitietHD.php");
		}
		else
		{
			$thongbao = "HÓA ĐƠN KHÔNG TỒN TẠI";
			require("Views/vKetqua.php");
		}
	}
	else
	{
		$thongbao = "LỖI TRUY VẤN HÓA ĐƠN";
		require("Views/vKetqua.php");
	}
}
else{ 
	$ketqua = $hoadon->LayDanhSachHoadon();
	require("Views/vDanhSachHD.php");
}	
?>