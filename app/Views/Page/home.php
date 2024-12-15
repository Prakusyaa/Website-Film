<?=$this->extend('Template/navbar'); ?>

<?=$this->section('content'); ?>
<style>
    a {
        text-decoration: none;
    }

    .card-title {
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
        display: block;

        font-size: calc(0.5rem + 1vw);
        text-align: center;
    }
</style>

<header class="bg-dark py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">
                <div class="text-center my-5">
                    <h1 class="display fw-bolder text-white mb-2">Temukan Film Favoritmu di Sini!</h1>
                    <p class="lead text-white-50 mb-4">Website ini menyediakan daftar lengkap film dari berbagai genre, dilengkapi dengan sinopsis untuk membantumu memilih tontonan terbaik!</p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                        <a class="btn btn-primary btn px-4 me-sm-3" href="#target">Mulai Melihat</a>
                        <a class="btn btn-outline-light btn px-4" href="#!">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container my" id="target">
    <div class="row mt-2 row-cols-sm-6 row-cols-3 g-4">
        <?php foreach ($films as $k): ?>
            <div class="holder">
                <div class="card h-100 shadow" style="width: 100%;">
                    <img src="/img/<?= ($k['cover']); ?>" class="card-img-top" alt="<?= ($k['judul']); ?>">
                    <div class="card-body">
                        <a class="card-title text-primary fw-bolder" href="/Film/<?= $k['slug']; ?>"><?= ($k['judul']); ?></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?=$this->endSection(); ?>