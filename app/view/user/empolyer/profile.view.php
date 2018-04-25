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

                    <div class="favorites">
                        <a href="bookmark.php"><?=  $user->employer->post_count ?><small>Post Left</small></a>
                    </div>
                </div>
            </div><!-- user-profile -->

            <ul class="user-menu">
                <li ><a href="<?= baseurl('User/Employer') ?>">Account Info </a></li>
                <li><a href="<?= baseurl('Employer/Job_List')?>">My Job List</a></li>
                <li><a href="<?= baseurl('User/Employer_Edit_Resume')?>">Interview</a></li>
                <li class="active"><a href="<?= baseurl('Employer/Profile_Detail') ?>">Profile Details</a></li>
                <li><a href="<?= baseurl('Employer/Packages')?>">Buy Post Packages</a></li>
                <li><a href="<?= baseurl('User/Delete') ?>">Close account</a></li>
            </ul>
        </div>
        <?php view_require('applyjob/success');?>
        <?php view_require('applyjob/error');?>

        <div class="profile job-profile">
            <div class="user-pro-section">
                <!-- profile-details -->
                <div class="profile-details section">
                    <h2>Profile Details</h2>
                    <form action="<?= baseurl('Employer/Profile_update') ?>" method="post">
                        <input type="hidden" value="<?= $user->id ?>" name="user_id">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="name" class="form-control" value="<?= $user->name ?>" placeholder="Jhon Doe">
                        </div>

                        <div class="form-group">
                            <label>Email ID</label>
                            <input type="email" name="email" class="form-control" value="<?= $user->email ?>"  placeholder="jhondoe@mail.com">
                        </div>

                        <div class="form-group">
                            <label>Bank Account No.</label>
                            <input type="text" required name="account_no" class="form-control" value="<?= isset($user->employer->bank->account_no)?$user->employer->bank->account_no:'' ?>"  placeholder="account_no">
                        </div>

                        <div class="checkbox section agreement">
                            <button type="submit" class="btn btn-primary" style="display: block;margin: auto;">Detail Update</button>
                        </div>
                    </form>
                </div><!-- profile-details -->

                <!-- change-password -->
                <form action="<?= baseurl('Employer/Password_Update') ?>" method="post">
                    <input type="hidden" name="id" value="<?= $user->id  ?>">
                    <div class="change-password section">
                        <h2>Change password</h2>
                        <!-- form -->
                        <div class="form-group">
                            <label>Old Password</label>
                            <input type="password" name="old_password" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label>New password</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Confirm password</label>
                            <input type="password" name="com_password" class="form-control">
                        </div>
                    </div><!-- change-password -->
                    <div class="checkbox section agreement">
                        <button type="submit" class="btn btn-primary" style="display: block;margin: auto;">Change Password</button>
                    </div>
                </form>

               <!-- user-pro-edit -->
        </div>
    </div><!-- container -->
</section>

<?php
view_require('applyjob/foot');
?>
