<?php

/*
Fakih Favian Wibowo
203040073
https://github.com/fakihfavian24/pw2021_203040073
Pertemuan 6 - 12 Maret 2021
Mempelajari mengenai Assosciative Array
*/

?>

<?php
// $mahasiswa = [
//     ["Fakih Favian Wibowo", "203040073", "fakihfavianwibowo@gmail.com", "Teknik Informatika"],
//     ["Asep Kurniawan", "203040076", "Teknik Indistri", "asepkurniawan@gmail.com"]
// ];

// Array Associative
// definisinya sama seprti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nrp" => "203040073",
        "nama" => "Fakih Favian Wibowo",
        "email" => "fakihfavianwibowo@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "Fakih.jpg"
    ],
    [
        "nama" => "Eric",
        "nrp" => "203040074",
        "email" => "eric@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "Foto.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
    <li>
        <img src="img/<?= $mhs ["gambar"]; ?>">"
    </li>
    <li>Nama : <?= $mhs["nama"]; ?></li>
    <li>NRP : <?= $mhs["nrp"]; ?></li>
    <li>Jurusan : <?= $mhs["email"]; ?></li>
    <li>Email : <?= $mhs["jurusan"]; ?></li>
</ul>
<?php endforeach; ?>
    
</body>
</html>