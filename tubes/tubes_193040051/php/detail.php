<?php

session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

if (!isset($_GET['id'])) {
    header("location: ../ index.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];

$b = query("SELECT * FROM elektronik WHERE id = $id")[0];
?>

<html>

<head>
    <title>Halaman Detail</title>
</head>

<body style="background-color: #71dade;">
    <h1 style="text-align: center; font-variant:small-caps; text-decoration: underline;">Samsung</h1>
    <br><br>

    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $b["gambar"]; ?>" width="200px">
        </div>
        <ul type="circle">
            <li style="color: red">Nama Barang :<?= $b["nama_barang"]; ?></li><br>
            <li style="color: white">RAM : <?= $b["RAM"]; ?></li><br>
            <li style="color: red">Memory Internal : <?= $b["memory_internal"]; ?></li><br>
            <li style="color: white">>Kamera Belakang : <?= $b["kamera_belakang"]; ?></li><br>
            <li style="color: red">Kamera Depan : <?= $b["kamera_depan"]; ?></li><br>
            <li style="color: white">>harga : <?= $b["harga"]; ?></li><br>
        </ul>
        <br>
        <button class="tombol_kembali" style="color: black; background-color: red;"><a href="../index.php">Kembali</a></button>
    </div>
</body>

</html>