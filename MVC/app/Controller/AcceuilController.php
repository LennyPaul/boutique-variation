<?php

namespace App\Controller;

use Core\Controller\Controller;
use \App;

class AcceuilController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Produit');
        $this->loadModel('Category');

    }

    public function index(){
        $produits = $this->Produit->last();
        $categories = $this->Category->all();
        
        $this->render('acceuil.index', compact('produits', 'categories'));
    }

    public function cgv(){
        $produits = $this->Produit->last();
        $categories = $this->Category->all();
        
        $this->render('acceuil.cgv');
    }


    
    


}