<?php

include 'koneksi.php';
$conn = koneksi();

$data = mysqli_query($conn, "SELECT * FROM mahasiswa");
// mysqli_fetch_array($con);

// var_dump($data);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index -- File</title>
</head>

<body>

    <h1>Data</h1>
    <a href="tambah.php">Tambah Data +</a>
    <table border="1">
        <thead>
            <tr style="margin: 30px; padding:30px;">
                <td>no</td>
                <td>nim</td>
                <td>nama</td>
                <td>jenis kelamin</td>
                <td>alamat</td>
                <td>action</td>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 ?>
            <?php foreach ($data as $key) : ?>
                <tr style="margin: 30px; padding:30px;">
                    <td><?= $i ?></td>
                    <td><?= $key['nim'] ?></td>
                    <td><?= $key['nama'] ?></td>
                    <td><?= $key['jenis_kelamin'] ?></td>
                    <td><?= $key['alamat'] ?></td>
                    <td><a href="hapus.php?id=<?= $key['id'] ?>">Hapus</a></td>
                </tr>
                <?php $i++ ?>
            <?php endforeach; ?>
        </tbody>
    </table>


</body>

</html>