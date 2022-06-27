<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class UsersController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Users');
    }

    public function index(){
        $users = $this->Users->last();
        if(!empty($_POST)){
            $form = new BootstrapForm($_POST);
        }else{
            $form = new BootstrapForm();
        }
        $this->render('admin.users.index', compact('users','form'));
    }

    public function add(){ 
        if (!empty($_POST)) {

            $result = $this->Produit->create([
                'username' => $_POST['username'],
                'prenom' => $_POST['prenom'],
                'nom' => $_POST['nom'],
                'email' => $_POST['email'],
                'tel' => $_POST['tel'],
                'adresse' => $_POST['adresse'],
                'password' => sha1($_POST['password']),
                'role' => $_POST['role'],
            ]);
            if($result){
                unset($_POST);
                return header('Location: index.php?p=admin.users.index');
            }
        }
        $form = new BootstrapForm($_POST);
        $this->index();
    }

    public function edit(){
        $user = $this->Users->find($_GET['id']);
        $users = $this->Users->all();

        if (!empty($_POST)) {
            
            $result = $this->Users->update($_GET['id'], [
                'username' => $_POST['username'],
                'prenom' => $_POST['prenom'],
                'nom' => $_POST['nom'],
                'email' => $_POST['email'],
                'tel' => $_POST['tel'],
                'adresse' => $_POST['adresse'],
                'role' => $_POST['role'],
            ]);
                
            if($result){
                unset($_POST);
                return $this->index();
            }
        }

        $form = new BootstrapForm($user);
        $this->render('admin.users.index', compact('form','users'));
    }

    
    public function delete(){
        if (!empty($_GET)) {
            $result = $this->Users->delete($_GET['id']);
            return header('Location: index.php?p=admin.users.index');
        }
    }
   


}