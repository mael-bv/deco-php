<?php
require_once("src/dataBase.php");
require_once("src/Models/Article.php");
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

/* ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
$bdd = getPdo();

$pdoStat = $bdd->prepare('SELECT * FROM articl ORDER BY `articl`.`id` DESC');
$executeIsOk = $pdoStat->execute();

$article = $pdoStat->fetchAll() */

/* $app = new Article();
$application = $app->affichage(); */
require_once("src/Controller/Upload.php");
require_once("src/back/Affichage.php");
require_once("src/back/AjoutModel.php");


$files = new Affichage();
$all = $files->AfficheFile('carousselfile');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/acceuil.css">
    <title>Bienvenu Déco</title>
</head>
<body>
           
    <div class="loader">
        <span class="lettre">C</span>
        <span class="lettre">H</span>
        <span class="lettre">A</span>
        <span class="lettre">R</span>
        <span class="lettre">G</span>
        <span class="lettre">E</span>
        <span class="lettre">M</span>
        <span class="lettre">E</span>
        <span class="lettre">N</span>
        <span class="lettre">T</span>

    </div>
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
     

    <div class="remplace-video">
        <div class="ligne">
            <div class="l1"></div>
            <div class="l2"></div>
        </div>
        <div class="container-first1">
            <h1><span>BIENVENU</span></h1><h1><span> DECO</span></h1>
            <div class="container-btn1">
                <a href="metier.php"><button class="btn-first1 b1">METIER</button></a>
                <a href="contact.php"><button class="btn-first1 b2">CONTACT</button></a>
            </div>
        </div>
    </div>



    <div class="slider">
        <video autoplay="autoplay" muted = ""  loop="infinite" src="image/bienvenu déco.mp4"></video>       
    </div>    
    <div class="information">
        <div class="redaction">
            <h1 class="write">Nos activitées</h1>
        </div>
        <div class="element">
            <div class="elem-1">
                <div class="work1">
                    <div class="work-special">
                        <div class="pinter">
                        </div>
                    </div>
                    <div class="work-special-2">
                        <div class="pinter-2">
                            <p>PEINTURE</p>
                        </div>
                    </div>
                    
                </div>
                <div class="work2" >
                    <div class="work-special">
                        <div class="plafond-1">
                        </div>
                    </div>
                    <div class="work-special-2">
                        <div class="pinter-2">
                            <p>PLAFOND</p>
                        </div>
                    </div>
                </div>
                <div class="work3">
                    <div class="work-special">
                        <div class="cuisine-1">
                        </div>
                    </div>
                    <div class="work-special-2">
                        <div class="pinter-2">
                            <P>CUISINE</P>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elem-2" >
                <div class="work1">
                    <div class="work-special">
                        <div class="plaque">
                        </div>
                    </div>
                    <div class="work-special-2">
                        <div class="pinter-2">
                            <p>PLAQUE</p>
                        </div>
                    </div>
                    
                </div>
                <div class="work2">
                    <div class="work-special">
                        <div class="maçon">
                        </div>
                    </div>
                    <div class="work-special-2">
                        <div class="pinter-2">
                            <p>MAÇON</p>
                        </div>
                    </div>
                </div>
                <div class="work3">
                    <div class="work-special">
                        <div class="jardin">
                        </div>
                    </div>
                    <div class="work-special-2">
                        <div class="pinter-2">
                            <P>JARDIN</P>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="map">
        <div class="map-categorie">
            <div class="map-titre">
                <h3>NOS SECTEURS D'ACTIVITÉ</h3>
            </div>
            <div class="map-btn">
                <div class="map-btn1">
                    <p> <a href="secteur.php"> EN SAVOIR </a><span>+</span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="realisation">
        <div class="renov-titre">
            <div class="trait-g">
             <!-- <img src="image/traitg.png" alt=""> -->
             <p>~</p>
             
            </div>
            <p class="subtitle fancy"><span>Nos réalisation</span></p>
            <div class="trait-d">
             <!--    <img src="image/traitd.png" alt=""> -->
             <p>~</p>
            </div>
        </div>
        <div class="renov-img">
            <div class="accordeon1">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>  
    </div>
  
    <div class="caroussel-container">
        <div class="container-img">
            <img src="image/c1.JPG" alt="" class="active">
            <img src="image/c2.JPG" alt="">
            <img src="image/c3.JPG" alt="">
            <img src="image/c4.JPG" alt="">
            <?php while ($datas = $all->fetch()){?>
                <img src="<?=$datas['url']; ?>" alt="">
            <?php } ?>
            <div class="cont-btn">
                <div class="btn-nav left">&#10094</div>
                <div class="btn-nav right">&#10095</div>
            </div>
        </div> 
    </div>
    
    <div class="histoire">
        <div class="left-hist"></div>
        <div class="right-hist">
            <div class="title-hist">
                    <span>~</span> &nbsp<p>NOTRE HISTOIRE</p> &nbsp<span>~</span>
                </div>
            <div class="btn-hist">
                <div class="btn-histoire">
                    <p><a href="histoire.php"> EN SAVOIR </a><span>+</span></p>
                </div>
            </div>
            </div>
        </div>
    </div>
<br><br><br>
<?php
$affiche = new Affichage();
$articles = $affiche->afficheCard("article");
?>
<div class="article">

<?php 
while($article = $articles->fetch()){
 ?>
<ul class="cards">
  <li>
    <a href="" class="card">
      <img src="img_article/<?=$article['image']?>" class="card__image imgArticle" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>       
          <i class="fa-solid fa-house-circle-check"></i>              
       <div class="card__header-text">
            <h3 class="card__title"><?=$article['titre']?></h3>            
            <span class="card__status"><?=$article['dating']?></span>
          </div>
        </div>
        <p class="card__description"><?=$article['description']?></p>
      </div>
    </a>      
  </li>      
</ul>
<?php } ?>


</div>
<br><br><br><br><br><br><br><br>

<?php
include("./includes/footer.php")
?>

<script src="./animation/acceuil.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>

</body>
</html>