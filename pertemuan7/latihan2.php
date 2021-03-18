<?php
/*
Fakih Favian Wibowo
203040073
https://github.com/fakihfavian24/pw2021_203040073
Pertemuan 7 - 18 Maret 2021
Mempelajari mengenai GET & POST
*/
?>

<?php
// cek apakah tidak ada data di $_GET
if( !isset($_GET["model"]) || 
    !isset($_GET["merk"]) ||
    !isset($_GET["tahun"]) ||
    !isset($_GET["transmisi"]) ||
    !isset($_GET["gambar"]) ) {
    // redirect
    header("Location: latihan1.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Detail Mobil</title>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
        <li><?= $_GET["model"]; ?></li>
        <li><?= $_GET["merk"]; ?></li>
        <li><?= $_GET["tahun"]; ?></li>
        <li><?= $_GET["transmisi"]; ?></li>
    </ul>

    <a href="latihan1.php">Kembali ke Daftar Mobil</a>



</body>
</html>