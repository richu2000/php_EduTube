
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Country extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("admin/CountryM","cm");	
	}
	public function index()
	{
		$temp=array(
			"countries"=>$this->cm->selectAllCountries()
		);
		$this->load->view("admin/allCountries",$temp);
	}
	public function loadAddCountry()
	{
		$this->load->view("admin/addCountry");
	}
	public function addcountry()
	{
		$data=array(
			"countryName"=>$this->input->post('txtCountry')
		);
		$this->cm->insertcountry($data);
		redirect("admin/country");
	}
	public function removecountry($id)
	{
		$data=array("countryID"=>$id);
		$this->cm->deletecountry($data);
		redirect("admin/country");
	}
	public function loadEditcountry($id)
	{
		$data=array(
			"countryID"=>$id
			);
		$temp=array("countryinfo"=>$this->cm->selectcountryByID($data));
		$this->load->view("admin/updcountry",$temp);
	}
	public function editcountry($id)
	{
		$newdata=array("countryName"=>$this->input->post('txtcountry'));
		$where=array("countryID"=>$id);
		$this->cm->updatecountry($newdata,$where);
		redirect("admin/country");	
	}

	public function loadAllStatesByCountryID($id)
	{
		$data=array("sc.countryID"=>$id);
		$temp=array(
			"states"=>$this->cm->selectstateBycountryid($data),
			"countryID"=>$id
		);
		$this->load->view("admin/allstate",$temp);
	}
	public function removestate($sid,$cid)
	{
		$data=array("stateID"=>$sid);
		$this->cm->deletestate($data);
		redirect("admin/country/loadAllStatesByCountryID/$cid");
	}
	public function loadAddstate($cid)
	{
		$temp=array("countryID"=>$cid);
		$this->load->view("admin/addState",$temp);
	}
	public function addstate($cid)
	{
		$data=array(
			"stateName"=>$this->input->post('txtstate'),
			"countryID"=>$cid
			);
		$this->cm->insertstate($data);
			redirect("admin/country/loadAllStatesByCountryID/$cid");
		// redirect("admin/country/loadAllstateBycountryID/".$cid);
	}

	public function loadEditstate($sid,$cid)
	{
		$data=array(
			"stateID"=>$sid
			);
		$temp=array("stateinfo"=>$this->cm->selectstateByID($data));
		$this->load->view("admin/updstate",$temp);
	}
	public function editstate($sid,$cid)
	{
		$newdata=array(
			"stateName"=>$this->input->post('txtstate')
		);
		$where=array("stateID"=>$sid);
		$this->cm->updatestate($newdata,$where);
		redirect("admin/country/loadAllStatesByCountryID/".$cid);	
	}

	public function loadAllcitiesBystateID($sid)
	{
		$data=array("tg.stateID"=>$sid);
		$temp=array(
			"cities"=>$this->cm->selectcitiesBystateid($data),
			"stateID"=>$sid
		);
		$this->load->view("admin/allcities",$temp);	
	}
	public function removecity($sid,$cid)
	{
		$data=array("cityID"=>$sid);
		$this->cm->deletecity($data);
		redirect("admin/country/loadAllStatesByCountryID/$cid");
	}

	public function loadAddcity($cid)
	{
		$temp=array("stateID"=>$cid);
		$this->load->view("admin/addcity",$temp);
	}
	public function addcity($cid)
	{
		$data=array(
			"cityName"=>$this->input->post('txtcity'),
			"stateID"=>$cid
			);
		$this->cm->insertcity($data);
			redirect("admin/country/loadAllcitiesBystateID/$cid");
		// redirect("admin/country/loadAllstateBycountryID/".$cid);
	}
	public function loadEditcity($sid,$cid)
	{
		$data=array(
			"cityID"=>$sid
			);
		$temp=array("cityinfo"=>$this->cm->selectcityByID($data));
		$this->load->view("admin/updcity",$temp);
	}
	public function editcity($sid,$cid)
	{
		$newdata=array(
			"cityName"=>$this->input->post('txtcity')
		);
		$where=array("cityID"=>$sid);
		$this->cm->updatecity($newdata,$where);
		redirect("admin/country/loadAllcitiesBystateID/".$cid);	
	}
	
}
?>