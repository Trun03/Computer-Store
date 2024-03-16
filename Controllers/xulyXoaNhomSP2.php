<?php
require_once("Models/clsSanpham2.php");
if($id!="" && is_numeric($id)){
	$sp = new clsSanpham2();
	$sp->TimTheoNhomSanpham($id);
	if($sp->data==NULL){ 
		$ketqua = $Nhomsanpham2->XoaNhomSanpham($id);
		if($ketqua==FALSE)
		$thongbao="Lỗi xóa dữ liệu";
		else
		$thongbao ="Xóa dữ liệu thành công";
	}
	else{
		$ketqua = $Nhomsanpham2->SuaTrangThaiSanpham($id,0);
		if($ketqua==FALSE)
		$thongbao="Lỗi xóa dữ liệu";
		else
		$thongbao ="Nhóm SP đã có sản phẩm liên quan
					<br>Đã cập nhật sang trạng thái không hiển thị ";
	}
}
else
	$thongbao ="Xóa dữ liệu lỗi id sản phẩm";
require("Views/vKetqua.php");
?>