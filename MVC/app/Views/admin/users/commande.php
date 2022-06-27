<section>
        <div class='bandeauAdmin'>
        </div>
</section> 

<section class='topAdmin'>
<div class='adminNav'>
    
    <h2><strong>ADMIN</strong></h2>
    <ul>
        <li class='adminLi'><a href="?p=admin.produits.index">Produits</a></li>
        <li class='adminLi'><a href="?p=commande.adminIndex">Achats</a></li>
        <li class='adminLi'><a href="?p=admin.users.index">Utilisateurs</a></li>
        <li class='adminLi'><a href="?p=admin.categories.index">Categories</a></li>
        <li class='adminLi'><a href="?p=admin.code.index">Code</a></li>
        <li class='adminLi'><a href="http://127.0.0.1:5000/">Newsletter</a></li>
        <li><a href=""></a></li>
    </ul>

</div>

    
        <div class='commandes'>
            <h1><strong>ACHATS</strong></h1>
            <?php 
            foreach($commandes as $commande){
                ?>
            <div class='commande'>
                <?php 
                
                
                ?>
                <h2><strong>Commande du <?=$commande->date?></strong></h2>
                <p>Prix total de la commande : <?=$commande->prix_total?> €</p>

                <div class='commandeUser'>
                    <?php 
                    foreach($users as $user){
                        if ($user->id == $commande->user_id){
                            ?>
                            <h3><?=$user->prenom?> <?=$user->nom?> /  <?=$user->username?></h3>
                            <p><?=$user->adresse?></p>
                            <p><?=$user->email?></p>
                            <p>0<?=$user->tel?></p>

                            <?php
                        }
                    }
                    
                    ?>
                    <h3></h3>

                </div>
                 
                

                
                    <?php 
                    $donnees = unserialize($commande->donnees);
                    foreach($donnees as $produit){
                        ?>
                        <div class="commandeProduit">
                            <div class ='img1Panier'><img  src="../public/asset/upload/<?= $produit['produit-img']; ?>" style=""></div>
                
                            <div class='detailsProduits'>
                                <h2><strong><?=$produit['produit-titre']?></strong></h2>
                                <div>
                                    <p><?=$produit['produit-size']?></p>
                                    <p class='left'><?=$produit['produit-prix']?>€</p>
                                </div>
                                <label>Quantité</label>
                                <input type="number" name="nbr" class="form-control produit-nbr" disabled value="<?=$produit['produit-nbr']?>">
                                <p>Prix total : <?=$produit['produit-total'] ?>€ </p>
                            </div>
            
                        </div>
                    
                
                    <?php
                }
                ?>
           </div>
                

            
            <?php       
            }
            ?>
            </div>
            
        </div>

</section>

<section>
        <div class='bandeau'>
        </div>
</section>  