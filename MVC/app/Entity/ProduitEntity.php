<?php
namespace App\Entity;

use Core\Entity\Entity;

class ProduitEntity extends Entity{

    public function getUrl(){
        return 'index.php?p=produits.show&id=' . $this->id;
    }

}