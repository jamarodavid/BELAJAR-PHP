<?php 
    usleep(500000);
    require '../functions.php';
    $keyword = $_GET["keyword"];
    $query = "SELECT * FROM siswa 
    WHERE nama LIKE '%$keyword%' OR nomor LIKE '%$keyword%' OR email LIKE '%$keyword%' OR jurusan LIKE '%$keyword%' ";
    $siswa = query($query);
    
?>

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