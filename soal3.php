<?php
/*
Fakih Favian Wibowo
203040073
UTS soal no 3
Informatika - B
*/
?>

<?php
function cetak_bintang($angka)
{
    for ($i = $angka; $i > 0; $i--) {
        for ($j = $angka; $j >= $i; $j--) {
            echo "*";
        }
        echo "<br>";
    }
}
cetak_bintang(5);
cetak_bintang(7);


?>