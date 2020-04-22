<?php
$koneksi = mysqli_connect("localhost", "root", "", "akademik");
//  mengecheck koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi Database Gagal : " . mysqli_connect_error();
}
