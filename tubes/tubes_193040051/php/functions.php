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

// fungsi untuk menambahkan data didalam database
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

    $query = "INSERT INTO elektronik
                        VALUES
                        ('','gambar', '$nama_barang', '$RAM', '$memory_internal', '$kamera_belakang', '$kamera_depan', '$harga')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM elektronik WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $gambar = htmlspecialchars($data['gambar']);
    $nama_barang = htmlspecialchars($data['nama_barang']);
    $RAM = htmlspecialchars($data['RAM']);
    $memory_internal = htmlspecialchars($data['memory_internal']);
    $kamera_belakang = htmlspecialchars($data['kamera_belakang']);
    $kamera_depan = htmlspecialchars($data['kamera_depan']);
    $harga = htmlspecialchars($data['harga']);

    $queryubah = "UPDATE elektronik
                    SET
                    gambar = '$gambar',
                    nama_barang = '$nama_barang',
                    RAM = '$RAM',
                    memory_internal = '$memory_internal',
                    kamera_belakang = '$kamera_belakang',
                    kamera_depan = '$kamera_depan',
                    harga = '$harga'
                WHERE id = '$id' ";
    mysqli_query($conn, $queryubah);

    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah digunakan');
            </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
