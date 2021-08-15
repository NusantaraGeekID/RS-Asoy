<?php
require_once "conn.php";

function execute($sql)
{
    global $conn;
    return $conn->query($sql);
    // $conn->close();
}

// echo getData("tb_admin", "", "");

function getData($table, $select = null, $id = null)
{
    global $conn;
    $sql = "SELECT ";
    if (!empty($select) || !$select == null) $sql .= " $select ";
    else $sql .= " * ";
    $sql .= " FROM $table ";
    $id = $conn->real_escape_string($id);
    if (!empty($id) || !$id == null) $sql .= "WHERE id = '$id'";
    $sql .= ";";

    $result = execute($sql);

    if ($result->num_rows == 0) {
        return [];
    }
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    return $rows;
}

// $array = [
//     "username" => "root",
//     "password" => "toor",
// ];
// insertData("tb_admin", $array);

function insertData($table, $array)
{
    global $conn;
    $columns = "";
    $values = "";

    foreach ($array as $key => $value) {
        $columns    .= "$key, ";
        $value      = $conn->real_escape_string($value);
        $values     .= "'$value', ";
    }

    $columns = substr(trim($columns), 0, -1);
    $values = substr(trim($values), 0, -1);

    $columns = "(" . rtrim($columns, ',') . ")";
    $values = "(" . rtrim($values, ',') . ");";

    $sql = "INSERT INTO $table $columns VALUES $values";

    return execute($sql);
}

// $array = [
//     "username" => "root1",
//     "password" => "toor1",
// ];
// updateData("tb_admin", "1", $array);

function updateData($table, $id, $array)
{
    global $conn;
    $setUpdate = "";

    foreach ($array as $key => $value) {
        $value          = $conn->real_escape_string($value);
        $setUpdate      .= "$key='$value', ";
    }

    $setUpdate = substr(trim($setUpdate), 0, -1);
    $sql = "UPDATE $table SET $setUpdate WHERE id = $id;";

    return execute($sql);
}

// deleteData("tb_admin", "1");

function deleteData($table, $id)
{
    global $conn;
    $id = $conn->real_escape_string($id);
    $sql = "DELETE FROM $table WHERE id=$id;";
    return execute($sql);
}

function joinTable($table, $table_join, $condition)
{
    global $conn;
    $sql = "SELECT * FROM $table INNER JOIN $table_join ON $condition";
    $result = execute($sql);

    if ($result->num_rows == 0) {
        return [];
    }

    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }

    return $rows;
}

function totalPasien()
{
    // global $conn;
    $sql = "SELECT * FROM tb_pasien";
    $result = execute($sql);
    return $result->num_rows;
}

function totalCovid()
{
    $sql = "SELECT kategori FROM tb_pasien WHERE kategori = 'COVID'";
    $result = execute($sql);
    return $result->num_rows;
}

function jumlahPemasukan()
{
    $sql = "SELECT SUM(jumlah) as jumlah_pemasukan FROM tb_transaksi WHERE kategori='pemasukan';";
    $result = execute($sql);
    $row = $result->fetch_assoc();
    return number_format($row['jumlah_pemasukan'], 0, ',', '.');
}

function jumlahPengeluaran()
{
    $sql = "SELECT SUM(jumlah) as jumlah_pengeluaran FROM tb_transaksi WHERE kategori='pengeluaran';";
    $result = execute($sql);
    $row = $result->fetch_assoc();
    return number_format($row['jumlah_pengeluaran'], 0, ',', '.');
}

function totalObat()
{
    $sql = "SELECT * FROM tb_obat";
    $result = execute($sql);
    return $result->num_rows;
}

function totalDokter()
{
    $sql = "SELECT * FROM tb_dokter";
    $result = execute($sql);
    return $result->num_rows;
}

function showDokter()
{

    $sql = "SELECT id, nama_lengkap FROM tb_dokter ";

    $result = execute($sql);

    $html = "";
    while ($row = $result->fetch_assoc()) {
        $html .= "<option value='$row[id]'>$row[nama_lengkap]</option>";
    }

    return $html;
}

function tanggal_indo($tanggal, $cetak_hari = false)
{
    $hari = array(
        1 =>    'Senin',
        'Selasa',
        'Rabu',
        'Kamis',
        'Jumat',
        'Sabtu',
        'Minggu'
    );

    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $split       = explode('-', $tanggal);
    $tgl_indo = $split[2] . ' ' . $bulan[(int)$split[1]] . ' ' . $split[0];

    if ($cetak_hari) {
        $num = date('N', strtotime($tanggal));
        return $hari[$num] . ', ' . $tgl_indo;
    }
    return $tgl_indo;
}

// echo tanggal_indo(date('Y-m-d'), true);
// print_r(joinTable("tb_dokter", "tb_jadwal_dokter", "tb_dokter.id=tb_jadwal_dokter.id_dokter"));
