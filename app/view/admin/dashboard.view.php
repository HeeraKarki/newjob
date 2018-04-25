<?php view_require('admin/template/master_top'); ?>
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="header-title mb-4">Account Overview</h4>

                            <div class="row">
                                <div class="col-sm-6 col-lg-6 col-xl-3">
                                    <div class="card-box mb-0 widget-chart-two">
                                        <div class="float-right">
                                            <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                   data-fgColor="#0acf97" value="<?= $users->count()!==null?$users->count():0 ?>" data-skin="tron" data-angleOffset="200"
                                                   data-readOnly=true data-thickness=".1"/>
                                        </div>
                                        <div class="widget-chart-two-content">
                                            <p class="text-muted mb-0 mt-2">Total Users</p>
                                            <h3 class=""><?= $users->count()!==null?$users->count():0 ?></h3>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-6 col-xl-3">
                                    <div class="card-box mb-0 widget-chart-two">
                                        <div class="float-right">
                                            <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                   data-fgColor="#f9bc0b" value="<?= $employers->count()!==null?$employers->count():0 ?>" data-skin="tron" data-angleOffset="180"
                                                   data-readOnly=true data-thickness=".1"/>
                                        </div>
                                        <div class="widget-chart-two-content">
                                            <p class="text-muted mb-0 mt-2">Total Employer</p>
                                            <h3 class=""><?= $employers->count()!==null?$employers->count():0 ?></h3>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-6 col-xl-3">
                                    <div class="card-box mb-0 widget-chart-two">
                                        <div class="float-right">
                                            <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                   data-fgColor="#f1556c" value="<?= $job_seekers->count()!==null?$job_seekers->count():0 ?>" data-skin="tron" data-angleOffset="180"
                                                   data-readOnly=true data-thickness=".1"/>
                                        </div>
                                        <div class="widget-chart-two-content">
                                            <p class="text-muted mb-0 mt-2">Job Seekers</p>
                                            <h3 class=""><?= $job_seekers->count()!==null?$job_seekers->count():0 ?></h3>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-6 col-xl-3">
                                    <div class="card-box mb-0 widget-chart-two">
                                        <div class="float-right">
                                            <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                   data-fgColor="#2d7bf4" value="<?= $orders ?>" data-skin="tron" data-angleOffset="10000"
                                                   data-readOnly=true data-thickness=".1"/>
                                        </div>
                                        <div class="widget-chart-two-content">
                                            <p class="text-muted mb-0 mt-2">Total Imcome</p>
                                            <h3 class="">$<?= number_format($orders) ?></h3>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                    </div>
                </div>
                <!-- end row -->



                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">
                            <h4 class="header-title mb-3">Wallet Balances</h4>

                            <div class="table-responsive">
                                <table class="table table-hover table-centered m-0">

                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                        <th>Company Name</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if (count($order_details)>0): ?>
                                        <?php foreach ($order_details as $order_detail): ?>
                                            <tr>
                                                <td><?= $order_detail->employer->user->name    ?></td>
                                                <td><?= $order_detail->employer->user->email    ?></td>
                                                <td><?= $order_detail->amount    ?></td>
                                                <td><?= $order_detail->created_at    ?></td>
                                                <td><?= $order_detail->employer->company_name    ?></td>
                                            </tr>

                                        <?php endforeach; ?>
                                    <?php else: ?>
                                    <tr>
                                        <td colspan="5"><h1 class="text-center">No Data Found</h1></td>
                                    </tr>
                                    <?php endif; ?>




                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- end row -->




            </div> <!-- container -->
<?php view_require('admin/template/dashboard_foot'); ?>