<?php 
    // Date untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y");


    // time
    // UNIX Timestamp / EPOCH time
    // detik yang sudah berlalu sejak 1 januari 1970
    // echo time();

    // echo date("d-M-Y", time()+60*60*24*6);


    // mktime
    // membuat detik kita sendiri
    // mktime(0,0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun
    // echo date ("l", mktime(0,0,0,1,5,2007));


    // strtotime
    // echo date ("l",strtotime("5 jan 2007"));

    // $x="jamaro";
    // $y="saragih";
    // $z="jamaro david saragih";

    // STRING
    // echo strlen($x); 
    // guna menghitung panjang dari sebuah string

    // echo strcmp();
//     $var1 = "Hello";
//     $var2 = "hello";
//     if (strcmp($var1, $var2) !== 0) {
//     echo '$var1 is not equal to $var2 in a case sensitive string comparison';
// }
    // string compair untuk menggabungkan 2 string

    // echo explode($);
    // $potongan = explode( " ", $z);
    // echo $potongan[0];
    // echo $potongan[2];

    // guna untuk memecah sebuah string menjadi array 
    // atau  untuk memisahkan string menjadi potongan-potongan berdasarkan delimiter tertentu


    // echo htmlspecialchars($x);
    // digunakan untuk mengonversi karakter khusus menjadi entitas HTML
    // $teks = "<h1>Contoh Teks</h1>";
    // echo htmlspecialchars($teks);


    // UTILITY
    // echo isset($y);
    // guna untuk apakah sebuah variable sudah di bikin atau belum, jika belum maka isset akan menghasilkan false 


    // echo empty($y);
    // kebalikannya

    // die()
    // untuk menghentikan program kita, dan mencetak pesan yang diberikan


    // sleep()
    // untuk menghentikan sementara atau dalam jangka waktu tertentu


?>