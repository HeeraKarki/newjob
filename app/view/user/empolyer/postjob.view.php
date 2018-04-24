<?php
view_require('applyjob/head');
view_require('applyjob/nav');
?>
<section class=" job-bg ad-details-page">
    <div class="container">
        <div class="breadcrumb-section">
            <!-- breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Job Post </li>
            </ol><!-- breadcrumb -->
            <h2 class="title">Post Your Job</h2>
        </div><!-- banner -->


        <?php view_require('applyjob/success');?>
        <?php view_require('applyjob/error');?>

        <div class="job-postdetails">
            <div class="row">
                <div class="col-md-8">
                    <form action="<?= baseurl('Employer/Job_a_post') ?>" method="post">
                        <fieldset>
                            <div class="section postdetails">
                                <h4>Post Your Job<span class="pull-right">* Mandatory Fields</span></h4>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Title for your jon<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" name="title"  required class="form-control" placeholder="ex, Human Resource Manager">
                                    </div>
                                </div>

                                <div class="row form-group select-price">
                                    <label class="col-sm-3 label-title">Salary<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <label>$USD</label>
                                        <input type="text" name="salary_min" class="form-control" placeholder="Min">
                                        <span>-</span>
                                        <input type="text" name="salary_max" class="form-control" placeholder="Max">
                                        <input type="radio" name="price" value="negotiable" id="negotiable">
                                        <label for="negotiable">Negotiable </label>
                                    </div>
                                </div>

                                <div class="row form-group add-title">
                                    <label class="col-sm-3 label-title">Salary Type<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <select name="salary_type" class="form-control" required>
                                            <option value="per_hour">Per Hour</option>
                                            <option value="daily">Daily</option>
                                            <option value="monthly">Monthly</option>
                                            <option value="yearly">Yearly</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="row form-group add-title">
                                    <label class="col-sm-3 label-title">Location<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <select name="location_id" class="form-control" required>
                                            <option value="">Select Location</option>
                                            <?php foreach ($locations as $location): ?>
                                                <option value="<?= $location->id?>" ><?= $location->name?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <input type="hidden" name="employer_id" value="<?=  $user->employer->id ?>">
                                <div class="row form-group add-title">
                                    <label class="col-sm-3 label-title">Job Function<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <select name="job_function_id" class="form-control" required>
                                            <option value="">Select Job Function</option>
                                            <?php foreach ($job_functions as $job_function): ?>
                                                <option value="<?= $job_function->id?>"><?= $job_function->name?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="row form-group add-title">
                                    <label class="col-sm-3 label-title">Job Industries<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <select name="job_industry_id" class="form-control" required>
                                            <option value="">Select Job Industries</option>
                                            <?php foreach ($job_industries as $job_industry): ?>
                                                <option value="<?= $job_industry->id?>"><?= $job_industry->name?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>


                                <div class="row form-group">
                                    <label class="col-sm-3">Job Type<span class="required">*</span></label>
                                    <div class="col-sm-9 user-type">
                                        <?php foreach ($contract_types as $contract_type): ?>
                                            <input type="radio" name="contract_type_id" value="<?= $contract_type->id  ?>" id="ct-<?= $contract_type->id  ?>" required>
                                            <label for="ct-<?= $contract_type->id  ?>"><?= $contract_type->name  ?></label>
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label class="col-sm-3">Exprience<span class="required">*</span></label>
                                    <div class="col-sm-9 user-type">
                                        <input type="radio" name="experience" value="entry" id="entry" required> <label for="entry">Entry Level</label>
                                        <input type="radio" name="experience" value="mid" id="mid" required> <label for="mid">Mid Level</label>
                                        <input type="radio" name="experience" value="mid-senior" id="mid-senior" required> <label for="mid-senior">Mid-Senior Level</label>
                                        <input type="radio" name="experience" value="top" id="top" required> <label for="top">Top Level</label>

                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">DeadLine Date</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="deathline"  required class="form-control" placeholder="01/Jan/2018">
                                    </div>
                                </div>
                                <div class="row form-group item-description">
                                    <label class="col-sm-3 label-title">Key Responsibilities</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="responsibilities" id="responsibilities" rows="2" placeholder="Write few lines about your Key Responsibilities"></textarea>
                                    </div>
                                </div>
                                <div class="row form-group item-description">
                                    <label class="col-sm-3 label-title">Minimum Requirement</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="requirement" id="requirement" rows="2" placeholder="Write few lines about your Minimum Requirement"></textarea>
                                    </div>
                                </div>

                                <div class="row form-group item-description">
                                    <label class="col-sm-3 label-title">Description<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="description" id="textarea" placeholder="Write few lines about your jobs" rows="8"></textarea>
                                    </div>
                                </div>
                                <div class="row characters">
                                    <div class="col-sm-9 col-sm-offset-3">
                                        <p>5000 characters left</p>
                                    </div>
                                </div>

                            </div><!-- postdetails -->

                            <div class="section">
                                <h4>Make Your Post Premium</h4>
                                <p>More replies means more interested buyers. With lots of interested buyers, you have a better chance of selling for the price that you want.<a href="post.html#">Learn more</a></p>
                                <ul class="premium-options">
                                    <li class="premium">
                                        <input type="radio" name="premiumOption" value="day-one" id="day-one">
                                        <label for="day-one">Regular Post</label>
                                        <span>$20.00</span>
                                    </li>
                                    <li class="premium">
                                        <input type="radio" name="premiumOption" value="day-two" id="day-two">
                                        <label for="day-two">Regular Post</label>
                                        <span>$30.00</span>
                                    </li>
                                    <li class="premium">
                                        <input type="radio" name="premiumOption" value="day-three" id="day-three">
                                        <label for="day-three">Top Post for 7 days</label>
                                        <span>$50.00</span>
                                    </li>
                                    <li class="premium">
                                        <input type="radio" name="premiumOption" value="day-four" id="day-four">
                                        <label for="day-four">Daily Bump Up for 7 days</label>
                                        <span>$100.00</span>
                                    </li>
                                </ul>
                            </div><!-- section -->

                            <div class="checkbox section agreement">
                                <label for="send">
                                    <input type="checkbox" name="send" id="send">
                                    You agree to our <a href="post.html#">Terms of Use</a> and <a href="post.html#">Privacy Policy</a> and acknowledge that you are the rightful owner of this item and using Jobs to find a genuine buyer.
                                </label>
                                <button type="submit" class="btn btn-primary">Post Your Job</button>
                            </div><!-- section -->

                        </fieldset>
                    </form><!-- form -->
                </div>


                <!-- quick-rules -->
                <div class="col-md-4">
                    <div class="section quick-rules">
                        <h4>Quick rules</h4>
                        <p class="lead">Posting an ad on <a href="">phyuhninpwint.ml</a> is free! However, all ads must follow our rules:</p>

                        <ul>
                            <?php if ($user->employer->post_count === 0): ?>
                            <li><a href="<?= baseurl('Employer/Packages') ?>" class="btn btn-info">Package Buy</a> </li>
                            <?php endif; ?>
                            <li>You can post <?= $user->employer->post_count;  ?></li>
                            <li>Make sure you post in the correct category.</li>
                            <li>Do not post the same ad more than once or repost an ad within 48 hours.</li>
                            <li>Do not upload pictures with watermarks.</li>
                            <li>Do not post ads containing multiple items unless it's a package deal.</li>
                            <li>Do not put your email or phone numbers in the title or description.</li>
                            <li>Make sure you post in the correct category.</li>
                            <li>Do not post the same ad more than once or repost an ad within 48 hours.</li>
                            <li>Do not upload pictures with watermarks.</li>
                            <li>Do not post ads containing multiple items unless it's a package deal.</li>
                        </ul>
                    </div>
                </div><!-- quick-rules -->
            </div><!-- photos-ad -->
        </div>
    </div><!-- container -->
</section><!-- main -->


<?php
view_require('applyjob/foot');
?>
