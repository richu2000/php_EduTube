<?php
defined('BASEPATH') OR exit('No direct script access allowed');




class UserM extends CI_Model
{
	public function selectAllUsers()
	{
		return $this->db->get("tbluser")->result();
	}
	// public function selectplaulistbyUsers()
	// {
	// 	return $this->db->where($data)->from("tblplaylist pl")->join("tbluser u","u.userID=pl.userID")->get()->result();
	// }
}
?>