<?=$this->extend('Template/navbar'); ?>

<?=$this->section('content'); ?>

<style>
    .table {
        border-radius: 10px;
        overflow: hidden;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col">
        <a href="/Films/create" class="btn btn-primary mb-2 mt-5">+ Tambah Film</a>
        <?php if(session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-secondary" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">Film</th>
                        <th scope="col">Read More..</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($film as $k): ?>
                        <tr>
                            <td><?= $k['judul']; ?></td>
                            <td><a href="/Film/<?= $k['slug']; ?>" class="btn btn-info">Read More...</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?=$this->Endsection(); ?>
