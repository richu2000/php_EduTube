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
                <a href="<?php echo site_url("User"); ?>"  >Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="" aria-current="page">My playlists</a>
              </li>
            </ol>
        </div>
      </div>
    </div>
  </div>
</section>

<div>
  <div class="container ccn_breadcrumb_widgets clearfix">
</div>

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

<button type="submit" class="btn btn-log btn-block btn-thm3" id="addPlaylist" onclick="javascript:addPlaylist()">Add playlist</button>

<script type="text/javascript">
  function addPlaylist()
  {
    window.location.href = "<?php echo site_url("Playlist/loadAddPlaylist/").$_SESSION['uid']; ?>";
  }
</script>


<aside id="block-region-fullwidth-top" class="block-region" data-blockregion="fullwidth-top" data-droptarget="1"></aside>
<div id="ccn-main-region">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8 col-xl-9">
        <div class="has-blocks"  aria-label="Content">
          <aside id="block-region-above-content" class="block-region" data-blockregion="above-content" data-droptarget="1"></aside>
          <div id="ccn-main">
            <span class="notifications" id="user-notifications"></span>
            <span id="maincontent"></span><span></span><div class="row"><div class="col-md-12 col-lg-12 col-xl-12 shadow_box"><div class="row courses_list_heading">
            <div class="col-xl-4 p0">
            <div class="instructor_search_result style2">
            <b>My Playlists</b>
            <p class="mt10 fz15"><span class="color-dark pr5"> <?php echo $count; ?> </span> Playlists </p>
          </div>
        </div>
      </div>

      <?php
        $i = 0;
        foreach ($playlist as $p)
        {
      ?>
        <a href="#"></a>
        <div class="courses row courses_container">
          <div class="col-lg-12 p0">
            <div class="courses_list_content">
              <div class="top_courses list">
                <div class="thumb">
                  <img class="img-whp" src="<?php echo base_url('Resources/Shared/Images/').$p->playlistImage?>" alt="" height="160px">
                  <div class="overlay">
                    <div class="tag"> <?php echo $plID[$i]; ?> Videos</div>
                      <a class="tc_preview_course" href="<?php echo site_url("Playlist/LoadPlaylistInfo/").$_SESSION['uid'] ."/". $p->playlistID; ?>">View all videos</a>
                  </div>
                </div>

                <div class="details">
                <div class="tc_content">
                  <p> Added on <?php echo $p->postedDate; ?> </p>
                  <a href="<?php echo site_url("Playlist/loadPlaylistInfo/").$_SESSION['uid'] ."/". $p->playlistID; ?>"><h5> <?php echo $p->playlistName; ?> </h5></a>
                    <div class="no-overflow"><p> <?php echo $plID[$i]; ?> Videos</p></div><br>
                    <a href="<?php echo site_url("Playlist/removePlaylist/").$_SESSION['uid'] ."/". $p->playlistID; ?>"> Delete playlist </a>
                  </div>
                </div>
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
                  
                  
                </div>
                  <aside id="block-region-below-content" class="block-region" data-blockregion="below-content" data-droptarget="1"></aside>
              </div>
              </div>
              <div class="col-lg-4 col-xl-3">
                <div class="d-print-none" aria-label="Blocks">
                  <aside id="block-region-side-pre" class="block-region" data-blockregion="side-pre" data-droptarget="1"><div id="inst104" class=" block_cocoon_course_list block list_block " role="navigation" data-block="cocoon_course_list">






  

    <span id="sb-3"></span>

</div></aside>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="footer_one  ">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4 col-md-3 col-lg-3">
            <div class="footer_contact_widget  ">
              <h4>CONTACT</h4>
              <p>329 Queensberry Street, North Melbourne </p>
<p>VIC 3051, Australia.</p>
<p>123 456 7890</p>
<p>support@EduTube.com</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
            <div class="footer_company_widget  ">
              <h4>COMPANY</h4>
              <ul class="list-unstyled">
<li><a href="#">About Us</a></li>
<li><a href="#">Blog</a></li>
<li><a href="#">Contact</a></li>
<li><a href="#">Become a Teacher</a></li>
</ul>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
            <div class="footer_program_widget  ">
              <h4>PROGRAMS</h4>
              <ul class="list-unstyled">
<li><a href="#">Nanodegree Plus</a></li>
<li><a href="#">Veterans</a></li>
<li><a href="#">Georgia</a></li>
<li><a href="#">Self-Driving Car</a></li>
</ul>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
            <div class="footer_support_widget  ">
              <h4>SUPPORT</h4>
              <ul class="list-unstyled">
<li><a href="#">Documentation</a></li>
<li><a href="#">Forums</a></li>
<li><a href="#">Language Packs</a></li>
<li><a href="#">Release Status</a></li>
</ul>

            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-md-3 col-lg-3">
            <div class="footer_apps_widget  ">
              <h4>MOBILE</h4>
              <div class="app_grid">
<button class="apple_btn btn-dark">
<span class="icon">
<span class="flaticon-apple"></span>
</span>
<span class="title">App Store</span>
<span class="subtitle">Available now on the</span>
</button>
<button class="play_store_btn btn-dark">
<span class="icon">
<span class="flaticon-google-play"></span>
</span>
<span class="title">Google Play</span>
<span class="subtitle">Get in on</span>
</button>
</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="footer_middle_area p0  ">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-md-3 col-lg-3 col-xl-2 pb15 pt15">
            <div class="logo-widget  home1    ">
              <img class="img-fluid" src="<?php echo base_url('Resources/User video/')?>/pluginfile.php/1/theme_edumy/footerlogo1/1583196004/header-logo.png" alt="Edumy">
              <span>EduTube</span>
            </div>
          </div>
          <div class="col-sm-8 col-md-5 col-lg-6 col-xl-6 pb25 pt25 brdr_left_right">
            <div class="footer_menu_widget">
              <ul>
<li class="list-inline-item"><a href="#">Home</a></li>
<li class="list-inline-item"><a href="#">Privacy</a></li>
<li class="list-inline-item"><a href="#">Terms</a></li>
<li class="list-inline-item"><a href="#">Sitemap</a></li>
<li class="list-inline-item"><a href="#">Purchase</a></li>
</ul>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 col-lg-3 col-xl-4 pb15 pt15">
            <div class="footer_social_widget mt15">
              <ul>
                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="footer_bottom_area pt25 pb25  ">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="copyright-widget text-center">
              <p>Copyright © 2020 EduTube Moodle Theme by Cocoon. All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  <a class="scrollToHome" href="#"><i class="flaticon-up-arrow-1"></i></a>

  <?php include_once("bottomscriptsVideo.php"); ?>

  </div>
</body>
<!-- Mirrored from demo.createdbycocoon.com/moodle/edumy/2/course/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 May 2021 04:09:37 GMT -->
</html>