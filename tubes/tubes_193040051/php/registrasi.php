<?php

require 'functions.php';

if (isset($_POST["register"])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
            alert('Registrasi Berhasil!');
            document.location.href = 'login.php';
          </script>";
  } else {
    echo "<script>
            alert('Registrasi Gagal!');
          </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
</head>

<body style="background-color: #005eff;">
  <h1 style="text-align: center; font-variant:small-caps; text-decoration: underline;">Halaman Registrasi</h1>
  <br><br><br><br><br>
  <center>
    <form action="" method="post">
      <table style="background-color: #ff00d9;">
        <tr>
          <td><label for="username">Username</label></td>
          <td>:</td>
          <td><input type="text" name="username"></td>
        </tr>
        <tr>
          <td><label for="password">Password</label></td>
          <td>:</td>
          <td><input type="password" name="password"></td>
        </tr>
      </table>
      <br>
      <button type="submit" name="register" style="color: hotpink;">Register</button>
    </form>
  </center>
</body>

</html>