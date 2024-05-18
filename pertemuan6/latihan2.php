<?php 
    // $siswa = [
    //     ["Jamaro", "081234567", "Jamaro@gmail.com", "SIJA"],
    //     ["Radit", "081754678", "Radit@gmail.com", "SIJA"],
    //     ["081964572", "Hanif", "Hanif@gmail.com", "SIJA"]
        
    // ];


    // Array Associative
    // definisinya sama seperti assay numerik, kecuali
    // key-nya adalah string yang kita buat sendiri
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
        ],
        [ 
        "nama" => "amri", 
        "nomor" => "087468685",
        "email" => "amri@gmail.com",
        "jurusan" => "SIJA",
        "gambar" => "amri.jpeg"
        ],
        [ 
        "nama" => "fariz", 
        "nomor" => "0816544324",
        "email" => "fariz@gmail.com",
        "jurusan" => "SIJA",
        "gambar" => "fariz.jpeg"
        ],
        [ 
        "nama" => "syamsul", 
        "nomor" => "0818554574",
        "email" => "syamsul@gmail.com",
        "jurusan" => "SIJA",
        "gambar" => "syamsul.jpeg"
        ],
        [ 
        "nama" => "reynaldi", 
        "nomor" => "0819769932",
        "email" => "reynaldi@gmail.com",
        "jurusan" => "SIJA",
        "gambar" => "reynaldi.jpeg"
        ],
        [ 
        "nama" => "reyval", 
        "nomor" => "0816745775",
        "email" => "reyval@gmail.com",
        "jurusan" => "SIJA",
        "gambar" => "reyval.jpeg"
        ],
        [ 
        "nama" => "hanif", 
        "nomor" => "087548842",
        "email" => "hanif@gmail.com",
        "jurusan" => "SIJA",
        "gambar" => "hanif.jpeg"
        ],
        [ 
        "nama" => "raya", 
        "nomor" => "0874578844",
        "email" => "raya@gmail.com",
        "jurusan" => "SIJA",
        "gambar" => "raya.jpeg"
        ],
        [ 
        "nama" => "abiyu", 
        "nomor" => "0874583221",
        "email" => "abiyu@gmail.com",
        "jurusan" => "SIJA",
        "gambar" => "abiyu.jpeg"
        ]
    ];

     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar siswa</title>
    <style>
        img{
            width: 10rem
        }
    </style>
</head>
<body>
    <h1>Daftar siswa</h1>

    <?php foreach($siswa as $mhs) : ?>
    <ul>
       
        <li>
           <a href="latihan3.php?nama=<?= $mhs["nama"]; ?>&nomor=<?= $mhs["nomor"]; ?>&email=<?= $mhs["email"] ?>&jurusan=<?= $mhs ["jurusan"] ?>&gambar=<?= $mhs ["gambar"] ?>"> Nama : <?php echo $mhs ["nama"] ?> </a>
        </li>
    </ul>
    <?php endforeach; ?>

    <a href="login.php">kembali</a>
</body>
</html>

