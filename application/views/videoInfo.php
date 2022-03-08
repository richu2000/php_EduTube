<!DOCTYPE html>

<html  dir="ltr" lang="en" xml:lang="en">
<head>
    <?php include_once('topscriptsvideoinfo.php');?>
    <?php include_once('header.php');?>
</head>

<body  id="page-course-view-social" class="format-social  path-course path-course-view dir-ltr lang-en yui-skin-sam yui3-skin-sam demo-createdbycocoon-com--moodle-edumy-2 pagelayout-course course-10 context-155 category-3 ccn_header_style_2 ccn_footer_style_1 ccn_blog_style_2 ccn_course_list_style_2 role-standard">
        
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
        <a href="<?php echo site_url("Playlist/loadPlaylists/").$_SESSION['uid']; ?>" aria-current="page">My playlists</a></li>
      <li class="breadcrumb-item">
        
        <a href="<?php echo site_url("Playlist/loadPlaylistInfo/").$_SESSION['uid'] ."/". $playlistID; ?>"> <?php echo $pname[0]->playlistName; ?> </a></li>
      <?php 
       foreach ($videoinfo as $v)
            {
       ?>
      <li class="breadcrumb-item">
        <a href="" aria-current="page" ><?php echo $v->Title;?></a>
      </li>
      <?php } ?>
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
    <div class="col-md-12 col-lg-8 col-xl-9">
    <div class="has-blocks"  aria-label="Content">
    <aside id="block-region-above-content" class="block-region" data-blockregion="above-content" data-droptarget="1">


        <!-- video and instructor -->
    <div id="inst107" class=" block_cocoon_course_intro block " role="complementary" data-block="cocoon_course_intro"  aria-label="[Cocoon] Course Intro"  >
    <div class="">
    <div class="cs_row_one ">
    <div class="cs_ins_container">
    <div class="ccn-identify-course-intro">
    <!-- instructor details -->
    <div class="cs_instructor">
        <ul class="cs_instrct_list float-left mb0">
                  <li class="list-inline-item">
                  <?php 
                    foreach ($videoinfo as $v)
                    {
                  ?>
                       <a href="<?php echo site_url('playlist/otheruser/'.$v->userID);?>">
                        <img class="thumb" src="<?php echo base_url('Resources/User video/images/'.$v->userImage)?>" alt="4.png" />
                      </a>

                      <!-- <img class="thumb" src="<?php echo base_url('Resources/User video/images/'.$v->userImage)?>" alt="4.png" /> -->
                  </li>
                  <li class="list-inline-item">
                   <a class="" href="#">      
                  
                    <h4><?php echo $v->firstName ; ?></h4>
                  </a></li>

                  <li class="list-inline-item"><a class="" href="#"><p> Uploaded on <?php echo $v->uploadDateTime; ?> </p></a></li>
          </ul>
    </div>
    <!-- instructor details end -->
    <h3 class="cs_title "><?php echo $v->Title; ?></h3>
    </div>
    <!-- video url-->
    <div class="courses_big_thumb">
      <div class="thumb">
        <video width="960" height="400" controls>
           <source src="<?php echo base_url('Resources/Shared/Videos/'.$v->videoURL)?>" type="video/mp4">
        </video>
      </div>
    </div>
    <!-- video url end -->
    </div>
    </div>
    </div>
    </div>
            <?php }     ?>
    <!-- video and instructor --> 

    <!-- course desc -->
    <div id="inst108" class=" block_cocoon_course_overview block " role="complementary" data-block="cocoon_course_overview">
      <div class="">
        <div class="cs_row_two">
          <div class="cs_overview">
            <h4 class="title">Course Description</h4>
            <h4 class="subtitle"><?php echo $v->Description?></h4>
          </div>
        </div>    
      </div>
    </div>
    <!-- course desc end -->
<br><br><br><br>

    <style type="text/css">
      #likes
      {
        position: absolute;
        right: -300px;
        width: 300px;
        top:95px;
      }
      #likersIn
      {
        height: 100px;
        overflow-y: auto;
      }
    </style>

    <!-- likes -->
    <div id="likes" class=" block_cocoon_course_overview block " role="complementary" data-block="cocoon_course_overview">
      <div class="cs_row_two">
        <div class="cs_overview">
          <h4 class="title">
                    <?php 

              if($likestatus=="no")
              {
                ?>
                <a href="<?php echo site_url('Playlist/addLike/'.$playlistID.'/'.$videoID);?>">
              <i class="fa fa-heart"></i></span></a>
              <?php
            }
              else
              {
                ?>
             <a href="<?php echo site_url('Playlist/addUnlike/'.$playlistID.'/'.$videoID);?>">   
            <i class="fa fa-heart" style="color: red"></i></span></a>
                <?php
              }
              ?>  
          <?php
            echo $countlikes;
          ?> Likes</h4>
          <div id="likersIn">
          <?php
            foreach ($likers as $l) {
          ?>          
          <span class="picture"><a href="">
            <a href="<?php echo site_url('playlist/otheruser/'.$l->userID);?>">
                        <img class="thumb" src="<?php echo base_url('Resources/User video/images/'.$l->userImage)?>" width="18" height="18" alt="4.png" />
            </a>

          </span> 
            <?php
                echo $l->firstName."<br/>";   
              }
            ?>
          </div>
        </div>    
      </div>
    </div>
    <!-- likes end -->
    

