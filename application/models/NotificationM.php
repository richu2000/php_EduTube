<?php
class NotificationM extends CI_Model
{
	
	// public function getNotification()
	// {
	// 	$data=array("userid"=>$_SESSION['uid']);
	// 	return $this->db->where($data)->get("tblnotification")->result();	
	// }
	public function getNotification()
	{
				$data=array("n.userid"=>$_SESSION['uid']);
		return $this->db->from("tblnotification n")->join("tbluser u","u.userID=n.userID")->where($data)->get()->result();
	}
	// public function getsender()
	// {
	// 	$data=array("n.senderid"=>);
	// 	return $this->db->from("tblnotification n")->join("tbluser u","u.userID=n.senderID")->where($data)->get()->result();
	// }
	public function insertNotification($data)
	{
		$this->db->insert("tblnotification",$data);
	}
}
?>