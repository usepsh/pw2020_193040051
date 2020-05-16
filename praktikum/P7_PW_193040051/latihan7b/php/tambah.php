<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data berhasil ditambahkan!');
            document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
            alert('Data gagal ditambahkan!');
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
  <title>Tambah</title>
</head>

<body style="background-color: blue;">
  <h2 style="text-align: center; color: red;">Form Tambah Data</h2>
  <form action="" method="post">
    <ul>
      <li>
        <label for="gambar">Gambar : </label><br>
        <input type="text" name="gambar" id="gambar" required><br><br>
      </li>
      <li>
        <label for="nama_barang">Nama Barang : </label><br>
        <input type="text" name="nama_barang" id="nama_barang" required><br><br>
      </li>
      <li>
        <label for="RAM">RAM : </label><br>
        <input type="text" name="RAM" id="RAM" required><br><br>
      </li>
      <li>
        <label for="memory_internal">Memori Internal : </label><br>
        <input type="text" name="memory_internal" id="memory_internal" required><br><br>
      </li>
      <li>
        <label for="kamera_belakang">Kamera belakang : </label><br>
        <input type="text" name="kamera_belakang" id="kamera_belakang" required><br><br>
      </li>
      <li>
        <label for="kamera_depan"></label>Kamera depan : <br>
        <input type="text" name="kamera_depan" id="kamera_depan" required><br><br>
      </li>
      <li>
        <label for="harga">Harga : </label><br>
        <input type="text" name="harga" id="harga" required><br><br>
      </li>
      <button type="submit" name="tambah">Tambah Data!</button>
      <button type="submit">
        <a href="../index.php" style="text-decoration: none; color:black">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>