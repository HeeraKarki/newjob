<?php if ($data=flash('success')):?>

    <div class="alert alert-dismissible" style="background-color: #2BBBAD !important;color: white; box-shadow: 0 8px 17px 0 rgba(0,0,0,.2),0 6px 20px 0 rgba(0,0,0,.19);" role="alert">
        <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
            <span class="text-white" aria-hidden="true">&times;</span>
        </button>
        <strong><?= $data['title'] ?></strong><br>
        <?= $data['message'] ?>
    </div>
<?php endif; ?>