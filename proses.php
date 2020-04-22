<?php
$nama = $_POST['nama'];
$pinjam = $_POST['pinjam'];
$lama = $_POST['lama'];
$bunga = $_POST['bunga'];
$jenis = $_POST['jenis'];
$type = $_POST['type'];

function bulanan($jenisbunga, $persentase, $pinjaman)
{
    if ($jenisbunga == 'bulanan') {
        return $pinjaman * $persentase / 100;
    } elseif ($jenisbunga == 'tahunan') {
        return $pinjaman * $persentase / 100 / 12;
    }
}
function pokok($pinjaman, $durasi)
{
    return $pinjaman / $durasi;
}
function asuransi($pinjaman, $durasi, $pekerja)
{
    if ($pekerja == 'tetap') {
        return $pinjaman * 0.05 / $durasi;
    } elseif ($pekerja == 'out') {
        return $pinjaman * 0.10 / $durasi;
    } elseif ($pekerja == 'sementara') {
        return $pinjaman * 0.15 / $durasi;
    } else {
        return 0;
    }
}

echo "Nama Kreditur  :" . $nama . "<br>";
echo "Jumlah Pinjaman  :" . $pinjam . "Rupiah <br>";
echo "Lama Pinjaman  :" . $lama . " Bulan <br>";
echo "Persentase Bunga  :" . $bunga . " %<br>";
echo "Jenis Bunga  :" . $jenis . "<br>";
echo "Type Karyawan  :" . $type . "<br>";
echo " Asuransi Pilihan  : <br>";
if (isset($_POST['asuransi'])) {
    echo "- " . $_POST['asuransi'] . "<br>";
}
if (isset($_POST['bichek'])) {
    echo "- " . $_POST['bichek'] . "<br>";
}

echo "Skema Pembayaran Cicilan <br>";
$pokok = pokok($pinjam, $lama);
$bulanan = bulanan($jenis, $bunga, $pinjam);
$asuransi = asuransi($pinjam, $lama, $type);
$bayar = $pokok + $bulanan + $asuransi;
$saldo = $pinjam;

for ($i = 0; $i < $lama; $i++) {
    $saldo = $saldo - $pokok;
    echo "Bulan ke - " . $i . ", Pokok :" . $pokok .
        " Bunga :" . $bulanan .
        "Asuransi/bln :" . $asuransi .
        "Pembayaran Bulanan :" . $bayar .
        "Sisa Saldo :" . $saldo . "
<br>";

}
echo "<br><br><br>";

echo "Total Bunga yang harus dibayar :" . $totalbunga = $bulanan * $lama . "<br>";
echo "Total Asuransi yang dibayarkan :" . $totalasuransi = $asuransi * $lama . "<br>";