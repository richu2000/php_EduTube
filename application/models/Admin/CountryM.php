



<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CountryM extends CI_Model
{
	public function selectAllCountries()
	{
		return $this->db->get("tblcountry")->result();
	}
	public function insertcountry($data)
	{
		return $this->db->insert("tblcountry",$data);
	}
	public function deletecountry($data)
	{
		return $this->db->delete("tblcountry",$data);
	}
	public function selectcountryByID($data)
	{
		return $this->db->where($data)->get("tblcountry")->result();
	}
	public function updatecountry($newdata,$where)
	{
		return $this->db->where($where)->update("tblcountry",$newdata);
	}
	public function selectstateBycountryid($data)
	{
		return $this->db->where($data)->from("tblstate sc")->join("tblcountry c","c.countryID=sc.countryID")->get()->result();
	}
	public function deletestate($data)
	{
		return $this->db->delete("tblstate",$data);
	}
	public function insertstate($data)
	{
		return $this->db->insert("tblstate",$data);
	}

	public function selectstateByID($data)
	{
		return $this->db->where($data)->get("tblstate")->result();	
	}
	public function updatestate($newdata,$where)
	{
		return $this->db->where($where)->update("tblstate",$newdata);
	}

	public function selectcitiesBystateid($data)
	{
		return $this->db->where($data)->from("tblcity tg")->join("tblstate sc","sc.stateID=tg.stateID")->get()->result();		
	}
	public function insertcity($data)
	{
		return $this->db->insert("tblcity",$data);
	}
	public function deletecity($data)
	{
		return $this->db->delete("tblcity",$data);
	}
	public function selectcityByID($data)
	{
		return $this->db->where($data)->get("tblcity")->result();	
	}
	public function updatecity($newdata,$where)
	{
		return $this->db->where($where)->update("tblcity",$newdata);
	}
}
 ?>