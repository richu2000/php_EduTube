<html>
<head>
		<?php include_once("topscripts.php"); ?>
</head>
	<body>
		<section class="body">
			<?php include_once("header.php"); ?>

			<div class="inner-wrapper">
				
				<aside id="sidebar-left" class="sidebar-left">
					<?php include_once("nav.php"); ?>
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Profile</h2>
					</header>

					<!-- start: page -->
					<div class="row">
						<div class="col-lg-4 col-xl-3 mb-4 mb-xl-0">
							<div class="content-wrapper">
                <section class="content">
                  <a href="<?php echo site_url('admin/Category/loadAddSubcat/'.$categoryID)?>" class="btn btn-primary">Add Subcategory</a>
                  <div class="box">
                    <div class="box-body">
                      <table class="table table-striped">
                                <thead>
                                 <tr>
                                  <th>SubCategoryID</th>
                                  <th>SubCategoryName</th>     
                                  <th>CategoryName</th>
                                  <th>Delete</th>
                                  <th>Update</th>
                                  <th>view all subjects</th>
                                 </tr> 
                                </thead>
                                <tbody>
                                  <?php 
                                  foreach ($subcats as $c)
                                  {
                                    ?>
                                    <tr>
                                      <td><?php echo $c->SubCatID?></td>
                                      <td><?php echo $c->SubCatName?></td>
                                      <td><?php echo $c->categoryName?></td>
                                      <td><a href="<?php echo site_url("admin/Category/removeSubcat/$c->SubCatID/$c->categoryID");?>">Delete subcategory</a></td>
                                      <td><a href="<?php echo site_url("admin/Category/loadEditSubcat/$c->SubCatID/$c->categoryID");?>">update subcategory</a></td>
                                      <td><a href="<?php echo site_url('admin/Category/loadAllSubjectsBySubcatID/'.$c->SubCatID);?>">view all Subjects</a></td>
                                    </tr>
                                    <?php
                                  }
                                  ?>
                                </tbody>
                      </table>
                    </div>
                  </div>
                </section>
						</div>
					</div>
		+		</section>
			</div>
		</section>

		<?php include_once("bottomscripts.php"); ?>
	</body>
</html>