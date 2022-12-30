<?php
require_once("src/back/Affichage.php");
require_once("src/controller/Search.php");

$search = new Recherche();
$affiche = new Affichage();

if(!empty($_GET)){
    $affiches = $search->recherche($_GET['submit'],$_GET['value']);
}
if(empty($_GET)){
    $affiches = $affiche->afficheCard("cards");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/recrutement.css">
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
      
<br><br><br><br><br><br>
<form action="" method="GET">
    <div class="wrap">
    <div class="search">
        <input type="text" class="searchTerm" placeholder="Rechercher..." name="value">
        <button type="submit" class="searchButton" name="submit">
            <i class="fa fa-search"></i>
        </button>
    </div>
    </div>
</form>
<br><br><br><br><br>
<div class="containers">

<?php 
while($card = $affiches->fetch()){
    
    ?>
<div class="card">
    <div class="card-header">
      <img src="img_card_bdd/<?= $card['image']?>" alt="rover" />
    </div>
    <div class="card-body">
      <h4>
        <?= $card['titre']?>
      </h4>
      <br>
      <p>
      <?= $card['description']?>
      </p>
      <br><br>
    </div>
    <br><br>
  </div>   
  <?php } ?>
</div> 
    
<br><br><br><br><br><br>
<footer>
    <div class="element">
        <div class="logo-foot">
            <div class="logo-elem">
                <img src="image/logo.png" alt="">
            </div>
        </div>
        <div class="adress-foot">
            <div class="title-foot">
                <p>Bienvenu Déco SAS</p>
            </div>
            <div class="loca-foot">
                <div class="localisation-foot">
                    <div class="adresse-foot a">
                        <p>3 Rue Léo Gausson <br> Lagny-sur-Marne</p>
                    </div>
                    <div class="num-foot b">
                        <p><span>Mail :</span> Contact@BienvenuDéco@gmail.com</p>
                    </div>
                    <div class="mail-foot">
                        <p><span>Tel :</span> 0619413050</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="certifi">
            <div class="title-foot">
                <p>Certification</p>
            </div>
            <div class="certification">
                <div class="certi1">
                    <img src="image/certi1.jpg" alt="">
                </div>
                <div class="certi2">
                    <img src="image/certi2.jpg" alt="">
                </div>
                <div class="certi3">
                    <img src="image/certi3.jpg" alt="">
                </div>
            </div>

        </div>
        <div class="mention">
            <div class="title-foot">
                <p>Information Légales</p>
            </div>
            <div class="legale">
                <ul>
                    <a href="mention.html"><li>Mentions Légales-CGU</li></a>
                    <a href="politique.html"><li>Politique de Confidentialités</li></a>
                </ul>
            </div>

        </div>
    </div>
    
</footer>
<div class="connected">
    <div class="connec">
        <a href="identification.php">C</a>
    </div>
</div>
 <script src="recrutement.js"></script>   
</body>
</html>