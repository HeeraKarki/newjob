<?php
view_require('applyjob/head');
view_require('applyjob/nav');
?>
<section class=" job-bg page ad-profile-page">
    <div class="container">
        <div class="breadcrumb-section">
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li>Employee Profile</li>
            </ol>
            <h2 class="title">My Profile</h2>
        </div>


        <div class="job-profile section" style="box-shadow: 2px 9px 7px rgba(249,219,255,0.43);">
            <div class="user-profile">
                <div class="user-images">
                    <!--                    <img src="--><?//= asset('applyjob/')?><!--images/user.jpg" alt="User Images" class="img-responsive">-->
                    <img width="100" src="<?= isset($user->employer->avatar)?$user->employer->avatar!==NULL?asset($user->employer->avatar):'':asset('applyjob/images/user.jpg') ?>" alt="User Images" class="img-responsive">
                </div>
                <div class="user">
                    <h2 class="text-capitalize">Hello, <a href=""><?= auth()['name'] ?></a></h2>
                    <h5><?= auth()['email'] ?></h5>
                </div>

                <div class="favorites-user">
                    <div class="my-ads">
                        <a href="applied-job.php">29<small>Apply Job</small></a>
                    </div>
                    <div class="favorites">
                        <a href="bookmark.php"><?=  $user->employer->post_count ?><small>Post Left</small></a>
                    </div>
                </div>
            </div><!-- user-profile -->

            <ul class="user-menu">
                <li ><a href="<?= baseurl('User/Employer') ?>">Account Info </a></li>
                <li><a href="<?= baseurl('Employer/Job_List')?>">My Job List</a></li>
                <li><a href="<?= baseurl('User/Employer_Edit_Resume')?>">Interview</a></li>
                <li><a href="<?= baseurl('Employer/Profile_Detail') ?>">Profile Details</a></li>
                <li><a href="<?= asset('User/Applied_Job')?>">applied job</a></li>
                <li class="active"><a href="<?= baseurl('Employer/Packages')?>">Buy Post Packages</a></li>
                <li><a href="<?= baseurl('User/Delete') ?>">Close account</a></li>
            </ul>
        </div>
        <?php view_require('applyjob/success');?>
        <?php view_require('applyjob/error');?>

        <div class="section job-list-item" style="min-height: 500px;box-shadow: 2px 9px 7px rgba(249,219,255,0.43);">
            <h2 class="text-center">Job List</h2>
            <?php foreach ($job_posts as $job_post): ?>
                <div class="job-ad-item" style="border: 1px solid darkgrey;box-shadow: 3px 4px 4px darkgrey;">
                    <div class="item-info">
                        <div class="item-image-box">
                            <div class="item-image">
                                <a href="<?= baseurl('Job_Detail')."?job_id=".$job_post->id ?>"><img src="<?= asset($job_post->employer->logo) ?>" alt="Image" class="img-responsive"></a>
                            </div><!-- item-image -->
                        </div>

                        <div class="ad-info">
                                        <span>
                                            <a href="<?= baseurl('Job_Detail')."?job_id=".$job_post->id ?>" class="title">
                                                <?= $job_post->title ?>
                                            </a>
                                            @
                                            <a href="<?= baseurl('Job_Detail')."?job_id=".$job_post->id ?>">
                                                <?= $job_post->employer->company_name ?>
                                            </a>
                                        </span>
                            <div class="ad-meta">
                                <ul>
                                    <li><a href="<?= baseurl('Job_Detail')."?job_id=".$job_post->id ?>"><i class="fa fa-map-marker" aria-hidden="true"></i><?= $job_post->location->name ?> </a></li>
                                    <li><a href="<?= baseurl('Job_Detail')."?job_id=".$job_post->id ?>" class="text-capitalize"><i class="fa fa-clock-o" aria-hidden="true"></i><?= $job_post->salary_type ?></a></li>
                                    <li><a href="<?= baseurl('Job_Detail')."?job_id=".$job_post->id ?>"><i class="fa fa-money" aria-hidden="true"></i>$<?= number_format($job_post->salary_min) ?>- $<?= number_format($job_post->salary_max) ?></a></li>
                                </ul>
                            </div><!-- ad-meta -->
                        </div><!-- ad-info -->
                    </div><!-- item-info -->
                </div><!-- job-ad-item -->

                <?php if($job_post->job_applicant->count() !== 0 ): ?>
                    <h3 class="text-center">User Apply For This Job</h3>
                    <table class="table table-bordered table-striped" style="border-bottom: 2px solid black;margin-bottom: 20px;">
                        <thead>
                        <tr>
                            <th class="text-center text-success">User</th>
                            <th class="text-center text-success">Apply Date</th>
                            <th class="text-center text-success">Response</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($job_post->job_applicant as $applicant): ?>
                            <?php if ( $applicant->status === "pending"): ?>
                                <tr>
                                    <td class="text-center"><a href="<?= baseurl('Seeker_Profile')."?name=". str_slug($applicant->job_seeker->fullname) ?>" class="text-capitalize"><?= $applicant->job_seeker->fullname ?></a> </td>
                                    <td class="text-center"><?= date('d M Y',strtotime($applicant->created_at)) ?></td>
                                    <td class="text-center">
                                        <a title="Reject the applicant" href="<?= baseurl('Seeker_Profile')."?name=". str_slug($applicant->job_seeker->fullname) ?>" class="btn btn-info">
                                            <i class="fa fa-eye"></i> View
                                        </a>
                                        <a href="<?= baseurl('Employer/Interview').'?applicant_id='.$applicant->id  ?>" class="btn btn-success">
                                            <i class="fa fa-vcard"></i> Interview
                                        </a>
                                        <a href="<?= baseurl('Employer/Reject').'?applicant_id='.$applicant->id  ?>" class="btn btn-danger">
                                            <i class="fa fa-user-times"></i> Reject
                                        </a>
                                    </td>
                                </tr>
                            <?php endif; ?>

                        <?php endforeach; ?>


                        </tbody>
                    </table>
                <?php else: ?>
                    <h5 class="text-center">No one apply on this job yet.</h5>
                <?php endif; ?>





            <?php endforeach; ?>
        </div>

    </div>
</section>



<?php
view_require('applyjob/foot');
?>
