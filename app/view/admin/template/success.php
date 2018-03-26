<?php if ($data=flash('success')):?>
    <div class="alert alert-custom alert-dismissible bg-custom text-white border-0 fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <strong><?= $data['title'] ?></strong><br>
        <?= $data['message'] ?>
    </div>
<?php endif; ?>