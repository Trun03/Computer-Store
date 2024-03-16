	
    
	<nav>
    <ul>
	<li class="sub-menu-parent" tab-index="0">

<a href="index.php">Main</a>

</li>
      
	
	<li class="sub-menu-parent" tab-index="0">
        <a href="#">PCs</a>
        <ul class="sub-menu">
          <li><?PHP
				require_once("Models/clsCategory.php");
				$mnuNhomSP = new clsCategory();
				$ketqua = $mnuNhomSP->LayDanhSachNhomSanpham(1,1);
				?>
            	<ul>
                	<?php
					$rows = $mnuNhomSP->data;
					foreach($rows as $row)
					{
					?>
                	<li><a href="?module=sanpham&manhom=<?=$row["cat_id"]?>"><?=$row["cat_name"]?></a></li>
                    <?php
					}
					?>
                </ul></li>
        </ul>
      </li>
	  <li class="sub-menu-parent" tab-index="0">
        <a href="#">Parts</a>
        <ul class="sub-menu">
          <li><?PHP
				require_once("Models/clsCategory2.php");
				$mnuNhomSP = new clsCategory2();
				$ketqua = $mnuNhomSP->LayDanhSachNhomSanpham(1,1);
				?>
            	<ul>
                	<?php
					$rows = $mnuNhomSP->data;
					foreach($rows as $row)
					{
					?>
                	<li><a href="?module=sanpham2&manhom=<?=$row["cat_id"]?>"><?=$row["cat_name"]?></a></li>
                    <?php
					}
					?>
                </ul></li>
        </ul>
      </li>
	  <li class="sub-menu-parent" tab-index="0">

        <a href="?module=cart"><b>Cart</b></a>
	</li>
	
	</ul>
  </nav>