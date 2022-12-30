<?php
require_once("includes/isConnected.php");
require_once("src/back/GetDataModel.php");
require_once("src/Controller/Update.php");

$upd = new Update();
$datas = new GetDataModel();
$id = $_GET['cardId'];
$datass = $datas->getData("cards",$id);
foreach ($datass as  $data) {
    $titre = $data->titre;
    $description = $data->description;
    $titre = $data->titre;
   // $date = $data->date;

}
if(!empty($_POST)){
    $upd->updateCard($_POST['submit'],$_POST['titre'],$_POST['description'],$_FILES['image'],$id);
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/modifierCard.css">
    <title>Modification Card</title>
</head>
<body>
<div class="elemP first">

<form action="" class="form" method="post" enctype="multipart/form-data">
                <div class="title">Modification</div>
                <div class="subtitle">Modifier Card</div>
                <div class="input-container ic1">
                    <input id="firstname" class="input" type="text" placeholder=" " name="titre" value="<?= $titre?>"/>
                    <div class="cut"></div>
                    <label for="firstname" class="placeholder">Titre</label>
                </div>
                <div class="input-container ic2">
                    <textarea name="description" id="lastname" class="input" type="description" ><?= $description?></textarea>
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
    
</body>
</html>