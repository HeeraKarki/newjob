<div class="job-profile section" style="box-shadow: 2px 9px 7px rgba(249,219,255,0.43);">
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
                <a href="bookmark.php"><?=  $user_details->employer->phone_no ?><small>Post Left</small></a>
            </div>
        </div>
    </div><!-- user-profile -->

    <ul class="user-menu">
        <li class="active"><a href="<?= baseurl('User/Employer') ?>">Account Info </a></li>
        <li><a href="<?= baseurl('Employer/Job_List')?>">My Job List</a></li>
        <li><a href="<?= baseurl('User/Employer_Edit_Resume')?>">Interview</a></li>
        <li><a href="<?= baseurl('Employer/Profile_Detail') ?>">Profile Details</a></li>
        <li><a href="<?= asset('User/Applied_Job')?>">applied job</a></li>
        <li><a href="<?= baseurl('Employer/Packages')?>">Buy Post Packages</a></li>
        <li><a href="<?= baseurl('User/Delete') ?>">Close account</a></li>
    </ul>
</div>