<?php 
    require 'functions.php';
    $siswa = query("SELECT * FROM siswa");

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
    
    <h1>Daftar siswa</h1>

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
            <a href="">ubah</a> | <a href="">hapus</a>
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