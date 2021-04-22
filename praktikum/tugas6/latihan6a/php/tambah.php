<?php

require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil ditambahkan!');
                    document.location.href = 'admin.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data Gagal ditambahkan!');
                    document.location.href = 'admin.php';
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
    <h3>Form Tambah Data</h3>
    <form action="" method="post">
        <ul>
            <li>
                <label for="picture">Picture :</label><br>
                <input type="text" name="picture" id="picture" required><br><br>
            </li>

            <li>
                <label for="name">Name :</label><br>
                <input type="text" name="name" id="name" required><br><br>
            </li>

            <li>
                <label for="description">Description :</label><br>
                <input type="text" name="description" id="description" required><br><br>
            </li>

            <li>
                <label for="price">Price :</label><br>
                <input type="text" name="price" id="price" required><br><br>
            </li>

            <li>
                <label for="category">Category :</label><br>
                <select name="category" id="category" required>
                    <option value="">--------------- Pilih Category ---------------</option>
                    <option value="Laptop">Laptop</option>
                    <option value="Handphone">Handphone</option>
                    <option value="Laptop">TV</option>
                    <option value="Laptop">Komputer</option>
                    </select>
            </li>
            <br>
            <button type="submit" name="tambah">Tambah Data!</button>
            <button type="submit">
            <a href="admin.php">Kembali</a>
            </button>
        </ul>
    </form>
</body>
</html>