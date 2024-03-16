<?php
require_once("clsDatabase.php");
class clsHoadon
{
	public $db;
	public $data;
	function __construct()
	{
		$this->db = new clsDatabase();
		$this->data = array();
	}
	
	
	function LayDanhSachHoadon()
	{
		$sql = "SELECT * FROM tbHoadon ORDER BY mahd DESC";
		$ketqua = $this->db->ThucthiSQL($sql);
		
		$this->data=NULL;
		if($ketqua==TRUE)
			$this->data = $this->db->pdo_stm->fetchAll();
		return $ketqua;
	}
	
	public function TongTien($mahd)
	{
		$sql = "SELECT SUM(soluong*giamua) AS tongtien 
					FROM `tbchitiethoadon` WHERE mahd=?";
		$data[] = $mahd;
 		$ketqua = $this->db->ThucthiSQL($sql,$data);
		
		if($ketqua==TRUE)
		{
			$this->data = $this->db->pdo_stm->fetch();
			return $this->data["tongtien"];
		}
		else
			return -1;
	}
	
	
	function TimHoadon($mahd)
	{
		$sql = "SELECT * FROM tbHoadon WHERE mahd=?";
		$data[] = $mahd;
		$ketqua = $this->db->ThucthiSQL($sql,$data);
		
		$this->data=NULL;
		if($ketqua==TRUE)
			$this->data = $this->db->pdo_stm->fetch();
		return $ketqua;
	}
	
	
	function ChitietHoadon($mahd)
	{
		$sql = "SELECT CTHD.*, SP.title,SP.author 
				 FROM tbchitiethoadon CTHD INNER JOIN books SP 
				 ON CTHD.masp = SP.id WHERE mahd = ?";
		$data[] = $mahd;
		$ketqua = $this->db->ThucthiSQL($sql,$data);
		
		$this->data=NULL;
		if($ketqua==TRUE)
			$this->data = $this->db->pdo_stm->fetchAll();
		return $ketqua;
	}
	
	function DoiTrangThaiHoadon($mahd, $ttmoi)
	{
		$sql = "UPDATE tbHoadon SET trangthai = ? WHERE mahd=?";
		$data[] = $ttmoi;
		$data[] = $mahd;
		$ketqua = $this->db->ThucthiSQL($sql,$data);
		return $ketqua;
	}
	
	function XoaChitietHD($mahd)
	{
		$sql = "DELETE FROM tbchitiethoadon WHERE mahd=?";
		$data[] = $mahd;
		$ketqua = $this->db->ThucthiSQL($sql,$data);
		return $ketqua;
	}
	
	function XoaHoaDon($mahd)
	{
		$sql = "DELETE FROM tbhoadon WHERE mahd=?";
		$data[] = $mahd;
		$ketqua = $this->db->ThucthiSQL($sql,$data);
		return $ketqua;
	}
	
	function TimChitietHoadon($masp)
	{
		$sql = "SELECT * FROM tbchitiethoadon WHERE masp=?";
		$data[] = $masp;
		$ketqua = $this->db->ThucthiSQL($sql,$data);
		
		$this->data=NULL;
		if($ketqua==TRUE)
			$this->data = $this->db->pdo_stm->fetch();
		return $ketqua;
	}
	
	function ThemHoadon($hoten,$diachi,$dienthoai,$ngaynhan)
	{
		$sql = "INSERT INTO tbHoadon(tennguoimua,diachi,dienthoai,ngaynhan) 
				VALUES(?,?,?,?)";
		$data[] = $hoten;
		$data[] = $diachi;
		$data[] = $dienthoai;
		$data[] = $ngaynhan;
		$ketqua = $this->db->ThucthiSQL($sql,$data);
		return $ketqua;
	}
	
	function getLastId()
	{
		return $this->db->conn->lastInsertId();
	}
	
	function ThemChitietHoadon($mahd,$masp,$soluong,$giasp)
	{
		$sql = "INSERT INTO tbChitietHoadon VALUES(NULL,?,?,?,?)";
		$data[] = $mahd;
		$data[] = $masp;
		$data[] = $soluong;
		$data[] = $giasp;
		$ketqua = $this->db->ThucthiSQL($sql,$data);
		return $ketqua;
	}
}
?>





















