<!DOCTYPE html>

<html  dir="ltr" lang="en" xml:lang="en">



<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    
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
                <a href="" aria-current="page">Search playlists</a>
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

  #search
  {
    position: absolute;
    left: 220px;
    height: 30px;
    border-radius: 4px;
  }
</style>

<div id="ccn-main-region">
  <div class="container">

      <div class="col-md-12 col-lg-12 col-xl-12" >
        <div class="has-blocks"  aria-label="Content">
          <div id="ccn-main">
            <div class="row shadow_box">
              <div class="col-md-12 col-lg-12 col-xl-12">
              <div class="row courses_list_heading">
            <b>Search playlists</b>
              </div><br>
              <form method="post" action="<?php echo site_url("Allcourses/loadSearchResult"); ?>">
              <input type="text" name="txtSearch" placeholder="Search">
              <input type="submit" name="btnSubmit" value="Search" class="btn btn-log btn-thm3" id="search">
              </form>
            </div>

      <?php
        if(isset($playlist))
        {
        $i = 0;
        foreach ($playlist as $p)
        {
      ?>

        <div class="col-sm-6 col-lg-4 sha">
          <div class="img_hvr_box" style="background-image: url(<?php echo base_url('Resources/Shared/Images/').$p->playlistImage?>);">
            <div class="overlay">
              <div class="details">
                  <a href="<?php echo site_url("Allcourses/loadPlaylistInfo/"). $p->playlistID; ?>"><h5> <?php echo $p->playlistName; ?> </h5></a>
                      
              </div>
            </div>
          </div>
        </div>
      
      <?php
        $i++;
        }
      }
      ?>
            </div>
          </div>

                </div>
              </div>
              </div>
            </div>

  <?php include_once("bottomscriptsVideo.php"); ?>
  </div>
</body>
</html>