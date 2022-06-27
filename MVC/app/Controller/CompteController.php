<?php

namespace App\Controller;

use Core\Controller\Controller;
use \App;
use Core\HTML\BootstrapForm;

class CompteController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Compte');
        $this->loadModel('Users');

    }

    public function index(){
        if(!empty($_SESSION)){
            $user = $this->Users->find($_SESSION['user']->id);
        
            $user->goodPassword = '';
            $user->newPassword = '';
            $user->reNewPassword = '';
            $form = new BootstrapForm($user);
            

            $this->render('compte.index', compact('user','form'));
        }else{
            header('Locate : index.php');

        }
    }
    public function edit(){
        if (!empty($_POST)) {
            if (!empty($_POST['prenom']) && 
            !empty($_POST['nom']) && 
            !empty($_POST['email']) && 
            !empty($_POST['tel']) && 
            !empty($_POST['adresse']) && 
            !empty($_POST['username'])
            ){
            
            
                $result = $this->Users->update($_POST['id'], [
                    'prenom' => $_POST['prenom'],
                    'nom' => $_POST['nom'],
                    'username' => $_POST['username'],
                    'tel' => $_POST['tel'],
                    'adresse' => $_POST['adresse'],
                    'email' => $_POST['email'],
                ]);
                    
                if($result){
                    unset($_POST);
                    
                }
                return $this->index();
            }else{
                    $messageError = "Veuillez remplir tous les champs";
                    $user = $this->Users->find($_SESSION['user']->id);
            
                    $user->goodPassword = '';
                    $user->newPassword = '';
                    $user->reNewPassword = '';
                    $form = new BootstrapForm($user);
                    
    
                    $this->render('compte.index', compact('form', 'user','messageError'));
    
                    }
            }
                
    }

public function editPassword(){

    if (!empty($_POST)) {
        $user = $this->Users->find($_SESSION['user']->id);
        if(!empty($_POST['goodPassword'])&&!empty($_POST['newPassword'])&&!empty($_POST['reNewPassword'])){
            if(sha1($_POST['goodPassword']) == $user->password){

            
                if($_POST['newPassword']== $_POST['reNewPassword']){
                    $result = $this->Users->update($_SESSION['user']->id, [
                        'password' => sha1($_POST['reNewPassword']),
                    ]);
                        
                    if($result){
                        unset($_POST);
                        
                    }
                    return $this->index();


                    
                }else{
                    $messageError = "Les deux mot de passe ne sont pas identique";
                }
                

            }else{
            $messageError = "Erreur dans votre mot de passe actuel";
            }    
        }else{
        $messageError = "Veuillez remplir tous les champs";
        } 
        $user = $this->Users->find($_SESSION['user']->id);
            
        $user->goodPassword = '';
        $user->newPassword = '';
        $user->reNewPassword = '';
        $form = new BootstrapForm($user);
                    
    
        return $this->render('compte.index', compact('form', 'user','messageError')); 
    } 
}


    

    // public function category(){
    //     $categorie = $this->Category->find($_GET['id']);
    //     if($categorie === false){
    //         $this->notFound();
    //     }
    //     var_dump($_GET);
    //     $produits = $this->Produits->lastByCategory($_GET['id']);
    //     $categories = $this->Category->all();
    //     $this->render('produits.category', compact('produits', 'categories', 'categorie'));
    // }

    // public function show(){

    //     $produit = $this->Produit->findWithCategory($_GET['id']);
    //     App::getInstance()->title = $produit->titre;

    //     $this->render('produits.show', compact('produit'));
    // }

}