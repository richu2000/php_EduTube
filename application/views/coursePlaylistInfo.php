<!DOCTYPE html>
<?php 
  if(!isset($_SESSION['uid']))
  {
    $_SESSION['uid']=NULL;
  }
  if(!isset($_SESSION['uname']))
  {
    $_SESSION['uname']=NULL;
  }
 ?>
<html  dir="ltr" lang="en" xml:lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
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
                <a href="<?php echo site_url("allcourses/loadPlaylists/"); ?>" aria-current="page">playlists</a>
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

<!-- tab -->
<style type="text/css">
  .tab
  {
    position: absolute;
    top: 475px;
    left: 100px;
    overflow: hidden;
    border-radius: 4px;
    /*border: 1px solid #ccc;*/
    background-color: #f1f1f1;
  }
  .tab button
  {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
  }
  .tab button:hover
  {
    background-color: #ccc;
  }

  .tab button:active
  {
    background-color: #ccc;
  }

  .tabcontent
  {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
    animation: fadeEffect 1s;
  }

  @keyframes fadeEffect
  {
    from {opacity: 0;}
    to {opacity: 1;}
  }

  .rate {
    float: left;
    height: 46px;
    padding: 0 10px;
  }
  .rate:not(:checked) > input {
      position:absolute;
      top:-9999px;
  }
  .rate:not(:checked) > label {
      float:right;
      width:1em;
      overflow:hidden;
      white-space:nowrap;
      cursor:pointer;
      font-size:30px;
      color:#ccc;
  }
  .rate:not(:checked) > label:before {
      content: '★ ';
  }
  .rate > input:checked ~ label {
      color: #ffc700;    
  }
  .rate:not(:checked) > label:hover,
  .rate:not(:checked) > label:hover ~ label {
      color: #deb217;  
  }
  .rate > input:checked + label:hover,
  .rate > input:checked + label:hover ~ label,
  .rate > input:checked ~ label:hover,
  .rate > input:checked ~ label:hover ~ label,
  .rate > label:hover ~ input:checked ~ label {
      color: #c59b08;
  }

  #savePlaylist
  {
    position: absolute;
    height: 36px;
    width: 258px;
    border-radius: 4px;
    right: 90px;
    top: 528px;
  }
</style>


<div>
  <?php
    if($save == 0)
    {
  ?>
    <a href="<?php echo site_url("Allcourses/savePlaylist/").$_SESSION['uid'] ."/". $pname[0]->playlistID; ?>" class="btn btn-log btn-block btn-thm3" id="savePlaylist">Save playlist</a>
  <?php
    }
    else
    {
  ?>
    <a href="<?php echo site_url("Allcourses/unsavePlaylist/").$_SESSION['uid'] ."/". $pname[0]->playlistID; ?>" class="btn btn-log btn-block btn-thm3" id="savePlaylist">Unsave playlist</a>
  <?php
    }
  ?>
</div>


<div class="tab">
  <button class="tablinks" onclick="openContent(event, 'Videos')" id="defaultOpen">Videos</button>
  <button class="tablinks" onclick="openContent(event, 'Reviews')">Reviews</button>
  <button class="tablinks" onclick="openContent(event, 'Forums')">Forums</button>
</div>

<br><br><br><br><br>

