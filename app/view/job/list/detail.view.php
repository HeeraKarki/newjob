<?php
view_require('applyjob/head');
view_require('applyjob/nav');
?>
<section class="job-bg page job-details-page">
    <div class="container">
        <div class="breadcrumb-section">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="job-list.html"><?= $detail->job_industry->name ?></a></li>
                <li><?= $detail->job_function->name ?></li>
            </ol><!-- breadcrumb -->
            <h2 class="title"><?= $detail->title ?></h2>
        </div><!-- breadcrumb -->

        <div class="banner-form banner-form-full job-list-form">
            <form action="<?= baseurl('Job_list') ?>">
                <!-- category-change -->
                <select name="job_industry" class="form-control" required style="margin-right: 15px;">
                    <option value="">Select Job Industry</option>
                    <?php foreach ($job_industries as $job_industry): ?>
                        <option value="<?= $job_industry->id?>" ><?= $job_industry->name?></option>
                    <?php endforeach; ?>
                </select>
                <!-- category-change -->

                <!-- language-dropdown -->
                <select name="location_id" class="form-control" required>
                    <option value="">Select Location</option>
                    <?php foreach ($locations as $location): ?>
                        <option value="<?= $location->id?>" ><?= $location->name?></option>
                    <?php endforeach; ?>
                </select>
                <!-- language-dropdown -->

                <input type="hidden" value="1" name="search">
                <input type="text" class="form-control" name="keyword" placeholder="Type your key word">
                <button type="submit" class="btn btn-primary" value="Search">Search</button>
            </form>
        </div><!-- banner-form -->

        <div class="job-details">
            <div class="section job-ad-item">
                <div class="item-info">
                    <div class="item-image-box">
                        <div class="item-image">
                            <img src="<?= asset($detail->employer->logo) ?>" alt="Image" class="img-responsive">
                        </div><!-- item-image -->
                    </div>

                    <div class="ad-info">
                        <span>
                            <span>
                                <a href="#" class="title">
                                    <?= $detail->title ?>
                                </a>
                            </span>
                            @
                            <a href="#">
                                  <?= $detail->employer->company_name ?>
                            </a>
                        </span>
                        <div class="ad-meta">
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> <?= $detail->location->name ?></a>
                                </li>
                                <li><a href="#" class="text-capitalize"><i class="fa fa-clock-o" aria-hidden="true"></i> <?= $detail->salary_type ?></a></li>
                                <li><i class="fa fa-money" aria-hidden="true"></i>$<?= number_format($detail->salary_min) ?> - $<?= number_format($detail->salary_min) ?></li>
                                <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i><?= $detail->job_function->name ?></a></li>
                                <li><i class="fa fa-hourglass-start" aria-hidden="true"></i>Application Deadline : <?= date('D d M Y',strtotime($detail->deathline)) ?></li>
                            </ul>
                        </div><!-- ad-meta -->
                    </div><!-- ad-info -->
                </div><!-- item-info -->
                <div class="social-media">
                    <div class="button">
                        <a href="job-details.html#" class="btn btn-primary"><i class="fa fa-briefcase" aria-hidden="true"></i>Apply For This Job</a>
                        <a href="job-details.html#" class="btn btn-primary bookmark"><i class="fa fa-bookmark-o" aria-hidden="true"></i>Bookmark</a>
                    </div>
                    <ul class="share-social">
                        <li>Share this ad</li>
                        <li><a href="<?= $detail->employer->facebook ?>"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                        <li><a href="<?= $detail->employer->twitter ?>"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                        <li><a href="<?= $detail->employer->googleplus ?>"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div><!-- job-ad-item -->

            <div class="job-details-info">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="section job-description">
                            <div class="description-info">
                                <h1>Description</h1>
                                <p><?= $detail->description ?></p>
                            </div>
                            <div class="responsibilities">
                                <h1>Key Responsibilities:</h1>
                                <p><?= $detail->responsibilities ?></p>
                            </div>
                            <div class="requirements">
                                <h1>Minimum Requirements</h1>
                                <p><?= $detail->requirement ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="section job-short-info">
                            <h1>Short Info</h1>
                            <ul>
                                <li><span class="icon"><i class="fa fa-bolt" aria-hidden="true"></i></span>Posted: <?= date('F jS, Y', strtotime($detail->created_at)) ?></li>
                                <li class="text-capitalize"><span class="icon"><i class="fa fa-user-plus" aria-hidden="true"></i></span> Job poster: <a href="job-details.html#"><?= $detail->name ?></a></li>
                                <li><span class="icon"><i class="fa fa-industry" aria-hidden="true"></i></span>Industry: <a href="job-details.html#"><?= $detail->job_industry->name ?></a></li>
                                <li class="text-capitalize"><span class="icon"><i class="fa fa-line-chart" aria-hidden="true"></i></span>Experience: <a href="job-details.html#"><?= $detail->experience ?></a></li>
                                <li><span class="icon"><i class="fa fa-key" aria-hidden="true"></i></span>Job function: <?= $detail->job_function->name ?></li>
                            </ul>
                        </div>
                        <div class="section company-info">
                            <h1>Company Info</h1>
                            <ul>
                                <li>Compnay Name: <a href="job-details.html#"><?= $detail->employer->company_name ?></a></li>
                                <li>Address: <?= $detail->employer->address ?></li>
                                <li>Compnay SIze:  <?= $detail->employer->no_of_employee ?></li>
                                <li>Industry: <a href="job-details.html#">Technology</a></li>
                                <li>Phone: <?= $detail->employer->phone_no ?></li>
                                <li>Email: <a href="job-details.html#"><?= $detail->email ?></a></li>
                                <li>Website: <a href="job-details.html#"><?= $detail->employer->website ?></a></li>
                            </ul>
                            <ul class="share-social">
                                <li><a href="job-details.html#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                                <li><a href="job-details.html#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                                <li><a href="job-details.html#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                                <li><a href="job-details.html#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- row -->
            </div><!-- job-details-info -->
        </div><!-- job-details -->
    </div><!-- container -->
</section><!-- job-details-page -->
<?php
view_require('applyjob/foot');
?>

