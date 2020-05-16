<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}
//menghubungkan dengan file php lainnya
require 'functions.php';

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $elektronik = query("SELECT * FROM elektronik WHERE
                nama_barang LIKE '%$keyword%' OR
                memory_internal LIKE '%$keyword%' OR
                RAM LIKE '%$keyword%' OR
                kamera_belakang LIKE '%$keyword%' OR
                kamera_depan LIKE '%$keyword%' OR
                harga LIKE '%$keyword%' ");
} else {
  // melakukan query
  $elektronik = query("SELECT * FROM elektronik");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
</head>

<body>
  <div class="add">
    <a href="tambah.php" style="background-color: blueviolet; color:white;">Tambah Data!</a>
  </div>

  <form action="" method="get">
    <input type="text" name="keyword" autofocus>
    <button type="submit" name="cari">Cari!</button>
  </form>

  <table border="1" cellpadding="13" cellspacing="0" style="background-color:aqua;">
    <tr>
      <th>#</th>
      <th>Opsi</th>
      <th>Gambar</th>
      <th>Nama Barang</th>
      <th>RAM</th>
      <th>Memori Internal</th>
      <th>Kamera Belakang</th>
      <th>Kamera Depan</th>
      <th>Harga</th>
    </tr>
    <?php if (empty($elektronik)) : ?>
      <tr>
        <td colspan="9">
          <h1>Data tidak ditemukan!</h1>
        </td>
      </tr>
    <?php else : ?>
      <?php $i = 1; ?>
      <?php foreach ($elektronik as $ele) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td>
            <a href="ubah.php?id=<?= $ele['id']; ?>"><button style="background-color: black; color:pink;">Ubah</button></a>
            <a href="hapus.php?id=<?= $ele['id']; ?>" onclick="return confirm('Hapus Data ?')"><button style="background-color: red; color:white;">Hapus</button></a>
          </td>
          <td><img src=" ../assets/img/<?= $ele['gambar']; ?>" alt=""></td>
          <td><?= $ele['nama_barang']; ?></td>
          <td><?= $ele['RAM']; ?></td>
          <td><?= $ele['memory_internal']; ?></td>
          <td><?= $ele['kamera_belakang']; ?></td>
          <td><?= $ele['kamera_depan']; ?></td>
          <td><?= $ele['harga']; ?></td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    <?php endif; ?>
  </table>
  <div class="logout">
    <a href="logout.php">Logout</a>
  </div>
</body>

</html>