<?php require_once "db/func.php"; ?>
<div class="height-100 w-100" style="margin-top: 5rem !important;">
    <div class="card" style="border: 2px solid #F7B731;">
        <div class="card-header text-white fs-4" style="background-color: #F7B731;">Data Absensi</div>
        <div class="card-body">
        <button id="button_tambah" type="button" class="btn" style="width: 10rem;color: #fff;background-color: #FC5C65;">Tambah Absensi</button>
            <!-- <a href="?page=pasien"><img class="mx-3" src="assets/img/icon/refresh.svg" alt="" width="30px"></a> -->
            <div class="my-3  table-responsive">
                <table id="table" class="table table-hover table-bordered">
                    <thead class="text-center text-white" style="background-color: #133b5c;">
                        <tr>
                            <th>Nama Dokter</th>
                            <th>Tanggal</th>
                            <th>Jam Masuk</th>
                            <th>Jam Pulang</th>
                        </tr>
                    </thead>
                    <tbody class="text-center text-white" style="background-color: #88A09E;" id="resultData">
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>