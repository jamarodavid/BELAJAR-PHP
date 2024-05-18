<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail siswa</title>
    <style>
        img{
            width: 10rem
        }
    </style>
</head>
<body>
    <img src="img/<?php echo $_GET['gambar'] ?>" alt="">
    <h1>Detail Siswa</h1>
    <li><?php echo $_GET["nama"]; ?></li>
    <li><?php echo $_GET["nomor"] ?></li>
    <li><?php echo $_GET["email"] ?></li>
    <li><?php echo $_GET["jurusan"] ?></li>

    <a href="latihan2.php">kembali</a>
</body>
</html>