<?php

namespace App\Controller;

use Core\Controller\Controller;
use Core\HTML\BootstrapForm;
use \App;

class ProduitsController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Produit');
        $this->loadModel('Category');

    }

    public function index(){
        $produits = $this->Produit->last();
        $categories = $this->Category->all();
        $this->render('produits.index', compact('produits', 'categories'));
    }
    

    public function category(){
        $categorie = $this->Category->find($_GET['id']);
       
        if($categorie === false){
            $this->notFound();
        }
        $id_category = $categorie->id;
        $produits = $this->Category->findWithCategory($id_category);
        $categories = $this->Category->all();
        $this->render('produits.category', compact('produits', 'categories', 'categorie'));
    }

    public function show(){

        $produit = $this->Produit->findWithCategory($_GET['id']);
        $produit->size='Veuillez choisir une taille';
        $produit->nbr='nbr';
        App::getInstance()->title = $produit->titre;
        $form = new BootstrapForm($produit);
        $this->render('produits.show', compact('produit','form'));
    }

    

}