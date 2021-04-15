<?php

require 'functions.php';

$id = $_GET['id'];
$l = query("SELECT * FROM laptop WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil diubah!');
                    document.location.href = '../admin.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data Gagal diubah!');
                    document.location.href = '../admin.php';
                </script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h3>Form Ubah Data</h3>
    <form action="" method="post">
                <input type="hidden" name="id" value="<?= $l['id']; ?>">

        <ul>
            <li>
                <label for="picture">Picture :</label><br>
                <input type="text" name="picture" id="picture" required value="<?= $l['picture']; ?>"><br><br>
            </li>

            <li>
                <label for="name">Name :</label><br>
                <input type="text" name="name" id="name" required value="<?= $l['name']; ?>"><br><br>
            </li>

            <li>
                <label for="description">Description :</label><br>
                <input type="text" name="description" id="description" required value="<?= $l['description']; ?>"><br><br>
            </li>

            <li>
                <label for="price">Price :</label><br>
                <input type="text" name="price" id="price" required value="<?= $l['price']; ?>"><br><br>
            </li>

            <li>
                <label for="category">Category :</label><br>
                <select name="category" id="category" required value="<?= $l['category']; ?>">
                    <option value="">--------------- Pilih Category ---------------</option>
                    <option value="Laptop">Laptop</option>
                    <option value="Handphone">Handphone</option>
                    <option value="Laptop">TV</option>
                    <option value="Laptop">Komputer</option>
                    </select>
            </li>
            <br>
            <button type="submit" name="ubah">Ubah Data!</button>
            <button type="submit">
            <a href="../admin.php">Kembali</a>
            </button>
        </ul>
    </form>
</body>
</html>