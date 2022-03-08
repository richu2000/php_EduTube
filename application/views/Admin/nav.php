<aside id="sidebar-left" class="sidebar-left">

    <div class="sidebar-header">
        <div class="sidebar-title">
            Navigation
        </div>
        <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-main">
                    <li>
                        <a class="nav-link" href="<?php echo site_url("Admin/Admin"); ?>">
                            <i class="bx bx-home-alt" aria-hidden="true"></i>
                            <span>Dashboard</span>
                        </a>                        
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo site_url("Admin/Category"); ?>">
                            <!-- <i class="bx bx-home-alt" aria-hidden="true"></i> -->
                            <i class="bx bx-user-circle"></i> 
                            <span>All Categories</span>
                        </a>                        
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo site_url("Admin/country"); ?>">
                            <!-- <i class="bx bx-home-alt" aria-hidden="true"></i> -->
                            <i class="bx bx-user-circle"></i> 
                            <span>All Countries</span>
                        </a>                        
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo site_url("Admin/User/allusers"); ?>">
                            <!-- <i class="bx bx-home-alt" aria-hidden="true"></i> -->
                            <i class="bx bx-user-circle"></i> 
                            <span>All Users</span>
                        </a>                        
                    </li>
                </ul>
            </nav>
        </div>
    </div>

</aside>