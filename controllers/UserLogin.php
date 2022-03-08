<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class UserLogin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("UserLoginM","um");
	}

	public function index()
	{
		$this->load->view("UserHome");
	}

	public function validateLogin()
	{
		$data=array(
			"Email"=>$this->input->post('txtEmail'),
			"Password"=>$this->input->post('txtPwd')
		);
		$loggedData=$this->um->selectLoginData($data);
		if(count($loggedData)>0)
		{
			$_SESSION['uid']=$loggedData[0]->userID;
			$_SESSION['uname']=$loggedData[0]->Username;
			$_SESSION['uimage']=$loggedData[0]->userImage;
			redirect("User");
		}
		else
		{
			$temp=array("loginerr"=>"Invalid username or password!");
			$this->load->view("UserLogin",$temp);
		}
	}

	public function Logout()
	{
		session_destroy();
		redirect("User");
	}

	public function loadLogin()
	{
		$this->load->view("UserLogin");
	}

	public function loadRegister()
	{
		$temp = array(
			"city" => $this->um->selectCity()
		);
		$this->load->view("UserRegister", $temp);
	}

	public function addUser()
	{
		$img = $_FILES['img']['name'];
		copy($_FILES['img']['tmp_name'], "C:/xampp/htdocs/EduTube/Resources/User video/images/".$img) or die("Cannot upload image!");
		$data = array(
			"firstName" => $this->input->post("txtFname"),
			"lastName" => $this->input->post("txtLname"),
			"Username" => $this->input->post("txtUname"),
			"Gender" => $this->input->post("gender"),
			"mobileNo" => $this->input->post("txtMob"),
			"Address" => $this->input->post("Address"),
			"Bio" => $this->input->post("Bio"),
			"cityID" => $this->input->post("city"),
			"Email" => $this->input->post("txtEmail"),
			"Password" => $this->input->post("txtCpwd"),
			"Status" => "Active",
			"userImage" => $img
		);

		$this->um->insertUser($data);
		redirect("UserLogin/loadLogin");
	}
}


?>