<?php
require 'functions.php';

$laptop = query("SELECT * FROM laptop");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="13" cellspacing="0">
        <tr>
            <th>#</th>
            <th>opsi</th>
            <th>picture</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Category</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($laptop as $l) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href=""><button>Ubah</button></a>
                    <a href=""><button>Hapus</button></a>
                </td>
                <td><img src="../assets/img/<?= $l["picture"]; ?>" alt=""></td>
                <td><?= $l["name"]; ?></td>
                <td><?= $l["description"]; ?></td>
                <td><?= $l["price"]; ?></td>
                <td><?= $l["category"]; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
    </table>
</body>
</html>