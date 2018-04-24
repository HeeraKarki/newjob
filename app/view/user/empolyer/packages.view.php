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
            <h2 class="title">Buy Post</h2>
        </div><!-- banner -->


        <?php view_require('applyjob/success');?>
        <?php view_require('applyjob/error');?>

        <div class="job-postdetails">
            <div class="row">
                <div class="col-md-12">
                    <form action="<?= baseurl('Employer/Buy_post') ?>" method="post">
                        <fieldset>

                            <div class="section">
                                <h4>Buy Post</h4>
                                <p>More replies means more interested buyers. With lots of interested buyers, you have a better chance of selling for the price that you want.<a href="post.html#">Learn more</a></p>
                                <ul class="premium-options">
                                    <li class="premium">
                                        <input type="radio" name="post_count" value="5" id="day-one">
                                        <label for="day-one">5 Post</label>
                                        <span>$20.00</span>
                                    </li>
                                    <li class="premium">
                                        <input type="radio" name="post_count" value="10" id="day-two">
                                        <label for="day-two">10 Post</label>
                                        <span>$30.00</span>
                                    </li>
                                    <li class="premium">
                                        <input type="radio" name="post_count" value="20" id="day-three">
                                        <label for="day-three">20 Post</label>
                                        <span>$50.00</span>
                                    </li>
                                    <li class="premium">
                                        <input type="radio" name="post_count" value="50" id="day-four">
                                        <label for="day-four">50 Post</label>
                                        <span>$100.00</span>
                                    </li>
                                </ul>
                            </div><!-- section -->

                            <input type="hidden" value="<?= $user->employer->id ?>" name="employer_id">
                            <div class="checkbox section agreement">
                                <button type="submit" class="btn btn-primary" style="display: block;margin: auto;">Buy Post</button>
                            </div><!-- section -->

                        </fieldset>
                    </form><!-- form -->
                </div>
            </div><!-- photos-ad -->
        </div>
    </div><!-- container -->
</section><!-- main -->


<?php
view_require('applyjob/foot');
?>
