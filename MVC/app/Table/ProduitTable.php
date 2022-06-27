<?php
namespace App\Table;

use Core\Table\Table;

class ProduitTable extends Table{

    protected $table = 'produits';

    /**
     * Récupère les derniers produits
     * @return array
     */
    public function last(){
        return $this->query("
        SELECT *
        FROM produits
        ORDER BY produits.id DESC");
    }

    /**
     * Récupère un produit en liant la catégorie associée
     * @param $id int
     * @return \App\Entity\ProduitEntity
     */
    public function findWithCategory($id){
        return $this->query("
            SELECT *
            FROM produits
            WHERE produits.id = ?", [$id], true);
    }
}