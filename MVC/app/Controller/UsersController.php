<?php

namespace App\Controller;

use Core\Auth\DBAuth;
use Core\HTML\BootstrapForm;
use \App;

class UsersController extends AppController {

    public function __construct(){
        parent::__construct();
        $this->loadModel('Users');
    }

    public function login(){
        $errors = false;
        
        if(!empty($_POST)){
            if(isset($_POST['logPanier']) && $_POST['logPanier']== '1' ){
                $errors = 'logPanier';
            }else{
            $auth = new DBAuth(App::getInstance()->getDb());
            if($auth->login($_POST['username'], $_POST['password'])){
                if($_SESSION['user']->role === 'ROLE_ADMIN'){
                    // champ user 'role' administrateur
                    header('Location: index.php?p=admin.produits.index');
                    // champ user 'user'
                }else{
                    header('Location: index.php');
                }
            } else {
                $errors = 'idError';
            }
            }
            
        }
        $form = new BootstrapForm($_POST);
        $this->render('users.login', compact('form', 'errors'));
    }

    /*
    * fonction de déconnexion de l'utilisateur
    */
    public function logout(){
  
        $this->render('users.logout');
    }


    /*
    * fonction d'inscription de l'utilisateur
    */
    public function register(){
        $errors = false;
        $messageError = null;

        if(!empty($_POST)){
            // Vérification des champs de manière générale
            if(empty($_POST['prenom']) || 
               empty($_POST['nom']) || 
               empty($_POST['email']) ||
               empty($_POST['emailVerif']) ||
               empty($_POST['tel']) ||
               empty($_POST['adresse']) ||
               empty($_POST['username']) ||
               empty($_POST['password']) ||
               empty($_POST['passwordVerif'])
               ){
                $errors = true;
                $messageError = "Veuillez remplir tous les champs";
            }else{

                if($_POST['email'] != $_POST['emailVerif']){
                    $errors = true;
                    $messageError = "Les champs d'email sont incorrect";
                }
                if($_POST['password'] != $_POST['passwordVerif']){
                    $errors = true;
                    $messageError = "Les champs de password sont incorrect";
                }

                if(strlen($_POST['tel']) < 10){
                    $errors = true;
                    $messageError = "Le champ de téléphone doit comporter 10 chiffres";
                }

                if(!$errors){
                    $this->registration($_POST);
                }   
            }
        }
        $form = new BootstrapForm($_POST);
        $this->render('users.register', compact('form', 'errors', 'messageError'));
    }

    /*
    * fonction d'enregistrement de l'utilisateur
    */
    public function registration($donnees){
        if (!empty($donnees)) {
            $result = $this->Users->create([
                'username' => $_POST['username'],
                'prenom' => $_POST['prenom'],
                'nom' => $_POST['nom'],
                'email' => $_POST['email'],
                'tel' => $_POST['tel'],
                'adresse' => $_POST['adresse'],
                'role' => 'ROLE_USER',
                'password' => sha1($_POST['password']),
            ]);
            if($result){
                header('Location: index.php?p=users.login');
            }
        }
    }

}