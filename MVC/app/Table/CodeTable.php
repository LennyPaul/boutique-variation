<?php
namespace App\Table;

use Core\Table\Table;

class CodeTable extends Table{

    protected $table = 'code';

    /**
     * Récupère les derniers code
     * @return array
     */
    public function last(){
        return $this->query("
            SELECT *
            FROM code ORDER BY id DESC
            ");
    }

}