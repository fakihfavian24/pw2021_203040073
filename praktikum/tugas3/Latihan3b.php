<?php
/*
Fakih Favian Wibowo
203040073
SHIFT Jum'at 10:00 - 11:00
Informatika - B
*/
?>

<?php
$pemainbola = [
    "Mohammad Salah",
    "Cristiano Ronaldo",
    "Lionel Messi",
    "Zlatan Ibrahimovic",
    "Neymar Jr"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pemain Bola</title>
</head>
<body>
    <h3>Daftar Pemain Bola Terkenal</h3>
    <ol>
        <?php foreach($pemainbola as $pb) {
            echo "<li>$pb</pb>";
        }
        ?>
    </ol>

    <?php
    array_push($pemainbola, "Luca Modric", "Sadio Mane");
    sort($pemainbola);
    ?>
    <h3>Daftar Pemain Bola Terkenal Baru</h3>
    <ol>
        <?php foreach($pemainbola as $pb) {
            echo "<li>$pb</pb>";
        }
        ?>
    </ol>
</body>
</html>