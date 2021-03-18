<?php
/*
Fakih Favian Wibowo
203040073
SHIFT Jum'at 10:00 - 11:00
Informatika - B
*/
?>

<?php
$laptop = [
    [
        "Picture" => "1.jpg",
        "Name" => "Lenovo IdeaPad C340-8JID / 8WID",
        "Description" => "Prosesor Core i3 8145U , Penyimpanan 512 GB SSD, RAM 8 GB, Ukuran Layar 14 inch",
        "Price" => "Rp 8.590.000 ",
        "Category" => "Laptop"

    ],
    [
        "Picture" => "2.jpg",
        "Name" => "ASUS E410MA-BV001T / BV002T / BV003T",
        "Description" => "Prosesor Celeron, Penyimpanan 512 GB SSD, RAM 4 GB, Ukuran Layar 14 inch",
        "Price" => "Rp 3.745.000",
        "Category" => "Laptop"

    ],
    [
        "Picture" => "3.jpg",
        "Name" => "ASUS X441BA-GA901T / GA902T / GA903T",
        "Description" => "Prosesor A-Series A9-9420, Penyimpanan 1 TB HDD, RAM 4 GB, Ukuran Layar 14 inch ",
        "Price" => "Rp 3.515.000",
        "Category" => "Laptop"

    ],
    [
        "Picture" => "4.jpg",
        "Name" => "Lenovo ThinkPad X220 | Core i5-2430M",
        "Description" => "Prosesor Core i5 2430M, Penyimpanan , RAM 4 GB, Ukuran Layar 15.6 inch",
        "Price" => "Rp 2.090.000",
        "Category" => "Laptop"

    ],
    [
        "Picture" => "5.jpg",
        "Name" => "ASUS X441MA-GA011T / GA012T / GA013T / GA014T",
        "Description" => "Prosesor N4000, Penyimpanan 1 TB HDD SSD, RAM 4 GB, Ukuran Layar 14 inch",
        "Price" => "Rp 4.230.000",
        "Category" => "Laptop"

    ],
    [
        "Picture" => "6.jpg",
        "Name" => "Lenovo IdeaPad S340-14API-CTID",
        "Description" => "Prosesor Ryzen 3, Penyimpanan 512 GB SSD, RAM 8 GB, Ukuran Layar 14 inch",
        "Price" => "Rp 6.327.000",
        "Category" => "Laptop"

    ],
    [
        "Picture" => "7.jpg",
        "Name" => "Acer Aspire ES1-432-C8ZP",
        "Description" => "Prosesor ntel® Celeron® dual-core processor N3350, Penyimpanan 500 GB HDD, RAM 2 TB, Ukuran Layar 14 inch",
        "Price" => "Rp 3.459.000",
        "Category" => "Laptop"

    ],
    [
        "Picture" => "8.jpg",
        "Name" => "HP OMEN 15-dc1111tx",
        "Description" => "Prosesor Core i7 Core i7-9750 H, Penyimpanan 1 TB 256 GB, RAM 8 GB, Ukuran Layar 15.6 inch",
        "Price" => "Rp 16.860.000",
        "Category" => "Laptop"

    ],
    [
        "Picture" => "9.jpg",
        "Name" => "Acer Swift 3 SF314-57-57S9",
        "Description" => "Prosesor , Penyimpanan 512 GB HDD, RAM 8 GB, Ukuran Layar 14 inch",
        "Price" => "Rp 8.589.000",
        "Category" => "Laptop"

    ],
    [
        "Picture" => "10.jpg",
        "Name" => "ASUS ROG GX531GX",
        "Description" => "Prosesor Core i7 8750HK, Penyimpanan 1 TB SSD, RAM 24 GB, Ukuran Layar 15.6 inch",
        "Price" => "
        Rp 47.499.000",
        "Category" => "Laptop"
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Daftar Harga Laptop 2021</title>
</head>
<body>
    <div class="container mt-5 mb-5 text-left">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Category</th>
                </tr>
            </thead>
        <tbody>
            <?php foreach($laptop as $lp => $l) : ?>
            <tr>
                <td><?= $lp+1 ?></td>
                <td>
                    <img src="img/<?= $l["Picture"]; ?>">
                </td>
                <td><?= $l["Name"]; ?></td>
                <td><?= $l["Description"]; ?></td>
                <td><?= $l["Price"]; ?></td>
                <td><?= $l["Category"]; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </div>
</body>
</table>
</html>