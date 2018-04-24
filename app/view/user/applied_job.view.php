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
                    <img width="100" src="<?= isset($user->job_seeker->photo)?$user->job_seeker->photo!==NULL?asset($user->job_seeker->photo):'':asset('applyjob/images/user.jpg') ?>" alt="User Images" class="img-responsive">
                </div>
                <div class="user">
                    <h2 class="text-capitalize">Hello, <a href=""><?= auth()['name'] ?></a></h2>
                    <h5><?= auth()['email'] ?></h5>
                </div>

                <div class="favorites-user">
                    <div class="my-ads">
                        <a href="applied-job.php"><?= $user->job_seeker->job_applicants->count() ?><small>Apply Job</small></a>
                    </div>
                    <div class="favorites">
                        <a href="bookmark.php"><?= $user->job_seeker->job_bookmarks->count() ?><small>Favorites</small></a>
                    </div>
                </div>
            </div><!-- user-profile -->

            <ul class="user-menu">

                <li ><a href="<?= baseurl('User/Job_Seeker') ?>">Account Info </a></li>
                <li><a href="<?= baseurl('Seeker_Profile?name='.str_slug($user->job_seeker->fullname)) ?>" >View Resume</a></li>
                <li ><a href="<?= baseurl('User/Profile_Detail') ?>">Profile Details</a></li>
                <li class="active"><a href="<?= baseurl('User/Applied_Job')?>">applied job</a></li>
                <li><a href="<?= baseurl('User/Delete') ?>">Close account</a></li>
            </ul>
        </div><!-- ad-profile -->

        <div class="section trending-ads latest-jobs-ads">
            <h4>Applied Jobs</h4>
            <?php foreach ($job_posts as $job_post): ?>
                <div class="job-ad-item">
                    <div class="item-info">
                        <div class="item-image-box">
                            <div class="item-image">
                                <a href="<?= baseurl('Job_Detail')."?job_id=".$job_post->job_post->id ?>"><img src="<?= asset($job_post->job_post->employer->logo) ?>" alt="Image" class="img-responsive"></a>
                            </div><!-- item-image -->
                        </div>

                        <div class="ad-info">
                                        <span>
                                            <a href="<?= baseurl('Job_Detail')."?job_id=".$job_post->job_post->id ?>" class="title">
                                                <?= $job_post->job_post->title ?>
                                            </a>
                                            @
                                            <a href="<?= baseurl('Job_Detail')."?job_id=".$job_post->job_post->id ?>">
                                                <?= $job_post->job_post->employer->company_name ?>
                                            </a>
                                        </span>
                            <div class="ad-meta">
                                <ul>
                                    <li><a href="<?= baseurl('Job_Detail')."?job_id=".$job_post->id ?>"><i class="fa fa-map-marker" aria-hidden="true"></i><?= $job_post->job_post->location->name ?> </a></li>
                                    <li><a href="<?= baseurl('Job_Detail')."?job_id=".$job_post->id ?>" class="text-capitalize"><i class="fa fa-clock-o" aria-hidden="true"></i><?= $job_post->job_post->salary_type ?></a></li>
                                    <li><a href="<?= baseurl('Job_Detail')."?job_id=".$job_post->id ?>"><i class="fa fa-money" aria-hidden="true"></i>$<?= number_format($job_post->job_post->salary_min) ?>- $<?= number_format($job_post->job_post->salary_max) ?></a></li>
                                </ul>
                            </div><!-- ad-meta -->
                        </div><!-- ad-info -->
                    </div><!-- item-info -->
                </div><!-- job-ad-item -->

            <?php endforeach; ?>
        </div><!-- latest-jobs-ads -->
    </div><!-- container -->
</section>

<?php
view_require('applyjob/foot');
?>
