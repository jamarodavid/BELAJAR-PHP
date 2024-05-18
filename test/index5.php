<?php 
    session_start();
    if(!isset($_SESSION["login"])){
        header("Location: login.php");
        exit;
    }
    require "functions.php";
    $jumlahDataPerHalaman = 2;
    $jumlahData = count(query("SELECT * FROM siswa"));
    $jumlah = ceil($jumlahData / $jumlahDataPerHalaman);
    $halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;

    $awalData = ($halamanAktif * $jumlahDataPerHalaman) - $jumlahDataPerHalaman; 
    
    
    $siswa = query("SELECT * FROM siswa LIMIT $awalData, $jumlahDataPerHalaman");

    if(isset($_POST["cari"])){

       $siswa = cari($_POST["keyword"]);
    }
    
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data siswa</title>
    <style>
        img{
            width:6rem;
        }
    </style>
</head>
<body>
    <a href="logout.php">logout</a>

<h1>data siswa</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name ="keyword" >
        <button type="submit" name="cari" >cari</button>
    </form>

    <?php for($i = 1; $i <= $jumlah; $i++) : ?>
        <a href="?halaman=<?=$i?>"><?php echo $i ?></a>
      
    <?php endfor; ?>
      
    <a href="tambah.php">tambah</a>

    <?php foreach ($siswa as $sis) : ?>
        <br><br>
       <a href="edit.php?id=<?= $sis["id"] ?>">edit</a> 
        <a href="hapus.php?id=<?=$sis["id"] ?>"> hapus</a>
        <td><img src="img/<?=$sis["gambar"] ?>" alt=""></td>
        <li><?= $sis["nama"] ?></li>
        <li><?= $sis["nomor"] ?></li>
        <li><?= $sis["email"] ?></li>
        <li><?= $sis["jurusan"] ?></li>
    <?php endforeach ?>

    
</body>
</html>