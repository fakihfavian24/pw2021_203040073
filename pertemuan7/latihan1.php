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
// $_GET
$mobil = [
    [
        "model" => "XPANDER",
        "merk" => "Mitsubishi",
        "tahun" => "2019",
        "transmisi" => "Mt",
        "gambar" => "1.jpg"
    ],
    [
        "model" => "PAJERO SPORT",
        "merk" => "Mitsubishi",
        "tahun" => "2018",
        "transmisi" => "AT",
        "gambar" => "2.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mobil</title>
</head>
<body>
    <h1>Daftar Mobil</h1>
    <ul>
    <?php foreach( $mobil as $m ) : ?>
        <li>
            <a href="latihan2.php?model=<?= $m["model"]; ?>&merk=<?= $m["merk"]; ?>&tahun=<?= $m["tahun"]; ?>&transmisi=<?= $m["transmisi"]; ?>&gambar=<?= $m["gambar"]; ?>"><?= $m["model"]; ?></a>
        </li>
    <?php endforeach; ?>
    </ul>



</body>
</html>