<?php
    $judulpage = "Latihan Script PHP";
    $konten = "<h3>Latihan PHP </h3>";
    $konten .= "<p>Dasar pemulihan php :</p><ul><li>Penuisan script bersifat case sensitif</li><li>Setiap akhir baris di akhiri dengan titik koma</li></ul>";
    ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?=$judulpage; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        
        <?php
            echo $konten;
        ?>

    </body>
</html>