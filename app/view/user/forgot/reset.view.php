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
                <li>Forgot Password</li>
            </ol><!-- breadcrumb -->
            <h2 class="title">Reset Password</h2>
        </div><!-- banner -->

        <form action="<?= baseurl('Reset_pass') ?>" method="post">
            <div class="close-account text-center">
                <div class="delete-account section">
                    <input type="hidden" name="user_id" value="<?= $user->id ?>">
                    <h2>Reset Password</h2>
                    <h4>Are you sure, you want to reset your password?</h4>
                    <div class="row form-group" style="display: flex;justify-content: center;">
                        <label class="col-sm-2 label-title">New Password</label>
                        <div class="col-sm-5">
                            <input type="password" name="password"  required class="form-control">
                        </div>
                    </div>

                    <div class="row form-group" style="display: flex;justify-content: center;">
                        <label class="col-sm-2 label-title">Comfirm Password</label>
                        <div class="col-sm-5">
                            <input type="password" name="com_password"  required class="form-control">
                        </div>
                    </div>


                    <button type="submit" class="btn">Reset Password</button>
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
