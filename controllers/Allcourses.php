<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Allcourses extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("allcoursesM", "am");
		$this->load->model("NotificationM", "nn");
	}
	public function loadPlaylists()
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

		$this->load->view("allcourses", $temp);
	}
	public function loadPlaylistInfo($pid)
	{
		$data5 = array(
			"userID" => $_SESSION['uid'],
			"playlistID" => $pid
		);
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
		$user = array(
			"r.userID"=>$_SESSION['uid']
		);
		$temp = array(
			"pname" => $this->am->selectPlaylistNameByID($data),
			"videoinfo" => $this->am->selectVideoByPlaylistID($data1),
			"count" => $this->am->countVideos($data1),
			"myreview" => $this->am->selectMyReviewByUserId($user),
			"review" => $this->am->selectReviewsByPlaylistID($data),
			"countR" => $this->am->countReviews($data2),
			"countF" => $this->am->countForums($data3),
			"forum" => $this->am->selectForumsByPlaylistID($data),
			"save" => $this->am->checkSavedPlaylists($data5)
		);

		$this->load->view("coursePlaylistInfo", $temp);
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
		$count=count($this->am->checkLike($d2));
			if($count==0)
				$likestatus="no";
			else
				$likestatus="yes";	

		$temp = array(
			"pname" => $this->am->selectPlaylistNameByID($data),
			"videoinfo" => $this->am->selectvideoByvideoID($data1),
			"videoID"=>$vid,
			"playlistID" =>$pid,
			"comments"=>$this->am->selectCommentByVideoId($data1),
			"questions"=>$this->am->selectQuestionByVideoId($data1),
			"likestatus"=>$likestatus,
			"countlikes"=>$this->am->selectLikesByVideoId($vd),
			"likers"=>$this->am->selectLikersByVideoId($data1),
			// "userID"=>$uid
		);
		$this->load->view("coursevideoinfo",$temp);	
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
			$this->am->insertComment($data);
			$d=array("videoId"=>$vid);
			$vinfo=$this->am->selectvideoByvideoID($d);
			$str=$_SESSION['uname']." Commented on you video ".$vinfo[0]->Title;


			$ndata=array(
				"senderID"=>$_SESSION['uid'],
				"senderImage"=>$_SESSION['uimage'],
				"userid"=>$vinfo[0]->userID,
				"notificationDesc"=>$str
			);
			$this->nn->insertNotification($ndata);
			redirect("Allcourses/loadVideoInfo/$pid/$vid");
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
			$this->am->insertQuestion($data);
			$d=array("videoId"=>$vid);
			$vinfo=$this->am->selectvideoByvideoID($d);
			$str=$_SESSION['uname']." asked question on you video ".$vinfo[0]->Title;


			$ndata=array(
				"senderID"=>$_SESSION['uid'],
					"senderImage"=>$_SESSION['uimage'],
				"userid"=>$vinfo[0]->userID,
				"notificationDesc"=>$str
			);
			$this->nn->insertNotification($ndata);
		redirect("Allcourses/loadVideoInfo/$pid/$vid");
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
			$this->am->insertAnswer($data,$data1);
			redirect("Allcourses/loadVideoInfo/$pid/$vid");
	}
	public function addLike($pid,$vid)
	{
		$data=array(
			"userid"=>$_SESSION['uid'],
			"videoid"=>$vid,
		);

		$this->am->likeVideo($data);
			$d=array("videoId"=>$vid);
			$vinfo=$this->am->selectvideoByvideoID($d);
			$str=$_SESSION['uname']." liked  your video ".$vinfo[0]->Title;

			$ndata=array(
				"senderID"=>$_SESSION['uid'],
					"senderImage"=>$_SESSION['uimage'],
				"userid"=>$vinfo[0]->userID,
				"notificationDesc"=>$str
			);
			$this->nn->insertNotification($ndata);
		redirect("Allcourses/loadVideoInfo/$pid/$vid");
	}
	public function addUnlike($pid,$vid)
	{
		$data=array(
			"userid"=>$_SESSION['uid'],
			"videoid"=>$vid,
		);
		$this->am->unlikeVideo($data);
		redirect("Allcourses/loadVideoInfo/$pid/$vid");
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
		$this->am->insertReview($data);
		redirect("Allcourses/loadPlaylistInfo/$pid");
	}

	public function removeReview($uid,$pid)
	{
		$data=array(
				"userID" => $uid
			);
		$this->am->deleteReview($data);
		redirect("Allcourses/loadPlaylistInfo/$pid");
	}
	public function removeComment($cid,$pid,$vid)
	{
		$data=array(
				"commentID" => $cid
			);
		$this->am->deleteComment($data);
		redirect("Allcourses/loadVideoinfo/$pid/$vid");
	}
	public function loadAddForum($uid, $pid)
	{
		$data = array(
			"playlistID" => $pid
		);
		$temp = array(
			"uID" => $uid,
			"plID" => $pid,
			"pname" => $this->am->selectPlaylistNameByID($data)
		);
		$this->load->view("addForum", $temp);
	}

	public function loadViewForum($uid, $pid,$fid)
	{
		$data = array(
			"playlistID" => $pid
		);
		$data2= array(
			"playlistForumID" => $fid
		);
		$data3= array(
			"userID" => $uid
		);
		$data4= array(
			"fpl.userID" => $uid
		);
		$temp = array(
			"uID" => $uid,
			"plID" => $pid,
			"pname" => $this->am->selectPlaylistNameByID($data),
			"forum" => $this->am->selectForumsByForumID($data2),
			"answers" => $this->am->selectAnswersByForumID($data2),
			"likes" => $this->am->getForumPostLike($data4),
			"countlikes" => $this->am->countForumPostLike($data4),
			"countforumpost" => $this->am->countForumPost($data2)
		);
		$this->load->view("forumview", $temp);
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
		$this->am->insertForum($data);
		redirect("Allcourses/loadPlaylistInfo/$pid");
	}

	public function addForumAnswer($plid, $fid)
	{
		$uid=$_SESSION['uid'];
		$temp=array(
			"playlistID" =>$plid,
			"playlistForumID"=>$fid
		);

		date_default_timezone_set('Asia/Kolkata');
		$date = date('Y/m/d H:i:s');

		$data=array(
			"forumPostDesc"=>$this->input->post('txtAnswer'),
			"userID"=>$uid,
			"playlistForumID"=>$fid,
			"postedDate"=>$date
		);
		$this->am->insertForumAnswer($data);
		redirect("AllCourses/loadViewForum/$uid/$plid/$fid");
	}

	public function addForumPostLike($plid,$fid,$fpid)
	{
		$uid=$_SESSION['uid'];
		$data=array(
			"userID"=>$_SESSION['uid'],
			"forumPostID"=>$fpid
		);

		$this->am->likeForumPost($data);
		redirect("AllCourses/loadViewForum/$uid/$plid/$fid");
	}
	public function addForumPostUnlike($plid,$fid,$fpid)
	{
		$uid=$_SESSION['uid'];
		$data=array(
			"userID"=>$_SESSION['uid'],
			"forumPostID"=>$fpid
		);
		$this->am->unlikeForumPost($data);
		redirect("AllCourses/loadViewForum/$uid/$plid/$fid");
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

		$cnt = count($this->am->checkFollow($data1));
		if($cnt == 0)
			$follow = "no";
		else
			$follow = "yes";

		$i = 0;
		$countV = $this->am->selectPlaylistByOtheruser($data);
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

			$fpid = $this->am->countVideos($data1);
			$plID[$i] = $fpid;
			$i++;
		}


		$temp= array(
			"users"=>$this->am->selectotheruser($data),
			"playlist" => $this->am->selectPlaylistByOtheruser($data),
			"plID" => $plID,
			"userID" => $uid,
			"follow" => $follow,
			"cntt"=>$this->am->countfollowers($data),
			"cntrev"=>$this->am->countreviewss($plID),
			"cntplaylist"=>$this->am->countPlaylists($data)
		);


		$this->load->view("otheruserprofile", $temp);
	}

	public function follow($uid, $followerid)
	{
		$data = array(
			"userID" => $uid,
			"followerID" => $_SESSION['uid']
		);

		$this->am->followUser($data);
		redirect("Allcourses/otheruser/$uid");
	}

	public function unfollow($uid, $followerid)
	{
		$data = array(
			"userID" => $uid,
			"followerID" => $_SESSION['uid']
		);

		$this->am->unfollowUser($data);
		redirect("Allcourses/otheruser/$uid");
	}

	public function savePlaylist($uid, $pid)
	{
		date_default_timezone_set('Asia/Kolkata');
		$date = date('Y/m/d H:i:s');

		$data = array(
			"userID" => $uid,
			"playlistID" => $pid,
			"saveDate" => $date
		);
		$this->am->insertSavePlaylist($data);
		redirect("Allcourses/loadPlaylistInfo/$pid");
	}

	public function unsavePlaylist($uid, $pid)
	{
		$data = array(
			"userID" => $uid,
			"playlistID" => $pid
		);
		$this->am->deleteSavePlaylist($data);
		redirect("Allcourses/loadPlaylistInfo/$pid");
	}

	public function loadSavedPlaylists($uid)
	{
		$data = array(
			"s.userID" => $uid
		);
		$temp = array(
			"playlist" => $this->am->selectSavedPlaylists($data)
		);
		$this->load->view("savedPlaylists.php", $temp);
	}

	public function loadSearchPlaylist()
	{
		$this->load->view("searchPlaylist.php");
	}

	public function loadSearchResult()
	{
		
		$pl = $this->input->post("txtSearch");
		

		$temp = array(
			"playlist" => $this->am->searchPlaylist($pl)
		);
		
		$this->load->view("searchPlaylist.php", $temp);
	}

}
?>