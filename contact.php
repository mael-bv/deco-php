<?php
 require_once('src/controller/Message.php');
$message = new Message();


 if(!empty($_POST)){
    $messagerie = $message->message($_POST['submit'],$_POST['check'],$_POST['name'],$_POST['mail'],$_POST['num'],$_POST['mess']);
 }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/contact.css">
    <title>Document</title>
</head>
<body>
<style>
         <?php
            $cssHeader = file_get_contents('./style/header.css');
            echo $cssHeader;
            $cssBtn = file_get_contents('./style/btn-top.css');
            echo $cssBtn;
            $cssFooter = file_get_contents('./style/footer.css');
            echo $cssFooter;
         ?>
</style>
    <?php
        include("./includes/header.php");
        include("./includes/btn-top.php");
    ?>
    

    <br><br><br><br><br>
    <div class="titre">
        <br><br><br>
       <h1 class="contact" aria-label="CONTACT"></h1>
    </div>
    <br><br><br><br>
    <div class="formulaire">
    <h2>Contactez nous !</h2>

    <form method="post">      
            <input name="name" type="text" class="feedback-input" placeholder="Nom" />   
            <input name="mail" type="text" class="feedback-input" placeholder="Email" />
            <input name="num" type="text" class="feedback-input" placeholder="Numéro" />
            <textarea name="mess" class="feedback-input" placeholder="Message"></textarea>
            <div class="condition">  
                <input type="checkbox" placeholder="Condition" name="check">
                <label for="checkbox">Accepter les conditons de généralité</label>
            </div><br>
            <input type="submit" value="Envoyer" name="submit"/>
    </form>
    </div>
    <div class="error">
<?php
   if(isset($err)){
    echo $err;
     }
 ?>
 </div>
    <div class="loca">
        <div class="localisation">
            <div class="titre-loca">
                <p>Nous situer</p>
            </div>
            <div class="contenu-loca">
                <div class="info-loca">
                    <div class="logo-loca">
                        <img src="image/logo2.png" alt="">
                    </div>
                    <div class="adress-loca">
                        <div class="adress1">
                            <p>3/5 Rue Léo Gausson <br> Lagny-sur-Marne</p>
                        </div>
                        <div class="tel">
                            <p><span>Tel :</span> 0619413050</p> 
                        </div>
                        <div class="mail">
                            <p><span>Mail :</span> BienvenuDéco@gmail.com</p>
                        </div>

                    </div>

                </div>
                <div class="photo-loca">
                    <div id="map">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <br><br><br><br><br>
<?php
include("./includes/footer.php")
?>

   
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0ntlkC4Kfvu-cOML94aBtEO2iQvTxtyU&callback=initMap&libraries=&v=weekly"
      async
    ></script>
<script src="./animation/contact.js"></script>


</body>
</html>