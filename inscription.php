<?php
//require_once("includes/isConnected.php");
require_once("src/Controller/InscriptionController.php");


if(!empty($_POST)){
    $inscription = new InscriptionController();
    $inscription->inscription($_POST['submit'],$_POST['email'],$_POST['motdepasse']);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/identification.css">
    <title>Document</title>
</head>
<body>
    <form method="post" action=""  class="form">
            <div class="title">Welcome</div>
            <div class="subtitle">Création de compte</div>
            <div class="input-container ic2">
                <input id="email" class="input" type="text" name="email" placeholder=" " />
                <div class="cut cut-short"></div>
                <label for="email" class="placeholder"  >Email</>
            </div>
            <div class="input-container ic2">
                <input id="lastname" class="input" type="password" name="motdepasse" placeholder=" " />
                <div class="cut"></div>
                <label for="lastname" class="placeholder" >Mot de passe</label>
            </div>
            <button type="submit" name="submit" class="submit">inscription</button>
    </form>
</body>
</html>