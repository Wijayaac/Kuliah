<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width ">
    <title>Tambah Data Mahasiswa</title>
</head>

<body>
    <h2>Form Tambah Data Mahasiswa</h2>
    <br> <br>
    <form action="create.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="nama" id="">
                </td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>
                    <input type="number" name="nim" id="">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan Data"></td>
            </tr>
        </table>
    </form>
    <br><br>
    <a href="index.php"> Kembali ke Beranda</a>
</body>

</html>