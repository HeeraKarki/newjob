<?php view_require('admin/template/master_top'); ?>


    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="header-title">Manage Tickets</h4>

                    <div class="text-center mt-4 mb-4">
                        <div class="row">
                            <div class="col-xs-6 col-sm-3">
                                <div class="card-box widget-flat border-custom bg-custom text-white">
                                    <i class="fi-tag"></i>
                                    <h3 class="m-b-10">25563</h3>
                                    <p class="text-uppercase m-b-5 font-13 font-600">Total tickets</p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="card-box bg-primary widget-flat border-primary text-white">
                                    <i class="fi-archive"></i>
                                    <h3 class="m-b-10">6952</h3>
                                    <p class="text-uppercase m-b-5 font-13 font-600">Pending Tickets</p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="card-box widget-flat border-success bg-success text-white">
                                    <i class="fi-help"></i>
                                    <h3 class="m-b-10">18361</h3>
                                    <p class="text-uppercase m-b-5 font-13 font-600">Closed Tickets</p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <div class="card-box bg-danger widget-flat border-danger text-white">
                                    <i class="fi-delete"></i>
                                    <h3 class="m-b-10">250</h3>
                                    <p class="text-uppercase m-b-5 font-13 font-600">Deleted Tickets</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <table class="table table-hover m-0 tickets-list table-actions-bar dt-responsive nowrap" cellspacing="0" width="100%" id="datatable">
                        <thead>
                        <tr>

                            <th>Job Title</th>
                            <th>Employer Name</th>
                            <th>Company Name</th>
                            <th>Status</th>
                            <th>Created Date</th>
                            <th>Due Date</th>
                            <th class="hidden-sm">Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php foreach ($job_posts as $job_post): ?>

                            <tr>
                                <td><?= $job_post->title ?></td>
                                <td><?= $job_post->employer->user->name ?></td>
                                <td><?= $job_post->employer->company_name ?></td>
                                <td><span class="badge badge-danger"><?= $job_post->status ?></span> </td>
                                <td><?= date('d M Y',strtotime($job_post->created_at)) ?></td>
                                <td><?= date('d M Y',strtotime($job_post->deathline)) ?></td>


                                <td>
                                    <a href="#" class="btn btn-primary"><i class="mdi mdi-pencil font-18"></i></a>
                                    <a href="#" class="btn btn-danger"><i class="mdi mdi-delete font-18"></i></a>

                                </td>
                            </tr>
                        <?php endforeach; ?>




                        </tbody>
                    </table>
                </div>
            </div><!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- container -->

<?php view_require('admin/template/foot'); ?>