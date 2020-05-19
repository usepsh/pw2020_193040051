<?php
require 'php/functions.php';
$elektronik = query("SELECT * FROM elektronik")
?>

<html>

<head>
    <title>Index</title>
</head>

<body style="background-color: #ff00d9;">
    <h1 style="text-align: center; font-variant:small-caps; text-decoration: underline; color:aqua">Samsung</h1><br>
    <div class=" container">
        <?php foreach ($elektronik as $ele) : ?>
            <ul type="square">
                <li class="nama_barang">
                    <a href="php/detail.php?id=<?= $ele['id'] ?>" style="text-decoration: none; color:aqua">
                        <?= $ele["nama_barang"] ?>
                    </a>
                </li>
            </ul>
        <?php endforeach; ?>
    </div>
    <br>
    <button type="" style="color: black;">Ke Halaman => <a href="php/admin.php" style="color: aqua;">Admin</a></button>
</body>

</html>