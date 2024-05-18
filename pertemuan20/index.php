<?php 
session_start();

    if(!isset($_SESSION["login"])){
        header("Location: login.php");
        exit;
    }
    require 'functions.php';
    $siswa = query("SELECT * FROM siswa ");

    // jika tombol cari di tekan
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
    <title>Halaman Admin</title>
    <script src="jsa/jquery-3.7.1.min.js"></script>
    <script src="jsa/script.js"></script>
    <style>
        img{
            width:6rem;
        }
        .loader{
            width:1.5rem;
            display: none;
        }
    </style>
    
</head>
<body>

<a href="logout.php">logout</a>
    
    <h1>Daftar siswa</h1>

    <a href="tambah.php">tambah data siswa</a>
    <br> <br>

    <form action="" method="post" >
        <input type="text" name="keyword" size="50" autofocus placeholder ="masukan input pencarian" autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">cari</button>

        <img src="img/loader.gif" class="loader" alt="" srcset="">
    </form>

        <br>
        <div id="container">
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Nomor</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>
        <?php $i =1; ?>
        <?php foreach($siswa as $sis ) :  ?>
    <tr>
        <td><?= $i ?></td>
        <td>
            <a href="ubah.php?id=<?=$sis["id"] ?>">ubah</a> |
            <a href="hapus.php?id=<?=$sis["id"] ?>" onclick="return confirm('yakin?');" >hapus</a>
        </td>
        <td><img src="img/<?=$sis["gambar"] ?>" alt=""></td>
        <td><?= $sis["nomor"] ?></td>
        <td><?= $sis["nama"] ?></td>
        <td><?= $sis ["email"] ?></td>
        <td><?= $sis["jurusan"] ?></td>
    </tr>
            <?php $i++ ?>
    <?php endforeach ?>
    </table>
    </div>

    
   
</body>
</html>