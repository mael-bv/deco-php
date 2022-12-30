<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/realisation.css">
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
        require_once("src/back/Affichage.php");
        $files = new Affichage();
        $all = $files->AfficheFile('filesimages');
    ?>
    
    <br><br><br><br><br><br><br><br>
    <div class="titre-rea">
        <h1><span>Nos réalisations</span></h1>
    </div>
    
    <div class="trait"></div>
    
    <div class="image-container">
        <div class="img-s">
            <img src="image/aa.jpg" alt="" onclick="change20()">
        </div>
        <div class="img-s"> <img src="image/aa(1).jpg" onclick="change1()" alt=""></div>
        <div class="img-s"> <img src="image/11.jpg" onclick="change2()" alt=""></div>
        <div class="img-s"> <img src="image/bb (1).jfif" onclick="change3()" alt=""></div>
        <div class="img-s"> <img src="image/22.jpg" alt=""   onclick="change4() "></div>
        <div class="img-s"> <img src="image/sss.jpg" onclick="change5()" alt=""></div>
        <div class="img-s"> <img src="image/33.jpg" onclick="change6()" alt=""></div>
        <div class="img-s"> <img src="image/dd.jpg" onclick="change7()" alt=""></div>
        <div class="img-s"> <img src="image/44.jpg" onclick="change8()" alt=""></div>
        <div class="img-s"> <img src="image/ee.jpg" onclick="change9()" alt=""></div>
        <div class="img-s"> <img src="image/55.jpg" onclick="change10()" alt=""></div>
        <div class="img-s"> <img src="image/ff.jpg" onclick="change11()" alt=""></div>
        <div class="img-s"> <img src="image/66.jpg" onclick="change12()" alt=""></div>
        <div class="img-s"> <img src="image/gg.jpg" onclick="change13()" alt=""></div>
        <div class="img-s"> <img src="image/77.jpg" onclick="change14()" alt=""></div>
        <div class="img-s"> <img src="image/hh.jpg" onclick="change15()" alt=""></div>
        <div class="img-s"> <img src="image/88.jpg" onclick="change16()" alt=""></div>
        <div class="img-s"> <img src="image/ii.jpg" onclick="change17()" alt=""></div>
        <div class="img-s"> <img src="image/99.jpg" onclick="change18()" alt=""></div>
        <div class="img-s"> <img src="image/jj.jpg" onclick="change19()" alt=""></div>
        <div class="img-s"> <img src="image/111.jpg" onclick="change21()" alt=""></div>
        <div class="img-s"> <img src="image/112.jpg" onclick="change22()" alt=""></div>
        <div class="img-s"> <img src="image/113.jpg" onclick="change23()" alt=""></div>
        <div class="img-s"> <img src="image/114.jpg" onclick="change24()" alt=""></div>
        <div class="img-s"> <img src="image/115.jpg" onclick="change25()" alt=""></div>
        <div class="img-s"> <img src="image/116.jpg" onclick="change26()" alt=""></div>
        <div class="img-s"> <img src="image/117.jpg" onclick="change27()" alt=""></div>
        <div class="img-s"> <img src="image/118.jpg" onclick="change28()" alt=""></div>
        <div class="img-s"> <img src="image/210.jpg" onclick="change29()" alt=""></div>
        <div class="img-s"> <img src="image/211.jpg" onclick="change30()" alt=""></div>
        <div class="img-s"> <img src="image/213.jpg" onclick="change31()" alt=""></div>
        <div class="img-s"> <img src="image/214.jfif" onclick="change32()" alt=""></div>
        <?php while ($datas = $all->fetch()){?>
        <img src="<?=$datas['url']; ?>" alt="" class="img-s">
         <?php } ?>
        
 
        

    </div>
    <div class="img-appa">
        <div class="close"><p>X</p></div>
        <i class="fa-solid fa-xmark"></i>
        <img src="" alt="" id="newF">
    </div>
    <br><br><br><br><br><br><br><br>
<?php
include("./includes/footer.php")
?>
<script src="./animation/realisation.js"></script>    
</body>
</html>