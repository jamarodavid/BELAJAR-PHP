<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <?php if( isset($_POST["submit"]) ) {
        
    } ?>

    <!-- defaultnya action php akan mengirim datnya ke dirinya sendiri -->
    <!-- defaultnya method nilai nya get -->
    <form action="latihan4.php" method="post" >
        <p>Masukan Nama</p>
        <input type="text" name="nama">
        <br>
        <br>
        <button type="submit" name="submit" >kirim</button>
    </form>
    <label for="password">password</label>
    <input type="password" name="password" id="password">
</body>
</html>