<?php

require 'functions.php';
$elektronik = query("SELECT * FROM elektronik");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <table border="1" cellpadding="13" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Opsi</th>
      <th>Gambar</th>
      <th>Nama Barang</th>
      <th>RAM</th>
      <th>Memory Internal</th>
      <th>Kamera Belakang</th>
      <th>Kamera Depan</th>
      <th>Harga</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($elektronik as $ele) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href=""><button>Ubah</button></a>
          <a href=""><button>Hapus</button></a>
        </td>
        <td><img src="../assets/img/<?= $ele['gambar']; ?>" alt=""></td>
        <td><?= $ele['nama_barang']; ?></td>
        <td><?= $ele['RAM']; ?></td>
        <td><?= $ele['memory_internal']; ?></td>
        <td><?= $ele['kamera_belakang']; ?></td>
        <td><?= $ele['kamera_depan']; ?></td>
        <td><?= $ele['harga']; ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  </table>
</body>

</html>