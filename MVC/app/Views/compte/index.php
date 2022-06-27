<?php 
    //var_dump($user);
    
?>
<section>
        <div class='bandeau'>
        </div>
</section>   

<section class='compteUser'>
    
    <div class='formUser'>
        <h1><strong>COMPTE</strong></h1>
        <?php if(isset($messageError)): ?>
            <div class="alert alert-danger compteAlert">
            <?=$messageError?>
            </div>
        <?php endif; ?>
        <div class='formRow'>
            <form method="post" action='?p=compte.edit' enctype="multipart/form-data">
                <div class="inputQuatre">
                <div>
                    <?= $form->input('prenom', 'Prénom'); ?>
                    <?= $form->input('nom', 'Nom'); ?>
                </div>
                <div>
                    <?= $form->input('username', 'Username'); ?>
                    <?= $form->input('tel', 'Téléphone', ); ?>

                </div>
                </div>
                <?= $form->input('id', 'id',['type' => 'hidden']); ?>
                <?= $form->input('adresse', 'Adresse'); ?>  
                <?= $form->input('email', 'Email'); ?>
                <button type="submit" class='btn btn-primary'>MODIFIER</button>
            </form>
            <form method="post"action='?p=compte.editPassword'>
                <?= $form->input('goodPassword', 'Ancien Mot de passe',['type' => 'password']); ?>  
                <?= $form->input('newPassword', 'Nouveaux mot de passe',['type' => 'password']); ?>
                <?= $form->input('reNewPassword', 'Confirmer Nouveaux mot de passe',['type' => 'password']); ?>
                <button type="submit" class='btn btn-primary'>MODIFIER</button>
            </form>
        </div>
        
            
        </div>
    

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