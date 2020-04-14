<?php 
    require 'php/functions.php';
    $elektronik = query("SELECT * FROM elektronik")
?>

<html>
    <head>
        <title>Latihan5c_19304051</title>
        <link rel="stylesheet" href="css/styleA.css" type="text/css">
    </head>
    <body>
    <h1><style>h1 { color: blue; text-align: center;}</style>Daftar Harga HP Samsung</h1>
        <div class="container">
            <?php foreach ($elektronik as $ele) : ?>
                <p class="nama_barang">
                    <a href="php/detail.php?id=<?= $ele['id'] ?>">
                        <?= $ele["nama_barang"] ?>
                    </a>
                </p>               
            <?php endforeach; ?>
        </div>
    </body>
</html>