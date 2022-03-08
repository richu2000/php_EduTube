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
                <a href="" aria-current="page"> My Notifications </a>

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
                      <p class="mt10 fz15"><span class="color-dark pr5"><b> My Notifications</span></p> 

                    </div>
                  </div>
                </div>
                <?php 
                  foreach ($notification as $n)
                  {
                ?>
                  <div class="courses row courses_container">
                    <div class="col-lg-12 p0">
                      <div class="courses_list_content">
                        <div class="top_courses list">
                          <div class="details">
                            <div class="tc_content">
                              <span class="picture">
                              => :&nbsp&nbsp 
                              <a href="<?php echo site_url('playlist/otheruser/'.$n->userID);?>">                  
                              <img class="userpicture" src="<?php echo base_url('Resources/User Video/Images/').$n->senderImage?>" height=25px width=25px></a>
                                 <?php echo $n->notificationDesc; ?>
                              </span>
                               </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php
                  }
                ?>
            </div>
          </div>
        </div>
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





<?php include_once("bottomscriptsVideo.php"); ?>
