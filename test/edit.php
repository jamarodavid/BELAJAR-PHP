<?php 
    require 'functions.php';
    $id = $_GET["id"];

    $sis = query("SELECT * FROM siswa WHERE id = $id ")[0];


    if(isset($_POST["submit"])){

        if(edit($_POST)){
            header ("Location: index5.php");
        }
       

    

    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tmabha data</title>
</head>
<body>

<h1> Tambah Data </h1>

    <form action="" method="post" enctype="multipart/form-data" >
    <ul>
        <input type="hidden" name="id" value="<?= $sis["id"] ?>" >
        <li>
            <label for="nama">nama</label>
            <input type="text" name="nama" id="nama" value="<?= $sis["nama"] ?>" >
        </li>
        <li>
            <label for="nomor">nomor</label>
            <input type="text" name="nomor" id="nomor" value="<?= $sis["nomor"] ?>" >
        </li>
        <li>
            <label for="email">email</label>
            <input type="text" name="email" id="email" value="<?= $sis["email"] ?>" >
        </li>
        <li>
            <label for="jurusan">jurusan</label>
            <input type="text" name="jurusan" id="jurusan" value="<?= $sis["jurusan"] ?>" >
        </li>
        <li>
            <label for="gambar">gambar</label>
            <input type="text" name="file" id="gambar" value="<?= $sis["gambar"] ?> ">
        </li>
        <button type="submit" name="submit" >edit</button>
    </ul>

    </form>
    
</body>
</html>