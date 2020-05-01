<?php
require 'functions.php';

$id = $_GET['id'];
$ele = query("SELECT * FROM elekronik WHERE id = $id")[0];

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
  <title>Document</title>
</head>

<body>
  <h3>Form Ubah Data HP Samsung</h3>
  <form action="" method="post">
    <ul>
      <input type="hidden" name="id" id="id" value="<?= $ele['id']; ?>">
      <li>
        <label for="gambar">Gambar :</label>
        <input type="text" name="gambar" id="gambar" required><br></br>
      </li>
      <li>
        <label for="nama_barang">Nama Barang :</label>
        <input type="text" name="nama_barang" id="nama_barang" required value="<?= $ele['nama_barang']; ?>"><br></br>
      </li>
      <li>
        <label for="RAM">RAM :</label>
        <input type="text" name="RAM" id="RAM" required value="<?= $ele['RAM']; ?>"><br></br>
      </li>
      <li>
        <label for="memory_internal">Memory Internal :</label>
        <input type="text" name="memory_internal" id="memory_internal" required value="<?= $ele['memory_internal']; ?>"><br></br>
      </li>
      <li>
        <label for="kamera_belakang">Kamera Belakang :</label>
        <input type="text" name="kamera_belakang" id="kamera_belakang" required value="<?= $ele['kamera_belakang']; ?>"><br></br>
      </li>
      <li>
        <label for="kamera_depan">kamera Depan :</label>
        <input type="text" name="kamera_depan" id="kamera_depan" required value="<?= $ele['kamera_depan']; ?>"><br></br>
      </li>
      <li>
        <label for="harga">Harga :</label>
        <input type="text" name="harga" id="harga" required value="<?= $ele['harga']; ?>"><br></br>
      </li>

    </ul>
    <button type="submit" name="tambah">Ubah Data!</button>
    <button type="sumbit"><a href="index.php" style="text-decoration: none; color: black;">Kembali</a></button>
  </form>
</body>

</html>