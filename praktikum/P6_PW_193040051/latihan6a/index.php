<?php

require 'php/functions.php';

$elektronik = query("SELECT * FROM elektronik")
?>

<html>

<head>
    <title>Latihan6a_193040051</title>
    <link rel="stylesheet" href="css/styleCindex.css" type="text/css">
</head>

<body>
    <center>
        <h1>HP Samsung</h1>
        <div class="container">
            <?php foreach ($elektronik as $ele) : ?>
                <P class="tipe">
                    <a href="php/detail.php?id=<?= $ele['id'] ?>">
                        <?= $ele["nama_barang"] ?>
                    </a>
                </P>
            <?php endforeach; ?>
        </div>
    </center>
</body>

</html>