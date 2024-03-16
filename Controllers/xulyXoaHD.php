<?php

$ketqua = $hoadon->TimHoadon($id);
$rowHD = $hoadon->data;
if($rowHD==NULL)
	$thongbao = "HÓA ĐƠN: " . $id . " KHÔNG TỒN TẠI";
else{
	if($rowHD["trangthai"]==2)
		$thongbao = "HÓA ĐƠN ĐÃ THANH TOÁN - KHÔNG ĐƯỢC XÓA";
	else{
		$ketqua = $hoadon->XoaChitietHD($id);
		if($ketqua==FALSE)
			$thongbao = "LỖI XÓA CHI TIẾT HÓA ĐƠN: " . $id ;
		else{
			$ketqua = $hoadon->XoaHoaDon($id);
			if($ketqua==TRUE)	
				$thongbao = "XÓA HÓA ĐƠN " . $id . " THÀNH CÔNG";
			else
				$thongbao = "LỖI XÓA HÓA ĐƠN: " . $id ;
		}
	}
}
require("Views/vKetqua.php");
?>