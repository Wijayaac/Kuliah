<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>CRUD Data Mahasiswa</h2>
    <br>
    <br> <br>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Alamat</th>
            <th>Pilihan</th>
        </tr>
        <?php
include 'koneksi.php';
$id = 1;
$data = mysqli_query($koneksi, "select * from mahasiswa");
while ($d = mysqli_fetch_array($data)) {
    ?>
        <tr>
            <td><?php echo $id++; ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td><?php echo $d['nim']; ?></td>
            <td><?php echo $d['alamat']; ?></td>
            <td>
                <a href="edit.php?= id<?php echo $d['id']; ?>">Edit |</a>
                <a href="hapus.php?= id<?php echo $d['id']; ?>">| Hapus</a>

            </td>
        </tr>
        <?php
}
?>
    </table>
    <br> <br>
    <a href="tambah.php">+ Tambah Data Mahasiswa</a>
</body>

</html>