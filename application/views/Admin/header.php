





<header class="header">
				<div class="logo-container">
					<a href="https://www.okler.net/previews/porto-admin/3.1.0" class="logo">						
						<img src="<?php echo base_url('Resources/Admin/')?>img/logo.png" width="75" height="35" alt="Porto Admin" />					</a>					<div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">						<i class="fas fa-bars" aria-label="Toggle sidebar"></i>					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					<form action="https://www.okler.net/previews/porto-admin/3.1.0/pages-search-results.html" class="search nav-form">
						<div class="input-group">
							<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
							<span class="input-group-append">
								<button class="btn btn-default" type="submit"><i class="bx bx-search"></i></button>
							</span>
						</div>
					</form>
			
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="<?php echo base_url('Resources/Admin/')?>img/%21logged-user.jpg" alt="Joseph Doe" class="rounded-circle" data-lock-picture="img/%21logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name"> <?php echo $_SESSION['aname']; ?> </span>
								<span class="role">Administrator</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled mb-2">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="<?php echo site_url("Admin/Admin/loadAdminManageProfile/".$_SESSION['aid']); ?>"><i class="bx bx-user-circle"></i> My Profile</a>
								</li>

								<li>
									<a role="menuitem" tabindex="-1" href="<?php echo site_url('Admin/Login/Logout')?>"><i class="bx bx-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</header>