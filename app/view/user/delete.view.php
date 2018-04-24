<?php
view_require('applyjob/head');
view_require('applyjob/nav');
?>
<!-- delete-page -->
<section class="clearfix job-bg delete-page" style="min-height: 500px; background-size: cover">
    <div class="container">
        <div class="breadcrumb-section">
            <!-- breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li>Close account</li>
            </ol><!-- breadcrumb -->
            <h2 class="title">Close Account</h2>
        </div><!-- banner -->

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
