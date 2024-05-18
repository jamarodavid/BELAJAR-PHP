<?php 
    // $_GET
    
    $siswa= [
        [ 
        "nama" => "jamaro", 
        "email" => "jamaro@gmail.com",
        "nomor" => "081234567",
        "jurusan" => "SIJA",
        "gambar" => "jamaro.jpeg"
        ],
        [ 
        "nama" => "radit", 
        "nomor" => "0816545674",
        "email" => "radit@gmail.com",
        "jurusan" => "SIJA",
        "gambar" => "radit.jpeg"
        ]
        ]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
    <style>
        img{
            width: 10rem;
        }
    </style>
</head>
<body>
    <h1>nama siswa</h1>
    <ul>
    <?php foreach($siswa as $a) : ?>
    
    <li>
        <a href="latihan2.php?nama=<?= $a["nama"]; ?>&nomor=<?= $a["nomor"] ?>&email=<?= $a["email"] ?>&jurusan=<?= $a["jurusan"] ?>&gambar=<?= $a["gambar"] ?>"><?= $a["nama"]; ?></a>
    </li>
    
        
        
    <?php endforeach ?>
    </ul>
    
</body>
</html>