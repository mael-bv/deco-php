 <?php
 require_once("libraries/dataBase.php");
require_once("libraries/Models/Connexion.php");
session_start();

 $model = new Connexion();
 $connexion = $model->connexionAdmin(); 

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/connexion.css">
    <title>Connexion</title>
</head>
<body>
<div class="retour">
    <a href="recrutement.php"> <span>&#8592 </span>Retour sur site</a>
</div>

<div class="baniere">

</div>

<div class="contenu">
    <form action="" method ="POST">
        <div class="titre">
            <p>connexion</p>
        </div>
        <div class="information">
            <div class="adresse">
                <label for="">Mail</label>
                <input type="email" name="email">      
            </div>
            <div class="mdp1">
            <label for="">Mot de passe </label>
                <input type="password" name="mdp">  
            </div>
            <div class="valid">
            <button type="submit"  name="submit">Envoyer</button>
            </div>
        </div>
        <div class="erreur">
        <?php
             if(isset($erreur)){
                 echo $erreur;
            }
        ?>
        </div>
    </form>
</div>


</body>
</html>