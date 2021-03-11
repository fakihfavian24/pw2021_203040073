<?php
/*
Fakih Favian Wibowo
203040073
SHIFT Jum'at 10:00 - 11:00
Informatika - B
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .tulisan {
            font-size: 28px;
            font-family: arial;
            color: #8c782d;
            font-weight: bolder;
            font-style: italic;
            padding: 5px;
        }

        .box {
            border-radius: 5px;
            box-shadow: 0 0 5px;
            border: 2px solid black;
            padding: 3px;
        }
    
    </style>
</head>
<body>
    
    <?php
    function gantiStyle($tulisan, $style1, $style2) {
        echo "<div class= '$style1'>
            <p class='$style2'> $tulisan </p> </div>";
    }
    ?>

    <?php
    echo gantiStyle("Selamat datang di Praktikum PW", "box", "tulisan")
    ?>
</body>
</html>