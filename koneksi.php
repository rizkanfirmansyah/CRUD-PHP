<?php

function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "")
        or die("Koneksi ke Database Gagal");

    mysqli_select_db($conn, "alika")
        or die("Database Salah!");

    return $conn;
}

function tambah($conn, $post = array())
{
    // var_dump($_POST);
    $query = "INSERT INTO mahasiswa
			VALUES (' ', '{$post["nama"]}', '{$post["nim"]}', '{$post["alamat"]}', '{$post["jenis_kelamin"]}')
	 		 ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function hapus($conn, $id)
{
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id=$id");

    return mysqli_affected_rows($conn);
}
