<?php
require_once("includes/isConnected.php");
require_once("src/Controller/UploadArticle.php");
require_once("src/back/Affichage.php");
require_once("src/dataBase.php");

if(!empty($_POST)){
    $insert = new UploadArticle();
    $insert->uploadArticle($_POST['submit'],$_POST['titre'],$_POST['description'],$_POST['date'],$_FILES['image']);
}
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="./style/ajout.css">
    <title>Article</title>
</head>
<body>

<a href="centreControle.php">   
    <span class="material-symbols-outlined back">
        chevron_left 
    </span>
</a>
<div class="insert">
    <form action="" class="form" method="post" enctype="multipart/form-data">
        <div class="title">Bonjour</div>
        <div class="subtitle">Ajout article</div>
        <div class="input-container ic1">
            <input id="firstname" class="input" type="text" placeholder=" " name="titre" />
            <div class="cut"></div>
            <label for="firstname" class="placeholder">Titre</label>
        </div>
        <div class="input-container ic2">
            <textarea name="description" id="lastname" class="input" type="text"  ></textarea>
            <div class="cut"></div>
            <label for="lastname" class="placeholder">Description</label>
        </div>
        <div class="input-container ic2">
            <input id="lastname" class="input" type="text" placeholder=" " name ="date"/>
            <div class="cut"></div>
            <label for="lastname" class="placeholder">Date</label>
        </div>
        <div class="input-container ic2">
            <input id="email" class="input" type="file" placeholder=" " name ="image" />
            <div class="cut cut-short"></div>
            <label for="email" class="placeholder" >Image</label>
        </div>
        <button type="submit" class="submit" name ="submit">Enregistrer</button>
    </form>
</div>


    <div class="containe">
    <?php
$affiche = new Affichage();
$articles = $affiche->afficheCard("article");
?>

<?php 
while($article = $articles->fetch()){
 ?>

 <div class="element">

    <h3 style="color:white"><?=$article['id']?></h3>

    <p style="color:white"><?=$article['titre']?></p>

    <div class="contain-btn">
        <div class="btn-m supp">
            <a href="./supprimerArticle.php?artId=<?=$article['id'];?>" class="supprimer">supprimé</a>
        </div>

        <div class="btn-m mdf" >
            <a href="./modifierArticle.php?artId=<?=$article['id'];?>" class="">modifier</a>
        </div>
    </div>


    </div>

<?php } ?>


    </div>
</body>
</html>