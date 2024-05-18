<?php 
    // cek apakah tidak ada data di $_GET
    if( !isset($_GET["nama"]) || 
        !isset($_GET["nomor"])  ||
        !isset($_GET["email"])  ||
        !isset($_GET["jurusan"])  ||
        !isset($_GET["gambar"])
        ) {
        // redirect
        header("Location: latihan1.php");
        exit;
    } 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail siswa</title>
</head>
<style>
    img{
        width:10rem;
    }
</style>
<body>

<ul>
    <li><img src="img/<?php echo $_GET['gambar'] ?>" alt="" srcset=""></li>
    <li><?php echo $_GET["nama"]; ?></li>
    <li><?php echo $_GET["nomor"]; ?></li>
    <li><?php echo $_GET["email"] ?></li>
    <li><?php echo $_GET["jurusan"] ?></li>
</ul>

<a href="latihan1.php">kembali</a>
    
</body>
</html>