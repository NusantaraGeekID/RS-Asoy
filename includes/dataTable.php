<script>
    $(document).ready(function() {
        <?php
        if ($page == "pasien") :
        ?>
            $("#button_tambah").attr('onclick', 'tambahData("model/pasienModel.php")');

            var table = $('#table').DataTable({
                responsive: true,
                processing: true,
                ServerSide: true,
                retrieve: true,
                ajax: {
                    url: 'model/pasienModel.php',
                    type: 'POST',
                    data: {
                        'action': 'getAll'
                    },
                    "dataSrc": "",
                },
                columns: [{
                        "data": "nama_pasien"
                    },
                    {
                        "data": "umur"
                    },
                    {
                        "data": "tgl_lahir"
                    },
                    {
                        "data": "alamat"
                    },
                    {
                        "data": "kategori"
                    },
                    {
                        "data": "keterangan"
                    },
                ],
                columnDefs: [{
                    targets: 6,
                    render: function(data, type, row, meta) {
                        return '\
                    <button class="btn btn-warning text-white btn-sm" onclick="showEditPasien(\'' + row.id + '\',\'' + row.nama_pasien + '\', \'' + row.umur + '\', \'' + row.tgl_lahir + '\', \'' + row.alamat + '\',  \'' + row.kategori + '\', \'' + row.keterangan + '\',);"><i class="fas fa-edit"></i></button> | \
                    <button class="btn btn-danger text-white btn-sm" onclick="deletePasien(' + row.id + ')"><i class="fas fa-trash"></i></button>';
                    }
                }]
            });
        <?php
        elseif ($page == "jadwal_dokter") :
        ?>
            $("#button_tambah").attr('onclick', 'tambahData("model/jadwalDokterModel.php")');

            var table = $('#table').DataTable({
                responsive: true,
                processing: true,
                ServerSide: true,
                retrieve: true,
                ajax: {
                    url: 'model/jadwalDokterModel.php',
                    type: 'POST',
                    data: {
                        'action': 'getAll'
                    },
                    "dataSrc": "",
                },
                columns: [{
                        "data": "nama_lengkap"
                    },
                    {

                        "data": "hari"
                    },
                    {
                        "data": "jam_mulai"
                    },
                    {
                        "data": "jam_selesai"
                    },
                    {
                        "data": "poliklinik"
                    },

                ],
                columnDefs: [{
                    targets: 5,
                    render: function(data, type, row, meta) {
                        return '\
                        <button class="btn btn-warning text-white btn-sm" onclick="showEditjadwalDokter(\'' + row.id + '\',\'' + row.hari + '\', \'' + row.jam_mulai + '\', \'' + row.jam_selesai + '\',  \'' + row.id_dokter + '\',);"><i class="fas fa-edit"></i></button> | \
                        <button class="btn btn-danger text-white btn-sm" onclick="deletejadwalDokter(' + row.id + ')"><i class="fas fa-trash"></i></button>';
                    }
                }]
            });
        <?php
        elseif ($page == "obat") :
        ?>
            $("#button_tambah").attr('onclick', 'tambahData("model/obatModel.php")');

            var table = $('#table').DataTable({
                responsive: true,
                processing: true,
                ServerSide: true,
                retrieve: true,
                ajax: {
                    url: 'model/obatModel.php',
                    type: 'POST',
                    data: {
                        'action': 'getAll'
                    },
                    "dataSrc": "",
                },
                columns: [{
                        "data": "nama_obat"
                    },
                    {
                        "data": "keterangan"
                    },
                ],
                columnDefs: [{
                    targets: 2,
                    render: function(data, type, row, meta) {
                        return '\
                    <button class="btn btn-warning text-white btn-sm" onclick="showEditObat(\'' + row.id + '\',\'' + row.nama_obat + '\', \'' + row.keterangan + '\');"><i class="fas fa-edit"></i></button> | \
                    <button class="btn btn-danger text-white btn-sm" onclick="deleteObat(' + row.id + ')"><i class="fas fa-trash"></i></button>';
                    }
                }]
            });
        <?php
        elseif ($page == "dokter") :
        ?>
            $("#button_tambah").attr('onclick', 'tambahData("model/dokterModel.php")');

            var table = $('#table').DataTable({
                responsive: true,
                processing: true,
                ServerSide: true,
                retrieve: true,
                ajax: {
                    url: 'model/dokterModel.php',
                    type: 'POST',
                    data: {
                        'action': 'getAll'
                    },
                    "dataSrc": "",
                },
                columns: [{
                        "data": "nama_lengkap"
                    },
                    {
                        "data": "jenis_kelamin"
                    },
                    {
                        "data": "no_telp"
                    },
                    {
                        "data": "alamat"
                    },
                    {
                        "data": "poliklinik"
                    },
                ],
                columnDefs: [{
                    targets: 5,
                    render: function(data, type, row, meta) {
                        return '\
                <button class="btn btn-warning text-white btn-sm" onclick="showEditDokter(\'' + row.id + '\',\'' + row.nama_lengkap + '\', \'' + row.jenis_kelamin + '\', \'' + row.no_telp + '\', \'' + row.alamat + '\',  \'' + row.poliklinik + '\');"><i class="fas fa-edit"></i></button> | \
                <button class="btn btn-danger text-white btn-sm" onclick="deleteDokter(' + row.id + ')"><i class="fas fa-trash"></i></button>';
                    }
                }]
            });
        <?php
        elseif ($page == "transaksi") :
        ?>
        $("#button_tambah").attr('onclick', 'tambahData("model/transaksiModel.php")');

            var table = $('#table').DataTable({
                responsive: true,
                processing: true,
                ServerSide: true,
                retrieve: true,
                ajax: {
                    url: 'model/transaksiModel.php',
                    type: 'POST',
                    data: {
                        'action': 'getAll'
                    },
                    "dataSrc": "",
                },
                columns: [{
                        "data": "kategori"
                    },
                    {

                        "data": "jumlah",
                        "render": $.fn.dataTable.render.number( ',', '.', 0, 'Rp ')
                    },
                    {
                        "data": "keterangan"
                    },
                ],
                columnDefs: [{
                    targets: 3,
                    render: function(data, type, row, meta) {
                        return '\
                        <button class="btn btn-warning text-white btn-sm" onclick="showEditTransaksi(\'' + row.id + '\',\'' + row.kategori + '\', \'' + row.jumlah + '\', \'' + row.keterangan + '\');"><i class="fas fa-edit"></i></button> | \
                        <button class="btn btn-danger text-white btn-sm" onclick="deleteTransaksi(' + row.id + ')"><i class="fas fa-trash"></i></button>';
                    }
                }]
            });
        <?php
        elseif ($page == "absensi") :
        ?>
            $("#button_tambah").attr('onclick', 'tambahData("model/absensiModel.php")');

            var table = $('#table').DataTable({
                responsive: true,
                processing: true,
                ServerSide: true,
                retrieve: true,
                ajax: {
                    url: 'model/absensiModel.php',
                    type: 'POST',
                    data: {
                        'action': 'getAll'
                    },
                    "dataSrc": "",
                },
                columns: [{
                        "data": "nama_lengkap"
                    },
                    {
                        "data": "tanggal"
                    },
                    {
                        "data": "jam_masuk"
                    },
                    {
                        "data": "jam_pulang"
                    },
                ],
                // columnDefs: [{
                //     targets: 4,
                //     render: function(data, type, row, meta) {
                //         return '\

                //     }
                // }]
            });
        <?php endif; ?>
        <?php if (
            ($page == "pasien") ||
            ($page == "jadwal_dokter") ||
            ($page == "obat") ||
            ($page == "dokter") ||
            ($page == "transaksi") ||
            ($page == "absensi")
        ) : ?>
            setInterval(function() {
                // user paging is not reset on reload
                table.ajax.reload(null, false);
            }, 2000); // 2 secs
        <?php endif; ?>
    });
</script>