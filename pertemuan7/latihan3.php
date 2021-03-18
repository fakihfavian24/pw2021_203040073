<?php
/*
Fakih Favian Wibowo
203040073
https://github.com/fakihfavian24/pw2021_203040073
Pertemuan 7 - 18 Maret 2021
Mempelajari mengenai GET & POST
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>POST</title>
</head>
<body>

    <?php if( isset($_POST["submit"]) ) : ?>
        <h1>Halo, Selamat Datang <?= $_POST["nama"]; ?></h1>
    <?php endif; ?>

    <form action="" method="post">
        Masukkan nama :
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim!</button>
    </form>




</body>
</html>