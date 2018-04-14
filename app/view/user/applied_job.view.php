<?php
view_require('applyjob/head');
view_require('applyjob/nav');
?>


<section class=" job-bg page  ad-profile-page">
    <div class="container">
        <div class="breadcrumb-section">
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li>Applied Job</li>
            </ol>
            <h2 class="title">Applied Job</h2>
        </div><!-- breadcrumb-section -->

        <div class="job-profile section">
            <div class="user-profile">
                <div class="user-images">
                    <img src="asset/images/user.jpg" alt="User Images" class="img-responsive">
                </div>
                <div class="user">
                    <h2>Hello, <a href="applied-job.php#">Jhon Doe</a></h2>
                    <h5>You last logged in at: 10-01-2017 6:40 AM [ USA time (GMT + 6:00hrs)]</h5>
                </div>

                <div class="favorites-user">
                    <div class="my-ads">
                        <a href="applied-job.php">29<small>Apply Job</small></a>
                    </div>
                    <div class="favorites">
                        <a href="bookmark.php">18<small>Favorites</small></a>
                    </div>
                </div>
            </div><!-- user-profile -->

            <ul class="user-menu">

                <li><a href="<?= baseurl('User/Job_Seeker') ?>">Account Info </a></li>
                <li ><a href="<?= baseurl('User/Resume') ?>" >View Resume</a></li>
                <li><a href="<?= baseurl('User/Edit_Resume')?>">Edit Resume</a></li>
                <li><a href="<?= baseurl('User/Profile_Detail') ?>">Profile Details</a></li>
                <li class="active"><a href="<?= baseurl( 'User/Applied_Job')?>">applied job</a></li>
                <li><a href="<?= baseurl('User/Delete') ?>">Close account</a></li>
            </ul>
        </div><!-- ad-profile -->

        <div class="section trending-ads latest-jobs-ads">
            <h4>Applied Jobs</h4>
            <div class="job-ad-item">
                <div class="item-info">
                    <div class="item-image-box">
                        <div class="item-image">
                            <a href="job-details.php"><img src="asset/images/job/4.png" alt="Image" class="img-responsive"></a>
                        </div><!-- item-image -->
                    </div>

                    <div class="ad-info">
                        <span><a href="job-details.php" class="title">Human Resource Manager</a> @ <a href="applied-job.php#">Dropbox Inc</a></span>
                        <div class="ad-meta">
                            <ul>
                                <li><a href="applied-job.php#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                                <li><a href="applied-job.php#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                                <li><a href="applied-job.php#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                                <li><a href="applied-job.php#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                            </ul>
                        </div><!-- ad-meta -->
                    </div><!-- ad-info -->
                    <div class="close-icon">
                        <i class="fa fa-window-close" aria-hidden="true"></i>
                    </div>
                </div><!-- item-info -->
            </div><!-- ad-item -->

            <div class="job-ad-item">
                <div class="item-info">
                    <div class="item-image-box">
                        <div class="item-image">
                            <a href="job-details.php"><img src="asset/images/job/2.png" alt="Image" class="img-responsive"></a>
                        </div><!-- item-image -->
                    </div>

                    <div class="ad-info">
                        <span><a href="job-details.php" class="title">Graphics Designer</a> @ <a href="applied-job.php#">AOK Security</a></span>
                        <div class="ad-meta">
                            <ul>
                                <li><a href="applied-job.php#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                                <li><a href="applied-job.php#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                                <li><a href="applied-job.php#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                                <li><a href="applied-job.php#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                            </ul>
                        </div><!-- ad-meta -->
                    </div><!-- ad-info -->
                    <div class="close-icon">
                        <i class="fa fa-window-close" aria-hidden="true"></i>
                    </div>
                </div><!-- item-info -->
            </div><!-- ad-item -->

            <div class="job-ad-item">
                <div class="item-info">
                    <div class="item-image-box">
                        <div class="item-image">
                            <a href="job-details.php"><img src="asset/images/job/3.png" alt="Image" class="img-responsive"></a>
                        </div><!-- item-image -->
                    </div>

                    <div class="ad-info">
                        <span><a href="job-details.php" class="title">CTO</a> @ <a href="applied-job.php#">Volja Events &amp; Entertainment</a></span>
                        <div class="ad-meta">
                            <ul>
                                <li><a href="applied-job.php#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                                <li><a href="applied-job.php#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                                <li><a href="applied-job.php#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                                <li><a href="applied-job.php#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                            </ul>
                        </div><!-- ad-meta -->
                    </div><!-- ad-info -->
                    <div class="close-icon">
                        <i class="fa fa-window-close" aria-hidden="true"></i>
                    </div>
                </div><!-- item-info -->
            </div><!-- ad-item -->

            <div class="job-ad-item">
                <div class="item-info">
                    <div class="item-image-box">
                        <div class="item-image">
                            <a href="job-details.php"><img src="asset/images/job/1.png" alt="Image" class="img-responsive"></a>
                        </div><!-- item-image -->
                    </div>

                    <div class="ad-info">
                        <span><a href="job-details.php" class="title">Project Manager</a> @ <a href="applied-job.php#">Dominos Pizza</a></span>
                        <div class="ad-meta">
                            <ul>
                                <li><a href="applied-job.php#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                                <li><a href="applied-job.php#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                                <li><a href="applied-job.php#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                                <li><a href="applied-job.php#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                            </ul>
                        </div><!-- ad-meta -->
                    </div><!-- ad-info -->
                    <div class="close-icon">
                        <i class="fa fa-window-close" aria-hidden="true"></i>
                    </div>
                </div><!-- item-info -->
            </div><!-- ad-item -->

            <div class="job-ad-item">
                <div class="item-info">
                    <div class="item-image-box">
                        <div class="item-image">
                            <a href="job-details.php"><img src="asset/images/job/3.png" alt="Image" class="img-responsive"></a>
                        </div><!-- item-image -->
                    </div>

                    <div class="ad-info">
                        <span><a href="job-details.php" class="title">CTO</a> @ <a href="applied-job.php#">Volja Events &amp; Entertainment</a></span>
                        <div class="ad-meta">
                            <ul>
                                <li><a href="applied-job.php#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                                <li><a href="applied-job.php#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                                <li><a href="applied-job.php#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                                <li><a href="applied-job.php#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                            </ul>
                        </div><!-- ad-meta -->
                    </div><!-- ad-info -->
                    <div class="close-icon">
                        <i class="fa fa-window-close" aria-hidden="true"></i>
                    </div>
                </div><!-- item-info -->
            </div><!-- ad-item -->

            <div class="job-ad-item">
                <div class="item-info">
                    <div class="item-image-box">
                        <div class="item-image">
                            <a href="job-details.php"><img src="asset/images/job/1.png" alt="Image" class="img-responsive"></a>
                        </div><!-- item-image -->
                    </div>

                    <div class="ad-info">
                        <span><a href="job-details.php" class="title">Project Manager</a> @ <a href="applied-job.php#">Dominos Pizza</a></span>
                        <div class="ad-meta">
                            <ul>
                                <li><a href="applied-job.php#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                                <li><a href="applied-job.php#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                                <li><a href="applied-job.php#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                                <li><a href="applied-job.php#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                            </ul>
                        </div><!-- ad-meta -->
                    </div><!-- ad-info -->
                    <div class="close-icon">
                        <i class="fa fa-window-close" aria-hidden="true"></i>
                    </div>
                </div><!-- item-info -->
            </div><!-- ad-item -->

            <div class="job-ad-item">
                <div class="item-info">
                    <div class="item-image-box">
                        <div class="item-image">
                            <a href="job-details.php"><img src="asset/images/job/4.png" alt="Image" class="img-responsive"></a>
                        </div><!-- item-image -->
                    </div>

                    <div class="ad-info">
                        <span><a href="job-details.php" class="title">Human Resource Manager</a> @ <a href="applied-job.php#">Dropbox Inc</a></span>
                        <div class="ad-meta">
                            <ul>
                                <li><a href="applied-job.php#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
                                <li><a href="applied-job.php#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                                <li><a href="applied-job.php#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
                                <li><a href="applied-job.php#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                            </ul>
                        </div><!-- ad-meta -->
                    </div><!-- ad-info -->
                    <div class="close-icon">
                        <i class="fa fa-window-close" aria-hidden="true"></i>
                    </div>
                </div><!-- item-info -->
            </div><!-- ad-item -->
        </div><!-- latest-jobs-ads -->
    </div><!-- container -->
</section>

<?php
view_require('applyjob/foot');
?>
