<!DOCTYPE html>

<html  dir="ltr" lang="en" xml:lang="en">

<!-- Mirrored from demo.createdbycocoon.com/moodle/edumy/2/course/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 May 2021 04:09:32 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <title>EduTube: Course categories</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php include_once("topscriptsVideo.php"); ?>
</head>

<body  id="page-course-index-category" class="format-site  path-course path-course-index dir-ltr lang-en yui-skin-sam yui3-skin-sam demo-createdbycocoon-com--moodle-edumy-2 pagelayout-coursecategory course-1 context-1 notloggedin ccn_header_style_2 ccn_footer_style_1 ccn_blog_style_2 ccn_course_list_style_2 role-standard">
        
  
<div class="wrapper">
    <?php include_once("header.php"); ?>
</div>

<section class="inner_page_breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-xl-12 text-center">
        <div class="breadcrumb_content">
            <h4 class="breadcrumb_title">EduTube</h4>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="<?php echo site_url("User"); ?>">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="<?php echo site_url("Playlist/loadPlaylists/").$_SESSION['uid']; ?>" aria-current="page">My playlists</a>
              </li>
              <li class="breadcrumb-item">
                <a href="" aria-current="page"> <?php echo $pname[0]->playlistName; ?> </a>
              </li>
            </ol>
        </div>
      </div>
    </div>
  </div>
</section>

<style type="text/css">
  #addPlaylist
  {
    position: absolute;
    top: 410px;
    left: 100px;
    height: 36px;
    width: 258px;
    border-radius: 4px;
  }
</style>

<aside id="block-region-fullwidth-top" class="block-region" data-blockregion="fullwidth-top" data-droptarget="1"></aside>


<br><br><br><br><br>

<!-- forum start -->
<div id="Forums">
  <style type="text/css">
  #addPlaylist
  {
    position: absolute;
    top: 420px;
    left: 100px;
    height: 36px;
    width: 258px;
    border-radius: 4px;
  }

  #question
  {
    position: absolute;
    top: -100px;
    left: 0px;
    font-family: Helvetica;
    font-size: 40px;
  }
</style>

<?php 
    if(isset($_SESSION['uid'])) 
    { ?>
<script type="text/javascript">
  function addForum()
  {
    window.location.href = "<?php echo site_url("Allcourses/loadAddForum/").$_SESSION['uid']."/".$pname[0]->playlistID; ?>";
  }
<?php } ?>
</script>
     <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8 col-xl-9">
        <div class="has-blocks"  aria-label="Content">
          <aside id="block-region-above-content" class="block-region" data-blockregion="above-content" data-droptarget="1"></aside>
          <div id="ccn-main">
            <div class="row">
              <div class="col-md-12 col-lg-12 col-xl-12 shadow_box">
                <div class="row courses_list_heading">
                  <div class="col-xl-4 p0">
                    <div class="instructor_search_result style2">
                        <span class="picture">
                              Created by :&nbsp&nbsp <?php echo $forum[0]->Username; ?>
                                <a href="<?php echo site_url('Allcourses/otheruser/'.$forum[0]->userID);?>">
                              <img class="userpicture" src="<?php echo base_url('Resources/User Video/Images/').$forum[0]->userImage?>" height=50px width=50px></a>
                        </span>
                    </div>
                  </div>
                </div>

              <br>
              <h4 id="question"><?php echo $forum[0]->Title; ?> </h4>
              <?php
                for($i = 0; $i < $countforumpost; $i++)
                {
              ?>
                    <a href="<?php echo site_url('Allcourses/otheruser/'.$answers[$i]->userID);?>">
                <img src="<?php echo base_url('Resources/User Video/Images/'.$answers[$i]->userImage);?>" class="userpicture" width="60" height="60" /></a>
                </span>
                <span class="user"><a href=""><?php echo $answers[$i]->firstName; ?></a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span class="time"> <?php echo $answers[$i]->postedDate; ?></span>
                <div class="text">
                  <div class="no-overflow">
                    <div class="text_to_html">
              <?php echo $answers[$i]->forumPostDesc;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                        
              <?php
              if(isset($_SESSION['uname']))
              {
                if($countlikes == 0)
                {
              ?>
                  <a href="<?php echo site_url('AllCourses/addForumPostLike/'.$plID.'/'.$answers[$i]->playlistForumID.'/'.$answers[$i]->forumPostID);?>">
                  <i class="fa fa-heart"></i> 0 likes</a>
              <?php
                }
                else if($i >= $countlikes)
                {
              ?>
                  <a href="<?php echo site_url('AllCourses/addForumPostLike/'.$plID.'/'.$answers[$i]->playlistForumID.'/'.$answers[$i]->forumPostID);?>">
                  <i class="fa fa-heart"></i></a>
              <?php
                }
                else if($likes[$i]->forumPostID != $answers[$i]->forumPostID)
                {
              ?>
                  <a href="<?php echo site_url('AllCourses/addForumPostLike/'.$plID.'/'.$answers[$i]->playlistForumID.'/'.$answers[$i]->forumPostID);?>">
                  <i class="fa fa-heart"></i></a>
              <?php
                }
                else
                {
              ?>
                  <a href="<?php echo site_url('AllCourses/addForumPostUnlike/'.$plID.'/'.$answers[$i]->playlistForumID.'/'.$answers[$i]->forumPostID);?>">
                  <i class="fa fa-heart" style="color: red"></i></a>
              <?php
                }
              ?>  
              <?php
              }
              ?>
                </h4>
                <hr>
              <?php
                }
              ?>
                  <br>
                  <br>
            <?php
             if(isset($_SESSION["uname"]))
             {
            ?>
                  <form method="post" action="<?php echo site_url('AllCourses/addForumAnswer/'.$plID.'/'.$forum[0]->playlistForumID);?>">
                    <input type="text" class="form-control" name="txtAnswer" placeholder="Post answer">
                    <input type="submit" name="btnAdd" value="Add answer" class="btn btn-primary">
                  </form>
            <?php
              }
            ?>
            </div>
          </div>
        </div></div>

        <aside id="block-region-below-content" class="block-region" data-blockregion="below-content" data-droptarget="1"></aside>
      </div>
    </div>
    <div class="col-lg-4 col-xl-3">
      <div class="d-print-none" aria-label="Blocks">
        <aside id="block-region-side-pre" class="block-region" data-blockregion="side-pre" data-droptarget="1">
          <div id="inst104" class=" block_cocoon_course_list block list_block " role="navigation" data-block="cocoon_course_list">
            <span id="sb-3"></span>
          </div>
        </aside>
      </div>
    </div>
  </div>
</div>
</div>
<!-- forum end -->


   

<script type="text/javascript">
  function openContent(evt, content)
  {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace("active", " ");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(content).style.display = "block";
    evt.currentTarget.className += "active";
  } 

  document.getElementById("defaultOpen").click();
</script>

<?php include_once("bottomscriptsVideo.php"); ?>
