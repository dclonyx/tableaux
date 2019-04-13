<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><meta http-equiv="X-UA-Compatible" content="ie=edge"><link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title><?= $title ?></title>
</head>
<body>
<header class="header">
        <div class="header-logo">
            <div class="testlogo"><h1>Les Tableaux d'Elodie</h1></div>
        </div>
        <a href="#" class="header__icon" id="header__icon"></a>
        <nav class="menu" id="menu">
            <a href="../index.php">Accueil</a>
            <a href="./Gallerie.php">Gallerie</a>
            <a href="./Presentation.php">Présentation</a>
            <a href="./Contact.php">Contact</a>
        </nav>
    </header>
        <div class="pusher">

        <?= $content ?>

        </div>
        <footer>
            <a class="mention" href="./mentions_legales.php">Mentions Légales</a>
            <a class="logo" target="_blank" href="https://www.facebook.com/Les-tableaux-dElodie-720131621368673/"><img src="../img/fb.png" alt="facebook"></a>
        </footer>
         <!-- cache le site a l ouverture du menu burger -->
        <div id="cache"></div>
        <!-- bouton retour haut de page -->
        <div id="retourhaut">
            <a href="#top"><img src="../img/to_top.png" alt="top"></a>
        </div>
    
     <script src="../js/script.js"></script>
</body>
</html>