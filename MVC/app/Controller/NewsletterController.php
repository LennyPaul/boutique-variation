<?php

namespace App\Controller;

use Core\Controller\Controller;
use \App;

class NewsletterController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Newsletter');


    }

    public function index(){
        
    }

    public function add(){
        if (!empty($_POST)) {

            $result = $this->Newsletter->create([
                'email' => $_POST['email'],
            ]);
            if($result){
                unset($_POST);
                header('Location: index.php');      
            }
        }
    }

}