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
                    <img width="100" src="<?= isset($user_details->employer->avatar)?$user_details->employer->avatar!==NULL?asset($user_details->employer->avatar):'':asset('applyjob/images/user.jpg') ?>" alt="User Images" class="img-responsive">
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
                <li class="active"><a href="<?= baseurl('User/Employer') ?>">Account Info </a></li>
                <li><a href="<?= baseurl('Employer/Job_List')?>">My Job List</a></li>
                <li><a href="<?= baseurl('User/Employer_Edit_Resume')?>">Interview</a></li>
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
                        <form action="<?= baseurl('User/Employer_Add') ?>" method="post" enctype="multipart/form-data">
                            <div class="section company-information">
                                <h4>Company Details</h4>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Company Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" required name="company_name" class="form-control"
                                               oninvalid="this.setCustomValidity('Require Company Name!..Please Fill the blank.')"
                                               placeholder="Jhon Doe" value="<?= isset($user_details->employer->company_name)?$user_details->employer->company_name:'' ?>"
                                        >
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Location</label>
                                    <div class="col-sm-9">
                                        <select name="location_id" class="form-control" required>
                                            <option value="">Select Location</option>
                                            <?php foreach ($locations as $location): ?>
                                                <option value="<?= $location->id?>" <?=  isset($user_details->employer->location_id)?$user_details->employer->location_id==$location->id?'selected':'not':'good' ?>><?= $location->name?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">No Of Employee</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="no_of_employee" required class="form-control" placeholder="100" value="<?= isset($user_details->employer->no_of_employee)?$user_details->employer->no_of_employee:'' ?>">
                                    </div>
                                </div>


                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Phone No</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="phone_no" required class="form-control" placeholder="+959975222214" value="<?= isset($user_details->employer->phone_no)?$user_details->employer->phone_no:'' ?>">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="address" required class="form-control" placeholder="121 King Street, Melbourne Victoria, 1200 USA" value="<?= isset($user_details->employer->address)?$user_details->employer->address:'' ?>">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Website</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="website" class="form-control" placeholder="http://phyuhninpwint.ml" value="<?= isset($user_details->employer->website)?$user_details->employer->website:'' ?>">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Facebook</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="facebook" class="form-control" placeholder="http://facebook.com/Jargyi" value="<?= isset($user_details->employer->facebook)?$user_details->employer->facebook:'' ?>">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Twitter</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="twitter" class="form-control" placeholder="http://twitter.com/Jargyi" value="<?= isset($user_details->employer->twitter)?$user_details->employer->twitter:'' ?>">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Google Plus</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="googleplus" class="form-control" placeholder="http://plus.google.com/Jargyi" value="<?= isset($user_details->employer->googleplus)?$user_details->employer->googleplus:'' ?>">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label class="col-sm-3 label-title">Description</label>
                                    <div class="col-sm-9">
                                        <textarea name="description" class="form-control" ><?= isset($user_details->employer->description)?$user_details->employer->description:'' ?></textarea>
                                    </div>
                                </div>

                                <div class="row form-group photos-resume">
                                    <label class="col-sm-4 label-title">Photos for your Resume</label>
                                    <div class="col-sm-8 ">
                                        <label class="upload-image left" for="upload-image-one">
                                            <input type="file" name="photo" id="upload-image-one" style="border: 1px solid cadetblue;padding: 35px;width: 100% !important;display: block;margin: 0 auto;">
                                            Type: JPG, PNG  Size: 3.5 x 4.5 cm
                                        </label>
                                    </div>
                                </div>

                                <div class="row form-group photos-resume">
                                    <label class="col-sm-4 label-title">Company Logo</label>
                                    <div class="col-sm-8 ">
                                        <label class="upload-image left" for="upload-image-two">
                                            <input type="file" name="logo" id="upload-image-two"
                                                   style="border: 1px solid cadetblue;padding: 35px;width: 100% !important;display: block;margin: 0 auto;">
                                            Type: JPG, PNG  Size: 3.5 x 4.5 cm
                                        </label>
                                    </div>
                                </div>

                                <div class="buttons pull-right">
                                    <button type="submit" class="btn btn-primary">Update Employer Detail</button>
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
                    <h3>Employer Deatils</h3>
                    <ul class="address">
                        <li><h5>Company Name </h5> <span>:</span><?= isset($user_details->employer->company_name)?$user_details->employer->company_name:'' ?></li>
                        <li><h5>Address </h5> <span>:</span><?= isset($user_details->employer->address)?$user_details->employer->address:'' ?></li>
                        <li><h5>Phone No. </h5> <span>:</span><?= isset($user_details->employer->phone_no)? $user_details->employer->phone_no:'' ?></li>
                        <li><h5>No Of Employee </h5> <span>:</span><?= isset($user_details->employer->no_of_employee)? $user_details->employer->no_of_employee:'' ?></li>
                        <li><h5>Website </h5> <span>:</span><?= isset($user_details->employer->website)? $user_details->employer->website:'' ?></li>
                        <li><h5>Facebook </h5> <span>:</span><?= isset($user_details->employer->facebook)? $user_details->employer->facebook:'' ?></li>
                        <li><h5>Twitter </h5> <span>:</span><?= isset($user_details->employer->twitter)? $user_details->employer->twitter:'' ?></li>
                        <li><h5>Googleplus </h5> <span>:</span><?= isset($user_details->employer->googleplus)? $user_details->employer->googleplus:'' ?></li>
                        <li><h5>Description. </h5> <span>:</span><?= isset($user_details->employer->description)? $user_details->employer->description:'' ?></li>
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
