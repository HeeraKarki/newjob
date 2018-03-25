<?php
view_require('applyjob/head');
view_require('applyjob/nav');
?>
<!-- signin-page -->
<section class="clearfix job-bg user-page">
		<div class="container">
			<div class="row text-center">
				<!-- user-login -->			
				<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
					<div class="user-account">
						<h2>User Login</h2>
                        
                        <?php if ($data=flash('error')):?>

                       <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <strong><?= $data['title'] ?></strong><br>
                            <?= $data['message'] ?>
                        </div>
                        <?php endif; ?>
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
							<div class="checkbox pull-left">
								<label for="logged"><input type="checkbox" name="logged" id="logged"> Keep me logged in </label>
							</div>
							<div class="pull-right forgot-password">
								<a href="Login_Check">Forgot password</a>
							</div>
						</div><!-- forgot-password -->
					</div>
					<a href="signin.php#" class="btn-primary">Create a New Account</a>
				</div><!-- user-login -->			
			</div><!-- row -->	
		</div><!-- container -->
	</section>
	<!-- signin-page -->

<?php
view_require('applyjob/foot');
?>
