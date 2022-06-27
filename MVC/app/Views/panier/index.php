<section>
        <div class='bandeau'>
        </div>
</section> 


<section class='panierSec'>
  <h1><strong>PANIER</strong></h1>
  <?php if(!empty($panier)){ ?>
      
        
        <form action="
        <?php 
        if(empty($_SESSION['user'])){
          unset($_POST);
          echo 'index.php?p=users.login';
        }else{
          echo 'index.php?p=panier.recapitulatif';
        }
        ?>" method="POST">
        <div class="panier">
          <?php foreach ($panier as $idProduit => $champs): ?>
            <div class='panierProduit'>
                <input type="hidden" name='logPanier' value='1'>
                <input type="hidden" id="produit-id-<?=$idProduit?>" name="produit-id-<?=$idProduit?>"  class="form-control" value="<?= $idProduit?>">
                <input type="hidden" id="produit-<?=$idProduit?>-total-disabled" name="produit-<?=$idProduit?>-total-disabled" class="form-control" value="<?= $champs['prix']* $champs['nbr']?>">
                <input type="hidden" id="produit-size-<?=$idProduit?>" name="produit-size-<?=$idProduit?>"  class="form-control" value="<?=$champs['size']?>">
                
                <div class ='img1Panier'><img  src="../public/asset/upload/<?= $champs['img1']; ?>" style=""></div>
                <div class="panierProduits">
        
                    <div>
                      <h2><strong><?=$champs['titre']?></strong></h2>
                      <a href="index.php?p=panier.delete&idProduit=<?=$idProduit?>"><img src="asset/icon/delete.svg" alt=""></a>
                    </div>
                    <div>
                      <p><?=$champs['size']?></p>
                      <p class='left'><?=$champs['prix']?>€</p>
                    </div>
        
                      <label>Quantité</label>
        
                      <input type="number" id="produit-<?=$idProduit?>-nbr" name="produit-<?=$idProduit?>-nbr" class="form-control produit-nbr" value="<?=$champs['nbr']?>"  data-produit="<?=$idProduit?>" data-prix="<?=$champs['prix']?>">
                      <p >Prix total : <span id ='produit-<?=$idProduit?>-prixTotal'><?=$champs['prix']* $champs['nbr']?></span>€ </p>
    
                </div>
                </div>
                <?php endforeach; ?>
        
        </div>     
        <div class='rightPanier'>
                  
                      <div>
                        <h3>Total de la commande</h3>
                        <input type="text" id="commande-total-disabled" name="commande-total-disabled" class="form-control" value="<?=$prixTotalCommande?>€" disabled="disabled">
                        <input type="hidden" id="commande-total" name="commande-total" class="form-control" value="<?=$prixTotalCommande?>">
                      </div>
                  
        
                  <button class="btn btn-primary">Payement</button>
        
        </div>
      
      </form>
        <?php
      
  }else{ ?>
      <h1><strong>Pas de panier</strong></h1>
<?php
  }   ?>
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


<script>

  var elements = document.getElementsByClassName('produit-nbr');
  var prixCommande = document.getElementById('commande-total');
  var prixCommandeDisabled = document.getElementById('commande-total-disabled');
  var prixTotalCommande = 0;
  if(elements){
    window.addEventListener('change', changePrix)
  }

  function changePrix(){
    prixTotalCommande = 0;
    
    for (var i = 0; i < elements.length; i++) {
      
      

      var valeur = elements[i].value;
      var produit = elements[i].dataset.produit;
      var prix = elements[i].dataset.prix;
     
      var prixUnite = document.getElementById('produit-'+produit+'-total');
      var prixUniteDisabled = document.getElementById('produit-'+produit+'-total-disabled');

      var resulatPrixtotal = prix*valeur;
      console.log(resulatPrixtotal);
      var prixTotal = document.getElementById('produit-'+produit+'-prixTotal')
      var prixTotalDisabled = document.getElementById('produit-'+produit+'-total-disabled');
      
      prixTotal.innerHTML = resulatPrixtotal;
      prixTotalDisabled.setAttribute('value',resulatPrixtotal)
       


      

      prixTotalCommande = prixTotalCommande + resulatPrixtotal;

      prixCommandeDisabled.setAttribute('value', prixTotalCommande+"€")
      prixCommande.setAttribute('value', prixTotalCommande)

    }

  }

</script>