<?php
view_require('applyjob/head');
view_require('applyjob/nav');
?>
<div class="banner-job">
		<div class="banner-overlay"></div>
		<div class="container text-center">
			<h1 class="title">The Easiest Way to Get Your New Job</h1>
			<h3>We offer 12000 jobs vacation right now</h3>
			<div class="banner-form">
				<form action="<?= baseurl('Job_list') ?>">
					<input type="hidden" name="homesearch" value="1">
					<input type="text" name="keyword" class="form-control" placeholder="Type your key word">
					<select name="location" class="form-control" required style="margin-right: 15px;">
						<option value="">Select Job Location</option>
						<?php foreach ($locations as $location): ?>
							<option value="<?= $location->id?>" ><?= $location->name?></option>
						<?php endforeach; ?>
					</select>

					<button type="submit" class="btn btn-primary" value="Search">Search</button>
				</form>
			</div><!-- banner-form -->
			
			<ul class="banner-socail list-inline">
				<li><a href="index.php#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
				<li><a href="index.php#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
				<li><a href="index.php#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="index.php#" title="Youtube"><i class="fa fa-youtube"></i></a></li>
			</ul><!-- banner-socail -->
		</div><!-- container -->
	</div>
	<!-- banner-section -->

	<div class="page">
		<div class="container">
			<div class="section category-items job-category-items  text-center">
				<ul class="category-list">

                    <?php foreach ($job_industries as $job_industry): ?>

                        <li class="category-item">
                            <a href="<?= baseurl('Job_list')."?industry_serach=true&id=".$job_industry->id?>">
                                <div class="category-icon"><img src="<?= asset($job_industry->img);?>" alt="images" class="img-responsive"></div>
                                <span class="category-title"><?= $job_industry->name ?></span>
                            </a>
                        </li>

                    <?php endforeach; ?>
				</ul>				
			</div><!-- category ad -->			

			<div class="section latest-jobs-ads">
				<div class="section-title tab-manu">
					<h4>Latest Jobs</h4>
					 <!-- Nav tabs -->      
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="index.php#popular-jobs" data-toggle="tab">Popular Jobs</a></li>
					</ul>
				</div>

				<div class="tab-content">

					<div role="tabpanel" class="tab-pane fade in active" id="popular-jobs">
						<?php foreach ($job_posts as $job_post): ?>
							<div class="job-ad-item">
								<div class="item-info">
									<div class="item-image-box">
										<div class="item-image">
											<a href="<?= baseurl('Job_Detail')."?job_id=".$job_post->id ?>">
												<img src="<?= asset($job_post->employer->logo) ?>" alt="Image" class="img-responsive"></a>
										</div><!-- item-image -->
									</div>

									<div class="ad-info">
										<span>
											<a href="<?= baseurl('Job_Detail')."?job_id=".$job_post->id ?>" class="title">
												 <?= $job_post->title ?>
											</a>
											@
											<a href="<?= baseurl('Job_Detail')."?job_id=".$job_post->id ?>">
												<?= $job_post->employer->company_name ?>
											</a>
										</span>
										<div class="ad-meta">
											<ul>
												<li><a href="<?= baseurl('Job_Detail')."?job_id=".$job_post->id ?>"><i class="fa fa-map-marker" aria-hidden="true"></i><?= $job_post->location->name ?> </a></li>
												<li><a href="<?= baseurl('Job_Detail')."?job_id=".$job_post->id ?>" class="text-capitalize"><i class="fa fa-clock-o" aria-hidden="true"></i><?= $job_post->salary_type ?></a></li>
												<li><a href="<?= baseurl('Job_Detail')."?job_id=".$job_post->id ?>"><i class="fa fa-money" aria-hidden="true"></i>$<?= number_format($job_post->salary_min) ?>- $<?= number_format($job_post->salary_max) ?></a></li>
											</ul>
										</div><!-- ad-meta -->
									</div><!-- ad-info -->
									<div class="button">
										<a href="<?= baseurl('Job_Detail')."?job_id=".$job_post->id ?>" class="btn btn-primary">Apply Now</a>
									</div>
								</div><!-- item-info -->
							</div><!-- ad-item -->
						<?php endforeach; ?>


					</div><!-- tab-pane -->
				</div><!-- tab-content -->
			</div><!-- trending ads -->		



			<div class="section workshop-traning">
				<div class="section-title">
					<h4>Workshop Traning</h4>
					<a href="#" class="btn btn-primary">See all</a>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="workshop">
							<img src="<?= asset('applyjob/images/job/5.png');?>" alt="Image" class="img-responsive">
							<h3><a href="#">Business Process Management Training</a></h3>
							<h4>Course Duration: 3 Month ( Sat, Mon, Fri)</h4>
							<div class="workshop-price">
								<h5>Course instructor: Kim Jon ley</h5>
								<h5>Course Amount: $200</h5>
							</div>
							<div class="ad-meta">
								<div class="meta-content">
									<span class="dated"><a href="#">7 Jan 10:10 pm </a></span>
								</div>
								<div class="user-option pull-right">
									<a href="#"><i class="fa fa-map-marker"></i> </a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="workshop">
							<img src="<?= asset('applyjob/images/job/6.png');?>" alt="Image" class="img-responsive">
							<h3><a href="index.php#">Employee Motivation and Engagement</a></h3>
							<h4>Course Duration: 3 Month ( Sat, Mon, Fri)</h4>
							<div class="workshop-price">
								<h5>Course instructor: Kim Jon ley</h5>
								<h5>Course Amount: $200</h5>
							</div>
							<div class="ad-meta">
								<div class="meta-content">
									<span class="dated"><a href="index.php#">7 Jan 10:10 pm </a></span>
								</div>
								<div class="user-option pull-right">
									<a href="index.php#"><i class="fa fa-map-marker"></i> </a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- workshop-traning -->

			<div class="section cta cta-two text-center">
				<div class="row">
					<div class="col-sm-4">
						<div class="single-cta">
							<div class="cta-icon icon-jobs">
								<img src="<?= asset('applyjob/images/icon/31.png');?>" alt="Icon" class="img-responsive">
							</div><!-- cta-icon -->
							<h3>3,412</h3>
							<h4>Live Jobs</h4>

						</div>
					</div><!-- single-cta -->

					<div class="col-sm-4">
						<div class="single-cta">
							<!-- cta-icon -->
							<div class="cta-icon icon-company">
								<img src="<?= asset('applyjob/images/icon/32.png');?>" alt="Icon" class="img-responsive">
							</div><!-- cta-icon -->
							<h3>12,043</h3>
							<h4>Total Company</h4>

						</div>
					</div><!-- single-cta -->

					<div class="col-sm-4">
						<div class="single-cta">
							<div class="cta-icon icon-candidate">
								<img src="<?= asset('applyjob/images/icon/33.png');?>" alt="Icon" class="img-responsive">
							</div><!-- cta-icon -->
							<h3>5,798,298</h3>
							<h4>Total Candidate</h4>

						</div>
					</div><!-- single-cta -->
				</div><!-- row -->
			</div><!-- cta -->			

		</div><!-- conainer -->
	</div><!-- page -->
	
	<!-- download -->
	<section id="download" class="clearfix parallax-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h2>Download on App Store</h2>
				</div>
			</div><!-- row -->

			<!-- row -->
			<div class="row">
				<!-- download-app -->
				<div class="col-sm-4">
					<a href="#" class="download-app">
						<img src="<?= asset('applyjob/images/icon/16.png');?>" alt="Image" class="img-responsive">
						<span class="pull-left">
							<span>available on</span>
							<strong>Google Play</strong>
						</span>
					</a>
				</div><!-- download-app -->

				<!-- download-app -->
				<div class="col-sm-4">
					<a href="#" class="download-app">
						<img src="<?= asset('applyjob/images/icon/17.png');?>" alt="Image" class="img-responsive">
						<span class="pull-left">
							<span>available on</span>
							<strong>App Store</strong>
						</span>
					</a>
				</div><!-- download-app -->

				<!-- download-app -->
				<div class="col-sm-4">
					<a href="#" class="download-app">
						<img src="<?= asset('applyjob/images/icon/18.png');?>" alt="Image" class="img-responsive">
						<span class="pull-left">
							<span>available on</span>
							<strong>Windows Store</strong>
						</span>
					</a>
				</div><!-- download-app -->
			</div><!-- row -->
		</div><!-- contaioner -->
	</section><!-- download -->
<?php
view_require('applyjob/foot');
?>

