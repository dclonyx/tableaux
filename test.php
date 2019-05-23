<?php
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
    <div id="caroussel">
        <img class="mySlides" src="./img/categ1/tab-1.jpg" alt="eyes" >
        <img class="mySlides" src="./img/categ2/tab-2.jpg" alt="lou" >
        <img class="mySlides" src="./img/categ3/tab-3.jpg" alt="lucie-2" >
        <img class="mySlides" src="./img/categ4/tab-4.jpg" alt="lucie" >
        <img class="mySlides" src="./img/categ5/tab-5.jpg" alt="lucie" >
    </div>
<script src="./js/script.js">
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
</body>
</html>