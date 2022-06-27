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
        <h1><strong>Users</strong></h1>

        <form method="post" enctype="multipart/form-data">
                <div class='adminFormLeft'>
                    <?= $form->input('username', 'Pseudo'); ?>
                    <?= $form->input('prenom', 'Prénom'); ?>
                    <?= $form->input('nom', 'Nom'); ?>

                    <?= $form->input('tel', 'Téléphone', ['type' => 'text', 'maxlength' => '10']); ?>
                </div>
                <div class='adminFormRight  adminUserFormRight'>
                    <?= $form->input('email', 'Email', ['type' => 'email']); ?>
                    <?= $form->input('adresse', 'Adresse', ['type' => 'adress']); ?>
                    <?= $form->input('role', 'Role'); ?>

                    <button class="btn btn-primary">Modifier</button>
                </div>
        
</section>




<table>
    <thead>
    <tr>
        <td><strong>ID</strong></td>
        <td><strong>Username</strong></td>
        <td><strong>Prénom</strong></td>
        <td><strong>Nom</strong></td>
        <td><strong>Tel</strong></td>
        <td><strong>Adresse</strong></td>
        <td><strong>Email</strong></td>
        <td><strong>Role</strong></td>
    </tr>
    </thead>
    <tbody>
        <?php foreach($users as $user): ?>
        <tr>
            <td><?= $user->id; ?></td>
            <td><?= $user->username; ?></td>
            <td><?= $user->prenom; ?></td>
            <td><?= $user->nom; ?></td>
            <td><?= $user->tel; ?></td>
            <td><?= $user->adresse; ?></td>
            <td><?= $user->email; ?></td>
            <td>
                <?php 
                if($user->role == 'ROLE_ADMIN'){
                    echo 'ADMIN';
                }else{
                    echo 'CLIENT';
                }
                
                ?>
                </td>
            
            <td width = '20%'  >
                <a  style='widht:100%;'class="btn-edit" href="?p=admin.users.edit&id=<?= $user->id; ?>"><img  src="asset/icon/edit.svg" alt=""></a>
                <a class="btn-edit" href="?p=admin.users.delete&id=<?= $user->id; ?>"><img  src="asset/icon/delete.svg" alt=""></a>

            </td>
        </tr>
        <?php endforeach; ?>

    </tbody>
</table>

<section>
        <div class='bandeau'>
        </div>
</section>   

