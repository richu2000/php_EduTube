<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("Admin/adminManageProfileM","mpm");
	}
	public function index()
	{
		$this->load->view("Admin/Home");
	}
	public function loadadminManageProfile($aid)
	{
		$data = array( "adminID" => $_SESSION['aid']);
		$temp = array(
			"userinfo" => $this->mpm->selectUserByID($data),			
		);
		$this->load->view("admin/adminManageProfile", $temp);
	}

	public function EditDetails()
	{
		$id = array( "adminID" => $_SESSION['aid']);
		$newpass = $this->input->post("txtnwpwd");
		$repass = $this->input->post("txtrepwd");
		if(!empty($newpass))
		{
			// if($newpass==$repass)
			// {
			$data = array(
				"Username" => $this->input->post("txtUname"),
				"Password" =>$newpass									
			);
			// }
			// else
			// {
				// $temp=array("pwderr"=>"confirm password does not match");
				// $this->load->view("Admin/adminManageProfile",$temp);
				// redirect("admin/admin/loadadminManageProfile/".$id);
			// }
		}
		else
		{
			$data = array(
				"Username" => $this->input->post("txtUname")
			);
		}
		$this->mpm->updateUser($data);
		redirect("admin/admin/loadadminManageProfile/".$id);
	}
}

?>