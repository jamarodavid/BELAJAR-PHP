<?php 
    require "functions.php";
    // ambil data di url
    $id = $_GET["id"];
    // query data siswa berdasarkan id nya
    $sis = query("SELECT * FROM siswa WHERE id = $id")[0];

    


    // cek apakah tombol submit sudah ditekan atau belum
    if(isset($_POST["submit"])){
        

       

        // cek apakah data berhasil diubah atau tidak
       if(ubah($_POST) > 0){
        echo "
            <script>
            alert('data berhasil di ubah');
            document.location.href = 'index.php'
            </script>
            ";
       }else{
        echo "
            <script>
            alert('data gagal di ubah');
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
    <title>ubah Data siswa</title>
</head>
<body>
    <h1>ubah Data Siswa</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $sis["id"]; ?>">
        <ul>
            <li>
                <label for="nomor">nomor</label>
                <input type="text" name="nomor" id="nomor" required value="<?= $sis["nomor"] ?>" > 
            </li>
            <li>
                <label for="nama">nama</label>
                <input type="text" name="nama" id="nama" value="<?= $sis["nama"] ?>" >
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
                <input type="text" name="gambar" id="gambar" value="<?= $sis["gambar"] ?>" >
            </li>

            <li>
                <button type="submit" name="submit" >ubah Data</button>
            </li>
        </ul>
    </form>
    <a href="index.php">kembali</a>
    
</body>
</html>