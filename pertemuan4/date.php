<?php
/*
Fakih Favian Wibowo
203040073
https://github.com/fakihfavian24/pw2021_203040073
Pertemuan 4 - 26 Februari 2021
Mempelajari mengenai FUNCTION
*/
?>
<?php
// Date
// Untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time();
// echo date("l", time()-60*60*24*100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,2,24,2002));


// strtotime
echo date("l", strtotime("25 aug 1985"));
?>