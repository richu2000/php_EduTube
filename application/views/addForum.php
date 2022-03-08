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
                <a href="" aria-current="page">My playlists</a>
              </li>
              <li class="breadcrumb-item">
                <a href="" aria-current="page"> <?php echo $pname[0]->playlistName; ?> </a>
              </li>
              <li class="breadcrumb-item">
                <a href="" aria-current="page"> Create forum </a>
              </li>
            </ol>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="our-log-reg bgc-fa">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-6 offset-lg-3">
					<div class="sign_up_form inner_page">
						<div class="heading">
							<h3 class="text-center">Create forum</h3>
							
						</div>
						<div class="details">
							<form action="<?php echo site_url("Allcourses/addForum/").$_SESSION['uid'] ."/". $pname[0]->playlistID; ?>" method="post" enctype="multipart/form-data">
								<div class="form-group">
							    	<input type="text" class="form-control" name="txtForumName" placeholder="Forum name">
								</div>
								 
								<div class="form-group">
									Description
							    	<textarea name="desc" rows="5" cols="49" class="form-control"> </textarea>
								</div>

								<br>
								<button type="submit" class="btn btn-log btn-block btn-thm2">Create</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>





<?php include_once("bottomscriptsVideo.php"); ?>