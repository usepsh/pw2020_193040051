<?php

function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_193040051") or die("Database Salah!");

    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $gambar = htmlspecialchars($data['gambar']);
    $nama_barang = htmlspecialchars($data['nama_barang']);
    $RAM = htmlspecialchars($data['RAM']);
    $memory_internal = htmlspecialchars($data['memory_internal']);
    $kamera_belakang = htmlspecialchars($data['kamera_belakang']);
    $kamera_depan = htmlspecialchars($data['kamera_depan']);
    $harga = htmlspecialchars($data['harga']);

    $query = "INSERT INTO 
                elektronik
              VALUES
              ('', '$gambar', '$nama_barang', '$RAM', '$memory_internal', '$kamera_belakang', '$kamera_depan', '$harga')
              ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM elektronik WHERE id = $id");

    return mysqli_affected_rows($conn);
}
