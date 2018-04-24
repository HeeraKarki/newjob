<?php
view_require('applyjob/head');
view_require('applyjob/nav');
?>
	<section class="job-bg user-page">
		<div class="container">
			<div class="row text-center">
				<!-- user-login -->			
				<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
					<div class="user-account job-user-account">
						<h2>Create An Account</h2>
							<ul class="nav nav-tabs text-center" role="tablist">
								<li role="presentation" class="active"><a href="signup.php#find-job" aria-controls="find-job" role="tab" data-toggle="tab">Job Seeker</a></li>
								<li role="presentation"><a href="signup.php#post-job" aria-controls="post-job" role="tab" data-toggle="tab">Employer</a></li>
							</ul>
                        <?php view_require('applyjob/error') ?>
                        <?php view_require('applyjob/success') ?>

							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="find-job">
									<form action="<?= baseurl('Signup');?>" method="post">
                                        <input type="hidden" name="role_id" value="2">
										<div class="form-group">
											<input type="text" class="form-control" name="name" placeholder="Name" >
										</div>
										<div class="form-group">
											<input type="email" class="form-control" name="email" placeholder="Email Id">
										</div>
										<div class="form-group">
											<input type="password" class="form-control" name="password" placeholder="Password">
										</div>
										<div class="form-group">
											<input type="password" class="form-control" name="con_password" placeholder="Confirm Password">
										</div>

										<button type="submit" class="btn">Registration</button>	
									</form>
								</div>
								<div role="tabpanel" class="tab-pane" id="post-job">
									<form action="<?= baseurl('Signup');?>" method="post">
                                        <input type="hidden" name="role_id" value="3">
										<div class="form-group">
											<input type="text" class="form-control" name="name" placeholder="Employer Name" >
										</div>
										<div class="form-group">
											<input type="email" class="form-control" name="email" placeholder="Email Id">
										</div>
										<div class="form-group">
											<input type="password" class="form-control" name="password" placeholder="Password">
										</div>
										<div class="form-group">
											<input type="password" class="form-control" name="con_password" placeholder="Confirm Password">
										</div>
										<button type="submit" class="btn">Registration</button>	
									</form>
								</div>
							</div>				
					</div>
				</div><!-- user-login -->			
			</div><!-- row -->	
		</div><!-- container -->
	</section><!-- signup-page -->
<?php
view_require('applyjob/foot');
?>