<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("Admin/LoginM","lm");
	}
	public function index()
	{
		$this->load->view("Admin/Login");
	}
	public function validateLogin()
	{
		$data=array(
			"username"=>$this->input->post('txtuname'),
			"password"=>$this->input->post('txtpwd')
		);
		$loggedData=$this->lm->selectLoginData($data);
		if(count($loggedData)>0)
		{
			$_SESSION['aid']=$loggedData[0]->adminID;
			$_SESSION['aname']=$loggedData[0]->Username;
			redirect("Admin/Admin");
		}
		else
		{
			$temp=array("loginerr"=>"invalid username or password");
			$this->load->view("Admin/Login",$temp);
		}
	}

	public function Logout()
	{
		session_destroy();
		redirect("Admin/Login");
	}
}
?>