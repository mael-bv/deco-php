<?php
require_once("includes/isConnected.php");
require_once("src/controller/UploadCard.php");
require_once("src/back/Affichage.php");

$affiche = new Affichage();
 $affiches = $affiche->afficheCard("cards");


if(!empty($_POST)){
    $upload = new UploadCard();
    $upload->uploadCard($_POST['submit'],$_FILES['image'],$_POST['titre'],$_POST['description']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/ajoutCard.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <title>Cards</title>
</head>
<body>



<a href="centreControle.php">   
    <span class="material-symbols-outlined back">
        chevron_left 
    </span>
</a>

<div class="containe ">
    <div class="elemP first">
        <form action="" class="form" method="post" enctype="multipart/form-data">
                <div class="title">Bonjour</div>
                <div class="subtitle">Ajout Card</div>
                <div class="input-container ic1">
                    <input id="firstname" class="input" type="text" placeholder=" " name="titre" />
                    <div class="cut"></div>
                    <label for="firstname" class="placeholder">Titre</label>
                </div>
                <div class="input-container ic2">
                    <textarea name="description" id="lastname" class="input" type="description"  ></textarea>
                    <div class="cut"></div>
                    <label for="lastname" class="placeholder">Description</label>
                </div>
                <div class="input-container ic2">
                    <input id="email" class="input" type="file"  name ="image" />
                    <div class="cut cut-short"></div>
                    <label for="email" class="placeholder" >Image</label>
                </div>
                <button type="submit" class="submit" name ="submit">Enregistrer</button>
            </form>
        </div>
    <div class="elemP second">
    
            <?php while($card = $affiches->fetch()){?>
                <div class="card">
                    <h3><?= $card['titre']?></h3><br>
                    <div class="btn-contain">
                        <div class="btnn">
                            <a href="./supprimerCard.php?cardId=<?=$card['id'];?>">Supprimer</a>
                        </div>
                        <div class="btnn m">
                            <a href="./modifierCard.php?cardId=<?=$card['id'];?>">Modifier</a>
                        </div>
                    </div>
                </div>    
            <?php } ?>

    </div>
</div>  
</body>
</html>