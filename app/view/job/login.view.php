<?php
view_require('applyjob/head');
view_require('applyjob/nav');
?>
<!-- signin-page -->
<section class="clearfix job-bg user-page" style="background-size: cover !important;">
		<div class="container">
			<div class="row text-center">
				<!-- user-login -->			
				<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
					<div class="user-account">
						<h2>User Login</h2>
                        <?php view_require('applyjob/error') ?>
                        <?php view_require('applyjob/success') ?>
						<!-- form -->
						<form action="<?= baseurl('Login_Check');?>" method="post">
							<div class="form-group">
								<input type="email" class="form-control" name="email" placeholder="Email Address" >
							</div>
							<div class="form-group">
								<input type="password" class="form-control" name="password" placeholder="Password" >
							</div>
							<button type="submit" class="btn">Login</button>
						</form><!-- form -->
					
						<!-- forgot-password -->
						<div class="user-option">
							<div class="pull-right forgot-password">
								<a href="<?= baseurl('Forgot_password') ?>">Forgot password</a>
							</div>
						</div><!-- forgot-password -->
					</div>
					<a href="<?= baseurl('Register') ?>" class="btn-primary">Create a New Account</a>
				</div><!-- user-login -->			
			</div><!-- row -->	
		</div><!-- container -->
	</section>
	<!-- signin-page -->

<?php
view_require('applyjob/foot');
?>
