<body>
<!-- header -->
<header id="header" class="clearfix">
    <!-- navbar -->
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= baseurl(); ?>">
                    <img class="img-responsive" src="<?= asset('applyjob/images/logo.png'); ?>" alt="Logo">
                </a>
            </div>
            <!-- /navbar-header -->

            <div class="navbar-left">
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?= baseurl(); ?>">Home</a></li>
                        <li><a href="<?= baseurl('Job_list'); ?>">Job list</a></li>
                        <li><a href="<?= baseurl('Job_Details'); ?>">Job Details</a></li>
                        <?php if (auth()['role_id'] === 3): ?>
                            <li><a href="<?= baseurl('Job_Details'); ?>">Post a Job</a></li>
                        <?php endif; ?>
                        <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle"
                                                data-toggle="dropdown">Pages<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= baseurl('Profile'); ?>">Profile</a></li>
                                <li><a href="<?= baseurl('Post_Resume'); ?>">Post Resume</a></li>
                                <li><a href="<?= baseurl('Job_Post'); ?>">Job Post</a></li>
                                <li><a href="<?= baseurl('Edit_Resume'); ?>">Edit Resume</a></li>
                                <li><a href="<?= baseurl('Profile_Details'); ?>">profile Details</a></li>
                                <li><a href="<?= baseurl('Applicant_Job'); ?>">Applied Job</a></li>
                                <li><a href="<?= baseurl('Delete_Account'); ?>">Close Account</a></li>
                                <li><a href="<?= baseurl('Register'); ?>">Job Signup</a></li>
                                <li><a href="<?= baseurl('Login'); ?>">Job Signin</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <?php if (auth_check()): ?>
                <div class="navbar-right">
                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle text-uppercase"
                                   data-toggle="dropdown">
                                    <i class="fa fa-user"></i>
                                    <?= auth()['name'] ?><span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <?php if (auth()['role_id'] === 2): ?>
                                        <li><a href="<?= baseurl('User/Job_Seeker'); ?>">Profile</a></li>
                                    <?php elseif (auth()['role_id'] === 3): ?>
                                        <li><a href="<?= baseurl('User/Employer'); ?>">Profile</a></li>
                                    <?php endif; ?>
                                    <li><a href="<?= baseurl('Logout'); ?>">Logout</a></li>
                                </ul>
                            </li>
                            <li><a href="<?= baseurl('Employer/Post_Job'); ?>" style="background-color: #0072bc;font-weight: 400;font-size: 14px;color: #fff;box-shadow: 2px 3px 6px black;">Post a Job</a></li>
                        </ul>
                    </div>
                </div>


            <?php else: ?>
                <div class="nav-right">
                    <ul class="sign-in">
                        <li><i class="fa fa-user"></i></li>
                        <li><a href="<?= baseurl('Register'); ?>">Register</a></li>
                        <li><a href="<?= baseurl('Login'); ?>">LogIn</a></li>
                    </ul><!-- sign-in -->

                    <a href="<?= baseurl('Post_job'); ?>" class="btn">Post Your Job</a>
                </div>
            <?php endif; ?>
            <!-- nav-right -->

            <!-- nav-right -->
        </div><!-- container -->
    </nav><!-- navbar -->
</header>
<!-- header -->