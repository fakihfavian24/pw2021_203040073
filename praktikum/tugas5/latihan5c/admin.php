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
$laptop = query("SELECT * FROM laptop")
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
    <link rel="stylesheet" href="css/style2.css">
    <title>Daftar Laptop</title>
</head>
<body>

<h3>Daftar Harga Laptop 2021</h3><br>
<div class="add">
    <a href="php/tambah.php"><button>Tambah Data</button></a>
    <br><br>
</div>

<div class="container mt-3 mb-3 text-center">
        <table class="table table-bordered table-hover highlight - centered grey lighten-5">
            <thead>
                <tr class=" ">
                    <th scope="col">No</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Name</th>
                    <th scope="col">Detail</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
        <tbody>
            <?php foreach($laptop as $lp => $l) : ?>
            <tr>
                <td><?= $lp+1 ?></td>
                <td>
                    <img src="assets/img/<?= $l["picture"]; ?>">
                </td>
                <td><?= $l["name"]; ?></td>
                <td>
                <button class="name">
                    <a href="php/detail.php?id=<?= $l['id'] ?>"<?= $l["name"] ?>>Detail</a>
                </button>
                </td>
                <td>
                    <a href=""><button>Ubah</button></a>
                    <a href="php/hapus.php?id=<?= $l['id']?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </div>
</body>
</table>
</html>