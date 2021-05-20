<?php
/*
Fakih Favian Wibowo
203040073
SHIFT Jum'at 10:00 - 11:00
Informatika - B
*/
?>
<?php
if (!isset($_GET['id'])) {
    header("location: admin.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];

$laptop = query("SELECT * FROM laptop WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail</title>
</head>
<body>
<div class="container">
    <div class="gambar">
        <img src="../assets/img/<?= $laptop["picture"]; ?>" alt="">
    </div>
    <div class="keterangan">
        <p><?= $laptop["name"]; ?></p>
        <p><?= $laptop["description"]; ?></p>
        <p><?= $laptop["price"]; ?></p>
        <p><?= $laptop["category"]; ?></p>
    </div>

    <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
</div>    
</body>
</html>