<link rel="stylesheet" type="text/css" href="CSS/butt2.css">    
<link rel="stylesheet" type="text/css" href="CSS/Sanpham5.css">
		
		<div id="content_center">
		<div class="left1">
			<div class="search-bar" style="padding-top:30px;">
            	
                <?php
				$tukhoa = isset($_REQUEST["tTukhoa"])? $_REQUEST["tTukhoa"]:"";
				$manhom = isset($_REQUEST["manhom"])?$_REQUEST["manhom"]:0;
				?>
                <form name="fTimkiem" id="fTiemkiem" action="index.php">
                <input type="hidden" name="module" value="sanpham2">
                <input type="hidden" name="act" value="timkiem">
                
                <p style="color:black;">
				<div class="search-fields">
                <select name="manhom" id="manhom">
                	<option value="0">All Categories</option>
					<?php
                        require_once("Models/clsCategory2.php");
                        require_once("DungChung/Tienich.php");
                        $nps = new clsCategory2();
                        
						$nps->LayDanhSachNhomSanpham(1,1);
                        ShowOptions($nps->data,"cat_id","cat_name",$manhom);
                    ?>
                </select>
                </p>
				<p style="color:black;">
                <input type="text" name="tTukhoa" id="tTukhoa" value="<?=$tukhoa?>" placeholder="Tìm 1 sản phẩm">
                </p>
                <p>
                <input type="submit" name="bSearch" id="bSearch" value="Search">
                </p>
             </div>
                </form>
            </div>
		
        </div>
        	<h1 style="font-size:30px; color:black;">
            <?php
			if($act=="timkiem")
				echo "Search Result";
			else
				echo "Product List";
			?>
            </h1>
		    
            <?php
			if($sanpham->data==NULL)
				echo "<H2>No Products Availible</H2>";
			else
				if($act=="timkiem")
					echo "<H2>". $soketqua . " Products Availible</H2>";
				else if($tennhom!="")
					echo "<H2> Product type: " . $tennhom . "</H2>";
					
			?>
			
            <div id="content_sp">
              <?php
              	$rows = $sanpham->data;
				foreach($rows as $row)
				{
					$hinhanh = $row["images"];
					if($hinhanh=="")
						$hinhanh = "no-Image.png";
					$trangthai="";
					if($row["status"]==1)
						$trangthai = "có";
					else
						$trangthai = "không";
				?>
              <div class="sanpham">
                <p><a href="?module=chitietsanpham2&manhom=<?=$row["cat_id"]?>&masp=<?=$row["id"]?>"><?=$row["title"]?></a></p><!-- thẻ <a href>...</a> để tạo liên kết tới sp1.htm-->
                <p><a href="?module=chitietsanpham2&manhom=<?=$row["cat_id"]?>&masp=<?=$row["id"]?>"><img src="Hinhanh/Sanpham/<?=$hinhanh?>"></a></p> <!--thẻ p này dùng để cố định chiều cao dòng 2, và để ảnh căn giữa-->
                <p><?=number_format($row["price"])?> VNĐ</p>
                <p class="button2" style="text-align:center;"><a href="?module=cart&act=add&masp=<?=$row["id"]?>"> <span>Buy</span></a></p>
              </div>
				<?php
				}
				?>
            </div>
       </div>