<?php
require_once("src/back/Affichage.php");

$affichage = new Affichage();
$mess = $affichage->afficheMessage("messagerie");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="./style/messagerie.css">
    <title>Messagerie</title>
</head>
<body>
<a href="centreControle.php">   
    <span class="material-symbols-outlined back">
        chevron_left 
    </span>
</a>
    <h3>Messagerie</h3>

    <div class="container">
    <?php foreach($mess as $mes): ?>
    <div class="card">
    <i class="fa-regular fa-circle-xmark"></i>
    <div class="card-body">
      <span class="tag tag-teal"><?= $mes['mail'] ?></span>
      <h4>
        <a type="tel"><?= $mes['numero'] ?></a>

      </h4>
      <p>
      <?= $mes['message'] ?>
      </p>
      <div class="user">
        <div class="user-info">
          <h5>Date :</h5>
          <small><?= $mes['datee'] ?></small>
        </div>
        <a href="./supprimerMess.php?messId=<?=$mes['id'];?>" class="supprimer">supprimé</a>
      </div>
    </div>
    </div>
    <?php endforeach; ?>
    </div>
</body>
</html>