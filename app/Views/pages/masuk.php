<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="masuk container-fluid justify-content-center d-flex">
    <section class="m-auto p-5">
        <div class="mb-3 d-flex">
            <img class="me-3" src="/assets/logo-alhikam.png" alt="Logo Al Hikam" srcset="" />
            <h4 class="m-0 p-0 d-flex align-items-end ">AHBA <br />Pesantren private</h4>
        </div>
        <form>
            <div class="mb-2">
                <input type="text" class="form-control rounded-4 input" id="nis" placeholder="Masukkan NIS" />
            </div>
            <div class="mb-3">
                <input type="text" class="form-control rounded-4 input" id="ttl" placeholder="Masukkan TTL" />
            </div>
            <div class="mb-4 justify-content-around">
                <button type="submit" class="btn btn-primary rounded-4 w-100">Masuk</button>
            </div>
        </form>
    </section>
</div>
<?= $this->endSection(); ?>