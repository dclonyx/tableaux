<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Les tableaux d'Elodie</title>
</head>
<body>
    <header class="header">
        <div class="header-logo">
            <div class="testlogo"><span>Les Tableaux d'Elodie</span></div>
        </div>
        <a href="#" class="header__icon" id="header__icon"></a>
        <nav class="menu" id="menu">
            <a href="#" class="active">Accueil</a>
            <a href="./php/affichage/Gallerie.php">Gallerie</a>
            <a href="./php/affichage/Presentation.php">Présentation</a>
            <a href="./php/afichage/Contact.php">Contact</a>
        </nav>
    </header>
    <div class="pusher">   
        <main>
            <div id="carroussel">
                <img class="mySlides" src="./img/categ1/tab-1.jpg" alt="eyes" >
                <img class="mySlides" src="./img/categ2/tab-2.jpg" alt="lou" >
                <img class="mySlides" src="./img/categ3/tab-3.jpg" alt="lucie-2" >
                <img class="mySlides" src="./img/categ4/tab-4.jpg" alt="lucie" >
                <img class="mySlides" src="./img/categ5/tab-5.jpg" alt="lucie" >
            </div>
        </main>
        <!-- cache le site a l ouverture du menu burger -->
        <div id="cache"></div>
        <footer>
            <a class="mention" href="./php/mentions_legales.php">Mentions Légales</a>
            <a class="logo" target="_blank" href="https://www.facebook.com/Les-tableaux-dElodie-720131621368673/">
                <img src="./img/fb.png" alt="facebook">
            </a>
        </footer>
    </div>
    <!-- bouton retour haut de page -->
    <div id="retourhaut">
        <a href="#top"><img src="./img/to_top.png" alt="top"></a>
    </div>
<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 2000);
    }
</script>
<script src="./js/script.js"></script>
</body>
</html>