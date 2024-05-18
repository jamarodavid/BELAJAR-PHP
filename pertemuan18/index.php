<?php 
session_start();

    if(!isset($_SESSION["login"])){
        header("Location: login.php");
        exit;
    }
    require 'functions.php';

    // pagination
    // konfigurasi
    $jumlahDataPerHalaman = 3;
    $jumlahData = count(query("SELECT * FROM siswa"));
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
    $halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1 ;   
    // jumlahdt= 3 aktif = 3 mulai = 6
    $awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;


    $siswa = query("SELECT * FROM siswa LIMIT $awalData, $jumlahDataPerHalaman");

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
    <style>
        img{
            width:6rem;
        }
    </style>
</head>
<body>

<a href="logout.php">logout</a>
    
    <h1>Daftar siswa</h1>

    <a href="tambah.php">tambah data siswa</a>
    <br> <br>

    <form action="" method="post" >
        <input type="text" name="keyword" size="50" autofocus placeholder ="masukan input pencarian" autocomplete="off" >
        <button type="submit" name="cari" >cari</button>
    </form>
    <br>

    <!-- navigasi -->
    <?php if($halamanAktif > 1) : ?>
   
        <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
        <?php endif; ?>
       
    <?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
        <?php if( $i == $halamanAktif) : ?>
        <a href="?halaman=<?= $i ?>"style="color: red;"><?php echo $i ?></a>
        <?php else: ?>
            <a href="?halaman=<?= $i ?>"><?php echo $i ?></a>
        <?php endif; ?>
        <?php endfor; ?>

        <?php if($halamanAktif < $jumlahHalaman) : ?>
   
   <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
   <?php endif; ?>


        

        <br>
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

</body>
</html>