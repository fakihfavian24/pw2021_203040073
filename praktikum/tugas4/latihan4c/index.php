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
    <div class="container">
        <?php foreach($laptop as $l) : ?>
                <p class="name">
                    <a href="php/detail.php?id=<?= $l['id'] ?>">
                        <?= $l["name"] ?>
                    </a>
                </p>
                <?php endforeach; ?>
    </div>
</body>
</html>