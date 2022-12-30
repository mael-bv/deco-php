<?php
require_once("includes/isConnected.php");
require_once("src/Controller/Upload.php");
require_once("src/back/Affichage.php");
require_once("src/back/AjoutModel.php");


$files = new Affichage();
$all = $files->AfficheFile('filesimages');
$car = $files->AfficheFile('carousselfile');

if(!empty($_POST)){
    $ajout = new AjoutBdd();
    $upload = new Upload();
    $upload->ajoutImage($_POST['submitUpload'],$_FILES['image'],$_POST['destination']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/ajoutImage.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <title>Caroussel/Galerie</title>
</head>
<body>
 <a href="centreControle.php">   
    <span class="material-symbols-outlined back">
        chevron_left 
    </span>
</a>

<div class="container">
    <div class="contain">
        <form action="" class="form" method="post" enctype="multipart/form-data">
                <div class="title">Bonjour</div>
                <div class="subtitle">Ajouter une image</div>
                <div class="input-container ic1">
                    <input id="firstname" class="input" type="file" placeholder=" " name="image" />
                    <div class="cut"></div>
                    <label for="firstname" class="placeholder">Titre</label>
                </div>
            <fieldset>
                <legend class="radio">Types</legend>
                <div>
                <input type="radio"  name="destination" value="caroussel/"
                        checked>
                <label class="radio" for="caroussel">caroussel</label>
                </div>
                <div>
                <input type="radio"  name="destination" value="files/">
                <label class="radio" for="galerie">galerie</label>
                </div>
            </fieldset>

                <button type="text" class="submit" name ="submitUpload">Enregistrer</button>
            </form>
    </div>
        
    <div class="contain p2">

  

        <div class="elem mm">
            <h3>Galerie</h3>
                <?php while ($datas = $all->fetch()){?>
                    <div class="cardss">
                        <div class="c-img">
                            <img src="<?=$datas['url']; ?>" alt="">
                        </div>
                        <div class="c-btn">
                            <div class="btn1">
                                <a href="supprimerFile.php?urlFile=<?=$datas['url'];?>">supprimer</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
        </div>
        
    
        
        <div class="elem m1">
            <h3>Slide</h3>
                <?php while ($dats = $car->fetch()){?>
                    <div class="cardss">
                        <div class="c-img">
                             <img src="<?=$dats['url']; ?>" alt="">
                        </div>
                        <div class="c-btn">
                            <div class="btn1">
                                <a href="supprimerFile.php?urlFile=<?=$dats['url'];?>">supprimer</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
        </div>
    </div>
</div>
</body>
</html>