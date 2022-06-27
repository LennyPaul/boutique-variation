<?php
namespace App\Entity;

use Core\Entity\Entity;

class CategoryEntity extends Entity{

    public function getUrl(){
        return 'index.php?p=produits.category&id=' . $this->id;
    }
    public function getUrl2(){
        return 'index.php?p=produits.show&id=' . $this->id;
    }

}   