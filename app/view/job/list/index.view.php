<?php
view_require('applyjob/head');
view_require('applyjob/nav');
?>


<section class="job-bg page job-list-page">
    <div class="container">
        <div class="breadcrumb-section">
            <!-- breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Engineer/Architects</li>
            </ol><!-- breadcrumb -->
            <h2 class="title">Software Engineer</h2>
        </div>

        <div class="banner-form banner-form-full job-list-form">
            <form>
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

        <div class="category-info">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class="accordion">
                        <!-- panel-group -->
                        <div class="panel-group" id="accordion">

                            <!-- panel -->
                            <div class="panel panel-default panel-faq">
                                <!-- panel-heading -->
                                <div class="panel-heading">
                                    <div  class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="job-list.html#accordion-one">
                                            <h4>Industries<span class="pull-right"><i class="fa fa-minus"></i></span></h4>
                                        </a>
                                    </div>
                                </div><!-- panel-heading -->

                                <div id="accordion-one" class="panel-collapse collapse in">
                                    <!-- panel-body -->
                                    <div class="panel-body">
                                        <h5><a href=""><i class="fa fa-caret-down"></i> All Industries</a></h5>

                                        <ul>
                                            <?php foreach ($job_industries as $job_industry): ?>
                                                <li>
                                                    <a href="<?= baseurl('Job_list')."?industry_serach=true&id=".$job_industry->id?>">
                                                        <?= $job_industry->name?>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>

                                    </div><!-- panel-body -->
                                </div>
                            </div><!-- panel -->

                            <!-- panel -->
                            <div class="panel panel-default panel-faq">
                                <!-- panel-heading -->
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="job-list.html#accordion-four">
                                            <h4>Contract Type<span class="pull-right"><i class="fa fa-plus"></i></span></h4>
                                        </a>
                                    </div>
                                </div><!-- panel-heading -->

                                <div id="accordion-four" class="panel-collapse collapse">
                                    <!-- panel-body -->
                                    <div class="panel-body">
                                        <?php foreach ($contract_types as $contract_type): ?>
                                            <label for="<?= $contract_type->name?>">
                                                <input type="checkbox" name="contract_type" id="<?= $contract_type->name?>">
                                                <a href="<?= baseurl('Job_list')."?contract_search=true&id=".$contract_type->id?>">
                                                    <?= $contract_type->name?>
                                                </a>
                                            </label>
                                        <?php endforeach; ?>
                                    </div><!-- panel-body -->
                                </div>
                            </div><!-- panel -->

                        </div><!-- panel-group -->
                    </div>
                </div><!-- accordion-->

                <!-- recommended-ads -->
                <div class="col-sm-8 col-md-7">
                    <div class="section job-list-item">

                        <?php foreach ($job_posts as $job_post): ?>
                            <div class="job-ad-item">
                                <div class="item-info">
                                    <div class="item-image-box">
                                        <div class="item-image">
                                            <a href="<?= baseurl('Job_Detail')."?job_id=".$job_post->id ?>"><img src="<?= asset($job_post->employer->logo) ?>" alt="Image" class="img-responsive"></a>
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
                                </div><!-- item-info -->
                            </div><!-- job-ad-item -->

                        <?php endforeach; ?>

                    </div>
                </div><!-- recommended-ads -->

                <div class="col-md-2 hidden-xs hidden-sm">
                    <div class="advertisement text-center">
                        <a href="job-list.html#"><img src="images/ads/1.jpg" alt="" class="img-responsive"></a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- container -->
</section><!-- main -->


<section id="something-sell" class="clearfix parallax-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="title">Add your resume and let your next job find you.</h2>
                <h4>Post your Resume for free on <a href="job-list.html#">Jobs.com</a></h4>
                <a href="post-resume.html" class="btn btn-primary">Add Your Resume</a>
            </div>
        </div><!-- row -->
    </div><!-- contaioner -->
</section><!-- something-sell -->
<?php
view_require('applyjob/foot');
?>

