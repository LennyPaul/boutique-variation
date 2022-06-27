<div class="row">
    <div class="col-sm-8">
        
        <?php foreach ($posts as $post): ?>

            <h2><a href="<?= $post->url ?>"><?= $post->titre; ?></a></h2>

            <p><em><?= $post->categorie; ?></em></p>

            <p><?= $post->extrait; ?></p>

        <?php endforeach; ?>

    </div>


</div>

<section class = 'newsletter'>
        <div class='textNew'>
            <p><strong>RECEVEZ</strong></p>
            <p><strong>NOTRE</strong></p>
            <p><strong>NEWSLETTER</strong></p>
        </div>
        <div class="form">
            <form action="">
                <input type="mail" placeholder='EMAIL'>
                <button type="submit" class="btn-primary">ENVOYER</button>
            </form>
        </div>

    <div>

    </div>

</section>