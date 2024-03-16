<?php
require_once("Models/clsSanpham.php");

$link_tieptuc ="?module=" . $module;
$thongbao ="";

$sanpham = new clsSanpham();
$ketqua = $sanpham->LaySanphamMoiNhat(3);
require_once("ViewsHome/v_Home.php");
?>