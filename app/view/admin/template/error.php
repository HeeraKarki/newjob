<?php if ($data=flash('error')):?>
    <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <strong><?= $data['title'] ?></strong><br>
        <?= $data['message'] ?>
    </div>
<?php endif; ?>