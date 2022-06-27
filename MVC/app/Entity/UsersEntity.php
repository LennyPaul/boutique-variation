<?php
namespace App\Entity;

use Core\Entity\Entity;

class UsersEntity extends Entity{

    public function getUrl(){
        return 'index.php?p=users.show&id=' . $this->id;
    }


}