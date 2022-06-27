
    <section>
        <div class='bandeau'>

        </div>
    </section>    
    
    
    
<?php if($errors): ?>
    <div class="alert alert-danger">
        <?=$messageError?>
    </div>
<?php endif; ?>




    <div class='register'>
        <div class="img"><img src="asset/img/register.jpg" alt=""></div>
        <div class="leftRegister">
            <h1 class="title">S'INSCRIRE</h1>
            <form class='form-login' method="post">
                <?= $form->input('username', 'Pseudo'); ?>
                <?= $form->input('prenom', 'Prénom'); ?>
                <?= $form->input('nom', 'Nom'); ?>
                <?= $form->input('tel', 'Téléphone', ['type' => 'text', 'maxlength' => '10']); ?>
                <?= $form->input('email', 'Email', ['type' => 'email']); ?>
                <?= $form->input('emailVerif', 'Confirmer Email', ['type' => 'email']); ?>
                <?= $form->input('adresse', 'Adresse', ['type' => 'adress']); ?>
                <?= $form->input('password', 'Mot de passe', ['type' => 'password']); ?>
                <?= $form->input('passwordVerif', 'Confirmer le mot de passe', ['type' => 'password']); ?>
                <div class="bottomR">
                    <button class="btn btn-primary">S'INSCRIRE</button>
                    <p>Déja inscrit ? <a href="index.php?p=users.login">Connecte toi</a></p>
                </div>
            </form>
        </div>
    </div>

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



