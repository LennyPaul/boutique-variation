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
    <h1><strong>Code</strong></h1>
    <form method="post" action='index.php?p=admin.code.add' enctype="multipart/form-data">

    <div class='adminFormLeft'>
        <button class="btn btn-primary"> Generer Code </button>
    </div>

    </form>
    </div>
</section>




<table>
    <thead>
    <tr>
        <td><strong>ID</strong></td>
        <td><strong>Code</strong></td>

    </tr>
    </thead>
    <tbody>
        <?php foreach($codes as $code): 
            ?>
        <tr>
            <td><?= $code->id; ?></td>
            <td><?= $code->code; ?></td>
            
        </tr>
        <?php endforeach; ?>

    </tbody>
</table>

<section>
        <div class='bandeau'>
        </div>
</section>   

