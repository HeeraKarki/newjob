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
            <h2 class="title">Jhon Doe Resume</h2>
        </div><!-- breadcrumb-section -->

        <div class="job-profile section">
            <div class="user-profile">
                <div class="user-images">
                    <!--                    <img src="--><?//= asset('applyjob/')?><!--images/user.jpg" alt="User Images" class="img-responsive">-->
                    <img width="100" src="<?= isset($user_details->job_seeker->photo)?$user_details->job_seeker->photo!==NULL?asset($user_details->job_seeker->photo):'':asset('applyjob/images/user.jpg') ?>" alt="User Images" class="img-responsive">
                </div>
                <div class="user">
                    <h2 class="text-capitalize">Hello, <a href=""><?= auth()['name'] ?></a></h2>
                    <h5><?= auth()['email'] ?></h5>
                </div>

                <div class="favorites-user">
                    <div class="my-ads">
                        <a href="applied-job.php">29<small>Apply Job</small></a>
                    </div>
                    <div class="favorites">
                        <a href="bookmark.php">18<small>Favorites</small></a>
                    </div>
                </div>
            </div>

            <ul class="user-menu">
                <li><a href="<?= baseurl('User/Job_Seeker') ?>">Account Info </a></li>
                <li class="active"><a href="<?= baseurl('User/Resume') ?>" >View Resume</a></li>
                <li><a href="<?= baseurl('User/Edit_Resume')?>">Edit Resume</a></li>
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
                    <img width="200" class="img-responsive" src="<?= isset($user_details->job_seeker->photo)?$user_details->job_seeker->photo!==NULL?asset($user_details->job_seeker->photo):'':asset('applyjob/images/job/resume.jpg') ?>" alt="Image">
                </div>
                <div class="profile-info">
                    <h1 class="text-capitalize"><?= auth()['name']?></h1>
                    <address>
                        <p>Address: <?= isset($user_details->job_seeker->address)?$user_details->job_seeker->address:'Please Update Detail' ?> <br>
                            Email:<a href=""> <?= auth()['email']?></a>
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
                        <li><h5>Full Name </h5> <span>:</span><?= isset($user_details->job_seeker->fullname)?$user_details->job_seeker->fullname:'' ?></li>
                        <li><h5>Father's Name </h5> <span>:</span><?= isset($user_details->job_seeker->father_name)? $user_details->job_seeker->father_name:'' ?></li>
                        <li><h5>Mother's Name </h5> <span>:</span><?= isset($user_details->job_seeker->mother_name)? $user_details->job_seeker->mother_name:'' ?></li>
                        <li><h5>Date of Birth </h5> <span>:</span><?= isset($user_details->job_seeker->date_of_birth)? $user_details->job_seeker->date_of_birth:'' ?></li>
                        <li><h5>Birth Place </h5> <span>:</span><?= isset($user_details->job_seeker->birth_place)? $user_details->job_seeker->birth_place:'' ?></li>
                        <li><h5>Nationality </h5> <span>:</span><?= isset($user_details->job_seeker->nationality)? $user_details->job_seeker->nationality:'' ?></li>
                        <li><h5>Sex </h5> <span>:</span><?= isset($user_details->job_seeker->gender )?$user_details->job_seeker->gender === "1" ? "Male": "Female":''?></li>
                        <li><h5>Address </h5> <span>:</span><?= isset($user_details->job_seeker->address)? $user_details->job_seeker->address:'' ?></li>
                    </ul>
                </div>
            </div>

            <div class="career-objective section">
                <div class="icons">
                    <i class="fa fa-black-tie" aria-hidden="true"></i>
                </div>
                <div class="career-info">
                    <?= isset($user_details->career->txt)?$user_details->career->txt:'Write few lines about your career objective' ?>
                </div>
            </div><!-- career-objective -->

            <div class="work-history section">
                <div class="icons">
                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                </div>
                <div class="work-info">
                    <h3>Work History</h3>
                    <ul>
                        <?php foreach ($user_details->experiences as $experience): ?>
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
                        <?php foreach ($user_details->educations as $education): ?>
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
                        <?php foreach ($user_details->qualifications as $k=>$qualification): ?>
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

                        <?php foreach ($user_details->languages as $k=>$language): ?>
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
