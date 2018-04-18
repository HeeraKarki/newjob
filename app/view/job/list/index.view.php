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
                                            <h4>Categories<span class="pull-right"><i class="fa fa-minus"></i></span></h4>
                                        </a>
                                    </div>
                                </div><!-- panel-heading -->

                                <div id="accordion-one" class="panel-collapse collapse in">
                                    <!-- panel-body -->
                                    <div class="panel-body">
                                        <h5><a href="categories-main.html"><i class="fa fa-caret-down"></i> All Categories</a></h5>
                                        <a href="job-list.html#"><i class="icofont icofont-man-in-glasses"></i>Engineer/Architects</a>
                                        <ul>
                                            <li><a href="job-list.html#">Software <span>(129)</span></a></li>
                                            <li><a href="job-list.html#">Architecture <span>(8342)</span></a></li>
                                            <li><a href="job-list.html#">UI & UX Designer <span>(782)</span></a></li>
                                            <li><a href="job-list.html#">Telecommunication <span>(5247)</span></a></li>
                                            <li><a href="job-list.html#">Civil Engineer <span>(634)</span></a></li>
                                            <li><a href="job-list.html#">Chemical Engineer <span>(453)</span></a></li>
                                            <li><a href="job-list.html#">Program Development <span>(7986)</span></a></li>
                                            <li><a href="job-list.html#">Mechanical Engineer <span>(742)</span></a></li>
                                            <li><a href="job-list.html#">Industrial Engineer <span>(149)</span></a></li>
                                        </ul>
                                        <div class="see-more">
                                            <button type="button" class="show-more one"><i class="fa fa-plus-square-o" aria-hidden="true"></i>See More</button>
                                            <ul class="more-category one">
                                                <li><a href="job-list.html#">Fron end developer<span>(289)</span></a></li>
                                                <li><a href="job-list.html#">Back end developer<span>(5402)</span></a></li>
                                                <li><a href="job-list.html#">IT Department Manager<span>(3829)</span></a></li>
                                                <li><a href="job-list.html#">QA Department Manager<span>(352)</span></a></li>
                                            </ul>
                                        </div>

                                    </div><!-- panel-body -->
                                </div>
                            </div><!-- panel -->

                            <!-- panel -->
                            <div class="panel panel-default panel-faq">
                                <!-- panel-heading -->
                                <div class="panel-heading">
                                    <div  class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="job-list.html#accordion-two">
                                            <h4>Date Posted <span class="pull-right"><i class="fa fa-plus"></i></span></h4>
                                        </a>
                                    </div>
                                </div><!-- panel-heading -->

                                <div id="accordion-two" class="panel-collapse collapse">
                                    <!-- panel-body -->
                                    <div class="panel-body">
                                        <label for="today"><input type="checkbox" name="today" id="today"> Today</label>
                                        <label for="7-days"><input type="checkbox" name="7-days" id="7-days"> 7 days</label>
                                        <label for="30-days"><input type="checkbox" name="30-days" id="30-days"> 30 days</label>
                                    </div><!-- panel-body -->
                                </div>
                            </div><!-- panel -->

                            <!-- panel -->
                            <div class="panel panel-default panel-faq">
                                <!-- panel-heading -->
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="job-list.html#accordion-three">
                                            <h4>
                                                Salary Range
                                                <span class="pull-right"><i class="fa fa-plus"></i></span>
                                            </h4>
                                        </a>
                                    </div>
                                </div><!-- panel-heading -->

                                <div id="accordion-three" class="panel-collapse collapse">
                                    <!-- panel-body -->
                                    <div class="panel-body">
                                        <div class="price-range"><!--price-range-->
                                            <div class="price">
                                                <span>$100 - <strong>$700</strong></span>
                                                <div class="dropdown category-dropdown pull-right">
                                                    <a data-toggle="dropdown" href="job-list.html#"><span class="change-text">USD</span><i class="fa fa-caret-square-o-down"></i></a>
                                                    <ul class="dropdown-menu category-change">
                                                        <li><a href="job-list.html#">USD</a></li>
                                                        <li><a href="job-list.html#">AUD</a></li>
                                                        <li><a href="job-list.html#">EUR</a></li>
                                                        <li><a href="job-list.html#">GBP</a></li>
                                                        <li><a href="job-list.html#">JPY</a></li>
                                                    </ul>
                                                </div><!-- category-change -->
                                                <input type="text" value="" data-slider-min="0" data-slider-max="700" data-slider-step="5" data-slider-value="[250,450]" id="price" ><br />
                                            </div>
                                        </div><!--/price-range-->
                                    </div><!-- panel-body -->
                                </div>
                            </div><!-- panel -->

                            <!-- panel -->
                            <div class="panel panel-default panel-faq">
                                <!-- panel-heading -->
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="job-list.html#accordion-four">
                                            <h4>Employment Type<span class="pull-right"><i class="fa fa-plus"></i></span></h4>
                                        </a>
                                    </div>
                                </div><!-- panel-heading -->

                                <div id="accordion-four" class="panel-collapse collapse">
                                    <!-- panel-body -->
                                    <div class="panel-body">
                                        <label for="full-time"><input type="checkbox" name="full-time" id="full-time"> Full Time</label>
                                        <label for="part-time"><input type="checkbox" name="part-time" id="part-time"> Part Time</label>
                                        <label for="contractor"><input type="checkbox" name="contractor" id="contractor"> Contractor</label>
                                        <label for="intern"><input type="checkbox" name="intern" id="intern"> Intern</label>
                                        <label for="seasonal"><input type="checkbox" name="seasonal" id="seasonal"> Seasonal / Temp</label>
                                    </div><!-- panel-body -->
                                </div>
                            </div><!-- panel -->

                            <!-- panel -->
                            <div class="panel panel-default panel-faq">
                                <!-- panel-heading -->
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="job-list.html#accordion-five">
                                            <h4>Experience Level<span class="pull-right"><i class="fa fa-plus"></i></span></h4>
                                        </a>
                                    </div>
                                </div><!-- panel-heading -->

                                <div id="accordion-five" class="panel-collapse collapse">
                                    <!-- panel-body -->
                                    <div class="panel-body">
                                        <label for="training"><input type="checkbox" name="training" id="training"> Training</label>
                                        <label for="entry-level"><input type="checkbox" name="entry-level" id="entry-level"> Entry Level</label>
                                        <label for="mid-senior"><input type="checkbox" name="mid-senior" id="mid-senior"> Mid-Senior Level</label>
                                        <label for="top-level"><input type="checkbox" name="top-level" id="top-level"> Top Level</label>
                                    </div><!-- panel-body -->
                                </div>
                            </div> <!-- panel -->

                            <!-- panel -->
                            <div class="panel panel-default panel-faq">
                                <!-- panel-heading -->
                                <div class="panel-heading">
                                    <div class="panel-title"></div>
                                    <a data-toggle="collapse" data-parent="#accordion" href="job-list.html#accordion-six">
                                        <h4>Company<span class="pull-right"><i class="fa fa-plus"></i></span></h4>
                                    </a>
                                </div><!-- panel-heading -->

                                <div id="accordion-six" class="panel-collapse collapse">
                                    <!-- panel-body -->
                                    <div class="panel-body">
                                        <input type="text" placeholder="Search Company" class="form-control">
                                        <label for="apple"><input type="checkbox" name="apple" id="apple"> Apple</label>
                                        <label for="dropbox"><input type="checkbox" name="dropbox" id="dropbox"> Dropbox</label>
                                        <label for="micromax"><input type="checkbox" name="micromax" id="micromax"> Micromax</label>
                                        <label for="nokia"><input type="checkbox" name="nokia" id="nokia"> Nokia</label>
                                        <label for="microsoft"><input type="checkbox" name="microsoft" id="microsoft"> Microsoft</label>
                                        <label for="samsung"><input type="checkbox" name="samsung" id="samsung"> Samsung</label>
                                        <div class="see-more">
                                            <button type="button" class="show-more two"><i class="fa fa-plus-square-o" aria-hidden="true"></i>See More</button>
                                            <div class="more-category two">
                                                <label for="blackBerry"><input type="checkbox" name="blackBerry" id="blackBerry">BlackBerry</label>
                                                <label for="motorola"><input type="checkbox" name="motorola" id="motorola">Motorola</label>
                                                <label for="lenovo"><input type="checkbox" name="lenovo" id="lenovo">Lenovo</label>
                                            </div>
                                        </div>
                                    </div><!-- panel-body -->
                                </div>
                            </div> <!-- panel -->

                            <!-- panel -->
                            <div class="panel panel-default panel-faq">
                                <!-- panel-heading -->
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="job-list.html#accordion-seven">
                                            <h4>Location<span class="pull-right"><i class="fa fa-plus"></i></span></h4>
                                        </a>
                                    </div>
                                </div><!-- panel-heading -->

                                <div id="accordion-seven" class="panel-collapse collapse">
                                    <!-- panel-body -->
                                    <div class="panel-body">
                                        <input type="text" placeholder="Search Location" class="form-control">
                                        <label for="angeles"><input type="checkbox" name="angeles" id="angeles"> Los Angeles, CA</label>
                                        <label for="kingdom"><input type="checkbox" name="kingdom" id="kingdom"> United Kingdom</label>
                                        <label for="states"><input type="checkbox" name="states" id="states"> United States</label>
                                        <label for="columbia"><input type="checkbox" name="columbia" id="columbia"> British Columbia</label>
                                        <label for="australia"><input type="checkbox" name="australia" id="australia"> Australia</label>
                                        <label for="germany"><input type="checkbox" name="germany" id="germany"> Germany</label>
                                        <div class="see-more">
                                            <button type="button" class="show-more three"><i class="fa fa-plus-square-o" aria-hidden="true"></i>See More</button>
                                            <div class="more-category three">
                                                <label for="belgium"><input type="checkbox" name="belgium" id="belgium">Belgium</label>
                                                <label for="brazil"><input type="checkbox" name="brazil" id="brazil">Brazil</label>
                                                <label for="denmark"><input type="checkbox" name="denmark" id="denmark">Denmark</label>
                                                <label for="indonesia"><input type="checkbox" name="indonesia" id="indonesia">Indonesia</label>
                                            </div>
                                        </div>
                                    </div><!-- panel-body -->
                                </div>
                            </div> <!-- panel -->

                        </div><!-- panel-group -->
                    </div>
                </div><!-- accordion-->

                <!-- recommended-ads -->
                <div class="col-sm-8 col-md-7">
                    <div class="section job-list-item">
                        <div class="featured-top">
                            <h4>Showing 1-25 of 65,712 ads</h4>
                            <div class="dropdown pull-right">
                                <div class="dropdown category-dropdown">
                                    <h5>Sort by:</h5>
                                    <a data-toggle="dropdown" href="job-list.html#"><span class="change-text">Most Relevant</span><i class="fa fa-caret-square-o-down"></i></a>
                                    <ul class="dropdown-menu category-change">
                                        <li><a href="job-list.html#">Most Relevant</a></li>
                                        <li><a href="job-list.html#">Most Popular</a></li>
                                    </ul>
                                </div><!-- category-change -->
                            </div>
                        </div><!-- featured-top -->

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





                        <!-- pagination  -->
                        <div class="text-center">
                            <ul class="pagination ">
                                <li><a href="job-list.html#"><i class="fa fa-chevron-left"></i></a></li>
                                <li><a href="job-list.html#">1</a></li>
                                <li class="active"><a href="job-list.html#">2</a></li>
                                <li><a href="job-list.html#">3</a></li>
                                <li><a href="job-list.html#">4</a></li>
                                <li><a href="job-list.html#">5</a></li>
                                <li><a>...</a></li>
                                <li><a href="job-list.html#">10</a></li>
                                <li><a href="job-list.html#">20</a></li>
                                <li><a href="job-list.html#">30</a></li>
                                <li><a href="job-list.html#"><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
                        </div><!-- pagination  -->
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

