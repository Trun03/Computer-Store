<?php
require_once("Models/clsHoadon.php");
if($id!="" && is_numeric($id))
{
	
	
	$hd = new clsHoadon();
	$hd->TimChitietHoadon($id);
	if($hd->data==NULL) 
	{	
		$ketqua = $sanpham2->XoaSanpham($id);
		if($ketqua==FALSE)
			$thongbao="Lỗi xóa dữ liệu";
		else
			$thongbao ="Xóa dữ liệu thành công";
	}
	else
	{
		$ketqua = $sanpham2->SuaTrangThaiSanpham($id,0);
		if($ketqua==FALSE)
		$thongbao="Lỗi xóa dữ liệu";
		else
		$thongbao ="Không xóa sản phẩm do Đã có  chi tiết hóa đơn liên quan
					<br>Đã cập nhật sang trạng thái không hiển thị ";
	}
}
else
	$thongbao ="Xóa dữ liệu lỗi id sản phẩm";

require("Views/vKetqua.php");
?>