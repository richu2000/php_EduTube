
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("admin/CategoryM","cm");	
	}
	public function index()
	{
		$temp=array(
			"cats"=>$this->cm->selectAllCategories()
		);
		$this->load->view("admin/allCats",$temp);
	}
	public function loadAddCat()
	{
		$this->load->view("admin/addCat");
	}
	public function addCategory()
	{
		$data=array(
			"categoryName"=>$this->input->post('txtCat')
		);
		$this->cm->insertCategory($data);
		redirect("admin/Category");
	}
	public function removeCategory($id)
	{
		$data=array("categoryID"=>$id);
		$this->cm->deleteCategory($data);
		redirect("admin/Category");
	}
	public function loadEditCat($id)
	{
		$data=array(
			"categoryID"=>$id
			);
		$temp=array("catinfo"=>$this->cm->selectCatByID($data));
		$this->load->view("admin/updCat",$temp);
	}
	public function editCategory($id)
	{
		$newdata=array("categoryName"=>$this->input->post('txtCat'));
		$where=array("categoryID"=>$id);
		$this->cm->updateCategory($newdata,$where);
		redirect("admin/Category");	
	}

	public function loadAllSubcatByCatID($id)
	{
		$data=array("sc.categoryID"=>$id);
		$temp=array(
			"subcats"=>$this->cm->selectSubcatByCatid($data),
			"categoryID"=>$id
		);
		$this->load->view("admin/allSubcat",$temp);
	}
	public function removeSubcat($sid,$cid)
	{
		$data=array("SubCatID"=>$sid);
		$this->cm->deleteSubcat($data);
		redirect("admin/Category/loadAllSubcatByCatID/$cid");
	}
	public function loadAddSubcat($cid)
	{
		$temp=array("categoryID"=>$cid);
		$this->load->view("admin/addSubcat",$temp);
	}
	public function addSubcat($cid)
	{
		$data=array(
			"SubCatName"=>$this->input->post('txtsubcat'),
			"categoryID"=>$cid
			);
		$this->cm->insertSubcat($data);
		redirect("admin/Category/loadAllSubcatByCatID/".$cid);
	}

	public function loadEditSubcat($sid,$cid)
	{
		$data=array(
			"SubCatID"=>$sid
			);
		$temp=array("subcatinfo"=>$this->cm->selectSubcatByID($data));
		$this->load->view("admin/updSubcat",$temp);
	}
	public function editSubcategory($sid,$cid)
	{
		$newdata=array(
			"SubCatName"=>$this->input->post('txtsubcat')
		);
		$where=array("SubCatID"=>$sid);
		$this->cm->updateSubcategory($newdata,$where);
		redirect("admin/Category/loadAllSubcatByCatID/".$cid);	
	}

	public function loadAllSubjectsBySubcatID($sid)
	{
		$data=array("tg.SubCatID"=>$sid);
		$temp=array(
			"subjects"=>$this->cm->selectSubjectsBySubcatid($data),
			"SubCatID"=>$sid
		);
		$this->load->view("admin/allSubjects",$temp);	
	}
	public function removesubject($sid,$cid)
	{
		$data=array("subjectID"=>$sid);
		$this->cm->deletesubject($data);
		redirect("admin/category/loadAllSubjectsBySubcatID/$cid");
	}

	public function loadAddsubject($cid)
	{
		$temp=array("SubCatID"=>$cid);
		$this->load->view("admin/addsubject",$temp);
	}
	public function addsubject($cid)
	{
		$data=array(
			"subjectName"=>$this->input->post('txtsubject'),
			"SubCatID"=>$cid
			);
		$this->cm->insertsubject($data);
			redirect("admin/category/loadAllSubjectsBySubcatID/$cid");
		// redirect("admin/country/loadAllstateBycountryID/".$cid);
	}
	public function loadEditsubject($sid,$cid)
	{
		$data=array(
			"subjectID"=>$sid
			);
		$temp=array("subjectinfo"=>$this->cm->selectsubjectByID($data));
		$this->load->view("admin/updsubject",$temp);
	}
	public function editsubject($sid,$cid)
	{
		$newdata=array(
			"subjectName"=>$this->input->post('txtsubject')
		);
		$where=array("subjectID"=>$sid);
		$this->cm->updatesubject($newdata,$where);
		redirect("admin/category/loadAllSubjectsBySubcatID/".$cid);	
	}
}
?>