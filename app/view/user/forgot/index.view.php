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
            <h2 class="title">Recovery From Email</h2>
        </div><!-- banner -->

        <form action="<?= baseurl('Forgot_send') ?>" method="post">
            <div class="close-account text-center">
                <div class="delete-account section">
                    <h2>Forgot Password</h2>
                    <h4>Are you sure, you want to reset your password?</h4>
                    <div class="row form-group" style="display: flex;justify-content: center;">
                        <label class="col-sm-2 label-title">Email Address</label>
                        <div class="col-sm-5">
                            <input type="text" name="email"  required class="form-control" placeholder="eg, test@gmail.com">
                        </div>
                    </div>
                    <button type="submit" class="btn">Send Mail</button>
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
