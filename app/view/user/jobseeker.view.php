<?php
view_require('applyjob/head');
view_require('applyjob/nav');
?>

<section class=" job-bg page  ad-profile-page">
    <div class="container">
        <div class="breadcrumb-section">
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li>JobSeeker Profile</li>
            </ol>
            <h2 class="title">My Profile</h2>
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
                        <a href="applied-job.php"><?= isset($user_details->job_seeker->job_applicants)?$user_details->job_seeker->job_applicants->count():0 ?><small>Apply Job</small></a>
                    </div>
                    <div class="favorites">
                        <a href="bookmark.php"><?= isset($user_details->job_seeker->job_bookmarks)?$user_details->job_seeker->job_bookmarks->count():0 ?><small>Favorites</small></a>
                    </div>
                </div>
            </div><!-- user-profile -->

            <ul class="user-menu">
                <li class="active"><a href="<?= baseurl('User/Job_Seeker') ?>">Account Info </a></li>
                <li><a href="<?= baseurl('Seeker_Profile?name=') ?><?php echo isset($user_details->job_seeker->fullname)?str_slug($user_details->job_seeker->fullname):'' ?>" >View Resume</a></li>
                <li><a href="<?= baseurl('User/Profile_Detail') ?>">Profile Details</a></li>
                <li><a href="<?= baseurl('User/Applied_Job')?>">applied job</a></li>
                <li><a href="<?= baseurl('User/Delete') ?>">Close account</a></li>
            </ul>
        </div><!-- ad-profile -->

        <?php view_require('applyjob/success');?>
        <?php view_require('applyjob/error');?>
        <div class="resume-content">
            <div class="profile section clearfix">
                <div class="profile-logo">
