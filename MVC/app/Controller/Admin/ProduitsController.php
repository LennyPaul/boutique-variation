<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class ProduitsController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Produit');
        $this->loadModel('Category');
    }

    public function index(){
        $categories = $this->Category->extract('id', 'titre');
        $items= $this->Category->all();

        if(!empty($_POST)){
            $form = new BootstrapForm($_POST);
        }else{
            $form = new BootstrapForm();
        }

       
        $produits = $this->Produit->all();
        $this->render('admin.produits.index', compact('produits', 'form','categories','items'));
    }

    public function add(){
        if (!empty($_POST)) {
            //Enregistrement de l'image
            $image1 = $this->uploadImage('img1');
            $image2 = $this->uploadImage('img2');
            $image3 = $this->uploadImage('img3');

            $result = $this->Produit->create([
                'titre' => $_POST['titre'],
                'description' => $_POST['description'],
                'prix' => $_POST['prix'],
                'category_id' => $_POST['category_id'],
                'img1' => ($image1)? $image1 : null,
                'img2' => ($image2)? $image2 : null, 
                'img3' => ($image3)? $image3 : null,  
            ]);
            if($result){
                unset($_POST);
                return header('Location: index.php?p=admin.produits.index');
            }
        }
        $this->loadModel('Category');
        $categories = $this->Category->extract('id', 'titre');
        $form = new BootstrapForm($_POST);
        $this->index();
    }

    public function edit(){
        $produit = $this->Produit->find($_GET['id']);
        $produits = $this->Produit->all();
        $items= $this->Category->all();

        if (!empty($_POST)) {
            

           
            //Enregistrement de l'image
                $image1 = $this->uploadImage('img1');
                $image2 = $this->uploadImage('img2');
                $image3 = $this->uploadImage('img3');

                $result = $this->Produit->update($_GET['id'], [
                    'titre' => $_POST['titre'],
                    'description' => $_POST['description'],
                    'img1' => ($image1)? $image1 : $produit->img1,
                    'img2' => ($image2)? $image2 : $produit->img2,
                    'img3' => ($image3)? $image3 : $produit->img3,
                    'category_id' => $_POST['category_id'],
                    'prix' => $_POST['prix']
                ]);
                    
                if($result){
                    unset($_POST);
                     return header('Location: index.php?p=admin.produits.index');
                }
            }
            
            $this->loadModel('Category');
            $categories = $this->Category->extract('id', 'titre');

            $form = new BootstrapForm($produit);
            $this->render('admin.produits.index', compact('categories', 'form','produits','items')); 
        
    }

    public function delete(){
        if (!empty($_GET)) {
            $result = $this->Produit->delete($_GET['id']);
            return header('Location: index.php?p=admin.produits.index');
        }
    }

    /*
    * Fonction d'enregistrement d'image 
    */
    public function uploadImage($img){
        //Vérifier si le formulaire a été soumis
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            // Vérifie si le fichier a été uploadé sans erreur.
            if(isset($_FILES[$img]) && $_FILES[$img]["error"] == 0){

                $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
                $filename = $_FILES[$img]["name"];
                $filetype = $_FILES[$img]["type"];
                $filesize = $_FILES[$img]["size"];
                
                // Vérifie l'extension du fichier
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
                if(!array_key_exists($ext, $allowed)) die("Erreur : Veuillez sélectionner un format de fichier valide.");

                // Vérifie la taille du fichier - 2Mo maximum
                $maxsize = 2 * 1024 * 1024;
                if($filesize > $maxsize) die("Error: La taille du fichier est supérieure à la limite autorisée 2Mo.");

                // Vérifie le type MIME du fichier
                if(in_array($filetype, $allowed)){
                    move_uploaded_file($_FILES[$img]["tmp_name"], "../public/asset/upload/" . $_FILES[$img]["name"]);
                    //echo "Votre fichier a été téléchargé avec succès.";
                    return $filename;
                } else{
                    echo "Error: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer."; 
                    return false;
                }
            } else{
               
                return false;
            }
        }
    }

}