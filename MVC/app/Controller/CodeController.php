<?php

namespace App\Controller;

use Core\Auth\DBAuth;
use Core\HTML\BootstrapForm;
use \App;

class CodeController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Code');
        $this->loadModel('Users');
   

    }

    public function index(){

        $form = new BootstrapForm();
        $codes = $this->Code->last();
        $user = $_SESSION['user'];
        $messages ='';
        if(!empty($_POST)){
            foreach ($codes as $code) {
               if($_POST['code']==$code->code){
                $messages = " <a href='#' >Voici le lien pour mint votre NFT</a> " ;
                    return  $this->render('compte.redeem', compact('form','user','messages'));
               }else{
                $messages =  '<p>Code Incorrect</p>';
                
               }
               
            }
        }
        
        $this->render('compte.redeem', compact('form','user','messages'));
    }


    
   


}