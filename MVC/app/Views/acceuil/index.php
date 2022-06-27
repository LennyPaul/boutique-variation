<section class='imgHeader'>
    <div><img src="asset/img/header.jpg" alt=""></div>
</section>
<section class='pres'>
    <h1><strong>QUI SOMMES NOUS ?</strong></h1>
    <p>Variation est une marque française fabriquée au Portugal, qui met un point d’honneur à assurer la qualité de ses produits.</p>
    <p>La marque développe des collections aux matériaux et techniques supérieures tout en proposant un vestiaire universel.</p>
    <p>Née d’une volonté d'être different , à la mode et unis autour d'une passion commune, le streetwear.</p>
    <p>Vous n’avez plus qu’à vous regarder dans le miroir pour comprendre !</p>
</section>
<section class ='lastCollec'>
    <h1><strong>NOTRE DERNIERE COLLECTION</strong></h1>
    <div class='titreColec' >
        <h2 id = 'principe' class ='btn-lastColec btn-principe'>Principe</h2>
        <h2 id = 'rarete' class ='btn-lastColec btn-rarete'>Rareté</h2>
        <h2 id = 'nft' class ='btn-lastColec btn-nft'>NFT</h2>
        <h2 id = 'shop' class ='btn-lastColec btn-shop '>Shop</h2>
    </div>
    <div class='principe'>
        <img src="asset/img/hoodie_whiteScratch.jpg" alt="">
        <div>
            <h3>Decouvrez la nouvelle collection aux logos changable et collectionable : </h3>
            <ul>
                <li> - Changez de logo pour etre assortie a ca tenue</li>
                <li> - Essayez d'avoir les logos les plus rares fournis avec un NFT d'authentification</li>
                <li> - Changez de logo pour etre assortie a ca tenue</li>
                <li> - Essayez d'avoir le logo le plus rare fourni avec un NFT d'authentification</li>
                
            </ul>
        </div>

    </div>
    <div class='rarete'>
        <div>
            <img src="asset/img/logoBl.png" alt="">
            <h3>COMMUN</h3>
        </div>
        <div>
            <img src="asset/img/logoR.png" alt="">
            <h3>RARE</h3>
        </div>
        <div>
            <img src="asset/img/logoV.png" alt="">
            <h3>MYTHIC</h3>
        </div>
        <div>
            <img src="asset/img/logoG.png" alt="">
            <h3>LEGENDAIRE</h3>
        </div>

    </div>
    <div class='nft'>
        <img src="asset/img/hoodie_whiteScratch.jpg" alt="">
        <div>
            <h3>Decouvrez la nouvelle collection aux logos changable et collectionable : </h3>
            <ul>
                <li> - Changez de logo pour etre assortie a ca tenue</li>
                <li> - Essayez d'avoir les logos les plus rares fournis avec un NFT d'authentification</li>
                <li> - Changez de logo pour etre assortie a ca tenue</li>
                <li> - Essayez d'avoir le logo le plus rare fourni avec un NFT d'authentification</li>
                
            </ul>
        </div>

    </div>
    <div class='shop'> 
        
        
        <?php foreach ($produits as $produit): 
        
            if ($produit->category_id == 3){
                
                ?> 
                <div class='produit'>
                <a class='imgUnder' href="" <?= $produit->url ?>"><img src="asset/upload/<?= $produit->img1; ?>" alt=""></a>
                <a class='imgHover' href=" <?= $produit->url ?>"><img src="asset/upload/<?= $produit->img2; ?>" alt=""></a>
                <div class='solid'>
                    <h3><a href=""><?= $produit->titre; ?></a></h3>
                    <p><strong><?= $produit->prix; ?>€</strong></p>
                </div>
            </div>
                <?php
    
            } ?>
            
            
    
        <?php endforeach; ?>
       
    </div>
</section>
<section class ='originalColec'>
    <h1><strong>COLLECTION ORIGINAL</strong></h1>
    <div class="produitsIndex">
        
    <?php foreach ($produits as $produit): 
    
        if ($produit->category_id == 1){
            
            ?> 
            <div class='produit'>
            <a class='imgUnder' href="" <?= $produit->url ?>"><img src="asset/upload/<?= $produit->img1; ?>" alt=""></a>
            <a class='imgHover' href=" <?= $produit->url ?>"><img src="asset/upload/<?= $produit->img2; ?>" alt=""></a>
            <div>
                <h3><a href="<?= $produit->url ?>"><?= $produit->titre; ?></a></h3>
                <p><strong><?= $produit->prix; ?>€</strong></p>
            </div>
            <button class="btn btn-primary"><a href="<?= $produit->url ?>">Acheter</a></button>
        </div>
            <?php

        } ?>
        
        

    <?php endforeach; ?>
        


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