<div class='bandeauBoutique'>
    <h1><strong>BOUTIQUE</strong></h1>

</div>

<section class='categoriesProduits'>
        <?php foreach($categories as $categorie): ?>
            <h2><a href="<?= $categorie->url; ?>"><strong><?= $categorie->titre; ?></strong></h2>
            <div class='produits'>

            
            <?php foreach ($produits as $produit): 
                if ($categorie->id==$produit->category_id){
                    ?>
                    <div class='produit'>
                        <a class='imgUnder' href="" <?= $produit->url ?>"><img src="asset/upload/<?= $produit->img1; ?>" alt=""></a>
                        <a class='imgHover' href=" <?= $produit->url ?>"><img src="asset/upload/<?= $produit->img2; ?>" alt=""></a>
                        <div>
                            <h3><a href="<?= $produit->url ?>"><?= $produit->titre; ?></a></h3>
                            <p><?= $produit->prix; ?>€</p>
                        </div>
                        
                    </div>
                    <?php
                }
                ?>

                


            <?php endforeach; ?>

            </div>
        <?php endforeach; ?>
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

