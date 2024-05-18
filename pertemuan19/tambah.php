<?php 
session_start();

if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
    require "functions.php";
    


    // cek apakah tombol submit sudah ditekan atau belum
    if(isset($_POST["submit"])){

        

       

        // cek apakah data berhasil ditambahlan atau tidak
       if(tambah($_POST) > 0){
        echo "
            <script>
            alert('data berhasil di tambahkan');
            document.location.href = 'index.php'
            </script>
            ";
       }else{
        echo "
            <script>
            alert('data gagal di tambahkan');
            document.location.href = 'index.php'
            </script>
            ";
       }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data siswa</title>
</head>
<body>
    <h1>Tambah Data Siswa</h1>

    <form action="" method="post" enctype="multipart/form-data" >
        <ul>
            <li>
                <label for="nomor">nomor</label>
                <input type="text" name="nomor" id="nomor" required>
            </li>
            <li>
                <label for="nama">nama</label>
                <input type="text" name="nama" id="nama">
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

            <li>
                <button type="submit" name="submit" >Tambah Data</button>
            </li>
        </ul>
    </form>
    <a href="index.php">kembali</a>
    
</body>
</html>