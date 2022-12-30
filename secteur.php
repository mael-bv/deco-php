<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/secteur.css">
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
        include("./includes/btn-top.php");
    ?>
    <?php
        include("./includes/header.php");
    ?>
    
    <div class="zone">
        <div class="vide">

        </div>
        <div class="info">
            <div class="information-zone">
                <p>Nous agissons sur tout les secteur d'activité en Ile de France </p>
            </div>
        </div>
    </div>
    <div class="explication">
        <div class="info-exp">
            <div class="info-plus">
                <div class="information-exp">
                    <p>Nos secteurs d'activités</p>
                </div>
                <div class="list-exp">
                    <ul>
                        <li>LOGEMENT</li>
                        <li>ENTREPRISE</li>
                        <li>ADMINISTRATION</li>
                        <li>COLLECTIVITE LOCAL</li>
                        <li>MARCHES DE MAINTENANCE</li>
                        <li>BÂTIMENTS D’ARTS & BÂTIMENTS HISTORIQUES</li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="photo">
            <div class="caroussel">
                <img src="image/s1.jpg" alt="" class="slideshow-img" >
                <img src="image/s2.jpg" alt="" class="slideshow-img">
                <img src="image/s3.jpg" alt="" class="slideshow-img">
                <img src="image/s4.jpg" alt="" class="slideshow-img" >
            </div>
        </div>
    </div>
<br><br><br><br><br>
<?php
include("./includes/footer.php")
?>


<script src="./animation/secteur.js"></script>    
</body>
</html>