<link rel="stylesheet" type="text/css" href="CSS/butt2.css">    
<link rel="stylesheet" type="text/css" href="CSS/Sanpham3.css">	
<link rel="stylesheet" type="text/css" href="CSS/Cart3.css">
        <div id="content_center_2"> <!-- không kèm <div id="content_right"> -->
        	<h1 style="color:black; text-align:center">Your Shopping Cart</h1>
            <?php
            
            $count =0;
            if(isset($_SESSION["cart"]))
                $count = count($_SESSION["cart"]);
            if($count==0)
            {
            ?>
                <h2>You have no products</h2>
                
                <h3><a href="index.php">Shop now</a></h3>	
        	<?php
			}
			else{
				$arr = array_keys($_SESSION["cart"]);
				$str = implode(",", $arr);
				
				$sanpham = new clsSanpham();
                $sanpham2 = new clsSanpham2();
				$ketqua = $sanpham->TimTheo_DS_IDSanpham($str,2);
                $ketqua2 = $sanpham2->TimTheo_DS_IDSanpham($str,2);
				if(($ketqua==FALSE) OR ($ketqua2==FALSE))
				{
					echo "<h2>Database Error</h2>";
				}
				else
				{
					$total =0;
					$rows = array_merge($sanpham->data, $sanpham2->data);
                   
                
                }
            
            
			?>
            
            <div id="content_cart">
                <form name="f1" id="f1" action="?module=cart&act=update" method="post">
                <div class="cart_item_title">
                    <span style="height:100%">Image</span>
                    <span style="height:100%">Product name</span>
                    <span style="height:100%">Price</span>
                    <span style="height:100%">Amount</span>
                    <span style="height:100%">Total</span>
                    <span style="height:100%">Delete</span>
                </div>
                <?php
				foreach($rows as $row)
				{
					$masp = $row["id"];
					$soluong = $_SESSION['cart'][$masp];
					$total+=$soluong*$row["price"];
					
					$hinhanh = $row["images"];
					if($hinhanh=="")
						$hinhanh = "no-Image.png";
				?>
                
                <div class="cart_item">
                    <span style="height:105px;"><a href="#" style="height:105px;"><img src="hinhanh/Sanpham/<?=$hinhanh?>"></a></span>
                    <span style="height:100%">
                        <p class="cart_item_name"><a href="?module=chitietsanpham&manhom=<?=$row["cat_id"]?>&masp=<?=$row["id"]?>"> <?=$row["title"]?> </a></p> 
                    </span>
                    <span style="height:100%"><?=number_format($row["price"])?> VNĐ</span>
                    <span style="height:100%"><input type="number" name="qty[<?=$masp?>]" value="<?=$soluong?>"></span>
                    <span style="height:100%"><?=number_format($soluong*$row["price"])?> VNĐ</span>
                    <span style="height:100%"><a href="?module=cart&act=del&masp=<?=$row["id"]?>" title="Delete" style="font-size:30px;"> X </a></span>
                </div>
                <?php
				}
				?>
                <div class="cart_update">
                    <input type="submit" name="capnhat" value="Update your cart">
                </div>
                <div class="cart_total" style="color:black">
                    Total <?=number_format($total)?> VNĐ
                </div>
                
                </form>
            </div>
            <h1 style="color:black; text-align:center;">Cashout</h1>
            <div id="cart_checkout">
            	<script>
				function kt()
				{
					hoten = document.getElementById("hoten");
					diachi = document.getElementById("diachi");
					dienthoai = document.getElementById("dienthoai");
					if(hoten.value=="" || diachi.value=="" ||dienthoai.value=="")
					{
						alert("Not enough Info");
						return false;
					}
				}
				</script>
                <form name="f2" id="f1" action="?module=checkout" method="post" onSubmit="return kt();" style="text-align:center;">
                    <p><span style="color:black">Name:</span> 
                        <input type="text" name="hoten" id="hoten"></p>
                    <p><span style="color:black">Address:</span> 
                        <input type="text" name="diachi" id="diachi"></p>
                    <p><span style="color:black">Phone:</span> 
                        <input type="number" name="dienthoai" id="dienthoai"></p>
                    <p><span style="color:black">Receiving Day:</span> 
                        <input type="date" name="ngaynhan" id="ngaynhan"></p>
                    <p style="padding-top:20px;"><input type="submit" name="dathang" id="dathang" value="Accept" ></p>
                </form>
            </div>
            <?php
		}
			?>
        
        </div> 