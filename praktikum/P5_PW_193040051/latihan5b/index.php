<?php 
    require 'php/functions.php';
    $elektronik = query("SELECT * FROM elektronik")
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
            <?php foreach($elektronik as $ele) : ?>
            <tr>
                <?php $i ?>
                <td><?= $ele["id"]; ?></td>
                <td><img src="assets/img/<?= $ele["gambar"]; ?>"></td>
                <td><?= $ele["nama_barang"]; ?></td>
                <td><?= $ele["RAM"]; ?></td>
                <td><?= $ele["memory_internal"]; ?></td>
                <td><?= $ele["kamera_belakang"]; ?></td>
                <td><?= $ele["kamera_depan"]; ?></td>
                <td><?= $ele["harga"]; ?></td>
            </tr>
            <?php $i++ ?>
            <?php endforeach; ?>
        </table>
		</center>
    </body>
</html>