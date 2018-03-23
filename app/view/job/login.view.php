<?php
view_require('job_template/head');
view_require('job_template/nav');
?>

    <style>
        .text-help {
            font-size: 11px;
            color: #d9534f;
            position: absolute;
        }

        @media only screen and (min-device-width: 414px) and (max-device-width: 736px) /*Iphone 6 Plus*/ {
            .logo {
                width: 140px;
                padding: 10px 0px;
                margin-right: 100px;
            }
        }

        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) /*Iphone 6*/ {
            .logo {
                width: 140px;
                padding: 10px 0px;
                margin-right: 60px;
            }

            .wrap-emply {
                width: 322px;
                margin: 0px auto;
                margin-left: -11px;
            }

            .login-section {
                background: #F3F3F4;
                overflow: auto;
                min-height: 10px;
                position: relative;
            }
        }

        @media only screen and (min-device-width: 360px) and (max-device-width: 640px) /*Galaxy 5s*/ {
            .logo {
                width: 140px;
                padding: 10px 0px;
                margin-right: 35px;
            }

            .login-section {
                background: #F3F3F4;
                overflow: auto;
                min-height: 10px;
                position: relative;
            }
        }

        @media only screen and (min-device-width: 412px) and (max-device-width: 732px) /*Nexus 5X*/ {
            .logo {
                width: 140px;
                padding: 10px 0px;
                margin-right: 80px;
            }

            .login-section {
                background: #F3F3F4;
                overflow: auto;
                min-height: 10px;
                position: relative;
            }

            .login-section {
                background: #F3F3F4;
                overflow: auto;
                min-height: 10px;
                position: relative;
            }
        }

        @media only screen and (max-device-width: 359px) /*Iphone 5*/ {
            .logo {
                width: 140px;
                padding: 10px 0px;
                margin-left: -12px;
                margin-right: 6px;
            }

            .login-section {
                background: #F3F3F4;
                overflow: auto;
                min-height: 10px;
                position: relative;
            }
        }
    </style>

    <div class="loginpage">

        <div class="login-section">
            <div class="login-wrap" style="padding-top: 100px;">
                <div class="inner-login-wrap signup-form">



<!--                    --><?php //if ($data=\Core\Helper\Session::flush('error')):?>
                    <?php if ($data=flash('error','jargyi')):?>
                        <div class="alert-danger" id="facebook-fail-alert">
                            <strong style="display: flex;justify-content: center;"><?= $data['title'] ?></strong>
                            <br>
                            <span><?= $data['message'] ?></span>
                        </div>
                    <?php endif; ?>


                    <div class="simple-signup-logos">
                        <div class="social-login-sec full-width">
                            <span>Welcome</span>
                        </div>
                    </div>
                    <form action="<?= baseurl('Login_Check') ?>" method="post">
                        <div class="login-email-block wrap-input form-group">
                            <label><span id="email">Email</span></label>
                            <i class="fa fa-envelope"></i>
                            <input name="email" type="email" id="email" class="form-control" placeholder="E-mail" required="" maxlength="50"/>
                        </div>
                        <div class="wrap-input form-group">
                            <label><span id="password">Password</span></label>
                            <i class="fa fa-lock"></i>
                            <input name="password" type="password" id="password" class="form-control" placeholder="Password" required="" minlength="4" maxlength="18"/>
                        </div>
                        <div class="wrap-input">
                            <input type="submit" name="login" value="Log In" id="login" class="login-button"/>
                        </div>
                    </form>

                    <div class="wrap-input">
                        <center><a href="" class="forget-pass" style="float:none;">Forgot your password?</a></center>
                    </div>
                    <span>Don't have an account?</span>
                    <div class="wrap-input">
                        <a href="<?= baseurl('Register'); ?>" class="signup-button">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
view_require('job_template/foot');
?>