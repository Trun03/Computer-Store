<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Trang chủ</title>

<link rel="stylesheet" type="text/css" href="CSS/Menu.css">



<link rel="stylesheet" href="https:
<!--nhúng file css và js của Slide show-->
<link rel="stylesheet" type="text/css" href="CSS/SlideShow.css">
<script src="JS/SlideShow.js"></script>
</head>

<body>
<div id="wrapper">
    <?php include("ViewsHome/inc_Menu.php"); ?>
	
    <div id="content" class="clear_fix">
        
       
    	
		<?php 
			
            $module = "";
            if(isset($_REQUEST["module"]))
                $module = $_REQUEST["module"];
        
            if($module=="tintuc")
            {
                require("ControllersHome/ctlTintuc.php");
            }
            else if($module=="sanpham")
            {
                
                require("ControllersHome/ctlSanpham.php");
            }
            else if($module=="sanpham2")
            {
                
                require("ControllersHome/ctlSanpham2.php");
            }
            
            else if($module=="chitietsanpham")
            {
                require("ControllersHome/ctlChitietSanpham.php");
            }
            else if($module=="chitietsanpham2")
            {
                require("ControllersHome/ctlChitietSanpham2.php");
            }
            else if($module=="cart")
            {
                require("ControllersHome/ctlCart.php");
            }
			else if($module=="checkout")
            {
                require("ControllersHome/ctlCheckout.php");
            }
            else
            {
                require("ControllersHome/ctlHome.php");
            }
        ?>
         
       
    
    </div> <!--id="content" -->
    <footer class="footer" style="background-color:black">
    <div class="footer-wrapper">
        <div class="footer-layout">
            <div class="footer-row">
                <div class="footer-col-3">
                  <h3 style="color: white">Laptop</h3>
                    <a class="footer-link" href="about.html" style="color:white">Workstations</a>
                    <a class="footer-link " href="contact.html"style="color: white">Gaming</a>
                    <a class="footer-link footer-link-bot " href="contact.html"style="color: white">Hybrid</a>
                </div>
                <div class="footer-col-3">
                    <h3 style="color: white">PC</h3>
                    <a class="footer-link" href="?module=sanpham&manhom=7"style="color: white">AIO</a>
                    <a class="footer-link " href="?module=sanpham&manhom=8"style="color: white">Prebuilt</a>
                    <a class="footer-link footer-link-bot" href="?module=sanpham&manhom=9"style="color: white">Custom</a>
                </div>
                <div class="footer-col-3">
                  <h3 style="color: white">Parts</h3>
                  <a class="footer-link" href="?module=sanpham2&manhom=11"style="color:white ">GPU</a>
                  <a class="footer-link " href="?module=sanpham2&manhom=12"style="color: white">RAM</a>
                  <a class="footer-link " href="?module=sanpham2&manhom=13"style="color: white">Storage</a>
                  <a class="footer-link footer-link-bot" href="?module=sanpham2&manhom=14"style="color: white">Others</a>
              </div>
            </div>
        </div>
        <div class="footer-layout-2">
            <div class="footer-container">
                <span class="footer-left"style="color: white">&copy;PartsVN</span>
                <span class="footer-right"style="color: white">Computer Parts Selling Website</span>
            </div>
        </div>
    </div>
</footer>
</div>
</body>
</html>
