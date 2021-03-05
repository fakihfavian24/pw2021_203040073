<?php
$mahasiswa = [
    ["Fakih Favian Wibowo", "203040073", "Teknik Informatika", "fakihfavianwibowo@gmail.com"],
    ["Asep Kurniawan", "203040076", "Teknik Indistri", "asepkurniawan@gmail.com"],
    ["Erik", "203040078", "Teknik Planologi", "erik@gmail.com"]

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
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>
    
</body>
</html>