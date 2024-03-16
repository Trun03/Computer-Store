<?php
require_once("clsDatabase.php");
class clsAdmin
{
	public $db;
	public $data;
	function __construct()
	{
		$this->db = new clsDatabase();
		$this->data = array();
	}
	function KiemTraTaiKhoan($user,$pass)
	{
		$sql = "SELECT * FROM tbadmin WHERE username=? and password=?";
		
		$data[] = $user;
		$data[] = $pass;
 		$ketqua = $this->db->ThucthiSQL($sql,$data);
		
		$this->data=NULL;
		if($ketqua==TRUE)
			$this->data = $this->db->pdo_stm->fetch();
		return $ketqua;
	}
}
?>