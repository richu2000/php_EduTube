<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class allcoursesM extends CI_Model
{
	public function selectAllPlaylist()
	{
		return $this->db->get("tblplaylist")->result();
	}
	public function countPlaylists($data)
	{
		return $this->db->where($data)->get("tblplaylist")->num_rows();
	}
	public function countVideos($data)
	{
		// return $this->db->where($data)->get("tblvideo")->num_rows();
		return $this->db->select("v.*")->from("tblvideo v")->join("tblplaylist p", "p.playlistID=v.playlistID")->where($data)->get()->num_rows();
	}
	public function selectPlaylistNameByID($data)
	{
		return $this->db->where($data)->get("tblplaylist")->result();
	}
	public function selectVideoByPlaylistID($data)
	{
		return $this->db->select("v.*")->from("tblvideo v")->join("tblplaylist p", "p.playlistID=v.playlistID")->where($data)->get()->result();
	}
	public function selectvideoByvideoID($data)
	{
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
	//like
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
		return $this->db->where($data)->get("tblvideolike")->result();
	}

	public function insertReview($data)
	{
		return $this->db->insert("tblplaylistrating",$data);
	}
	public function deleteReview($data)
	{
		return $this->db->delete("tblplaylistrating",$data);
	}

	public function selectReviewsByPlaylistID($data)
	{
		// return $this->db->where($data)->get("tblplaylistrating")->result();
		return $this->db->select("rv.*, u.userImage,u.Username")->from("tblplaylistrating rv")->join("tbluser u", "rv.userID=u.userID")->where($data)->get()->result();
	}

	public function selectMyReviewByUserId($data)
	{
		return $this->db->from("tblplaylistrating r")->join("tbluser u","u.userID=r.userID")->where($data)->get()->result();
	}
	
	public function selectForumsByForumID($data)
	{
		return $this->db->select("f.*, u.Username, u.userImage")->from("tblplaylistforum f")->join("tbluser u","u.userID=f.userID")->where($data)->get()->result();
	}
	public function selectForumspostByForumID($data)
	{
		return $this->db->from("tblforumpost f")->join("tbluser u","u.userID=f.userID")->where($data)->get()->result();
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

	public function countForums($data)
	{
		// return $this->db->where($data)->get("tblvideo")->num_rows();
		return $this->db->select("f.*")->from("tblplaylistforum f")->join("tblplaylist p", "p.playlistID=f.playlistID")->where($data)->get()->num_rows();
	}

	public function selectForumsByPlaylistID($data)
	{
		// return $this->db->where($data)->get("tblplaylistrating")->result();
		return $this->db->select("f.*, u.userImage, u.Username")->from("tblplaylistforum f")->join("tbluser u", "f.userID=u.userID")->where($data)->get()->result();
	}

	public function insertForumAnswer($data)
	{
		return $this->db->insert('tblforumpost',$data);
	}

	public function selectAnswersByForumID($data)
	{
		return $this->db->select("f.*, u.userImage, u.firstName")->from("tblforumpost f")->join("tbluser u", "f.userID=u.userID")->where($data)->get()->result();
	}

	public function likeForumPost($data)
	{
		return $this->db->insert("tblforumpostlike",$data);
	}
	public function unlikeForumPost($data)
	{
		return $this->db->delete("tblforumpostlike",$data);
	}
	public function getForumPostLike($data)
	{
		return $this->db->from("tblforumpostlike")->get()->result();
	}
	public function countForumPostLike($data)
	{
		return $this->db->select("fpl.*")->from("tblforumpostlike fpl")->join("tblforumpost f", "fpl.forumPostID=f.forumPostID")->where($data)->get()->num_rows();
	}
	public function countForumPost($data)
	{
		return $this->db->where($data)->get("tblforumpost")->num_rows();
	}
	
	
	public function selectotheruser($data)
	{
		return $this->db->from("tbluser")->where($data)->get()->result();
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

	public function followUser($data)
	{
		return $this->db->insert("tblfollow", $data);
	}
	public function unfollowUser($data)
	{
		return $this->db->delete("tblfollow", $data);;
	}
	public function checkFollow($data)
	{
		return $this->db->where($data)->get("tblfollow")->result();
	}
	public function insertSavePlaylist($data)
	{
		return $this->db->insert("tblplaylistsave", $data);
	}
	public function deleteSavePlaylist($data)
	{
		return $this->db->delete("tblplaylistsave", $data);
	}
	public function selectSavedPlaylists($data)
	{
		return $this->db->select("p.*")->from("tblplaylist p")->join("tblplaylistsave s", "p.playlistID=s.playlistID")->where($data)->get()->result();
	}
	public function checkSavedPlaylists($data)
	{
		return $this->db->where($data)->get("tblplaylistsave")->num_rows();
	}
	public function searchPlaylist($keyword)
	{
		return $this->db->select('*')->from("tblplaylist")->like('playlistName', $keyword)->get()->result();
	}
}
?>