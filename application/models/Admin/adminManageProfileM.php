




<?php 

class adminManageProfileM extends CI_Model
{
	public function selectUserByID($data)
	{
		return $this->db->where($data)->get("tbladmin")->result();
	}
	public function updateUser($newdata)
	{
		$where=array("adminID"=>$_SESSION['aid']);
		return $this->db->where($where)->update("tbladmin", $newdata);
	}
}
?>





