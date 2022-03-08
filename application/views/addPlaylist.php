<!DOCTYPE html>

<html  dir="ltr" lang="en" xml:lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title>EduTube: Course categories</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php include_once("topscriptsVideo.php"); ?>
</head>

<body  id="page-course-index-category">
        
  
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
                <a href="" aria-current="page">Add new playlist</a>
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
							<h3 class="text-center">Add new playlist</h3>
							
						</div>
						<div class="details">
							<form action="<?php echo site_url("Playlist/addPlaylist/").$_SESSION['uid']; ?>" method="post" enctype="multipart/form-data">
								<div class="form-group">
							    	<input type="text" class="form-control" name="txtPname" placeholder="Playlist name">
								</div>
								<div class="form-group">
							    	Thumbnail &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="file" name="imgUp">
								</div>

								<div class="form-group">
							    	Category&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							    	<select name="category" style="width: 277px" onchange="loadSubcats(this.value)">
							    		<option value="-1"> --Select category-- </option>
							    		<?php 
							    			foreach ($category as $c)
							    			{
							    		?>
							    				<option value="<?php echo $c->categoryID; ?>"> <?php echo $c->categoryName; ?> </option>
							    		<?php
							    			}
							    		?>
							    	</select>
								</div>
								<br>
								<div class="form-group">
							    	Subcategory&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							    	<select name="subcategory" id="subcat" style="width: 277px" onchange="loadSubjects(this.value)">

							    	</select>
								</div>
								<br>
								<div class="form-group">
							    	Subject&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							    	<select name="subject" id="subj" style="width: 277px">
							    		
							    	</select>
								</div>

								<br>
								<button type="submit" class="btn btn-log btn-block btn-thm2">Add</button>
							</form>
						</div>

						<script type="text/javascript">
							function loadSubcats(cid) {
								if(cid != -1)
						        {
						          $.ajax({
						          url: "<?php echo site_url("Playlist/loadSubcatsByCatID/"); ?>" + cid,
						            success: function(result)
						            {
						              document.getElementById("subcat").innerHTML = result;
						            }
						          });
						        }
							}

							function loadSubjects(scid) {
								if(scid != -1)
						        {
						          $.ajax({
						          url: "<?php echo site_url("Playlist/loadSubjectsBySubcatID/"); ?>" + scid,
						            success: function(result)
						            {
						              document.getElementById("subj").innerHTML = result;
						            }
						          });
						        }
							}
						</script>

					</div>
				</div>
			</div>
		</div>
	</section>





<?php include_once("bottomscriptsVideo.php"); ?>