<section>
        <div class='bandeauAdmin'>
        </div>
</section> 


<section class='topAdmin'>
    <div class='adminNav'>
    
        <h2><strong>ADMIN</strong></h2>
        <ul>
            <li class='adminLi'><a href="?p=admin.produits.index">Produits</a></li>
            <li class='adminLi'><a href="?p=admin.achats.index">Achats</a></li>
            <li class='adminLi'><a href="?p=admin.users.index">Utilisateurs</a></li>
            <li class='adminLi'><a href="?p=admin.categories.index">Categories</a></li>
            <li><a href=""></a></li>
        </ul>
    
    </div>
    <div class='formAdmin'>
    <h1><strong>Articles</strong></h1>



    </div>
</section>

<p>
    <a href="?p=admin.posts.add" class="btn btn-success">Ajouter</a>
</p>

<table>
    <thead>
    <tr>
        <td><strong>ID</strong></td>
        <td><strong>Titre</strong></td>
        <td><strong>Actions</strong></td>
    </tr>
    </thead>
    <tbody>
        <?php foreach($posts as $post): ?>
        <tr>
            <td><?= $post->id; ?></td>
            <td><?= $post->titre; ?></td>
            <td>
                <a class="btn-edit" href="?p=admin.posts.edit&id=<?= $produit->id; ?>"><img  src="asset/icon/edit.svg" alt=""></a>
                <a class="btn-edit" href="?p=admin.posts.delete&id=<?= $produit->id; ?>"><img  src="asset/icon/delete.svg" alt=""></a>

            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<section>
        <div class='bandeau'>
        </div>
</section>   

