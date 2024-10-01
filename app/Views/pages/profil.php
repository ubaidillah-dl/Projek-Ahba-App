<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="profil col-9">
    <div class="top row pt-4">
        <div class="col-4 d-flex justify-content-center align-items-center">
            <img class="rounded rounded-circle" src="/assets/Ori.jpg" alt="" srcset="" />
        </div>
        <div class="col-8 d-flex justify-content-center">
            <div class="row">
                <div class="col d-flex flex-wrap align-items-center p-0 m-0">
                    <h2 class="m-0 p-0 me-3">Ubaidillah</h2>
                    <button class="btn btn-primary">Edit Profil</button>
                </div>
            </div>
            <di class="row mt-2">
                <div class="col m-0 p-0">
                    <h6>ubayd2947@gmail.com</h6>
                </div>
            </di>
        </div>
    </div>
    <div class="bottom row">
        <div class="col mt-3">
            <div class="tcontainer ms-4 m-0 p-0">
                <table class="table table-striped table-borderless table-dark m-0 p-0">
                    <tbody>
                        <tr>
                            <th scope="row">NIS</th>
                            <td>126784</td>
                        </tr>
                        <tr>
                            <th scope="row">Nama</th>
                            <td>Ubaidillah</td>
                        </tr>
                        <tr>
                            <th scope="row">TTL</th>
                            <td>Bangkalan, 10 Mei 2002</td>
                        </tr>
                        <tr>
                            <th scope="row">Alamat</th>
                            <td>Ds. Keteleng</td>
                        </tr>
                        <tr>
                            <th scope="row">Tanggal Masuk</th>
                            <td>17 Juni 2017</td>
                        </tr>
                        <tr>
                            <th scope="row">Ayah</th>
                            <td>Amze</td>
                        </tr>
                        <tr>
                            <th scope="row">Ibu</th>
                            <td>Salma</td>
                        </tr>
                        <tr>
                            <th scope="row">Madrasah</th>
                            <td>Lulus</td>
                        </tr>
                        <tr>
                            <th scope="row">Formal</th>
                            <td>Lulus</td>
                        </tr>
                        <tr>
                            <th scope="row">Kamar</th>
                            <td>Al-Azhar 102</td>
                        </tr>
                        <tr>
                            <th scope="row">No Hp</th>
                            <td>087756202034</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>