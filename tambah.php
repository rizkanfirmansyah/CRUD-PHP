<?php

require 'koneksi.php';
$conn = koneksi();


if (isset($_POST["submit"])) {

    if (tambah($conn, $_POST)) {
        $pesan = "Data Berhasil Ditambahkan!";
    } else {
        $pesan = "Data Gagal Ditambahkan!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>

<body>

    <form action="" method="post">
        <div>
            <label for="nim">nim</label>
            <input type="text" name="nim" id="nim">
        </div>
        <div>
            <label for="nama">nama</label>
            <input type="text" name="nama" id="nama">
        </div>
        <div>
            <label for="jk">jenis kelamin</label>
            <select name="jenis_kelamin" id="jenis_kelamin">
                <option disabled value>==pilih jenis kelamin ==</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        <div>
            <label for="alamat">alamat</label>
            <input type="text" name="alamat" id="alamat">
        </div>
        <input type="submit" name="submit" value="Tambah Data">
    </form>

</body>

</html>