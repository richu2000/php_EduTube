<!DOCTYPE html>

<html  dir="ltr" lang="en" xml:lang="en">
<head>
    <?php include_once('topscriptsvideoinfo.php');?>
    <?php include_once('header.php');?>
</head>

<body  id="page-course-view-social" class="format-social  path-course path-course-view dir-ltr lang-en yui-skin-sam yui3-skin-sam demo-createdbycocoon-com--moodle-EduTube-2 pagelayout-course course-10 context-155 category-3 ccn_header_style_2 ccn_footer_style_1 ccn_blog_style_2 ccn_course_list_style_2 role-standard">
        
   <!-- <div id='sbbfrcc' style='position: absolute; top: -10px; left: 30px; font-size:1px'></div> -->
 
  <!-- <div class="preloader"></div> -->

<section class="inner_page_breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-xl-12 text-center">
        <div class="breadcrumb_content">
          <h4 class="breadcrumb_title">EduTube</h4>
          <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo site_url('user')?>">Home</a></li>
      <li class="breadcrumb-item">
        <a href="<?php echo site_url("Allcourses/loadPlaylists/") ?>" aria-current="page"> playlists</a>
      </li>

        </ol>
        </div>
      </div>
    </div>
  </div>
</section>

    <div id="ccn-page-wrapper">
    <aside id="block-region-fullwidth-top" class="block-region" data-blockregion="fullwidth-top" data-droptarget="1">  
    </aside>

    <div id="ccn-main-region">
    <div class="container">
    <div class="row">
    <div class="col-md-12 col-lg-8 col-xl-12">
    <div class="has-blocks"  aria-label="Content">
    <aside id="block-region-above-content" class="block-region" data-blockregion="above-content" data-droptarget="1">


  <div class="">
    

                  <?php 
                    foreach ($users as $v)
                    {
                  ?>
  <div class="cs_row_four">
  <div class="about_ins_container">
    
    <b><h4 class="aii_title">About the instructor</h4></b>
     
        <div class="about_ins_info">
          <div class="thumb">
              
                            <img class="thumb" src="<?php echo base_url('Resources/User video/images/'.$v->userImage)?>" height="70" alt="4.png" />
          </div>
        </div>
     
        <div class="details">
              <ul class="review_list">
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item">4.5 Instructor Rating</li>
              </ul>
              <ul class="about_info_list">
                <li class="list-inline-item"><span class="flaticon-profile"></span><?php echo $cntt; ?> followers </li>
                <li class="list-inline-item"><span class="flaticon-play-button-1"></span> <?php echo $cntplaylist; ?> playlists </li>
              </ul>
              <h4><?php echo $v->firstName ; ?> &nbsp;&nbsp;&nbsp;&nbsp;
              <?php
              if($userID == $_SESSION['uid'])
              {
              ?>
                <a href="<?php echo site_url("User/loadManageProfile/") . $_SESSION['uid']; ?>" class="btn btn-primary" style="color:white"> Edit profile </a></h4>
              <?php
              }
              else if($follow == "no")
              {
              ?>
                <a href="<?php echo site_url("Allcourses/follow/"). $userID . '/' . $_SESSION['uid']; ?>" class="btn btn-primary" style="color:white"> Follow </a></h4>
              <?php
              }
              else
              {
              ?>
                <a href="<?php echo site_url("Allcourses/unfollow/"). $userID . '/' . $_SESSION['uid']; ?>" class="btn btn-primary" style="color:white"> Unfollow </a></h4>
              <?php
              }
              ?>

              <p class="subtitle"><?php echo $v->Bio ?></p>
              
        </div>
<!-- playlists -->
<div id="ccn-main-region">
  <div class="row shadow_box">
              <div class="col-md-12 col-lg-12 col-xl-12">
              <div class="row courses_list_heading">
            <h4><b>All Playlists</b></h4>
              </div>
            </div>

      <?php
        $i = 0;
        foreach ($playlist as $p)
        {
      ?>

        <div class="col-sm-6 col-lg-4 sha">
          <div class="img_hvr_box" style="background-image: url(<?php echo base_url('Resources/User/')?>images/courses/5.jpg);">
            <div class="overlay">
              <div class="details">
                  <a href="<?php echo site_url("Allcourses/loadPlaylistInfo/"). $p->playlistID; ?>"><h5> <?php echo $p->playlistName; ?> </h5></a>
                  <br/>
                      <h5> <?php echo $plID[$i]; ?> Videos</h5>
              </div>
            </div>
          </div>
        </div>
      
      <?php
        $i++;
        }
      ?>
  </div>
</div>
<!-- playlist end -->
  
  </div>
  </div>
  </div>    
      </aside>
  </div>
     <?php }     ?>

    </div>
    </div>
    </div>
    </div>


    </div>


<br><br><br><br>

<script type="text/javascript">
  function openContent(evt, content) {
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



    <?php include_once("bottomscriptsvideoinfo.php")?>
</body>
</html>