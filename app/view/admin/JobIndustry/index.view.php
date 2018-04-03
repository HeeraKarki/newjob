<?php view_require('admin/template/master_top'); ?>


    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <?php view_require('admin/template/success');?>
                <?php view_require('admin/template/error');?>

                <h4 class="btn btn-primary btn-block header-title">JobIndustry</h4>

                <form method="post" action="<?= baseurl('Admin/JobIndustry_Add') ?>">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter JobIndustry Name" type="text">
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
                <h2 class="btn btn-danger btn-block">JobIndustry Data</h2>
                <table class="table table-bordered table-striped">
                    <thead class="thead-default">
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Details</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($jobindustries as $jobindustry):?>
                        <tr>
                            <td class="text-center"><?= $jobindustry->id;?></td>
                            <td class="text-center"><?= $jobindustry->name;?></td>
                            <td class="text-center">
                                <a href="<?= baseurl('Admin/JobIndustry_edit?id=').$jobindustry->id; ?>" class="btn btn-icon waves-effect waves-light btn-custom"> <i class="fa fa-edit"></i> </a>
                                <a href="<?= baseurl('Admin/JobIndustry_delete?id=').$jobindustry->id; ?>" class="btn btn-icon waves-effect waves-light btn-danger"> <i class="fa fa-trash"></i> </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>



                    </tbody>
                </table>
            </div>

        </div>

    </div>

<?php view_require('admin/template/foot'); ?>