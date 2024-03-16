<?php
require_once("Models/clsHoadon.php");
require_once("Models/clsSanpham.php");
require_once("Models/clsSanpham2.php");

$link_tieptuc ="?module=cart";
$thongbao ="";

if(isset($_SESSION["cart"])==false)
	$thongbao ="Giỏ hàng rỗng";
else if(isset($_REQUEST["dathang"])==false)
	$thongbao ="lỗi submit form đặt hàng";
else
{
	$hoten = $_REQUEST["hoten"];
	$diachi = $_REQUEST["diachi"];
	$dienthoai = $_REQUEST["dienthoai"];
	$ngaynhan = $_REQUEST["ngaynhan"];
	$hoadon = new clsHoadon();
	$ketqua = $hoadon->ThemHoadon($hoten,$diachi,$dienthoai,$ngaynhan);
	if($ketqua==FALSE)
		$thongbao ="LỖI THÊM HÓA ĐƠN MỚI";
	else
	{

		$mahd = $hoadon->getLastId();
		$sanpham = new clsSanpham();
	    $sanpham2 = new clsSanpham2();
	
		foreach($_SESSION["cart"] as $masp=>$soluong)
		{
            $result1 = $sanpham->TimTheoIDSanpham($masp);
            $result2 = $sanpham2->TimTheoIDSanpham($masp);

            if (is_array($result1) && is_array($result2)) {
            $ketqua = array_merge($result1, $result2);
		
			if (is_array($sanpham->data) && is_array($sanpham2->data)) {
				$giasp = $sanpham->data["price"];
				$giasp2 = $sanpham2->data["price"];
		
			$ketqua = $hoadon->ThemChitietHoadon($mahd,$masp,$soluong,$giasp2,$giasp);
			}
			else {
				$thongbao ="Error adding price";
			}
		}else{
			$thongbao ="Error processing ID";
		}
			if($ketqua==FALSE)
				$thongbao ="Error adding Cart";
			else
			{
				unset($_SESSION["cart"]);
 				$thongbao ="Thank you for purchasing, an email will be sent to you for confirmation and payment.";
				
			}
		}
	}
}
$sanpham = new clsSanpham();

$ketqua = $sanpham->LaySanphamMoiNhat(3);

require_once("ViewsHome/v_Home.php");
require("Views/vKetqua.php");
?>