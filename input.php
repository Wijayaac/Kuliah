<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Quis 1</title>
</head>

<body>
    <h2>Kredit Koperasi</h2>
    <form action="proses.php" method="post">
        Nama Kreditur
        <input type="text" name="nama" id=""><br>
        Jumlah Pinjaman
        <input type="text" name="pinjam" id=""><br>
        Lama Pinjaman
        <input type="text" name="lama" id=""> Bulan <br>
        Prosentase Bunga
        <input type="text" name="bunga" id=""> % <br>
        <br><br>
        Jenis Bunga <br>
        <input type="radio" name="jenis" id="" value="bulanan"> Bulanan
        <input type="radio" name="jenis" id="" value="tahunan"> Tahunan
        <br> <br>
        Type Karyawan : <br>
        <select name="type" id="">
            <option value="tetap">Karyawan Tetap</option>
            <option value="out">Out Sourcing</option>
            <option value="sementara">Tenaga Harian</option>
        </select> <br> <br>
        Pilihan Asuransi Tambahan <br>
        <input type="checkbox" name="asuransi" value="Asuransi Bank" id="">Asuransi <br>
        <input type="checkbox" name="bichek" value="BI Checking" id="">BI Checking
        <br> <br>
        <input type="submit" value="Proses Hitung">
    </form>
</body>

</html>