<?php
if ($sanpham->data==NULL)
{
	$thongbao ="không tìm thấy thông tin";
	require("Views/vKetqua.php");
}
else
{
?>    
    	<div id="content_left"> 
        	<div class="left1">
            	<h3>CHỨC NĂNG</h3>
                <p><a href="?module=<?=$module?>&act=them">Thêm Sản phẩm</a></p>
                <p><a href="?module=<?=$module?>">Danh sách Sản phẩm</a></p>

            </div>

        </div>
        <div id="content_right"> 
        	<h1> QUẢN LÝ SẢN PHẨM</h1>
            <h2> SỬA SẢN PHẨM</h2>
            <div id="right_detail">
            <?php
				$row = $sanpham->data;
			?>
			<form name="form1" method="post" action="?module=<?=$module?>&act=xulysua"  enctype="multipart/form-data">
				<input type="hidden" name="id" id="id" value="<?=$id?>">
			  <table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
                  <td width="120" height="30">Nhóm sản phẩm:</td>
                  <td width="630">
                  	<select name="s1" id="s1">
                    	<option value="0"> Chọn nhóm SP</option>
                    	<?php
							require_once("Models/clsCategory.php");
							
							require_once("DungChung/Tienich.php");
							$nps = new clsCategory();
                         
							$nps->LayDanhSachNhomSanpham(2,0);
							
							ShowOptions($nps->data,"cat_id","cat_name",$row["cat_id"]);
							
						?>
                    </select>
                  </td>
                </tr>
                <tr>
				  <td width="142" height="30">Tên PC:</td>
				  <td width="258"><input type="text" name="t1" id="t1"  value="<?=$row["title"];?>"></td>
</tr>
				<tr>
				  <td height="30">Giá:</td>
				  <td><input type="text" name="t3" id="t3"  value="<?=$row["price"]?>"></td>
				</tr>
				<tr>
                  <td height="30">Hình ảnh:</td>
                  <?php
				  $hinhanh = $row["images"];
				  if($hinhanh=="")
				  	$hinhanh= "no-Image.png";
				  ?>
                  <td>
                  <img width="100" src="Hinhanh/Sanpham/<?=$hinhanh?>"><br>
                  <input type="hidden" name="anhHientai" id="anhHientai" value="<?=$row["images"]?>">
                  <input type="file" name="f1" id="f1">
                  </td>
                </tr>
                 <tr>
                  <td height="30" valign="top">Tóm tắt:</td>
                  <td><textarea name="t4" id="t4" rows="5" cols="50"><?=$row["summary"]?></textarea></td>
                </tr>
                 <tr>
                  <td height="30"  valign="top">Chi tiết:</td>
				  <td width="400"><input type="text" name="t5" id="t5"  value="<?=$row["content"];?>"></td>
                  
                </tr>
                <tr>
                  <td height="30">Trạng thái:</td>
                  <td>
                  Có <input type="radio" name="rTrangthai" id="r1" value="1"  <?=($row["status"]==1)?"checked":""?>> &nbsp;
                  Không <input type="radio" name="rTrangthai" id="r2" value="0" <?=($row["status"]==0)?"checked":""?>>
                  </td>
                </tr>
				<tr>
                  <td></td>
				  <td><input type="submit" name="button" id="button" value="Đồng ý"></td>
				</tr>
			  </table>
			</form>
			<script language="javascript">
				var ckTomtat = CKEDITOR.replace('t4');
				ckTomtat.config.width = 600;
				CKFinder.setupCKEditor(ckTomtat, null, { type: 'Images' });
				
				var ckNoidung = CKEDITOR.replace('t5');
				ckNoidung.config.width = 600;
				CKFinder.setupCKEditor(ckNoidung, null, { type: 'Images' });
			</script>
			</div>
        </div>
<?php
}
?>