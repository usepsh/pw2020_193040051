<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';

$id = $_GET['id'];
$ele = query("SELECT * FROM elektronik WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('Data berhasil diubah!');
            document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
            alert('Data gagal diubah!');
            document.location.href = 'admin.php';
          </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Ubah</title>
</head>

<body style="background-color: blue;">
  <h2 style="text-align: center; color: red;">Form Ubah Data</h2>
  <form action="" method="post">
    <ul>
      <li><input type="hidden" name="id" id="id" value="<?= $ele['id']; ?>"></li>
      <li>
        <label for="gambar">Gambar : </label><br>
        <input type="text" name="gambar" id="gambar" required value="<?= $ele['gambar']; ?>"><br><br>
      </li>
      <li>
        <label for="nama_barang">Nama Barang : </label><br>
        <input type="text" name="nama_barang" id="nama_barang" required value="<?= $ele['nama_barang']; ?>"><br><br>
      </li>
      <li>
        <label for=" RAM">RAM : </label><br>
        <input type="text" name="RAM" id="RAM" required value="<?= $ele['RAM']; ?>"><br><br>
      </li>
      <li>
        <label for=" memory_internal">Memori Internal : </label><br>
        <input type="text" name="memory_internal" id="memory_internal" required value="<?= $ele['memory_internal']; ?>"><br><br>
      </li>
      <li>
        <label for=" kamera_belakang">Kamera belakang : </label><br>
        <input type="text" name="kamera_belakang" id="kamera_belakang" required value="<?= $ele['kamera_belakang']; ?>">br><br>
      </li>
      <li>
        <label for=" kamera_depan"></label>Kamera depan : <br>
        <input type="text" name="kamera_depan" id="kamera_depan" required value="<?= $ele['kamera_depan']; ?>"><br><br>
      </li>
      <li>
        <label for=" harga">Harga : </label><br>
        <input type="text" name="harga" id="harga" required value="<?= $ele['harga']; ?>"><br><br>
      </li>
      <button type=" submit" name="ubah">Ubah Data!</button>
      <button type="submit">
        <a href="../index.php" style="text-decoration: none; color:black">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>