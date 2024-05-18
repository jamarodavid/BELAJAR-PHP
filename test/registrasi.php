<?php 
    require 'functions.php';

    if(isset($_POST["registrasi"])){
        if(registrasi($_POST) > 0){
            echo "berhasil registrasi";
        } 
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
    
    <h1>registrasi</h1>

    <form action="" method="post" >
        <ul>
            <li>
            <label for="username">username</label>
            <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">password</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for="password2">komfirmasi password</label>
                <input type="password" name="password2" id="password2">
            </li>

            <button type="submit" name="registrasi" >registrasi</button>
        </ul>

        
        
    </form>

</body>
</html>