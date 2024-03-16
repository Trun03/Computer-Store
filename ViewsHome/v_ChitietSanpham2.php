<link rel="stylesheet" type="text/css" href="CSS/butt2.css">    
<link rel="stylesheet" type="text/css" href="CSS/Sanpham5.css">	
  
        
        <div id="content_center_2">
        	<h1 style="font-size:30px;text-align:center;">CHI TIẾT SẢN PHẨM</h1>
            
            <?php
			if($sanpham->data==NULL)
				echo "<H2>KHÔNG TÌM THẤY SẢN PHẨM</H2>";
			else
			{
				$row = $sanpham->data;
				$hinhanh = $row["images"];
				  if($hinhanh=="")
				  	$hinhanh= "no-Image.png";
			?>
      <div id="content_sp">
        <div class="sanpham">
            <p><a href="#"><?=$row["title"];?></a></p>
            <p><a href="#"><img src="Hinhanh/Sanpham/<?=$hinhanh?>"></a></p>
        </div>
        <div class="tomtatsanpham">
            <h3>Price: <?=number_format($row["price"])?> VNĐ</h3>
            <h3><i class="fa fa-shopping-cart"></i><a href="?module=cart&act=add&masp=<?=$row["id"]?>"> Buy</a></h3>
            
                <?=$row["content"]?>
            </div>
            <h2>
            <?=$row["summary"]?>
            </h2>
        </div> 
        
        </div>
            </div>
            <?php
			}
			?>
        </div>