<div id="Videos" class="tabcontent">
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
                      <p class="mt10 fz15"><span class="color-dark pr5"><b>Playlist : <?php echo $pname[0]->playlistName; ?> </span></p> 
                      <p class="mt10 fz15"><span class="color-dark pr5"> <?php echo $count; ?> </span> Videos </p>
                    </div>
                  </div>
                </div>
                <?php 
                  foreach ($videoinfo as $v)
                  {
                ?>
                  <div class="courses row courses_container">
                    <div class="col-lg-12 p0">
                      <div class="courses_list_content">
                        <div class="top_courses list">
                          <div class="thumb">
                            <img class="img-whp" src="<?php echo base_url('Resources/Shared/Images/').$v->Thumbnail?>" height=200px>
                          </div>

                          <div class="details">
                            <div class="tc_content">
                              <p> Uploaded on <?php echo $v->uploadDateTime; ?> </p>
                                             <a href="<?php echo site_url("Allcourses/loadVideoinfo/").$pname[0]->playlistID ."/" .$v->videoID; ?>"><h5> <?php echo $v->Title; ?> </h5></a><br>
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

<!-- review start -->
<div id="Reviews" class="tabcontent">
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
                      <p class="mt10 fz15"><span class="color-dark pr5"><b> Reviews </span></p> 
                      <p class="mt10 fz15"><span class="color-dark pr5"> <?php echo $countR; ?> </span> Reviews </p>
                    </div>
                  </div>
                </div>
                <?php 
              if(isset($_SESSION['uname'])) 
              { ?>
                 <?php 
                   foreach ($review as $r)
                  {
                    $rname=$r->Username;
                  } 
                    $rname="";
                    if($rname==$_SESSION['uname'])
                    {
                      ?>
                                      <?php 
                  foreach ($myreview as $mr)
                  {
                ?>

                  <div class="courses row courses_container">
                    &nbsp  <font size="5">Your Review</font><br>
                    <div class="col-lg-12 p0">
                      <div class="courses_list_content">
                        <div class="top_courses list">
                          
                          <span class="picture">
                       <!-- <img class="thumb" src="<?php echo base_url('Resources/User video/images/'.$r->userImage)?>" alt="4.png" /> -->
                      <!-- </a> -->
                       <a href="<?php echo site_url('Allcourses/otheruser/'.$r->userID);?>">
                        <img class="userpicture" src="<?php echo base_url('Resources/User video/Images/').$r->userImage?>" height=30px width=30px></a>
                          </span>
                          &nbsp<?php echo $_SESSION['uname'];?>
                          <div class="details">
                            <div class="tc_content">
                              <p> Uploaded on <?php echo $mr->rDate; ?> </p>
                                 <?php if($mr->Rating==0){ ?>
                                <h4> Rating : No Stars 
                                <div >
                                ★★★★★
                                </div></h4>
                              <?php } 
                              else
                                {?>
                              <h4> Rating, <?php echo $mr->Rating; ?> stars 
                                <?php if($mr->Rating==5){ ?>
                                <div style="color: #ffc700">
                                ★★★★★
                                </div>
                              <?php } ?>

                                <?php if($mr->Rating==4){ ?>
                                <div style="color: #ffc700">
                                ★★★★
                                </div>
                              <?php } ?>

                                <?php if($mr->Rating==3){ ?>
                                <div style="color: #ffc700">
                                ★★★
                                </div>
                              <?php } ?>

                                <?php if($mr->Rating==2){ ?>
                                <div style="color: #ffc700">
                                ★★
                                </div>
                              <?php } ?>

                                <?php if($mr->Rating==1){ ?>
                                <div style="color: #ffc700">
                                ★
                                </div>
                              <?php } ?>
                              </h4>
                                                            <?php } ?>
                              <p> <?php echo $mr->Review; ?> </p>
                              <br>
                            </div>
                          </div>
                          <form method="post" action="<?php echo site_url("Allcourses/removeReview/").$_SESSION['uid']."/".$pname[0]->playlistID; ?>">
                          <input type="submit" name="btndelReview" value="Delete your review" class="btn btn-primary">
                          </form>
                        </div>
                      </div>
                    </div>

                  </div>
                <?php
                  }
                ?>


                    <?php
                    }
                  else
                    {
                ?>
                Rate the playlist:
                 
                <form method="post" action="<?php echo site_url("Allcourses/addReview/").$_SESSION['uid']."/".$pname[0]->playlistID; ?>">

                  <div class="rate">
                    <input type="radio" id="star5" name="rate" value="5" />
                    <label for="star5" title="text">5 stars</label>
                    <input type="radio" id="star4" name="rate" value="4" />
                    <label for="star4" title="text">4 stars</label>
                    <input type="radio" id="star3" name="rate" value="3" />
                    <label for="star3" title="text">3 stars</label>
                    <input type="radio" id="star2" name="rate" value="2" />
                    <label for="star2" title="text">2 stars</label>
                    <input type="radio" id="star1" name="rate" value="1" />
                    <label for="star1" title="text">1 star</label>
                  </div>
                
                  <input type="text" name="txtReview" class="form-control" placeholder="Review">
                  <input type="submit" name="btnAddReview" value="Add review" class="btn btn-primary">
                </form>
              <?php  }
               }
                ?>

                  <div class="courses row courses_container">
                    <font size="5">All Reviews</font>
                                    <?php 
                  foreach ($review as $r)
                  {
                ?>
                    <div class="col-lg-12 p0">
                      <div class="courses_list_content">
                        <div class="top_courses list">
                          <span class="picture">
<!--                         <a href="<?php echo site_url('Allcourses/otheruser/'.$r->userID);?>">
                        <img class="thumb" src="<?php echo base_url('Resources/User video/images/'.$r->userImage)?>" height=30px width=30px alt="4.png" />
                      </a> -->
                      <a href="<?php echo site_url('Allcourses/otheruser/'.$r->userID);?>">
                            <img class="userpicture" src="<?php echo base_url('Resources/User video/Images/').$r->userImage?>" height=30px width=30px>
                            </a>
                          </span>
                          &nbsp<?php echo $r->Username;?>
                          <div class="details">
                            <div class="tc_content">
                              <p> Uploaded on <?php echo $r->rDate; ?> </p>
                                 <?php if($r->Rating==0){ ?>
                                <h4> Rating : No Stars 
                                <div >
                                ★★★★★
                                </div></h4>
                              <?php } 
                              else
                                {?>
                              <h4> Rating, <?php echo $r->Rating; ?> stars 
                                <?php if($r->Rating==5){ ?>
                                <div style="color: #ffc700">
                                ★★★★★
                                </div>
                              <?php } ?>

                                <?php if($r->Rating==4){ ?>
                                <div style="color: #ffc700">
                                ★★★★
                                </div>
                              <?php } ?>

                                <?php if($r->Rating==3){ ?>
                                <div style="color: #ffc700">
                                ★★★
                                </div>
                              <?php } ?>

                                <?php if($r->Rating==2){ ?>
                                <div style="color: #ffc700">
                                ★★
                                </div>
                              <?php } ?>

                                <?php if($r->Rating==1){ ?>
                                <div style="color: #ffc700">
                                ★
                                </div>
                              <?php } ?>
                              </h4>
                                                            <?php } ?>
                              <p> <?php echo $r->Review; ?> </p>
                              <br>
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
<!-- review end -->

<!-- forum start -->
<div id="Forums" class="tabcontent">
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

  #viewForum
  {
    height: 36px;
    width: 258px;
    border-radius: 4px;
  }
</style>

<?php 
              if(isset($_SESSION['uid'])) 
              { ?>
<button type="submit" class="btn btn-log btn-block btn-thm3" id="addPlaylist" onclick="javascript:addForum()">Create forum</button>

<script type="text/javascript">
  function addForum()
  {
    window.location.href = "<?php echo site_url("Allcourses/loadAddForum/").$_SESSION['uid']."/".$pname[0]->playlistID; ?>";
  }
  function viewForum(fid)
  {
        window.location.href ="<?php echo site_url("Allcourses/loadViewForum/").$_SESSION['uid']."/".$pname[0]->playlistID."/"?>"+fid
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
                      <p class="mt10 fz15"><span class="color-dark pr5"><b> Forums </span></p> 
                      <p class="mt10 fz15"><span class="color-dark pr5"> <?php echo $countF; ?> </span> Forums </p>
                    </div>
                  </div>
                </div>
                <?php 
                  foreach ($forum as $f)
                  {
                ?>
                  <div class="courses row courses_container">
                    <div class="col-lg-12 p0">
                      <div class="courses_list_content">
                        <div class="top_courses list">
                          <div class="details">
                            <div class="tc_content">
                              <span class="picture">
                              Created by :&nbsp&nbsp <?php echo $f->Username; ?>
<!--                           <a href="<?php echo site_url('Allcourses/otheruser/'.$r->userID);?>">
                        <img class="thumb" src="<?php echo base_url('Resources/User video/images/'.$r->userImage)?>" height=30px width=30px alt="4.png" />
                      </a> --> 
                       <a href="<?php echo site_url('Allcourses/otheruser/'.$f->userID);?>">
                              <img class="userpicture" src="<?php echo base_url('Resources/User Video/Images/').$f->userImage?>" height=50px width=50px></a>
                              </span>
                              <h4> <?php echo $f->Title; ?> </h4>
                              <?php $fid=$f->playlistForumID?>
                              <p> <?php echo $f->Description; ?> </p>
                              <button type="submit" class="btn btn-log btn-block btn-thm3" id="viewForum" onclick="javascript:viewForum(<?php echo $fid;?>)">View forum</button>
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