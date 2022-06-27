<section>
        <div class='bandeau'>
        </div>
</section> 

<section class='show'>
    <div class='showTop'>
        <div class='showImage'>
            <div>
                <a href="#"><img class ='img2Show' src="../public/asset/upload/<?= $produit->img2; ?>" style=""></a>
                <a href="#"><img class ='img3Show' src="../public/asset/upload/<?= $produit->img3; ?>" style=""></a>
            </div>
            <a href="#"><img class ='img1Show' src="../public/asset/upload/<?= $produit->img1; ?>" style=""></a>
        </div>
        <div class='showInfo'>
            <h1><strong><?= $produit->titre; ?></strong></h1>
            <h3><?= $produit->prix; ?> €</h3>
            <form action="index.php?p=panier.add" method='post'>
                <?= $form->input('id', 'id', ['type' => 'hidden']); ?>
                 <?= $form->input('prix', 'prix', ['type' => 'hidden']); ?>
                 <?= $form->input('titre', 'titre', ['type' => 'hidden']); ?>
                 <?= $form->input('img1', 'img1', ['type' => 'hidden']); ?>
                <label for="size">Taille :</label>
                <?php $tailles = array("Veuillez choisir une taille"=>"Veuillez choisir une taille","XS"=>"XS","S"=>"S","M"=>"M","L"=>"L","XL"=>"XL","XXL"=>"XXL",) ?>
                <?= $form->select('size', 'size', $tailles,); ?>
                <label for="quantity">Quantité :</label>
                <?php $nbr = array("1"=>"1","2"=>"2","3"=>"3","4"=>"4","5"=>"5","6"=>"6","7"=>"7","8"=>"8","9"=>"9") ?>
                <div class='quantity'><?= $form->select('nbr', 'nbr', $nbr); ?></div>
                        
                <button type="submit" class="btn btn-primary">Ajouter au panier</button>
            </form>
            <div class='infoLivraison'>
                <div >
                    <img src="asset/icon/truck.svg" alt="">
                    <p>Livraison gratuite.</p>
                </div>
                <div>
                    <img src="asset/icon/box.svg" alt="">
                    <p>Retours gratuits.</p>
                </div>
            </div>
        </div>

    </div>
    <di class='showBot'>
        <h2><strong>DESCRIPTION</strong></h2>
        <p><?= $produit->description; ?></p>
    </di>
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


