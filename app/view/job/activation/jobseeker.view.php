<?php
view_require('template/head');
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">
    <img src="<?= asset('job_asset/img/logo.png');?>" alt="LOGO" style="width:125px;"/>
    </a>
    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link <?= baseurl($redir_uri)===baseurl('Login')?'active':'';?>" href="<?= baseurl('Login'); ?>">Login
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= baseurl($redir_uri)===baseurl('Register')?'active':'';?>" href="<?= baseurl('Register');?>">Register
                    <span class="sr-only">(current)</span>
                </a>
            </li>
        </ul>
    </div>
</nav>

<div class="col-8 mx-auto my-5">
<ul class="list-group pb-5">
    <li class="list-group-item active text-center">Active item</li>
    <li class="list-group-item">
    <div class="row">
        <div class="col-6">
            <div class="form-group">
            <label for="">NRC No.</label>
            <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="">Phone No.</label>
                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <label for="">Address</label>
                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
            </div>
        </div>

        <div class="col-6">
            <div class="form-group">
              <label for="">Birth Date</label>
              <input type="date" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
            </div>
        </div>
        <div class="col-6">
            <label for="gender">Select gender</label><br>
            <div class="form-check form-check-inline">
            
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="1">Male
                </label>
                <label class="form-check-label ml-3">
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="0">Female
                </label>
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
              <label for="">Work Experience</label>
              <input type="text"
                class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
            </div>
        </div>

        <button type="button" name="" id="" class="btn btn-primary btn-lg btn-block">Add Data</button>
    </div>
    </li>
</ul>
</div>


<?php
view_require('template/foot');
?>