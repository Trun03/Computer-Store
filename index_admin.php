<?php
session_start();
require("KiemtraDangNhap.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Trang chủ</title>
<link rel="stylesheet" type="text/css" href="css_Admin/Menu.css">
<script language="javascript" src="JS/JQuery.js"></script>
<script language="javascript" src="JS/ckeditor/ckeditor.js"></script>
<script language="javascript" src="JS/ckfinder/ckfinder.js"></script>
</head>

<body>
<div id="wrapper">
	<div id="header"> 


    <div class="header-links">
            <a href="#" class="header-link">TRANG QUẢN TRỊ WEBSITE</a>
        </div>
</div>       
        

<div id="content" class="clear_fix">


<div id="menu">
    <div class="menu-btn">
        <a href="index_admin.php" class="menu-link">Trang chủ</a>
    </div>
    <div class="menu-btn">
        <a href="?module=nhomsp" class="menu-link">Quản lý Nhóm Sản phẩm</a>
    </div>
    <div class="menu-btn">
        <a href="?module=sanpham" class="menu-link">Quản lý PC</a>
    </div>
    <div class="menu-btn">
        <a href="?module=sanpham2" class="menu-link">Quản lý Phụ Tùng</a>
    </div>
    <div class="menu-btn">
        <a href="?module=hoadon" class="menu-link">Quản lý Hóa đơn</a>
    </div>
</div>

    <?php
    $module = "";
    if(isset($_REQUEST["module"]))
        $module = $_REQUEST["module"];
     if($module=="nhomsp")
    {
        require("Controllers/ctlCategory.php");
    }
    else if($module=="sanpham")
    {
        require("Controllers/ctlSanpham.php");
    }
    else if($module=="sanpham2")
    {
        require("Controllers/ctlSanpham2.php");
    }
    else if($module=="hoadon")
    {
        require("Controllers/ctlHoadon.php");
    }
    else
    {
        require("Views/vHome.php");
    }
    ?>
 </div>
 
</div>