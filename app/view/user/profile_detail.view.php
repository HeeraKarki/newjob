<?php
view_require('applyjob/head');
view_require('applyjob/nav');
?>

<section class="clearfix job-bg  ad-profile-page">
    <div class="container">
        <div class="breadcrumb-section">
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li>Profile Details</li>
            </ol>
            <h2 class="title">My Profile</h2>
        </div><!-- breadcrumb-section -->

        <div class="job-profile section">
            <div class="user-profile">
                <div class="user-images">
                    <!--                    <img src="--><?//= asset('applyjob/')?><!--images/user.jpg" alt="User Images" class="img-responsive">-->
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
                <li class="active"><a href="<?= baseurl('User/Profile_Detail') ?>">Profile Details</a></li>
                <li><a href="<?= baseurl('User/Applied_Job')?>">applied job</a></li>
                <li><a href="<?= baseurl('User/Delete') ?>">Close account</a></li>
            </ul>
        </div><!-- ad-profile -->

        <div class="profile job-profile">
            <div class="user-pro-section">
                <!-- profile-details -->
                <div class="profile-details section">
                    <h2>Profile Details</h2>
                    <form action="profile-details.php#">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" value="<?= $user->name ?>" placeholder="Jhon Doe">
                        </div>

                        <div class="form-group">
                            <label>Email ID</label>
                            <input type="email" class="form-control" value="<?= $user->email ?>"  placeholder="jhondoe@mail.com">
                        </div>

                        <div class="form-group">
                            <label>Bank Account No.</label>
                            <input type="text" class="form-control" value="<?= $user->name ?>"  placeholder="account_no">
                        </div>

                        <div class="checkbox section agreement">
                            <button type="submit" class="btn btn-primary" style="display: block;margin: auto;">Detail Update</button>
                        </div>
                    </form>
                </div><!-- profile-details -->

                <!-- change-password -->
                <div class="change-password section">
                    <h2>Change password</h2>
                    <!-- form -->
                    <div class="form-group">
                        <label>Old Password</label>
                        <input type="password" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label>New password</label>
                        <input type="password" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Confirm password</label>
                        <input type="password" class="form-control">
                    </div>
                </div><!-- change-password -->
                <div class="checkbox section agreement">
                    <button type="submit" class="btn btn-primary" style="display: block;margin: auto;">Change Password</button>
                </div>
            </div><!-- user-pro-edit -->
        </div>
    </div><!-- container -->
</section>

<?php
view_require('applyjob/foot');
?>
