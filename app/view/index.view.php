<?php require_once 'template/head.php' ?>
<?php require_once 'template/nav.php' ?>

<h1 class="text-center">
    <?= $title; ?>
    <?php echo 'kljare'; ?>
</h1>

<div class="col-3 mx-auto">

    <ul class="list-group">
        <li class="list-group-item">
            <form action="<?= baseurl('blogpost') ?>" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted">Help text</small>
                </div>
                <button type="submit" name="" id="" class="btn btn-primary btn-lg btn-block">Submit</button>
            </form>
        </li>

        <?php foreach ($tasks as $item): ?>
            <li class="list-group-item">
                <?php if ($item->completed): ?>
                    <strike>
                        <?= $item->description ?>
                    </strike>
                <?php else : ?>
                    <?= $item->description ?>

                <?php endif; ?>
            </li>

        <?php endforeach; ?>
    </ul>
</div>

<?php require_once 'template/foot.php' ?>