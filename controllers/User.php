<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("manageProfileM", "mpm");
		$this->load->model("allcoursesM", "am");
	}
	public function index()
	{
		$i = 0;
		$countV = $this->am->selectAllPlaylist();
		// $pid = $countV[0]->playlistID;
		$plID=array(

			);
		foreach ($countV as $p)
		{
			$playid[$i] = $p->playlistID;

			$data1 = array(
				"v.PlaylistID" => $playid[$i]
			);

			$fpid = $this->am->countVideos($data1);
			$plID[$i] = $fpid;
			$i++;
		}

		$temp = array(
			"playlist" => $this->am->selectAllPlaylist(),
			"plID" => $plID
		);

		$this->load->view("UserHome",$temp);
		// $this->load->view("test");
	}

	public function loadManageProfile($uid)
	{
		$data = array( "userID" => $uid );
		$temp = array(
			"userinfo" => $this->mpm->selectUserByID($data),
			"c" => $this->mpm->selectCity()
		);

		$this->load->view("manageProfile", $temp);
	}

	public function editUserDetails($uid)
	{
		$id = array( "userID" => $uid );
		$pass = $this->input->post("txtCpwd");
		if(!empty($pass))
		{
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
				"Password" => $pass
			);
		}
		else
		{
			$data = array(
				"firstName" => $this->input->post("txtFname"),
				"lastName" => $this->input->post("txtLname"),
				"Username" => $this->input->post("txtUname"),
				"Bio" => $this->input->post("Bio"),
				"Gender" => $this->input->post("gender"),
				"mobileNo" => $this->input->post("txtMob"),
				"Address" => $this->input->post("Address"),
				"cityID" => $this->input->post("city"),
				"Email" => $this->input->post("txtEmail"),
			);
		}
		$this->mpm->updateUser($data, $id);
		redirect("User/loadManageProfile/".$uid);
	}
	
}

?>