<?php 

$var = "P1";
$var = $_GET["pg"];

    switch($var){
        case "P1";
            $judulpage = "Halaman 1";
            $konten = "<h3>Halaman 1</h3>";
            break;
        case "P2";
            $judulpage = "Halaman 2";
            $konten = "<h3>Halaman 2</h3>";
            break;
        case "P3";
            $judulpage = "Halaman 3";
            $konten = "<h3>Halaman 3</h3>";
            break;
        case "P4";
            $judulpage = "Halaman 4";
            $konten = "<h3>Halaman 4</h3>";
            break;
        default;
            $judulpage = "Halaman 1";
            $konten = "<h3>Halaman 1</h3>";
            break;
    }


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
        <a href="latihan03.php?pg=P1">Page 1</a> <a href="latihan03.php?pg=P2">Page 2</a> <a href="latihan03.php?pg=P3">Page 3</a> <a href="latihan03.php?pg=P4">Page 4</a>
        <?php
            echo $konten;
        ?>

    </body>
</html>