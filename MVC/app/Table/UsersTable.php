<?php
namespace App\Table;

use Core\Table\Table;

class UsersTable extends Table{

    protected $table = 'users';

    /**
     * Récupère les derniers article
     * @return array
     */
    public function last(){
        return $this->query("
            SELECT *
            FROM users
            ORDER BY users.id");
    }

    public function findWithId($id){
        return $this->query("
            SELECT *
            FROM users
            WHERE users.id = ?", [$id], true);
    }
}