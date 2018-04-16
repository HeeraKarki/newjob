<?php
view_require('applyjob/head');
view_require('applyjob/nav');
?>
<section class=" job-bg page ad-profile-page" style="background-size: cover">
    <div class="container">
        <div class="breadcrumb-section">
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li>Employee Profile</li>
            </ol>
            <h2 class="title">My Profile</h2>
        </div>

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
            </div><!-- user-profile -->

            <ul class="user-menu">
                <li class="active"><a href="<?= baseurl('User/Job_Seeker') ?>">Account Info </a></li>
                <li><a href="<?= baseurl('User/Resume') ?>" >View Resume</a></li>
                <li><a href="<?= baseurl('User/Edit_Resume')?>">Edit Resume</a></li>
                <li><a href="<?= baseurl('User/Profile_Detail') ?>">Profile Details</a></li>
                <li><a href="<?= asset('User/Applied_Job')?>">applied job</a></li>
                <li><a href="<?= baseurl('User/Delete') ?>">Close account</a></li>
            </ul>
        </div>


        <?php view_require('applyjob/success');?>
        <?php view_require('applyjob/error');?>

        <div class="resume-content">
            <!-- Large modal -->
            <button type="button" data-toggle="modal" data-target=".personal" class="btn btn-info" style="float: right;margin-top: -10px;"><i class="fa fa-plus"></i> </button>
            <div class="modal fade personal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <form action="<?= baseurl('User/Seeker_Detail') ?>" method="post" enctype="multipart/form-data">
                            <div class="section company-information">
                                <h4>Company Details</h4>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Company Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="company_name" class="form-control" placeholder="Jhon Doe" value="<?= isset($user_details->employer->company_name)?$user_details->employer->company_name:'' ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">location_id</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="location_id" class="form-control" placeholder="Robert Doe" value="<?= isset($user_details->employer->location_id)?$user_details->employer->location_id:'' ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">phone_no</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="phone_no" class="form-control" placeholder="Ismatic Roderos Doe" value="<?= isset($user_details->employer->phone_no)?$user_details->employer->phone_no:'' ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">no_of_employee</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="no_of_employee" class="form-control" placeholder="26/01/1982" value="<?= isset($user_details->employer->no_of_employee)?$user_details->employer->no_of_employee:'' ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">website</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="website" class="form-control" placeholder="United State of America" value="<?= isset($user_details->job_seeker->website)?$user_details->job_seeker->website:'' ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">address</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="address" class="form-control" placeholder="Nationality" value="<?= isset($user_details->employer->address)?$user_details->employer->address:'' ?>">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Gender</label>
                                    <div class="col-sm-9">
                                        <input type="radio" name="gender" id="male" value="1" style="margin-right: 10px;" <?= isset($user_details->employer->gender)?$user_details->employer->gender==0?'checked':'':'' ?>>
                                        <label for="male">Male</label>
                                        <input type="radio" name="gender" id="female" value="0" style="margin-right: 10px;" <?= isset($user_details->employer->gender)?$user_details->employer->gender==0?'checked':'':'' ?>>
                                        <label for="female">Female</label>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="address" class="form-control" placeholder="121 King Street, Melbourne Victoria, 1200 USA" value="<?= isset($user_details->employer->fullname)?$user_details->employer->fullname:'' ?>">
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
        </div>
    </div>
</section>



<?php
view_require('applyjob/foot');
?>
