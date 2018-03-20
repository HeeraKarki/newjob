<?php
view_require('job_template/head');
view_require('job_template/nav');
?>
<style>
    @media (max-width: 600px) {
        #img-4, #img-5, #img-6 {
            display: none;
        }
    }

    .text-help {
        font-size: 11px;
        color: #d9534f;
        position: absolute;
    }

    .divMsg > .text-help {
        position: relative;
    }
</style>
<div class="login-section" style="padding-top: 100px;">
    <div class="login-wrap">
        <div class="inner-login-wrap signup-form">
            <div class="simple-signup-logos">


                <div class="col-sm-12 alert alert-danger" id="facebook-fail-alert" style="display: none">
                    <strong>Ooops</strong>, Your facebook log in failed. Please try again or log in using
                    your correct email address.
                </div>

                <div class="col-sm-12 alert alert-danger" id="divEmployerNotAllow" style="display: none">
                    <strong>Sorry</strong>, your email address is already registered as an Employer, please
                    try a different email address.
                </div>

                <h1>Sign Up Now and Move Up Today</h1>
                <p>Find your dream job with Top Employers</p>
               

            </div>


            <div class="tit">
                <div id="BodyPlaceHolder_divMsg" class="divMsg"></div>
            </div>


            <form action="<?= baseurl('Signup') ?>" method="post">

            <div class="wrap-input form-group">
                    <label>
                        <span id="BodyPlaceHolder_lblFirstName">Username</span>
                        <span class="star"> *</span>
                    </label>
                    <i class="fa fa-user"></i>
                    <input name="username" type="text" maxlength="50" id="BodyPlaceHolder_txtFirstName" class="form-control" placeholder="Name"/>

                </div>


                <div class="wrap-input form-group">
                    <label><span id="BodyPlaceHolder_LabelEmail">Email
                    </span><span class="star"> *</span>
                    </label>
                    <i class="fa fa-envelope"></i>
                    <input name="email" type="text" maxlength="50" class="form-control" placeholder="E-mail"/>
                </div>
                <div class="wrap-input form-group">
                    <label>
                        <span id="BodyPlaceHolder_lblPassword">Password</span>
                        <span class="star"> *</span></label>
                    <i class="fa fa-lock"></i>
                    <input name="password" type="password" maxlength="18" id="BodyPlaceHolder_txtPassword" class="form-control" placeholder="Password" minlength="4"/>

                </div>
                
                
                <div class="wrap-input">
                    <input type="submit" name="Add Data" value="Register" id="BodyPlaceHolder_btnSave" class="login-button" style="width: 100%"/>
                </div>
            </form>


            <span>Already have an account?</span>
            <div class="wrap-input">
                <a href="login.html" class="signup-button">Log In</a>
            </div>
        </div>
    </div>
</div> <

<?php
view_require('job_template/foot');
?>