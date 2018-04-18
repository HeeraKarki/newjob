<?php
view_require('applyjob/head');
view_require('applyjob/nav');
?>
<section class="job-bg page job-details-page">
    <div class="container">
        <div class="breadcrumb-section">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="job-list.html">Engineer/Architects</a></li>
                <li>UI & UX Designer</li>
            </ol><!-- breadcrumb -->
            <h2 class="title">Creative & Design</h2>
        </div><!-- breadcrumb -->

        <div class="banner-form banner-form-full job-list-form">
            <form action="job-details.html#">
                <!-- category-change -->
                <div class="dropdown category-dropdown">
                    <a data-toggle="dropdown" href="job-details.html#"><span class="change-text">Job Category</span> <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu category-change">
                        <li><a href="job-details.html#">Customer Service</a></li>
                        <li><a href="job-details.html#">Software Engineer</a></li>
                        <li><a href="job-details.html#">Program Development</a></li>
                        <li><a href="job-details.html#">Project Manager</a></li>
                        <li><a href="job-details.html#">Graphics Designer</a></li>
                    </ul>
                </div><!-- category-change -->

                <!-- language-dropdown -->
                <div class="dropdown category-dropdown language-dropdown">
                    <a data-toggle="dropdown" href="job-details.html#"><span class="change-text">Job Location</span> <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu category-change language-change">
                        <li><a href="job-details.html#">Location 1</a></li>
                        <li><a href="job-details.html#">Location 2</a></li>
                        <li><a href="job-details.html#">Location 3</a></li>
                    </ul>
                </div><!-- language-dropdown -->

                <input type="text" class="form-control" placeholder="Type your key word">
                <button type="submit" class="btn btn-primary" value="Search">Search</button>
            </form>
        </div><!-- banner-form -->

        <div class="job-details">
            <div class="section job-ad-item">
                <div class="item-info">
                    <div class="item-image-box">
                        <div class="item-image">
                            <img src="<?= asset($detail->user->employer->logo) ?>" alt="Image" class="img-responsive">
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
                                  <?= $detail->user->employer->company_name ?>
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
                        <li><a href="job-details.html#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                        <li><a href="job-details.html#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                        <li><a href="job-details.html#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                        <li><a href="job-details.html#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                        <li><a href="job-details.html#"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>
                        <li><a href="job-details.html#"><i class="fa fa-tumblr-square" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div><!-- job-ad-item -->

            <div class="job-details-info">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="section job-description">
                            <div class="description-info">
                                <h1>Description</h1>
                                <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni।</p>
                            </div>
                            <div class="responsibilities">
                                <h1>Key Responsibilities:</h1>
                                <p>-Execute all visual design stages of website design from concept to final hand-off to development-Create print advertisements, social media advertisements, client collateral & digital resizes according to Client demands With direction of the Creative team, input into new design ideas for client branding-Update & keep all agency collateral materials, including keeping records of Client's logos, fonts, images, etc.  </p>
                            </div>
                            <div class="requirements">
                                <h1>Minimum Requirements</h1>
                                <ul>
                                    <li>Bachelor's Degree</li>
                                    <li>2-5 years of relevant experience ( or equivalent educational experience)</li>
                                    <li>Experience developing in Wordpress and other web design platforms</li>
                                    <li>HTML, CSS and JavaScript experience a plus</li>
                                    <li>In depth knowledge & technical experience of Photoshop, Illustrator, InDesign, Adobe PDF, Keynote, PowerPoint, Microsoft Word & Excel</li>
                                    <li>Exceptional eye for design, deep understanding of creativity and ability to recognize fresh approaches to Advertising </li>
                                    <li>Must be fluent in Spanish; working written and spoken proficiency</li>
                                    <li>**All applicants must be eligible to work in the U.S. without sponsorship</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="section job-short-info">
                            <h1>Short Info</h1>
                            <ul>
                                <li><span class="icon"><i class="fa fa-bolt" aria-hidden="true"></i></span>Posted: <?= date('F jS, Y', strtotime($detail->created_at)) ?></li>
                                <li class="text-capitalize"><span class="icon"><i class="fa fa-user-plus" aria-hidden="true"></i></span> Job poster: <a href="job-details.html#"><?= $detail->user->name ?></a></li>
                                <li><span class="icon"><i class="fa fa-industry" aria-hidden="true"></i></span>Industry: <a href="job-details.html#"><?= $detail->job_industry->name ?></a></li>
                                <li class="text-capitalize"><span class="icon"><i class="fa fa-line-chart" aria-hidden="true"></i></span>Experience: <a href="job-details.html#"><?= $detail->experience ?></a></li>
                                <li><span class="icon"><i class="fa fa-key" aria-hidden="true"></i></span>Job function: <?= $detail->job_function->name ?></li>
                            </ul>
                        </div>
                        <div class="section company-info">
                            <h1>Company Info</h1>
                            <ul>
                                <li>Compnay Name: <a href="job-details.html#"><?= $detail->user->employer->company_name ?></a></li>
                                <li>Address: <?= $detail->user->employer->address ?></li>
                                <li>Compnay SIze:  <?= $detail->user->employer->no_of_employee ?></li>
                                <li>Industry: <a href="job-details.html#">Technology</a></li>
                                <li>Phone: <?= $detail->user->employer->phone_no ?></li>
                                <li>Email: <a href="job-details.html#"><?= $detail->user->email ?></a></li>
                                <li>Website: <a href="job-details.html#"><?= $detail->user->employer->website ?></a></li>
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

