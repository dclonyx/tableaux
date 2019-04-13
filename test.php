<?php

require 'php/choix_tableau_accueil.php';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="contenair_carroussel">
        <div class="carousel">
            <a class="carousel-item" href="#one!"><img src="<?php echo $img1 ;?>"></a>
            <a class="carousel-item" href="#two!"><img src="<?php echo $img2 ;?>"></a>
            <a class="carousel-item" href="#three!"><img src="<?php echo $img3 ;?>"></a>
        </div>
    </div>
    <script src="./js/script.js"></script>
</body>
</html>