<style type="text/css">
  .tab
  {
    position: absolute;
    top: 740px;
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

    #commentsIn
    {
      height: 250px;
      overflow-y: auto;
    }

</style>

<div class="tab">
  <button class="tablinks" onclick="openContent(event, 'Comments')" id="defaultOpen">Comments</button>
  <button class="tablinks" onclick="openContent(event, 'Questions')">Questions</button>
</div>


    <!-- comments -->
    <div id="Comments" class=" block_comments block tabcontent" role="complementary" data-block="comments" >
             <div class="overflow-auto">
      <a>Comments</a>
        <div id="commentsIn">
        <?php 
          foreach ($comments as $c ) {
        ?>
      <ul>
        <li class="first"></li>
        <div class="comment-message">
          <div class="comment-message-meta mr-3">  
            <span class="picture">
            <a href="<?php echo site_url('playlist/otheruser/'.$c->userID);?>">
                        <img class="thumb" src="<?php echo base_url('Resources/User video/images/'.$c->userImage)?>" width="90" height="100" alt="4.png" />
            </a>
            <!-- <img src="<?php echo base_url('Resources/User Video/Images/'.$c->userImage);?>" class="userpicture" width="18" height="18" alt="Picture of Krisztina Szer" title="Picture of Krisztina Szer" /> -->
            </span>


       
            <span class="user"><a href=""><?php echo $c->firstName?></a></span>
            <span class="time"> <?php echo $c->postedDate?></span>
          </div>
          <div class="text">
            <div class="no-overflow">
              <div class="text_to_html">
                <?php echo $c->commentDesc?>
 
          <form method="post" action="<?php echo site_url('playlist/removeComment/'.$c->commentID.'/'.$playlistID.'/'.$videoID);?>">
        <input type="submit" name="btnDel" value="Delete comment" class="btn btn-primary">
      </form>
              </div>
            </div>
          </div>
        </div>
      </ul>
      <?php
        }
      ?>
    </div>
    <br/>
      <form method="post" action="<?php echo site_url('Playlist/addComment/'.$playlistID.'/'.$videoID);?>">
        <input type="text" class="form-control" name="txtComment" placeholder="Post a comment">
        <input type="submit" name="btnAdd" value="Add comment" class="btn btn-primary">
      </form>
    </div></div>
    <!-- comments end -->
    
    <!-- questions -->
      <div id="Questions" class=" block_comments block tabcontent" role="complementary" data-block="comments" >
      <a>Questions</a>
        <div id="commentsIn">
        <?php 
          foreach ($questions as $q ) {
        ?>
      <ul>
        <li class="first"></li>
        <div class="comment-message">
          <div class="comment-message-meta mr-3">  
            <span class="picture">
            <a href="<?php echo site_url('playlist/otheruser/'.$q->userID);?>">
                        <img class="thumb" src="<?php echo base_url('Resources/User video/images/'.$q->userImage)?>" width="90" height="100" alt="4.png" />
            </a>
              <!-- <img src="<?php echo base_url('Resources/User Video/Images/'.$q->userImage);?>" class="userpicture" width="18" height="18" alt="Picture of Krisztina Szer" title="Picture of Krisztina Szer" /> -->
            </span>

            <span class="user">
              <a href=""><?php echo $q->firstName?></a>
            </span>

            <span class="time">
              <?php echo $q->postedDate?>
            </span>
          </div>
          <div class="text">
            <div class="no-overflow">
              <div class="text_to_html">
                   
               Question:
                <?php echo $q->videoQuestionDesc."<br/>";
                

                foreach ($videoinfo as $v)
                   {
                    if($q->Answer!=null)
                    {
                      ?>
                     Answer:
                   <?php echo $q->Answer;
                   if(isset($_SESSION["uname"]))
                  {
                  if($v->userID==$_SESSION["uid"])
                  
                  {

                    if($q->Answer!=null)
                    {
                      ?>
                        <form method="post" action="<?php echo site_url('Playlist/addAnswer/'.$playlistID.'/'.$videoID.'/'.$q->videoQuestionID);?>">
                        <input type="text" class="form-control" name="txtAnswer" placeholder="Post a Answer">
                        <input type="submit" name="btnAddAns" value="Modify Answer" class="btn btn-secondary" >
                        </form>
                        <?php 
                      }
                  }
                }
                }
                   else
                   {
                       if(isset($_SESSION["uid"]))
                        {
                            if($v->userID==$_SESSION["uid"])
                            {
                              ?>
                              <form method="post" action="<?php echo site_url('Playlist/addAnswer/'.$playlistID.'/'.$videoID.'/'.$q->videoQuestionID);?>">
                              <input type="text" class="form-control" name="txtAnswer" placeholder="Post a Answer">
                              <input type="submit" name="btnAddAns" value="Add Answer" class="btn btn-secondary" >
                              </form>                    
                              <?php
                            }
                            else
                            {
                              ?>
                              Answer:
                            <?php echo $q->Answer;
                            }
                        }
                   }                    
              }
                  ?>
              </div>
            </div>
          </div>
        </div>
      </ul>
      <?php
        }
      ?>
    </div>
    <?php
         if(isset($_SESSION["uname"]))
         {
          ?>
      <form method="post" action="<?php echo site_url('playlist/addQuestions/'.$playlistID.'/'.$videoID);?>">
        <input type="text" class="form-control" name="txtQuestion" placeholder="Post a Question">
        <input type="submit" name="btnAdd" value="Add Question" class="btn btn-primary">
      </form>
      <?php } ?>
    </div>
    <!-- questions end -->
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

    </aside>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <?php include_once("bottomscriptsvideoinfo.php")?>
</body>
</html>