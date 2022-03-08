<header class="header-nav menu_style_home_one dashbord_pages navbar-scrolltofixed stricky main-menu">
		<div class="container-fluid">
		    <!-- Ace Responsive Menu -->
		    <nav>
		        <!-- Menu Toggle btn-->
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
		            <img class="logo2 img-fluid" src="<?php echo base_url('Resources/User/')?>images/header-logo.png" alt="header-logo.png">
		            <span>edutube</span>
		        </a>
		        <!-- Responsive Menu Structure-->
		        <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
		        
		        <ul class="header_user_notif pull-right dn-smd">
	                <li class="user_setting">
						<div class="dropdown">
	                		<a class="btn dropdown-toggle" href="#" data-toggle="dropdown"><img class="rounded-circle" src="<?php echo base_url('Resources/User video/images/'.$userinfo[0]->userImage)?>" width="40" height="45"></a>
						    <div class="dropdown-menu">
						    	<div class="user_set_header">
						    		<img class="float-left" src="<?php echo base_url('Resources/User video/images/'.$userinfo[0]->userImage)?>" width="40" height="40">
							    	<p> <?php echo $_SESSION['uname']; ?><br></p>
						    	</div>
						    	<div class="user_setting_content">
									<a class="dropdown-item" href="<?php echo site_url("UserLogin/Logout"); ?>">Log out</a>
						    	</div>
						    		<div class="user_setting_content">
									<a class="dropdown-item" href="<?php echo site_url("User"); ?>">Home</a>
						    	</div>
						    </div>
						</div>
			        </li>
	            </ul>
		    </nav>
		</div>
	</header>