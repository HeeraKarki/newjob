<body>
<!-- header -->
<header id="header" class="clearfix">
    <!-- navbar -->
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= baseurl();?>">
                <img class="img-responsive" src="<?= asset('applyjob/images/logo.png');?>" alt="Logo">
                </a>
            </div>
            <!-- /navbar-header -->

            <div class="navbar-left">
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?= baseurl();?>">Home</a></li>
                        <li><a href="<?= baseurl('Job_list');?>">Job list</a></li>
                        <li><a href="<?= baseurl('Job_Details');?>">Job Details</a></li>
                        <li><a href="<?= baseurl('Resume');?>">Resume</a></li>
                        <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Pages<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= baseurl('Profile');?>">Profile</a></li>
                                <li><a href="<?= baseurl('Post_Resume');?>">Post Resume</a></li>
                                <li><a href="<?= baseurl('Job_Post');?>">Job Post</a></li>
                                <li><a href="<?= baseurl('Edit_Resume');?>">Edit Resume</a></li>
                                <li><a href="<?= baseurl('Profile_Details');?>">profile Details</a></li>
                                <li><a href="<?= baseurl('Applicant_Job');?>">Applied Job</a></li>
                                <li><a href="<?= baseurl('Delete_Account');?>">Close Account</a></li>
                                <li><a href="<?= baseurl('Register');?>">Job Signup</a></li>
                                <li><a href="<?= baseurl('Login');?>">Job Signin</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!-- navbar-left -->

            <?php if (auth_check()): ?>
                <div class="nav-right">

                    <a href="<?= baseurl('Logout');?>" class="btn">Logout</a>
                </div>


            <?php else: ?>
                <div class="nav-right">
                    <ul class="sign-in">
                        <li><i class="fa fa-user"></i></li>
                        <li><a href="<?= baseurl('Register');?>">Register</a></li>
                        <li><a href="<?= baseurl('Login');?>">LogIn</a></li>
                    </ul><!-- sign-in -->

                    <a href="<?= baseurl('Post_job');?>" class="btn">Post Your Job</a>
                </div>
            <?php endif; ?>
            <!-- nav-right -->

            <!-- nav-right -->
        </div><!-- container -->
    </nav><!-- navbar -->
</header>
<!-- header -->