<?php view_require('admin/template/master_top'); ?>
    <div class="container-fluid">


        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="header-title m-t-0">Monthly Report</h4>
                    <p class="text-muted font-14 m-b-25">
                        Order Monthly Report
                    </p>

                    <div class="row">
                        <div class="col-lg-8 m-auto">
                            <div class="">
                                <form>
                                    <div class="form-group">
                                        <label>Auto Close</label>
                                        <div>
                                            <div class="input-group">
                                                <input type="text" name="date" class="form-control mon_cal" placeholder="Select Year">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="mdi mdi-calendar"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center pt-3">
                                            <button type="submit" class="btn btn-outline-custom btn-rounded waves-light waves-effect">
                                                Custom
                                            </button>
                                        </div>
                                    </div>


                                </form>
                            </div>
                        </div>


                    </div>
                    <div class="row">


                        <?php if (isset($datas) && $datas !== null): ?>
                        <button type="button"
                                onClick="$('#jet').tableExport({type:'excel',escape:'false',tableName:'Annual Report.xls'});"
                                class="btn btn-icon waves-effect waves-light btn-info ml-3 mb-2">
                            <i class="fa fa-file-excel-o" style="font-size: 25px;"></i>
                            Export to excel
                        </button>
                        <div class="col-sm-12 table-responsive">
                            <table class="table table-striped table-striped table-hover" id="jet">
                                <thead>
                                <tr style="background-color: dimgrey;color: white;">
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Company Name</th>
                                    <th class="text-center">Username</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Order Post</th>
                                    <th class="text-center">Amount</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($datas as $data): ?>
                                    <tr>
                                        <td class="text-center"><?= $data->id ?></td>
                                        <td class="text-center"><?= $data->employer->company_name ?></td>
                                        <td class="text-center"><?= $data->employer->user->name ?></td>
                                        <td class="text-center"><?= $data->employer->user->email ?></td>
                                        <td class="text-center"><?php $test->push($price[$data->amount]);
                                            echo $price[$data->amount]; ?></td>
                                        <td class="text-center">$ <?= $data->amount ?></td>

                                    </tr>
                                <?php endforeach; ?>
                                <tr>
                                    <td colspan="3" class="text-center font-18 font-600">Total</td>
                                    <td class="text-center"><?= $test->sum(); ?></td>
                                    <td class="text-center">$ <?= number_format($totals) ?></td>
                                </tr>
                                <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- end row -->


    </div> <!-- container -->
<?php view_require('admin/template/foot'); ?>