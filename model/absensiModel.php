<?php
require_once "../db/conn.php";
require_once "../db/func.php";

if (isset($_POST["action"])) {
    $action = $_POST["action"];

    if ($action == "getAll") {
        $no = 1;
        $data = joinTable("tb_dokter", "tb_absensi", "tb_dokter.id=tb_absensi.id_dokter");
        echo json_encode($data);
    }

    // if ($action == "getById") {
    // }

    if ($action == "insertData") {
        unset($_POST["id"]);
        $tanggal       = date('Y-m-d');
        $jam_masuk     = $_POST["jam_masuk"];
        $jam_pulang    = $_POST["jam_pulang"];
        $idDokter      = $_POST["id_dokter"];


        $data = [
            "tanggal"        => tanggal_indo($tanggal, true),
            "jam_masuk"      => $jam_masuk,
            "jam_pulang"     => $jam_pulang,
            "id_dokter"      => $idDokter,
        ];

        if (insertData("tb_absensi", $data) == 1) {
            echo json_encode([
                "status" => true,
                "message" => "Berhasil Menambahkan Data"
            ]);
        } else {
            echo json_encode([
                "status" => false,
                "message" => "Gagal Menambahkan Data",
            ]);
        }
    }

    if ($action == "updateData") {
        $id = $_POST["id"];
        $tanggal       = date('Y-m-d');
        $jam_masuk     = $_POST["jam_masuk"];
        $jam_pulang    = $_POST["jam_pulang"];
        $idDokter      = $_POST["id_dokter"];


        $data = [
            "tanggal"        => tanggal_indo($tanggal, true),
            "jam_masuk"      => $jam_masuk,
            "jam_pulang"     => $jam_pulang,
            "id_dokter"      => $idDokter,
        ];

        if (updateData("tb_absensi", $id, $data) == 1) {
            echo json_encode([
                "status" => true,
                "message" => "Berhasil Mengubah Data"
            ]);
        } else {
            echo json_encode([
                "status" => false,
                "message" => "Gagal Mengubah Data"
            ]);
        }
    }

    if ($action == "deleteData") {
        $id = $_POST["id"];
        if (deleteData("tb_absensi", $id) == 1) {
            echo json_encode([
                "status" => true,
                "message" => "Berhasil Menghapus Data"
            ]);
        } else {
            echo json_encode([
                "status" => false,
                "message" => "Gagal Menghapus Data"
            ]);
        }
    }

    $conn->close();
}
