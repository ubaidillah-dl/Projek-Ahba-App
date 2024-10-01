<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="billing col-9">
    <div class="row pt-4">
        <div class="col">
            <div class="tcontainer ms-4 mb-3">
                <table class="table table-striped table-borderless table-dark m-0 p-0">
                    <tbody>
                        <tr>
                            <th scope="row">Uraian</th>
                            <td>SPP Bulanan Pondok SMP</td>
                        </tr>
                        <tr>
                            <th scope="row">Tagihan</th>
                            <td>650.000</td>
                        </tr>
                        <tr>
                            <th scope="row">Dibayar</th>
                            <td>
                                650.000 </td>
                        </tr>
                        <tr>
                            <th scope="row">Periode</th>
                            <td>06-2024 </td>
                        </tr>
                        </tr>
                        <tr>
                            <th scope="row">Status</th>
                            <td class="d-flex justify-content-between">
                                <div class="bg-success d-inline-flex px-2 rounded-5">Lunas</div>

                                <!-- Triger modal -->
                                <button class="button btn btn-primary btn-sm rounded-5" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">Create VA
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="popup modal-content bg-dark">
                                            <div class="modal-header border-bottom-0">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Create Virtual
                                                    Account ?
                                                </h1>
                                            </div>
                                            <div class="modal-body">

                                                <h6>Anda yakin mau melakukan create-va ?</h6>
                                            </div>
                                            <div class="modal-footer border-top-0">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Batal</button>
                                                <button type="button" class="btn btn-primary">Create VA</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                    </tbody>
                </table>
            </div>
            <div class="tcontainer ms-4 mb-3">
                <table class="table table-striped table-borderless table-dark m-0 p-0">
                    <tbody>
                        <tr>
                            <th scope="row">Uraian</th>
                            <td>SPP Bulanan Pondok SMP</td>
                        </tr>
                        <tr>
                            <th scope="row">Tagihan</th>
                            <td>450.000</td>
                        </tr>
                        <tr>
                            <th scope="row">Dibayar</th>
                            <td>450.000</td>
                        </tr>
                        <tr>
                            <th scope="row">Status</th>
                            <td>
                                <div class="bg-success d-inline-flex px-1 rounded-5">Lunas</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tcontainer ms-4 mb-3">
                <table class="table table-striped table-borderless table-dark m-0 p-0">
                    <tbody>
                        <tr>
                            <th scope="row">Uraian</th>
                            <td>SPP Bulanan Pondok SMP</td>
                        </tr>
                        <tr>
                            <th scope="row">Tagihan</th>
                            <td>450.000</td>
                        </tr>
                        <tr>
                            <th scope="row">Dibayar</th>
                            <td>450.000</td>
                        </tr>
                        <tr>
                            <th scope="row">Status</th>
                            <td>
                                <div class="bg-success d-inline-flex px-1 rounded-5">Lunas</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tcontainer ms-4 mb-3">
                <table class="table table-striped table-borderless table-dark m-0 p-0">
                    <tbody>
                        <tr>
                            <th scope="row">Uraian</th>
                            <td>SPP Bulanan Pondok SMP</td>
                        </tr>
                        <tr>
                            <th scope="row">Tagihan</th>
                            <td>450.000</td>
                        </tr>
                        <tr>
                            <th scope="row">Belum Dibayar</th>
                            <td>450.000</td>
                        </tr>
                        <tr>
                            <th scope="row">Status</th>
                            <td>
                                <div class="bg-danger d-inline-flex px-1 rounded-5">Belum Lunas</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tcontainer ms-4 mb-3">
                <table class="table table-striped table-borderless table-dark m-0 p-0">
                    <tbody>
                        <tr>
                            <th scope="row">Uraian</th>
                            <td>SPP Bulanan Pondok SMP</td>
                        </tr>
                        <tr>
                            <th scope="row">Tagihan</th>
                            <td>450.000</td>
                        </tr>
                        <tr>
                            <th scope="row">Belum Dibayar</th>
                            <td>450.000</td>
                        </tr>
                        <tr>
                            <th scope="row">Status</th>
                            <td>
                                <div class="bg-danger d-inline-flex px-1 rounded-5">Belum Lunas</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>