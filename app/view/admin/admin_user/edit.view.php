<?php view_require('admin/template/master_top'); ?>


    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <?php view_require('admin/template/success');?>
                <?php view_require('admin/template/error');?>

                <h4 class="btn btn-primary btn-block header-title">JobFunction</h4>

                <form method="post" action="<?= baseurl('Admin/Account_update') ?>">
                    <input type="hidden" name="id" value="<?= $edit_data->id;?>">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="name">Username</label>
                                <input class="form-control" id="name" value="<?=   $edit_data->name; ?>" name="name" aria-describedby="emailHelp" placeholder="Enter Admin Name" type="text">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" id="email"  value="<?=   $edit_data->email; ?>" name="email" aria-describedby="emailHelp" placeholder="Enter Admin Name" type="email">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control" id="password" required name="password" aria-describedby="emailHelp" placeholder="Enter JobFunction Name" type="password">
                            </div>
                        </div>
                    </div>



                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-primary">Update Admin</button>
                    </div>
                </form>


            </div>
        </div>
        <!-- end col -->

    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <h2 class="btn btn-danger btn-block">JobFunction Data</h2>
                <table class="table table-bordered table-striped">
                    <thead class="thead-default">
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Detail</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($admins as $admin):?>
                        <tr>
                            <td class="text-center"><?= $admin->id;?></td>
                            <td class="text-center"><?= $admin->name;?></td>
                            <td class="text-center">
                                <a href="<?= baseurl('Admin/Account_edit?id=').$admin->id; ?>" class="btn btn-icon waves-effect waves-light btn-custom"> <i class="fa fa-edit"></i> </a>
                                <a href="<?= baseurl('Admin/Account_delete?id=').$admin->id; ?>" class="btn btn-icon waves-effect waves-light btn-danger"> <i class="fa fa-trash"></i> </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>



                    </tbody>
                </table>
            </div>

        </div>

    </div>

<?php view_require('admin/template/foot'); ?>