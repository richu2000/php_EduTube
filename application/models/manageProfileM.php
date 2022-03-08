<?php 

class manageProfileM extends CI_Model
{
	public function selectCity()
	{
		return $this->db->get("tblcity")->result();
	}

	public function selectUserByID($data)
	{
		return $this->db->where($data)->get("tbluser")->result();
	}

	public function updateUser($data, $id)
	{
		return $this->db->where($id)->update("tbluser", $data);
	}
}


?>