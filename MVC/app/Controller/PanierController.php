<?php

namespace App\Controller;

use Core\Controller\Controller;
use \App;

class PanierController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Post');
        $this->loadModel('Category');
        $this->loadModel('Produit');
        $this->loadModel('Commande');
    }

    /**
     * Page de rectification des produits 
     */
    public function index(){
    

        $panier =  (!empty($_SESSION['panier']['produit']))? $_SESSION['panier']['produit'] : null ;
        $prixTotalCommande = 0;

        if($panier){
            foreach($panier as $prix){
                $resultat = intval($prix["prix"]) * intval($prix["nbr"]); 
                $prixTotalCommande += $resultat;
            }
        }
        $this->render('panier.index', compact('panier', 'prixTotalCommande'));
    }    
    /**
     * Ajout dans le panier
     */
    public function add(){

        $referer = $_SERVER['HTTP_REFERER']; 
        if($_POST['size'] != 'Veuillez choisir une taille'){
            $_SESSION['panier']['produit'][$_POST['id']]['prix'] = $_POST['prix'];
            $_SESSION['panier']['produit'][$_POST['id']]['nbr'] += $_POST['nbr'];
            $_SESSION['panier']['produit'][$_POST['id']]['titre'] = $_POST['titre'];
            $_SESSION['panier']['produit'][$_POST['id']]['size'] = $_POST['size']; 
            $_SESSION['panier']['produit'][$_POST['id']]['img1'] = $_POST['img1'];           
        } 
        header('Location: '.$referer.'');
       
    }

    /**
     * Page de recapitulatif Liste du panier
     */
    public function recapitulatif(){

        $produits = $_POST;
        $produitsAll = array();

         foreach($produits as $key => $produit){
            $produitSelect = '';
            if(!empty($produits['produit-id-'.$produit])){

                $produitSelect = $this->Produit->findWithCategory($produit);
                $produitsAll['produit'][$produitSelect->id]['produit-id'] = $produits['produit-id-'.$produit];
                $produitsAll['produit'][$produitSelect->id]['produit-nbr'] = $produits['produit-'.$produit.'-nbr'];
                $produitsAll['produit'][$produitSelect->id]['produit-total'] = $produits['produit-'.$produit.'-total-disabled'];
                $produitsAll['produit'][$produitSelect->id]['produit'] = $produitSelect;
                $produitsAll['produit'][$produitSelect->id]['produit-size'] = $produits['produit-size-'.$produit];

            }   
            $produitsAll['commande']['commande-total']=  $produits['commande-total'];
         }
        $this->render('panier.recapitulatif', compact('produitsAll'));
    }

    /**
     * Page de confirmation ajout dans table commande et détruire le panier
     */
    public function confirmation(){

        $referer = $_SERVER['HTTP_REFERER']; 

        if(!empty($_POST['user_id'])){
            $produits = $_POST;
            $produitsAll = array();

            foreach($produits as $key => $produit){
                $produitSelect = '';
                if(!empty($produits['produit-id-'.$produit])){

                    $produitSelect = $this->Produit->findWithCategory($produit);
                    $produitsAll[$produitSelect->id]['produit-id'] = $produits['produit-id-'.$produit];
                    $produitsAll[$produitSelect->id]['produit-titre'] = $produits['produit-titre-'.$produit];
                    $produitsAll[$produitSelect->id]['produit-nbr'] = $produits['produit-nbr-'.$produit];
                    $produitsAll[$produitSelect->id]['produit-total'] = $produits['produit-total-'.$produit];
                    $produitsAll[$produitSelect->id]['produit-prix'] = $produits['produit-prix-'.$produit];
                    $produitsAll[$produitSelect->id]['produit-img'] = $produits['produit-img-'.$produit];
                    $produitsAll[$produitSelect->id]['produit-size'] = $produits['produit-size-'.$produit];

                }   
            }

            $result = $this->Commande->create([
                'user_id' => $_POST['user_id'],
                'donnees' => serialize($produitsAll),
                'prix_total' => $_POST['commande-total'],
            ]);

            // Détruire session panier
            unset($_SESSION['panier']);

            $this->render('panier.confirmation');
        }else{

            header('Location: '.$referer.'');
        }

    }

    public function delete(){
        $referer = $_SERVER['HTTP_REFERER']; 

        if(!empty($_GET['idProduit'])){

            unset($_SESSION['panier']['produit'][$_GET['idProduit']]);

        } 
        header('Location: '.$referer.'');

    }

}