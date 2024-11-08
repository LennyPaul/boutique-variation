<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class CategoriesController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Category');
    }

    public function index(){
        $form = new BootstrapForm();
        $items = $this->Category->all();
        $this->render('admin.categories.index', compact('items','form'));
    }

    public function add(){
        if (!empty($_POST)) {
            $result = $this->Category->create([
                'titre' => $_POST['titre'],
            ]);
            unset($_POST);
            return $this->index();
        }
        $form = new BootstrapForm($_POST);
        $this->render('admin.categories.edit', compact('form'));
    }

    public function edit(){
        $items = $this->Category->all();
        if (!empty($_POST)) {
            $result = $this->Category->update($_GET['id'], [
                'titre' => $_POST['titre'],
            ]);
            unset($_POST);
            return header('Location: index.php?p=admin.categories.index');
        }
        $category = $this->Category->find($_GET['id']);
        $form = new BootstrapForm($category);
        $this->render('admin.categories.index', compact('form','items'));
    }

    public function delete(){
        if (!empty($_POST)) {
            $result = $this->Category->delete($_POST['id']);
            return header('Location: index.php?p=admin.categories.index');
        }
    }

}