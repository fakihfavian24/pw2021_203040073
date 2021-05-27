<?php
/*
Fakih Favian Wibowo
203040073
SHIFT Jum'at 10:00 - 11:00
Informatika - B
*/
?>
<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
// menghubungkan dengan file php lainnya
require 'functions.php';

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
    <link rel="stylesheet" href="../css/admin2.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

    <title>Halaman Admin</title>
</head>

<body>

    <div class="navbar-fixed">
        <nav class="grey lighten-1">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo">Admin</a>

                </div>
            </div>
        </nav>
    </div>

    <br>
    <p><a href="logout.php" class="tbl-red"><i class="fas fa-sign-out-alt"></i> Sign out</a></p>
    <br>

    <p><a href="tambah.php" class="tbl-pink"><i class="fas fa-plus-circle"></i> Tambah Data</a></p>
    <br>



    <div class="input">
        <form action="" method="post">

            <input type="text" name="keyword" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
            <button type="submit" name="cari"><i class="Tiny material-icons">search</i></button>

        </form>
    </div>
    <br>

    <div class="font">
        <div class="container mt-3 mb-3 text-center">
            <table class="table table-bordered table-hover highlight - centered white">
                <thead>
                    <tr class="grey lighten-3">
                        <th scope="col">No</th>
                        <th scope="col">Picture</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Category</th>
                        <th scope="col">Opsi</th>
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
                                    <img src="../assets/img/<?= $l["picture"]; ?>">
                                </td>
                                <td><?= $l["name"]; ?></td>
                                <td><?= $l["description"]; ?></td>
                                <td><?= $l["price"]; ?></td>
                                <td><?= $l["category"]; ?></td>
                                <td class="opsi">
                                    <a href="ubah.php?id=<?= $l['id'] ?>" class="tbl-hijau"><i class="fas fa-edit"></i></a>
                                    <a href="hapus.php?id=<?= $l['id'] ?>" onclick="return confirm('Hapus Data??')" class="tbl-merah"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>

            </table>
        </div>
    </div>


    <br>

</body>

</html>