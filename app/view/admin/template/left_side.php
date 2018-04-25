<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">

    <div class="slimscroll-menu" id="remove-scroll">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="index.html" class="logo">
                            <span>
                                <img src="<?= asset('admin/assets/images/logo.png');?>" alt="" height="22">
                            </span>
                <i>
                    <img src="<?= asset('admin/assets/images/logo_sm.png');?>" alt="" height="28">
                </i>
            </a>
        </div>

        <!-- User box -->
        <div class="user-box">
            <div class="user-img">
                <img src="<?= asset('admin/assets/images/users/avatar-1.jpg');?>" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
            </div>
            <h5><a href="" class="text-capitalize"><?= auth()['name'] ?></a> </h5>
            <p class="text-muted">Admin</p>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <!--<li class="menu-title">Navigation</li>-->

                <li>
                    <a href="index.html">
                        <i class="fi-air-play"></i><span class="badge badge-danger badge-pill pull-right">7</span> <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="fi-alt"></i> <span> Job </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="<?= baseurl('Admin/Job_Pending'); ?>">Job Pending List</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="fi-server"></i> <span> Settings </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="<?= baseurl('Admin/Location'); ?>">Location</a></li>
                        <li><a href="<?= baseurl('Admin/Contract_type') ?>">Contract Type</a></li>
                        <li><a href="<?= baseurl('Admin/JobFunction') ?>">Job Function</a></li>
                        <li><a href="<?= baseurl('Admin/JobIndustry') ?>">Job Industry</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);"><i class="fa fa-user"></i> <span> Admin Account </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="<?= baseurl('Admin/Account'); ?>">View</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);"><i class="fi-paper"></i> <span> Database Settings </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="<?= baseurl('Admin/Setup'); ?>">Base Setting</a></li>
                        <li><a href="<?= baseurl('Admin/SeedFilesMake'); ?>">Make Seeder File</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="fi-server"></i> <span> Report </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="<?= baseurl('Admin/Annual_Report'); ?>">Annual Income Report</a></li>
                        <li><a href="<?= baseurl('Admin/Monthly_Report') ?>">Monthly Income Report</a></li>
                        <li><a href="<?= baseurl('Admin/JobFunction') ?>">Job Post Report</a></li>
                        <li><a href="<?= baseurl('Admin/InActive_Report') ?>">InActive User Report</a></li>
                        <li><a href="<?= baseurl('Admin/DeleteUser_Report') ?>">Deleted User Report</a></li>

                    </ul>
                </li>
            </ul>

        </div>
        <!-- Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->