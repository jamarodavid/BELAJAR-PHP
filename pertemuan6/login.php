<?php 
    if(isset($_POST["submit"])){
        if($_POST["nama"] == "admin" &&
        $_POST["password"] == "1234" ){
            header ("Location: latihan2.php");
            exit;
        } else{
            $error = true;
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <?php if(isset($error) ):?>
        <p>sandi / password salah</p>
    <?php endif?>

    <form action="" method="post" >
    <h1>Selamat Datang</h1>
    <label for="nama">nama</label>
    <input type="text" name="nama" id="nama">
    <br>
    <label for="password">password</label>
    <input type="password" name="password" id="password" >

    <button type="submit" name="submit" > kirim </button>
    </form>
</body>
</html>