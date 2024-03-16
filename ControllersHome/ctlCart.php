<?php
require_once("Models/clsSanpham.php");
require_once("Models/clsSanpham2.php");

$act = "";
$masp = "";
if(isset($_REQUEST["act"]))
	$act = $_REQUEST["act"];
if(isset($_REQUEST["masp"]))
	$masp = $_REQUEST["masp"];

$link_tieptuc ="?module=" . $module;
$thongbao ="";

if($act == "add"){
	if($masp=="" || is_numeric($masp)==false)
		$thongbao = "ID not valid";
	else
	{
		if(isset($_SESSION["cart"][$masp])==true)
		{
			$soluong = $_SESSION["cart"][$masp];

			$_SESSION["cart"][$masp] = $soluong +1; 
		}
		else
		{
			
			$_SESSION["cart"][$masp] =1;
		}
		$thongbao ="Item added to cart";
	
	}
	require_once("ViewsHome/v_Cart.php");
	require("Views/vKetqua.php");
}
else if($act == "del"){
	if($masp=="" || is_numeric($masp)==false)
		$thongbao = "ID not valid";
	else
	{
		if($masp==0)
		{
			unset($_SESSION["cart"]);
		}
		else
		{
			unset($_SESSION["cart"][$masp]);
		}
		$thongbao ="Item deleted from cart";
		
	}
	require_once("ViewsHome/v_Cart.php");
	require("Views/vKetqua.php");
}
else if($act == "update"){
	if(isset($_POST["capnhat"])==false)
		$thongbao = "ERROR WITH CART UPDATE FORM";
	else
	{
		$qty = $_REQUEST["qty"];
		foreach($qty as $masp=>$soluong)
		{

			if($soluong==0 || is_numeric($soluong)==false)
				unset($_SESSION["cart"][$masp]);
			else	
				$_SESSION["cart"][$masp] = $soluong;
		}
		$thongbao ="Product quantity updated";

	}
	require_once("ViewsHome/v_Cart.php");
	require("Views/vKetqua.php");
}
else
{
	require_once("ViewsHome/v_Cart.php");
}

?>