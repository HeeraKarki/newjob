<?php view_require('admin/template/master_top'); ?>
    <div class="container-fluid">


        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="header-title m-t-0">User Inactive Report</h4>
                    <p class="text-muted font-14 m-b-25">
                        User who doesn't activate from edit
                    </p>


                    <div class="row">
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
                                    <th class="text-center">Username</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Created At</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($datas as $data): ?>
                                    <tr>
                                        <td class="text-center"><?= $data->id ?></td>
                                        <td class="text-center"><?= $data->name ?></td>
                                        <td class="text-center"><?= $data->email ?></td>
                                        <td class="text-center"><?= date("d F Y",strtotime($data->created_at)) ?></td>

                                    </tr>
                                <?php endforeach; ?>
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