<?php
/*
Fakih Favian Wibowo
203040073
SHIFT Jum'at 10:00 - 11:00
Informatika - B
*/
?>
<?php
if (!isset($_GET['id'])) {
    header("location: admin.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];

$laptop = query("SELECT * FROM laptop WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/detail1.css">

    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Detail</title>
</head>

<body>


    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="../assets/img/<?= $laptop["picture"]; ?>" alt="Card image cap">
        <div class="card-body">
            <h6 class="card-text"><?= $laptop["category"]; ?></h6>
            <h5 class="card-title"><?= $laptop["name"]; ?></h5>
            <p class="card-text"><?= $laptop["description"]; ?></p>
            <p class="card-text"><?= $laptop["price"]; ?></p>

            <a href="../index.php" class="btn btn-primary">Kembali</a>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>