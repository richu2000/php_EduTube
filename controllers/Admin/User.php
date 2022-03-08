<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("admin/UserM","um");
	}
	public function allusers()
	{
		$temp=array(
			"users"=>$this->um->selectAllUsers(),
			// "playlist"=>$this->um->selectplaulistbyUsers()
		);
		$this->load->view("admin/allusers",$temp);
	}
}
?>