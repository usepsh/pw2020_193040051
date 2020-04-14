<?php 

    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");

    mysqli_select_db($conn, "tubes_193040051") or die("Database Salah!");

    $result = mysqli_query($conn, "SELECT*FROM elektronik")
?>

<html>
    <head>
        <title>Latihan5a_19304051</title>
        <link rel="stylesheet" href="css/styleA.css" type="text/css">
    </head>
    <body>
        <h1><style>h1 { color: blue; text-align: center;}</style>Daftar Harga HP Samsung</h1>
        <center>
        <table border="1px">
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Nama Barang</th>
                <th>RAM</th>
                <th>Memory Internal</th>
                <th>Kamera Belakang</th>
                <th>Kamera Depan</th>
                <th>Harga</th>
            </tr>
            <?php $i = 1 ?>
            <?php while($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <?php $i ?>
                <td><?= $row["id"]; ?></td>
                <td><img src="assets/img/<?= $row["gambar"]; ?>"></td>
                <td><?= $row["nama_barang"]; ?></td>
                <td><?= $row["RAM"]; ?></td>
                <td><?= $row["memory_internal"]; ?></td>
                <td><?= $row["kamera_belakang"]; ?></td>
                <td><?= $row["kamera_depan"]; ?></td>
                <td><?= $row["harga"]; ?></td>
            </tr>
            <?php $i++ ?>
            <?php endwhile; ?>
        </table>
		</center>
    </body>
</html>