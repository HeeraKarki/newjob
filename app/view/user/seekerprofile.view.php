<?php
view_require('applyjob/head');
view_require('applyjob/nav');
?>
<section class=" job-bg page  ad-profile-page">
    <div class="container">
        <div class="breadcrumb-section">
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li>Candidate Profile</li>
            </ol>
            <h2 class="title"><?= isset($job_seeker->fullname)?$job_seeker->fullname:'' ?></h2>
        </div><!-- breadcrumb-section -->

        <div class="job-profile section">
            <div class="user-profile">
                <div class="user-images">
                    <!--                    <img src="--><?//= asset('applyjob/')?><!--images/user.jpg" alt="User Images" class="img-responsive">-->
                    <img width="100" src="<?= isset($job_seeker->photo)?$job_seeker->photo!==NULL?asset($job_seeker->photo):'':asset('applyjob/images/user.jpg') ?>" alt="User Images" class="img-responsive">
                </div>
                <div class="user">
                    <h2 class="text-capitalize"><a href=""><?= isset($job_seeker->fullname)?$job_seeker->fullname:'' ?></a></h2>
                    <h5><?= isset($job_seeker->user->email)?$job_seeker->user->email:'' ?></h5>
                </div>
                <div class="favorites-user">
                    <div class="my-ads">
                        <a href="<?= baseurl('User/Applied_Job') ?>"><?= $job_seeker->job_applicants->count() ?><small>Apply Job</small></a>
                    </div>
                    <div class="favorites">
                        <a href="<?= baseurl('User/BookMark') ?>"><?= $job_seeker->job_bookmarks->count() ?><small>Favorites</small></a>
                    </div>
                </div>
            </div>

            <ul class="user-menu">
                <li><a href="<?= baseurl('User/Job_Seeker') ?>">Account Info </a></li>
                <li class="active"><a href="<?= baseurl('Seeker_Profile?name='.str_slug($job_seeker->user->job_seeker->fullname)) ?>" >View Resume</a></li>
                <li><a href="<?= baseurl('User/Profile_Detail') ?>">Profile Details</a></li>
                <li><a href="<?= baseurl('User/Applied_Job') ?>">applied job</a></li>
                <li><a href="<?= baseurl('User/Delete') ?>">Close account</a></li>
            </ul>
        </div>
        <?php view_require('applyjob/success');?>
        <?php view_require('applyjob/error');?>

        <div class="resume-content">
            <div class="profile section clearfix">
                <div class="profile-logo">
                    <img width="200" class="img-responsive" src="<?= isset($job_seeker->photo)?$job_seeker->photo!==NULL?asset($job_seeker->photo):'':asset('applyjob/images/job/resume.jpg') ?>" alt="Image">
                </div>
                <div class="profile-info">
                    <h1 class="text-capitalize"><?= $job_seeker->fullname ?></h1>
                    <address>
                        <p>Address: <?= isset($job_seeker->address)?$job_seeker->address:'Please Update Detail' ?> <br>
                            Email:<a href=""> <?= $job_seeker->user->email ?></a>
                        </p>
                    </address>
                </div>
            </div><!-- profile -->

            <div class="personal-deatils section">
                <div class="icons">
                    <i class="fa fa-user-secret" aria-hidden="true"></i>
                </div>
                <div class="personal-info">
                    <h3>Personal Deatils</h3>
                    <ul class="address">
                        <li><h5>Full Name </h5> <span>:</span><?= isset($job_seeker->fullname)?$job_seeker->fullname:'' ?></li>
                        <li><h5>Father's Name </h5> <span>:</span><?= isset($job_seeker->father_name)? $job_seeker->father_name:'' ?></li>
                        <li><h5>Mother's Name </h5> <span>:</span><?= isset($job_seeker->mother_name)? $job_seeker->mother_name:'' ?></li>
                        <li><h5>Date of Birth </h5> <span>:</span><?= isset($job_seeker->date_of_birth)? $job_seeker->date_of_birth:'' ?></li>
                        <li><h5>Birth Place </h5> <span>:</span><?= isset($job_seeker->birth_place)? $job_seeker->birth_place:'' ?></li>
                        <li><h5>Nationality </h5> <span>:</span><?= isset($job_seeker->nationality)? $job_seeker->nationality:'' ?></li>
                        <li><h5>Sex </h5> <span>:</span><?= isset($job_seeker->gender )?$job_seeker->gender === "1" ? "Male": "Female":''?></li>
                        <li><h5>Address </h5> <span>:</span><?= isset($job_seeker->address)? $job_seeker->address:'' ?></li>
                    </ul>
                </div>
            </div>

            <div class="career-objective section">
                <div class="icons">
                    <i class="fa fa-black-tie" aria-hidden="true"></i>
                </div>
                <div class="career-info">
                    <?= isset($job_seeker->user->career->txt)?$job_seeker->user->career->txt:'Write few lines about your career objective' ?>
                </div>
            </div><!-- career-objective -->

            <div class="work-history section">
                <div class="icons">
                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                </div>
                <div class="work-info">
                    <h3>Work History</h3>
                    <ul>
                        <?php foreach ($job_seeker->experiences as $experience): ?>
                            <li>
                                <h4>
                                    <?= $experience->designation ?> @ <?= $experience->company_name ?>
                                    <span>
                                        <?= date('d-M-Y',strtotime($experience->post_from_date)) ?>  To  <?= date('d-M-Y',strtotime($experience->post_to_date))  ?>
                                    </span></h4>
                                <p><?= $experience->description ?></p>
                            </li>
                        <?php endforeach; ?>

                    </ul>
                </div>
            </div><!-- work-history -->

            <div class="educational-background section">
                <div class="icons">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                </div>
                <div class="educational-info">
                    <h3>Education Background</h3>
                    <ul>
                        <?php foreach ($job_seeker->educations as $education): ?>
                            <li>
                                <h4>
                                    <?= $education->degree ?> @ <?= $education->institute_name ?>
                                </h4>
                                <ul>
                                    <li>Year: <span><?= date('Y',strtotime($education->from)) ?> - <?= date('Y',strtotime($education->to)) ?></span> </li>
                                    <li>Concentration/Major: <span><?= $education->degree ?></span></li>
                                </ul>
                                <p><?= $education->description ?></p>
                            </li>
                        <?php endforeach; ?>

                    </ul>
                </div>
            </div><!-- educational-background -->

            <div class="special-qualification: section">
                <div class="icons">
                    <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                </div>
                <div class="qualification">
                    <h3>Special Qualification:</h3>
                    <ul>
                        <?php foreach ($job_seeker->qualifications as $k=>$qualification): ?>
                            <li><span><?= $k+1 .' . '?></span><?= $qualification->txt ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div><!-- educational-background -->

            <div class="language-proficiency section">
                <div class="icons">
                    <i class="fa fa-language" aria-hidden="true"></i>
                </div>
                <div class="proficiency">
                    <h3>Language Proficiency</h3>
                    <ul class="list-inline">

                        <?php foreach ($job_seeker->languages as $k=>$language): ?>
                            <li>
                                <h5><?= $language->name ?></h5>
                                <ul>

                                    <li><i class="fa <?= $language->rating >1 ? 'fa-star' : 'fa-star-o' ?> <?= $language->rating ===0.50?'fa-star-half-empty':''?>" aria-hidden="true"></i></li>
                                    <li><i class="fa <?= $language->rating >2 ? 'fa-star' : 'fa-star-o'?> <?= $language->rating ===1.50?'fa-star-half-empty':''?>" aria-hidden="true"></i></li>
                                    <li><i class="fa <?= $language->rating >3 ? 'fa-star' : 'fa-star-o'?> <?= $language->rating ===2.50?'fa-star-half-empty':''?>" aria-hidden="true"></i></li>
                                    <li><i class="fa <?= $language->rating >4 ? 'fa-star' : 'fa-star-o'?> <?= $language->rating ===3.50?'fa-star-half-empty':''?>" aria-hidden="true"></i></li>
                                    <li><i class="fa <?= $language->rating >=5 ? 'fa-star' : 'fa-star-o'?> <?= $language->rating ===4.50?'fa-star-half-empty':''?>" aria-hidden="true"></i></li>


                                </ul>
                            </li>
                        <?php endforeach; ?>

                    </ul>
                </div>
            </div><!-- language-proficiency -->



            <div class="buttons">
                <a href="resume.php#" class="btn">Send Email</a>
            </div>
            <div class="download-button">
                <a href="resume.php#" class="btn">Download Resume as doc</a>
            </div>
        </div><!-- resume-content -->
    </div><!-- container -->
</section><!-- ad-profile-page -->

<!--/Preset Style Chooser-->
<div class="style-chooser">
    <div class="style-chooser-inner">
        <a href="resume.php#" class="toggler"><i class="fa fa-cog fa-spin"></i></a>
        <h4>Presets</h4>
        <ul class="preset-list clearfix">
            <li class="preset1 active" data-preset="1"><a href="resume.php#" data-color="preset1"></a></li>
            <li class="preset2" data-preset="2"><a href="resume.php#" data-color="preset2"></a></li>
            <li class="preset3" data-preset="3"><a href="resume.php#" data-color="preset3"></a></li>
            <li class="preset4" data-preset="4"><a href="resume.php#" data-color="preset4"></a></li>
        </ul>
    </div>
</div>
<!--/End:Preset Style Chooser-->

<?php
view_require('applyjob/foot');
?>
