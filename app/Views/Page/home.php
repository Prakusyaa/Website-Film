<?=$this->extend('Template/navbar'); ?>

<?=$this->section('content'); ?>
<style>
    a {
        text-decoration: none;
    }

    @media screen and (min-width: 320px) {
        .display {
            font-size: 1.4rem;
        }

        .lead {
            font-size: 0.8rem;
        }

        .d-grid .btn {
            display: none;
        }
        
        .rows {
            display: flex;
            flex-wrap: wrap;
            margin-left: -0.5rem;
            margin-right: -0.5rem;
        }

        .holder {
            flex: 0 0 33.3333%;
            max-width: 33.3333%;
            padding-left: 0.5rem;
            padding-right: 0.5rem;
            margin-bottom: 1rem;
        }

        .card {
            height: 130px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            margin-top: 8px;
        }

        .card img {
            width: 100%;
            height: 100px;
            object-fit: cover;
        }

        .card-title {
            font-size: 10px;
            text-align: center;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            width: 100%;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem;
        }
    }

    @media screen and (min-width: 768px) {
        .d-grid .btn {
            display: inline-block;
            height: 40px;
            width: 150px;
        }

        .rows {
            display: flex;
            flex-wrap: wrap;
            margin-left: -0.5rem;
            margin-right: -0.5rem;
        }

        .holder {
            flex: 0 0 16.66665%;
            max-width: 16.66665%;
            padding-left: 0.5rem;
            padding-right: 0.5rem;
            margin-bottom: 1rem;
        }

        .card {
            height: 130px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            margin-top: 8px;
        }

        .card img {
            width: 100%;
            height: 100px;
            object-fit: cover;
        }

        .card-title {
            font-size: 10px;
            text-align: center;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            width: 100%;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem;
        }
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
    <div class="rows">
        <?php foreach ($films as $k): ?>
            <div class="holder">
                <div class="card shadow" style="width: 100%;">
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