<?php
namespace App\Table;

use Core\Table\Table;

class CategoryTable extends Table{

    protected $table = "categories";
    public function findWithCategory($id){
        return $this->query("
            SELECT *
            FROM produits
            WHERE produits.category_id = ?", [$id]);
    }

}