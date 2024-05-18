<?php 
    $mahasiswa = [
        ["Jamaro",  "081234567", "SIJA", "Email"],
        ["Radit",  "081234679", "SIJA", "Email"],
        ["Abiyyu", "083566733", "SIJA", "Email"]
    ];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3</title>
</head>
<body>
    <h1>Daftar Siswa</h1>
    
    <?php foreach($mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama: <?= $mhs[0]; ?></li>
        <li>Nomor: <?= $mhs[1];?></li>
        <li>Jurusan: <?= $mhs[2];?></li>
        <li>Email: <?= $mhs[3];?></li>
    </ul>
    <?php } ?>
</body>
</html>