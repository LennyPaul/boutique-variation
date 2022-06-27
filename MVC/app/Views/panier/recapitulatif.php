
<section>
        <div class='bandeau'>

        </div>
</section>   

<h1 style='margin-left : 10%;   margin-top: 5%;'><strong>RECAPITULATIF COMMANDE</strong></h1>
<section class='recap'>
    <div class='panier'>
    <?php
    
    foreach($produitsAll['produit'] as $produit){
  ?>
    
    

                <div class="panierProduit">
                    <div class ='img1Panier'><img  src="../public/asset/upload/<?= $produit['produit']->img1; ?>" style=""></div>
        
                    <div class='panierProduits'>
                        <h2><strong><?=$produit['produit']->titre ?></strong></h2>
                        <div>
                          <p><?=$produit['produit-size']?></p>
                          <p class='left'><?=$produit['produit']->prix?>€</p>
                        </div>
                          <label>Quantité</label>
                          <input type="number" name="nbr" class="form-control produit-nbr" disabled value="<?=$produit['produit-nbr']?>">
                          <p>Prix total : <?=$produit['produit-total'] ?>€ </p>
                    </div>
    
                </div>
    
<?php  
} ?>
    </div>
    <div class='rightRecap'>
    <div class='topRecap'>
        <?php
        foreach($produitsAll['commande'] as $commande){ 
          ?>
        <div>
          <p>Total de la commande : <?=$commande?>€</p>
        </div>
        <?php
        }
        ?>
        <button class="btn btn-primary"><a href="index.php?p=panier.index"> Modifier la commande</a></button>
    </div>
    <div>
    <div class ='payement'>
        <h3><strong>Payement</strong></h3>
        <form action="index.php?p=panier.confirmation" method="POST">
        <?php foreach($produitsAll['produit'] as $id => $produit){ ?>

            <input type="hidden" name="produit-id-<?=$id;?>" id="produit-id-<?=$id;?>" value="<?=$id;?>">
            <input type="hidden" name="produit-titre-<?=$id;?>" id="produit-titre-<?=$id;?>" value="<?=$produit['produit']->titre;?>" >
            <input type="hidden" name="produit-nbr-<?=$id;?>" id="produit-nbr-<?=$id;?>" value="<?=$produit['produit-nbr']?>" >
            <input type="hidden" name="produit-total-<?=$id;?>" id="produit-total-<?=$id;?>" value="<?=$produit['produit-total']?>" >
            <input type="hidden" name="produit-size-<?=$id;?>" id="produit-size-<?=$id;?>" value="<?=$produit['produit-size']?>" >
            <input type="hidden" name="produit-img-<?=$id;?>" id="produit-img-<?=$id;?>" value="<?=$produit['produit']->img1?>" >
            <input type="hidden" name="produit-prix-<?=$id;?>" id="produit-prix-<?=$id;?>" value="<?=$produit['produit']->prix?>" >
            <?php foreach($produitsAll['commande'] as $commande){ ?>
            <input type="hidden" name="commande-total" id="commande-total" value="<?=$commande;?>" >
            <?php }?>

        <?php }?>

        <?php 
            if(isset($_SESSION['auth']) && !empty($_SESSION['auth'])){
        ?>
            <input type="hidden" name="user_id" id="user_id" value="<?=$_SESSION['user']->id?>" >

        <?php }?>   
        <input class="form-control" type="text" placeholder='Numero de carte'>
        <div class='row'>
            <input class="form-control" type="text" placeholder='MM/YY'>
            <input class="form-control" type="text" placeholder='CVV'>
        </div>
        <input class="form-control" type="text" placeholder='Nom et prénom'>
        <button type='submit' class="btn btn-primary">Payer</button>
        


        </form>
    </div>
        
    </div>
</section> 

<section class = 'newsletter'>
        <div class='textNew'>
            <p><strong>RECEVEZ</strong></p>
            <p><strong>NOTRE</strong></p>
            <p><strong>NEWSLETTER</strong></p>
        </div>
        <div class="form">
        <form action="?p=newsletter.add" method='POST'>
                <input type="mail" name="email" placeholder='EMAIL' required>
                <button type='submit' class="btn-primary">ENVOYER</button>
            </form>
        </div>

    <div>

    </div>

</section>