<?php
namespace App\Controller;

use Core\Controller\Controller;
use \App;
use Core\HTML\BootstrapForm;

class CommandeController extends AppController {

    public function __construct(){
        parent::__construct();
        $this->loadModel('Commande');
        $this->loadModel('Users');
        
    }

    function index(){
        $commandes = $this->Commande->lastByUser($_SESSION['user']->id);
        $user = $_SESSION['user'];

        $this->render('compte.commande', compact('commandes','user'));

    }
    function adminIndex(){
        if(!empty($_SESSION)){
            if ($_SESSION['user']->role == 'ROLE_ADMIN'){
                $commandes = $this->Commande->last();
                $users = $this->Users->last();
    
        
                return $this->render('admin.users.commande', compact('commandes','users'));
                
            }

        }
        header('Location: index.php');  
    }

    

}