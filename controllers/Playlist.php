<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Playlist extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("PlaylistM", "pm");
		$this->load->model("NotificationM", "nn");
	}
	public function loadPlaylists($uid)
	{
		$data = array(
			"userID" => $uid
		);
		$i = 0;
		$countV = $this->pm->selectPlaylistByUserID($data);
		// $pid = $countV[0]->playlistID;
		$plID=array();
		foreach ($countV as $p)
		{
			$playid[$i] = $p->playlistID;

			$data1 = array(
				"v.PlaylistID" => $playid[$i]
			);

			$fpid = $this->pm->countVideos($data1);
			$plID[$i] = $fpid;
			$i++;
		}

		$temp = array(
			"playlist" => $this->pm->selectPlaylistByUserID($data),
			"count" => $this->pm->countPlaylists($data),
			"plID" => $plID
		);

		$this->load->view("Playlist", $temp);
	}

	public function loadAddPlaylist()
	{
		$temp = array(
			"subject" => $this->pm->getAllSubjects(),
			"subcategory" => $this->pm->getAllSubcategories(),
			"category" => $this->pm->getAllCategories()
		);
		$this->load->view("addPlaylist", $temp);
	}

	public function addPlaylist($uid)
	{
		$img = $_FILES['imgUp']['name'];
		copy($_FILES['imgUp']['tmp_name'], "C:/xampp/htdocs/EduTube/Resources/Shared/Images/".$img) or die("Cannot upload image!");
		$data = array(
			"playlistName" => $this->input->post("txtPname"),
			"subjectID" => $this->input->post("subject"),
			"Status" => "Active",
			"postedDate" => date("Y/m/d"), 
			"userID" => $uid,
			"playlistImage" => $img
		);
		$this->pm->insertPlaylist($data);
		redirect("Playlist/loadPlaylists/$uid");
	}

	public function removePlaylist($uid, $pid)
	{
		$data = array(
			"playlistID" => $pid
		);

		$this->pm->deletePlaylist($data);
		redirect("Playlist/loadPlaylists/$uid");
	}

	public function loadPlaylistInfo($uid, $pid)
	{
		$data = array(
			"playlistID" => $pid
		);

		$data1 = array(
			"v.playlistID" => $pid
		);

		$data2 = array(
			"rv.playlistID" => $pid
		);

		$data3 = array(
			"f.playlistID" => $pid
		);

		$temp = array(
			"pname" => $this->pm->selectPlaylistNameByID($data),
			"videoinfo" => $this->pm->selectVideoByUserPlaylistID($data1),
			"count" => $this->pm->countVideos($data1),
			"review" => $this->pm->selectReviewsByPlaylistID($data),
			"countR" => $this->pm->countReviews($data2),
			"countF" => $this->pm->countForums($data3),
			"forum" => $this->pm->selectForumsByPlaylistID($data),
		);

		$this->load->view("playlistInfo", $temp);
	}

	public function loadAddVideo($uid, $pid)
	{
		$data = array(
			"playlistID" => $pid
		);

		$temp = array(
			"pname" => $this->pm->selectPlaylistNameByID($data)
		);
		$this->load->view("addVideo", $temp);
	}

	public function addVideo($uid, $pid)
	{
		$img = $_FILES['img']['name'];
		copy($_FILES['img']['tmp_name'], "C:/xampp/htdocs/EduTube/Resources/Shared/Images/".$img) or die("Cannot upload image!");
		$vid = $_FILES['txtURL']['name'];
		copy($_FILES['txtURL']['tmp_name'], "C:/xampp/htdocs/EduTube/Resources/Shared/Videos/".$vid) or die("Cannot upload video!");

		date_default_timezone_set('Asia/Kolkata');
		$date = date('Y/m/d H:i:s');

		$data = array(
			"Title" => $this->input->post("txtVtitle"),
			"Description" => $this->input->post("desc"),
			"userID" => $uid,
			"playlistID" => $pid,
			"uploadDateTime" => $date,
			"Thumbnail" => $img,
			"videoURL" => $vid
		);

		$this->pm->insertVideo($data);
		redirect("Playlist/loadPlaylistInfo/$uid/$pid");
	}

	public function removeVideo($uid, $pid, $vid)
	{
		$data = array(
			"videoID" => $vid
		);

		$this->pm->deleteVideo($data);
		redirect("Playlist/loadPlaylistInfo/$uid/$pid");
	}
	public function loadVideoinfo($pid, $vid)
	{
		$data = array(
			"playlistID" =>$pid
		);

		$data1 = array(
			"videoID"=>$vid
		);

		$vd = array(
			"v.videoID"=>$vid
		);
		$d2=array(
		"userID"=>$_SESSION['uid'],
		"videoID"=>$vid,
		);
		$count=count($this->pm->checkLike($d2));
			if($count==0)
				$likestatus="no";
			else
				$likestatus="yes";	

		$temp = array(
			"pname" => $this->pm->selectPlaylistNameByID($data),
			"videoinfo" => $this->pm->selectvideoByvideoID($data1),
			"videoID"=>$vid,
			"playlistID" =>$pid,
			"likestatus"=>$likestatus,
			"comments"=>$this->pm->selectCommentByVideoId($data1),
			"questions"=>$this->pm->selectQuestionByVideoId($data1),
			"countlikes"=>$this->pm->selectLikesByVideoId($vd),
			"likers"=>$this->pm->selectLikersByVideoId($data1),
			// "userID"=>$uid
		);
		$this->load->view("videoInfo",$temp);	
	}
	public function addComment($pid,$vid)
	{
		$data1 = array(
			"playlistID" =>$pid
		);
			$data=array(
				"userID"=>$_SESSION['uid'],
				"videoID"=>$vid,
				"commentDesc"=>$this->input->post('txtComment'),
				"postedDate" => date("Y/m/d"),
				// "pname" => $this->pm->selectPlaylistNameByID($data1)
			);
			$this->pm->insertComment($data);
			redirect("Playlist/loadVideoInfo/$pid/$vid");
	}
	public function loadSubcatsByCatID($cid)
	{
		$data = array(
			"CategoryID" => $cid
		);
		$scats = $this->pm->selectSubcatByCatID($data);
?>
		<option value="-1">--Select subcategory--</option>
<?php
		foreach ($scats as $s)
		{
?>
			<option value="<?php echo $s->SubCatID; ?>"> <?php echo $s->SubCatName; ?> </option>
<?php
		}
	}

	public function loadSubjectsBySubcatID($scid)
	{
		$data = array(
			"SubCatID" => $scid
		);
		$subj = $this->pm->selectSubjectsBySubcatID($data);
?>
		<option value="-1">--Select subject--</option>
<?php
		foreach ($subj as $s)
		{
?>
			<option value="<?php echo $s->subjectID; ?>"> <?php echo $s->subjectName; ?> </option>
<?php
		}
	}
	public function addQuestions($pid,$vid)
	{
		$data1 = array(
			"playlistID" =>$pid
		);
			$data=array(
				"userID"=>$_SESSION['uid'],
				"videoID"=>$vid,
				"videoQuestionDesc"=>$this->input->post('txtQuestion'),
				"postedDate" => date("Y/m/d"),
				// "pname" => $this->pm->selectPlaylistNameByID($data1)
			);
			$this->pm->insertQuestion($data);
			redirect("Playlist/loadVideoInfo/$pid/$vid");
	}
	public function addAnswer($pid,$vid,$qid)
	{
			$temp=array(
				"playlistID" =>$pid,
				"videoID"=>$vid
			);
			$data1 = array(
				"videoQuestionID"=>$qid
			);
			$data=array(
				"Answer"=>$this->input->post('txtAnswer')
			);
			$this->pm->insertAnswer($data,$data1);
			redirect("Playlist/loadVideoInfo/$pid/$vid");
	}
	public function addLike($pid,$vid)
	{
		$data=array(
			"userid"=>$_SESSION['uid'],
			"videoid"=>$vid,
		);

		$this->pm->likeVideo($data);			
		redirect("Playlist/loadVideoInfo/$pid/$vid");
	}
	public function addUnlike($pid,$vid)
	{
		$data=array(
			"userid"=>$_SESSION['uid'],
			"videoid"=>$vid,
		);
		$this->pm->unlikeVideo($data);
		redirect("Playlist/loadVideoInfo/$pid/$vid");
	}
	public function addReview($uid, $pid)
	{
		$data = array(
			"playlistID" => $pid,
			"userID" => $uid,
			"Review" => $this->input->post("txtReview"),
			"Rating" => $this->input->post("rate"),
			"rDate" => date("Y/m/d")
		);
		$this->pm->insertReview($data);
		redirect("Playlist/loadPlaylistInfo/$pid");
	}
	public function removeComment($cid,$pid,$vid)
	{
		$data=array(
				"commentID" => $cid
			);
		$this->pm->deleteComment($data);
		redirect("Playlist/loadVideoinfo/$pid/$vid");
	}
	public function loadAddForum($uid, $pid)
	{
		$data = array(
			"playlistID" => $pid
		);
		$temp = array(
			"uID" => $uid,
			"plID" => $pid,
			"pname" => $this->pm->selectPlaylistNameByID($data)
		);
		$this->load->view("addForum", $temp);
	}

	public function addForum($uid, $pid)
	{
		$data = array(
			"playlistID" => $pid,
			"userID" => $uid,
			"Title" => $this->input->post("txtForumName"),
			"Description" => $this->input->post("desc"),
			"Status" => "Active",
			"createdDate" => date("Y/m/d")
		);
		$this->pm->insertForum($data);
		redirect("Playlist/loadPlaylistInfo/$pid");
	}
	public function otheruser($uid)
	{
		$data=array(
			"userID"=>$uid
		);

		$data1=array(
			"userID"=>$uid,
			"followerID"=>$_SESSION['uid']
		);

		$cnt = count($this->pm->checkFollow($data1));
		if($cnt == 0)
			$follow = "no";
		else
			$follow = "yes";

		$i = 0;
		$countV = $this->pm->selectPlaylistByOtheruser($data);
				// $countV = $this->am->;
		// $pid = $countV[0]->playlistID;
		$plID=array(

			);
		foreach ($countV as $p)
		{
			$playid[$i] = $p->playlistID;

			$data1 = array(
				"v.PlaylistID" => $playid[$i]
			);

			$fpid = $this->pm->countVideos($data1);
			$plID[$i] = $fpid;
			$i++;
		}

		$temp= array(
			"users"=>$this->pm->selectotheruser($data),
			"playlist" => $this->pm->selectPlaylistByOtheruser($data),
			"plID" => $plID,
			"userID" => $uid,
			"follow" => $follow,
			"cntt"=>$this->pm->countfollowers($data),
			"cntrev"=>$this->pm->countreviewss($plID),
			"cntplaylist"=>$this->pm->countPlaylists($data)
		);
			$this->load->view("otheruserprofile", $temp);
	}	
	public function loadViewForum($uid, $pid,$fid)
	{
		$data = array(
			"playlistID" => $pid
		);
		$data2= array(
			"playlistForumID" => $fid
		);
		$data4= array(
			"fpl.userID" => $uid
		);
		$temp = array(
			"uID" => $uid,
			"plID" => $pid,
			"pname" => $this->pm->selectPlaylistNameByID($data),
			// "countF" => $this->pm->countForums($data3),
			"answers" => $this->pm->selectAnswersByForumID($data2),
			"forum" => $this->pm->selectForumsByForumID($data2),
			"countlikes" => $this->pm->countForumPostLike($data4),
			"comments"=>$this->pm->selectForumspostByForumID($data2),
			"countforumpost" => $this->pm->countForumPost($data2),
				"likes" => $this->pm->getForumPostLike($data4),
		);
		$this->load->view("forumview", $temp);
	}
		
	public function loadNotifications($uid)
	{
		$data = array(
			"userID" => $uid
		);

		$temp = array(
			"notification"=>$this->nn->getNotification(),
			// "sender"=>$this->nn->getsender()
		);

		$this->load->view("viewNotification", $temp);
	}	

}

?>