<?=$this->extend('Template/navbar'); ?>

<?=$this->section('content'); ?>
<header class="bg-dark py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">
                <div class="text-center my-5">
                    <h1 class="display-5 fw-bolder text-white mb-2">Present your business in a whole new way</h1>
                    <p class="lead text-white-50 mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit!</p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                        <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Get Started</a>
                        <a class="btn btn-outline-light btn-lg px-4" href="#!">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container my-5">
    <div class="row g-3">
        <?php foreach ($films as $film): ?>
            <div class="col-md-2">
                <div class="card h-100" style="width: 100%;">
                    <img src="/img/<?= ($film['cover']); ?>" class="card-img-top" style="height: 200px; object-fit: cover; alt="<?= ($film['judul']); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= ($film['judul']); ?></h5>
                    </div>
                    <a href="/Film/<?= $film['slug']; ?>" class="btn btn-primary">Lihat Detail Film</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?=$this->endSection(); ?>