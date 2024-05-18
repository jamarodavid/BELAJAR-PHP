<?php 
    require 'functions.php';

    if(isset($_POST["submit"])){

        if(tambah($_POST)){
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

    <form action="" method="post" enctype="multipart/form-data"  >
    <ul>
        <li>
            <label for="nama">nama</label>
            <input type="text" name="nama" id="nama">
        </li>
        <li>
            <label for="nomor">nomor</label>
            <input type="text" name="nomor" id="nomor">
        </li>
        <li>
            <label for="email">email</label>
            <input type="text" name="email" id="email">
        </li>
        <li>
            <label for="jurusan">jurusan</label>
            <input type="text" name="jurusan" id="jurusan">
        </li>
        <li>
            <label for="gambar">gambar</label>
            <input type="file" name="gambar" id="gambar">
        </li>
        <button type="submit" name="submit" >tambah</button>
    </ul>

    </form>
    
</body>
</html>