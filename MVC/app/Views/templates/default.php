<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="asset/img/favicon.png">

    <title><?= App::getInstance()->title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/main.css" rel="stylesheet">
    <script src="js/main.js" defer></script>

</head>

<body>
<header>
    <a class="" href="index.php"><img src="asset/img/variation.png" alt=""></a>
        <nav>  
        <?php 

        if (empty($_SESSION)) {
            $_SESSION['user']='';
        }
                if(!empty($_SESSION['user'])){
                    if ($_SESSION['user']->role=='ROLE_ADMIN') {
                        ?><a href="?p=admin.produits.index" style='color:red;'>ADMIN</a><?php
                    }
                    
                }
                ?>   
                <a class='home 'href="index.php">HOME</a>
                <div class='catSous'><a href="?p=produits.index">SHOP </a>
                    <ul class='catUlSous'>
                        <li><a href="?p=produits.category&id=3">Scratch</a></li>
                        <li><a href="?p=produits.category&id=1">Originals</a></li>
                        <li><a href="?p=produits.category&id=2">Colors</a></li>
                    </ul>
                </div>

                <a class='logo' href="?p=panier.index"><img src="asset/icon/panier.svg" alt=""></a>
                <div class='logo compte'>
                    <a  href="#"><img src="asset/icon/compte.svg" alt=""></a>
                            <ul class='sous'>
                                <?php
                                if(empty($_SESSION['user'])){
                                    
                                    ?> 
                                    <li><a href="?p=users.login">Connexion</a></li>
                                    <li><a href="?p=users.register">S'inscrire</a></li>
                                    <?php
                                }
                                    else{
                                        ?> 
                                        <li><a href="?p=compte.index">Compte</a></li>
                                        <li><a href="?p=commande.index">Commandes</a></li>
                                        <li><a href="?p=users.logout">Deconnexion</a></li>
                                        <?php
                                    }
                                
                                ?>
                            

                            
                            </ul>

                    
                </div>
                
        </nav>
        

</header>




        
        <?= $content;?>



<footer>
    <div class='top'>
        <div class='contact' >
            <h2><strong>CONTACT</strong></h2>
            <p>Une équipe d’experts à votre service au :</p>
            <p> <strong>+33 7 81 90 24 27</strong> </p>
            <p>Du lundi au vendredi de 10h à 18h</p>
            <div class='btnContact'>
                <a  target=_blank href="mailto:contact@variationstore.fr?subject=Contact"><div class='picto-mail'><img src="asset/icon/picto-mail.svg" alt=""></div><strong>Nous écrire</strong></a>

            </div>
            <p><strong>NOS RESEAUX SOCIAUX</strong></p>
            <div class='rs'>
                <a href="https://www.instagram.com/variationstore.fr/"><img src="asset/icon/picto-insta.svg" alt=""></a>
                <a href=""><img src="asset/icon/picto-facebook.svg" alt=""></a>
                <a href=""><img src="asset/icon/picto-tiktok.svg" alt=""></a>
                <a href=""><img src="asset/icon/picto-youtube.svg" alt=""></a>
            </div>
        </div>

        <div class='liens'>
                <div class='colLien'>
                    <div class='marque'>
                        <h2><strong>LA MARQUE VARIATION</strong></h2>
                        <div class='lien'>
                            <div class='eachLien'>
                                <a href="">La marque</a>
                                <a href="">Offres special</a>
                                <a href="">Recrutement</a>
                                
                            </div>
                            <div class='eachLien'>
                                <a href="">Devenir Ambassadeur</a>
                                <a href="">Avis Client</a>
                                <a href="">Inspirations</a>
                            </div>
                        </div>
                    </div>
                    <div class="services">
                        <h2><strong>SERVICES</strong></h2>

                                <div class='service'>
                                    <a href="">Facilités de payement</a>
                                    <a href="">Livraison</a>
                                    <a href="">Services Clients</a>
                                </div>
                    
                    </div>
        
                </div>
                <div class='barLien'>
                    <a  class='Astart' href="">Mentions Legals</a> 
                    <a href="">Charte de confidentialité</a> 
                    <a href="">FAQ</a> 
                    <a class="Afin" target=_blank href="index.php?p=acceuil.cgv">CGV</a> 
                </div>

            <div>

        </div>        
        </div>
    </div>
    <div class='bot'>
        <div class ='payement'>
            <p>Mode de payements :</p>
            <a href=""><img src="asset/icon/icon-CB.svg" alt=""></a>
            <a href=""><img src="asset/icon/icon-visa.svg" alt=""></a>
            <a href=""><img src="asset/icon/icon-mastercrad.svg" alt=""></a>
            <a class='more'href=""><img src="asset/icon/icon-paypal.svg" alt=""></a>
            <a class='more'href=""><img src="asset/icon/icon-applepay.svg" alt=""></a>
            <a class='more' href=""><img src="asset/icon/icon-gplay.svg" alt=""></a>
            <p class ='certif'><span>© 2021 VARIATIONSTORE</span></p>
        </div>
            
        
    </div>
    
</footer>


</body>
</html>