<!--                    <img class="img-responsive" src="--><?//= asset('applyjob/')?><!--images/job/resume.jpg" alt="Image">-->
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



            <!-- Large modal -->
            <button type="button" data-toggle="modal" data-target=".personal" class="btn btn-info" style="float: right;margin-top: -10px;"><i class="fa fa-plus"></i> </button>
            <div class="modal fade personal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <form action="<?= baseurl('User/Seeker_Detail') ?>" method="post" enctype="multipart/form-data">
                            <div class="section company-information">
                                <h4>Personal Deatils</h4>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Full Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="fullname" class="form-control" placeholder="Jhon Doe" value="<?= isset($user_details->job_seeker->fullname)?$user_details->job_seeker->fullname:'' ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Father's Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="father_name" class="form-control" placeholder="Robert Doe" value="<?= isset($user_details->job_seeker->father_name)?$user_details->job_seeker->father_name:'' ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Mother's Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="mother_name" class="form-control" placeholder="Ismatic Roderos Doe" value="<?= isset($user_details->job_seeker->mother_name)?$user_details->job_seeker->mother_name:'' ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Date of Birth</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="date_of_birth" class="form-control" placeholder="26/01/1982" value="<?= isset($user_details->job_seeker->date_of_birth)?$user_details->job_seeker->date_of_birth:'' ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Birth Place</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="birth_place" class="form-control" placeholder="United State of America" value="<?= isset($user_details->job_seeker->birth_place)?$user_details->job_seeker->birth_place:'' ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Nationality</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nationality" class="form-control" placeholder="Nationality" value="<?= isset($user_details->job_seeker->nationality)?$user_details->job_seeker->nationality:'' ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">NRC No.</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nrc_no" class="form-control" placeholder="NRC No." value="<?= isset($user_details->job_seeker->nrc_no)?$user_details->job_seeker->nrc_no:'' ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Phone No.</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="phone_no" class="form-control" placeholder="Phone No." value="<?= isset($user_details->job_seeker->phone_no)?$user_details->job_seeker->phone_no:'' ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Gender</label>
                                    <div class="col-sm-9">
                                        <input type="radio" name="gender" id="male" value="1" style="margin-right: 10px;" <?= isset($user_details->job_seeker->gender)?$user_details->job_seeker->gender==0?'checked':'':'' ?>>
                                        <label for="male">Male</label>
                                        <input type="radio" name="gender" id="female" value="0" style="margin-right: 10px;" <?= isset($user_details->job_seeker->gender)?$user_details->job_seeker->gender==0?'checked':'':'' ?>>
                                        <label for="female">Female</label>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="address" class="form-control" placeholder="121 King Street, Melbourne Victoria, 1200 USA" value="<?= isset($user_details->job_seeker->fullname)?$user_details->job_seeker->fullname:'' ?>">
                                    </div>
                                </div>

                                <div class="row form-group photos-resume">
                                    <label class="col-sm-4 label-title">Photos for your Resume</label>
                                    <div class="col-sm-8 ">
                                        <label class="upload-image left" for="upload-image-one">
                                            <input type="file" name="photo" id="upload-image-one">
                                            Type: JPG, PNG  Size: 3.5 x 4.5 cm
                                        </label>
                                    </div>
                                </div>
                                <div class="buttons pull-right">
                                    <button type="submit" class="btn">Add New Feild</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

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
            </div><!-- personal-deatils -->
            <!-- Large modal -->

            <button type="button" data-toggle="modal" data-target=".career" class="btn btn-info" style="float: right;margin-top: -10px;"><i class="fa fa-plus"></i> </button>
            <div class="modal fade career" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="section career-objective">
                            <h4>Career Objective</h4>
                            <form action="<?= baseurl('User/Career') ?>" method="post">
                                <input type="hidden" name="job_seeker_id" value="<?= $user_details->job_seeker->id ?>">
                                <div class="form-group">
                                    <textarea class="form-control" name="txt" placeholder="Write few lines about your career objective" rows="8"><?= isset($user_details->career->txt)?$user_details->career->txt:'' ?></textarea>
                                </div>
                                <input type="hidden" value="<?= auth()['id']?>" name="user_id">
                                <span>5000 characters left</span>
                                <button type="submit" class="btn btn-primary" style="display: block;margin: 0 auto;">Update Career Objective</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>


            <div class="career-objective section">
                <div class="icons">
                    <i class="fa fa-black-tie" aria-hidden="true"></i>
                </div>
                <div class="career-info">
                    <?= isset($user_details->job_seeker->career->txt)?$user_details->job_seeker->career->txt:'Write few lines about your career objective' ?>
                </div>
            </div><!-- career-objective -->

            <!-- Large modal -->
            <button type="button" data-toggle="modal" data-target=".work_history" class="btn btn-info" style="float: right;margin-top: -10px;"><i class="fa fa-plus"></i> </button>
            <div class="modal fade work_history" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <form action="<?= baseurl('User/Work_experience'); ?>" method="post">
                            <input type="hidden" name="job_seeker_id" value="<?= $user_details->job_seeker->id ?>">
                            <div class="section">
                                <h4>Work History</h4>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Compnay Name</label>
                                    <div class="col-sm-9">
                                        <input name="company_name" class="form-control" placeholder="Name" type="text">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Designation</label>
                                    <div class="col-sm-9">
                                        <input name="designation" class="form-control" placeholder="Human Resource Manager" type="text">
                                    </div>
                                </div>
                                <div class="row form-group time-period">
                                    <label class="col-sm-3 label-title">Time Period</label>
                                    <div class="col-sm-9">
                                        <input name="post_from_date" class="form-control" placeholder="dd/mm/yy" type="date"><span>-</span>
                                        <input name="post_to_date" class="form-control pull-right" placeholder="dd/mm/yy" type="date">
                                    </div>
                                </div>
                                <div class="row form-group job-description">
                                    <label class="col-sm-3 label-title">Job Description</label>
                                    <div class="col-sm-9">
                                        <textarea name="description" class="form-control" placeholder="" rows="8"></textarea>
                                    </div>
                                </div>
                                <div class="buttons pull-right">
                                    <button type="submit" class="btn">Add New Exprience</button>
                                    <!-- <a href="post-resume.html#" class="btn delete">Delete</a>-->
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="work-history section">
                <div class="icons">
                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                </div>
                <div class="work-info">
                    <h3>Work History</h3>
                    <ul>
                        <?php if (isset($user_details->job_seeker->experiences)): ?>
                            <?php foreach ($user_details->job_seeker->experiences as $experience): ?>
                                <li>
                                    <form action="<?= baseurl('User/Work_experience_Delete')?>" method="post">
                                        <input type="hidden" name="id" value="<?= $experience->id ?>">
                                        <button type="submit"  style="float: right;border: navajowhite;background: white;"><i class="fa fa-trash" style="font-size: 25px;color: red;"></i></button>
                                    </form>
                                    <!--                                <a href="--><?//= baseurl('User') ?><!--" style="float: right;"><i class="fa fa-trash" style="font-size: 25px;color: red;"></i> </a>-->
                                    <h4>
                                        <?= $experience->designation ?> @ <?= $experience->company_name ?>
                                        <span>
                                        <?= date('d-M-Y',strtotime($experience->post_from_date)) ?>  To  <?= date('d-M-Y',strtotime($experience->post_to_date))  ?>
                                    </span></h4>
                                    <p><?= $experience->description ?></p>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>


                    </ul>
                </div>
            </div><!-- work-history -->

            <!-- Large modal -->
            <button type="button" data-toggle="modal" data-target=".edcation" class="btn btn-info" style="float: right;margin-top: -10px;"><i class="fa fa-plus"></i> </button>
            <div class="modal fade edcation" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <form action="<?= baseurl('User/Education') ?>" method="post">
                            <input type="hidden" name="job_seeker_id" value="<?= $user_details->job_seeker->id ?>">
                            <div class="section education-background">
                                <h4>Education Background</h4>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Institute Name</label>
                                    <div class="col-sm-9">
                                        <input name="institute_name" class="form-control" placeholder="ropbox" type="text">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Degree</label>
                                    <div class="col-sm-9">
                                        <input name="degree" class="form-control" placeholder="Human Resource Manager" type="text">
                                    </div>
                                </div>
                                <div class="row form-group time-period">
                                    <label class="col-sm-3 label-title">Time Period</label>
                                    <div class="col-sm-9">
                                        <input name="form" class="form-control" placeholder="dd/mm/yy" type="date"><span>-</span>
                                        <input name="to" class="form-control pull-right" placeholder="dd/mm/yy" type="date">
                                    </div>
                                </div>
                                <div class="row form-group job-description">
                                    <label class="col-sm-3 label-title">Description</label>
                                    <div class="col-sm-9">
                                        <textarea name="description" class="form-control" placeholder="" rows="8"></textarea>
                                    </div>
                                </div>
                                <div class="buttons pull-right">
                                    <button type="submit" class="btn btn-primary">Add New Education</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

            <div class="educational-background section">
                <div class="icons">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                </div>
                <div class="educational-info">
                    <h3>Education Background</h3>
                    <ul>
                        <?php if (isset($user_details->job_seeker->educations)): ?>
                            <?php foreach ($user_details->job_seeker->educations as $education): ?>
                                <li>
                                    <form action="<?= baseurl('User/Education_Delete')?>" method="post">
                                        <input type="hidden" name="id" value="<?= $education->id ?>">
                                        <button type="submit"  style="float: right;border: navajowhite;background: white;"><i class="fa fa-trash" style="font-size: 25px;color: red;"></i></button>
                                    </form>
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
                        <?php endif; ?>


                    </ul>
                </div>
            </div><!-- educational-background -->

            <!-- Large modal -->
            <button type="button" data-toggle="modal" data-target=".spq" class="btn btn-info" style="float: right;margin-top: -10px;"><i class="fa fa-plus"></i> </button>
            <div class="modal fade spq" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">

                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="section career-objective">
                            <h4>Special Qualification</h4>
                            <form action="<?= baseurl('User/Qualification') ?>" method="post">
                                <input type="hidden" name="job_seeker_id" value="<?= $user_details->job_seeker->id ?>">
                                <div class="form-group">
                                    <textarea class="form-control" name="txt" placeholder="Write few lines about your special qualification" rows="8"><?= isset($user_details->job_seeker->qualifications->txt)?$user_details->qualifications->txt:'' ?></textarea>
                                </div>
                                <input type="hidden" value="<?= auth()['id']?>" name="user_id">
                                <span>5000 characters left</span>
                                <button type="submit" class="btn btn-primary" style="display: block;margin: 0 auto;">Update Special Qualification</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

            <div class="special-qualification: section">
                <div class="icons">
                    <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                </div>
                <div class="qualification">
                    <h3>Special Qualification:</h3>
                    <ul>
                        <?php if (isset($user_details->job_seeker->qualifications)): ?>
                            <?php foreach ($user_details->job_seeker->qualifications as $k=>$qualification): ?>
                                <li>
                                    <form action="<?= baseurl('User/Qualification_Delete')?>" method="post">
                                        <input type="hidden" name="id" value="<?= $qualification->id ?>">
                                        <button type="submit"  style="float: right;border: navajowhite;background: white;"><i class="fa fa-trash" style="font-size: 25px;color: red;"></i></button>
                                    </form>
                                    <span><?= $k+1 .' . '?></span><?= $qualification->txt ?>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>

                    </ul>
                </div>
            </div><!-- educational-background -->


            <!-- Large modal -->
            <button type="button" data-toggle="modal" data-target=".language" class="btn btn-info" style="float: right;margin-top: -10px;"><i class="fa fa-plus"></i> </button>
            <div class="modal fade language" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <form action="<?= baseurl('User/Language')?>" method="post">
                            <input type="hidden" name="job_seeker_id" value="<?= $user_details->job_seeker->id ?>">
                            <div class="section language-proficiency">
                                <h4>Language Proficiency:</h4>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Language Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name" class="form-control" placeholder="English">
                                    </div>
                                </div>
                                <div class="row form-group rating">
                                    <label class="col-sm-3 label-title">Rating</label>
                                    <div class="col-sm-9">
                                        <div class="rating-star">
                                            <div class="rating">
                                                <input type="radio" id="star1" name="rating" value="5"><label class="full" for="star1"></label>

                                                <input type="radio" id="star2" name="rating" value="4.5"><label class="half" for="star2"></label>

                                                <input type="radio" id="star3" name="rating" value="4"><label class="full" for="star3"></label>

                                                <input type="radio" id="star4" name="rating" value="3.5"><label class="half" for="star4"></label>

                                                <input type="radio" id="star5" name="rating" value="3"><label class="full" for="star5"></label>

                                                <input type="radio" id="star6" name="rating" value="2.5"><label class="half" for="star6"></label>

                                                <input type="radio" id="star7" name="rating" value="2"><label class="full" for="star7"></label>

                                                <input type="radio" id="star8" name="rating" value="1.5"><label class="half" for="star8"></label>

                                                <input type="radio" id="star9" name="rating" value="1"><label class="full" for="star9"></label>

                                                <input type="radio" id="star10" name="rating" value="0.5"><label class="half" for="star10"></label>
                                            </div>
                                        </div><!-- rating-star -->
                                    </div>
                                </div>
                                <div class="buttons pull-right">
                                    <button type="submit" class="btn btn-primary">Add New Language</button>
                                </div>
                            </div>
                            <!-- language-proficiency -->
                        </form>

                    </div>
                </div>
            </div>

            <div class="language-proficiency section">
                <div class="icons">
                    <i class="fa fa-language" aria-hidden="true"></i>
                </div>
                <div class="proficiency">
                    <h3>Language Proficiency</h3>
                    <ul class="list-inline">
                        <?php if (isset($user_details->job_seeker->languages)): ?>
                            <?php foreach ($user_details->job_seeker->languages as $k=>$language): ?>
                                <li>
                                    <h5><?= $language->name ?></h5>
                                    <form action="<?= baseurl('User/Language_Delete')?>" method="post">
                                        <input type="hidden" name="id" value="<?= $language->id ?>">
                                        <button type="submit"  style="float: right;border: navajowhite;background: white;"><i class="fa fa-trash" style="font-size: 25px;color: red;"></i></button>
                                    </form>
                                    <ul>

                                        <li><i class="fa <?= $language->rating >1 ? 'fa-star' : 'fa-star-o' ?> <?= $language->rating ===0.50?'fa-star-half-empty':''?>" aria-hidden="true"></i></li>
                                        <li><i class="fa <?= $language->rating >2 ? 'fa-star' : 'fa-star-o'?> <?= $language->rating ===1.50?'fa-star-half-empty':''?>" aria-hidden="true"></i></li>
                                        <li><i class="fa <?= $language->rating >3 ? 'fa-star' : 'fa-star-o'?> <?= $language->rating ===2.50?'fa-star-half-empty':''?>" aria-hidden="true"></i></li>
                                        <li><i class="fa <?= $language->rating >4 ? 'fa-star' : 'fa-star-o'?> <?= $language->rating ===3.50?'fa-star-half-empty':''?>" aria-hidden="true"></i></li>
                                        <li><i class="fa <?= $language->rating >=5 ? 'fa-star' : 'fa-star-o'?> <?= $language->rating ===4.50?'fa-star-half-empty':''?>" aria-hidden="true"></i></li>


                                    </ul>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>


                    </ul>
                </div>
            </div><!-- language-proficiency -->




            <div class="download-button resume">
                <a href="profile.php#" class="btn">Download Resume as doc</a>
            </div>
        </div><!-- resume-content -->
    </div><!-- container -->
</section>
<?php
view_require('applyjob/foot');
?>
