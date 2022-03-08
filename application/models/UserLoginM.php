<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserLoginM extends CI_Model
{
	public function selectLoginData($data)
	{
		return $this->db->where($data)->get("tbluser")->result();
	}

	public function selectCity()
	{
		return $this->db->get("tblcity")->result();
	}

	public function insertUser($data)
	{
		return $this->db->insert("tbluser", $data);
	}
}
?>