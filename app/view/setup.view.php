<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Service</title>

    <!--Font awesome -->
    <script src="https://use.fontawesome.com/51053561ba.js"></script>

    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,600,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= asset('assets/css/b4/bootstrap.min.css') ?>">
    <!--asset('assets/css/bootstrap.min.css')-->

    <link rel="stylesheet" type="text/css" href="<?= asset('assets/css/style.css')?>"/>

    <script src="<?= asset('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?= asset('assets/js/template/constructor.js')?>"></script>
</head>
<body>
<div id="page" class="service-page">
    <section class="service-first header-section main-section-container">
        <div class="container first-container header-section-container">
            <div class="row service-first-row header-section-row">
                <h1>Welcome To <br> Jonathan MVC</h1>
                <ul class="breadcrumbs">
                    <li>
                       <small>Setup your Configuration</small>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="price">
        <div class="curved-line curved-line-up"></div>
        <div class="curved-line curved-line-down"></div>
        <div class="container price-container standard-container">
            <div class="row">
                <div class="contact-info-wrapper col-md-8 col-sm-12 col-xs-12" style="margin: 0 auto;">
                    <div class="section-name-wrapper">
                        <div class="line"></div>
                        <h3>Application Configuration</h3>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 my-5">

                            <a href="<?= baseurl('Admin/Migration/All') ?>" class="btn btn-danger btn-lg btn-block">Click to Data Migrate</a>
                        </div>
                        <div class="col-12 col-sm-6 my-5">

                            <a href="<?= baseurl('Admin/Seed/All') ?>" class="btn btn-danger btn-lg btn-block">Click to Seed Data</a>
                        </div>
                    </div>

                    <form action="#" class="form" id="form" style="margin: 0;padding: 0;">

                        <div class="d-block mb-3">
                            <label class="">Server Address</label>
                            <div class="d-flex justify-content-str">
                                <span class="line" style="height: 31px;"></span>
                                <input name="your-name" value="<?= $config['server'] ?>" placeholder="Enter your name" type="text">
                            </div>
                            <span ><small>Add without <u>http:// </u>. eg, localhost or if you have subdirectory you can add something like that <u>localhost/mvc</u></small></span>

                        </div>

                        <div class="d-block mb-3">
                            <label class="">Mysql Host</label>
                            <div class="d-flex justify-content-str">
                                <span class="line" style="height: 31px;"></span>
                                <input name="your-name" value="<?= $config['database']['host'] ?>" placeholder="Enter your name" type="text">
                            </div>
                            <span ><small>Add without <u>http:// </u></small></span>

                        </div>
                        <div class="d-block mb-3">
                            <label class="">Database Name</label>
                            <div class="d-flex justify-content-str">
                                <span class="line" style="height: 31px;"></span>
                                <input name="your-name" value="<?= $config['database']['db_name'] ?>" placeholder="Enter your name" type="text">
                            </div>

                        </div>
                        <div class="d-block mb-3">
                            <label class="">Database Username</label>
                            <div class="d-flex justify-content-str">
                                <span class="line" style="height: 31px;"></span>
                                <input name="your-name" value="<?= $config['database']['username'] ?>" placeholder="Enter your name" type="text">
                            </div>

                        </div>

                        <div class="d-block mb-3">
                            <label class="">Database Password</label>
                            <div class="d-flex justify-content-str">
                                <span class="line" style="height: 31px;"></span>
                                <input name="your-name" value="<?= $config['database']['password'] ?>" placeholder="Enter your name" type="text">
                            </div>

                        </div>


                        <div>
                            <button class="dps-btn" id="contact-button">
                                <span class="button-helper"></span>SEND
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </section>
</div>
<script src="<?= asset('assets/js/jquery.slim.min.js') ?>"></script>
<script src="<?= asset('assets/js/bs4/popper.min.js') ?>"></script>
<script src="<?= asset('assets/js/bs4/bootstrap.min.js') ?>"></script>
<script src="<?= asset('assets/js/template/main.js')?>"></script>
</body>
</html>