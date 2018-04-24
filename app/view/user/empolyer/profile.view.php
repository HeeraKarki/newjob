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

        <?php view_require('applyjob/employer_profile_head');?>
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
