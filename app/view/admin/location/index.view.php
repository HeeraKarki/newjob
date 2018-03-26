<?php view_require('admin/template/master_top'); ?>


    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <?php view_require('admin/template/success');?>
                <?php view_require('admin/template/error');?>

                <h4 class="btn btn-primary btn-block header-title">Location</h4>

                <form method="post" action="<?= baseurl('Admin/Location_Add') ?>">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter Location Name" type="text">
                    </div>
                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
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
                <table class="table table-bordered table-striped">
                    <thead class="thead-default">
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Details</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($locations as $location):?>
                        <tr>
                            <td class="text-center"><?= $location->id;?></td>
                            <td class="text-center"><?= $location->name;?></td>
                            <td class="text-center">
                                <a href="<?= baseurl('Admin/Location_edit?id=').$location->id; ?>" class="btn btn-icon waves-effect waves-light btn-custom"> <i class="fa fa-edit"></i> </a>
                                <a href="<?= baseurl('Admin/Location_delete?id=').$location->id; ?>" class="btn btn-icon waves-effect waves-light btn-danger"> <i class="fa fa-trash"></i> </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>



                    </tbody>
                </table>
            </div>

        </div>

    </div>

<?php view_require('admin/template/foot'); ?>