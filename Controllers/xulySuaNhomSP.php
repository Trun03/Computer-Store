<?php
$id = $_REQUEST["t2"];
$tennhomsp = $_REQUEST["t1"];
$trangthai =1;
if(isset($_REQUEST["rTrangthai"]))
	$trangthai = $_REQUEST["rTrangthai"];
$ketqua = $Nhomsanpham->SuaNhomSanpham($id,$tennhomsp, $trangthai);
if($ketqua==FALSE)
	$thongbao="Lỗi thêm dữ liệu";
else
	$thongbao ="Thêm dữ liệu thành công";

require("Views/vKetqua.php");
?>