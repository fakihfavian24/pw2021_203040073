<?php
/*
Fakih Favian Wibowo
203040073
SHIFT Jum'at 10:00 - 11:00
Informatika - B
*/
?>
<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukan query
$laptop = query("SELECT * FROM laptop");

if (isset($_POST["cari"])) {
    $laptop = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleindex1.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Daftar Laptop</title>
</head>

<body>

    <div class="navbar-fixed">
        <nav class="blue darken-2">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo">centralstore</a>
                    <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="" class="tbl">Home</a></li>
                        <li><a href="php/login.php" class="tbl">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="admin">
        <a href="php/login.php" class="tbl-grey">Masuk ke halaman Admin</a>
    </div>
    <br>

    <div class="input">
        <form action="" method="post">

            <input type="text" name="keyword" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
            <button type="submit" name="cari"><i class="Tiny material-icons">search</i></button>

        </form>
    </div>
    <br>
    <br>
    <br>
    <div class="font">
        <div class="container mt-3 mb-3 text-center">
            <table class="table table-bordered table-hover highlight - centered white">
                <thead>
                    <tr class="light-blue darken-3">
                        <th scope="col">No</th>
                        <th scope="col">Picture</th>
                        <th scope="col">Name</th>
                        <th scope="col">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($laptop)) : ?>
                        <tr>
                            <td colspan="7">
                                <h1>Data tidak ditemukan</h1>
                            </td>
                        </tr>
                    <?php else : ?>
                        <?php foreach ($laptop as $lp => $l) : ?>
                            <tr>
                                <td><?= $lp + 1 ?></td>
                                <td>
                                    <img src="assets/img/<?= $l["picture"]; ?>">
                                </td>
                                <td><?= $l["name"]; ?></td>
                                <td>
                                    <p><a href="php/detail.php?id=<?= $l['id'] ?>" class="tbl-biru" <?= $l["name"] ?>>Detail</a></p>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
        </div>
    </div>
</body>
</table>
<br>

</html>



<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

<title>Search</title>
</head>

<body>

    <div class="search-box">
        <input class="search-txt" type="text" name="keyword" placeholder="Type to search">
        <a class="search-btn" href="#">
            <i class="fas fa-search"></i>
        </a>
    </div>





    <!-- <div class="container">
        <div class="row">
            <div class="col">
                <div class="gambar">
                    <img src="../assets/img/<?= $laptop["picture"]; ?>" alt="">
                </div>
            </div>

            <div class="col">
                <div class="keterangan">
                    <p><?= $laptop["name"]; ?></p>
                    <p><?= $laptop["description"]; ?></p>
                    <p><?= $laptop["price"]; ?></p>
                    <p><?= $laptop["category"]; ?></p>
                </div>
                <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
            </div>
        </div>
    </div> -->