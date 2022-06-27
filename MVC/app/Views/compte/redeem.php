<?php 
    //var_dump($user);
    
?>
<section>
        <div class='bandeau'>
        </div>
</section>   

<section class='compteUser'>
    
    <div class='formUser'>
        <h1><strong>REDEEM CODE</strong></h1>
        <form class='redeem' method='POST'>
        <?= $form->input('code', 'Entrez votre code ici '); ?> 
        <?php 
            if(!empty($messages)){
                echo $messages;
            }
        ?> 

            <button class='btn btn-primary'>Récupérer NFT</button>
        </form>
    

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