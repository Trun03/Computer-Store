<?php
require_once("DungChung/Tienich.php");
$id = $_REQUEST["id"];
$tensp = $_REQUEST["t1"];
$gia = $_REQUEST["t3"];

$hinhanh = UploadFile("f1", "Hinhanh/Sanpham");
if($hinhanh=="")
	$hinhanh = $_REQUEST["anhHientai"];
	
$tomtat = $_REQUEST["t4"];
$chitiet = $_REQUEST["t5"];
$trangthai =1;
if(isset($_REQUEST["rTrangthai"]))
	$trangthai = $_REQUEST["rTrangthai"];
$nhomsp = $_REQUEST["s1"];

$ketqua = $sanpham2->SuaSanpham($id,$tensp,$gia, $hinhanh,$tomtat,$chitiet,$trangthai,$nhomsp);
if($ketqua==FALSE)
	$thongbao="Lỗi sửa dữ liệu";
else
	$thongbao ="Sửa dữ liệu thành công";

require("Views/vKetqua.php");
?>