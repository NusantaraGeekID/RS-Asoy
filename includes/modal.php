<?php
// $page = @$_GET["page"];
// $title_modal = ucwords(str_replace("_", " ", $page));
?>

<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form>
            <div class="modal-content">
                <div class="modal-header text-white" style="background-color: #0A1D37;">
                    <h5 class="modal-title"><?= $title; ?></h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php
                    if ($page == "pasien") :
                    ?>
                        <input type="hidden" name="id" id="id" />
                        <div class="form-group my-2">
                            <label for="nama_pasien">Nama Pasien</label>
                            <input type="text" name="nama_pasien" id="nama_pasien" class="form-control" />
                        </div>
                        <div class="form-group my-2">
                            <label for="umur">Umur</label>
                            <input type="number" name="umur" id="umur" class="form-control">
                        </div>
                        <div class="form-group my-2">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control">
                        </div>
                        <div class="form-group my-2">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" cols="10" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group my-2">
                            <label for="kategori">Kategori Pasien</label>
                            <select class="form-select" name="kategori">
                                <option selected>Masukkan Kategori Pasien</option>
                                <option value="NON-COVID">NON-COVID</option>
                                <option value="COVID">COVID</option>
                            </select>
                        </div>
                        <div class="form-group my-2">
                            <label for="keterangan">Keterangan</label>
                            <textarea name="keterangan" id="keterangan" cols="10" rows="5" class="form-control"></textarea>
                        </div>
                    <?php
                    elseif ($page == "jadwal_dokter") :
                    ?>
                        <input type="hidden" name="id" id="id" />

                        <div class="form-group my-2">
                            <label for="nama_lengkap">Nama Dokter</label>
                            <select class="form-control select-dokter" name="id_dokter" id="id_dokter" data-live-search="true">
                                <option selected>Masukkan Nama dokter</option>
                                <?= showDokter(); ?>
                            </select>
                        </div>

                        <div class="form-group my-2">
                            <label for="hari">Hari</label>
                            <select name="hari" id="hari" class="form-control">
                                <option>Pilih Hari</option>
                                <?php
                                $array_hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];
                                foreach ($array_hari as $hari) echo "<option value='$hari'>$hari</option>";
                                ?>
                            </select>
                        </div>
                        <div class="form-group my-2">
                            <label for="jam_mulai">Jam Mulai</label>
                            <input type="time" name="jam_mulai" id="jam_mulai" class="form-control">
                        </div>
                        <div class="form-group my-2">
                            <label for="jam_selesai">Jam Selesai</label>
                            <input type="time" name="jam_selesai" id="jam_selesai" class="form-control">
                        </div>

                    <?php
                    elseif ($page == "obat") :
                    ?>
                        <input type="hidden" name="id" id="id" />
                        <div class="form-group my-2">
                            <label for="nama_obat">Nama Obat</label>
                            <input type="text" name="nama_obat" id="nama_obat" class="form-control" />
                        </div>
                        <div class="form-group my-2">
                            <label for="keterangan">Keterangan</label>
                            <textarea name="keterangan" id="keterangan" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    <?php
                    elseif ($page == "dokter") :
                    ?>
                        <input type="hidden" name="id" id="id" />
                        <div class="form-group my-2">
                            <label for="nama_lengkap">Nama Dokter</label>
                            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" />
                        </div>
                        <div class="form-group my-2">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                <option selected>Jenis Kelamin :</option>
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group my-2">
                            <label for="no_telp">Nomor Telpon</label>
                            <input type="number" name="no_telp" id="no_telp" class="form-control">
                        </div>
                        <div class="form-group my-2">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" cols="10" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group my-2">
                            <label for="poliklinik">Poliklinik</label>
                            <select class="form-control select-poliklinik" name="poliklinik" id="poliklinik" data-live-search="true">
                                <option>Pilih Poliklinik</option>
                                <?php $array_poliklinik = [
                                    "Kandungan dan Kebidanan (Obgyn)",
                                    "Bedah",
                                    "Penyakit Dalam",
                                    "Jantung dan Pembuluh darah",
                                    "Anak",
                                    "Saraf",
                                    "Perawatan Gigi",
                                    "Gigi Spesialis",
                                    "Kedokteran Jiwa atau Psikiatri",
                                    "Mata",
                                    "THT",
                                    "Umum",
                                    "Radiologi",
                                    "Pulmonologi dan Kedokteran Respirasi (Paru)",
                                    "Kedokteran Fisik dan Rehabilitasi",
                                    "Patologi Anatomi",
                                    "Gizi",
                                    "Poli Gigi",
                                    "Anestesiologi dan Terapi Intensif",
                                    "Penyakit Kulit dan Kelamin",
                                    "Farmakologi",
                                    "Kedokteran Forensik",
                                    "Mikrobiologi",
                                    "Patologi",
                                    "Andrologi",
                                ];
                                foreach ($array_poliklinik as $poliklinik) echo "<option value='$poliklinik'>$poliklinik</option>";
                                ?>
                            </select>
                            <!-- <input type="text" name="poliklinik" id="poliklinik" class="form-control" /> -->
                        </div>
                    <?php
                    elseif ($page == "transaksi") :
                    ?>
                    <input type="hidden" name="id" id="id" />
                        <div class="form-group my-2">
                            <label for="kategori">Kategori</label>
                            <select class="form-control" name="kategori" id="kategori" data-live-search="true">
                                <option selected>Masukkan Kategori</option>
                                <option value="pemasukan">Pemasukan</option>
                                <option value="pengeluaran">Pengeluaran</option>
                            </select>
                        </div>
                        <div class="form-group my-2">
                            <label for="jumlah">Jumlah</label>
                            <input type="number" name="jumlah" id="jumlah" class="form-control">
                        </div>

                        <div class="form-group my-2">
                            <label for="keterangan">Keterangan</label>
                            <textarea name="keterangan" id="keterangan" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    <?php
                    elseif ($page == "absensi") :
                    ?>
                        <input type="hidden" name="id" id="id" />

                        <div class="form-group my-2">
                            <label for="id_dokter">Nama Dokter</label>
                            <select class="form-control select-dokter" name="id_dokter" id="id_dokter" data-live-search="true">
                                <option selected>Masukkan Nama dokter</option>
                                <?= showDokter(); ?>
                            </select>
                        </div>

                        <div class="form-group my-2">
                            <label for="jam_masuk">Jam Masuk</label>
                            <input type="time" name="jam_masuk" id="jam_masuk" class="form-control">
                        </div>
                        <div class="form-group my-2">
                            <label for="jam_pulang">Jam Pulang</label>
                            <input type="time" name="jam_pulang" id="jam_pulang" class="form-control">
                        </div>

                    <?php endif; ?>
                </div>
                <div class="modal-footer" style="background-color: #0A1D37;">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="button_modal">Simpan Data</button>
                </div>
            </div>
        </form>
    </div>
</div>