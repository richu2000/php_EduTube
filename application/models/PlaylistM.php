<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class PlaylistM extends CI_Model
{
	public function getAllSubjects()
	{
		return $this->db->get("tblsubject")->result();
	}
	public function selectForumspostByForumID($data)
	{
		return $this->db->from("tblforumpost f")->join("tbluser u","u.userID=f.userID")->where($data)->get()->result();
	}
	public function getAllCategories()
	{
		return $this->db->get("tblcategory")->result();
	}
	public function checkFollow($data)
	{
		return $this->db->where($data)->get("tblfollow")->result();
	}
	public function getAllSubcategories()
	{
		return $this->db->get("tblsubcategory")->result();
	}
	public function getForumPostLike($data)
	{
		return $this->db->from("tblforumpostlike")->get()->result();
	}
	public function insertPlaylist($data)
	{
		return $this->db->insert("tblplaylist", $data);
	}
	public function selectForumsByForumID($data)
	{
		return $this->db->select("f.*, u.Username, u.userImage")->from("tblplaylistforum f")->join("tbluser u","u.userID=f.userID")->where($data)->get()->result();
	}
	public function selectPlaylistByUserID($data)
	{
		return $this->db->where($data)->get("tblplaylist")->result();
	}

	public function countPlaylists($data)
	{
		return $this->db->where($data)->get("tblplaylist")->num_rows();
	}

	public function deletePlaylist($data)
	{
		return $this->db->delete("tblplaylist", $data);
	}

	public function selectPlaylistNameByID($data)
	{
		return $this->db->where($data)->get("tblplaylist")->result();
	}

	public function insertVideo($data)
	{
		return $this->db->insert("tblvideo", $data);
	}

	public function selectVideoByUserPlaylistID($data)
	{
		return $this->db->select("v.*")->from("tblvideo v")->join("tbluser u", "u.userID=v.userID")->join("tblplaylist p", "p.playlistID=v.playlistID")->where($data)->get()->result();
	}

	public function countVideos($data)
	{
		return $this->db->select("v.*")->from("tblvideo v")->join("tbluser u", "u.userID=v.userID")->join("tblplaylist p", "p.playlistID=v.playlistID")->where($data)->get()->num_rows();
	}

	public function deleteVideo($data)
	{
		return $this->db->delete("tblvideo", $data);
	}
	public function selectvideoByvideoID($data)
	{
		// return $this->db->where($data)->get("tblvideo")->result();
		return $this->db->from("tblvideo v")->join("tbluser u","u.userID=v.userID")->where($data)->get()->result();
	}
	public function insertComment($data)
	{
		return $this->db->insert('tblvideocomment',$data);
	}
	public function deleteComment($data)
	{
		return $this->db->delete("tblvideocomment",$data);
	}
	public function selectCommentByVideoId($data)
	{
		return $this->db->from("tblvideocomment c")->join("tbluser u","u.userID=c.userID")->where($data)->get()->result();
	}
	public function selectLikesByVideoId($data)
	{
		return $this->db->select("l.*")->from("tblvideolike l")->join("tbluser u", "u.userID=l.userID")->join("tblvideo v", "l.videoID=v.videoID")->where($data)->get()->num_rows();
	}
	public function selectLikersByVideoId($data)
	{
		return $this->db->from("tblvideolike l")->join("tbluser u","u.userID=l.userID")->where($data)->get()->result();
	}

	public function selectSubcatByCatID($data)
	{
		return $this->db->where($data)->get("tblsubcategory")->result();
	}

	public function selectSubjectsBySubcatID($data)
	{
		return $this->db->where($data)->get("tblsubject")->result();
	}
	// QUESTIONS
	public function insertQuestion($data)
	{
		return $this->db->insert('tblvideoquestion',$data);
	}

	public function selectQuestionByVideoId($data)
	{
		return $this->db->from("tblvideoQUESTION c")->join("tbluser u","u.userID=c.userID")->where($data)->get()->result();
	}
	// QUESTIONS END
	//answer to question
	public function insertAnswer($data,$data1)
	{
		return $this->db->where($data1)->update('tblvideoquestion',$data);
	}
	//answer to question end

	public function likeVideo($data)
	{
		return $this->db->insert("tblvideolike",$data);
	}
	public function unlikeVideo($data)
	{
		return $this->db->delete("tblvideolike",$data);	
	}
	public function checkLike($data)
	{
		return $this->db->where($data)->get('tblvideolike')->result();
	}
	
	public function insertReview($data)
	{
		return $this->db->insert("tblplaylistrating",$data);
	}

	public function selectReviewsByPlaylistID($data)
	{
		// return $this->db->where($data)->get("tblplaylistrating")->result();
		return $this->db->select("rv.*, u.userImage,u.userName")->from("tblplaylistrating rv")->join("tbluser u", "rv.userID=u.userID")->where($data)->get()->result();
	}

	public function countReviews($data)
	{
		// return $this->db->where($data)->get("tblvideo")->num_rows();
	return $this->db->select("rv.*")->from("tblplaylistrating rv")->join("tblplaylist p", "p.playlistID=rv.playlistID")->where($data)->get()->num_rows();
	}

	public function insertForum($data)
	{
		return $this->db->insert("tblplaylistforum",$data);
	}
	public function countForumPostLike($data)
	{
		return $this->db->select("fpl.*")->from("tblforumpostlike fpl")->join("tblforumpost f", "fpl.forumPostID=f.forumPostID")->where($data)->get()->num_rows();
	}
	public function countForums($data)
	{
		// return $this->db->where($data)->get("tblvideo")->num_rows();
		return $this->db->select("f.*")->from("tblplaylistforum f")->join("tblplaylist p", "p.playlistID=f.playlistID")->where($data)->get()->num_rows();
	}
	public function selectAnswersByForumID($data)
	{
		return $this->db->select("f.*, u.userImage, u.firstName")->from("tblforumpost f")->join("tbluser u", "f.userID=u.userID")->where($data)->get()->result();
	}
	public function countForumPost($data)
	{
		return $this->db->where($data)->get("tblforumpost")->num_rows();
	}
	
	public function selectForumsByPlaylistID($data)
	{
		// return $this->db->where($data)->get("tblplaylistrating")->result();
		return $this->db->select("f.*, u.userImage, u.Username")->from("tblplaylistforum f")->join("tbluser u", "f.userID=u.userID")->where($data)->get()->result();
	}
	public function selectPlaylistByOtheruser($data)
	{
		return $this->db->from("tblplaylist")->where($data)->get()->result();	
	}

	public function countfollowers($data)
	{
		return $this->db->from("tblfollow")->where($data)->get()->num_rows();	
	}

	public function countreviewss($data)
	{
		return $this->db->from("tblplaylistrating")->where($data)->get()->num_rows();	
	}
	public function selectotheruser($data)
	{
		return $this->db->from("tbluser")->where($data)->get()->result();
	}

}

?>