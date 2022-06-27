<section>
        <div class='bandeau'>
        </div>
</section>   

<section class='compteUser'>
    
           <div class='commandes'>
            <h1><strong>COMMANDE</strong></h1>
            <?php 
            foreach($commandes as $commande){
                ?>
            <div class='commande'>
                <?php 
                
                
                ?>
                <h2>Commande du <?=$commande->date?></h2>
                <p>Prix total de la commande : <?=$commande->prix_total?> €</p>
                 
                

                
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

    <div class='compteNav'>
        
        <h2><strong><?=$user->username?></strong></h2>
        <ul>
            <li class='compteLi'><a href="?p=compte.index">Géneral</a></li>
            <li class='compteLi'><a href="?p=commande.index">Commandes</a></li>
            <li class='compteLi'><a href="?p=code.index">Redeem Code</a></li>
            <li><a href=""></a></li>
        </ul>

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