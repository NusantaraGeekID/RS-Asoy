<?php require_once "db/func.php"; ?>
<div class="height-100 w-100" style="margin-top: 5rem !important;">

    <div class="p-5 mb-4 rounded-3 text-white" style="background-color: #0A3D62;">
        <div class="container-fluid py-5 text-center">
            <h1 class="display-5 fw-bold">COVID-19</h1>
            <p class="fs-4">
                MASKERKU MELINDUNGI KAMU, MASKERMU MELINDUNGI AKU <br>
                PATUHI BERSAMA PROTOKOL KESEHATAN.
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 my-3">
            <div class="card" style="background-color: #3C40C6;">
                <div class="card-header text-white">
                    Jumlah Pasien
                </div>
                <div class="card-body d-flex">
                    <img src="assets/img/icon/pasien.svg" alt="" width="66px" />
                    <p class="card-text text-white fs-1 mx-3"><?= totalPasien(); ?></p>
                </div>
            </div>
        </div>

        <div class="col-md-4 my-3">
            <div class="card" style="background-color: #FFA801;">
                <div class="card-header text-white">
                    Jumlah Covid
                </div>
                <div class="card-body d-flex">
                    <img src="assets/img/icon/covid.svg" alt="" width="66px">
                    <p class="card-text text-white fs-1 mx-3">
                        <?= totalCovid(); ?>
                    </p>

                </div>
            </div>
        </div>

        <div class="col-md-4 my-3">
            <div class="card" style="background-color: #38ADA9;">
                <div class="card-header text-white">
                    Total Pemasukan
                </div>
                <div class="card-body d-flex">
                    <img src="assets/img/icon/pemasukan.svg" alt="" width="66px">
                    <p class="card-text text-white fs-4 mx-3">Rp. <?= jumlahPemasukan(); ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 my-3">
            <div class="card" style="background-color: #0FBCF9;">
                <div class="card-header text-white">
                    Jumlah Obat
                </div>
                <div class="card-body d-flex">
                    <img src="assets/img/icon/obat.svg" alt="" width="66px">
                    <p class="card-text text-white fs-1 mx-3">
                        <?= totalObat(); ?>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4 my-3">
            <div class="card" style="background-color: #44BD32;">
                <div class="card-header text-white">
                    Jumlah Dokter
                </div>
                <div class="card-body d-flex">
                    <img src="assets/img/icon/doctor.svg" alt="" width="66px" />
                    <p class="card-text text-white fs-1 mx-3">
                        <?= totalDokter(); ?>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4 my-3">
            <div class="card" style="background-color: #EB2F06;">
                <div class="card-header text-white">
                    Total Pengeluaran
                </div>
                <div class="card-body d-flex">
                    <img src="assets/img/icon/pengeluaran.svg" alt="" width="66px" />
                    <p class="card-text text-white fs-4 mx-3">Rp. <?= jumlahPengeluaran(); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

