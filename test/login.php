<?php 
    session_start();

    if(isset($_COOKIE['id'])){
        $_SESSION["login"] = true;
    }

    if(isset($_SESSION["login"])){
        header("Location: index5.php");
        exit;
    }

    require 'functions.php';

    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row["password"])){

                if(isset($_POST['remember'])){
                    setcookie('id', 'test', time()+60);
                }

                $_SESSION["login"] = true;
                header("Location: index5.php");
                exit;
            }
        }

        $error = true;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
    <h1>Halaman Login</h1>
    <?php if(isset($error)) { ?>
        <p>salah</p>
        <?php } ?>
     <form action="" method="post">
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
                <label for="remember">remember</label>
                <input type="checkbox" name="remember" id="remember">
            </li>
            <li>
                <button type="submit" name="login">login</button>
            </li>
        </ul>
     </form>
</body>
</html>