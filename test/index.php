<?php 

    if(isset($_POST["submit"])){

        if($_POST["username"] == "admin" && $_POST["password"] == "1234"){
            header("Location: index2.php");
            exit;
        } else {
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
    <title>test</title>
</head>
<body>
    <?php if(isset($error)){ ?>
        <p>sandi atau nama salah</p>
    <?php } ?>
    <h1>buku</h1>
       <form action="" method="post">
        <label for="username">username</label>
        <input type="text" name="username" id="username">
        <br>
        <br>
        <label for="password">password</label>
        <input type="password" name="password" id="password">
        <button type=submit name="submit" >kirim</button>
       </form>

</body>
</html>