<?php view_require('admin/template/master_top'); ?>


    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <?php view_require('admin/template/success');?>
                <?php view_require('admin/template/error');?>

                <h4 class="btn btn-primary btn-block header-title">Contract Type</h4>

                <form method="post" action="<?= baseurl('Admin/Contract_type_update') ?>">
                    <input type="hidden" name="id" value="<?= $edit_data->id;?>">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" id="name" name="name" aria-describedby="emailHelp" value="<?=   $edit_data->name; ?>" type="text">
                    </div>
                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-primary">Contract Type edit</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- end col -->

    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <h2 class="btn btn-danger btn-block">Location Data</h2>
                <table class="table table-bordered table-striped" id="datatable">
                    <thead class="thead-default">
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Detail</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($con_types as $con_type):?>
                        <tr>
                            <td class="text-center"><?= $con_type->id;?></td>
                            <td class="text-center"><?= $con_type->name;?></td>
                            <td class="text-center">
                                <a href="<?= baseurl('Admin/Contract_type_edit?id=').$con_type->id; ?>" class="btn btn-icon waves-effect waves-light btn-custom"> <i class="fa fa-edit"></i> </a>
                                <a href="<?= baseurl('Admin/Contract_type_delete?id=').$con_type->id; ?>" class="btn btn-icon waves-effect waves-light btn-danger"> <i class="fa fa-trash"></i> </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>



                    </tbody>
                </table>
            </div>

        </div>

    </div>

<?php view_require('admin/template/foot'); ?>