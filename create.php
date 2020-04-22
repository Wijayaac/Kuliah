<?php
// masukkan koneksi database
include "koneksi.php";
// memproses data yang dikirim di form tambah data
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
//  menginput ke database mysql
mysqli_query($koneksi, "insert into mahasiswa values(' ','$nama','$nim','$alamat')");
// mengalihkan ke halaman utama
header("location:index.php");