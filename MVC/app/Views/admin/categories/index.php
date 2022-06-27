
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
    <h1><strong>Categories</strong></h1>

    <form class='formCat' method="post" action='
    <?php 
    if(isset($_GET['id']) && !empty($_GET['id'])){
        echo ' ?p=admin.categories.edit&id='.$_GET['id'].'';
    }else {
        echo '?p=admin.categories.add';
    }?>'>
        <div>
            <?= $form->input('titre', 'Titre de la catégorie'); ?>
            <button class="btn btn-primary">
                <?php 
    if(isset($_GET['id']) && !empty($_GET['id'])){
        echo ' Modifier';
    }else {
        echo 'Ajouter';
    }?></button>
     <?php 
    if(isset($_GET['id']) && !empty($_GET['id'])){
        ?> <a href="?p=admin.categories.index">Ajouter produits</a><?php
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
        <td><strong>Actions</strong></td>
    </tr>
    </thead>
    <tbody>
        <?php foreach($items as $category): ?>
        <tr>
            <td><?= $category->id; ?></td>
            <td><?= $category->titre; ?></td>
            <td width = '20%'>
                <a class="btn-edit" href="?p=admin.categories.edit&id=<?= $category->id; ?>"><img  src="asset/icon/edit.svg" alt=""></a>
                <a class="btn-edit" href="?p=admin.categories.delete&id=<?= $category->id; ?>"><img  src="asset/icon/delete.svg" alt=""></a>

            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<section>
        <div class='bandeau'>
        </div>
</section>   

