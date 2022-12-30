<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/histoire.css">
    <title>Document</title>
</head>
<body>
    
<style>
         <?php
            $cssHeader = file_get_contents('./style/header.css');
            echo $cssHeader;
            $cssBtn = file_get_contents('./style/btn-top.css');
            echo $cssBtn;
            $cssFooter = file_get_contents('./style/footer.css');
            echo $cssFooter;
         ?>
</style>
    
    <?php
        include("./includes/header.php");
        include("./includes/btn-top.php");
    ?>
    

    
<div class="titre">
    <div class="titre-container">
        <p>Histoire de Bienvenu Déco</p>
    </div>
</div>
<br><br><br><br><br>
<div class="story">
    <div class="text">
        <div class="title-story">
            <h1 class="contact" aria-label="CONTACT"></h1>
        </div>
        <div class="contenu-story">
            <p><span>Bienvenu Déco</span> vu le jour en 1984 à Trois Rivières en Guadeloupe.</p><br>
            <p>Spécialié dans la peinture, Bienvenu Déco a diversifié ses metiers en 1988.</p><br>
            <p>En 1989 <span>Bienvenu Déco </span> s'envole en Ile-de-France.</p><br>
            <p>Bienvenu Déco est intervenu sur <span>+</span> de 200 chantiers.</p>


                
        </div>
    </div>
    <div class="drapeau">
        <div class="img-drapeau">
            <img src="image/guadeloup.png" alt="">
        </div>
    </div>
</div>
<br><br><br><br><br>
<div class="partenaire">
    <div class="titre-part">
        <p>ENTREPRISES PARTENAIRES</p>
    </div>
    <div class="photo">
        <div class="caroussel">
            <img src="image/leroy merlin.png" alt="" class="slideshow-img" >
            <img src="image/adagio.png" alt="" class="slideshow-img">
            <img src="image/eiffage.png" alt="" class="slideshow-img">
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br>
<?php
include("./includes/footer.php")
?>
 <script src="./animation/histoire.js"></script>   
</body>
</html>