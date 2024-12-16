<?= $this->extend('Template/navbar'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <form action="/Films/update/<?= $film['id']; ?>" method="POST">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" value="<?= $film['slug']; ?>">
                <div class="mb-3 mt-5">
                    <label for="InputFilm" class="form-label">Judul Film:</label>
                    <input type="text" autocomplete="off" class="form-control" id="InputFilm" placeholder="Tuliskan Judul Film.."
                        name="judul" value="<?= $film['judul']; ?>">
                </div>
                <div class="mb-3">
                    <label for="InputSutradara" class="form-label">Sutradara Film:</label>
                    <input type="text" autocomplete="off" class="form-control" id="InputSutradara" placeholder="Tuliskan Sutradara Film.."
                        name="sutradara" value="<?= $film['sutradara']; ?>">
                </div>
                <div class="mb-3">
                    <label for="InputSynopsis" class="form-label">Synopsis:</label>
                    <input type="text" autocomplete="off" class="form-control" id="InputSynopsis" placeholder="Tuliskan Synopsis Film.."
                        name="synopsis" value="<?= $film['synopsis']; ?>">
                </div>
                <div class="mb-3">
                    <label for="InputCover" class="form-label">Cover Film:</label>
                    <input type="text" autocomplete="off" class="form-control" id="InputCover" placeholder="Tuliskan Cover Film.."
                        name="cover" value="<?= $film['cover']; ?>">
                </div>
                <div class="mb-3">
                    <label for="InputGenre" class="form-label">Genre Film:</label>
                    <input type="text" autocomplete="off" class="form-control" id="InputGenre" placeholder="Tuliskan Genre Film.."
                        name="genre" value="<?= $film['genre']; ?>">
                </div>
                <div class="mb-3">
                    <label for="InputRilis" class="form-label">Tahun Rilis Film:</label>
                    <input type="number" autocomplete="off" class="form-control" id="InputRilis" placeholder="Tuliskan Tahun Rilis Film.."
                        name="rilis" value="<?= $film['rilis']; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>