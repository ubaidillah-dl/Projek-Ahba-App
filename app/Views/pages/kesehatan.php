<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="profil container-fluid ">
    <div class="container">
        <div class="sidebar row">
            <div class="col-3">
                <?= $this->include('layout/sidebar'); ?>
            </div>
            <div class="col-9">
                <h1>Kesehatan</h1>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>