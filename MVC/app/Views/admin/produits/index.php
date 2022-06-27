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
    <div class='formAdmin'>
    <h1><strong>Produits</strong></h1>
    <form method="post" action='
    <?php 
    if(isset($_GET['id']) && !empty($_GET['id'])){
        echo ' ?p=admin.produits.edit&id='.$_GET['id'].'';
    }else {
        echo '?p=admin.produits.add';
    }?>' enctype="multipart/form-data">

    <div class='adminFormLeft'>
        <?= $form->input('titre', 'Titre du produit'); ?>
        <?= $form->input('img1', 'image du produit', ['type' => 'file']); ?>
        <?= $form->input('img2', 'image du produit', ['type' => 'file']); ?>
        <?= $form->input('img3', 'image du produit', ['type' => 'file']); ?>
        <?= $form->input('prix', 'Prix du produit', ['type' => 'number']); ?>
        <?= $form->select('category_id', 'Catégorie', $categories); ?>
    </div>

    <div class='adminFormRight'>
        <?= $form->input('description', 'Description', ['type' => 'textarea']); ?>
        <button class="btn btn-primary"><?php 
    if(isset($_GET['id']) && !empty($_GET['id'])){
        echo ' Modifier';
    }else {
        echo 'Ajouter';
    }?></button>
         <?php 
    if(isset($_GET['id']) && !empty($_GET['id'])){
        ?> <a href="?p=admin.produits.index">Ajouter produits</a><?php
    }?>
    </div>
    </form>
    </div>
</section>




<table>
    <thead>
    <tr>
        <td><strong>ID</strong></td>
        <td><strong>Titre</strong></td>
        <td><strong>Description</strong></td>
        <td><strong>Categories</strong></td>
        <td><strong>Prix</strong></td>
        <td><strong>Actions</strong></td>
    </tr>
    </thead>
    <tbody>
        <?php foreach($produits as $produit): 
            ?>
        <tr>
            <td><?= $produit->id; ?></td>
            <td><?= $produit->titre; ?></td>
            <td><?= $produit->description; ?></td>
            <td><?php
            foreach ($items as $categorie){
                
                if($categorie->id == $produit->category_id){
                    echo $categorie->titre;
                }
            }?></td>
            <td><?= $produit->prix; ?>€</td>
            <td width = '20%'>
                <a class="btn-edit" href="?p=admin.produits.edit&id=<?= $produit->id; ?>"><img  src="asset/icon/edit.svg" alt=""></a>
                <a class="btn-edit" href="?p=admin.produits.delete&id=<?= $produit->id; ?>"><img  src="asset/icon/delete.svg" alt=""></a>

            </td>
        </tr>
        <?php endforeach; ?>

    </tbody>
</table>

<section>
        <div class='bandeau'>
        </div>
</section>   

