<link rel="stylesheet" type="text/css" href="CSS/butt3.css">    
<link rel="stylesheet" type="text/css" href="CSS/Sanpham4.css">
        <div id="content_center">
			<div style="background-color:black;">
			<section class="hero2" style="color:black;">
            <div class="container2">
              
              <h1 style=" text-align:center;margin-bottom: 5px">RTX 4090</h1>
              <p style="font-size:30px; text-align:center;">Efficient. Strong. Translucent.</p>
              <a href="?module=cart&act=add&masp=1003" class="button"><span>Buy</span></a>
			 
            </div>
          </section>
          <section class="heroA">
            <div class="container2">
            <img src="Hinhanh/Sanpham/rtx.png" style="width:1270px;max-width:100%;height=300px; ">
            </div>
          </section>
        </div>
          <section class="hero3">
            <div class="container3">
              
              <h1 style=" text-align:center;margin-bottom: 5px" class="newprod">Predator Helios Neo 16</h1>
              <p style="font-size:30px; text-align:center;"class="newprod">Acer's first affordable gaming monster.</p>
              <a href="?module=chitietsanpham2&manhom=11" class="button2"><span>Buy</span></a>
            </div>
          </section>
          <section class="heroB"style="margin-top: 30px">
            <div class="container3">
              <img src="hinhanh/sanpham/acer.jpg">
            </div>
          </section>
        	<h1 style="color:black; text-align:center; "class="newprod">New Products</h1>
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
                <p><a href="?module=chitietsanpham&manhom=<?=$row["cat_id"]?>&masp=<?=$row["id"]?>"><?=$row["title"]?></a></p><!-- thẻ <a href>...</a> để tạo liên kết tới sp1.htm-->
                <p><a href="?module=chitietsanpham&manhom=<?=$row["cat_id"]?>&masp=<?=$row["id"]?>"><img src="Hinhanh/Sanpham/<?=$hinhanh?>"></a></p> <!--thẻ p này dùng để cố định chiều cao dòng 2, và để ảnh căn giữa-->
                <p><?=number_format($row["price"])?> VNĐ</p>
                <p class="button2" style="text-align:center;"><a href="?module=cart&act=add&masp=<?=$row["id"]?>"> <span>Buy</span></a></p>
              
              </div>
				<?php
				}
				?>
              
            </div>
       </div>