<?php
/*
Fakih Favian Wibowo
203040073
SHIFT Jum'at 10:00 - 11:00
Informatika - B
*/
?>
<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukan query
$laptop = query("SELECT * FROM laptop")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Daftar Harga Laptop 2021</title>
</head>
<body>
    <div class="container mt-5 mb-5 text-left">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Category</th>
                </tr>
            </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach($laptop as $l) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <img src="assets/img/<?= $l["picture"]; ?>">
                </td>
                <td><?= $l["name"]; ?></td>
                <td><?= $l["description"]; ?></td>
                <td><?= $l["price"]; ?></td>
                <td><?= $l["category"]; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </div>
</body>
</table>
</html>