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
    $l = [];
    while ($lp = mysqli_fetch_assoc($result)) {
        $l[] = $lp;
    }
    return $l;
}
?>