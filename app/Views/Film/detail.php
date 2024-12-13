<?= $this->extend('Template/navbar'); ?>

<?= $this->section('content'); ?>
<?php if (isset($film)): ?>

    <div class="container mt-4">
    <div class="d-flex">
        <div class="card" style="width: 18rem; flex-shrink: 0;">
            <img src="/img/<?= $film['cover']; ?>" class="card-img-top" alt="<?= ($film['judul']); ?>">
            <div class="card-body">
                <h5 class="card-title"><?= $film['judul']; ?></h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Sutradara : <?= $film['sutradara']; ?></li>
                <li class="list-group-item">Genre : <?= $film['genre']; ?></li>
                <li class="list-group-item">Rilis : <?= $film['rilis']; ?></li>
            </ul>
        </div>

        <div class="ms-5">
            <h3>Synopsis</h3>
            <p class="fs-5"><?= $film['synopsis']; ?></p>
        </div>
    </div>
</div>
<div class="col-md-6 position-absolute bottom-0 end-0 me-2 mb-2" style="text-align: right;">
    <a href="/films/edit/<?= $film['slug']; ?>" class="btn btn-warning">Edit</a>
    <form action="/films/delete/<?= $film['id']; ?>" method="post" class="d-inline">
        <?= csrf_field(); ?>
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
<?php else: ?>
    <div class="alert alert-danger">
        Film tidak ditemukan.
    </div>
<?php endif; ?>
<?= $this->endSection(); ?>
