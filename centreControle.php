<?php
/* session_start();
if(!isset($_SESSION['admin'])){
    header('Location: identification.php');
} */
// if(!is_admin())){
//     header('Location: identification.php');
// }
require_once("includes/isConnected.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/centre.css">
    <title>Centre de controle</title>
</head>
<body>
    <h1>Centre de controle</h1>
    <i class="fa-solid fa-xmark"></i>


    <a class ="deco" href="deconnexion.php">Deconnexion</a>

    <div class="container">
        <div class="row">
            <a href="ajoutImage.php" class="btn">Ajout Caroussel/Galerie</a>
            <a href="ajoutCard.php" class="btn">Ajout Metier</a>
            <a href="ajout.php" class="btn">Ajout Article</a>
        </div>
        <div class="row">
            <a href="messagerie.php" class="btn">Messagerie</a>
        </div>
    </div>

</html>