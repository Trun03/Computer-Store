<?php
require_once("clsDatabase.php");
class clsSanpham
{
	public $db;
	public $data;
	function __construct()
	{
		$this->db = new clsDatabase();
		$this->data = array();
	}
	
	
	function LayDanhSachSanpham($trangthai=2, $cat_id=0, $tukhoa="")
	{
		$sql = "SELECT Sp.*, Cat.cat_name, Cat.cat_status 
					FROM pc AS Sp INNER JOIN tbCategory AS Cat 
					ON Sp.cat_id=Cat.cat_id WHERE 1 ";
		if($cat_id != 0)
			$sql = $sql . " AND Sp.cat_id = " . $cat_id;
		
		
		if($trangthai!=2) 
		{
			$sql = $sql . " AND status = " . $trangthai;
			$sql = $sql . " AND cat_status = " . $trangthai;
		}
		
		if($tukhoa!="")
			$sql = $sql . " AND Sp.title LIKE '%" . $tukhoa . "%'";
			
		$ketqua = $this->db->ThucthiSQL($sql);
		
		$this->data=NULL;
		if($ketqua==TRUE)
			$this->data = $this->db->pdo_stm->fetchAll();
		return $ketqua;
	}
		
	
	function ThemSanpham($name,$price, $images, $summary,$content,$status,$cat_id)
	{
		$sql = "INSERT INTO pc VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?)";
		$data[] = $name;
		
		$data[] = $price;
		$data[] = $images;
		$data[] = $summary;
		$data[] = $content;
		$data[] = $status;
		$data[] = $cat_id;
 		$ketqua = $this->db->ThucthiSQL($sql,$data);
		return $ketqua;
	}
	
	function SuaSanpham($id,$name,$price, $images, $summary,$content,$status,$cat_id)
	{
		$sql = "UPDATE pc SET title=?, price = ?, 
				images=?,summary=?,content=?, status=?, cat_id=? WHERE id=?";
		$data[] = $name;
	
		$data[] = $price;
		$data[] = $images;
		$data[] = $summary;
		$data[] = $content;
		$data[] = $status;
		$data[] = $cat_id;
		$data[] = $id;
 		$ketqua = $this->db->ThucthiSQL($sql,$data);
		return $ketqua;
	}
	
	function XoaSanpham($id)
	{
		$sql = "DELETE FROM pc WHERE id=?";
		$data[] = $id;
 		$ketqua = $this->db->ThucthiSQL($sql,$data);
		return $ketqua;
	}
	
	function TimTheoIDSanpham($id, $trangthai=2)
	{
		$sql = "SELECT * FROM pc WHERE id=?";
		if($trangthai!=2) 
			$sql = $sql . " AND status = " . $trangthai;
			
		$data[] = $id;
 		$ketqua = $this->db->ThucthiSQL($sql,$data);
		
		$this->data=NULL;
		if($ketqua==TRUE)
			$this->data = $this->db->pdo_stm->fetch();
		return $ketqua;
	}
	
	function TimTheoNhomSanpham($cat_id)
	{
		$sql = "SELECT Sp.*, Cat.cat_status FROM pc AS Sp INNER JOIN tbCategory AS Cat 
				ON Sp.cat_id=Cat.cat_id	WHERE sp.cat_id=?";
		$data[] = $cat_id;
 		$ketqua = $this->db->ThucthiSQL($sql,$data);
		
		$this->data=NULL;
		if($ketqua==TRUE)
			$this->data = $this->db->pdo_stm->fetch();
		return $ketqua;
	}
	
	function SuaTrangThaiSanpham($id, $status)
	{
		$sql = "UPDATE pc SET status = ? WHERE id=?";
		$data[] = $status;
		$data[] = $id;
 		$ketqua = $this->db->ThucthiSQL($sql,$data);
		return $ketqua;
	}
	
	function LaySanphamMoiNhat($n)
	{
		$sql = "SELECT Sp.*, Cat.cat_status FROM pc AS Sp INNER JOIN tbCategory AS Cat 
				ON Sp.cat_id=Cat.cat_id
				WHERE status = 1 AND cat_status=1 ORDER BY id DESC LIMIT 0,$n";
		
		$ketqua = $this->db->ThucthiSQL($sql);
		
		$this->data=NULL;
		if($ketqua==TRUE)
			$this->data = $this->db->pdo_stm->fetchAll();
		return $ketqua;
	}
	
	function TimTheo_DS_IDSanpham($list, $trangthai=2)
	{
		$sql = "SELECT * FROM pc WHERE id in ($list)";
		if($trangthai!=2) 
			$sql = $sql . " AND status = " . $trangthai;
			
		$data[] = NULL;
 		$ketqua = $this->db->ThucthiSQL($sql,$data);
		
		$this->data=NULL;
		if($ketqua==TRUE)
			$this->data = $this->db->pdo_stm->fetchAll();
		return $ketqua;
	}
}
?>