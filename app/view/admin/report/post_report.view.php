<?php view_require('admin/template/master_top'); ?>
    <div class="container-fluid">


        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="header-title m-t-0">Annual Report</h4>
                    <p class="text-muted font-14 m-b-25">
                        Order Annual Report
                    </p>

                    <div class="row">
                        <div class="col-lg-8 m-auto">
                            <div class="">
                                <form>
                                    <div class="form-group">
                                        <label>Select Status</label>
                                        <div>
                                            <select name="status" class="form-control">
                                                <option value="pending">Pending</option>
                                                <option value="interview">Make Interview</option>
                                                <option value="reject">Reject</option>
                                                <option value="pass">Interview Pass</option>
                                                <option value="fail">Interview Fail</option>
                                            </select>
                                        </div>
                                        <div class="d-flex justify-content-center pt-3">
                                            <button type="submit"
                                                    class="btn btn-outline-custom btn-rounded waves-light waves-effect">
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
                                    <th class="text-center">Company Name</th>
                                    <th class="text-center">Employer Name</th>
                                    <th class="text-center">Job Title</th>
                                    <th class="text-center">Applied Job Seeker</th>
                                    <th class="text-center">Applied Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($datas as $data): ?>
                                    <tr>
                                        <td class="text-center"><?= $data->job_post->employer->company_name ?></td>
                                        <td class="text-center"><?= $data->job_post->employer->user->name ?></td>
                                        <td class="text-center"><?= $data->job_post->title ?></td>
                                        <td class="text-center"><?= $data->job_seeker->fullname ?></td>
                                        <td class="text-center"><?= date('d M Y',strtotime($data->job_post->created_at)) ?></td>

                                    </tr>
                                <?php endforeach; ?>
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