<?php 

    if (!isset($_GET['id'])){
        header("location: ../ index.php");
        exit;
    }

    require 'functions.php';

    $id = $_GET['id'];

    $b = query("SELECT * FROM elektronik WHERE id = $id")[0];
?>

<html>
    <head>
        <title>Latihan5cDetail_193040051</title>
    </head>
    <body>
    <h1>Samsung</h1>
        <div class="container">
            <div class="gambar">
                <img src="../assets/img/<?= $b["gambar"]; ?>" alt="">
            </div>
                <div class="keterangan">
                    <p>Nama Barang :<?= $b["nama_barang"]; ?></p>
                    <p>RAM : <?= $b["RAM"]; ?></p>
                    <p>Memory Internal : <?= $b["memory_internal"]; ?></p>
                    <p>Kamera Belakang : <?= $b["kamera_belakang"]; ?></p>
                    <p>Kamera Depan : <?= $b["kamera_depan"]; ?></p>
                    <p>harga : <?= $b["harga"]; ?></p>
                </div>

        <button class="tombol_kembali"><a href="../index.php">Kembali</a></button>
        </div>
    </body>
</html>