<?php 
    // Pengulangan
    // for
    // while
    // do .. while
    // foreach : pengulangan khusus array


    // for( $i = 0; $i < 5; $i++ ) {
    //     echo "hello world <br>";
    // }

    // $i = 0;

    // while($i < 4) {
    //     echo "hello world <br>";
    //     $i++;
    // }

    // $i = 4 ;
    // do {
    //     echo "hello world <br>";
    //     $i++;

    // } while ( $i < 3 )




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .warna-baris{
            background-color: blue;
        }
    </style>
</head>
<body>


        <table border="1" cellpadding ="10" cellspacing="0" >
            <?php 
            $k = 0;
            while($k < 5) { $k++?>
            <tr>
                <?php 
                $l = 0;
                while($l < 3) {
                    $l++
                ?>
                <td><?php echo "$k,$l" ?></td>
                <?php }?>
            </tr>

            <?php }?>
        </table>

            <br>
            <br>
<table border="1" cellpadding ="10" cellspacing="0" >
    <?php for( $i = 1; $i <= 5; $i++ ) :?>
        <?php if($i % 2 == 0 ) : ?>
        <tr   class="warna-baris" >
        <?php else : ?>
        <tr>
        <?php endif; ?>

            <?php for($j = 1; $j <= 5; $j++) : ?>
                <td><?= "$i,$j" ?></td>
            <?php endfor; ?>
        </tr>
        <?php endfor; ?>
</table>
    
</body>
</html>