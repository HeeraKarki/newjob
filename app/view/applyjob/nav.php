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

                            <?php if (auth()['role_id'] === 3): ?>
                                <li><a href="<?= baseurl('Employer/Post_Job'); ?>" style="background-color: #0072bc;font-weight: 400;font-size: 14px;color: #fff;box-shadow: 2px 3px 6px black;">Post a Job</a></li>
                            <?php endif; ?>

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
                </div>
            <?php endif; ?>
            <!-- nav-right -->

            <!-- nav-right -->
        </div><!-- container -->
    </nav><!-- navbar -->
</header>
<!-- header -->