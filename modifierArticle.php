<?php
require_once("includes/isConnected.php");
require_once("src/back/GetDataModel.php");
require_once("src/Controller/Update.php");

$upd = new Update();
$datas = new GetDataModel();
$id = $_GET['artId'];
$datass = $datas->getData("article",$id);
foreach ($datass as  $data) {
    $titre = $data->titre;
    $description = $data->description;
    $titre = $data->titre;
    $dating = $data->dating;
    $image = $data->image;

}
if(!empty($_POST)){
        $upd->updateArticle($_POST['submit'],$_POST['titre'],$_POST['description'],$_POST['date'],$_FILES['image'],$id);
 }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/modifierArticle.css">

    <title>Modifier Article</title>
</head>
<body>



<form action="" class="form" method="post" enctype="multipart/form-data">
        <div class="title">Modifiaction</div>
        <div class="subtitle">Modifier article</div>
        <div class="input-container ic1">
            <input id="firstname" class="input" type="text" placeholder=" " name="titre" value="<?= $titre ?>" />
            <div class="cut"></div>
            <label for="firstname" class="placeholder">Titre</label>
        </div>
        <div class="input-container ic2">
            <textarea name="description" id="lastname" class="input" type="text"  ><?= $description ?></textarea>
            <div class="cut"></div>
            <label for="lastname" class="placeholder">Description</label>
        </div>
        <div class="input-container ic2">
            <input id="lastname" class="input" type="text" placeholder=" " name ="date" value="<?= $dating ?>"/>
            <div class="cut"></div>
            <label for="lastname" class="placeholder">Date</label>
        </div>
        <div class="input-container ic2">
            <input id="email" class="input" type="file" placeholder=" <?= $image ?>" name ="image" value="" />
            <div class="cut cut-short"></div>
            <label for="email" class="placeholder" >Image</label>
        </div>
        <button type="submit" class="submit" name ="submit">Modifier</button>
    </form>
    
</body>
</html>

