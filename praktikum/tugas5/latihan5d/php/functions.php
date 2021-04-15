<?php
/*
Fakih Favian Wibowo
203040073
SHIFT Jum'at 10:00 - 11:00
Informatika - B
*/
?>
<?php
// fungsi untuk melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "pw_tubes_203040073");
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040073");

    return $conn;
}

// function untuk melakukan query dan memasukkannya kedalam array
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $laptop = [];
    while ($l = mysqli_fetch_assoc($result)) {
        $laptop[] = $l;
    };
    return $laptop;
}

function tambah($data)
{
    $conn = koneksi();
    
    $picture = htmlspecialchars($data["picture"]);
    $name = htmlspecialchars($data["name"]);
    $description = htmlspecialchars($data["description"]);
    $price = htmlspecialchars($data["price"]);
    $category = htmlspecialchars($data["category"]);

    $query = "INSERT INTO laptop
                VALUES
                ('', '$picture', '$name', '$description', '$price', '$category')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();

    mysqli_query($conn, "DELETE FROM laptop WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();
    
    $id = $data["id"];
    $picture = htmlspecialchars($data["picture"]);
    $name = htmlspecialchars($data["name"]);
    $description = htmlspecialchars($data["description"]);
    $price = htmlspecialchars($data["price"]);
    $category = htmlspecialchars($data["category"]);

    $query = "UPDATE laptop SET
                picture = '$picture',
                name = '$name',
                description = '$description',
                price = '$price',
                category = '$category'
                WHERE id = $id
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>