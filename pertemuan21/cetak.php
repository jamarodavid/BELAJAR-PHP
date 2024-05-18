<?php 
    require_once __DIR__ . '/vendor/autoload.php';

    require 'functions.php';
    $siswa = query("SELECT * FROM siswa ");

    $mpdf = new \Mpdf\Mpdf();
    $html = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Document</title>
    </head>
    <body>
    <h1> siswa </h1>
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Gambar</th>
        <th>Nomor</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>';

    $i = 1;
    foreach($siswa as $sis) {
        $html .= '<tr>
            <td>'.$i++.'</td>
            <td><img src="img/'. $sis["gambar"] .'" width="6rem" ></td>
            <td>'. $sis["nomor"] .'</td>
            <td>'. $sis["nama"] .'</td>
            <td>'. $sis["email"] .'</td>
            <td>'. $sis["jurusan"] .'</td>
            
        </tr>';
    }

$html .=    '</table>
    </body>
    </html>';
    $mpdf->WriteHTML($html);
    $mpdf->Output('daftar-siswa.pdf', \Mpdf\Output\Destination::INLINE);
?>

