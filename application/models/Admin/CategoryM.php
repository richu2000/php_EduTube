



<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoryM extends CI_Model
{
	public function selectAllCategories()
	{
		return $this->db->get("tblcategory")->result();
	}
	public function insertCategory($data)
	{
		return $this->db->insert("tblcategory",$data);
	}
	public function deleteCategory($data)
	{
		return $this->db->delete("tblcategory",$data);
	}
	public function selectCatByID($data)
	{
		return $this->db->where($data)->get("tblcategory")->result();
	}
	public function updateCategory($newdata,$where)
	{
		return $this->db->where($where)->update("tblcategory",$newdata);
	}
	public function selectSubcatByCatid($data)
	{
		return $this->db->where($data)->from("tblsubcategory sc")->join("tblcategory c","c.categoryID=sc.categoryID")->get()->result();
	}
	public function deleteSubcat($data)
	{
		return $this->db->delete("tblsubcategory",$data);
	}
	public function insertSubcat($data)
	{
		return $this->db->insert("tblsubcategory",$data);
	}

	public function selectSubcatByID($data)
	{
		return $this->db->where($data)->get("tblsubcategory")->result();	
	}
	public function updateSubcategory($newdata,$where)
	{
		return $this->db->where($where)->update("tblsubcategory",$newdata);
	}

	public function selectSubjectsBySubcatid($data)
	{
		return $this->db->where($data)->from("tblsubject tg")->join("tblsubcategory sc","sc.SubCatID=tg.SubCatID")->get()->result();		
	}
	public function insertsubject($data)
	{
		return $this->db->insert("tblsubject",$data);
	}
	public function deletesubject($data)
	{
		return $this->db->delete("tblsubject",$data);
	}
	public function selectsubjectByID($data)
	{
		return $this->db->where($data)->get("tblsubject")->result();	
	}
	public function updatesubject($newdata,$where)
	{
		return $this->db->where($where)->update("tblsubject",$newdata);
	}
}
 ?>