<?php
/*
Fakih Favian Wibowo
203040073
SHIFT Jum'at 10:00 - 11:00
Informatika - B
*/
?>

<?php
$jawabanIsset = "Isset adalah = Digunakan untuk melakukan pemeriksaan apakah variabel sudah ada/sudah terbentuk atau belum <br></br>";
// sumber: https://medikre.com/stories/penggunaan-fungsi-empty-isset-dan-unset-pada-php
$jawabanEmpty = "Empty adalah = Digunakan untuk melakukan pemeriksaan apakah suatu variabel sudah terisi atau belum ";
// sumber: https://medikre.com/stories/penggunaan-fungsi-empty-isset-dan-unset-pada-php

$GOBALS['jawabanIsset'] = $jawabanIsset;
$GOBALS['jawabanEmpty'] = $jawabanEmpty;

function soal($style) {
    echo "<div class='$style'>"
    .$GLOBALS['jawabanIsset'] .$GLOBALS['jawabanEmpty'].
    "</div>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
    .box {
        border: 1px solid black;
        box-shadow: 0 0 3px black;
        padding: 13px;
        font-size: 20px;
    }
    </style>
</head>
<body>
    <?php
        echo soal("box");
    ?>
</body>
</html>