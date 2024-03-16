    	<div id="content_left"> 
        	<div class="left1">
            	<h3>CHỨC NĂNG</h3>
                <p><a href="?module=<?=$module?>&act=them">Thêm Nhóm SP</a></p>
                <p><a href="?module=<?=$module?>">Danh sách Nhóm SP</a></p>
             
            </div>

        </div>
        <div id="content_right"> 
        	<h1> QUẢN LÝ SẢN PHẨM</h1>
            <h2> THÊM NHÓM SẢN PHẨM</h2>
            <div id="right_detail">
            <form name="form1" method="post" action="?module=<?=$module?>&act=xulythem">
              <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                  <td height="30">id</td>
                  <td><input type="text" name="t2" id="t2"></td>
                </tr>
                <tr>
                  <td width="120" height="30">Tên nhóm SP:</td>
                  <td width="380"><input type="text" name="t1" id="t1"></td>
                </tr>
               
                <tr>
                  <td height="30">Trạng thái:</td>
                  <td>
                  Có <input type="radio" name="rTrangthai" id="r1" value="1" checked> &nbsp;
                  Không <input type="radio" name="rTrangthai" id="r2" value="0">
                  </td>
                </tr>
                <tr>
                  <td height="30">Loại Catgeory</td>
                  <td>
                  PC<input type="radio" name="rCat" id="C1" value="10" checked> &nbsp;
                  Parts <input type="radio" name="rCat" id="C2" value="30">
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td><input type="submit" name="button" id="button" value="Đồng ý"></td>
                </tr>
              </table>
            </form>

			</div>
        </div>
