<section class="dashboard_sidebar dn-1199">
		<div class="dashboard_sidebars">
			<div class="user_board">
				<div class="user_profile">
					<div class="media">
					  	<div class="media-body">
					    	<h4 class="mt-0">Start</h4>
						</div>
					</div>
				</div>
				<div class="dashbord_nav_list">
					<ul>
						<li><a href="<?php echo site_url("Playlist/loadPlaylists/").$_SESSION['uid']; ?>"><span class="flaticon-online-learning"></span> My playlists</a></li>
						<li><a href="<?php echo site_url("Allcourses/loadSavedPlaylists/").$_SESSION['uid']; ?>"><span class="flaticon-like"></span> Saved playlists</a></li>
						<li><a href="<?php echo site_url("Playlist/loadAddPlaylist/").$_SESSION['uid']; ?>"><span class="flaticon-add-contact"></span> Add course</a></li>
						<li><a href="<?php echo site_url("Playlist/loadNotifications/").$_SESSION['uid']; ?>"><span class="flaticon-add-contact"></span> My notifications</a></li>
						<li><a href="<?php echo site_url("Playlist/otheruser/").$_SESSION['uid']; ?>"><span class="flaticon-add-contact"></span> My profile</a></li>
					</ul>
					<h4>Account</h4>
					<ul>
						<li class="active"><a href="<?php echo site_url("User/loadManageProfile/").$_SESSION['uid']; ?>"><span class="flaticon-settings"></span> Settings</a></li>
						<li><a href="<?php echo site_url("UserLogin/Logout"); ?>"><span class="flaticon-logout"></span> Logout</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>