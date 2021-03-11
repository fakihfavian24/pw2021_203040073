<?php
/*
Fakih Favian Wibowo
203040073
SHIFT Jum'at 10:00 - 11:00
Informatika - B
*/
?>

<?php
function tumpukanBola($tumpukan) {
    for($x = 1; $x <= $tumpukan; $x++ ) {
        for ($y = 1; $y <= $x; $y++ ) {
            echo "<div class= \"lingkaran\">$x</div>";
        }
    echo "<br>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .lingkaran {
            width: 50px;
            height: 50px;
            background-color: salmon;
            border-radius: 100%;
            text-align: center;
            line-height: 50px;
            display: inline-block;
            margin: 2px;
        }
    </style>
</head>
<body>
    <?php tumpukanBola(5); ?>

    
</body>
</html>