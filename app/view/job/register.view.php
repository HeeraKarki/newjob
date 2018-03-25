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
								<li role="presentation" class="active"><a href="signup.php#find-job" aria-controls="find-job" role="tab" data-toggle="tab">Find A Job</a></li>
								<li role="presentation"><a href="signup.php#post-job" aria-controls="post-job" role="tab" data-toggle="tab">Post A Job</a></li>
							</ul>

							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="find-job">
									<form action="<?= baseurl('Signup');?>"method="post">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Name" >
										</div>
										<div class="form-group">
											<input type="email" class="form-control" placeholder="Email Id">
										</div>
										<div class="form-group">
											<input type="password" class="form-control" placeholder="Password">
										</div>
										<div class="form-group">
											<input type="password" class="form-control" placeholder="Confirm Password">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Mobile Number">
										</div>
										<!-- select -->
										<select class="form-control">
											<option value="#">Select City</option>
											<option value="#">London UK</option>
											<option value="#">Newyork, USA</option>
											<option value="#">Seoul, Korea</option>
											<option value="#">Beijing, China</option>
										</select><!-- select -->
		
										<div class="checkbox">
											<label class="pull-left checked" for="signing"><input type="checkbox" name="signing" id="signing"> By signing up for an account you agree to our Terms and Conditions </label>
										</div><!-- checkbox -->	
										<button type="submit" class="btn">Registration</button>	
									</form>
								</div>
								<div role="tabpanel" class="tab-pane" id="post-job">
									<form action="signup.php#">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Employer Name" >
										</div>
										<div class="form-group">
											<input type="email" class="form-control" placeholder="Email Id">
										</div>
										<div class="form-group">
											<input type="password" class="form-control" placeholder="Password">
										</div>
										<div class="form-group">
											<input type="password" class="form-control" placeholder="Confirm Password">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Contact Number">
										</div>
										<div class="checkbox">
											<label class="pull-left checked" for="signing-2"><input type="checkbox" name="signing-2" id="signing-2">By signing up for an account you agree to our Terms and Conditions</label>
										</div><!-- checkbox -->	
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