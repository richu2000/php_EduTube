<header class="header-nav menu_style_home_one navbar-scrolltofixed stricky main-menu">
		<div class="container-fluid">
		    
		    <nav>
		        
		        <div class="menu-toggle">
		            <img class="nav_logo_img img-fluid" src="<?php echo base_url('Resources/User/')?>images/header-logo.png" alt="header-logo.png">
		            <button type="button" id="menu-btn">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		        </div>
		        <a href="#" class="navbar_brand float-left dn-smd">
		            <img class="logo1 img-fluid" src="<?php echo base_url('Resources/User/')?>images/header-logo.png" alt="header-logo.png">
		            <img class="logo2 img-fluid" src="<?php echo base_url('Resources/User/')?>images/header-logo2.png" alt="header-logo2.png">
		            <span>edutube</span>
		        </a>
				

		        <?php 
		        	if(isset($_SESSION['uname']))
		        	{
		        ?>
		        	<ul class="pull-right">
				        <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
				            <li>
				                <a href="#"><span class="title"> <?php echo $_SESSION['uname']; ?> </span></a>
				                <ul>
				                    <li><a href="<?php echo site_url("User/loadManageProfile/".$_SESSION['uid']); ?>">Manage profile</a></li>
				                    <li class="list-inline-item list_s">
			                		<a href="<?php echo site_url("UserLogin/Logout"); ?>"> <span class="dn-lg"> Logout </span> </a>
			                	</ul>
			                </li>    
				        </ul>
				    </ul>
	            <?php 
	            	}
	            	else
	            	{
	            ?>
			            <ul class="sign_up_btn pull-right dn-smd mt20">
			                <li class="list-inline-item">
			                	<a href="<?php echo site_url("UserLogin/loadLogin"); ?>" class="btn flaticon-user"> <span class="dn-lg"> Login </span> </a>
			                </li>
			            </ul>
	            <?php 
	            	}
	            ?>
		    </nav>
		</div>
	</header>