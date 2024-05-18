<?php 
    // koneksi ke database
   $conn = mysqli_connect("localhost", "root", "", "phpdasar");
    // ambil data dari tabel siswa / query
    $result = mysqli_query($conn, "SELECT * FROM siswa");
    // ambil data (fetch) siswa dari object result
    // mysqli_fetch_row() // mengembalikan array numerik
    // mysqli_fetch_assoc()  // mengmablikan array associative
    // mysqli_fetch_array() // mengembailkan keduanya
    // mysqli_fetch_object() // 

    // while($x = mysqli_fetch_assoc($result)  ){
    //     var_dump($x);
    // }
   




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
        <?php while($row = mysqli_fetch_assoc($result) ) :  ?>
    <tr>
        <td><?= $i ?></td>
        <td>
            <a href="">ubah</a> | <a href="">hapus</a>
        </td>
        <td><img src="img/<?=$row["gambar"] ?>" alt=""></td>
        <td><?= $row["nomor"] ?></td>
        <td><?= $row["nama"] ?></td>
        <td><?= $row ["email"] ?></td>
        <td><?= $row["jurusan"] ?></td>
    </tr>
            <?php $i++ ?>
    <?php endwhile ?>
    </table>

</body>
</html>