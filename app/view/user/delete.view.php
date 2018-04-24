<?php
view_require('applyjob/head');
view_require('applyjob/nav');
?>
<!-- delete-page -->
<section class="clearfix job-bg delete-page">
    <div class="container">
        <div class="breadcrumb-section">
            <!-- breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li>Close account</li>
            </ol><!-- breadcrumb -->
            <h2 class="title">Close Account</h2>
        </div><!-- banner -->

        <div class="job-profile section">
            <div class="user-profile">
                <div class="user-images">
                    <img src="asset/images/user.jpg" alt="User Images" class="img-responsive">
                </div>
                <div class="user">
                    <h2>Hello, <a href="delete-account.php#">Jhon Doe</a></h2>
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
                <li><a href="resume.php">View Resume</a></li>
                <li><a href="profile-details.php">Profile Details</a></li>
                <li><a href="bookmark.php">Bookmark</a></li>
                <li><a href="applied-job.php">applied job</a></li>
                <li class="active"><a href="delete-account.php">Close account</a></li>
            </ul>
        </div><!-- ad-profile -->

        <form action="<?= baseurl('User/Del') ?>" method="post">
            <div class="close-account text-center">
                <div class="delete-account section">
                    <h2>Delete Your Account</h2>
                    <h4>Are you sure, you want to delete your account?</h4>
                    <input type="hidden" value="<?= auth()['id'] ?>" name="id">
                    <button type="submit" class="btn">Delete Account</button>
                    <a href="" class="btn cancle">Cancle</a>
                </div>
            </div>
        </form>

    </div><!-- container -->
</section>
<!-- delete-page -->
<?php
view_require('applyjob/foot');
?>
