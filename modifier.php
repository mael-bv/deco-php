<?php
require_once("includes/isConnected.php");
 require_once("src/back/GetDataModel.php");
 require_once("src/Controller/Update.php");

 $id = $_GET['uptd'];
 $req = new GetDataModel();
 $upd = new Update();
 $datas = $req->getData("article",$id);
 foreach($datas as $data){
    $titre = $data->titre;
    $description = $data->description;
    $date =$data->dating;
    $photo = $data->image;
 }
 
 if(!empty($_POST)){
    $upd->update($_POST['submit'],$_POST['titre'],$_POST['description'],$_POST['date'],$_POST['image'],$id);
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/modifier.css">
    <title>Document</title>
</head>
<body>
<form action="" class="form" method="post">
        <div class="title">Bonjour</div>
        <div class="subtitle">Modification</div>
        <div class="input-container ic1">
            <input id="firstname" class="input" type="text" placeholder=" " name="titre" value="<?= $titre ?>"/>
            <div class="cut"></div>
            <label for="firstname" class="placeholder">Titre</label>
        </div>
        <div class="input-container ic2">
            <textarea name="description" id="lastname" class="input" type="text" ><?= $description ?></textarea>
            <div class="cut"></div>
            <label for="lastname" class="placeholder">Description</label>
        </div>
        <div class="input-container ic2">
            <input id="lastname" class="input" type="text" placeholder=" " name ="date" value="<?= $date ?>"/>
            <div class="cut"></div>
            <label for="lastname" class="placeholder">Date</label>
        </div>
        <div class="input-container ic2">
            <input id="email" class="input" type="text" placeholder=" " name ="image" value="<?= $photo ?>"/>
            <div class="cut cut-short"></div>
            <label for="email" class="placeholder" >Image</>
        </div>
        <button type="text" class="submit" name ="submit">Enregistrer</button>
    </form>
</body>
</html>