function tambahData(url) {
    $("#modal").modal('show');
    $('input').val('');
    $('textarea').val('');
    $("#button_modal").attr('onclick', 'ActionModal("insertData", "' + url + '")')
    $("option:selected").prop("selected", false);
    $("#button_modal").html('Simpan Data');
}

function showEditObat(id, nama, keterangan) {
    $("#modal").modal('show');
    $("#id").val(id);
    $("#nama_obat").val(nama);
    $("#keterangan").val(keterangan);
    $("#button_modal").html('Edit Data');
    $("#button_modal").attr('onclick', 'ActionModal("edit", "model/obatModel.php", ' + id + ')')
}

function deleteObat(id) {
    Swal.fire({
        title: 'Apakah kamu yakin?',
        text: "Kamu Ingin Menghapus Data!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "model/obatModel.php",
                type: 'POST',
                data: {
                    "action": "deleteData",
                    "id": id
                },
                success: function (data) {
                    Swal.fire({
                        icon: 'success',
                        title: "Berhasil Menghapus Data",
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        $("#modal").modal('hide');
                    });
                },
                error: function (err) {
                    console.error(err);
                }
            });
        }
    })
}

function ActionModal(action, url, id = null) {
    if (action === "edit") {
        $.ajax({
            url: url,
            type: 'POST',
            data: $("form").serialize() + "&action=updateData",
            success: function (data) {
                Swal.fire({
                    icon: 'success',
                    title: "Berhasil Mengubah Data",
                    showConfirmButton: false,
                    timer: 1500
                }).then(() => {
                    $("#modal").modal('hide');
                });
            },
            error: function (err) {
                console.error(err)
            }
        });
    } else {
        $.ajax({
            url: url,
            type: 'POST',
            data: $("form").serialize() + "&action=insertData",
            success: function (data) {
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil Menambahkan Data',
                    showConfirmButton: false,
                    timer: 1500
                }).then(() => {
                    $("#modal").modal('hide');
                });
            },
            error: function (err) {
                console.error(err)
            }
        });
    }
}

// Data Pasien

function showEditPasien(id, nama_pasien, umur, tgl_lahir, alamat, kategori, keterangan) {
    $("#modal").modal('show');
    $("#id").val(id);
    $("#nama_pasien").val(nama_pasien);
    $("#umur").val(umur);
    $("#tgl_lahir").val(tgl_lahir);
    $("#alamat").val(alamat);
    $("#keterangan").val(keterangan);
    $("#button_modal").html('Edit Data');
    $("#button_modal").attr('onclick', 'ActionModal("edit", "model/pasienModel.php", ' + id + ')')
}

function deletePasien(id) {
    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Anda Ingin Menghapus Data!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "model/pasienModel.php",
                type: 'POST',
                data: {
                    "action": "deleteData",
                    "id": id
                },
                success: function (data) {
                    Swal.fire({
                        icon: 'success',
                        title: "Berhasil Menghapus Data",
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        $("#modal").modal('hide');
                    });
                },
                error: function (err) {
                    console.error(err);
                }
            });
        }
    })
}

// Jadwal Dokter


function showEditjadwalDokter(id, hari, jam_mulai, jam_selesai, id_dokter) {
    $("#modal").modal('show');
    $("#id").val(id);
    $("#hari").val(hari);
    $("#jam_mulai").val(jam_mulai);
    $("#jam_selesai").val(jam_selesai);
    $("#id_dokter").val(id_dokter);
    $("#button_modal").html('Edit Data');
    $("#button_modal").attr('onclick', 'ActionModal("edit", "model/jadwalDokterModel.php", ' + id + ')')
}

function deletejadwalDokter(id) {
    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Anda Ingin Menghapus Data!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "model/jadwalDokterModel.php",
                type: 'POST',
                data: {
                    "action": "deleteData",
                    "id": id
                },
                success: function (data) {
                    Swal.fire({
                        icon: 'success',
                        title: "Berhasil Menghapus Data",
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        $("#modal").modal('hide');
                    });
                },
                error: function (err) {
                    console.error(err);
                }
            });
        }
    })
}

// Data Dokter

function showEditDokter(id, nama_lengkap, jenis_kelamin, no_telp, alamat, poliklinik) {
    $("#modal").modal('show');
    $("#id").val(id);
    $("#nama_lengkap").val(nama_lengkap);
    $("#jenis_kelamin").val(jenis_kelamin);
    $("#no_telp").val(no_telp);
    $("#alamat").val(alamat);
    // $("#").val();
    $("#poliklinik").val(poliklinik);
    $("#button_modal").html('Edit Data');
    $("#button_modal").attr('onclick', 'ActionModal("edit", "model/dokterModel.php", ' + id + ')')
}

function deleteDokter(id) {
    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Anda Ingin Menghapus Data!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "model/dokterModel.php",
                type: 'POST',
                data: {
                    "action": "deleteData",
                    "id": id
                },
                success: function (data) {
                    Swal.fire({
                        icon: 'success',
                        title: "Berhasil Menghapus Data",
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        $("#modal").modal('hide');
                    });
                },
                error: function (err) {
                    console.error(err);
                }
            });
        }
    })
}

//absensi

function showEditAbsensi(id, nama_lengkap, jam_masuk, jam_pulang) {
    $("#modal").modal('show');
    $("#id").val(id);
    $("#jam_masuk").val(jam_masuk);
    $("#jam_pulang").val(jam_pulang);
    $("#id_dokter").val(id_dokter);
    $("#button_modal").html('Edit Data');
    $("#button_modal").attr('onclick', 'ActionModal("edit", "model/absensiModel.php", ' + id + ')')
}

function deleteAbsensi(id) {
    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Anda Ingin Menghapus Data!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "model/absensiModel.php",
                type: 'POST',
                data: {
                    "action": "deleteData",
                    "id": id
                },
                success: function (data) {
                    Swal.fire({
                        icon: 'success',
                        title: "Berhasil Menghapus Data",
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        $("#modal").modal('hide');
                    });
                },
                error: function (err) {
                    console.error(err);
                }
            });
        }
    })
}

function showEditTransaksi(id, kategori, jumlah, keterangan) {
    $("#modal").modal('show');
    $("#id").val(id);
    $("#kategori").val(kategori);
    $("#jumlah").val(jumlah);
    $("#keterangan").val(keterangan);
    $("#button_modal").html('Edit Data');
    $("#button_modal").attr('onclick', 'ActionModal("edit", "model/transaksiModel.php", ' + id + ')')
}

function deleteTransaksi(id) {
    Swal.fire({
        title: 'Apakah kamu yakin?',
        text: "Kamu Ingin Menghapus Data!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "model/transaksiModel.php",
                type: 'POST',
                data: {
                    "action": "deleteData",
                    "id": id
                },
                success: function (data) {
                    Swal.fire({
                        icon: 'success',
                        title: "Berhasil Menghapus Data",
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        $("#modal").modal('hide');
                    });
                },
                error: function (err) {
                    console.error(err);
                }
            });
        }
    })
}