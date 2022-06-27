<section>
        <div class='bandeau'>
        </div>
</section>   


<?php if($errors == 'idError'){?>
    <div class="alert alert-danger">
        Identifiants incorrects
    </div>
<?php }else if ($errors == 'logPanier'){ ?>
        <div class="alert alert-danger">
        Veuillez vous connecter avant de passer commande !
    </div>
    <?php } ?>


<div class='register'>
        <div class="img"><img src="asset/img/login.jpg" alt=""></div>
        <div class="leftRegister">
            <h1 class="title">SE CONNECTER</h1>
            <form class='form-login' method="post">
                <?= $form->input('username', 'Pseudo'); ?>
                <?= $form->input('password', 'Mot de passe', ['type' => 'password']); ?>
                <div class="bottomR">
                    <button class="btn btn-primary">CONNEXION</button>
                    <p>Pas encore inscrit ? <a href="index.php?p=users.register">Inscris toi </a></p>
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