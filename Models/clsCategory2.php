<?php
require_once("clsDatabase.php");
class clsCategory2
{
	public $db;
	public $data;
	function __construct()
	{
		$this->db = new clsDatabase();
		$this->data = array();
	}
	
	
	
	
	function LayDanhSachNhomSanpham($trangthai =2, $cat_id =0) 
	{
		$sql = "SELECT * FROM tbcategory2";
		
		
		if($trangthai!=2) 
			$sql = $sql . " WHERE cat_status = " . $trangthai;
		if($cat_id == 1)
			$sql .= " ORDER BY cat_id ASC";
		else if($cat_id == -1)
			$sql .= " ORDER BY cat_id DESC";
				$ketqua = $this->db->ThucthiSQL($sql);
		
		$this->data=NULL;
		if($ketqua==TRUE)
			$this->data = $this->db->pdo_stm->fetchAll();
		return $ketqua;
	}
		
	
	function ThemNhomSanpham($cat_id,$cat_name,$cat_status)
	{
		$sql = "INSERT INTO tbcategory2 VALUES ( ?, ?, ?)";
		$data[] = $cat_id;
		$data[] = $cat_name;
		$data[] = $cat_status;
 		$ketqua = $this->db->ThucthiSQL($sql,$data);
		return $ketqua;
	}
	
	function SuaNhomSanpham($cat_id,$cat_name,$cat_status)
	{
		$sql = "UPDATE tbcategory2 SET cat_name=?,  cat_status = ? WHERE cat_id=?";
		$data[] = $cat_name;
		
		$data[] = $cat_status;
		$data[] = $cat_id;
 		$ketqua = $this->db->ThucthiSQL($sql,$data);
		return $ketqua;
	}
	
	function XoaNhomSanpham($cat_id)
	{
		$sql = "DELETE FROM tbcategory2 WHERE cat_id=?";
		$data[] = $cat_id;
 		$ketqua = $this->db->ThucthiSQL($sql,$data);
		return $ketqua;
	}
	
	function TimTheoIDNhomSanpham($cat_id)
	{
		$sql = "SELECT * FROM tbcategory2 WHERE cat_id=?";
		$data[] = $cat_id;
 		$ketqua = $this->db->ThucthiSQL($sql,$data);
		
		$this->data=NULL;
		if($ketqua==TRUE)
			$this->data = $this->db->pdo_stm->fetch();
		return $ketqua;
	}
	
	function SuaTrangThaiSanpham($cat_id, $cat_status)
	{
		$sql = "UPDATE tbcategory2 SET cat_status = ? WHERE cat_id=?";
		$data[] = $cat_status;
		$data[] = $cat_id;
 		$ketqua = $this->db->ThucthiSQL($sql,$data);
		return $ketqua;
	}
}
?>