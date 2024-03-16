<?php
$id = $_REQUEST["t2"];

$tennhomsp = $_REQUEST["t1"];
$trangthai =1;
if(isset($_REQUEST["rTrangthai"])){
	$trangthai = $_REQUEST["rTrangthai"];
}

$cat = $_REQUEST["rCat"];

if($cat == 10){
$ketqua = $Nhomsanpham->ThemNhomSanpham($id,$tennhomsp, $trangthai);
$thongbao ="Thêm dữ liệu thành công";
}else if($cat == 30){ 
$ketqua = $Nhomsanpham2->ThemNhomSanpham($id,$tennhomsp, $trangthai);
$thongbao ="Thêm dữ liệu thành công";
}else{
	$thongbao="Lỗi thêm dữ liệu";
}
	
require("Views/vKetqua.php");



?>