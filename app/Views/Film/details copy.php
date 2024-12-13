<?= $this->extend('Template/navbar'); ?>

<?= $this->section('content'); ?>
<?php if (isset($film)): ?>
<div class="container mt-4">
    <div class="d-flex">
        <div class="card" style="width: 18rem;">
            <img src="/img/Josee.jpg" class="card-img-top" alt="Card Image">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
            </ul>
        </div>

        <div class="ms-5">
            <h3>Synopsis</h3>
            <p>This is some text that will appear to the right of the card. You can add more information here.</p>
        </div>
    </div>
</div>
<div class="col-md-6 position-absolute bottom-0 end-0 me-2 mb-2" style="text-align: right;">
    <a href="/film/edit/" class="btn btn-warning">Edit</a>
    <form action="/film/" method="post" class="d-inline">
        <?= csrf_field(); ?>
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div
>
<?php else: ?>
    <div class="alert alert-danger">
        Film tidak ditemukan.
    </div>
<?php endif; ?>
<?= $this->endSection(); ?>
